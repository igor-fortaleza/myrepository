/*Igor Alves Fortaleza n�3 2modulo TI*/
#include <iostream>
#include <iomanip>
#include <cmath>
#include <clocale>
#include <cstdlib>

using namespace std;

main() {
       
   // variaveis           
  
  int n;
  
  setlocale(LC_ALL, "portuguese");
 
  
    // Recebendo as informa��es  
  do {
      cout << "Digite um n�mero natural: ";
      cin >> n;
      
      if (n<0){
      cout << "Erro! esse n�mero n�o � negativo" << endl;
      }
      system("cls");

        } while (n<0);
    
  int cont=1;
  //Oper��o
  
  while(cont<=n){
   
  if (cont%3==0){
        cout  << "*" << ", ";
          }else {
          cout  << cont << ", ";  
                }cont++;}

   system ("pause");
  return EXIT_SUCCESS;
   
}
