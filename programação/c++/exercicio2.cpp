/*Igor Alves Fortaleza nº3 2modulo TI*/

#include <iostream>
#include <iomanip>
#include <cmath>
#include <clocale>
#include <cstdlib>
using namespace std;

main() {
       
   // variaveis           
  
  int n, n2, cont;
  
  setlocale(LC_ALL, "portuguese");
  cout << fixed << setprecision(2);
  
    // Recebendo as informações  
    do {
      cout << "Digite um número positivo: ";
      cin >> n;
      
      
      if (n<0){
      cout << "Erro! esse número não é negativo" << endl;
      }
      system("cls");

        } while (n<0 );
    
  
  //Operção
  

  if (n%3==0){ 
    cont=3;
    
    while (cont<=n){
 cout  << cont << endl;  
      cont+=3;    
       } }               

else{
 cont=2;
     while(cont<=n) {
      cout  << cont << endl;  
      cont+=2; 
}    
}



   system ("pause");
  return EXIT_SUCCESS;
   
}
