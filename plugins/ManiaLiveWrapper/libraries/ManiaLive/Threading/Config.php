<?php
/**
 * ManiaLive - TrackMania dedicated server manager in PHP
 *
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 314 $:
 * @author      $Author: martin.gwendal $:
 * @date        $Date: 2012-01-03 14:16:20 +0100 (mar., 03 janv. 2012) $:
 */

namespace ManiaLive\Threading;

/**
 * @author Florian Schnell
 */
class Config extends \ManiaLib\Utils\Singleton
{
	public $phpPath;
	public $enabled = false;
	public $busyTimeout = 20;
	public $maxTries = 3;
	public $sequentialTimeout = 1;

	function __construct()
	{
		if(stripos(PHP_OS, 'WIN') === 0)
			$this->phpPath = 'php.exe';
		else
			$this->phpPath = '`which php`';
	}
}

?>