/*Igor Alves Fortaleza nº3 2modulo TI*/
#include <iostream>
#include <clocale>
#include <math.h>

using namespace std;

main () {
     setlocale (LC_ALL, "portuguese");
     double x1,y1, xy1, x2, y2, xy2, x3,y3, xy3, a, b, c ;
     
     cout << "Ponto A(x): ";
     cin >> x1;
     cout << "Ponto A(y): ";
     cin >> y1;
     cout << "Ponto B(x): ";
     cin >> x2;
     cout << "Ponto B(y): ";
     cin >> y2;
     cout << "Ponto C(x): ";
     cin >> x3;
     cout << "Ponto C(y): ";
     cin >> y3;
     
     xy1 = pow((x1-x2),2) + pow((y1-y2),2);
     xy2 = pow((x2-x3),2) + pow((y2-y3),2);
     xy3 = pow((x3-x1),2) + pow((y3-y1),2);
     
     a = sqrt(xy1);
     b = sqrt(xy2);
     c = sqrt(xy3);
     
     if (a == b && b == c ) {
        cout<<"Este triângulo é equilátero. ";
     }
     if (a == b || a == c || b == c ){
        cout<<"Este triângulo é isóceles. ";
     }
     if (a != b && a != c && c != b ){
        cout<<"Este triângulo é escaleno. ";
     }
     
       system ("pause"); 
       return 0;        
}
