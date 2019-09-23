<?php
include"conecta.php";
$Usuario=$_POST['Usuario'];
$Senha=$_POST['Senha'];

$flag=false;
$consulta="select * from login where Usuario='".$Usuario."'";
$resultado=mysql_query($consulta);
$registro=mysql_num_rows($resultado);


while($registro=mysql_fetch_array($resultado)){

    if ($Usuario==$registro['Usuario'] and $Senha ==$registro['Senha']){
        $Nome=$registro['Nome'];
        $consulta2="select * from dados where Nome='".$Nome."'";
        $resultado2=mysql_query($consulta2);
        $registro2=mysql_num_rows($resultado2);
        
        
        while($registro2=mysql_fetch_array($resultado2)){
        echo"<html>
        <head>
        <title>Make Truck</title>
        <link rel='stylesheet' href='style.css'>
        </head><body>

            <div id='dindex'>";
        echo "<div ><p class='bemvindo'>Bem Vindo ";
        echo $registro['Nome'];echo"</p></div>";
        echo "<div><p>";echo $registro2['Nome'];echo"</p>";
        echo "<p>";echo $registro2['Sobrenome'];echo "</p>";
        echo "<p>";echo $registro2['Telefone'];echo "</p>";
        echo "<p>";echo $registro2['Email'];echo "</p>";
        echo "<p>";echo $registro2['Nasc'];echo "</p>";
        }
        $flag=true;
    }

 
}
    if($flag==false){
        echo  "<script>alert('VERIFIQUE USUÁRIO E SENHA');
                window.location='login.html';</script>";
    }
?>
    