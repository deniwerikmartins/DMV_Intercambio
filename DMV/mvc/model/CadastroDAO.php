<?php

class CadastroDAO{
    public function insert(Cadastro $c){
        $mysqli = new mysqli("127.0.0.1", "root", "", "dmv");
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $stmt = $mysqli->prepare("INSERT INTO usuario(nm_Usuario, ds_Endereco, ds_Complemento, 
        nm_Bairro, nm_Cidade, nm_Estado, cd_CEP, cd_TelRes, cd_Celular, cd_TelComercial, 
        dt_Nascimento, nm_Nacionalidade, cd_RG, cd_CPF, cd_Passaporte, dt_ValidoAte, nm_Profissao, 
        nm_Email, nm_Mae, cd_CelMae, cd_TelComercialMae, nm_EmailMae, nm_Pai, cd_CelPai, 
        cd_TelComercialPai, nm_EmailPai, nm_ContatoEmergencia, cd_CelEmergencia, 
        cd_TelComercialEmergencia, nm_EmailEmergencia, sg_NivelConhecimento, ic_Fumante, 
        ic_Vegetariano, ic_Alergico, ds_Alergias, ds_OBS) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssssssssssssssssssssssssssssssss",
        $c->getnUsuario(),$c->getEndereco(),$c->getComplemento(),$c->getBairro(),$c->getCidade(),$c->getEstado(),
        $c->getCEP(),$c->getTelRes(),$c->getCelular(),$c->getTelComercial(),$c->getNacionalidade(),$c->getRg(),
        $c->getCpf,$c->getPassaporte(),$C->getValidoAte(),$c->getProfissao(),$c->getEmail(),$c->getMae(),
        $c->getTelComercialMae(),$c->getEmailMae(),$c->getPai(),$c->getCelPai(),$c->getTelComercialPai(),
        $c->getEmailPai(),$c->getContatoEmergencia(),$C->getCelEmergencia(),$c->getTelComercialEmergencia(),
        $c->getEmailEmergencia(),$c->getNivelConhecimento(),$c->getFumante(),$c->getVegetariano(),$c->getAlergico(),
        $c->getAlergias(),$c->getOBS());
        
        
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        return "";
    }


public function getCadastro($id){
        $mysqli = new mysqli("127.0.0.1", "root", "", "dmv");
        $stmt = $mysqli->prepare("SELECT * FROM Usuario WHERE id=?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id, $nm_Usuario, $ds_Endereco, $ds_Complemento, 
        $nm_Bairro, $nm_Cidade, $nm_Estado, $cd_CEP, $cd_TelRes, $cd_Celular, $cd_TelComercial, 
        $dt_Nascimento, $nm_Nacionalidade, $cd_RG, $cd_CPF, $cd_Passaporte, $dt_ValidoAte, $nm_Profissao, 
        $nm_Email, $nm_Mae, $cd_CelMae, $cd_TelComercialMae, $nm_EmailMae, $nm_Pai, $cd_CelPai, 
        $cd_TelComercialPai, $nm_EmailPai, $nm_ContatoEmergencia, $cd_CelEmergencia, 
        $cd_TelComercialEmergencia, $nm_EmailEmergencia, $sg_NivelConhecimento, $ic_Fumante, 
        $ic_Vegetariano, $ic_Alergico, $ds_Alergias, $ds_OBS);
        $stmt->fetch();
        $cad = new Cadastro($id, $nm_Usuario, $ds_Endereco, $ds_Complemento, 
        $nm_Bairro, $nm_Cidade, $nm_Estado, $cd_CEP, $cd_TelRes, $cd_Celular, $cd_TelComercial, 
        $dt_Nascimento, $nm_Nacionalidade, $cd_RG, $cd_CPF, $cd_Passaporte, $dt_ValidoAte, $nm_Profissao, 
        $nm_Email, $nm_Mae, $cd_CelMae, $cd_TelComercialMae, $nm_EmailMae, $nm_Pai, $cd_CelPai, 
        $cd_TelComercialPai, $nm_EmailPai, $nm_ContatoEmergencia, $cd_CelEmergencia, 
        $cd_TelComercialEmergencia, $nm_EmailEmergencia, $sg_NivelConhecimento, $ic_Fumante, 
        $ic_Vegetariano, $ic_Alergico, $ds_Alergias, $ds_OBS);
        return $cad;
    }

}

?>