<?php
/**
 * ManiaLib - Lightweight PHP framework for Manialinks
 *
 * @see         http://code.google.com/p/manialib/
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 662 $:
 * @author      $Author: melot.philippe $:
 * @date        $Date: 2012-02-08 14:22:57 +0100 (mer., 08 févr. 2012) $:
 */

namespace ManiaLib\Gui\Maniacode\Elements;

/**
 * Use it only with InstallTrackPack
 * @deprecated
 * use PackageMap class instead
 */
class PackageTrack extends FileDownload
{

	protected $xmlTagName = 'map';

	function __construct($name='', $url='')
	{
		parent::__construct($name, $url);
	}

}

?>