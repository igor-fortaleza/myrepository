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
  
 
       float x, y, z, exp, qd;
       
      cout << "Digite um numero para x: "; 
      cin >> x;
      
      cout << "Digite um numero para y: "; 
      cin >> y;
      
      cout << "Digite um numero para z: "; 
      cin >> z;
      
      x = pow(x, 2);
      y = pow(z, 2);
      z = pow(z, 4);
      
      exp = (x/2+y)*z;
      qd = sqrt(exp);
      cout << "O resultado é: " << qd << endl;
       system("pause");
      return 0;

  

  



   system ("pause");
  return EXIT_SUCCESS;
   
}
