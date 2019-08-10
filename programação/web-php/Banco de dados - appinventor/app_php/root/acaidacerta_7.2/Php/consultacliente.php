<?php
include"conecta.php";
$Usuario=$_POST['usuario'];
$Senha=$_POST['senha'];

$flag=false;
$consulta="select * from clientes where usuario='".$Usuario."'";
$resultado=mysql_query($consulta);
$registro=mysql_num_rows($resultado);


while($registro=mysql_fetch_array($resultado)){

    if ($Usuario==$registro['usuario'] and $Senha ==$registro['senha']){
        $Nome=$registro['nome'];
        $consulta2="select * from clientes where nome='".$Nome."'";
        $resultado2=mysql_query($consulta2);
        $registro2=mysql_num_rows($resultado2);
        
        echo "<script>window.location='../combos.php'</script>"; 
        $flag=true;
    }

 
}
    if($flag==false){
        echo  "<script>alert('VERIFIQUE USUÁRIO E SENHA');
                window.location='../index.html';</script>";
        
    }
?>
    