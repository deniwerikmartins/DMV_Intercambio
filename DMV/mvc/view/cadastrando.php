<?php
$nome=$_POST['nome'];
$endereco=$_POST['endereco'];
$complemento=$_POST['complemento'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
$cep=$_POST['cep'];
$residencial=$_POST['residencial'];
$celular=$_POST['celular'];
$comercial=$_POST['comercial'];
$nascimento=$_POST['nascimento'];
$nacionalidade=$_POST['nacionalidade'];
$rg=$_POST['rg'];
$cpf=$_POST['cpf'];
$passaporte=$_POST['passaporte'];
$validade=$_POST['validade'];
$profissao=$_POST['profissao'];
$email=$_POST['email'];
$nomedamae=$_POST['nomedamae'];
$celmae=$_POST['celmae'];
$commae=$_POST['commae'];
$emailmae=$_POST['emailmae'];
$nomepai=$_POST['nomepai'];
$celpai=$_POST['celpai'];
$compai=$_POST['compai'];
$emailpai=$_POST['emailpai'];
$emergencia=$_POST['emergencia'];
$celemergencia=$_POST['celemergencia'];
$comemergencia=$_POST['comemergencia'];
$emailemergencia=$_POST['emailemergencia'];
$conhecimento=$_POST['conhecimento'];
$fumante=$_POST['fumante'];
$vegetariano=$_POST['vegetariano'];
$alergico=$_POST['alergico'];
$alergias=$_POST['alergias'];
$obs=$_POST['obs'];
$nomepagante=$_POST['nomepagante'];
$enderecopagante=$_POST['enderecopagante'];
$complementopagante=$_POST['complementopagante'];
$bairropagante=$_POST['bairropagante'];
$cidadepagante=$_POST['cidadepagante'];
$estadopagante=$_POST['estadopagante'];
$ceppagante=$_POST['ceppagante'];
$respagante=$_POST['respagante'];
$celpagante=$_POST['celpagante'];
$compagante=$_POST['compagante'];
$emailpagante=$_POST['emailpagante'];
$cpfpagante=$_POST['cpfpagante'];
$escolaagente=$_POST['escolaagente'];
$pais=$_POST['pais'];
$cidadeescola=$_POST['cidadeescola'];
$tipocuros=$_POST['tipocuros'];
$datainicio=$_POST['datainicio'];
$datatermino=$_POST['datatermino'];
$duracao=$_POST['duracao'];
$materialdidatico=$_POST['materialdidatico'];
$mysqli = new mysqli("127.0.0.1", "redblood666-1", "", "dmv");
        if ($mysqli->connect_errno) {
            echo "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
$sql = mysql_query("INSERT INTO usuario(nome, endereco, complemento, bairro, cidade, estado, cep, residencial, celular, comercial,
nascimento, rg, cpf, passaporte, validade, profissao, email, nomedamae, celmae, commae, emailmae, nomepai, celpai, compai, emailpai,
emergencia, celemergencia, comemergencia, emailemergencia, conhecimento, fumante, vegetariano, alergico, alergias, obs, nomepagante,
enderecopagante, complementopagante, bairropagante, cidadepagante, estadopagante, ceppagante, respagante, celpagante, compagante,
emailpagante, cpfpagante, escolaagente, pais, cidadeescola, tipocuros, datainicio, datatermino, duracao, materialdidatico);
VALUES('$nome', '$endereco', '$complemento', '$bairro', '$cidade', '$estado', '$cep', '$residencial', '$celular', '$comercial',
'$nascimento', '$rg', '$cpf', '$passaporte', '$validade', '$email', '$nomedamae', '$celmae', '$commae', '$emailmae', '$nomepai', '$celpai', '$compai', '$emailpai',
'$emergencia', '$celemergencia', '$comemergencia', '$emailemergencia', '$conhecimento', '$fumante', '$vegetariano', '$alergico', '$alergias', '$obs', '$nomepagante',
'$enderecopagante', '$complementopagante', '$bairropagante', '$cidadepagante', '$estadopagante', '$ceppagante', '$respagante', '$celpagante', '$compagante',
'$emailpagante', '$cpfpagante', '$escolaagente', '$pais', '$cidadeescola', '$tipocuros', '$datainicio', '$datatermino', '$duracao', '$materialdidatico')");

?>