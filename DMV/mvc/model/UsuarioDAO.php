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
        $stmt = $mysqli->prepare("SELECT * FROM Login order by cd_User DESC LIMIT 1");
        $stmt->execute();
        $stmt->bind_result($id,$nome,$senha);
        $stmt->fetch();
        $prod = new Usuario($id,$nome,$senha);
        
        return $prod;
    }
    
    public function authUser($login,$senha){
        $mysqli = new mysqli("127.0.0.1", "redblood666", "", "teste");
        $stmt = $mysqli->prepare("SELECT id FROM User WHERE login=? AND senha=?");
        $stmt->bind_param("ss",$login,$senha);
        $stmt->execute();
        $stmt->bind_result($id);
        $stmt->fetch();
        if($id > 0){
            //ACHEI O USUARIO E O LOGIN E SENHA
            //ESTAO CORRETAS
            return $id;
        }else{
            //USUARIO OU SENHA INVALIDOS
            return false;
        }
    }
    
    public function tramite($i){
        $mysqli = new mysqli("127.0.0.1", "root", "", "dmv");
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $stmt = $mysqli->prepare("INSERT INTO Tramite(cd_Usuario) VALUES (?)");
        $stmt->bind_param("i",$i);
        $stmt->execute();                       
        $stmt->close();
        
    }
}
?>