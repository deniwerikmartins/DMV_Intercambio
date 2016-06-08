<?php

class AdminController extends Controller{
  
  //  /usuario/area
  
      public function __call($m,$a){
        $this->view->renderizar("erro");
    } 
  
   
    public function admin(){
        $this->view->renderizar("AreaAdmin");
    }
     public function atualizar(){
        $t = $_POST["tramite"];
        $u = $_POST["usuario"];
        $tramite = (int) $t;
        $usuario = (int) $u;
        $a = new Admin($_POST["dadoscadastrais"],$_POST["envioproposta"],$_POST["passaporte"],
        $_POST["voo"],$_POST["visto"],$_POST["pagamento"],$_POST["escola"],$_POST["materialdidatico"],$_POST["acomodacoes"]); //$tramite,$usuario
        $aDAO = new AdminDAO();
        $aDAO->update($a,$usuario,$tramite);
        $this->view->renderizar("at.sucesso");
        
    }
}
    
    
?>