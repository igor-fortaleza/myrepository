#include <iostream>
#include <iomanip>
#include <clocale>
#include <cstdlib>
using namespace std;

main() {
       
  // variaveis           
  int n,cont=1,n1;
  
    
  // Recebendo as informações  

  setlocale(LC_ALL, "portuguese");
  cout << fixed << setprecision(2);
  cout << "Digite o número da tabuada desejada: ";
  cin >> n;


  // Operando a conta e exibindo

  while (n>=10){
      n = n1
      n1 = n1/10;
      cont ++;    
                     } 

if (cont = 1) {
cout << n << "possui" << cont << "algarismo" << endl;                           
  }
   else {
cout << n << "possui" << cont << "algarismos" << endl;    
}

  system ("pause");
  return 0;
}

    
    
