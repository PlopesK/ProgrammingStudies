// Exercicio 2 -- 16/08

import javax.swing.JOptionPane;
class Premio 
{
	public static void main (String args [])
	{
		float bonus; //Os valores recebido pela categoria "bonus" serão do tipo Float, ou seja, poderá ter valores não inteiros
		float salario = Float.parseFloat(JOptionPane.showInputDialog(null, "Qual o salário?"));
		//Solicitação dos valores para a categoria "salario", também do tipo Float
		
		int tempo = Integer.parseInt(JOptionPane.showInputDialog(null, "A quanto tempo está na empresa? (Digite a quantia de meses)" 
		+ "\n [Caso não tenha completado nem 1 mês, digite 0]"));
		//Solicitação de valores inteiros para a categoria "tempo"
	
		if (tempo >= 5) //Caso o tempo seja maior ou igual a 5, o valor da categoria "salario" será multiplicado por 0.20f e atribuido a categoria "bonus"
		{
			bonus = salario * 0.20f;
		}
		
		else //Do contrário, caso o valor seja menor que 5, o valor da categoria "salario" será multiplicado por 0.10f e atribuido a categoria "bonus"
		{
			bonus = salario * 0.10f;
		}
		
		JOptionPane.showMessageDialog(null, "O valor do bônus é: " + bonus); //Demonstra ao usuário qual será o valor do bonus recebido
	}
}