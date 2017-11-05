<?php 
namespace Core;

class Route {
	private $routes;

	public function __construct(array $routes){
		$this->set_routes($routes);
		$this->run();
	} 

	private function set_routes($routes){
		foreach($routes as $route){
			$controller_and_function = explode('@', $route[1]);
			$r = [$route[0], $controller_and_function[0], $controller_and_function[1]];

			$new_routes[] = $r;
		}
		
		$this->routes = $new_routes;		
	}

	private function get_request(){
		$obj = new \stdClass;

        foreach ($_GET as $key => $value){
            @$obj->get->$key = $value;
        }

        foreach ($_POST as $key => $value){
            @$obj->post->$key = $value;
        }
        
        return $obj;
	}

	private function get_url(){
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	}

	private function run(){
		$url = $this->get_url();
		$urlArray = explode('/', $url);
		$found = false;
		$param = array();
		
		foreach($this->routes as $route){
			$routeArray = explode('/', $route[0]);

			for($i = 0; $i < count($routeArray); $i++){
				if((strpos($routeArray[$i], "{") !== false) && (count($urlArray) == count($routeArray))){
					$routeArray[$i] = $urlArray[$i];
					$param[] = $urlArray[$i];
				}
				$route[0] = implode($routeArray, '/');
			}
			if($url == $route[0]){
				$found = true;
				$controller = $route[1];
				$action = $route[2];
				break;
			} 
			// else if(1 == 1){
			// 	echo 'verificar se o controller e método existe';
			// } else {
			// 	throw new Exception("Erro 404", 1);
			// } 
		}

		if($found){
			$controller = Container::new_controller($controller);
			//$controller->$action();

			switch (count($param)){
                case 1:
                    $controller->$action($param[0], $this->get_request());
                    break;
                case 2:
                    $controller->$action($param[0], $param[1], $this->get_request());
                    break;
                case 3:
                    $controller->$action($param[0], $param[1], $param[2], $this->get_request());
                    break;
                default:
                    $controller->$action($this->get_request());
                    break;
            }
		} else {
			Container::page_not_found();
		}
	}
}
