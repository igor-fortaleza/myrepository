/******************************************************************************
*** Programa: expostila3.cpp                                   data: 9/8/17 ***
*** Autor: Igor Alves Fortaleza turma:  2TNTID                   rev: 0.0.1 ***
*** Descricao: Escreva um programa em C/C++ e receba 3 numeros reais e faça a seguinte operação:
(5+x) / (y-2)+ 2*z
e mostre seu resultado na tela.                                             ***
*******************************************************************************/
#include <iostream>
#include <iomanip>
#include <clocale>
#include <cstdlib>
using namespace std;

int main() {
       
   // variaveis           
  
  double x,y,z,r;
  
    
  // Recebendo as informações  

  setlocale(LC_ALL, "portuguese");
  cout << fixed << setprecision(2);

  cout << "Digite o valor x : ";
  cin >> x ;
  cout << "Digite o valor y : ";
  cin >> y ;
  cout << "Digite o valor z : ";
  cin >> z ;
  
  
  // Operando a conta e exibindo
  r = (5+x) / (y-2)+ 2*z;
  
  if (z == 2){
        cout << "Número (Z) não pode ser (0)  " <<  endl;
        
        } else {
               
               cout << "A resposta dos valores é :  " << r << endl;
               }


  
  system ("pause");
  return 0;
}
