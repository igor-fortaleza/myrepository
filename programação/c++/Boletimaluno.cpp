/*Igor Alves Fortaleza n�3 2modulo TI*/
#include <iostream>
#include <iomanip>
#include <cmath>
#include <clocale>
#include <cstdlib>
using namespace std;

main() {
       
   // variaveis           
  
  int n,n2,f,media;
  
  setlocale(LC_ALL, "portuguese");
  
    // Recebendo as informa��es  
  do {
      cout << "Digite a 1� nota do aluno: ";
      cin >> n;
      cout << "Digite a 2� nota do aluno: ";
      cin >> n2;
      cout << "Digite a frequencia do aluno";
      cin >> f;
      if (n<0 || n>100 || n2<0 || n2>100 || f<0 || f>100){
      cout << "Erro! Uma das notas n�o confere (0 � 100)" << endl;
      }
      system("pause");
      system("cls");
        } while (n<0 || n>100 || n2<0 || n2>100 || f<0 || f>100);
    
  //Oper��o
  
    media = (n+n2)/2;
    
    cout << "M�dia do aluno: " << media << endl;
    cout << "Frequencia: " << f << "%" << endl;
    cout << endl;
    cout << "-------------------------------------- " << endl;
    cout << endl;
    cout << "Estado do aluno :" << endl;
    
    if (f >=75 && media<70){
    cout << "Em Prova Final"<<endl;       
    }
    if(f<75){
    cout << "Reprovado por excesso de faltas"<<endl; 
             }else {
                  if (media>=70){
                  cout << "Aprovado"<<endl; 
                  }
                  }
    

   system ("pause");
  return EXIT_SUCCESS;
   
}
