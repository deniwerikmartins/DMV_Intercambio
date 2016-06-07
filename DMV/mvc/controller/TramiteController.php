<?php

class TramiteController extends Controller{
    
    
        public function UpdateTramite(){
            $DadosCadastrais = $_POST["DadosCadastrais"];
            $Enviodeproposta = $_POST["Enviodeproposta"];
            $Passaporte = $_POST["Passaporte"];
            $Passaporte = $_POST["Passaporte"];
            $Voo = $_POST["Voo"];
            $Visto = $_POST["Visto"];
            $Pagamento = $_POST["Pagamento"];
            $Escola = $_POST["Escola"];
            $Materialdidático = $_POST["Materialdidatico"];
            $Acomodações = $_POST["Acomodacoes"];
            
            $usuario = new Usuario($DadosCadastrais,$Enviodeproposta,$Passaporte,$Voo,$Visto,$Pagamento,$Escola,$Materialdidático,$Acomodações);
            $userDao = new UsuarioDAO();
            $userDao->update($usuario);
            header("Location: /usuario/sucesso");
        }
        
        public function listar(){
            $this->estaAutorizado();
            $tDAO = new TramiteDAO();
            $todosTramites = $tDAO->getTramites();
            $this->view->interpolar("processo",$todosTramites);
        }
    
    
}

?>