<?php

class UsuarioController extends Controller{
    
    // /home/formulario
  
    // /usuario/registro  

    
    public function insert(){
        $u = new Usuario(0,$_POST["usuario"],$_POST["password"]);
        $uDAO = new UsuarioDAO;
        $ret = $uDAO->insert($u);
        $uDAO->tramite($ret);
        $this->view->renderizar("cad.sucesso");
        
    }

    
    public function registro(){
        //$this->logado();
        $this->view->renderizar("registro");
    }
    
}

?>