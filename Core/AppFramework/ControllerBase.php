<?php 

namespace Core\AppFramework;

use Core\Framework\Framework as Framework;

class ControllerBase {
	public $view;
	private $viewPath;
	private $layoutPath;
	private $pageTitle = null;
	public $framework;
	public $framework2 = 'tetste';
	public $teste2 = 'teste';

	public function __construct(){
		$this->framework = Framework::getFramework();

		$this->view = $this->framework->view; 
	}
}