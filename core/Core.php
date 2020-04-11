<?php
	
	class Core{

		public function run(){
			$url = '/';
			$params = [];

			if(isset($_GET['url']) && !empty($_GET['url'])){
				$url .= $_GET['url'];
			}
			//se a url for diferente de "/" e não estiver vazia

			if(!empty($url) && $url != '/'){
				$url = explode('/', $url);
				array_shift($url); //remove o primeiro valor do array que é vazio

				$currentController = $url[0].'Controller';
				array_shift($url);
				if(!empty($url[0]) && ($url[0] != '/' || !empty($url[0]))){
					$currentAction = $url[0];
					array_shift($url);
				}else{
					$currentAction = 'index';
				}
				if(count($url) > 0){ // se forem passados mais parametros além do controller e action, será armazenado numa nova variável os parametros.
					$params = $url;
				}
			}else{
				$currentController = 'homeController';
				$currentAction = 'index';
			}
			if(class_exists($currentController)){
				$controller = new $currentController();
			}else{
				$controller = new PaginaController();
				//pega o nome da página
				$pNome = explode("Controller", $currentController);
				$params['url'] = $pNome[0];
			}
			
			if(method_exists($controller, $currentAction)){
				call_user_func_array(array($controller, $currentAction), $params);
			}else{
				$controller->index();
			}
			
		}
	}

?>