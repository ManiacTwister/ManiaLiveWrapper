<?php
/**
 * ManiaLive - TrackMania dedicated server manager in PHP
 *
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 499 $:
 * @author      $Author: melot.philippe@gmail.com $:
 * @date        $Date: 2013-04-03 12:57:22 +0200 (mer., 03 avr. 2013) $:
 */

namespace ManiaLive\Config;

class Config extends \ManiaLib\Utils\Singleton
{
	// base path for logging
	public $logsPath;
	public $logsPrefix = 'manialive';
	// enable runtime logging?
	public $runtimeLog = false;
	// log all errors from all instances?
	public $globalErrorLog = false;
	public $maxErrorCount = false;
	public $dedicatedPath = APP_ROOT;
	//Set to true to disable the updater
	public $lanMode = false;
	public $debug = false;
	public $verbose = true;
	public $enableToggleGUI = true;

	function __construct()
	{
		$this->logsPath = APP_ROOT.'logs';
	}
}

?>
