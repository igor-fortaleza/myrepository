import javax.swing.* ;
public class BuscaNoArray {
  public static void main(String[]args){
    int[] lista = {5, 8, 32, 4, 9, 31, 74};
    
    String entrada = JOptionPane.showInputDialog("Numero a procurar: ");
      int n = Integer.parseInt(entrada);
      int cont = 0; 
      
      while (cont <= 6){
        if(n == lista[cont]){
          JOptionPane.showMessageDialog(null, "O numero " + n + " foi encontrado.");
          return;
        } else{cont++;}

                   
      }JOptionPane.showMessageDialog(null, "O numero n�o foi encontrado."); 
  }}
            