//Exercício 3 -- 16/08

import javax.swing.*;
class Triangulo
{
	public static void main (String args[])
	{
		int A = Integer.parseInt(JOptionPane.showInputDialog(null, "Lado A"));
		//Solicite valores inteiros para a categoria "A"
		int B = Integer.parseInt(JOptionPane.showInputDialog(null, "Lado B"));
		//Solicite valores inteiros para a categoria "B"
		int C = Integer.parseInt(JOptionPane.showInputDialog(null, "Lado C"));
		//Solicite valores inteiros para a categoria "C"

		if (A != 0 && B != 0 && C != 0) //Caso as categorias "A", "B" e "C" sejam diferentes de 0, o programa deverá iniciar
		{
			if (A + B > C && A + C > B && B + C > A) 
				//O programa só irá funcionar caso os valores das categorias sejam equiparados
				//Ou seja, o valor de C tem que ser menor do que de A + B; 
				//O valor de B tem que ser menor do que o valor de A + C;
				//O valor de A tem que ser menor do que o valor de B + C;
			{
				if (A != B && A != C && B != C) //Caso todos os respectivos valores sejam diferentes, o Triângulo será do tipo Escaleno
				{
					JOptionPane.showMessageDialog(null, "Escaleno");
				}
				
				else
				{
					if (A == B && B == C) //Caso todos os valores sejam iguais, o Triângulo será Equilátero
					{
						JOptionPane.showMessageDialog(null, "Equilátero");
					}

					else //Caso contrário das últimas 2 ocasiões, o Triângulo será do tipo Isóceles
					{
						JOptionPane.showMessageDialog(null, "Isósceles");
					}
				}
			}

			else //Caso não seja possível a semelhança dos valores, o programa demonstrará uma mensagem e encerrará
			{
				JOptionPane.showMessageDialog(null, "Não forma um triângulo");
			}
		} 

		else //Caso "A", "B" e "C" sejam iguais a 0, o programa irá entregar uma mensagem e encerrar
		{
			JOptionPane.showMessageDialog(null, "Não forma um triângulo");
		}
	}
}
