<?php

class ClienteDAO{
    public function insert(Cliente $c){
        $mysqli = new mysqli("127.0.0.1", "root", "", "dmv");
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $stmt = $mysqli->prepare("INSERT INTO Usuario(cd_User,nm_NomeCliente, ds_Endereco, ds_Complemento, 
        nm_Bairro, nm_Cidade, nm_Estado, cd_CEP, cd_TelRes, cd_Celular, cd_TelComercial, 
        dt_Nascimento, nm_Nacionalidade, cd_RG, cd_CPF, cd_Passaporte, dt_ValidoAte, nm_Profissao, 
        nm_Email, nm_Mae, cd_CelMae, cd_TelComercialMae, nm_EmailMae, nm_Pai, cd_CelPai, 
        cd_TelComercialPai, nm_EmailPai, nm_ContatoEmergencia, cd_CelEmergencia, 
        cd_TelComercialEmergencia, nm_EmailEmergencia, sg_NivelConhecimento, ic_Fumante, 
        ic_Vegetariano, ic_Alergico, ds_Alergias, ds_OBS) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        
        $stmt->bind_param("issssssiiiissiiissssiissiissiissiiiss",
        $c->getUser(),$c->getNome(),$c->getEndereco(),$c->getComplemento(),$c->getBairro(),$c->getCidade(),$c->getEstado(),
        $c->getCEP(),$c->getResidencial(),$c->getCelular(),$c->getComercial(),$c->getNascimento(),$c->getNacionalidade(),
        $c->getRg(),$c->getCpf(),$c->getPassaporte(),$c->getValidade(),$c->getProfissao(),$c->getEmail(),$c->getMae(),$c->getCelMae(),
        $c->getComMae(),$c->getEmailMae(),$c->getPai(),$c->getCelPai(),$c->getComPai(),$c->getEmailPai(),
        $c->getEmergencia(),$c->getCelEmergencia(),$c->getComEmergencia(),$c->getEmailEmergencia(),$c->getConhecimento(),
        $c->getFumante(),$c->getVegetariano(),$c->getAlergico(),$c->getAlergias(),$c->getOBS());
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        
 
        $stmt = $mysqli->prepare("SELECT cd_Usuario FROM Usuario ORDER BY cd_Usuario DESC LIMIT 1");
        $stmt->execute();
        $stmt->bind_result($usuario);
        $stmt->fetch();
        //echo $usuario;
        
        
        $stmt = $mysqli->prepare("INSERT INTO Pagante (cd_Usuario) VALUES(?)");
        $stmt->bind_param("i",$usuario);
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        
        
        $stmt = $mysqli->prepare("INSERT INTO Pagante VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("issssssiiiisi",$usuario,$c->getNomePagante(),$c->getEnderecoPagante(),$c->getComplementoPagante(),
        $c->getBairroPagante(),$c->getCidadePagante(),$c->getEstadoPagante(),$c->getCepPagante(),$c->getRespPagante(),
        $c->getCelPagante(),$c->getComPagante(),$c->getEmailPagante(),$c->getCpfPagante());
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        
        
        $stmt = $mysqli->prepare("INSERT INTO Programa_Intercambio (cd_Usuario, nm_Pais, nm_Cidade,
        ds_TipoCurso, dt_InicioCurso, dt_TerminoCurso, ds_Duracao, ic_MaterialDidatico)
        VALUES(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("issssssi",$usuario,$c->getEscolaAgente(),$c->getPais(),$c->getCidadeEscola(),$c->getTipoCurso(),$c->getDataInicio(),
        $c->getDataTermino(),$c->getDuracao(),$c->getMaterialDidatico());
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        
        $stmt->close();
        //return "";
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