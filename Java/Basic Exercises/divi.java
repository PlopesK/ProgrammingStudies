import java.util.Scanner;
public class divi 
{

	@SuppressWarnings("resource")
	public static void main(String[] args){
	int x=0;
		
	System.out.println("Digite qualquer valor: ");
	Scanner in = new Scanner(System.in);
	x = in.nextInt();
		
	while (x!=1) 
	{
		x=x/2;
		System.out.println(" " + x);
	}
}
}