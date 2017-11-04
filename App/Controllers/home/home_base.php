<?php 
namespace App\Controllers\home;

use Core\controller_base;

class home_base extends controller_base{

	public function index(){
		$this->renderView('home', 'layout');

	}
}