<?php

Class ShippingpolicyController Extends BaseController {

	public function index() {
		//$_SESSION["currentMenu"] = __MENU_HOME;

		$this->registry->template->show('shipping_policy');
	}
	
}

?>
