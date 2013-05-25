<?php
/**
 * Represents the Options of a TrackMania Dedicated Server
 * ManiaLive - TrackMania dedicated server manager in PHP
 * 
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 486 $:
 * @author      $Author: martin.gwendal $:
 * @date        $Date: 2013-02-27 15:28:58 +0100 (mer., 27 févr. 2013) $:
 */
namespace DedicatedApi\Structures;

class ServerOptions extends AbstractStructure
{
	public $name;
	public $comment;
	public $password;
	public $passwordForSpectator;
	public $hideServer;
	public $currentMaxPlayers;
	public $nextMaxPlayers;
	public $currentMaxSpectators;
	public $nextMaxSpectators;
	public $isP2PUpload;
	public $isP2PDownload;
	public $currentLadderMode;
	public $nextLadderMode;
	public $ladderServerLimitMax;
	public $ladderServerLimitMin;
	public $currentVehicleNetQuality;
	public $nextVehicleNetQuality;
	public $currentCallVoteTimeOut;
	public $nextCallVoteTimeOut;
	public $callVoteRatio;
	public $allowMapDownload;
	public $autoSaveReplays;
	public $autoSaveValidationReplays;
	public $refereePassword;
	public $refereeMode;
	public $currentUseChangingValidationSeed;
	public $useChangingValidationSeed;
	public $nextUseChangingValidationSeed;
	public $clientInputsMaxLatency;
	public $keepPlayerSlots;
}