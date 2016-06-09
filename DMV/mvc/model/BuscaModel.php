<?php

class Busca{
    
    private $Interesse,$Cidade,$Area,$Moeda,$Politica,$PontosTuristicos,$CustoVida,$FaixaCusto;

    public function __construct($Interesse,$Cidade,$Area,$Moeda,$Politica,$PontosTuristicos,$CustoVida,$FaixaCusto){
            $this->Interesse = $Interesse;
            $this->Cidade = $Cidade;
            $this->Area = $Area;
            $this->Moeda = $Moeda;
            $this->Politica = $Politica;
            $this->PontosTuristicos = $PontosTuristicos;
            $this->CustoVida = $CustoVida;
            $this->FaixaCusto = $FaixaCusto;
    }
    
    public function getInteresse(){
        return $this->interesse;
    }
    
    public function getCidade(){
        return $this->cidade;
    }
    
    public function getArea(){
        return $this->area;
    }
    
    public function getMoeda(){
        return $this->moeda;
    }
    
    public function getPolitica(){
        return $this->politica;
    }
    
    public function getPontosTuristicos(){
        return $this->pontosturisticos;
    }
    
    public function getCustoVida(){
        return $this->custovida;
    }
    public function getFaixaCusto(){
        return $this->faixacusto;
    }

    
}

?>