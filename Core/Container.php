<?php 

namespace Core;

use Core\Framework\Framework;
use Core\AppFramework\ControllerBase;

class Container{

	public static function new_controller($controller){
		
		new Framework;

		$modulo = str_replace('Base', '',$controller);
		$controller = "App\\Controllers\\" . $modulo . "\\" . $controller;

		return new $controller;
	}

	public static function page_not_found(){
		if($file_exists(__DIR__ . "/.../App/Views/page_not_found/page_not_found.phtml")){
			return require_once __DIR__ . "/.../App/Views/page_not_found/page_not_found.phtml";
		}
	}
}