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

/**
 * Should be abstract some day, use classes like "\ManiaLib\Gui\Elements\Icons128x128_1" instead
 */
abstract class Icon extends Quad
{

	protected $style = Quad::Icons128x128_1;
	protected $subStyle = Icons128x128_1::United;

	function __construct($size = 7)
	{
		$this->sizeX = $size;
		$this->sizeY = $size;
	}

}

?>