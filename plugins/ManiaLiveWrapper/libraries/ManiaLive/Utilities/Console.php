<?php

/**
 * ManiaLive - TrackMania dedicated server manager in PHP
 *
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 515 $:
 * @author      $Author: melot.philippe@gmail.com $:
 * @date        $Date: 2013-04-16 11:41:47 +0200 (mar., 16 avr. 2013) $:
 */

namespace ManiaLive\Utilities;

use ManiaLive\Config\Config;
use DedicatedApi\Structures\Player;

abstract class Console
{
	public static function println($string)
	{
		Logger::runtime($string);
		if(Config::getInstance()->verbose)
			echo '[ManiaLiveWrapper] '.$string.PHP_EOL;
	}

	public static function print_rln($string)
	{
		Logger::runtime($string);
		if(Config::getInstance()->verbose)
			echo print_r($string, true);
	}

	public static function getDatestamp()
	{
		return date("H:i:s");
	}

	public static function printlnFormatted($string)
	{
		$line = '['.self::getDatestamp().'] '.$string;
		self::println($line);
	}

	public static function printDebug($string)
	{
		if(Config::getInstance()->debug)
		{
			Logger::debug($string);
		}
	}

	public static function printPlayerBest(Player $player)
	{
		$str = array();
		$str[] = '[Time by '.$player->login.' : '.$player->bestTime.']';
		foreach($player->bestCheckpoints as $i => $time)
		{
			$str[] = '  [Checkpoint #'.$i.': '.$time.']';
		}
		Console::println(implode(PHP_EOL, $str));
	}

	public static function printPlayerScore(Player $player)
	{
		$str = array();
		$str[] = '[Score by '.$player->login.' : '.$player->score.']';
		foreach($player->bestCheckpoints as $i => $score)
		{
			$str[] = '  [Checkpoint #'.$i.': '.$score.']';
		}
		Console::println(implode(PHP_EOL, $str));
	}
}

?>