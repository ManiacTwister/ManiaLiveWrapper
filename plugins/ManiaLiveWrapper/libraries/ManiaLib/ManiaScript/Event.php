<?php
/**
 * ManiaLib - Lightweight PHP framework for Manialinks
 * 
 * @see         http://code.google.com/p/manialib/
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 771 $:
 * @author      $Author: baptiste33 $:
 * @date        $Date: 2013-01-03 15:48:47 +0100 (jeu., 03 janv. 2013) $:
 */

namespace ManiaLib\ManiaScript;

use ManiaLib\Gui\Manialink;

/**
 * @see http://code.google.com/p/manialib/source/browse/trunk/media/maniascript/manialib.xml
 */
abstract class Event
{
	const mouseClick = 'CMlEvent::Type::MouseClick';
	const mouseOver = 'CMlEvent::Type::MouseOver';
	const mouseOut = 'CMlEvent::Type::MouseOut';
	const keyPress = 'CMlEvent::Type::KeyPress';

	static function addListener($controlId, $eventType, array $action)
	{
		$script = 'manialib_event_add_listener("%s", %s, %s); ';
		$controlId = Tools::escapeString($controlId);
		$action = Tools::array2maniascript($action);
		$script = sprintf($script, $controlId, $eventType, $action);
		Manialink::appendScript($script);
	}

}

?>