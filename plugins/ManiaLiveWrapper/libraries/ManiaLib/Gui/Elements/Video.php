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

namespace ManiaLib\Gui\Elements;

class Video extends \ManiaLib\Gui\Elements\Audio
{

	protected $xmlTagName = 'video';

	function __construct($sx = 32, $sy = 24)
	{
		$this->sizeX = $sx;
		$this->sizeY = $sy;
	}

}

?>