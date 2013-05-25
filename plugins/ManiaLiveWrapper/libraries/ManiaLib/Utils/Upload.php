<?php
/**
 * ManiaLib - Lightweight PHP framework for Manialinks
 *
 * @see         http://code.google.com/p/manialib/
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 667 $:
 * @author      $Author: melot.philippe $:
 * @date        $Date: 2012-02-23 15:44:10 +0100 (jeu., 23 févr. 2012) $:
 */

namespace ManiaLib\Utils;

final class Upload
{

	const UPLOADED_FILE_RIGHTS = 0770;

	/**
	 * Tries to read the specified file and save it
	 * @param string The path where the file will be saved
	 * @param string filename
	 * @param int The maximum file size in bytes
	 */
	static function uploadFile($path, $filename, $maxSize = 2097152)
	{
		$inputFile = file_get_contents('php://input', null, null, null, $maxSize);

		// Else try to get GET data
		if($inputFile === false && array_key_exists('input', $_GET))
		{
			$inputFile = $_GET['input'];
		}

		// Check for error
		if($inputFile === false)
		{
			throw new \Exception('Couldn\'t read input file');
		}
		if(!file_put_contents($path.$filename, $inputFile))
		{
			throw new \Exception('Couldn\'t save input file to '.$path.$filename);
		}
		if(filesize($path.$filename) > $maxSize)
		{
			// Not sure if usefull here
			unlink($path.$filename);
			throw new FileTooLargeException();
		}
	}
}

class FileTooLargeException extends \ManiaLib\Application\UserException
{

}

?>