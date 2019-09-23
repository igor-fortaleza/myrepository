#include <iostream>
#include <iomanip>
#include <clocale>
#include <cstdlib>
using namespace std;

int main() {
       
   // variaveis           
  
  double sbruto,inss,irenda, sliquido;
  
    
  // Recebendo as informações  

  setlocale(LC_ALL, "portuguese");
  cout << fixed << setprecision(2);
  cout << "Digite o valor do sálario bruto (R$): ";
  cin >> sbruto;


  // Operando a conta e exibindo
  irenda = (sbruto*0.075);
  inss = (sbruto*0.08);

  sliquido = sbruto - irenda - inss; 

  cout << "Salário : \t\tR$ " << sbruto << endl;
  cout << "IR : \t\t\tR$ " << irenda <<  endl;
  cout << "INSS : \t\t\tR$" << inss << endl;
  cout << "Sálario Liquido : \t\tR$" << sliquido << endl;
  
  system ("pause");
  return 0;
}
