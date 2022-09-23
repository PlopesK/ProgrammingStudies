import java.util.Scanner;
public class looping 
{

	@SuppressWarnings("resource")
	public static void main(String[] args)
	{
		String resp="";
		int x=0, r=0;
		
		while (resp!=null) 
		{
			System.out.println("Entre com o valor X: ");
			Scanner in = new Scanner(System.in);
			x = in.nextInt();
                
            r = x*3;
            System.out.println("O valor da variável R é: " + r);
                
            System.out.println("Deseja continuar? ");
            Scanner in2 = new Scanner(System.in);
            resp = in2.nextLine();
            
            if ((resp=="nao") || (resp=="não"))
       		{
       			System.out.println("Fim do programa!");
       			break;
       		}
            else
            {
            	System.out.println("");
            	System.out.println("Continuando com o programa!");
            	System.out.println("");
            }
		}
	}
}
