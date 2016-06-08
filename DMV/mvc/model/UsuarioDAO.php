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
    
}
?>