<?php
/**
 * @version     $Revision: 710 $:
 * @author      $Author: maximeraoust $:
 * @date        $Date: 2012-06-14 14:58:01 +0200 (jeu., 14 juin 2012) $:
 */

namespace ManiaLib\Application\Tracking;

class EventTracker
{

	static $trackingAccount;
	static $cookieNameSuffix;

	/**
	 * @return \ManiaLib\Application\GoogleAnalytics
	 */
	protected static function getTracker()
	{
		if(!self::$trackingAccount)
		{
			$config = Config::getInstance();
			self::$trackingAccount = $config->account;
		}
		$t = new GoogleAnalytics(self::$trackingAccount, self::$cookieNameSuffix);
		$t->loadCookie();
		return $t;
	}

	static function trackNow($category, $action, $label, $value = null)
	{
		$URL = self::getTracker()->getEventTrackingURL($category, $action, $label, $value);
		\ManiaLib\ManiaScript\Manipulation::setImage(View::EVENT_QUAD_ID, $URL);
	}

	static function trackAsnyc($category, $action, $label, $controlId, $eventType, $value = null)
	{
		$URL = self::getTracker()->getEventTrackingURL($category, $action, $label, $value);
		\ManiaLib\ManiaScript\Event::addListener($controlId, $eventType,
			array(\ManiaLib\ManiaScript\Action::set_image, View::EVENT_QUAD_ID, $URL));
	}

}

?>