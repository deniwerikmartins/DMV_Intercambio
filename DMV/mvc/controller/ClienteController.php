<?php

class ClienteController extends Controller{
    
    // /cliente/cadastro
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
    
    public function cadastro(){
        $this->view->renderizar("cadastro");
    }
    
    public function inserir(){
        $c = new Cliente($_POST["user"],$_POST["nome"],$_POST["endereco"],$_POST["complemento"],
        $_POST["bairro"],$_POST["cidade"],$_POST["estado"],$_POST["cep"],
        $_POST["residencial"],$_POST["celular"],$_POST["comercial"],$_POST["nascimento"],
        $_POST["nacionalidade"],$_POST["rg"],$_POST["cpf"],$_POST["passaporte"],$_POST["validade"],
        $_POST["profissao"],$_POST["email"],$_POST["mae"],$_POST["celmae"],$_POST["commae"],
        $_POST["emailmae"],$_POST["pai"],$_POST["celpai"],$_POST["compai"],$_POST["emailpai"],
        $_POST["emergencia"],$_POST["celemergencia"],$_POST["comemergencia"],$_POST["emailemergencia"],
        $_POST["conhecimento"],$_POST["fumante"],$_POST["vegetariano"],$_POST["alergico"],
        $_POST["alergias"],$_POST["obs"],$_POST["nomepagante"],$_POST["enderecopagante"],
        $_POST["complementopagante"],$_POST["bairropagante"],$_POST["cidadepagante"],
        $_POST["estadopagante"],$_POST["ceppagante"],$_POST["resppagante"],$_POST["celpagante"],
        $_POST["compagante"],$_POST["emailpagante"],$_POST["cpfpagante"],$_POST["escolaagente"],
        $_POST["pais"],$_POST["cidadeescola"],$_POST["tipocurso"],$_POST["datainicio"],
        $_POST["datatermino"],$_POST["duracao"],$_POST["materialdidatico"]);
        $cDAO = new ClienteDAO;
        $cDAO->insert($c);
        $this->view->renderizar("cad.sucesso");
        
    }
    
     public function update(){
        $c = new Cliente($_POST["user"]/*mudar para pegar da session o id do usuario logado*/,$_POST["nome"],$_POST["endereco"],$_POST["complemento"],
        $_POST["bairro"],$_POST["cidade"],$_POST["estado"],$_POST["cep"],
        $_POST["residencial"],$_POST["celular"],$_POST["comercial"],$_POST["nascimento"],
        $_POST["nacionalidade"],$_POST["rg"],$_POST["cpf"],$_POST["passaporte"],$_POST["validade"],
        $_POST["profissao"],$_POST["email"],$_POST["mae"],$_POST["celmae"],$_POST["commae"],
        $_POST["emailmae"],$_POST["pai"],$_POST["celpai"],$_POST["compai"],$_POST["emailpai"],
        $_POST["emergencia"],$_POST["celemergencia"],$_POST["comemergencia"],$_POST["emailemergencia"],
        $_POST["conhecimento"],$_POST["fumante"],$_POST["vegetariano"],$_POST["alergico"],
        $_POST["alergias"],$_POST["obs"],$_POST["nomepagante"],$_POST["enderecopagante"],
        $_POST["complementopagante"],$_POST["bairropagante"],$_POST["cidadepagante"],
        $_POST["estadopagante"],$_POST["ceppagante"],$_POST["resppagante"],$_POST["celpagante"],
        $_POST["compagante"],$_POST["emailpagante"],$_POST["cpfpagante"],$_POST["escolaagente"],
        $_POST["pais"],$_POST["cidadeescola"],$_POST["tipocurso"],$_POST["datainicio"],
        $_POST["datatermino"],$_POST["duracao"],$_POST["materialdidatico"]);
        $cDAO = new ClienteDAO;
        $cDAO->update($c);
        $this->view->renderizar("cad.sucesso");
        
    }
    }
    