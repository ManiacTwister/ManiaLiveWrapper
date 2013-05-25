<?php

/**
 * ManiaLive - TrackMania dedicated server manager in PHP
 *
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 318 $:
 * @author      $Author: martin.gwendal $:
 * @date        $Date: 2012-01-03 14:22:17 +0100 (mar., 03 janv. 2012) $:
 */

/**
 * This file replaces the bootstrapper.php from ManiaLive 
 */

Aseco::registerEvent('onSync',                    'mlw_sync');
Aseco::registerEvent('onEverySecond',             'mlw_tick');
Aseco::registerEvent('onCallbacksReceived',       'mlw_callbacksReceived');


define('APP_ROOT', __DIR__.DIRECTORY_SEPARATOR.'ManiaLiveWrapper'.DIRECTORY_SEPARATOR);
spl_autoload_register(
    function ($className) {
      // TODO: Maybe limit to actual manialive requests! (startswith libraries/*)
      $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
      $path = APP_ROOT.'libraries'.DIRECTORY_SEPARATOR.$className.'.php';
      if(file_exists($path))
        require_once $path;
      else
        echo '[ManiaLiveWrapper] [WARNING] Requested include file is missing: '.$path."\n";
    }
);


class ManiaLiveWrapper {
  public $aseco, $xml, $debug;
  public $use_xaseco_database = false;
  public $version = 0.1;

  function __construct($aseco, $config = "manialive.xml", $debug=false) {
    $this->aseco = $aseco;
    $this->xml = simplexml_load_file($config);
    $this->use_xaseco_database = (strtoupper($this->xml->use_xaseco_database) == 'TRUE' ? true : false);
    $this->sync_admins = (strtoupper($this->xml->sync_admins) == 'TRUE' ? true : false);
    $this->debug = $debug;
  }

  function load() {
    echo '
     _|      _|                      _|            _|        _|
     _|_|  _|_|    _|_|_|  _|_|_|          _|_|_|  _|            _|    _|    _|_|
     _|  _|  _|  _|    _|  _|    _|  _|  _|    _|  _|        _|  _|    _|  _|_|_|_|
     _|      _|  _|    _|  _|    _|  _|  _|    _|  _|        _|  _|  _|    _|
     _|      _|    _|_|_|  _|    _|  _|    _|_|_|  _|_|_|_|  _|    _|        _|_|_|
                                                                             
         _|          _|                                                              
         _|          _|  _|  _|_|    _|_|_|  _|_|_|    _|_|_|      _|_|    _|  _|_|  
         _|    _|    _|  _|_|      _|    _|  _|    _|  _|    _|  _|_|_|_|  _|_|      
           _|  _|  _|    _|        _|    _|  _|    _|  _|    _|  _|        _|        
             _|  _|      _|          _|_|_|  _|_|_|    _|_|_|      _|_|_|  _|        
                                             _|        _|                            
                                             _|        _|                            
    ';
    echo '               -----------------------------------------------------              '.PHP_EOL;
    echo '                      ManiaLiveWrapper v'.$this->version.' by ManiacTwister loaded!                  '.PHP_EOL;
    echo '                   -----------------------------------------------------              '.PHP_EOL;

    ManiaLiveApplication\Application::getInstance()->run();
    $this->configure();
  }

  function configure() {
    if($this->sync_admins) {
      $admins = 
      array_unique(
        array_merge(
          (array_key_exists('MPLOGIN', $this->aseco->admin_list) ? $this->aseco->admin_list['MPLOGIN'] : array()),
          (array_key_exists('MPLOGIN', $this->aseco->masteradmin_list) ? $this->aseco->masteradmin_list['MPLOGIN'] : array())
        )
      );

      foreach($admins as $login) {
        \ManiaLive\Application\Config::getInstance()->admins[] = $login;
      }
    }
  }

  function onCallbacksReceived($calls) {
    if($this->debug) {
      $this->aseco->console_text('[ManiaLiveWrapper] [DEBUG] Callbacks received');
    }

    ManiaLiveApplication\Application::getInstance()->main($calls);
  }

  function onTick() {
    ManiaLiveApplication\Application::getInstance()->main(array());
  }

}

$mlwrapper = '';

function mlw_sync($aseco) {
  global $mlwrapper;
  $mlwrapper = new ManiaLiveWrapper($aseco);
  $mlwrapper->load();

  /* Thats a really dirty hack:
   * Because of some manialive plugin authors haven't understood for what namespaces are, we have to empty
   * known conflicting files.
   */
  $found = find_files("gbxdatafetcher.inc.php");
  foreach($found as $file) {
    $f = @fopen($file, "r+");
    if ($f !== false) {
        ftruncate($f, 0);
        fclose($f);
    }
  }
}

function mlw_callbacksReceived($aseco, $calls) {
  global $mlwrapper;
  $mlwrapper->onCallbacksReceived($calls);
}

function mlw_tick($aseco) {
  global $mlwrapper;
  $mlwrapper->onTick();
}


function find_files($filename, $directory=false) {
  if(!$directory)
    $directory = ".".DIRECTORY_SEPARATOR."plugins".DIRECTORY_SEPARATOR."ManiaLiveWrapper";

  $found = array();
  try {
    foreach(new recursiveIteratorIterator(new recursiveDirectoryIterator($directory)) as $file) {
      if($file->getFileName() == $filename)
        $found[] = $file->getPathname();
      }
      return $found;
  }
  catch(Exception $e) {
    return $found;
  }
  return $found;
}

?>