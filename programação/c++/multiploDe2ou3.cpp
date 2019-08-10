#include <iostream>

using namespace std;

main(){
       setlocale(LC_ALL, "portuguese");
       int n1; 
       
do {
      cout << "Digite um numero inteiro maior que zero: ";                                         
      cin >> n1;
  
      if (n1<0){
      cout << "Erro! esse número não é positivo" << endl;
      }
      system("pause");
      system("cls");
      

} while (n1<0);
  
  
  if (n1>0){
  if (n1 % 2 == 0){ cout << n1 << " é multiplo de 2" << endl;}
  
  if (n1 % 3 == 0){ cout << n1 << " é multiplo de 3" << endl;}
  else{
       cout << "Erro!!! Pois "<< n1 << " não é multiplo de 2 ou 3" << endl;
       }
  }

  
   system ("pause");
  return 0;
}

