<?php
/**
 * Generic front controller
 *
 * @author    Serge <serge@stigmi.eu>
 * @version   1.40.0
 * @copyright Copyright (c), Eontech.net All rights reserved.
 * @license   BSD License
 */

require_once(dirname(__FILE__).'/bpostbase.php');

class BpostShmEnabledCountriesModuleFrontController extends BpostShmBpostBaseModuleFrontController
{
	protected function processContent()
	{
		$id_shop = Tools::getValue('id_shop', false);
		if ($id_shop)
			Shop::setContext(Shop::CONTEXT_SHOP, (int)$id_shop);

		$service = new Service($this->context);
		if (Tools::getValue('get_enabled_countries'))
		{
			$available_countries = $service->getProductCountries();
			$this->jsonEncode($available_countries);
		}
	}
}