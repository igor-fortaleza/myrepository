/******************************************************************************
*** Programa: meuPrimeiroPrograma.cpp                          data: 9/8/17 ***
*** Autor: Igor Alves Fortaleza turma:  2TNTID                   rev: 0.0.1 ***
*** Descricao: recebe 2 numeros reais, calcula o produto entre eles e       ***
*** mostra o resultado na tela.                                             ***
*******************************************************************************/

#include <iostream>
using namespace std;

main() {
   // variaveis           
  float n1, n2, r;
  
  // Recebendo as informações  
  cout << "Digite o primeiro numero: ";
  cin >> n1;
  cout << "Digite o segundo numero: ";         
  cin >> n2;     
  
  // Operando a conta e exibindo
  r = n1 * n2;
  cout << n1 << " x " << n2 << " = " << r << endl;
  system ("pause");
  return 0;
}
