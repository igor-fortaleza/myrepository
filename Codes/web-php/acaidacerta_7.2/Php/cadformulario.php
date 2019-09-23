<?php
include"conecta.php";

$Nome=$_POST['nome'];
$Sobrenome=$_POST['sobrenome'];
$Email=$_POST['email'];
$Usuario=$_POST['usuario'];
$Senha=$_POST['senha'];

$flag=false;
$consulta ="select * from clientes where nome='".$Nome."'";
$resultado2 =mysql_query($consulta);
$registro=mysql_num_rows($resultado2);
while($registro=mysql_fetch_array($resultado2)){

    if ($Email==$registro['email']){
        echo "<script>alert('Email já cadastrado!!!');window.location='../index.html'</script>"; 
        $flag=true;
        mysql_close($conexao);
    }
    else{
        if ($Usuario==$registro['usuario']){
            echo "<script>alert('Usuário já cadastrado!!!');window.location='../index.html'</script>"; 
            $flag=true;
            mysql_close($conexao);
        }
    }
 
}
$gravando="INSERT INTO clientes(nome,sobrenome,email,usuario,senha) VALUES('$Nome','$Sobrenome','$Email','$Usuario','$Senha')";

$resultado=mysql_query($gravando);

if(!$resultado){
    echo"Erro No Registro, Faça Novamente!<br>";
    echo mysql_error();
}
else{
    echo"<body onload='recarrega();'>";
    mysql_close($conexao);
    echo "<script>alert('CADASTRADO COM SUCESSO!!!');window.location='../index.html'</script>";    
}

?>
<script language="javascript" type="text/javascript">
    function recarrega() {
        /*document.getElementsByTagName('body')[0].className='fundo';*/
        alert('CADASTRADO COM SUCESSO!!');
    }
</script>
<style>
    .fundo {
        background-color: hsla(0,0%,0%,0.4);
    }
</style>