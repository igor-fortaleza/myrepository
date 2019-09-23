<?php
include"conecta.php";

$Nome=$_POST['nome'];
$Valor=$_POST['valor'];
$Descricao=$_POST['descricao'];

$gravando="INSERT INTO produtos(nome,valor,descricao) VALUES('$Nome','$Valor','$Descricao')";

$resultado=mysql_query($gravando);

if(!$resultado){
    echo"Erro No Registro dos Produtos, Faça Novamente!<br>";
    echo mysql_error();
}
else{
    echo"Cadastro com sucesso";
    echo"<html>
    <head>
    <title>Formulario</title>
    <link rel='stylesheet' href='style.css'>
    </head><body>
    
        <div class='caixa'>";
        echo "<div ><p>Bem Vindo ";
        echo"</p></div>";
        echo"<a href='loginformulario.html' class='botao'>Faça Login</a>";
        
    mysql_close($conexao);
}
?>