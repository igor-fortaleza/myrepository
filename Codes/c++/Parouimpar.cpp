/******************************************************************************
*** Programa: Parouimpar.cpp                            data: 28/8/17   ***
*** Autor: Igor Alves Fortaleza turma:  2TNTID                   rev: 0.0.1   ***
*** Recebe n�mero natural maior  que zero e mostre todos os n�meros pares     ***
*** equivalente at� o n�mero.                                                 ***
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
  
    
  // Recebendo as informa��es  

  setlocale(LC_ALL, "portuguese");
  cout << fixed << setprecision(2);

  cout << "Digite um n�mero natural: ";
  cin >> n;
  
  //Oper��o
  
  if (n%2==1){ 
            
  int cont2=1;
  cout  << n << " � n�mero impar" << endl;
  
  while (cont<=n){               
  cout  << cont2 << ", ";       
  cont++;
  cont2+=2;
        }
        }else{
              
  int cont2=2; 
  cout  << n << " � n�mero par" << endl;
  
  while (cont<=n){
  cout << cont2 << ", ";       
  cont++;
  cont2+=2;
  }  
  }

   system ("pause");
  return EXIT_SUCCESS;
   
}
