<?php

class ClienteDAO{
    
    public function insert(Cliente $c){
        $mysqli = new mysqli("127.0.0.1", "root", "", "dmv");
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        
        $stmt = $mysqli->prepare("INSERT INTO Cliente(cd_Usuario,nm_Cliente, ds_Endereco, ds_Complemento, 
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
        
 
        
        $stmt = $mysqli->prepare("SELECT cd_Cliente FROM Cliente ORDER BY cd_Cliente DESC LIMIT 1");
        $stmt->execute();
        $stmt->bind_result($usuario);
        $stmt->fetch();
        $stmt->close();
        
      
        
       
        $stmt = $mysqli->prepare("INSERT INTO Pagante VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("issssssiiiisi",$usuario,$c->getNomePagante(),$c->getEnderecoPagante(),$c->getComplementoPagante(),
        $c->getBairroPagante(),$c->getCidadePagante(),$c->getEstadoPagante(),$c->getCepPagante(),$c->getResPagante(),
        $c->getCelPagante(),$c->getComPagante(),$c->getEmailPagante(),$c->getCpfPagante());
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        
        $stmt->close();
        
        $stmt = $mysqli->prepare("INSERT INTO Programa_Intercambio (cd_Usuario, nm_EscolaAgente,
        nm_Pais, nm_Cidade, ds_TipoCurso, dt_InicioCurso, dt_TerminoCurso, ds_Duracao, ic_MaterialDidatico)
        VALUES(?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("isssssssi",$usuario,$c->getEscolaAgente(),$c->getPais(),$c->getCidadeEscola(),$c->getTipoCurso(),$c->getDataInicio(),
        $c->getDataTermino(),$c->getDuracao(),$c->getMaterialDidatico());
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        
        
        $stmt->close();
        
    }
    
    public function tramite(Cliente $c){
        $mysqli = new mysqli("127.0.0.1", "root", "", "dmv");
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $stmt = $mysqli->prepare("INSERT INTO Tramite (cd_Usuario) VALUES (?)");
        $stmt->bind_param("i",$c->getUser());
        $stmt->execute();                       
        $stmt->close();
        
    }

    
        public function update(Cliente $c){
            $mysqli = new mysqli("127.0.0.1", "root", "", "dmv");
            if ($mysqli->connect_errno) {
                return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }

            $stmt = $mysqli->prepare("UPDATE Cliente SET nm_Cliente=? WHERE cd_Usuario=?");
            $stmt->bind_param("si",$c->getNome(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET ds_Endereco=? WHERE cd_Usuario=?");
            $stmt->bind_param("si",$c->getEndereco(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET ds_Complemento=? WHERE cd_Usuario=?");
            $stmt->bind_param("si",$c->getComplemento(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET nm_Bairro=? WHERE cd_Usuario=?");
            $stmt->bind_param("si",$c->getBairro(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET nm_Cidade=? WHERE cd_Usuario=?");
            $stmt->bind_param("si",$c->getCidade(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET nm_Estado=? WHERE cd_Usuario=?");
            $stmt->bind_param("si",$c->getEstado(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET cd_CEP=? WHERE cd_Usuario=?");
            $stmt->bind_param("ii",$c->getCEP(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET cd_TelRes=? WHERE cd_Usuario=?");
            $stmt->bind_param("ii",$c->getResidencial(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET cd_Celular=? WHERE cd_Usuario=?");
            $stmt->bind_param("ii",$c->getCelular(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET cd_TelComercial=? WHERE cd_Usuario=?");
            $stmt->bind_param("ii",$c->getComercial(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET dt_Nascimento=? WHERE cd_Usuario=?");
            $stmt->bind_param("si",$c->getNascimento(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET nm_Nacionalidade=? WHERE cd_Usuario=?");
            $stmt->bind_param("si",$c->getNacionalidade(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET cd_RG=? WHERE cd_Usuario=?");
            $stmt->bind_param("ii",$c->getRg(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET cd_CPF=? WHERE cd_Usuario=?");
            $stmt->bind_param("ii",$c->getCpf(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET cd_Passaporte=? WHERE cd_Usuario=?");
            $stmt->bind_param("ii",$c->getPassaporte(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET dt_ValidoAte=? WHERE cd_Usuario=?");
            $stmt->bind_param("si",$c->getValidade(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET nm_Profissao=? WHERE cd_Usuario=?");
            $stmt->bind_param("si",$c->getProfissao(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET nm_Email=? WHERE cd_Usuario=?");
            $stmt->bind_param("si",$c->getEmail(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET nm_Mae=? WHERE cd_Usuario=?");
            $stmt->bind_param("si",$c->getMae(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET cd_CelMae=? WHERE cd_Usuario=?");
            $stmt->bind_param("ii",$c->getCelMae(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET cd_TelComercialMae=? WHERE cd_Usuario=?");
            $stmt->bind_param("ii",$c->getComMae(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET nm_EmailMae=? WHERE cd_Usuario=?");
            $stmt->bind_param("si",$c->getEmailMae(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET nm_Pai=? WHERE cd_Usuario=?");
            $stmt->bind_param("si",$c->getPai(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET cd_CelPai=? WHERE cd_Usuario=?");
            $stmt->bind_param("ii",$c->getCelPai(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET cd_TelComercialPai=? WHERE cd_Usuario=?");
            $stmt->bind_param("ii",$c->getComPai(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET nm_EmailPai=? WHERE cd_Usuario=?");
            $stmt->bind_param("si",$c->getEmailPai(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET nm_ContatoEmergencia=? WHERE cd_Usuario=?");
            $stmt->bind_param("si",$c->getEmergencia(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET cd_CelEmergencia=? WHERE cd_Usuario=?");
            $stmt->bind_param("ii",$c->getCelEmergencia(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET cd_TelComercialEmergencia=? WHERE cd_Usuario=?");
            $stmt->bind_param("ii",$c->getComEmergencia(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET nm_EmailEmergencia=? WHERE cd_Usuario=?");
            $stmt->bind_param("si",$c->getEmailEmergencia(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET sg_NivelConhecimento=? WHERE cd_Usuario=?");
            $stmt->bind_param("si",$c->getConhecimento(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET ic_Fumante=? WHERE cd_Usuario=?");
            $stmt->bind_param("ii",$c->getFumante(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET ic_Vegetariano=? WHERE cd_Usuario=?");
            $stmt->bind_param("ii",$c->getVegetariano(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET ic_Alergico=? WHERE cd_Usuario=?");
            $stmt->bind_param("ii",$c->getAlergico(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET ds_Alergias=? WHERE cd_Usuario=?");
            $stmt->bind_param("si",$c->getAlergias(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Cliente SET ds_OBS=? WHERE cd_Usuario=?");
            $stmt->bind_param("si",$c->getOBS(),$c->getUser());
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("SELECT cd_Cliente FROM Cliente WHERE cd_Usuario=?");
            $stmt->bind_param("i",$c->getUser());
            $stmt->execute();
            $stmt->bind_result($cliente);
            $stmt->fetch();
            $stmt->close();
            var_dump($cliente);
            
            $stmt = $mysqli->prepare("UPDATE Pagante SET nm_Pagante=? WHERE cd_Cliente=?");
            $stmt->bind_param("si",$c->getNomePagante(),$cliente);
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Pagante SET ds_EnderecoPagante=? WHERE cd_Cliente=?");
            $stmt->bind_param("si",$c->getEnderecoPagante(),$cliente);
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Pagante SET ds_ComplementoPagante=? WHERE cd_Cliente=?");
            $stmt->bind_param("si",$c->getComplementoPagante(),$cliente);
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Pagante SET nm_BairroPagante=? WHERE cd_Cliente=?");
            $stmt->bind_param("si",$c->getBairroPagante(),$cliente);
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Pagante SET nm_CidadePagante=? WHERE cd_Cliente=?");
            $stmt->bind_param("si",$c->getCidadePagante(),$cliente);
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Pagante SET nm_EstadoPagante=? WHERE cd_Cliente=?");
            $stmt->bind_param("si",$c->getEstadoPagante(),$cliente);
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Pagante SET cd_CEP=? WHERE cd_Cliente=?");
            $stmt->bind_param("ii",$c->getCepPagante(),$cliente);
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Pagante SET cd_TelResidencialPagante=? WHERE cd_Cliente=?");
            $stmt->bind_param("ii",$c->getResPagante(),$cliente);
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Pagante SET cd_CelularPagante=? WHERE cd_Cliente=?");
            $stmt->bind_param("ii",$c->getCelPagante(),$cliente);
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Pagante SET cd_TelComercialPagante=? WHERE cd_Cliente=?");
            $stmt->bind_param("ii",$c->getComPagante(),$cliente);
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
            $stmt = $mysqli->prepare("UPDATE Pagante SET nm_EmailPagante=? WHERE cd_Cliente=?");
            $stmt->bind_param("si",$c->getEmailPagante(),$cliente);
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            $stmt = $mysqli->prepare("UPDATE Pagante SET cd_CPF=? WHERE cd_Cliente=?");
            $stmt->bind_param("ii",$c->getCpfPagante(),$cliente);
            if (!$stmt->execute()) {
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
            }
            $stmt->close();
            
        }
    
    }

?>