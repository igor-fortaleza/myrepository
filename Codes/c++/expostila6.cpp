/******************************************************************************
*** Programa: expostila5.cpp                                   data: 21/8/17 ***
*** Autor: Igor Alves Fortaleza turma:  2TNTID                   rev: 0.0.1  ***
*** Escreva um código em C/C++ onde o usuário deve inserir o valor do raio   ***
de uma esfera em cm e o programa deve calcular e mostrar o volume em cm³     ***
 desta esfera.                                                               ***
                                                                             ***                               
e mostre seu resultado na tela.                                              ***
*******************************************************************************/
#include <iostream>
#include <iomanip>
#include <cmath>
#include <clocale>
#include <cstdlib>
using namespace std;

main() {
       
   // variaveis           
  
  double raio,r;
  
    
  // Recebendo as informações  

  setlocale(LC_ALL, "portuguese");
  cout << fixed << setprecision(2);

  cout << "Digite o raio em cm: ";
  cin >> raio;
  

  r = M_PI * pow(raio,3)*3/4 ;

  
   cout << "O volume é  " << setprecision(5) << r << "cm³!" <<  endl;

   
   system ("pause");
  return EXIT_SUCCESS;
   
}
