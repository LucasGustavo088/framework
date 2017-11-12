<?php 

namespace Core;

class Container{

	public static function new_controller($controller){
		require_once DIR_FRAMEWORK . "Core/Framework/Framework.php";
		
		$modulo = str_replace('Base', '',$controller);
		$objContoller = "App\\Controllers\\" . $modulo . "\\" . $controller;
		return new $objContoller;
	}

	public static function page_not_found(){
		if($file_exists(__DIR__ . "/.../App/Views/page_not_found/page_not_found.phtml")){
			return require_once __DIR__ . "/.../App/Views/page_not_found/page_not_found.phtml";
		}
	}
}