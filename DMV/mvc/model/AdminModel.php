<?php

class Admin{
    
    private $dadoscadastrais,$envioproposta,$passaporte,$voo,$visto,$pagamento,$escola,$materialdidatico, $acomodacoes;
    
    public function __construct($dadoscadastrais,$envioproposta,$passaporte,$voo,$visto,$pagamento,$escola,$materialdidatico, $acomodacoes){
            $this->dadoscadastrais = $dadoscadastrais;
            $this->envioproposta = $envioproposta;
            $this->passaporte = $passaporte;
            $this->voo = $voo;
            $this->visto = $visto;
            $this->pagamento = $pagamento;
            $this->escola = $escola;
            $this->materialdidatico = $materialdidatico;
            $this->acomodacoes = $acomodacoes;
    }
    
    public function getDadosCadastrais(){
        return $this->dadoscadastrais;
    }
    
    public function getEnvioProposta(){
        return $this->envioproposta;
    }
    
    public function getPassaporte(){
        return $this->passaporte;
    }
    
    public function getVoo(){
        return $this->voo;
    }
    
    public function getVisto(){
        return $this->visto;
    }
    
    public function getPagamento(){
        return $this->pagamento;
    }
    
    public function getEscola(){
        return $this->escola;
    }
    
    public function getMaterialDidatico(){
        return $this->materialdidatico;
    }
    
    public function getAcomodacoes(){
        return $this->acomodacoes;
    }
    
    public function getTramite(){
        return $this->tramite;
    }
    
     public function getUsuario(){
        return $this->usuario;
    }
    
    
}

?>