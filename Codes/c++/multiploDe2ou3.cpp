#include <iostream>

using namespace std;

main(){
       setlocale(LC_ALL, "portuguese");
       int n1; 
       
do {
      cout << "Digite um numero inteiro maior que zero: ";                                         
      cin >> n1;
  
      if (n1<0){
      cout << "Erro! esse n�mero n�o � positivo" << endl;
      }
      system("pause");
      system("cls");
      

} while (n1<0);
  
  
  if (n1>0){
  if (n1 % 2 == 0){ cout << n1 << " � multiplo de 2" << endl;}
  
  if (n1 % 3 == 0){ cout << n1 << " � multiplo de 3" << endl;}
  else{
       cout << "Erro!!! Pois "<< n1 << " n�o � multiplo de 2 ou 3" << endl;
       }
  }

  
   system ("pause");
  return 0;
}

