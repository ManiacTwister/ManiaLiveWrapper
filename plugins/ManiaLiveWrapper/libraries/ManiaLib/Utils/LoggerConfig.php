<?php
/**
 * ManiaLib - Lightweight PHP framework for Manialinks
 * 
 * @see         http://code.google.com/p/manialib/
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 635 $:
 * @author      $Author: maximeraoust $:
 * @date        $Date: 2012-01-10 15:44:28 +0100 (mar., 10 janv. 2012) $:
 */

namespace ManiaLib\Utils;

/**
 * @method \ManiaLib\Utils\LoggerConfig getInstance()
 */
class LoggerConfig extends \ManiaLib\Utils\Singleton
{

	public $path;
	public $prefix;

	function __construct()
	{
		$this->path = MANIALIB_APP_PATH.'logs/';
	}

}

?>