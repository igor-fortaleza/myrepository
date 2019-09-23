var vCont = 1;
        function conta(){
            vCont = vCont + 1;
        }
        var vCont2 = 1;
        function conta2(){
            vCont2 = vCont2 + 1;
        }
        function aparece(valor){
                var valores = ['form_login','form_cadastro'];
                var formulario = valores[valor];
                if (valor == 0){
                    document.getElementById(formulario).style.visibility='visible';
                    document.getElementById(formulario).style.height='175px';
                    document.getElementById('texto_login').style.height='0px';
                    document.getElementById('texto_login').style.visibility='collapse';
                     document.getElementById('submit_login').style.visibility='visible';
                    if (vCont % 2 == 0 &&  vCont > 0){
                        document.getElementById(formulario).style.visibility='collapse';
                        document.getElementById(formulario).style.height='0';
                        document.getElementById('texto_login').style.height='auto';
                        document.getElementById('texto_login').style.visibility='visible';
                        document.getElementById('submit_login').style.visibility='collapse';
                    }
                }
                else{
                    document.getElementById(formulario).style.visibility='visible';
                    document.getElementById(formulario).style.height='245px';
                    document.getElementById('texto_cadastro').style.height='0px';
                    document.getElementById('texto_cadastro').style.visibility='collapse';
                    document.getElementById('submit_cadastro').style.visibility='visible';

                    if (vCont2 % 2 == 0 &&  vCont2 > 0){
                        document.getElementById(formulario).style.visibility='collapse';
                        document.getElementById(formulario).style.height='0px';
                        document.getElementById('texto_cadastro').style.height='auto';
                        document.getElementById('texto_cadastro').style.visibility='visible';
                        document.getElementById('submit_cadastro').style.visibility='collapse';
                        
                    }
                }
        }
                        function botao(){
                        document.getElementById('form_cadastro').style.visibility='collapse';
                        document.getElementById('form_cadastro').style.height='0px';
                        document.getElementById('texto_cadastro').style.height='auto';
                        document.getElementById('texto_cadastro').style.visibility='visible';
                        document.getElementById('submit_cadastro').style.visibility='collapse';
                        
                    if (vCont%2==0){      
                        document.getElementById('form_login').style.visibility='visible';
                        document.getElementById('form_login').style.height='175px';
                        document.getElementById('texto_login').style.height='0px';
                        document.getElementById('texto_login').style.visibility='collapse';
                        document.getElementById('submit_login').style.visibility='visible';
                        vCont2=1;
                    }


                    }
                    function botao2(){
                        document.getElementById('form_login').style.visibility='collapse';
                        document.getElementById('form_login').style.height='0';
                        document.getElementById('texto_login').style.height='auto';
                        document.getElementById('texto_login').style.visibility='visible';
                        document.getElementById('submit_login').style.visibility='collapse';
                    if (vCont2%2==0){
                        document.getElementById('form_cadastro').style.visibility='visible';
                        document.getElementById('form_cadastro').style.height='245px';
                        document.getElementById('texto_cadastro').style.height='0px';
                        document.getElementById('texto_cadastro').style.visibility='collapse';
                        document.getElementById('submit_cadastro').style.visibility='visible';
                        vCont=1;
                    }
                    }
      
        
        
        function validarSenha(){
	        senha = document.formulario_cadastro.senha.value;
	        confsenha = document.formulario_cadastro.confsenha.value;
 
            if (senha != confsenha){
                alert("SENHAS DIFERENTES");
                document.formulario_cadastro.senha.value = "";
                document.formulario_cadastro.confsenha.value = "";
                document.formulario_cadastro.senha.focus();
                return false;
            }

}