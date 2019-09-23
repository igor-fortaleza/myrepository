const funcao1 = param1 => console.log('func1', param1)
const funcao2 = param2 => console.log('func2', param2)
const funcao3 = param2 => console.log('func3', param2)

const compose = param1=> {

  funcao1(param1)
  funcao2(param1+'\n')
}
//Passando parametros em funções
compose('Igor')

// ...pega o resto das funcoes que foi enviada
const compose2 = (func1,...restoFuncoes) => {
  console.log(restoFuncoes+'\n')
}
compose2(funcao1, funcao2, funcao3)

// foreach para cada funcao que foi enviada
const compose3 = (...restoFuncoes) => valor => {
  //Chamando um funcao de cada vez e chamando de FN e enviando ("valor")
  restoFuncoes.forEach(fn => fn(valor))
}
compose3(funcao1, funcao2, funcao3)('igor')

const funcao4 = (p1, p2) => console.log('func4', p1, p2)
const funcao5 = (p1, p2) => console.log('func5', p1, p2)


console.log('\n')
// ... tranforma args em vetor
const compose4 = (...restoFuncoes) => (...args) => {
  // ... de vetor volta a parametro
  restoFuncoes.forEach(fn => fn(...args))
}
const func3 = compose4(funcao4, funcao5)
//para cada funcao dentro da funcao "func3" enviar estes parametros
func3('Igor', 'Alves')
func3('111', '444')