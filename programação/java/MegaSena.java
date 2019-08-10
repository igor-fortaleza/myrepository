public class MegaSena{
  public static void main(String[] args){
    int palpite[]= new int[6];
    
    sortear(palpite);
    classificar(palpite);
    exibir(palpite);
} 
  static void sorte (int num[]){
    int[]aux=new int[60];
    for(int cont=0; cont < aux.length; cont++){
      aux[cont]=cont+1;
    }
    embaralhar(aux);
    for(int cont=0; cont < num.length; cont++){
     num[cont]=aux[cont];
    }
  }
  static void embaralhar(int num[]){
    for (int cont=1; cont <= 1000; cont++){
    int p1 = (int)(Math.random()*60);
    int p2 = (int)(Math.random()*60);
    int aux = num[p1];
    num[p1]=num[p2];
    num[p2]=aux;
    }
  }
    static void exibir(int[] num){
    for (int cont=0; cont <= num.length; cont++){
      System.out.println(num[cont]);
    }
  }
      static void classificar(int[] num){
    for (int x=0; x < num.length-1; x++){
      for (int y = x+1; y < num.length; y++){
        if(num[x] > num[y]){
          int aux= num[x];
          num[x]= num[y];
          num[y]=aux;
        }
      }
    }
      }
}
