var tamanhoSel = [];
var precosTamanho = [15.50,16.50,18.50];
function carrinhoMeujeito(){

    var adicionais = document.querySelectorAll('[name=adicionais]:checked');
    var tamanho = document.querySelectorAll('[name=tamanho]:checked');
    var complementos =[];   
    var totalJeito = 0;
    for (var i = 0; i < adicionais.length; i++){
        complementos.push(adicionais[i].value);
        totalJeito += 1.50;
    }
    for (var b = 0; b < tamanho.length; b++){
        tamanhoSel.push(tamanho[b].value);
    }
    if (tamanhoSel[0] == 'pequeno'){
        totalJeito += precosTamanho[0];
    }
    else{
        if (tamanhoSel[0] == 'medio'){
            totalJeito += precosTamanho[1];
        }
        else{
            if (tamanhoSel[0] == 'grande'){
                totalJeito += precosTamanho[2];
            }
        }
    }
  alert(complementos + totalJeito +tamanhoSel);
}

var contadores = [1,1,1,1,1,1,1,1,1,1,1,1];
        function conta(numero){
            contadores[numero] += 1;
        
        }
var somaComplementos = 0;
        function corfundo(numero){
            
            var nDiv = ['12','13','14','15','16','17','19','20','21','22','23','24',];
            if (contadores[numero] % 2 != 0 &&  contadores[numero] > 0){
                document.getElementsByTagName('div')[nDiv[numero]].className = 'fundo-roxo';
                somaComplementos +=1.50;
                document.montar.total.value = somaComplementos;
            }
            if (contadores[numero] % 2 == 0 &&  contadores[numero] > 0){
                document.getElementsByTagName('div')[nDiv[numero]].className = 'fundo-sem-cor';
                somaComplementos -=1.50;
                document.montar.total.value = somaComplementos;
            }
        }

        $(function(){
            var animacao = "animated bounce";
            var fim = "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
            $(".grande").hover(function(e){
                $(".grande").addClass(animacao).one(fim, function(){
                    $(this).removeClass(animacao);
                });
                e.preventDefault();
            });
            $(".medio").hover(function(e){
                $(".medio").addClass(animacao).one(fim, function(){
                    $(this).removeClass(animacao);
                });
                e.preventDefault();
            });
            $(".pequeno").hover(function(e){
                $(".pequeno").addClass(animacao).one(fim, function(){
                    $(this).removeClass(animacao);
                });
                e.preventDefault();
            });
        });
var precoTamanhoExibe = [18.50,16.50,15.50];
var contadores2 = [0,0,0];
        function fundo(numero){
            var cores = ['fundo-roxo tamanho', 'fundo-sem-cor tamanho'];
            var numDiv = [7,8,9];
            
            if (numero == 0){
                document.getElementsByTagName('div')[numDiv[0]].className=cores[0];
                document.getElementsByTagName('div')[numDiv[1]].className=cores[1];
                document.getElementsByTagName('div')[numDiv[2]].className=cores[1];
                contadores2[numero] += 1;
                if (contadores2[1] > 0 || contadores2[2] > 0){
                    var contaVezes = contadores2[1];
                    var contaVezes2 = contadores2[2];
                    somaComplementos -= (contaVezes*precoTamanhoExibe[1]); 
                    somaComplementos -= (contaVezes2*precoTamanhoExibe[2]);
                    contadores2[1] = 0;
                    contadores2[2] = 0;
                }
                somaComplementos += precoTamanhoExibe[numero];
                 
                document.montar.total.value = somaComplementos;
            } 
            else if(numero == 1){
                document.getElementsByTagName('div')[numDiv[0]].className=cores[1];
                document.getElementsByTagName('div')[numDiv[1]].className=cores[0];
                document.getElementsByTagName('div')[numDiv[2]].className=cores[1];
                contadores2[numero] += 1;
                if (contadores2[0] > 0 || contadores2[2] > 0){
                    var contaVezes = contadores2[0];
                    var contaVezes2 = contadores2[2];
                    somaComplementos -= (contaVezes*precoTamanhoExibe[0]); 
                    somaComplementos -= (contaVezes2*precoTamanhoExibe[2]);
                    contadores2[0] = 0;
                    contadores2[2] = 0;
                }
                somaComplementos += precoTamanhoExibe[numero];
                
                document.montar.total.value = somaComplementos;
            }
            else if(numero == 2){
                document.getElementsByTagName('div')[numDiv[0]].className=cores[1];
                document.getElementsByTagName('div')[numDiv[1]].className=cores[1];
                document.getElementsByTagName('div')[numDiv[2]].className=cores[0];
                contadores2[numero] += 1;
                if (contadores2[0] > 0 || contadores2[1] > 0){
                    var contaVezes = contadores2[0];
                    var contaVezes2 = contadores2[1];
                    somaComplementos -= (contaVezes*precoTamanhoExibe[0]); 
                    somaComplementos -= (contaVezes2*precoTamanhoExibe[1]);
                    contadores2[0] = 0;
                    contadores2[1] = 0;
                }
                somaComplementos += precoTamanhoExibe[numero];
                document.montar.total.value = somaComplementos;
            }
        }

        var vCont2 = 1;
        function conta2(){
            vCont2 = vCont2 + 1;
        }
        function abrir(){
            if (vCont2 % 2 == 0 &&  vCont2 > 0){
                document.montar.botao.value = 'Monte do seu jeito';
                document.getElementsByTagName('h3')[0].className='nao-visivel';
                document.getElementById('meu-jeito').style.display='none';
                window.location.href='#topo';
            }
            else{
                document.montar.botao.value = 'Fechar';
                document.getElementsByTagName('h3')[0].className='visivel';
                document.getElementById('meu-jeito').style.display='inherit';
                window.location.href='#topo';
            }
            
        }
        $(function(){
            var animacao = "animated bounceInDown";
            var fim = "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
            $(".monte").click(function(e){
                $(".anima_meu_jeito").addClass(animacao).one(fim, function(){
                    $(this).removeClass(animacao);
                });
                e.preventDefault();
                $("#htres").addClass(animacao).one(fim, function(){
                    $(this).removeClass(animacao);
                });
                e.preventDefault();
            });
        });

        var valor_pedido = 0;
        var itens_pedidos = [];
        var nomes_combos = ['Açai Ninja ', 'Açaí Candy ', 'Açaí da Casa ', 'Açaí do Chef ', 'Açaí Crocante ', 'Açaí Energético '];
        var valor_combos = [19.90,18.90,17.00,17.00,15.90, 15.90];
        var nomes_inputs = ['item-1'];
        function soma(numero_combo){
            valor_pedido += valor_combos[numero_combo];
            document.carrinho.total.value = valor_pedido.toFixed(2);
            itens_pedidos[numero_combo] = nomes_combos[numero_combo];
            document.getElementsByTagName('input')[0].value = itens_pedidos[numero_combo];
        }
        /*function adiciona(nome){
            var selecionados=[];
            var cont = 0;
            for (cont = 0; cont <= 15; cont++){
                selecionados[cont] = prompt('Digite o nome do açai');
            }
        }*/

        var vCont3 = 1;
        function conta3(){
            vCont3 = vCont3 +1;
        }
        function abaixaCarrinho(){
            if (vCont3 % 2 == 0 &&  vCont3 > 0){
                document.getElementById('itens-carrinho').style.top='-200px';
            }
            else{
                document.getElementById('itens-carrinho').style.top='80px';
            }
        }
