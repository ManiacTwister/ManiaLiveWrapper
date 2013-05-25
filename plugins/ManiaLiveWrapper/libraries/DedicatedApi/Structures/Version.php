<?php
/**
 * Represents a Dedicated TrackMania Server Version
 * ManiaLive - TrackMania dedicated server manager in PHP
 * 
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 429 $:
 * @author      $Author: martin.gwendal $:
 * @date        $Date: 2012-07-20 12:13:53 +0200 (ven., 20 juil. 2012) $:
 */
namespace DedicatedApi\Structures;

class Version extends AbstractStructure
{
	public $name;
	public $titleId;
	public $version;
	public $build;
	public $apiVersion;
}
?>