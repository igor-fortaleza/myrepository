import java.util.*;
import javax.swing.*;

public class ExercicioData {
  public static void main (String[] args){
  Date agora = new Date();
  System.out.println(agora);
  GregorianCalendar data = new GregorianCalendar();
  
  int dia = data.get(Calendar.DAY_OF_MONTH);
  int mes = data.get(Calendar.MONTH); //janeiro=0
  int ano = data.get(Calendar.YEAR);
  int diaSemana = data.get(Calendar.DAY_OF_WEEK); // DOMINGO
  int hora = data.get(Calendar.HOUR_OF_DAY); //0-23
  
  String semana[] = {"","Segunda","Terça","Quarta","Quinta","Sexta","Sabado",};
  String smes[] = {"Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"};
  String tempo;
  if (hora < 12){
  tempo = "Bom Dia";
  }else{
  if (hora < 18){
  tempo = "Boa Tarde";
  }else{
  tempo = "Boa Noite";
  }}

  String msg = tempo +", "+ semana[diaSemana] +"-feira, "+ dia +" de "+ smes[mes] +" de "+ ano;
  JOptionPane.showMessageDialog(null,msg); 
  
  System.out.println("Data = "+dia+"/"+(mes+1)+"/"+ano);
  System.out.println("Dia da Semana = "+diaSemana);
  System.out.println("Hora = "+hora);
}
}