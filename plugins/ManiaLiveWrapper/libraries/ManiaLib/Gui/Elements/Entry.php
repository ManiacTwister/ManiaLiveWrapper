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

namespace ManiaLib\Gui\Elements;

class Entry extends \ManiaLib\Gui\Elements\Label
{

	protected $xmlTagName = 'entry';
	protected $style = '';
	protected $name;
	protected $defaultValue;

	/**
	 * Sets the name of the entry. Will be used as the parameter name in the URL
	 * when submitting the page
	 * @param string
	 */
	function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * Sets the default value of the entry
	 * @param mixed
	 */
	function setDefault($value)
	{
		$this->defaultValue = $value;
	}

	/**
	 * Returns the name of the entry
	 * @return string
	 */
	function getName()
	{
		return $this->name;
	}

	/**
	 * Returns the default value of the entry
	 * @return mixed
	 */
	function getDefault()
	{
		return $this->defaultValue;
	}

	protected function postFilter()
	{
		parent::postFilter();
		if($this->name !== null)
			$this->xml->setAttribute('name', $this->name);
		if($this->defaultValue !== null)
			$this->xml->setAttribute('default', $this->defaultValue);
	}

}

?>