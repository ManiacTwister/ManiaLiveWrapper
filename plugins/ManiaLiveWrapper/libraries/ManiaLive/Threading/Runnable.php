<?php
/**
 * ManiaLive - TrackMania dedicated server manager in PHP
 * 
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 301 $:
 * @author      $Author: martin.gwendal $:
 * @date        $Date: 2011-12-13 18:47:54 +0100 (mar., 13 déc. 2011) $:
 */

namespace ManiaLive\Threading;

/**
 * Jobs need to implement this interface before you can add them to the ThreadPool!
 */
interface Runnable
{
	/**
	 * This method will be run on another process.
	 */
	function run();
}

?>