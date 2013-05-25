<?php
/**
 * ManiaLib - Lightweight PHP framework for Manialinks
 * 
 * @see         http://code.google.com/p/manialib/
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 776 $:
 * @author      $Author: melot.philippe $:
 * @date        $Date: 2013-01-15 15:45:53 +0100 (mar., 15 janv. 2013) $:
 */

namespace ManiaLib\Gui\Elements;

class Button extends \ManiaLib\Gui\Elements\Label
{
	const CardButtonMedium = 'CardButtonMedium';
	const CardButtonMediumWide = 'CardButtonMediumWide';
	const CardButtonSmallWide = 'CardButtonSmallWide';
	const CardButtonSmall = 'CardButtonSmall';
	
	const CardMain_Tool = 'CardMain_Tool';
	const CardMain_Quit = 'CardMain_Quit';
	const CardMain_Header = 'CardMain_Header';
	
	const CardButtonMediumL = 'CardButtonMediumL';
	const CardButtonMediumS = 'CardButtonMediumS';
	const CardButtonMediumXL = 'CardButtonMediumXL';
	const CardButtonMediumXS = 'CardButtonMediumXS';
	const CardButtonMediumXXL = 'CardButtonMediumXXL';
	const CardButtonMediumXXXL = 'CardButtonMediumXXXL';
	const CardButtonSmallL = 'CardButtonSmallL';
	const CardButtonSmallS = 'CardButtonSmallS';
	const CardButtonSmallXL = 'CardButtonSmallXL';
	const CardButtonSmallXS = 'CardButtonSmallXS';
	const CardButtonSmallXXL = 'CardButtonSmallXXL';
	const CardButtonSmallXXXL = 'CardButtonSmallXXXL';

	protected $subStyle = null;
	protected $style = self::CardButtonMedium;

	function __construct($sizeX = 35, $sizeY = 7)
	{
		parent::__construct($sizeX, $sizeY);
	}

}

?>