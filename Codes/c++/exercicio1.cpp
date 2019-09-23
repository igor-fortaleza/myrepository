/*Igor Alves Fortaleza nº3 2modulo TI*/
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
 
  
    // Recebendo as informações  
  do {
      cout << "Digite um número natural: ";
      cin >> n;
      
      if (n<0){
      cout << "Erro! esse número não é negativo" << endl;
      }
      system("cls");

        } while (n<0);
    
  int cont=1;
  //Operção
  
  while(cont<=n){
   
  if (cont%3==0){
        cout  << "*" << ", ";
          }else {
          cout  << cont << ", ";  
                }cont++;}

   system ("pause");
  return EXIT_SUCCESS;
   
}
