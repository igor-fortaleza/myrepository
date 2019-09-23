import java.awt.*;
import java.awt.event.*;
import javax.swing.*;
import java.lang.Math.*;

public class POTENCIA extends JFrame {
  JLabel lblN1, lblN2;
  JTextField txtN1, txtN2;
  JButton btnCalcular;
  
  public POTENCIA() {
    
    lblN1 = new JLabel("Base: ");
    lblN2 = new JLabel("Expoente: ");
    txtN1 = new JTextField();
    txtN2 = new JTextField();
    btnCalcular = new JButton(" Calcular ");
    btnCalcular.setForeground(Color.BLUE);
    btnCalcular.setBackground(Color.WHITE);
 
    
    JPanel pEntrada = new JPanel(new GridLayout(2, 2));
    pEntrada.add(lblN1); pEntrada.add(txtN1);
    pEntrada.add(lblN2); pEntrada.add(txtN2);
    add(pEntrada, "Center");
    
    JPanel pSul = new JPanel(new GridLayout(2, 1));
    JPanel pBtn = new JPanel();
    pBtn.add(btnCalcular);
    pSul.add(pBtn);
    add(pBtn, "South");
    

    setTitle("Calculo Raiz");
    pack();
    setLocationRelativeTo(null);
    setVisible(true);
    
    Ouvinte ov = new Ouvinte();
    btnCalcular.addActionListener(ov);
  
  }
  
  public static void main(String[] args) {
    new POTENCIA();
  }
  
  class Ouvinte implements ActionListener {
    public void actionPerformed(ActionEvent evt) {
      try {
        double n1 = Double.parseDouble(txtN1.getText());
        double n2 = Double.parseDouble(txtN2.getText());
        
        Object btn = evt.getSource();
        if (btn == btnCalcular) {
          double potencia=Math.pow(n1,n2);
          JOptionPane.showMessageDialog(null, +potencia);
        
        }
      }  catch(NumberFormatException e) {
        JOptionPane.showMessageDialog(null, "Valor inv�lido");
        txtN1.setText("");
        txtN2.setText("");
        txtN1.requestFocus();
        e.printStackTrace();
      } catch(ArithmeticException e) {
         JOptionPane.showMessageDialog(null, "Denominador n�o pode ser zero");
           txtN2.setText("");
           txtN2.requestFocus();
      }
    }
  }
}