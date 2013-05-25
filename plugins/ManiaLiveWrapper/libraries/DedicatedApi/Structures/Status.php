<?php
/**
 * Represents the status of a Dedicated TrackMania Server
 * ManiaLive - TrackMania dedicated server manager in PHP
 *
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 425 $:
 * @author      $Author: melot.philippe $:
 * @date        $Date: 2012-07-18 12:36:36 +0200 (mer., 18 juil. 2012) $:
 */
namespace DedicatedApi\Structures;

class Status extends AbstractStructure
{
	const UNKNOWN         = 0;
	const WAITING         = 1;
	const LAUNCHING       = 2;
	const SYNCHRONIZATION = 3;
	const PLAY            = 4;
	const EXITING         = 6;

	public $code;
	public $name;
}