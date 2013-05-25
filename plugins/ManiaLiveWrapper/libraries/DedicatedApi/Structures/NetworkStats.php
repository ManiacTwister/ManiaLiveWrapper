<?php
/**
 * Represents the Networks Statistics of a Dedicated TrackMania Server
 * ManiaLive - TrackMania dedicated server manager in PHP
 * 
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 425 $:
 * @author      $Author: melot.philippe $:
 * @date        $Date: 2012-07-18 12:36:36 +0200 (mer., 18 juil. 2012) $:
 */
namespace DedicatedApi\Structures;

class NetworkStats extends AbstractStructure
{
	public $uptime;
	public $nbrConnection;
	public $meanConnectionTime;
	public $meanNbrPlayer;
	public $recvNetRate;
	public $sendNetRate;
	public $totalReceivingSize;
	public $totalSendingSize;
	public $playerNetInfos;

	static public function fromArray($array)
	{
		$object = parent::fromArray($array);
		$object->playerNetInfos = Player::fromArrayOfArray($object->playerNetInfos);
		return $object;
	}
}