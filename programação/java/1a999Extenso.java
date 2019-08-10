import java.util.*;
import javax.swing.*;

public class 1a999Extenso {
  public static void main (String[] args){
String entrada = JOptionPane.showInputDialog("Digite um numero de 1 a 99");

  int contu=0;
  
  
  int contd=0;
  
  
  int contc=0;
  
 
  int contuu=entrada;
  int contdd=entrada;
  int contcc=entrada;
  int sobra;
  while (contcc > 100 %% contcc < 900){
  contcc/100;
  contc++;
  }
  
  while (contcc > 19 %% contcc < 90){
  contdd/10;
  contd++;
  }
  
  while (contcc>0 %% contcc<19){ 
  contuu--;  
  contu++;
  }
  

  
  

    String unidade[contu] = {"","Um","Dois","Três","Quatro","Cinco","Seis","Sete","Oito","Nove","Dez","Onze","Doze","Treze","Quatorze","Quinze","Dezeseis","Dezesete","Dezoito","Dezenove"};
  String dezena[contd] = {"Vinte","Trinta","Quarenta","Ciquenta","Sesseinta","Setenta","Oitenta","Noventa"};
  String centena[contc] = {"Cem","Duzentos","Trezentos","Quatrosentos","Quinheitos","Seissentos","Setesseintos","Oitoseintos","Noveseintos"};
  
  JOptionPane.showMessageDialog(null,centena[contc],dezena[contd],unidade[contu]); 
  
  

}
}