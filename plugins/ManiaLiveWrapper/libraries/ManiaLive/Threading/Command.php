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

namespace ManiaLive\Threading;

class Command
{
	private static $count = 0;
	
	private $commandId;
	private $result = null;
	private $resultSet = false;
	private $timeTaken = null;
	private $callback;
	private $task;
	
	static function GetCount()
	{
		return self::$count;
	}
	
	function __construct(Runnable $task, $callback=null)
	{
		$this->commandId = self::$count++;
		$this->task = $task;
		$this->callback = $callback;
	}
	
	function getId()
	{
		return $this->commandId;
	}
	
	function getTask()
	{
		return $this->task;
	}
	
	function isDone()
	{
		return $this->resultSet;
	}
	
	function getResult()
	{
		return $this->result;
	}
	
	function getTimeTaken()
	{
		return $this->timeTaken;
	}
	
	function setResult($result, $timeTaken)
	{
		if($this->resultSet)
			return;
		
		$this->result = $result;
		$this->resultSet = true;
		$this->timeTaken = $timeTaken;
		if(is_callable($this->callback))
			call_user_func($this->callback, $this);
	}
	
	function fail()
	{
		if(is_callable($this->callback))
			call_user_func($this->callback, $this);
	}
}

?>
