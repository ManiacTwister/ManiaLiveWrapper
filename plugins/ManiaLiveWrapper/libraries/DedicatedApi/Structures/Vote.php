<?php
/**
 * Represents a Dedicated TrackMania Server Vote
 * ManiaLive - TrackMania dedicated server manager in PHP
 * 
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 425 $:
 * @author      $Author: melot.philippe $:
 * @date        $Date: 2012-07-18 12:36:36 +0200 (mer., 18 juil. 2012) $:
 */
namespace DedicatedApi\Structures;

class Vote extends AbstractStructure
{
	const STATE_NEW = 'NewVote';
	const STATE_CANCELLED = 'VoteCancelled';
	const STATE_PASSED = 'VotePassed';
	const STATE_FAILED = 'VoteFailed';
	
	public $status;
	public $callerLogin;
	public $cmdName;
	public $cmdParam;
}
?>