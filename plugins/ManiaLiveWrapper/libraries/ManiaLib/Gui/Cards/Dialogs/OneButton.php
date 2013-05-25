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

namespace ManiaLib\Gui\Cards\Dialogs;

use ManiaLib\Gui\Elements\Label;

class OneButton extends \ManiaLib\Gui\Cards\Panel
{

	/**
	 * @var \ManiaLib\Gui\Elements\Button
	 */
	public $button;

	/**
	 * @var \ManiaLib\Gui\Elements\Label
	 */
	public $text;

	function __construct($sizeX = 65, $sizeY = 25)
	{
		parent::__construct($sizeX, $sizeY);

		$this->setSubStyle(\ManiaLib\Gui\Elements\Bgs1::BgWindow2);
		$this->title->setStyle(\ManiaLib\Gui\Elements\Label::TextTitle2);
		$this->addCardElement($this->title);

		$this->button = new \ManiaLib\Gui\Elements\Button;
		$this->button->setAlign('center', 'bottom');
		$this->addCardElement($this->button);

		$this->text = new Label();
		$this->text->setAlign('center', 'center');
		$this->text->enableAutonewline();
//		$this->text->setStyle(Label::TextStaticMedium);
		$this->addCardElement($this->text);
	}

	function preFilter()
	{
		parent::preFilter();
		$this->text->setSize($this->sizeX - 6, $this->sizeY - 11);
		$this->text->setPositionY(- $this->sizeY / 2 - 5);
		$this->button->setPositionY(5 - $this->sizeY);
	}

}

?>