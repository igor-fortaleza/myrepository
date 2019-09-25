var http = require('http');

//Abrindo um servidor para requisiçoes HTTPs e listando a porta de entrada
//res - funcao para enviar para o servidor
http.createServer(function(req ,res){
  // end - mandar uma menssagem
  res.end('Hello Word!, wellcome to my website');
}).listen(8987);

console.log("Servidor Rodando!")
