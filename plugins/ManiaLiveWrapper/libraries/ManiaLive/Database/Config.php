<?php
/**
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @version     $Revision: 439 $:
 * @author      $Author: melot.philippe@gmail.com $:
 * @date        $Date: 2012-08-16 13:38:52 +0200 (jeu., 16 août 2012) $:
 */

namespace ManiaLive\Database;

class Config extends \ManiaLib\Utils\Singleton
{
	public $enable = true;
	public $host = '127.0.0.1';
	public $port = 3306;
	public $username = 'root';
	public $password = '';
	public $database = 'manialive';
	public $type = 'MySQL';
}

?>
