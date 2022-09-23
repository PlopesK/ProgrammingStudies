//Enquanto_17/05

public class enquanto
{
    public static void main(String args[]) throws InterruptedException 
    {
        Thread tempo;
        tempo = new Thread();
        tempo.start();
        int a;
        try
        {
            a = Integer.parseInt(args[0]);
            while(a>=0)
            {
                System.out.println(" " + a);
                Thread.sleep(1000);
                a--;
            }
            
            System.out.println("Fim da primeira Contagem");
            System.out.println(" ");
            Thread.sleep(1000);
            do
            {
                System.out.println(" " + a);
                Thread.sleep(1000);
                a++;
            }
            while(a>0);
            System.out.println("Fim da segunda contagem");
            
        }
        catch(NumberFormatException erro)
		{	
			System.out.println("Digite apenas valores numéricos");
		}
    }
}