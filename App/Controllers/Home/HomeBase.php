<?php 

namespace App\Controllers\Home;
use Core\AppFramework\ControllerBase as ControllerBase;

class HomeBase extends ControllerBase{

	public function index(){
		$this->view->ue();
	}
}