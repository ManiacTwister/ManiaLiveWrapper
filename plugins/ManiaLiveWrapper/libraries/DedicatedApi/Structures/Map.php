<?php
/**
 * Represents a Dedicated TrackMania Server Map
 * ManiaLive - TrackMania dedicated server manager in PHP
 * 
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 425 $:
 * @author      $Author: melot.philippe $:
 * @date        $Date: 2012-07-18 12:36:36 +0200 (mer., 18 juil. 2012) $:
 */
namespace DedicatedApi\Structures;

class Map extends AbstractStructure
{
	public $uId;
	public $name;
	public $fileName;
	public $author;
	public $environnement;
	public $mood;
	public $bronzeTime;
	public $silverTime;
	public $goldTime;
	public $authorTime;
	public $copperPrice;
	public $lapRace;
	public $nbLaps;
	public $nbCheckpoints;
	public $mapType;
	public $mapStyle;
}