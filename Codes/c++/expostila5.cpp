/******************************************************************************
*** Programa: expostila5.cpp                                   data: 21/8/17 ***
*** Autor: Igor Alves Fortaleza turma:  2TNTID                   rev: 0.0.1 ***
*** Escreva um c�digo em C/C++ onde o usu�rio deve inserir o valor do raio  ***
de uma circunfer�ncia em cm e o programa deve calcular e mostrar a �rea     ***
em cm� e o comprimento da circunfer�ncia em cm.                             ***
                                                                            ***                               
e mostre seu resultado na tela.                                             ***
*******************************************************************************/
#include <iostream>
#include <iomanip>
#include <cmath>
#include <clocale>
#include <cstdlib>
using namespace std;

main() {
       
   // variaveis           
  
  double area,raio,comp;
  
    
  // Recebendo as informa��es  

  setlocale(LC_ALL, "portuguese");
  cout << fixed << setprecision(2);

  cout << "Digite o raio em cm: ";
  cin >> raio;
  area = M_PI * pow(raio,2);
  comp = 2 * M_PI * raio;
  
   cout << "A area da circufer�ncia � de  " << setprecision(5) << area << "cm�!" <<  endl;
   cout << "O comprimento da circufer�ncia � de  " << setprecision(5) << comp << "cm!" <<  endl;
   
   system ("pause");
  return EXIT_SUCCESS;
   
}
