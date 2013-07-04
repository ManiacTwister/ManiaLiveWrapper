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

define('APP_ROOT', __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR);

if(!defined('MANIALIB_APP_PATH'))
{
	define('MANIALIB_APP_PATH', __DIR__.'/../');
}

spl_autoload_register(
		function ($className)
		{
			$className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
			$path = APP_ROOT.'libraries'.DIRECTORY_SEPARATOR.$className.'.php';
			if(file_exists($path))
				require_once $path;
		}
);
?>