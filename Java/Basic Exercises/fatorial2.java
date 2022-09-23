//Fatorial 24/05

public class fatorial2 
{
	public static void main (String args[])
	{
		int cont, fat;
		
		fat=1;
		for (cont=1; cont<=5; cont++)
		{
			fat=fat*cont;
		}
		System.out.println();
		System.out.println("A fatorial de 5 é: " + fat);
	}
}