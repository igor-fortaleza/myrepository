
public class Fatorial{
  public static void main(String[] args){
System.out.println("Fatorial de 5 � "+fat(5));
System.out.println("Fatorial de 4 � "+fat(4));
System.out.println("Fatorial de 7 � "+fat(7));
System.out.println("Fatorial de 9 � "+fat(9));
System.out.println("Fatorial de 6 � "+fat(6));
System.out.println("Fatorial de 8 � "+fat(8));
} 

static long fat(int n){
  int resp = 1;
  for(int cont = 1; cont <=n; cont++){
    resp*=cont;
  }
  return resp;
}
}