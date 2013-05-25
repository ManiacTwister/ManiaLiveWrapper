<?php
/**
 * ManiaLive - TrackMania dedicated server manager in PHP
 * 
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 355 $:
 * @author      $Author: martin.gwendal $:
 * @date        $Date: 2012-04-05 10:29:24 +0200 (jeu., 05 avr. 2012) $:
 */

namespace ManiaLive\Application;

interface Listener extends \ManiaLive\Event\Listener
{
	function onInit();
	function onRun();
	function onPreLoop();
	function onPostLoop();
	function onTerminate();
}