/******************************************************************************
*** Programa: expostila5.cpp                                   data: 21/8/17 ***
*** Autor: Igor Alves Fortaleza turma:  2TNTID                   rev: 0.0.1  ***
*** Escreva um c�digo em C/C++ onde o usu�rio deve inserir o valor do raio   ***
de uma esfera em cm e o programa deve calcular e mostrar o volume em cm�     ***
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
  
    
  // Recebendo as informa��es  

  setlocale(LC_ALL, "portuguese");
  cout << fixed << setprecision(2);

  cout << "Digite o raio em cm: ";
  cin >> raio;
  

  r = M_PI * pow(raio,3)*3/4 ;

  
   cout << "O volume �  " << setprecision(5) << r << "cm�!" <<  endl;

   
   system ("pause");
  return EXIT_SUCCESS;
   
}
