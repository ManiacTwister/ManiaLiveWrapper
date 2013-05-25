<?php
/**
 * ManiaLib - Lightweight PHP framework for Manialinks
 * 
 * @see         http://code.google.com/p/manialib/
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 697 $:
 * @author      $Author: martin.gwendal $:
 * @date        $Date: 2012-05-03 16:29:23 +0200 (jeu., 03 mai 2012) $:
 */

namespace ManiaLib\Gui\Elements;

class Quad extends \ManiaLib\Gui\Element
{
	const BgRaceScore2 = 'BgRaceScore2';
	const Bgs1 = 'Bgs1';
	const Bgs1InRace = 'Bgs1InRace';
	const BgsChallengeMedals = 'BgsChallengeMedals';
	const BgsPlayerCard = 'BgsPlayerCard';
	const Copilot = 'Copilot';
	const Icons128x128_1 = 'Icons128x128_1';
	const Icons128x128_Blink = 'Icons128x128_Blink';
	const Icons128x32_1 = 'Icons128x32_1';
	const Icons321Go = '321Go';
	const Icons64x64_1 = 'Icons64x64_1';
	const ManiaPlanetLogos = 'ManiaPlanetLogos';
	const MedalsBig = 'MedalsBig';
	const UIConstructionSimple_Buttons = 'UIConstructionSimple_Buttons';

	protected $xmlTagName = 'quad';
	protected $style = self::Bgs1;
	protected $subStyle = \ManiaLib\Gui\Elements\Bgs1::BgWindow2;

}

?>