//Exercício 5 -- 16/08

import javax.swing.JOptionPane;
class ExEnquanto 
{
	public static void main (String args [])
	{
		float media, soma; //Define o valor que será recebido pelas categorias "media" e "soma" como valores Float (sendo possível valores não inteiro)
		int cont; //Define a categoria "cont" para receber apenas valores inteiros
			
		cont = 0; //O valor padrão de "cont" será 0
		soma = 0f; //O valor padrã de "soma" será 0

		while (cont < 8) 
		//O comando 'while' realiza um grupo de ações até que o contador esteja completo
		//Neste caso, até que o valor da categoria "cont" seja igual a 8, o programa será executado (Eu tirei o 850 porque se não demoraria muito)
		{
			float numero = Float.parseFloat(JOptionPane.showInputDialog(null, "Digite o número")); //Solicita um valor para a categoria 'numero'
			soma = soma + numero; //O valor da categoria 'soma' será igual ao valor da soma entre as categorias 'soma' e 'numero'
			cont = cont +1; //O valor da categoria 'cont' será igual a seu valor + 1
			/*Ps: É por causa dessa conta na categoria "cont" que será possível o fechamento do comando 'while'
			Caso contrário, o comando 'while' não teria fim*/
		}
		//Quando o valor máximo é alcançado, o comando while se fechará
		
		media = soma / cont; //O valor da categoria "media" é igual a divisão entre 'soma' e 'cont'
		JOptionPane.showMessageDialog(null, "A média é: " + media); //Exibe ao usuário qual será o valor da média
	}
}