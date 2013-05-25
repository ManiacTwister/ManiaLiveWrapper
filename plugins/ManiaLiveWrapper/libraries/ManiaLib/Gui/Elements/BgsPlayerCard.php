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

class BgsPlayerCard extends Quad
{

	protected $style = Quad::BgsPlayerCard;
	protected $subStyle = self::BgActivePlayerCard;

	const BgActivePlayerCard = 'BgActivePlayerCard';
	const BgActivePlayerName = 'BgActivePlayerName';
	const BgActivePlayerScore = 'BgActivePlayerScore';
	const BgCard = 'BgCard';
	const BgCardSystem = 'BgCardSystem';
	const BgMediaTracker = 'BgMediaTracker';
	const BgPlayerCardBig = 'BgPlayerCardBig';
	const BgPlayerCardSmall = 'BgPlayerCardSmall';
	const BgPlayerCard = 'BgPlayerCard';
	const BgPlayerName = 'BgPlayerName';
	const BgPlayerScore = 'BgPlayerScore';
	const BgRacePlayerLine = 'BgRacePlayerLine';
	const BgRacePlayerName = 'BgRacePlayerName';
	const ListFocus = 'ListFocus';
	const ProgressBar = 'ProgressBar';
}

?>