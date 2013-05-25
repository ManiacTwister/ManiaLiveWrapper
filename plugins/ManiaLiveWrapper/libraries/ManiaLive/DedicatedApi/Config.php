<?php
/**
 * ManiaLive - TrackMania dedicated server manager in PHP
 * 
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 425 $:
 * @author      $Author: melot.philippe $:
 * @date        $Date: 2012-07-18 12:36:36 +0200 (mer., 18 juil. 2012) $:
 */

namespace ManiaLive\DedicatedApi;

class Config extends \ManiaLib\Utils\Singleton
{
	public $host = '127.0.0.1';
	public $port = 5000;
	public $user = 'SuperAdmin';
	public $password = 'SuperAdmin';
	public $timeout = 5;
}

?>