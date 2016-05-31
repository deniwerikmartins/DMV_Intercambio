<?php

class Cadastro{
    private $id,$nm_Usuario, $ds_Endereco, $ds_Complemento, 
        $nm_Bairro, $nm_Cidade, $nm_Estado, $cd_CEP, $cd_TelRes, $cd_Celular, $cd_TelComercial, 
        $dt_Nascimento, $nm_Nacionalidade, $cd_RG, $cd_CPF, $cd_Passaporte, $dt_ValidoAte, $nm_Profissao, 
        $nm_Email, $nm_Mae, $cd_CelMae, $cd_TelComercialMae, $nm_EmailMae, $nm_Pai, $cd_CelPai, 
        $cd_TelComercialPai, $nm_EmailPai, $nm_ContatoEmergencia, $cd_CelEmergencia, 
        $cd_TelComercialEmergencia, $nm_EmailEmergencia, $sg_NivelConhecimento, $ic_Fumante, 
        $ic_Vegetariano, $ic_Alergico, $ds_Alergias, $ds_OBS;
    
    public function __construct($id=0, $nm_Usuario, $ds_Endereco, $ds_Complemento, 
        $nm_Bairro, $nm_Cidade, $nm_Estado, $cd_CEP, $cd_TelRes, $cd_Celular, $cd_TelComercial, 
        $dt_Nascimento, $nm_Nacionalidade, $cd_RG, $cd_CPF, $cd_Passaporte, $dt_ValidoAte, $nm_Profissao, 
        $nm_Email, $nm_Mae, $cd_CelMae, $cd_TelComercialMae, $nm_EmailMae, $nm_Pai, $cd_CelPai, 
        $cd_TelComercialPai, $nm_EmailPai, $nm_ContatoEmergencia, $cd_CelEmergencia, 
        $cd_TelComercialEmergencia, $nm_EmailEmergencia, $sg_NivelConhecimento, $ic_Fumante, 
        $ic_Vegetariano, $ic_Alergico, $ds_Alergias, $ds_OBS){
        $this->id = $id;
        $this->usuario = $nm_Usuario;
        $this->endereco = $ds_Endereco;
        $this->complemento = $ds_Complemento;
        $this->bairro = $nm_Bairro;
        $this->cidade = $nm_Cidade;
        $this->estado= $nm_Estado;
        $this->cep = $cd_CEP;
        $this->telRes = $cd_TelRes;
        $this->celular = $cd_Celular;
        $this->telComercial =$cd_TelComercial, 
        $this->nacionalidade =$nm_Nacionalidade,
        $this->cpg =$cd_RG, $cd_CPF,
        $this->passaporte=$cd_Passaporte,
        $this->validaAte =$dt_ValidoAte, 
        $this->profissao =$nm_Profissao, 
        $this->email =$nm_Email,
        $this->mae =$nm_Mae,
        $this->celMae=$cd_CelMae,
        $this->telComercialMae =$cd_TelComercialMae,
        $this->emailMae =$nm_EmailMae,
        $this->pai =$nm_Pai,
        $this->celPai =$cd_CelPai, 
        $this->telComercialPai =$cd_TelComercialPai,
        $this->emailPai =$nm_EmailPai,
        $this->contatoEmergencia =$nm_ContatoEmergencia,
        $this->celEmergencia =$cd_CelEmergencia, 
        $this->telComercialEmergencia =$cd_TelComercialEmergencia,
        $this->emailEmergencia =$nm_EmailEmergencia, 
        $this->nivelConhecimento =$sg_NivelConhecimento,
        $this->fumante =$ic_Fumante, 
        $this->vegetariano =$ic_Vegetariano,
        $this->alergico =$ic_Alergico,
        $this->alergias =$ds_Alergias,
        $this->obs=$ds_OBS;
       
        
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getUsurario(){
        return $this->usuario;
    }
    
}

?>