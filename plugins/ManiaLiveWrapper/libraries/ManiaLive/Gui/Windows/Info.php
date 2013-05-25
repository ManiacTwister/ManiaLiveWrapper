<?php
/**
 * ManiaLive - TrackMania dedicated server manager in PHP
 * 
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 364 $:
 * @author      $Author: martin.gwendal $:
 * @date        $Date: 2012-04-25 16:41:40 +0200 (mer., 25 avr. 2012) $:
 */

namespace ManiaLive\Gui\Windows;

use ManiaLib\Gui\Elements\Bgs1InRace;
use ManiaLib\Gui\Elements\Label;

final class Info extends \ManiaLive\Gui\Panel
{
	private $text;
	
	protected function onConstruct()
	{	
		parent::onConstruct();

		$this->text = new Label();
		$this->text->setPosition(2, -17);
		$this->text->enableAutonewline();
		$this->addComponent($this->text);
	}
	
	protected function onResize($oldX, $oldY)
	{
		parent::onResize($oldX, $oldY);
		$this->text->setSize($this->sizeX - 4, $this->sizeY - 6);
	}
	
	function setText($text)
	{		
		$this->text->setText($text);
	}
}

?>