<?php 

namespace Core;

class Container{

	public static function newController($controller){
		$chamada = str_replace('_base', '',$controller);
		$objContoller = "App\\Controllers\\" . $chamada . "\\" . $controller;
		return new $objContoller;
	}
}