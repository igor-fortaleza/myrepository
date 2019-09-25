const express = require("../node_modules/express");
const app = express();

//barra do get - é o caminho por onde vai ser chamado a request
//req - recebe os paramtros 
//res - envia parametros
app.get("/", function(req, res){
  //send - enviar para o servidor
  res.send('Seja bem vindo ao app')
});

app.get("/sobre", function(req, res){
  res.send('Minha página sobre')
});

app.get("/blog", function(req, res){
  res.send("Bem vindo ao meu blog!");
});

// /: - tudo que vier depois desses caracter é entendido como parametro
app.get('/ola/:nome/:idade', function(req, res){
  res.send('<h1> Ola '+req.params.nome+'</h1>\n'+
            '<h2> Sua idade e: '+req.params.idade+'</h2>');
  res.send();
});
//obs: é necessario enviar os parametros para iniciação ex: (localhost:porta/ola/igor/20)

//Quando há function a virula de uma outra função é para executar junto quando a primeira função for chamada
app.listen(8988, function(){
  console.log('Servidor Rodando!')
});