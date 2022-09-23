// Exercício 1 -- 16/08

import javax.swing.JOptionPane; //Importa o JOptionPane, algo obrigatório para que esse comando funcione
class NumImpar //Classe onde o programa será realizado
{ 
	public static void main(String args []) //Define
	{ 
		int numero = Integer.parseInt(JOptionPane.showInputDialog(null, "Qual o número?"));
		//Utilizado para adquirir um valor inteiro e atribui-lo à categoria "numero"
		
		if (numero % 2 == 1) 
			//Abre um if onde: Caso o valor da categoria "numero" não for divisivel, ele demonstrará a frase dentre as colchetes
			//Para indicar algo divisivel por 2, se utiliza o símbolo "%". Além disso, o número deverá resultar como 1 para isso ocorrer
		{ 
			JOptionPane.showMessageDialog(null, "O número é ímpar"); 
		} 
		else //Caso o valor seja divisivel por 2, será demonstrado a frase abaixo
		{
			JOptionPane.showMessageDialog(null, "O número é par");
		}
	} 
}