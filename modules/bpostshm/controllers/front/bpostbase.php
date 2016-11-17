<?php
/**
 * Generic front controller
 *
 * @author    Serge <serge@stigmi.eu>
 * @version   1.40.0
 * @copyright Copyright (c), Eontech.net All rights reserved.
 * @license   BSD License
 */

class BpostShmBpostBaseModuleFrontController extends ModuleFrontController
{
	public $ssl = true;

	public function init()
	{
		parent::init();

		$token = Tools::getValue('token');
		$gen_token = (bool)Tools::getValue('admin') ? Tools::getAdminToken($this->module->name) : Tools::getToken($this->module->name);
		if ($token !== $gen_token)
			Tools::redirect('index');

		// require_once(_PS_MODULE_DIR_.'bpostshm/classes/Service.php');
		require_once(_PS_MODULE_DIR_.$this->module->name.'/classes/Service.php');
	}

	public function initContent()
	{
		parent::initContent();

		$this->processContent();
	}

	protected function processContent()
	{
	}

	final protected function getBpostLink($controller = 'default', array $params = array())
	{
		return $this->context->link->getModuleLink($this->module->name, $controller, $params, true);
	}

	final protected function jsonEncode($content)
	{
		header('Content-Type: application/json');
		die(Tools::jsonEncode($content));
	}
}