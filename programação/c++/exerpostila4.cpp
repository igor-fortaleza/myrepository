/******************************************************************************
*** Programa: calculo4.cpp                       data:21/08/17               ***
*** Autor: Igor Alves    turma:2TNTID      rev: 0.0.1     ***
*** Descricao: recebe dois numeros soma, multiplica por um terceiro, eleva a ***
*** o quadrado e depois eleva ao cubo                                        ***
******************************************************************************/

#include <iostream>
#include <cmath>
#include <cstdlib>
#include <iomanip>
#include <clocale>

using namespace std;
main(){
       double x, y, z, esp, quad, raiz;
       setlocale(LC_ALL, "portuguese");
       cout << "Digite o primeiro número: ";
       cin >> x;
       cout << "Digite o segundo primeiro: ";
       cin >> y;
       cout << "Digite o terceiro número: ";
       cin >> z;
       esp = ((x+y)*z);
       quad = pow(esp,2);
       raiz = cbrt(esp);
       cout << "O resultado da expressão é: " << raiz << endl;
       system ("pause");
       return EXIT_SUCCESS;
       }
