/******************************************************************************
*** Programa: exercicio 1.cpp                               data: 29/09/2017*** 
*** Autor: Pedro Manchini N:08 Turma: 2TNTID                      rev: 0.0.1***
*** Descricao: receba um número natural qualquer e mostre na tela umcontador*** 
*** de 1 até o número, mas que substitua os múltiplos de 3 por um *         *** 
******************************************************************************/

#include <iostream>

using namespace std;

main(){
  int n1;
  cout << "Digite um numero inteiro maior que zero: ";                                         
  cin >> n1;
  if (n1 % 2 == 0) cout << n1 << "eh par" << endl;
  else cout << n1 << "eh impar" << endl;
   system ("pause");
  return 0;
}
