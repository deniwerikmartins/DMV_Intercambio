<?php

class UsuarioDAO{
    public function insert(Usuario $u){
        $mysqli = new mysqli("127.0.0.1", "root", "", "dmv");
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $stmt = $mysqli->prepare("INSERT INTO Login( nm_User, cd_Password) VALUES (?,?)");
        $stmt->bind_param("ss",$u->getNome(),$u->getSenha());
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        return "";
    }

}

?>