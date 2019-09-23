/******************************************************************************
*** Programa: Parouimpar.cpp                            data: 28/8/17   ***
*** Autor: Igor Alves Fortaleza turma:  2TNTID                   rev: 0.0.1   ***
*** Recebe número natural maior  que zero e mostre todos os números pares     ***
*** equivalente até o número.                                                 ***
                                                                              ***                               
e mostre seu resultado na tela.                                               ***
*******************************************************************************/

#include <iostream>
#include <iomanip>
#include <cmath>
#include <clocale>
#include <cstdlib>
using namespace std;

main() {
       
   // variaveis           
  
  int n, cont=1;
  
    
  // Recebendo as informações  

  setlocale(LC_ALL, "portuguese");
  cout << fixed << setprecision(2);

  cout << "Digite um número natural: ";
  cin >> n;
  
  //Operção
  
  if (n%2==1){ 
            
  int cont2=1;
  cout  << n << " É número impar" << endl;
  
  while (cont<=n){               
  cout  << cont2 << ", ";       
  cont++;
  cont2+=2;
        }
        }else{
              
  int cont2=2; 
  cout  << n << " É número par" << endl;
  
  while (cont<=n){
  cout << cont2 << ", ";       
  cont++;
  cont2+=2;
  }  
  }

   system ("pause");
  return EXIT_SUCCESS;
   
}
