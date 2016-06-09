<?php

class UsuarioController extends Controller{

    
    public function insert(){
        $pass1 = trim($_POST["password"]);
        $pass2 = trim($_POST["password2"]);
        
        if(!empty($pass1) && !empty($pass2) && ($pass1 == $pass2)){
            $senha = $_POST["password"];
            $custo = '08';
            $salto = 'Cf1f11ePArKlBJomM0F6aJ';
            $hash = crypt($senha, '$2a$' . $custo . '$' . $salto . '$');
            
            $u = new Usuario(0,$_POST["usuario"],$hash);
            $uDAO = new UsuarioDAO;
            $uDAO->insert($u);
            $this->view->renderizar("cad.sucesso");
        }
        else{
            header("Location: /usuario/registro");
        }
    }

    
    public function registro(){
        $this->view->renderizar("registro");
    }
    
    public function area(){
        $this->view->renderizar("usuario");
    }
}

?> 