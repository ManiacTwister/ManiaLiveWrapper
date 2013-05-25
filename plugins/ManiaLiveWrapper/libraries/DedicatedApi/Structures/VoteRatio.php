<?php
/**
 * Represents a Dedicated TrackMania Server Vote
 * ManiaLive - TrackMania dedicated server manager in PHP
 *
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 524 $:
 * @author      $Author: baptiste33@gmail.com $:
 * @date        $Date: 2013-04-26 10:41:45 +0200 (ven., 26 avr. 2013) $:
 */
namespace DedicatedApi\Structures;

class VoteRatio extends AbstractStructure
{
	public $command;
	public $param;
	public $ratio;

	public function __construct($command = null, $ratio = null)
	{
		$this->command = $command;
		$this->ratio = $ratio;
	}
}
?>