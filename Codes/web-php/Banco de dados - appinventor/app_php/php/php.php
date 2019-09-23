<?
  $nome =$POST['nome'];
  $telefone =$POST['telefone'];
  $email =$POST['email'];


$conexao = mysql_connect('localhost','root','usbw');

mysql_select_db('banco_agenda',$conexao);

$sql = "insert into contato (nome, telefone, email)
('$nome', '$telefone', '$email')";

$resultado = mysql_query($sql) or die ("Erro: " . mysql_error());

if($resultado)
       echo "ok";
  else
       echo "0";
?>