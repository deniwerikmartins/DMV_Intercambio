<?php
class BuscaDAO{
    
    public function insert(Interesse $i){
        $mysqli = new mysqli("127.0.0.1", "root", "", "dmv");
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
    }
    
}
    public function getInter(){
        $mysqli = new mysqli("127.0.0.1", "root", "", "dmv");
        $stmt = $mysqli->prepare("SELECT * FROM Interesse");
        $stmt->execute();
        $arr = mysqli_fetch_all(mysqli_stmt_get_result($stmt));
        $buc = array();
        foreach($arr as $a){
            $buc[] = new Busca($a[0],$a[1],$a[2],$a[3],$a[4],$a[5],$a[6],$a[7]);
        }
        return $buc;
    }
    
        

?>