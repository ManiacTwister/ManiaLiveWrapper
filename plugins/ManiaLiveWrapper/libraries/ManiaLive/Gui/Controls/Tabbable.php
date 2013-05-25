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

namespace ManiaLive\Gui\Controls;

/**
 * Extend this to build your own tabs, that you can later add to a tabbed pane.
 */
abstract class Tabbable extends \ManiaLive\Gui\Control
{
	protected $title;
	
	function setTitle($title)
	{
		$this->title = $title;
	}
	
	function getTitle()
	{
		return $this->title;
	}
	
	function onActivate() {}
	
	function onDeactivate() {}
}

?>