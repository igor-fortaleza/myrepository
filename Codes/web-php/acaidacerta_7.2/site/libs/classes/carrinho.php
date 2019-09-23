<?php
 
class Carrinho
{
	
	/*
	   Fun��o AdicionarProduto($id)
	   Adiciona ao carrinho o produto cujo id na tabela produtos seja $id, passado como par�metro da fun��o.
	   Se o id for inv�lido (NULL ou ''), axibe um alerta e retorna FALSE.
	   Se o produto j� estiver no carrinho, exibe um alerta e retorna FALSE.
	*/
	
	public function AdicionarProduto($id)
	{
		if ($id == NULL || $id == '' || $id == 0)
		{
			echo "
			<script type=\"text/javascript\">
			alert ('O id do produto deve ser inteiro e maior que zero');
			</script>";
			return false;
		}
		
		/*
		   A fun��o ArrayCarrinho() retorna um array com os id's dos produtos e suas respectivas chaves no array $_SESSION['carrinho'].
		*/
		$aCar = ArrayCarrinho();
		if (in_array ($id, $aCar))
		{
			//echo "
			//<script type=\"text/javascript\">
			//alert ('O produto que voc� selecionou j� est� em seu carrinho de compras.\\n Para adicionar outra unidade, altere a quantidade do produro.');
			//</script>
			//";
			
		//Se o produto ja existir no carrinho, ele acrescenta +1 na quantidade.
			$k = array_search ($id, $aCar);
				
			$_SESSION['carrinho'][$k]['qtde'] = $_SESSION['carrinho'][$k]['qtde']+1;
			$_SESSION['total'] = $this->Total();
			
			return false;
		}
		
		$my = new MySQLiConnection();  
		$sql = $my->query ("Select * From produtos Where id = ".$id);
		
		if ($sql->num_rows == 0)
		{
			echo "
			<script type=\"text/javascript\">
			alert ('N�o foi encontrado um produto com esse id.');
			</script>";
			return false;
		}
		
		$f = $sql->fetch_object();
		$cod = $f->id;
        $nome = $f->nome;
        $preco = $f->preco;
        $desc = $f->descricao;
        
		//pr�xima chave de $_SESSION['carrinho']:
        $k = isset ($_SESSION['carrinho']) ? count ($_SESSION['carrinho']) : 0;
		
		$_SESSION['carrinho'][$k]['id'] = $cod;
		$_SESSION['carrinho'][$k]['nome'] = $nome;
        $_SESSION['carrinho'][$k]['preco'] = $preco;
        $_SESSION['carrinho'][$k]['qtde'] = 1;
        $_SESSION['carrinho'][$k]['descricao'] = $desc;
        $_SESSION['total'] = $this->Total();
        
        //ordena $_SESSION['carrinho'] por nome de produto:
		//sort ($_SESSION['carrinho'], SORT_STRING);
        	
    }
    
    
    /*
       Fun��o RemoverProduto($id)
       Remove de $_SESSION['carrinho'] o produto cujo id na tabela produtos � $id, passado como par�metro da fun��o.
       Se o id for inv�lido (NULL ou ''), exibe um alerta e retorna FALSE.
    */
    
    public function RemoverProduto($id)
	{
	    if ($id == NULL || $id == '' || $id == 0)
	    {
	        echo "
		    <script type=\"text/javascript\">
		    alert ('O id do produto deve ser inteiro e maior que zero');
		    </script>";
		    return false;
	    }
		
		// encontra a chave cujo id � o passado na fun��o e o coloca na vari�vel $k
		$aCar = ArrayCarrinho();
		$k = array_search ($id, $aCar);
		
		unset ($_SESSION['carrinho'][$k]);
		if (count ($_SESSION['carrinho']))//se ainda houver produtos no carrinho
		{
			//organiza as chaves do array desde zero at� (count ($_SESSION['carrinho']) - 1)
			$car_keys = range (0, (count ($_SESSION['carrinho']) - 1));
			$_SESSION['carrinho'] = array_combine ($car_keys, $_SESSION['carrinho']);
		}
		$_SESSION['total'] = $this->Total();

	}
	
	
	/*
	   Fun��o AlterarQuantidade($id, $n_qtde)
	   Altera a quantidade de unidades do produto cujo id � $id para $n_qtde.
	   Se o id for inv�lido (NULL ou ''), exibe um alerta e retorna FALSE.
	   Se $n_qtde for maior que zero, altera a quantidade do produto; se for igual ou menor que zero, remove-o do carrinho.
	*/
	
	
	public function AlterarQuantidade($id, $n_qtde)
	{
		if ($id == NULL || $id == '' || $id == 0)
	    {
	        echo "
		    <script type=\"text/javascript\">
		    alert ('O id do produto deve ser inteiro e maior que zero');
		    </script>";
		    return false;
	    }
	    
	    if ($n_qtde > 0)
		{
		    // encontra a chave cujo id � o passado na fun��o e o coloca na vari�vel $k
		    $aCar = ArrayCarrinho();
		    $k = array_search ($id, $aCar);
			
		    $my = new MySQLiConnection();
		    $sql = $my->query ("Select * From produtos Where id = ".$id);
		    $f = $sql->fetch_object();
		    $estoque = $f->estoque;
			
		    if ($n_qtde > $estoque) {
		    	echo "
		    <script type=\"text/javascript\">
		    alert ('A quantidade escolhida � maior do que dispomos em estoque. Desculpe-nos o transtorno');
		    </script>";
		    	return false;
		    	
		   		 } else {
		    	$_SESSION['carrinho'][$k]['qtde'] = $n_qtde;
		    	$_SESSION['total'] = $this->Total();
		    	
		    	}
			}
		else
		    $this->RemoverProduto($id);
	
	}
	
	
	
	
	public function Total()
	{
		$carro = isset($_SESSION['carrinho']) ? $_SESSION['carrinho'] : array();
		
		// inicia a vari�vel $total:
		$total = 0;
		
		for ($t = 0; $t < count ($carro); $t++)
		{
			// multiplica o pre�o do produto por sua respectiva quantidade
			$total += $carro[$t]['preco'] * $carro[$t]['qtde'];
		}
		
		// retorna o total j� formatado na forma brasileira
		return number_format ($total, 2, ",", "");
	}
	
}