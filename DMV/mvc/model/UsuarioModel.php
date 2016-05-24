<?php

class Usuario{
    private $id, $nome, $senha;

    public function __construct($id,$nome,$senha){
        $this->id = $id;
        $this->nome = $nome;
        $this->senha = $senha;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getSenha(){
        return $this->senha;
    }
    
}

?>