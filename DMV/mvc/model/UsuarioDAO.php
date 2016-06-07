<?php

class UsuarioDAO{
    public function insert(Usuario $u){
        $mysqli = new mysqli("127.0.0.1", "root", "", "dmv");
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $stmt = $mysqli->prepare("INSERT INTO Usuario(nm_Usuario,nm_Senha) VALUES (?,?)");
        $stmt->bind_param("ss",$u->getNome(),$u->getSenha());
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt = $mysqli->prepare("SELECT * FROM Usuario order by cd_Usuario DESC LIMIT 1");
        $stmt->execute();
        $stmt->bind_result($id,$nome,$senha);
        $stmt->fetch();
        $prod = new Usuario($id,$nome,$senha);
        
        return $prod;
    }
    
    public function authUser($login,$senha){
        $mysqli = new mysqli("127.0.0.1", "root", "", "dmv");
        $stmt = $mysqli->prepare("SELECT cd_Usuario FROM Usuario WHERE nm_Usuario=? AND nm_Senha=?");
        $stmt->bind_param("ss",$login,$senha);
        $stmt->execute();
        $stmt->bind_result($id);
        $stmt->fetch();
        if($id > 0){
            
            return $id;
        }else{
           
            return false;
        }
    }
    
    public function tramite($i){
        $mysqli = new mysqli("127.0.0.1", "root", "", "dmv");
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $stmt = $mysqli->prepare("INSERT INTO Tramite(cd_Cliente) VALUES (?)");
        $stmt->bind_param("i",$i);
        $stmt->execute();                       
        $stmt->close();
        
    }
}
?>