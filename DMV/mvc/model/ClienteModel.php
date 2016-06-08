<?php

class Cliente{
    
    private $user,$nome, $endereco, $complemento, $bairro, $cidade, $estado, $cep, $residencial, $celular,
        $comercial, $nascimento, $nacionalidade, $rg, $cpf, $passaporte, $validade, $profissao, $email,
        $mae, $celmae, $commae, $emailmae, $pai, $celpai, $compai, $emailpai, $emergencia,
        $celemergencia, $comemergencia, $emailemergencia, $conhecimento, $fumante, $vegetariano,
        $alergico, $alergias, $obs, $nomepagante, $enderecopagante, $complementopagante, $bairropagante,
        $cidadepagante, $estadopagante, $ceppagante, $respagante, $celpagante, $compagante, $emailpagante,
        $cpfpagante, $escolaagente, $pais, $cidadeescola, $tipocurso, $datainicio, $datatermino, $duracao,
        $materialdidatico;
    
    public function __construct($user,$nome, $endereco, $complemento, $bairro, $cidade, $estado, $cep, $residencial,
        $celular, $comercial, $nascimento, $nacionalidade, $rg, $cpf, $passaporte, $validade, $profissao, $email,
        $mae, $celmae, $commae, $emailmae, $pai, $celpai, $compai, $emailpai, $emergencia,
        $celemergencia, $comemergencia, $emailemergencia, $conhecimento, $fumante, $vegetariano,
        $alergico, $alergias, $obs, $nomepagante, $enderecopagante, $complementopagante, $bairropagante,
        $cidadepagante, $estadopagante, $ceppagante, $respagante, $celpagante, $compagante, $emailpagante,
        $cpfpagante, $escolaagente, $pais, $cidadeescola, $tipocurso, $datainicio, $datatermino, $duracao,
        $materialdidatico){
            $this->user = $user;
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->complemento = $complemento;
            $this->bairro = $bairro;
            $this->cidade = $cidade;
            $this->estado= $estado;
            $this->cep = $cep;
            $this->residencial = $residencial;
            $this->celular = $celular;
            $this->comercial = $comercial; 
            $this->nascimento = $nascimento;
            $this->nacionalidade = $nacionalidade;
            $this->rg = $rg;
            $this->cpf = $cpf;
            $this->passaporte = $passaporte;
            $this->validade = $validade;
            $this->profissao = $profissao; 
            $this->email = $email;
            $this->mae = $mae;
            $this->celmae = $celmae;
            $this->commae = $commae;
            $this->emailmae = $emailmae;
            $this->pai = $pai;
            $this->celpai = $celpai;
            $this->compai = $compai;
            $this->emailpai = $emailpai;
            $this->emergencia = $emergencia;
            $this->celemergencia = $celemergencia;
            $this->comemergencia = $comemergencia;
            $this->emailemergencia = $emailemergencia;
            $this->conhecimento = $conhecimento;
            $this->fumante = $fumante;
            $this->vegetariano = $vegetariano;
            $this->alergico = $alergico;
            $this->alergias = $alergias;
            $this->obs = $obs;
            $this->nomepagante = $nomepagante;
            $this->enderecopagante = $enderecopagante;
            $this->complementopagante = $complementopagante;
            $this->bairropagante = $bairropagante;
            $this->cidadepagante = $cidadepagante;
            $this->estadopagante = $estadopagante;
            $this->ceppagante = $ceppagante;
            $this->respagante = $respagante;
            $this->celpagante = $celpagante;
            $this->compagante = $compagante;
            $this->emailpagante = $emailpagante;
            $this->cpfpagante = $cpfpagante;
            $this->escolaagente = $escolaagente;
            $this->pais = $pais;
            $this->cidadeescola = $cidadeescola;
            $this->tipocurso = $tipocurso;
            $this->datainicio = $datainicio;
            $this->datatermino = $datatermino;
            $this->duracao = $duracao;
            $this->materialdidatico = $materialdidatico;
    }
    
    public function getUser(){
        return $this->user;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getEndereco(){
        return $this->endereco;
    }
    
    public function getComplemento(){
        return $this->complemento;
    }
    
    public function getBairro(){
        return $this->bairro;
    }
    
    public function getCidade(){
        return $this->cidade;
    }
    
    public function getEstado(){
        return $this->estado;
    }
    
    public function getCEP(){
        return $this->cep;
    }
    
    public function getResidencial(){
        return $this->residencial;
    }
    
    public function getCelular(){
        return $this->celular;
    }
    
    public function getComercial(){
        return $this->comercial;
    }
    
    public function getNascimento(){
        return $this->nascimento;
    }
    
    public function getNacionalidade(){
        return $this->nacionalidade;
    }

    public function getRg(){
        return $this->rg;
    }
    
    public function getCpf(){
        return $this->cpf;
    }
    
    public function getPassaporte(){
        return $this->passaporte;
    }
    
    public function getValidade(){
        return $this->validade;
    }
    
    public function getProfissao(){
        return $this->profissao;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getMae(){
        return $this->mae;
    }
    
    public function getCelMae(){
        return $this->celmae;
    }
    
    public function getComMae(){
        return $this->commae;
    }
    
    public function getEmailMae(){
        return $this->emailmae;
    }
    
    public function getPai(){
        return $this->pai;
    }
    
    public function getCelPai(){
        return $this->celpai;
    }
    
    public function getComPai(){
        return $this->compai;
    }
    
    public function getEmailPai(){
        return $this->emailpai;
    }
    
    public function getEmergencia(){
        return $this->emergencia;
    }
    
    public function getCelEmergencia(){
        return $this->celemergencia;
    }
    
    public function getComEmergencia(){
        return $this->comemergencia;
    }
    
    public function getEmailEmergencia(){
        return $this->emailemergencia;
    }
    
    public function getConhecimento(){
        return $this->conhecimento;
    }
    
    public function getFumante(){
        return $this->fumante;
    }
    
    public function getVegetariano(){
        return $this->vegetariano;
    }
    
    public function getAlergico(){
        return $this->alergico;
    }
    
    public function getAlergias(){
        return $this->alergias;
    }
    
    public function getOBS(){
        return $this->obs;
    }
    
    public function getNomePagante(){
        return $this->nomepagante;
    }
    
    public function getEnderecoPagante(){
        return $this->enderecopagante;
    }
    
    public function getComplementoPagante(){
        return $this->complementopagante;
    }
    
    public function getBairroPagante(){
        return $this->bairropagante;
    }
    
    public function getCidadePagante(){
        return $this->cidadepagante;
    }
    
    public function getEstadoPagante(){
        return $this->estadopagante;
    }
    
    public function getCepPagante(){
        return $this->ceppagante;
    }
    
    public function getResPagante(){
        return $this->respagante;
    }
    
    public function getCelPagante(){
        return $this->celpagante;
    }
    
    public function getComPagante(){
        return $this->compagante;
    }
    
    public function getEmailPagante(){
        return $this->emailpagante;
    }
    
    public function getCpfPagante(){
        return $this->cpfpagante;
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