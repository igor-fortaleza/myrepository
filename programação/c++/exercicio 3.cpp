/******************************************************************************
*** Programa: exercicio3.cpp                                   data: 9/8/17 ***
*** Autor: Igor Alves Fortaleza turma:  2TNTID                   rev: 0.0.1 ***
*** Descricao: Escreva um programa em C/C++ e receba 3 numeros reais e faça a seguinte operação:

- (n1 + n2)*m

e mostre seu resultado na tela.                                             ***
*******************************************************************************/
#include <iostream>
using namespace std;

main() {
   // variaveis           
  float n1, n2, m, r;
  
  // Recebendo as informações  
  cout << "Digite o primeiro numero: ";
  cin >> n1;
  cout << "Digite o segundo numero: ";         
  cin >> n2;
  cout << "Digite o numero multiplicador: ";         
  cin >> m;      
  
  // Operando a conta e exibindo
  r = (n1 + n2)*m;
  cout << n1 << " x " << n2 << " Multiplicado por " << m << " = " << r << endl;
  system ("pause");
  return 0;
}
