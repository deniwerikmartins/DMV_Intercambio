<?php

class AdminDAO{
    
    public function update(Admin $a,$usuario,$tramite){
        $mysqli = new mysqli("127.0.0.1", "root", "", "dmv");
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }

        $stmt = $mysqli->prepare("UPDATE Tramite SET ds_DadosCadastrais=? WHERE cd_Usuario=? and cd_Tramite=?");
        $stmt->bind_param("sii",$a->getDadosCadastrais(),$usuario,$tramite);
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        
        $stmt = $mysqli->prepare("UPDATE Tramite SET ds_EnvioProposta=? WHERE cd_Usuario=? and cd_Tramite=?");
        $stmt->bind_param("sii",$a->getEnvioProposta(),$usuario,$tramite);
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();

        $stmt = $mysqli->prepare("UPDATE Tramite SET ds_Passaporte=? WHERE cd_Usuario=? and cd_Tramite=?");
        $stmt->bind_param("sii",$a->getPassaporte(),$usuario,$tramite);
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        
        $stmt = $mysqli->prepare("UPDATE Tramite SET ds_Voo=? WHERE cd_Usuario=? and cd_Tramite=?");
        $stmt->bind_param("sii",$a->getVoo(),$usuario,$tramite);
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        
        $stmt = $mysqli->prepare("UPDATE Tramite SET ds_Visto=? WHERE cd_Usuario=? and cd_Tramite=?");
        $stmt->bind_param("sii",$a->getVisto(),$usuario,$tramite);
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        
        $stmt = $mysqli->prepare("UPDATE Tramite SET ds_Pagamento=? WHERE cd_Usuario=? and cd_Tramite=?");
        $stmt->bind_param("sii",$a->getPagamento(),$usuario,$tramite);
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        
        $stmt = $mysqli->prepare("UPDATE Tramite SET ds_Escola=? WHERE cd_Usuario=? and cd_Tramite=?");
        $stmt->bind_param("sii",$a->getEscola(),$usuario,$tramite);
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        
        $stmt = $mysqli->prepare("UPDATE Tramite SET ds_MaterialDidatico=? WHERE cd_Usuario=? and cd_Tramite=?");
        $stmt->bind_param("sii",$a->getMaterialDidatico(),$usuario,$tramite);

        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        
        $stmt = $mysqli->prepare("UPDATE Tramite SET ds_Acomodacoes=? WHERE cd_Usuario=? and cd_Tramite=?");
        $stmt->bind_param("sii",$a->getAcomodacoes(),$usuario,$tramite);

        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
    }
}

?>