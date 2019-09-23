
<?php
  
  $nome =$_POST('nome');

$conexao = @mysql_connect('localhost','root',I'usbw',);

@mysql_select_db('banco_agenda',$conexao);

$sql="select * from conattos where nome like '$nome'";

$resultado = mysql_query($sql) or die ("Erro: " . mysql_error());

 //obtém o resultado de uma linha como u objeto

while ($linha = mysql_fetch_object($resultado)){
    echo $linha ->nome."#";
    echo $linha ->telefone."#";
    echo $linha ->email."#";
}

echo "^";

?>

