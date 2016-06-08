<?php

class UsuarioController extends Controller{

    
    public function insert(){
        $senha = $_POST["password"];
        $custo = '08';
        $salto = 'Cf1f11ePArKlBJomM0F6aJ';
        $hash = crypt($senha, '$2a$' . $custo . '$' . $salto . '$');
        
        $u = new Usuario(0,$_POST["usuario"],$hash);
        $uDAO = new UsuarioDAO;
        $uDAO->insert($u);
        $this->view->renderizar("cad.sucesso");
        
    }

    
    public function registro(){
        $this->view->renderizar("registro");
    }
    
    public function area(){
        $this->view->renderizar("usuario");
    }
}

?> 