<head>
    <meta charset="utf-8">
</head>
                        
<?php
class Produtos
{
	
	/*
	   Função AdicionarProduto($id)
	   Adiciona ao carrinho o produto cujo id na tabela produtos seja $id, passado como parâmetro da função.
	   Se o id for inválido (NULL ou ''), axibe um alerta e retorna FALSE.
	   Se o produto já estiver no carrinho, exibe um alerta e retorna FALSE.
	*/
	PRIVATE $id;
	PRIVATE $nome;
	PRIVATE $descricao;
	PRIVATE $preco;
	PRIVATE $estoque;
	PRIVATE $categoria;
    PRIVATE $imagem;
		
	public function CadastraCompraProduto($id, $nome, $qtd, $preco, $total, $clienteid, $imagem, $status)
	{
	
		$my = new MySQLiConnection();
		$stmt = $my->prepare("INSERT INTO compra(produtoid, nome, valor, qtd,  total, clienteid, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param('isdidisd',$id ,
				$nome,
				$preco,
				$qtd,
				$total,
				$clienteid,
                $imagem,
				$status);
		$stmt->execute();
		
		
		$aCar = ArrayCarrinho();
		$k = array_search ($id, $aCar);
		
		unset ($_SESSION['carrinho'][$k]);
		
	}
	public function PegaCategoria()
	{
/*
 * Aqui poderia criar um select de uma tabela de categorias e fazer um rnd, isso caso seja a primeira vez que o usuário
 * entra no site, como não tem essa tabela, então fica um rnd de 1 a 3
 */
		return rand(1,3);
	
	}
	public function DetalhesProdutos($id)
	{
	
		
		
		
		if ($id == NULL || $id == '' || $id == 0)
		{
			echo "
		    <script type=\"text/javascript\">
		    alert ('O id do produto deve ser inteiro e maior que zero');
		    </script>";
			return false;
		}
		
		
		$my = new MySQLiConnection();
		$sql = $my->query ("Select * From produtos Where id = ".$id);
		
		if ($sql->num_rows == 0)
		{
			echo "
			<script type=\"text/javascript\">
			alert ('Não foi encontrado um produto com esse id.');
			</script>";
			return false;
		}
		
		$f = $sql->fetch_object();
		$this->id = $f->id;
		$this->nome = $f->nome;
		$this->preco = $f->preco;
		$this->descricao = $f->descricao;
		$this->estoque = $f->estoque;
        $this->imagem = $f->imagem;
		$this->categoria = $f->categoria;
	
	}
	
	/**
	 * @return the $nome
	 */
	public function getNome() {
		return $this->nome;
	}

	/**
	 * @return the $descricao
	 */
	public function getDescricao() {
		return $this->descricao;
	}

	/**
	 * @return the $preco
	 */
	public function getPreco() {
		return $this->preco;
	}

	/**
	 * @return the $estoque
	 */
	public function getEstoque() {
		return $this->estoque;
	}
	public function getID() {
		return $this->id;
	}
	public function getCategoria() {
		return $this->categoria;
	}
	public function ListarProdutos()
	{
	
        $area = isset($_GET['area']) ? $_GET['area'] : NULL;	
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        $produtos = new Produtos();  
			

        
		$my = new MySQLiConnection();
		$sql = $my->query ("Select * From produtos Order By nome");
		
?>
                 
                        
                    
<?php 
        
			while ($x = $sql->fetch_object())
			{
                
                    
echo '                  <div id="combo">
                        <div class="foto"> <img src="imagens/'.($x->imagem).'.jpg"></div>
                        <div class="detalhes">
                            <h4>'.$x->nome.'</h4>
                            <p>'.$x->descricao.'</p>
                        </div>
                        <div class="adicionar">
                            <p><b>R$ '.$x->preco.'</b></p>
                           <a href="?area=carrinho&acao=adicionar&id='.$x->id.'">
                            <input type="button" value="+"></a></div></div>';            
}
echo'</form>';               
}
}
?>