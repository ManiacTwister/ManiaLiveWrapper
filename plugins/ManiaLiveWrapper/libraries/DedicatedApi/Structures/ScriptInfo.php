<?php
/**
 * @copyright   Copyright (c) 2009-2012 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 425 $:
 * @author      $Author: melot.philippe $:
 * @date        $Date: 2012-07-18 12:36:36 +0200 (mer., 18 juil. 2012) $:
 */

namespace DedicatedApi\Structures;

class ScriptInfo extends AbstractStructure
{

	public $name;
	public $compatibleMapTypes;
	public $description;
	public $version;
	public $paramDescs = array();

	static public function fromArray($array)
	{
		$object = parent::fromArray($array);

		if($object->paramDescs)
		{
			$object->paramDescs = ScriptSettings::fromArrayOfArray($object->paramDescs);
		}
		return $object;
	}

}

?>