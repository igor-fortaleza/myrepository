/* Igor Alves Fortaleza nº3*/
#include <iostream>
#include <iomanip>
using namespace std;
main(){
      int nlin=3;
      int ncol=3;
      int matriz[nlin][ncol];
      int valor;
      int coluna;
      int i;
      
      for(i=0; i<nlin; i++){
      for(coluna=0; coluna<ncol; coluna++){
      matriz[i][coluna]=valor+30;
      valor++;
      cout << matriz[i][coluna]<< endl; 
      }}            
      system("pause");
      }
