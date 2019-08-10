<form name="montar">
                        <input type="button" name="botao" value="Monte do seu jeito" class="monte row" onclick="abrir();conta2();" href='#meu-jeito'>
                        <h3 id="htres" class="nao-visivel">Monte do seu jeito</h3>
                        <div id="meu-jeito" class="row anima_meu_jeito">

                        <div class="seleciona-tamanho">
                            <h5>Tamanho</h5>
                            <div id="grande" class="tamanho grande">
                                <input type="radio" name="tamanho" value="grande" onclick="fundo(0);">
                                <p>Grande (700ml)</p>
                            </div><br>
                            <div id="medio" class="tamanho medio">
                                <input type="radio" name="tamanho" value="medio" onclick="fundo(1);">
                                <p>Medio (500ml)</p>
                            </div><br>
                            <div id="pequeno" class="tamanho pequeno">
                                <input type="radio" name="tamanho" value="pequeno" onclick="fundo(2);">
                                <p>Pequeno (350ml)</p>
                            </div><br>
                        </div>
                        <div class="seleciona-adicionais">
                            <h5>Adicionais</h5>
                            <div class="fileira-esquerda">
                                <div id="item">
                                    <input type="checkbox" name="adicionais" value="banana" onclick="corfundo(0);conta(0);"><br>
                                    <p> Banana</p>
                                </div><br>
                                <div id="item">
                                    <input type="checkbox" name="adicionais" value="morango" onclick="corfundo(1);conta(1);"><br>
                                    <p> Morango</p>
                                </div><br>
                                <div id="item">
                                    <input type="checkbox" name="adicionais" value="abacaxi" onclick="corfundo(2);conta(2);"><br>
                                    <p> Abacaxi</p>
                                </div><br>
                                <div id="item">
                                    <input type="checkbox" name="adicionais" value="kiwi" onclick="corfundo(3);conta(3);"><br>
                                    <p> Kiwi &nbsp;</p>
                                </div><br>
                                <div id="item">
                                    <input type="checkbox" name="adicionais" value="uva" onclick="corfundo(4);conta(4);"><br>
                                    <p> Uva &nbsp;</p>
                                </div><br>
                                <div id="item">
                                    <input type="checkbox" name="adicionais" value="manga" onclick="corfundo(5);conta(5);"><br>
                                    <p> Manga &nbsp;</p>
                                </div><br>
                            </div>
                            <div class="fileira-direita">
                                <div id="item">
                                    <input type="checkbox" name="adicionais" value="leite-condensado" onclick="corfundo(6);conta(6);"><br>
                                    <p> Leite Condensado</p>
                                </div><br>
                                <div id="item">
                                    <input type="checkbox" name="adicionais" value="farinha-lactea" onclick="corfundo(7);conta(7);"><br>
                                    <p> Farinha Láctea</p><br>
                                </div><br>
                                <div id="item">
                                    <input type="checkbox" name="adicionais" value="granola" onclick="corfundo(8);conta(8);"><br>
                                    <p> Granola</p><br>
                                </div><br>
                                <div id="item">
                                    <input type="checkbox"name="adicionais" value="chocobol"  onclick="corfundo(9);conta(9);"><br>
                                    <p> Chocobol</p><br>
                                </div><br>
                                <div id="item">
                                    <input type="checkbox" name="adicionais" value="sucrilhos" onclick="corfundo(10);conta(10);"><br>
                                    <p> Sucrilhos</p><br>
                                </div><br>
                                <div id="item">
                                    <input type="checkbox" name="adicionais" value="m&m" onclick="corfundo(11);conta(11);"><br>
                                    <p> M&M </p><br>
                                </div><br>
                                
                            </div>
                        </div>
                            <input type="button" name="total" value="0">
                            <button id="addmeujeito" onclick="carrinhoMeujeito()">Adicionar ao Carrinho</button>
                    </div>
                    </form>

                    <form name="produtos">
                    <h3>Combos Prontos</h3>
                        
<?php
/*
**  PÃ¡gina que exibe todos os produtos do banco de dados e se selecionado, os detalhes do mesmo
*/

require_once ("libs/classes/produtos.php");

$area = isset($_GET['area']) ? $_GET['area'] : NULL;
$acao = isset($_GET['acao']) ? $_GET['acao'] : NULL;
$produtos = new Produtos();

if ($area != "produtos")
{
	 header("location: ?area=produtos");
	}
	
	switch ($acao) {
                        

		case "informacoes":
			$id = isset($_GET['id']) ? $_GET['id'] : NULL;
			
			$produtos->DetalhesProdutos($id);

			setcookie('ultcategoria',$produtos->getCategoria(), time()+172800);

            
				$linkadd = '
                            <a href="?area=carrinho&acao=adicionar&id='.$produtos->getID().'">
                            <input type="button" value="+"></a>
                            ';			
			
			$my = new MySQLiConnection();
			$sql = $my->query ("Select * From produtos where categoria=".$produtos->getCategoria()." ORDER BY RAND() LIMIT 5");
				?>
    
                        
                    
<?php
      
			while ($x = $sql->fetch_object())
			{
                
                    
echo '                          
                            <div id="combo">
                        <div class="foto"> <img src="imagens/acai1.jpg"></div>
                        <div class="detalhes">
                            <h4>'.$x->nome.'</h4>
                            <p>'.$x->descricao.'</p>
                        </div>
                        <div class="adicionar">
                            <p><b>R$ '.$x->preco.'</b></p>
                           '.$linkadd.'</div></div>';            
}
			
			
break;
		default:

			$produtos->ListarProdutos();
			
break;

}?>
                        </form>
                    
