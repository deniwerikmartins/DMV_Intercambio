<?php

class LoginController extends Controller{
    
    // /login/usuario
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
    
    public function logout(){
        $this->estaAutorizado();
        unset($_SESSION["_ID"]);
        $this->view->renderizar("index");
    }
    
    public function logado(){
        $this->estaAutorizado();
        $this->view->renderizar("index");
    }
    
    public function usuario(){
        unset($_SESSION["_ID"]);
        $this->view->renderizar("login");
    }
    
    public function autenticar(){
        $um = new UsuarioDAO();
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        //Sera falsa se nao encontrar
        //Sera o id(cd_User) se encontrar
        $ehLoginCorreto = $um->authUser($login,$senha);
        if($ehLoginCorreto === false)
            header("Location: /login/usuario");
        else{
            $_SESSION["_ID"] = $ehLoginCorreto;
            header("Location: /login/logado");
        }
    }
    
}


?>