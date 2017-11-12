<?php 
namespace App\Controllers\Home; 

use App\Controllers\ControllerApp;

class HomeBase extends ControllerApp{

	public function index(){
		$this->render_view('home', 'layout');

	}
}