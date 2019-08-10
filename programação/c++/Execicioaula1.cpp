/******************************************************************************
*** Programa: Exercicioaula1.cpp                                   data: 28/8/17 ***
*** Autor: Igor Alves Fortaleza turma:  2TNTID                   rev: 0.0.1  ***
*** Recebe número natural maior  que zero e mostre todos os números de 1 até ***
onúmero recebido                                                             ***
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
  
  int n,cont=1;
  
    
  // Recebendo as informações  

  setlocale(LC_ALL, "portuguese");
  cout << fixed << setprecision(2);

  cout << "Digite um número natural: ";
  cin >> n;
  
  //Operção
  
  while(cont<=n){
  cout  << cont << ", ";       
  cont++;
          }

   system ("pause");
  return EXIT_SUCCESS;
   
}
