<?php
/**
 * ManiaLive - TrackMania dedicated server manager in PHP
 * Based on
 * GbxRemote by Nadeo and
 * IXR - The Incutio XML-RPC Library - (c) Incutio Ltd 2002
 * 
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 425 $:
 * @author      $Author: melot.philippe $:
 * @date        $Date: 2012-07-18 12:36:36 +0200 (mer., 18 juil. 2012) $:
 */

// TODO XMLRPCLib: remettre les credits

namespace DedicatedApi\Xmlrpc;

if (!defined('LF')) define('LF', "\n");

class ClientMulticall extends Client
{
	public $calls = array();

	function addCall($methodName, $args)
	{
		$struct = array('methodName' => $methodName, 'params' => $args);
		$this->calls[] = $struct;

		return (count($this->calls) - 1);
	}
	
	function multiquery()
	{
		$result = array();
		if(count($this->calls))
		{
			$result = parent::query('system.multicall', $this->calls);
			$this->calls = array();  // reset for next calls
		}
		return $result;
	}

	function multiqueryIgnoreResult()
	{
		if(count($this->calls))
		{
			parent::queryIgnoreResult('system.multicall', $this->calls);
			$this->calls = array();  // reset for next calls
		}
	}
}

?>