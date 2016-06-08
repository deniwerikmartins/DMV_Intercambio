 <?php
 
 class PropostaDAO{
     
        public function proposta(Proposta $p){
            
            $mysqli = new mysqli("127.0.0.1", "root", "", "dmv");
            
            if ($mysqli->connect_errno) {
                return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }
            
            $stmt = $mysqli->prepare("INSERT INTO Programa_Intercambio(cd_Usuario,nm_EscolaAgente,nm_Pais,nm_Cidade,ds_TipoCurso,dt_InicioCurso, 
            dt_TerminoCurso,ds_Duracao,ic_MaterialDidatico) VALUES (?,?,?,?,?,?,?,?,?)");
             
            $stmt->bind_param("isssssssi", $p->getUsuario(), $p->getEscolaAgente(),$p->getPais(),$p->getCidadeEscola(),$p->getTipoCurso(),$p->getDataInicio(),
            $p->getDataTermino(),$p->getDuracao(),$p->getMaterialDidatico());
            
            if (!$stmt->execute()){
                return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";    
            }
            
            $stmt->close();

}

}

?>