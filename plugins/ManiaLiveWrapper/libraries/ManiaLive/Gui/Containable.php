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

namespace ManiaLive\Gui;

/**
 * This will provide automatic call of the onIsAdded method
 * when stored in an object of type Container.
 */
interface Containable
{
	/**
	 * This method is invoked when adding an object of this type
	 * to a Container class object.
	 * @param Container $target Reference to the target Container.
	 */
	function onIsAdded(Container $target);
	
	/**
	 * 
	 * Enter description here ...
	 * @param $target
	 */
	function onIsRemoved(Container $target);
}

?>