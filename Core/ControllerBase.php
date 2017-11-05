<?php 

namespace Core;

class ControllerBase {
	protected $view;
	private $viewPath;
	private $layoutPath;
	private $pageTitle = null;


	public function __construct(){
		$this->view = new \stdClass;
	}

	protected function render_view($viewPath, $layoutPath = null){
		$this->viewPath = $viewPath;
		$this->layoutPath = $layoutPath;
		if($layoutPath){
			$this->layout();
		}
		$this->content();
	}

	protected function content(){
		$chamada = str_replace('Base', '', $this->viewPath);
		if(file_exists(__DIR__ . "/../app/views/" . $chamada . "/" . $this->viewPath . ".phtml")){
			require_once __DIR__ . "/../app/views/" . $chamada . "/" . $this->viewPath . ".phtml"; 
		} else {
			echo "Error: View não encontrada";
		}
	}

	protected function layout(){
		$chamada = str_replace('Base', '', $this->layoutPath);
		if(file_exists(__DIR__ . "/../app/views/" . $this->layoutPath . ".phtml")){
			require_once __DIR__ . "/../app/views/" . $this->layoutPath . ".phtml"; 
		} else {
			echo "Error: Layout não encontrado";
		}
	}

	protected function set_page_title($pageTitle){
		$this->pageTitle = $pageTitle;
	}

	protected function get_page_title($separator = null){
		if($separator){
			echo $this->pageTitle . " " . $separator . " ";
		} else {
			echo $this->pageTitle; 
		}
	}
}