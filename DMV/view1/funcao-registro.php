<?php 
    class Teste{
        public function inserir(){
        $nome = $_POST["usuario"];
        $nome = $_POST["password"];
        $mysqli = new mysqli("127.0.0.1", "redblood666", "", "dmv");
        if ($mysqli->connect_errno) {
            echo "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $stmt = $mysqli->prepare("INSERT INTO Login(cd_User, nm_User, cd_Password) VALUES(?,?)");
        $stmt->bind_param("siss",$_POST["usuario"],$_POST["password"]);
        
        if (!$stmt->execute()) {
            echo "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }else{
            echo $nome . " Inserido com sucesso <br>";
        }
        $stmt->close();
    }
    }
    
    //<?php
//include "config.php";
//$usuario= $_POST['usuario'];
//$password= $_POST['password'];


//$conecta = mysqli_connect("localhost","root","","dmv") or die ("erro");

?>
