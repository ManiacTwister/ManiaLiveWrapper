<?php
/**
 * ManiaLive - TrackMania dedicated server manager in PHP
 * 
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 440 $:
 * @author      $Author: martin.gwendal $:
 * @date        $Date: 2012-08-17 12:03:09 +0200 (ven., 17 août 2012) $:
 */

namespace ManiaLive\Database\SQLite;

class RecordSet extends \ManiaLive\Database\RecordSet
{
	const FETCH_ASSOC = SQLITE3_ASSOC;
	const FETCH_NUM = SQLITE3_NUM;
	const FETCH_BOTH = SQLITE3_BOTH;
	
	/** @var \SQLite3Result */
	protected $result;
	/** @var bool */
	protected $recordAvailable;
	
	function __construct($result)
	{
		$this->result = $result;
		$this->recordAvailable = $this->result->fetchArray() !== false;
		$this->result->reset();
	}
	
	function fetchRow()
	{
		return $this->result->fetchArray(self::FETCH_NUM);
	}
	
	function fetchAssoc()
	{
		return $this->result->fetchArray(self::FETCH_ASSOC);
	}
	
	function fetchArray($resultType = self::FETCH_ASSOC)
	{
		return $this->result->fetchArray($resultType);
	}
	
	
	function fetchObject($className='\\stdClass', array $params=array())
	{
		$properties = $this->fetchAssoc();

		if(is_null($className))
		{
			$object = new stdClass();
		}
		else
		{
			// call to class' constructor must be done after filling the fields
			$object = unserialize(sprintf('O:%d:"%s":0:{}', strlen($className), $className));
		}

		$reflector = new \ReflectionObject($object);
		foreach($properties as $key => $value)
		{
			try
			{
				$attribute = $reflector->getProperty($key);
				$attribute->setAccessible(true);
				$attribute->setValue($object, $value);
			}
			catch(\ReflectionException $e)
			{
				$object->$key = $value;
			}
		}

		// calling constructor
		call_user_func_array(array($object, '__construct'), $params);

		return $object;
	}
	
	function recordCount()
	{
		throw new \ManiaLive\Database\NotSupportedException();
	}
	
	function recordAvailable()
	{
		return $this->recordAvailable;
	}
}
?>