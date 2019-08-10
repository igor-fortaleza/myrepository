<?php

$nomenovo =$_POST['nomenovo'];
$nomevelho =$_POST['nomevelho'];
$telefone =$_POST['telefone'];
$email =$_POST['email'];

$conexao = mysql_connect('localhost','root','usbw');

mysql_select_db('banco_agenda',$conexao);

$sql = "update contatos set nome='$nomenovo', telefone= $telefone, email='$email' where nome='$nomevelho'";

$resultado = mysql_query($sql) or die ("Erro: " . mysql_error());

if($resultado)
       echo "1";
  else
       echo "0";
?>