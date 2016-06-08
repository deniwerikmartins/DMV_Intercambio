<?php

class Proposta{
    
    private $usuario, $escolaagente, $pais, $cidadeescola, $tipocurso, $datainicio, $datatermino, $duracao, $materialdidatico;
    
    public function __construct($usuario, $escolaagente, $pais, $cidadeescola, $tipocurso, $datainicio, $datatermino, $duracao,
            $materialdidatico){
            $this->usuario = $usuario;
            $this->escolaagente = $escolaagente;
            $this->pais = $pais;
            $this->cidadeescola = $cidadeescola;
            $this->tipocurso = $tipocurso;
            $this->datainicio = $datainicio;
            $this->datatermino = $datatermino;
            $this->duracao = $duracao;
            $this->materialdidatico = $materialdidatico;
    }
    
    public function getUsuario(){
        return $this->usuario;
    }
    
    
    public function getEscolaAgente(){
        return $this->escolaagente;
    }
    
    public function getPais(){
        return $this->pais;
    }
    
    public function getCidadeEscola(){
        return $this->cidadeescola;
    }
    
    public function getTipoCurso(){
        return $this->tipocurso;
    }
    
    public function getDataInicio(){
        return $this->datainicio;
    }
    
    public function getDataTermino(){
        return $this->datatermino;
    }
    
    public function getDuracao(){
        return $this->duracao;
    }
    
    public function getMaterialDidatico(){
        return $this->materialdidatico;
    }
    
    
}

?>