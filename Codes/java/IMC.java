import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class IMC extends JFrame {
  JLabel lblN1, lblN2, lblResultado;
  JTextField txtN1, txtN2, txtResultado;
  JButton btnCalcular;
  
  public IMC() {
    
    lblN1 = new JLabel("Peso: ");
    lblN2 = new JLabel("Altura: ");
    lblResultado = new JLabel(" IMC ");
    txtN1 = new JTextField();
    txtN2 = new JTextField();
    txtResultado = new JTextField(8);
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
    
    JPanel pResultado =new JPanel();
    pResultado.add(lblResultado);
    pResultado.add(txtResultado);
    pSul.add(pResultado);
    add(pSul, "South");
    
    setTitle("Calculo IMC");
    pack();
    setLocationRelativeTo(null);
    setVisible(true);
    
    Ouvinte ov = new Ouvinte();
    btnCalcular.addActionListener(ov);
  
    
  }
  
  public static void main(String[] args) {
    new IMC();
  }
  
  class Ouvinte implements ActionListener {
    public void actionPerformed(ActionEvent evt) {
      try {
        double n1 = Double.parseDouble(txtN1.getText());
        double n2 = Double.parseDouble(txtN2.getText());
        
        Object btn = evt.getSource();
        if (btn == btnCalcular) {
          double imc = n1 / (n2*n2);
          txtResultado.setText("" + imc);
        }
      }  catch(NumberFormatException e) {
        JOptionPane.showMessageDialog(null, "Valor inválido");
        txtN1.setText("");
        txtN2.setText("");
        txtN1.requestFocus();
        e.printStackTrace();
      } catch(ArithmeticException e) {
         JOptionPane.showMessageDialog(null, "Denominador não pode ser zero");
           txtN2.setText("");
           txtN2.requestFocus();
      }
    }
  }
}