<?php 
namespace App\Controllers\post;

use Core\ControllerBase;

class PostBase extends ControllerBase{

	public function index(){
		$this->render_view('home', 'layout');

	}
}