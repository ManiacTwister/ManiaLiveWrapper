<?php
/**
 * ManiaLib - Lightweight PHP framework for Manialinks
 * 
 * @see         http://code.google.com/p/manialib/
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 590 $:
 * @author      $Author: maximeraoust $:
 * @date        $Date: 2011-12-27 19:40:38 +0100 (mar., 27 déc. 2011) $:
 */

namespace ManiaLib\Application;

/**
 * Filterable implentation with access to Session, Request and Response
 * @see \ManiaLib\Application\Filterable
 */
abstract class AdvancedFilter implements \ManiaLib\Application\Filterable
{

	/**
	 * @var \ManiaLib\Application\Request
	 */
	protected $request;
	/**
	 * @var \ManiaLib\Application\Session
	 */
	protected $session;
	/**
	 * @var \ManiaLib\Application\Response
	 */
	protected $response;

	/**
	 * Call the parent constructor when you override it in your filters!
	 */
	function __construct()
	{
		$this->request = \ManiaLib\Application\Request::getInstance();
		$this->response = \ManiaLib\Application\Response::getInstance();
		$this->session = \ManiaLib\Application\Session::getInstance();
	}

	public function preFilter()
	{
		
	}

	public function postFilter()
	{
		
	}

}

?>