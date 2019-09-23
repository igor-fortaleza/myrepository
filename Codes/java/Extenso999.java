import javax.swing.*;
  public class Extenso999 {
    public static void main (String[] args) {
     
      String n1 = JOptionPane.showInputDialog(null,"Digite um número entre 0 e 999: ");
      int n = Integer.parseInt(n1);
      String unidades[] = {"","um","dois","tres","quatro","cinco","seis","sete","oito","nove",
      "dez","onze","doze","treze","quatorze","quinze","dezesseis","dezoito","dezenove"};
      String dezenas[] = {"","","vinte","trinta","quarenta","cinquenta","sessenta","setenta","oitenta","noventa"};
      String centenas[] = {"","cento","duzentos","trezentos","quatrocentos","quinhentos","seiscentos","setecentos",
      "oitocentos","novecentos"};
      
      int unidadeN = n %10;
      int centenaN = n/100;
      int dezenaN = (n/10)%10;
      
      if (n == 100){
        JOptionPane.showMessageDialog(null,"cem");
      }
      if (n == 0){
        JOptionPane.showMessageDialog(null,"zero");
      }
      JOptionPane.showMessageDialog(null,centenas[centenaN] +" e "+dezenas[dezenaN]+" "+unidades[unidadeN]);
   
      
 
  }
}