<?php
/**
 * ManiaLive - TrackMania dedicated server manager in PHP
 * 
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 294 $:
 * @author      $Author: martin.gwendal $:
 * @date        $Date: 2011-12-08 19:20:04 +0100 (jeu., 08 déc. 2011) $:
 */

namespace ManiaLive\Gui\Controls;

/**
 * Frame element will move all its content
 * when position changes.
 * You can also apply a layout that is applied
 * to all its subcomponents.
 * 
 * @author Florian Schnell
 */
class Frame extends \ManiaLive\Gui\Control
{
	function __construct($posX=0, $posY=0, $layout=null)
	{
		$this->posX = $posX;
		$this->posY = $posY;
		$this->layout = $layout;
	}
	
	protected function onResize($oldX, $oldY)
	{
		if($this->layout)
			$this->layout->setSize($this->sizeX, $this->sizeY);
	}
}

?>