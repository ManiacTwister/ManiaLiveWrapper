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

namespace ManiaLive\Event;

abstract class Event
{
	const ALL = 0xFFFFFFFF;
	
	protected $onWhat;
	
	final static function getClass()
	{
		return get_called_class();
	}
	
	function __construct($onWhat)
	{
		$this->onWhat = $onWhat;
	}
	
	final function getMethod()
	{
		return $this->onWhat;
	}
	
	abstract function fireDo($listener);
}

?>