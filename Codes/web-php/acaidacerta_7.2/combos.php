<?php
require "init.php";
session_start();
?>
<html lang="pt-br" >
<head>
    <title> Açaída Certa</title>
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilo_paginas.css">
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="animate.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/default.js"></script>
    <script type="text/javascript" src="js/carrinho.js"></script>
    <script type="text/javascript" src="js/combos.js"></script>
    <script type="text/javascript" src="js/confirma.js"></script>
    </head>
    <body id="topo" onload="document.montar.reset();">
        <div class="row">
            <nav class="col-12 col-m-12 menu">
                <ul class="col-12 col-m-12">
                    <a href="index.html"><li class="col-1 col-m-1 sem_hover" style="padding:4px 10px 5px 10px;margin:0;"> <img class="img_index" src='imagens/logo.png'></li></a>
                    <li class="invisivel col-1 col-m-1"></li>
                    <li class="invisivel col-1 col-m-1"></li>
                    <a href="?area=produtos"><li class="col-3 col-m-3"> Combos </li></a>
                    <a href="?area=carrinho"><li class="col-3 col-m-3"> Confirmar Pedido</li></a>
                    <a href="acompanhe.php"><li class="col-3 col-m-3"> Acompanhar Pedido </li></a>
                </ul>
            </nav>
            <form name="carrinho">
                <div id="itens-carrinho" class="col-12 col-m-12">                    
                </div>
            </form>
            <button id="abrir-carrinho" onclick="abaixaCarrinho();conta3();"><img src="imagens/carrinho.png"><br> Carrinho</button>
            <button id="iconeperfil" onclick="abaixaPerfil();conta3();"><img src="imagens/perfil.jpg"><br>Perfil</button>
            <div id="perfil">
             <li>
 						<?php 
							if(isset($_SESSION['usuario_compra']))
							{
						 print '
								Voc&ecirc; esta logado como: '.$_SESSION['usuario_compra']['usuario'].'  -  <a href="?area=logar&acao=sair">Sair</a>
						 ';
							}
							else
							{
						print '
							<form name="" method="post" action="?area=logar&acao=logar" style="margin: 0px ; padding: 0px; float:right;"> 	Quero comprar:
								<input name="login" type="text" size="10" class="caixa_texto_logar" placeholder="usu&aacute;rio" />
								<input name="senha" type="password" size="10" class="caixa_texto_logar" placeholder="Senha" />
		            			<button type="submit" >Logar</button>
		            			</form>
	            				<a href="?area=logar&acao=cadastro"> <u>Ainda não sou cadastrado</u> </a>
	            		 ';
							}
	            		?>
                </li></div>
            
            <br><br><br><br><br>
            <div class="col-2 col-m-2" style="padding: 1px;"></div>
            <div id="conteudo" class="col-8 col-m-8 acais" style="padding: 1px;">
                    
<?php
if (isset ($_GET['area']))
{
	switch ($_GET['area'])
	{
		case "carrinho":
		  include "carrinho.php";
		  break;
		case "produtos":
		  include "produtos.php";
		  break;
		case "finalizar":
		  include "finalizar.php";
		  break;
		  case "logar":
		  	include "logar.php";
		  	break;
		default:
		  include "inicial.php";
		  break;
	}
}
else
{
	include "produtos.php";
}
?>
                    
                </div>
            
            <div class="col-2 col-m-2" style="padding: 1px;"></div>
        </div>
    </body>
</html>