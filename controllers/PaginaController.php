<?php
class PaginaController extends Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index($url){
        $pagina = new Pagina();
        
        $dados['pagina'] = $pagina->getPagina($url);
        $dados['url'] = $url;
        $this->loadTemplate($dados['pagina']['template'], $dados);
    }
}

?>