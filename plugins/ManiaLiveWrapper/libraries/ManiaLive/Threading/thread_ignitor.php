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
 * This is what is run on each new process
 * that is being created by the ThreadPool.
 */
// include the __autoload function
require_once __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'autoload.php';

Thread::getInstance()->run();

?>