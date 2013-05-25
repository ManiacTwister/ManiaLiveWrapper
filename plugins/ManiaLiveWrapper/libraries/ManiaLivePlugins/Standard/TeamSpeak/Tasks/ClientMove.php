<?php
/**
 * TeamSpeak Plugin - Connect to a TeamSpeak 3 server
 * Original work by refreshfr
 *
 * @copyright   Copyright (c) 2009-2011 NADEO (http://www.nadeo.com)
 * @license     http://www.gnu.org/licenses/lgpl.html LGPL License 3
 * @version     $Revision: 377 $:
 * @author      $Author: martin.gwendal $:
 * @date        $Date: 2012-05-21 13:02:45 +0200 (lun., 21 mai 2012) $:
 */

namespace ManiaLivePlugins\Standard\TeamSpeak\Tasks;

/**
 * Description of ClientMove
 */
class ClientMove extends AbstractTask
{
	private $clientId;
	private $channelId;
	
	function __construct($config, $clientId, $channelId)
	{
		parent::__construct($config);
		$this->clientId = $clientId;
		$this->channelId = $channelId;
	}
	
	protected function doRun()
	{
		try
		{
			$this->connection()->clientMove($this->clientId, $this->channelId);
		}
		catch(\ManiaLivePlugins\Standard\TeamSpeak\TeamSpeak3\Adapter\ServerQuery\Exception $exc) {}
	}
}

?>