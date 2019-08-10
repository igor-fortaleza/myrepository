
public class Fatorial{
  public static void main(String[] args){
System.out.println("Fatorial de 5 é "+fat(5));
System.out.println("Fatorial de 4 é "+fat(4));
System.out.println("Fatorial de 7 é "+fat(7));
System.out.println("Fatorial de 9 é "+fat(9));
System.out.println("Fatorial de 6 é "+fat(6));
System.out.println("Fatorial de 8 é "+fat(8));
} 

static long fat(int n){
  int resp = 1;
  for(int cont = 1; cont <=n; cont++){
    resp*=cont;
  }
  return resp;
}
}