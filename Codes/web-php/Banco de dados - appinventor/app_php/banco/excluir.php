<?
  $nome =$_POST['nome'];



$conexao = mysql_connect('localhost','root','usbw');

mysql_select_db('banco_agenda',$conexao);

$sql = "delete from contatos where nome = '$nome'";

$resultado = mysql_query($sql) or die ("Erro: " . mysql_error());

if($resultado)
       echo "1";
  else
       echo "0";
?>