<?php
/**
 * ManiaLib - Lightweight PHP framework for Manialinks
 * 
 * @see         http://code.google.com/p/manialib/
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 590 $:
 * @author      $Author: maximeraoust $:
 * @date        $Date: 2011-12-27 19:40:38 +0100 (mar., 27 déc. 2011) $:
 */

namespace ManiaLib\Utils;

abstract class Singleton
{

	protected static $instances = array();

	static function getInstance()
	{
		$class = get_called_class();
		if(!isset(self::$instances[$class]))
		{
			self::$instances[$class] = new $class();
		}
		return self::$instances[$class];
	}

	protected function __construct()
	{
		
	}

	final protected function __clone()
	{
		
	}

}

?>