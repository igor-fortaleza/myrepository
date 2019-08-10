#include <iostream>
#include <iomanip>
#include <cmath>
#include <clocale>
#include <cstdlib>
using namespace std;
using namespace std;


  
  
main()
{
  setlocale(LC_ALL, "portuguese");
  cout << fixed << setprecision(2); 
  
      int a,b,c;
          do {
      cout << "Digite 1º número positivo: ";
      cin >> a;
      cout << "Digite 2º número positivo: ";
      cin >> b;
      cout << "Digite 3º número positivo: ";
      cin >> c;
      if (a<0 || b<0 || c<0){
      cout << "Erro!!! Algum número não é positivo" << endl;
      }
      system("pause");
      system("cls");
      }while(a<0 || b<0 || c<0);
      

   if (a>b && a>c){
    if (b>c){
     cout << c << "," << b << "," << a << endl;
    }else{
     cout << b << "," << c << "," << a << endl;
   }} else {
    if (c>a && b>c){
     if (a>c){
      cout << a << "," << b << "," << c << endl;
     }}else {
      cout << b << "," << a << "," << c << endl;
      }
   if (c>a && c>b){
    if (a>c){
     cout << b << "," << a << "," << c << endl;
    }}else{
     cout << a << "," << b << "," << c << endl;
     }
    
  
  system("pause");
  return EXIT_SUCCESS;
}

