<?php

class HomeController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }

    public function index(){
        $this->view->renderizar("index");
    }

    public function barcelona(){
        $this->view->renderizar("barcelona");
    }
    
    public function berlim(){
        $this->view->renderizar("berlim");
    }
    
    public function bordeaux(){
        $this->view->renderizar("bordeaux");
    }
    public function dep_aereo(){
        $this->view->renderizar("dep_aereo");
    }

    public function depoimentos(){
        $this->view->renderizar("depoimentos");
    }
    
    public function destinos(){
        $this->view->renderizar("destinos");
    }
    
    public function florenca(){
        $this->view->renderizar("florenca");
    }
    
    public function frankfurt(){
        $this->view->renderizar("frankfurt");
    }
    public function hamburgo(){
        $this->view->renderizar("hamburgo");
    }
    public function institucional(){
        $this->view->renderizar("institucional");
    }
    public function int_alemao(){
        $this->view->renderizar("int_alemao");
    }
    public function int_espanhol(){
        $this->view->renderizar("int_espanhol");
    }
    public function int_frances(){
        $this->view->renderizar("int_frances");
    }
    public function int_ingles(){
        $this->view->renderizar("int_ingles");
    }
    public function int_italiano(){
        $this->view->renderizar("int_italiano");
    }
    public function int_mandarim(){
        $this->view->renderizar("int_mandarim");
    }
    public function losangeles(){
        $this->view->renderizar("losangeles");
    }
    public function madrid(){
        $this->view->renderizar("madrid");
    }
    public function miami(){
        $this->view->renderizar("miami");
    }
    public function milao(){
        $this->view->renderizar("milao");
    }
    public function munique(){
        $this->view->renderizar("munique");
    }
    public function newyork(){
        $this->view->renderizar("newyork");
    }
    public function nice(){
        $this->view->renderizar("nice");
    }
    public function orlando(){
        $this->view->renderizar("orlando");
    }
    public function paris(){
        $this->view->renderizar("paris");
    }
    public function pequim(){
        $this->view->renderizar("pequim");
    }
    public function recebido(){
        $this->view->renderizar("recebido");
    }
    public function roma(){
        $this->view->renderizar("roma");
    }
    public function saofrancisco(){
        $this->view->renderizar("saofrancisco");
    }
    public function washington(){
        $this->view->renderizar("washington");
    }
    
    public function emailcontato(){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $endereco = $_POST["endereco"];
        $comentarios = $_POST["comentarios"];
        
        $msg = "Nome: $nome \n".
        "Telefone: $telefone \n".
        "Endereço: $endereco \n".
        "Comentarios: $comentarios";
        
        $para = 'adm@dmvintercambio.com.br';
        $assunto = 'Formulario de Contato';
        
        mail($para, $assunto, $msg, 'From:' . $email);
        
        $this->view->renderizar("recebido");
    }
    
    
    
   
}

?>