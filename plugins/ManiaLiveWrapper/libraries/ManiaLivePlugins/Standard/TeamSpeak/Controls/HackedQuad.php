<?php
/**
 * TeamSpeak Plugin - Connect to a TeamSpeak 3 server
 * Original work by refreshfr
 *
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 386 $:
 * @author      $Author: martin.gwendal $:
 * @date        $Date: 2012-05-29 13:20:32 +0200 (mar., 29 mai 2012) $:
 */

namespace ManiaLivePlugins\Standard\TeamSpeak\Controls;

use ManiaLib\Gui\Elements\Label;
use ManiaLib\Gui\Elements\Quad;

/**
 * Description of HackedQuad
 */
class HackedQuad extends \ManiaLive\Gui\Control
{
	private $quad;
	private $label;
	
	function __construct($sizeX=20, $sizeY=20)
	{
		$this->quad = new Quad($sizeX, $sizeY);
		$this->label = new Label($sizeX, $sizeY);
		$this->label->setStyle(Label::TextButtonNav);
		$this->label->setFocusAreaColor1('0000');
		$this->label->setText(' ');
		
		$this->addComponent($this->quad);
		$this->addComponent($this->label);
	}
	
	function setBgcolor($bgcolor)
	{
		$this->quad->setBgcolor($bgcolor);
		$this->label->setFocusAreaColor1($bgcolor);
	}
	
	function setBgcolorFocus($bgcolor)
	{
		$this->label->setFocusAreaColor2($bgcolor);
	}
	
	function setAction($action)
	{
		$this->label->setAction($action);
	}
	
	function setUrl($url)
	{
		$this->label->setUrl($url);
	}
	
	protected function onResize($oldX, $oldY)
	{
		$this->quad->setSize($this->sizeX, $this->sizeY);
		$this->label->setSize($this->sizeX, $this->sizeY);
	}
	
	function onDraw()
	{
		$hasLink = (!$this->areLinksDisabled() && \ManiaLib\Gui\Manialink::$linksEnabled)
				&& ($this->label->getAction() !== null || $this->label->getUrl() !== null);
		$this->quad->setVisibility(!$hasLink);
		$this->label->setVisibility($hasLink);
	}
}

?>