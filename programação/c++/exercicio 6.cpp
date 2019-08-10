#include <iostream>
using namespace std;

main() {
       
   // variaveis           
  int n1, n2, n3;
  
    
  // Recebendo as informações  
  cout << "Digite primeiro numero : ";
  cin >> n1;
  cout << "Digite segundo numero : ";
  cin >> n2;
  cout << "Digite terceiro numero : ";
  cin >> n3;


  // Operando a conta e exibindo
  if (n1 > n2){
         if(n2 > n3){
                 cout << n3 << endl; 
                 cout << n2 << endl;
                 cout << n1 << endl;
              }
              else {
                    cout << n2 << endl; 
                    cout << n3 << endl;
                    cout << n1 << endl;
                    } 
                                 
                     }
                     
                      else { 
                            if (n2 > n3){
                            cout << n1 << endl;
                            cout << n3 << endl;
                            cout << n2 << endl;
                            } 
                            else {
                            cout << n1 << endl;
                            cout << n2 << endl;
                            cout << n3 << endl;
                            
                     } }
 
  
  system ("pause");
  return 0;
}
