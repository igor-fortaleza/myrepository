<?php
$area = isset($_GET['area']) ? $_GET['area'] : NULL;
$acao = isset($_GET['acao']) ? $_GET['acao'] : NULL;
$objCar = new Carrinho;

if ($area == "carrinho")
{
	
	if ($acao == "adicionar")
	{
		$id = isset ($_GET['id']) ? (int)$_GET['id'] : NULL;
		$objCar->AdicionarProduto ($id);
		
	}
	
	if ($acao == "remover")
	{
		$id = isset ($_GET['id']) ? (int)$_GET['id'] : NULL;
		$objCar->RemoverProduto ($id);
	}
	
	if ($acao == "alt_qtde")
	{
		$id = isset ($_GET['id']) ? (int)$_GET['id'] : NULL;
		$n_qtde = isset ($_POST['qtde_'.$id]) ? (int)$_POST['qtde_'.$id] : 1;
		$objCar->AlterarQuantidade($id, $n_qtde);
	}
	
	

	echo "
	<h2>Carrinho de Compras</h2>
	<div class=\"carrinho col-12 col-m-12\">
	  <div class=\"menu_carrinho col-12 col-m-12\">
      <div class=\"col-2 col-m-2 \" style=\"text-align:center\">Imagem</div>
 	   <div class=\"col-3 col-m-3\" style=\"text-align:center\">Nome</div>
 	   <div class=\"col-2 col-m-2\"style=\"text-align:center\">Pre&ccedil;o<br />Unit&aacute;rio</div>
    	<div class=\"col-2 col-m-2\" style=\"text-align:center\">Qunatidade</div>
		<div class=\"col-2 col-m-2\" style=\"text-align:center\">Subtotal deste<br />Produto</div>
		<div class=\"col-1 col-m-1\" style=\"text-align:center;\">Excluir<br />Produto</div>
  	</div>
	";
	

	$carrinho = isset ($_SESSION['carrinho']) ? $_SESSION['carrinho'] : array();


	if (count ($carrinho) == 0)
	{
		echo "
		<div>
		  <div colspan=\"5\" style=\"text-align:center\"><strong><em>
	 	   N&atilde;o h&aacute; produtos em seu carrinho de compas.</em></strong>
	 	</div>
		</div>
        </div>
		<p><a href=\"?area=produtos\">Ver lista de produtos</a></p>
		";
	}
	else
	{
   		for ($a = 0; $a < count($carrinho); $a++)
		{
    		$id = $carrinho[$a]['id'];
    		$nome = ($carrinho[$a]['nome']);
    		$preco = number_format ($carrinho[$a]['preco'], 2, ",", "");
    		$desc = ($carrinho[$a]['descricao']);
            $imagem = ($carrinho[$a]['imagem']);
			$qtde = $carrinho[$a]['qtde'];
			$subtotal = number_format(($carrinho[$a]['preco'] * $qtde), 2, ',', '');
			
			
			echo "
    		<div class=\" linha col-12 col-m-12\" >
            <div  class=\"celulas col-2 col-m-2\"><img src=\"imagens/".$imagem.".jpg\"></div>
	     	 <div class=\"celulas col-3 col-m-3\" >".$nome."</div>
	     	 <div class=\"celulas col-2 col-m-2\" >R$ ".$preco."</div>
	      	<div class=\"celulas col-2 col-m-2\" >
	     	 <form action=\"?area=carrinho&amp;acao=alt_qtde&amp;id=".$carrinho[$a]['id']."\"method=\"post\">
	      	<input type=\"text\" name=\"qtde_".$id."\" value=\"".$qtde."\" style=\"width: 30px;height: 15px;font-size:13px;text-align:center;border:inset 1px black;\" maxlength=\"2\" /><br />
	      	<input type=\"submit\" value=\"Alterar\" style=\"width: 80px;height: 20px;font-size:13px;margin:0;padding:0;cursor:pointer;background:#ccc;border: inset 1px black\" />
	     	 </form>
	      	</div>
	      	<div class=\"celulas col-2 col-m-2\" >R$ ". $subtotal ."</div>
            <a href=\"?area=carrinho&amp;acao=remover&amp;id=" .$id. "\" onclick=\"return ConfirmarExclusaoProduto()\">
	      	<div class=\"celulas excluir col-1 col-m-1\" >Excluir</div>
            </a>
            </div> 
	    	";
    	}// fecha for
    
   		echo "
    	<div class=\"linha_total col-12 col-m-12\">
        <div class=\"col-9 col-m-9\" style=\"text-align:right;\"><b>Frete Grátis</b></div>
        <div class=\"col-3 col-m-3 total\"><b>Total &nbsp;".$_SESSION['total']."</b></div>
    	</div>
        
    	</div>
   	 ";
	}// fecha else
}
?>

        <div style="padding-top: 10px;">
            <br><br>
            <form name="form_endereco">

                  <fieldset class="endereco">
                    <legend>Endereço de Entrega</legend>

                    <button class="small" onclick="preencher();abreloading();" onmousemove="imagemroxa();" onmouseout="imagemverde();" type="button"><img id="pontolocaliza" src="imagens/localizacao.png"> Preencher com minha localização atual</button>
                      <br><br>
                    <div class="localizacao">
                        <label>Rua<br>
                          <input type="text" name="rua" required>
                            <br>
                        </label>

                        <label>Número<br>
                          <input type="text" name="numero" required>
                            <br>
                        </label>
                    </div>
                    <div class="localizacao">
                        <label>Cidade<br>
                          <input type="text" name="cidade" required>
                            <br>
                        </label>

                        <label>Bairro<br>
                          <input type="text" name="bairro" required>
                            <br>
                        </label>
                    </div>
                    <div class="localizacao">
                        <label>CEP<br>  
                          <input type="text" name="cep" required>
                            <br>
                        </label>
                    </div>
                  </fieldset>  
            </form>
</div   >
        <div id="carregando">
            <img src="imagens/loading.gif">
        
        </div><br>
<?php
 echo "<br><br><div class=\"continuar_div\"><a id=\"continuar_a\" href=\"?area=produtos\">Continuar Comprando</a></div> <div class=\"finalizar_div\"><a id=\"finalizar_a\" href=\"?area=finalizar&acao=finalizar\">Finalizar Pedido</a></div>";
?>