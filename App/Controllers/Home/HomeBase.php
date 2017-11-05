<?php 
namespace App\Controllers\home;

use Core\ControllerBase;

class HomeBase extends ControllerBase{

	public function index(){
		$this->render_view('home', 'layout');

	}
}