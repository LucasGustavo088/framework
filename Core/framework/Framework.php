<?php 

namespace Core\Framework;
use Core\Framework\Model\ModelBase;
use Core\AppFramework\ViewBase as ViewBase;
use Core\Framework\Controller\ControllerBase;

class Framework {

	public static $framework;
	public $controllers; 
	public $controller;
	public $view = array();

	public function __construct(){
		self::$framework = $this;
		$this->controllers = array();
		$this->view = new ViewBase();
	}

	public static function getFramework() {
	    if (null === self::$framework) {
	        $framework = new self;
	        $framework->iniciar_framework();
	        return $framework;
	    }
	    return self::$framework;
	}

	public function iniciar_framework() {
	    self::$framework->view = new ViewBase;
	}

}
