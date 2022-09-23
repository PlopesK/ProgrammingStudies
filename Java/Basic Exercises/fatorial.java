//Fatorial 10/05

public class fatorial
{
    public static void main(String[] args) 
    {
        int cont = 0, fat = 0;
        try
        {
            fat = 1;
            cont = 1;
            while (cont<=5)
            {
                fat = fat*cont;
                cont = cont + 1;
            }
            
            System.out.println("O fatorial do valor inteiro 5 é: " + fat);
        }
        
        catch(NumberFormatException erro)
		{	
			System.out.println("Digite apenas valores numéricos");
		}
    }
}
