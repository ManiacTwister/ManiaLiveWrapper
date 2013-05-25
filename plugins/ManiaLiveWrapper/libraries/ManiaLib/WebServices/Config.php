<?php
/**
 * ManiaLib - Lightweight PHP framework for Manialinks
 * 
 * @see         http://code.google.com/p/manialib/
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 732 $:
 * @author      $Author: maximeraoust $:
 * @date        $Date: 2012-07-09 16:55:18 +0200 (lun., 09 juil. 2012) $:
 */

namespace ManiaLib\WebServices;

/**
 * Configure your Maniaplanet Web Services API credentials with this class
 * so that they are automatically loaded when you instanciate one of the SDK 
 * classes.
 * 
 * @method \ManiaLib\WebServices\Config getInstance()
 */
class Config extends \ManiaLib\Utils\Singleton
{

	public $username;
	public $password;
	public $scope;

}

?>