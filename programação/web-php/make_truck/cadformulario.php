<?php
include"conecta.php";

$Nome=$_POST['Nome'];
$Sobrenome=$_POST['Sobrenome'];
$Sexo=$_POST['Sexo'];
$Email=$_POST['Email'];
$Telefone=$_POST['Telefone'];
$Nasc=$_POST['Nasc'];

$Cep=$_POST['Cep'];
$Rua=$_POST['Rua'];
$Numero=$_POST['Numero'];
$Bairro=$_POST['Bairro'];
$Cidade=$_POST['Cidade'];
$Estado=$_POST['Estado'];
$Servico=$_POST['Servico'];

$Cor=$_POST['Cor'];
$Tipo=$_POST['Tipo'];
$Pele=$_POST['Pele'];
$Tam=$_POST['Tam'];

$Usuario=$_POST['Usuario'];
$Senha=$_POST['Senha'];
$Confsenha=$_POST['Confsenha'];


$gravando="INSERT INTO dados(Nome,Sobrenome,Sexo,Email,Telefone,Nasc) VALUES('$Nome','$Sobrenome','$Sexo','$Email','$Telefone','$Nasc')";
$gravando2="INSERT INTO endereco(Nome,Sobrenome,Cep,Rua,Numero,Bairro,Cidade,Estado,Servico) VALUES('$Nome','$Sobrenome','$Cep','$Rua','$Numero','$Bairro','$Cidade','$Estado','$Servico')";
$gravando3="INSERT INTO aparencia(Nome,Sobrenome,Cor,Tipo,Pele,Tam) VALUES('$Nome','$Sobrenome','$Cor','$Tipo','$Pele','$Tam')";
$gravando4="INSERT INTO login(Nome,Sobrenome,Usuario,Senha,Confsenha) VALUES('$Nome','$Sobrenome','$Usuario','$Senha','$Confsenha')";

$resultado=mysql_query($gravando);
$resultado2=mysql_query($gravando2);
$resultado3=mysql_query($gravando3);
$resultado4=mysql_query($gravando4);
if(!$resultado or !$resultado2 or !$resultado3 or !$resultado4){
    echo"Erro No Registro, Faça Novamente!<br>";
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