# include <iostream>
# include <clocale>

using namespace std;

int main() {
int TAM_MAX = 10; 
int i;

int VetReais[TAM_MAX], VetCopia[TAM_MAX];

for(i=0; i<TAM_MAX; i++){         
VetReais[i] = i+1;
VetCopia[i] = VetReais[i];

cout << VetCopia[i]<< endl;

}
     
system("pause");
return 0;
     }
