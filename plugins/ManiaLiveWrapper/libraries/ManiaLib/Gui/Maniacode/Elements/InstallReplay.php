<?php
/**
 * ManiaLib - Lightweight PHP framework for Manialinks
 * 
 * @see         http://code.google.com/p/manialib/
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 652 $:
 * @author      $Author: melot.philippe $:
 * @date        $Date: 2012-01-27 16:51:57 +0100 (ven., 27 janv. 2012) $:
 */

namespace ManiaLib\Gui\Maniacode\Elements;

class InstallReplay extends FileDownload
{

	protected $xmlTagName = 'install_replay';

	function __construct($name='', $url='')
	{
		parent::__construct($name, $url);
	}

}

?>