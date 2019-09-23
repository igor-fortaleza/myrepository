#include <iostream>
#include <iomanip>
#include <cmath>
#include <clocale>
#include <cstdlib>

using namespace std;



main(){
setlocale(LC_ALL, "portuguese");

       int cont=1,contd=0,soma,soma2,contd2=0,contm=2;
       int d[7],d2[7];
       
       while(cont<=8){
       cout << "Digite o "<< cont << "º numero: ";
       cin >> d[contd];
       cont++;
       contd++;
       }   
       while (contd2<=7 && contm<=9){    
        d2[contd2]= d[contd2]*contm;
        contd2++;
        contm++;
        }
        
        
        soma=(d2[0]+d2[1]+d2[2]+d2[3]+d2[4]+d2[5]+d2[6]+d2[7])%11;
        soma2=11-soma;
        
        if(soma2>1){

        if(soma2==10){
                      cout << "o seu digito é: " << "x" << endl;
                      cout << d[0] << d[1] << "." << d[2] << d[3] << d[4]<< "." << d[5] << d[6] << d[7] << "-" << "x" << endl; 
        if(soma2==11){
                     cout << "o seu digito é: " << "0" << endl;
                     cout << d[0] << d[1] << "." << d[2] << d[3] << d[4]<< "." << d[5] << d[6] << d[7] << "-" << "0" << endl; 
        }
        }
        if (soma2 != 10 && soma2 != 11){
        cout << "O seu digito é: " << soma2 << endl; 
        cout << d[0] << d[1] << "." << d[2] << d[3] << d[4]<< "." << d[5] << d[6] << d[7] << "-" << soma2 << endl;       
        }
        }                 

                     
                     
                     
system("pause");
return 0;
       }
       
