<?php

Class BasketController Extends BaseController {

	public function index() {
		//$_SESSION["currentMenu"] = __MENU_HOME;

		$this->registry->template->show('basket');
	}
	
}

?>
