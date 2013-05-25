<?php
/**
 * ManiaLive - TrackMania dedicated server manager in PHP
 * 
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 280 $:
 * @author      $Author: martin.gwendal $:
 * @date        $Date: 2011-11-07 19:21:52 +0100 (lun., 07 nov. 2011) $:
 */

namespace ManiaLive\Features\Tick;

class Event extends \ManiaLive\Event\Event
{
	const ON_TICK = 1;
	
	function __construct($onWhat = self::ON_TICK)
	{
		parent::__construct($onWhat);		
	}
	
	function fireDo($listener)
	{
		$listener->onTick();
	}
}

?>