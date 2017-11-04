<?php 

namespace Core;

class controller_base {
	protected $view;
	private $viewPath;
	private $layoutPath;
	private $pageTitle = null;


	public function __construct(){
		$this->view = new \stdClass;
		$this->view->nome = 'Lucas';
	}

	protected function renderView($viewPath, $layoutPath = null){
		$this->viewPath = $viewPath;
		$this->layoutPath = $layoutPath;
		if($layoutPath){
			$this->layout();
		}
		$this->content();
	}

	protected function content(){
		$chamada = str_replace('_base', '', $this->viewPath);
		if(file_exists(__DIR__ . "/../app/views/" . $chamada . "/" . $this->viewPath . ".phtml")){
			require_once __DIR__ . "/../app/views/" . $chamada . "/" . $this->viewPath . ".phtml"; 
		} else {
			echo "Error: View não encontrada";
		}
	}

	protected function layout(){
		$chamada = str_replace('_base', '', $this->layoutPath);
		if(file_exists(__DIR__ . "/../app/views/" . $this->layoutPath . ".phtml")){
			require_once __DIR__ . "/../app/views/" . $this->layoutPath . ".phtml"; 
		} else {
			echo "Error: Layout não encontrado";
		}
	}

	protected function setPageTitle($pageTitle){
		$this->pageTitle = $pageTitle;
	}

	protected function getPageTitle($separator = null){
		if($separator){
			echo $this->pageTitle . " " . $separator . " ";
		} else {
			echo $this->pageTitle; 
		}
	}
}