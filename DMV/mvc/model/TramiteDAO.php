<?php

class TramiteDAO{
    
    public function getTramites(){
        $mysqli = new mysqli("127.0.0.1", "root", "", "dmv");
        $stmt = $mysqli->prepare("SELECT * FROM Tramite WHERE cd_Usuario=?");
        $stmt->bind_param("i",$_SESSION["_ID"]);
        $stmt->execute();
        $arr = mysqli_fetch_all(mysqli_stmt_get_result($stmt));
        $tramites = array();
        foreach($arr as $a){
            $tramites[] = new Tramite($a[0],$a[1],$a[2],$a[3],$a[4],$a[5],
            $a[6],$a[7],$a[8],$a[9],$a[10]);
        }
        return $tramites;
    
    }

}

?>