<?php
/**
 * ManiaLive - TrackMania dedicated server manager in PHP
 * 
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 526 $:
 * @author      $Author: melot.philippe@gmail.com $:
 * @date        $Date: 2013-04-29 09:31:32 +0200 (lun., 29 avr. 2013) $:
 */

namespace ManiaLive\Features\Admin;

abstract class AdminGroup
{
	/**
	 * Check if the given login is an admin or not
	 * @param string $login
	 * @return bool
	 */
	public static function contains($login)
	{
		$login = explode('/', $login, 1);
		return \ManiaLive\Application\Config::getInstance()->admins && in_array($login[0], \ManiaLive\Application\Config::getInstance()->admins) !== false;
	}

	/**
	 * Return the list of Admins' login
	 * @return array
	 */
	public static function get()
	{
		return \ManiaLive\Application\Config::getInstance()->admins;
	}
}

?>