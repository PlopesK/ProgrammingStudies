import java.util.Scanner;
public class pesada 
{

	@SuppressWarnings("resource")
	public static void main(String[] args){
	String nome1="", nome2="";
	int peso1=0, peso2=0;
	float altura1=0, altura2=0;
			
	System.out.println("Qual é o nome da pessoa 1? ");
	Scanner in = new Scanner(System.in);
	nome1 = in.nextLine();
	
	System.out.println("Digite seu peso: ");
	Scanner in2 = new Scanner(System.in);
	peso1 = in2.nextInt();
	
	System.out.println("Digite sua altura: ");
	Scanner in3 = new Scanner(System.in);
	altura1 = in3.nextFloat();
	
	System.out.println("");
	System.out.println("----------------------------------");
	System.out.println("");
	
	System.out.println("Qual é o nome da pessoa 2? ");
	Scanner in4 = new Scanner(System.in);
	nome2 = in4.nextLine();
	
	System.out.println("Digite seu peso: ");
	Scanner in5 = new Scanner(System.in);
	peso2 = in5.nextInt();
	
	System.out.println("Digite sua altura: ");
	Scanner in6 = new Scanner(System.in);
	altura2 = in6.nextFloat();
	
	if (peso1>peso2)
	{
		System.out.println("----------------------------------");
		System.out.println("_________Mais Pesado_________");
		System.out.println("Dentre esses dois, o mais pesado é o(a) " + nome1);
		System.out.println("Possuindo o peso de " + peso1 + "kg!");
	}
	else if (peso2>peso1)
	{
		System.out.println("----------------------------------");
		System.out.println("_________Mais Pesado_________");
		System.out.println("Dentre esses dois, o mais pesado é o(a) " + nome2);
		System.out.println("Possuindo o peso de " + peso2 + "kg!");
	}
	else
	{
		System.out.println("----------------------------------");
		System.out.println("_________Mais Pesado_________");
		System.out.println("Ambos " + nome1 + " e " + nome2 + " Incrivelmente possuem o mesmo peso!");
	}
	
	if (altura1>altura2)
	{
		System.out.println("----------------------------------");
		System.out.println("_________Mais Alta_________");
		System.out.println("Dentre esses dois, o mais alto é o(a) " + nome1);
		System.out.println("Medindo " + altura1 + "m!");
	}
	else if (altura2>altura1)
	{
		System.out.println("----------------------------------");
		System.out.println("_________Mais Alta_________");
		System.out.println("Dentre esses dois, o mais alto é o(a) " + nome2);
		System.out.println("Medindo " + altura2 + "m!");
	}
	else
	{
		System.out.println("----------------------------------");
		System.out.println("_________Mais Alta_________");
		System.out.println("Ambos " + nome1 + " e " + nome2 + " Incrivelmente possuem a mesma altura!");
	}		
}
}

