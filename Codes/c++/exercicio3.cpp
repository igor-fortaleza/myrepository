/*Igor Alves Fortaleza nº3 2modulo TI*/

#include <iostream>
#include <iomanip>
#include <cmath>
#include <clocale>
#include <cstdlib>
using namespace std;

main() {
       
   // variaveis           
  
  int n1, n2, n3, cont, cont2;
  
  setlocale(LC_ALL, "portuguese");
  cout << fixed << setprecision(2);
  

      cout << "Digite um número inteiro: ";
      cin >> n1;
      
      cout << "Digite um número inteiro: ";
      cin >> n2;
      
      cout << "Digite um número inteiro: ";
      cin >> n3;

    
  
if (n1 < n2){
if (n2 < n3) // 123
{
                 cont = n1;
                 cont2 = n3;
                 while (cont<=n2) {
                 cout  << cont << endl;  
                 cont++;
}
                 while (cont2>=n2) {
                 cout  << " --------- "<<cont << endl;  
                 cont2--;
}

}
else // 132
{
                           cont = n1;
                           cont2 = n2;
                           while (cont<=n3) {
                           cout  << cont << endl;  
                           cont++;
                            
} 

                 while (cont2>=n1) {
                 cout  << " --------- "<< cont << endl;  
                 cont2--;
}
  
}                        
}
else {
     
if(n2 < n3) 
{
if (n1 > n3)  // 312
{  
                 cont = n2;
                 cont2 = n1;
                 while (cont<=n3) {
                 cout  << cont << endl;  
                 cont++;  
}
                 while (cont2>=n2) {
                 cout  <<" --------- "<< cont << endl;  
                 cont2--;
}
  
}
}

else // 213
 {
                           cont = n2;
                           cont2 = n3;
                           while (cont<=n3) {
                           cout  << cont << endl;  
                           cont++; 
     
} 
                 while (cont2>=n2) {
                 cout  <<" --------- "<< cont << endl;  
                 cont2--;
}
}                                 
                         
if (n1 > n3){ 
if (n2 > n3) //321
{
         
                           cont = n3;
                           cont2 = n1;
                           while (cont<=n2) {
                           cout  << cont << endl;  
                           cont++;
                            
}
                 while (cont2>=n3) {
                 cout  <<" --------- "<< cont << endl;  
                 cont2--;
} 
}}
else // 231
{
                           cont = n3;
                           cont2 = n2;
                           while (cont<=n1) {
                           cout  << cont << endl;  
                           cont++;
                            
}
                 while (cont2>=n3) {
                 cout  << " --------- "<<cont << endl;  
                 cont2--;
}
} 
}





   system ("pause");
  return EXIT_SUCCESS;
   
}
