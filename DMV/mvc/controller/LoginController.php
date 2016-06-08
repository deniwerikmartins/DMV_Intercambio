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
  
    public function usuario(){
        $this->view->renderizar("login");
    }
    
    public function autenticar(){
        $um = new UsuarioDAO();
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        $custo = '08';
        $salto = 'Cf1f11ePArKlBJomM0F6aJ';
        $hash = crypt($senha, '$2a$' . $custo . '$' . $salto . '$');
        $ehLoginCorreto = $um->authUser($login,$hash);
        if($ehLoginCorreto === false)
            header("Location: /login/usuario");
        else{
            $_SESSION["_ID"] = $ehLoginCorreto;
            header("Location: /usuario/area");
        }
    }
    
}


?>