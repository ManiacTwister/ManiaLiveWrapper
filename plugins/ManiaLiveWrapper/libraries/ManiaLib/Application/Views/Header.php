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

namespace ManiaLib\Application\Views;

use ManiaLib\Gui\Manialink;
use ManiaLib\Gui\Elements\Icons64x64_1;

class Header extends \ManiaLib\Application\View
{

	static $showRefreshButton = true;

	function display()
	{
		Manialink::load();

		if(static::$showRefreshButton)
		{
			$ui = new Icons64x64_1(10);
			$ui->setAlign('right', 'bottom');
			$ui->setSubStyle('Refresh');
			$ui->setPosition(160, -90, 15);
			$ui->setManiazone($this->request->createLink());
			$ui->save();
		}
	}

}

?>