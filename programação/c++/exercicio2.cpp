/*Igor Alves Fortaleza n�3 2modulo TI*/

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
  
    // Recebendo as informa��es  
    do {
      cout << "Digite um n�mero positivo: ";
      cin >> n;
      
      
      if (n<0){
      cout << "Erro! esse n�mero n�o � negativo" << endl;
      }
      system("cls");

        } while (n<0 );
    
  
  //Oper��o
  

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
