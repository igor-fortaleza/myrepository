<html lang="pt-br">
<head>
    <title> Açaída Certa</title>
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <script type="text/javascript" src="js/default.js"></script>
    <script type="text/javascript" src="js/carrinho.js"></script>
    <script src="js/index.js"></script>
    </head>
    <body>
        <div class="header">
            <img src="imagens/logo.png">
        </div>
        <br>
        <div class="row">
            <div class="col-1 col-m-1">
            </div>
            <div class="col-5 col-m-5 centro">
                <form action="Php/consultacliente.php" method="post" id="form_login" name="formulario_login">
                    <fieldset id="field_login">
                        <legend style="text-align: center;">Login</legend>
                        <br>
                        <div id="form_inputs">
                            <label>Usuário</label><br>
                            <input type="text" name="usuario" min="5" size="25" maxlength="20" required><br>
                            <label>Senha</label><br>
                            <input type="password" name="senha" min="5" size="25" maxlength="25" required><br>
                            <input type="submit" id="submit_login" value="Entrar" style="float:right;">
                        </div>
                    </fieldset>
                </form>
                <p id="texto_login">
                    Está cansado de se locomover para poder saborear um delicioso açai?<br>
                    Então você está no lugar certo, no Açaida Certa você compra um açai sem sair da sua casa e pode saborea-lo no conforto de sua residência.<br>
                    Faça login e tenha acesso a nossa variedades de tamanhos e incrementos.<br>
                </p>
                <button class="botao_login" onclick="aparece(0);conta();botao()">Login</button>
            </div>
            <div class="col-5 col-m-5 centro">
                <?php

require_once ("libs/classes/cliente.php");
$cliente = new Cliente();

$area = isset($_GET['area']) ? $_GET['area'] : NULL;
$acao = isset($_GET['acao']) ? $_GET['acao'] : NULL;


if ($area == "logar")
{
	
	
switch ($acao) {
	case "sair":
		unset($_SESSION['usuario_compra']);
		header("location: index.php");
		
		break;
		
	case "logar":
		
			$cliente->ValidaCliente($_POST['login'], $_POST['senha']);
			 
			
	break;
	
	case "salvar":
		
		
	echo $cliente->AdicionarCliente($_POST['nome'], $_POST['sobrenome'], $_POST['usuario'], $_POST['email'], $_POST['senha']);
		
		
		
	break;
	case "cadastro":


               print '<form action="?area=logar&acao=salvar" method="post" id="form_cadastro" name="formulario_cadastro">
                    <fieldset id="field_cadastro">
                        <legend style="text-align: center;">Cadastro</legend>
                        <br>
                        <div id="form_inputs">
                            <label>Nome</label><br>
                            <input type="text" name="nome" size="40" maxlength="20" placeholder="Ex:Alcina" autofocus required pattern="([A-ZÀ-Ú]{1})([a-zà-ú]{2,})"><br>
                            <label>Usuário</label><br>
                            <input type="text" name="usuario" min="5" size="25" maxlength="20" required><br>
                            <label>Senha</label><br>
                            <input type="password" name="senha" min="5" size="25" maxlength="25" required><br>
                            
                        </div>
                        <div id="form_inputs">
                            <label>Sobrenome</label><br>
                            <input type="text" name="sobrenome" size="40" maxlength="40" required placeholder="Ex:Dantas Feijão"><br>
                            <label>E-mail</label><br>
                            <input type="text" name="email" type="text" size="30" maxlength="55" placeholder="Ex:alcina2017@gmail.com"  required><br>
                            <label>Confirmar Senha</label><br>
                            <input type="password" name="confsenha" min="5" size="25" maxlength="25" required><br>
                            
                            <input name="acao" type="submit" value="Cadastrar" id="submit_cadastro" style="float:right;" onClick=" return validarSenha()">
                        </div><br>
                    </fieldset>
                </form>';
	break;
	default:
        		print "<form name=\"\" method=\"post\" action=\"?area=logar&acao=logar\"> <table>
				<div>
				<span>Email:</span>
				<input type=\"text\" name=\"login\">
				</div>
				<div>
				<span>Senha:</span>
				<input type=\"password\" name=\"senha\">
				</div>
				</table>
				<p style=\"margin-top: 20px;\">
					   			<button type=\"submit\">Logar</button>
					   			<input name=\"acao\" type=\"hidden\" value=\"logar\" />
							</p>
				
				<a href=\"?area=logar&acao=cadastro\">Ainda não sou cadastrado</a>
				</form>";
	
}
}
?>
                <p id="texto_cadastro">
                    Está cansado de se locomover para poder saborear um delicioso açai?<br>
                    Então você está no lugar certo, no Açaida Certa você compra um açai sem sair da sua casa e pode saborea-lo no conforto de sua residência.<br>
                    Faça o cadastro e tenha acesso a nossa variedades de tamanhos e incrementos.<br>
                </p>
                <button class="botao_cadastro" onclick="aparece(1);conta2();botao2()">Cadastro</button>
            </div>
            <div class="col-1 col-m-1">
                
            </div>
        </div>

    </body>
</html>