<?php
/**
 * Profiler Plugin - Show statistics about ManiaLive
 *
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 280 $:
 * @author      $Author: martin.gwendal $:
 * @date        $Date: 2011-11-07 19:21:52 +0100 (lun., 07 nov. 2011) $:
 */

namespace ManiaLivePlugins\Standard\Profiler;

/**
 * Description of Listener
 */
interface Listener extends \ManiaLive\Event\Listener
{
	function onNewCpuValue($newValue);
	function onNewMemoryValue($newValue);
	function onNewNetworkValue($newValue);
}

?>