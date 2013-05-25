<?php
/**
 * ManiaLib - Lightweight PHP framework for Manialinks
 * 
 * @see         http://code.google.com/p/manialib/
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 732 $:
 * @author      $Author: maximeraoust $:
 * @date        $Date: 2012-07-09 16:55:18 +0200 (lun., 09 juil. 2012) $:
 */

namespace ManiaLib\Application\Rendering;

interface RendererInterface
{
	static function exists($viewName);
	static function render($viewName);
	static function redirect($URL);
	static function registerException(\Exception $e);
	static function header();
}