<?php
/**
 * ManiaLive - TrackMania dedicated server manager in PHP
 * 
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 344 $:
 * @author      $Author: martin.gwendal $:
 * @date        $Date: 2012-03-20 16:36:40 +0100 (mar., 20 mars 2012) $:
 */

namespace ManiaLive\Features\Tick;

use ManiaLive\Event\Dispatcher;
use ManiaLive\Application\Adapter as AppAdapter;
use ManiaLive\Application\Event as AppEvent;

class Ticker extends AppAdapter
{
	protected $time;
	
	function __construct()
	{
		$this->time = time();
		Dispatcher::register(AppEvent::getClass(), $this, AppEvent::ON_PRE_LOOP);
	}
	
	function onPreLoop()
	{
		$time = time();
		if($time - $this->time >= 1)
		{
			$this->time = $time;
			Dispatcher::dispatch(new Event());
		}
	}
}

?>