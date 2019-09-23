/******************************************************************************
*** Programa: 0a59.cpp                                   data: 14/8/17 **
*** Autor: Igor Alves Fortaleza turma:  2TNTID                   rev: 0.0.1 ***
*** Descricao: O usuario digita um numero de 0 a 59 e o resultado sera um numero
a frente, caso seja 59 o resultado devera ser 0.                            ***
*******************************************************************************/
#include <iostream>
using namespace std;

main() {
       
   // variaveis           
  int n, r;
  
    
  // Recebendo as informações  
  cout << "Digite um numero de 0 a 59: ";
  cin >> n;


  // Operando a conta e exibindo
  r = (n + 1)%60;
 
  cout << n << " -> " << r << endl;
  system ("pause");
  return 0;
}
