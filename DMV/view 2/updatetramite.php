<?php 

$nome=$_POST[''];
 +$endereco=$_POST[''];
 +$complemento=$_POST['complemento'];
 +$bairro=$_POST['bairro'];
 +$cidade=$_POST['cidade'];

 
 $sql = mysql_query("UPDATE Tramite  SET  ds_DadosCadastrais, ds_EnvioProposta, ds_Passaporte, ds_Voo,
 ds_Visto, ds_Pagamento, ds_Escola, ds_MaterialDidatico, ds_Acomodacoes)
 
 ?