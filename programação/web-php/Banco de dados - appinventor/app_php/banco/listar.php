
<?php
  
  conexap = mysql_connect('localhost','root');
  
  mysql_select_db('agenda',$conexao);
  
  $sql="select * from conatato";
  
  $resultado = mysql_query($sql) or die (" Erro:" . mysql_error());
  
  //obtém o resultado de uma linha como um objeto
  while ($linha = mysql_fetch_object($resultado))
        echo $linha->nome. "#";
        echo "^";
        
        
?>        