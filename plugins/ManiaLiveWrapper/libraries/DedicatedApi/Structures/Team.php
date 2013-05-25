<?php
/**
 * ManiaLive - TrackMania dedicated server manager in PHP
 * 
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 520 $:
 * @author      $Author: melot.philippe@gmail.com $:
 * @date        $Date: 2013-04-22 15:08:07 +0200 (lun., 22 avr. 2013) $:
 */

namespace DedicatedApi\Structures;

class Team extends AbstractStructure
{
	public $name;
	public $zonePath;
	public $city;
	public $emblemUrl;
	public $huePrimary;
	public $hueSecondary;
	public $rGB;
	public $clubLinkUrl;
}

?>