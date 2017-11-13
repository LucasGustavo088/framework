<?php 

namespace Core\AppFramework;
use Core\Framework\Framework as Framework;

class ViewBase {
	public $framework;

	public function __construct(){
		// $this->framework = Framework::getFramework();
		// $this->view = new \stdClass;
	}

	public function render_view($viewPath, $layoutPath = null){
		$this->viewPath = $viewPath;
		$this->layoutPath = $layoutPath;
		if($layoutPath){
			$this->layout();
		}
		$this->content();
	}

	protected function content(){
		$modulo = str_replace('Base', '', $this->viewPath);
		if(file_exists(__DIR__ . "/../app/views/" . $modulo . "/" . $this->viewPath . ".phtml")){
			require_once __DIR__ . "/../app/views/" . $modulo . "/" . $this->viewPath . ".phtml"; 
		} else {
			echo "Error: View não encontrada";
		}
	}

	protected function layout(){
		$modulo = str_replace('Base', '', $this->layoutPath);
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

	public function ue(){
		echo "ue";
	}
}