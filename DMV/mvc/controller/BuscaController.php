<?php

class BuscaController extends Controller{
    
    public function listar(){
        $p = new BuscaDAO();
        //a chamada da função da busca
        $todosSel = $p->getInter();
        //passando para a pagina de resultado de busca
        $this->view->interpolar("resultadodabusca",$todosSel);
    }
}

?>