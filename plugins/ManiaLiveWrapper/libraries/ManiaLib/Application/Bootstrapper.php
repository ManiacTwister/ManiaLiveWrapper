<?php
/**
 * ManiaLib - Lightweight PHP framework for Manialinks
 * 
 * @see         http://code.google.com/p/manialib/
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 676 $:
 * @author      $Author: maximeraoust $:
 * @date        $Date: 2012-03-02 16:31:13 +0100 (ven., 02 mars 2012) $:
 */

namespace ManiaLib\Application;

abstract class Bootstrapper
{

	static $errorReporting = E_ALL;
	static $errorHandlingClass = '\ManiaLib\Application\ErrorHandling';
	static $errorHandler = 'exceptionErrorHandler';
	static $fatalExceptionHandler = 'fatalExceptionHandler';

	final static function run()
	{
		error_reporting(static::$errorReporting);
		set_error_handler(array(static::$errorHandlingClass, static::$errorHandler));

		try
		{
			static::onDispatch();
		}
		catch(\Exception $exception)
		{
			call_user_func(
				array(
				static::$errorHandlingClass,
				static::$fatalExceptionHandler), $exception);
		}
	}

	static protected function onDispatch()
	{
		\ManiaLib\Application\ConfigLoader::load();
		Dispatcher::getInstance()->run();
	}

}

?>