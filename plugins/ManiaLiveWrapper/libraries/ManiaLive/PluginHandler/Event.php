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

namespace ManiaLive\PluginHandler;

class Event extends \ManiaLive\Event\Event
{
	const ON_PLUGIN_LOADED   = 1;
	const ON_PLUGIN_UNLOADED = 2;
	
	protected $pluginId;
	
	function __construct($onWhat, $pluginId)
	{
		parent::__construct($onWhat);
		$this->pluginId = $pluginId;
	}
	
	function fireDo($listener)
	{
		switch($this->onWhat)
		{
			case self::ON_PLUGIN_LOADED: $listener->onPluginLoaded($this->pluginId); break;
			case self::ON_PLUGIN_UNLOADED: $listener->onPluginUnloaded($this->pluginId); break;
		}
	}
}
?>