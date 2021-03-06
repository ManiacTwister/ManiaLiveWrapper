<?php
/**
 * ManiaLib - Lightweight PHP framework for Manialinks
 *
 * @see         http://code.google.com/p/manialib/
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 792 $:
 * @author      $Author: baptiste33 $:
 * @date        $Date: 2013-02-15 16:37:05 +0100 (ven., 15 févr. 2013) $:
 */

namespace ManiaLib\ManiaScript;

/**
 * ManiaScript Framework Action helper.
 *
 * @see http://code.google.com/p/manialib/source/browse/trunk/media/maniascript/manialib.xml
 */
abstract class Action
{
	const manialink = 'manialink';
	const manialinkid = 'manialinkid';
	const external = 'external';
	const externalid = 'externalid';
	const gotolink = 'goto';
	const gotoid = 'gotoid';
	const hide = 'hide';
	const show = 'show';
	const toggle = 'toggle';
	const posx = 'posx';
	const posy = 'posy';
	const posz = 'posz';
	const scale = 'scale';
	const absolute_posx = 'absolute_posx';
	const absolute_posy = 'absolute_posy';
	const absolute_posz = 'absolute_posz';
	const set_text = 'set_text';
	const set_entry_value = 'set_entry_value';
	const set_image = 'set_image';
	const disable_links = 'disable_links';
	const enable_links = 'enable_links';
	const none = 'none';
}

?>