function preencher() {
          if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(function(posicao) {
              var url = "http://nominatim.openstreetmap.org/reverse?lat="+posicao.coords.latitude+"&lon="+posicao.coords.longitude+"&format=json&json_callback=preencherDados";

              var script = document.createElement('script');
              script.src = url;
              document.body.appendChild(script);
            });
          } else {
            alert('seu navegador não suporta geolocation');
          }
        }
function abreloading(){
            var rua = document.form_endereco.rua.value;
            if (rua == ''){
                document.getElementById('carregando').style.display="inherit";
            }
            
        }
function preencherDados(dados) {
  document.getElementById('carregando').style.display="none";
  document.querySelector('[name=rua]').value = dados.address.road;
  document.querySelector('[name=numero]').value = dados.address.house_number;
  document.querySelector('[name=cidade]').value = dados.address.city;
  document.querySelector('[name=bairro]').value = '';
  document.querySelector('[name=cep]').value = dados.address.postcode;  
}

        function imagemverde(){
            document.getElementById('pontolocaliza').src="imagens/localizacao.png";
        }
        function imagemroxa(){
            document.getElementById('pontolocaliza').src="imagens/localizacao1.png";
        }
        