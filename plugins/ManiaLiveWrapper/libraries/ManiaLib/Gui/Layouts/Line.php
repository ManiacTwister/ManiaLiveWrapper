<?php
/**
 * ManiaLib - Lightweight PHP framework for Manialinks
 * 
 * @see         http://code.google.com/p/manialib/
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 590 $:
 * @author      $Author: maximeraoust $:
 * @date        $Date: 2011-12-27 19:40:38 +0100 (mar., 27 déc. 2011) $:
 */

namespace ManiaLib\Gui\Layouts;

/**
 * Elements are added at the right of their predecessor
 */
class Line extends AbstractLayout
{

	function postFilter(\ManiaLib\Gui\Component $item)
	{
		$this->xIndex += $item->getRealSizeX() + $this->marginWidth;
	}

}

?>