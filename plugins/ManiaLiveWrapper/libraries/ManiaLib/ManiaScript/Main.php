<?php
/**
 * ManiaLib - Lightweight PHP framework for Manialinks
 * 
 * @see         http://code.google.com/p/manialib/
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 642 $:
 * @author      $Author: maximeraoust $:
 * @date        $Date: 2012-01-11 11:54:49 +0100 (mer., 11 janv. 2012) $:
 */

namespace ManiaLib\ManiaScript;

use ManiaLib\Gui\Manialink;

/**
 * @see http://code.google.com/p/manialib/source/browse/trunk/media/maniascript/manialib.xml
 */
abstract class Main
{

	static function begin()
	{
		Manialink::appendScript('main() { ');
	}

	static function loop()
	{
		Manialink::appendScript('manialib_main_loop();');
	}

	static function end()
	{
		Manialink::appendScript('}');
	}

}

?>