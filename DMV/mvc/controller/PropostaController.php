<?php

class PropostaController extends Controller{

        public function enviar(){
            $this->estaAutorizado();
            $this->view->renderizar("proposta");
        }
        
        public function envio(){
            $p = new Proposta($_SESSION["_ID"], $_POST["escolaagente"],$_POST["pais"], $_POST["cidadeescola"], $_POST["tipocurso"],
            $_POST["datainicio"],$_POST["datatermino"], $_POST["duracao"], $_POST["materialdidatico"]);
            $pDAO = new PropostaDAO();
            $pDAO->proposta($p);
            $this->view->renderizar("cad.sucesso");
        }
    
    

}

    
?>