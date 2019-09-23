 import javax.swing.*;
 public class Prova2 {
 public static void main(String args[]){
  
   int cont=0,cont2=4;
   int[] vetA ={1, 3, 5, 7, 9};
   int[] vetB ={2, 4, 6, 8, 10};

   while (cont <= 4 || cont2 >=1){
  System.out.print(vetA[cont]+", ");
  System.out.print(vetB[cont2]+", ");
  
  cont++;
  cont2--;
   if (cont2==0){
   
  System.out.print(vetB[0]+" ");
  }
   }
  
   
     }
 }
 