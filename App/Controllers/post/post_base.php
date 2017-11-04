<?php 
namespace App\Controllers\post;

use Core\controller_base;

class post_base extends controller_base{

	public function index(){
		$this->renderView('home', 'layout');

	}
}