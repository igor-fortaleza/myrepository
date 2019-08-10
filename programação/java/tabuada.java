import javax.swing.*;
public class tabuada{
  public static void main(String args[]){
    
    int cont=0,cont2=1, r;
    
    String numero = JOptionPane.showInputDialog("Digite quantos numero deseja:");
    int n = Integer.parseInt(numero);
    
    while (cont < n){
      
      String numero2 = JOptionPane.showInputDialog("Digite "+cont2+"º numero");
      int n2 = Integer.parseInt(numero2);
      n2 = n2+n2;              
      cont++;
      cont2++;
    }
    
 
   
    JOptionPane.showInputDialog(null,"A média é " );
    
    
    }
  }

        
        
    