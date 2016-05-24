<?php
abstract class Controller{
    
    protected $view;
    
    public function __construct(){
        $this->view = new View();
    }
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
    
    /*public function logado(){
        if(!isset($_SESSION["_ID"])){
            header("location:/usuario/login");
        }
    }*/
    
    public function estaAutorizado(){
        if(!isset($_SESSION["_ID"]))
             header("Location: /login");
    }
}
?>