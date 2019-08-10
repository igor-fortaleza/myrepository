<?php
 
class Cliente
{
	
	/*
	   Fun��o AdicionarCliente($id)
	   Adiciona ao carrinho o produto cujo id na tabela produtos seja $id, passado como par�metro da fun��o.
	   Se o id for inv�lido (NULL ou ''), axibe um alerta e retorna FALSE.
	   Se o produto j� estiver no carrinho, exibe um alerta e retorna FALSE.
	*/
	
	public function AdicionarCliente($nome,$sobrenome,$usuario,$email,$senha)
	{
		
		$my = new MySQLiConnection();
		$stmt = $my->prepare("INSERT INTO cliente(nome, sobrenome, usuario, email, senha) VALUES (?, ?, ?, ?, ?)");
		$stmt->bind_param('sssss', $nome , 
		$sobrenome,
		$usuario,
		$email,
		$senha);
		$stmt->execute(); 
		
		$newId = $stmt->insert_id;
		
		$stmt->close();
		 
		$_SESSION['usuario_compra'] = array();
		$_SESSION['usuario_compra']['usuario'] = $login;
		$_SESSION['usuario_compra']['id'] = $newId;
		
	return "Cadastro efetuado com sucesso. Seu login ja foi efetuado. <br><br><a href='?area=produtos'>Ver Produtos</a>";
		
	}
	
	public function ValidaCliente($login, $senha)
	{
		 
		$mysqli = new MySQLiConnection();
		$query = "SELECT id_cliente, usuario, senha FROM cliente WHERE usuario=? and senha=?";
		$statement = $mysqli->prepare($query);
		
		// (s = string, i = integer, d = double,  b = blob)
		$statement->bind_param('ss', $usuario, $senha);
		
		//executa
		$statement->execute();
		
		$statement->bind_result($id_cliente, $usuario, $senha);
		$total = 0;
		
		while($statement->fetch()) {
			$loging = $login;
			$idcliente = $id_cliente;
		$total++;
		}
		if ($total != 0) {
		$_SESSION['usuario_compra'] = array();
		$_SESSION['usuario_compra']['usuario'] = $loging;
		$_SESSION['usuario_compra']['id'] = $idcliente;
		
		echo "<script>alert('Login efetuado com sucesso'); location.href='?area=carrinho'</script>";
		} else 
		{
			echo "<script>alert('Erro ao efetuar login'); location.href='./'</script>";
		}
		//close connection
		$statement->close();
		
	}
	
}