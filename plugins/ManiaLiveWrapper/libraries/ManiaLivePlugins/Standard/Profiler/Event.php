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
 * Description of Event
 */
class Event extends \ManiaLive\Event\Event
{
	const ON_NEW_CPU_VALUE     = 1;
	const ON_NEW_MEMORY_VALUE  = 2;
	const ON_NEW_NETWORK_VALUE = 4;
	
	protected $newValue;
	
	function __construct($onWhat, $newValue)
	{
		parent::__construct($onWhat);
		$this->newValue = $newValue;
	}
	
	function fireDo($listener)
	{
		switch($this->onWhat)
		{
			case self::ON_NEW_CPU_VALUE: $listener->onNewCpuValue($this->newValue); break;
			case self::ON_NEW_MEMORY_VALUE: $listener->onNewMemoryValue($this->newValue); break;
			case self::ON_NEW_NETWORK_VALUE: $listener->onNewNetworkValue($this->newValue); break;
		}
	}
}

?>