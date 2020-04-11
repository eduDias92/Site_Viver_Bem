<?php
class Controller{
	/*
		* Classe padrão que executa funções comuns dos controllers. Entre elas o carregamento das views

	*/
	public function __construct()
	{
		$c = new Config();
		$m = new Menu();
		$i = new Info();
		$this->configs = $c->getConfig();
		$this->menus = $m->getMenus();
		$this->infos = $i->getInfos();
		
	}
	public function loadView($viewName, $viewData = array()){
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()){
		extract($viewData);
		require 'views/'.$this->configs['site_template'].".php";
	}

	public function loadViewInTemplate($viewName, $viewData = array()){
		require 'views/'.$viewName.'.php';
	}
}

?>