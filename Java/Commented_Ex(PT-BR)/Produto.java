//Exercício 4 -- 16/08

import javax.swing.JOptionPane;
public class Produto
{
	public static void main(String args [])
	{
		int codigo = Integer.parseInt(JOptionPane.showInputDialog(null, "Digite o código"
		 + "\n Caderno = 001" + "\n Lápis = 002" + "\n Borracha = 003" + "\n Diversos = Qualquer outro valor"));
		//Solicita um valor inteiro para ser adquirido pela categoria "codigo"
		
		switch (codigo) //Obrigatório para o funcionamento do comando 'case'. O valor solicitado será da categoria "codigo"
		{
			case 001 : JOptionPane.showMessageDialog(null, "Caderno"); //Caso "codigo" for igual a '001', será exibido essa mensagem
			break; //Comando obrigatório para finalizar um comando 'case', se não utiliza-lo o 'case' continuará aberto

			case 002 : JOptionPane.showMessageDialog(null,"Lápis"); //Caso "codigo" for igual a '002', será exibido essa mensagem
			break;

			case 003 : JOptionPane.showMessageDialog(null, "Borracha"); //Caso "codigo" for igual a '003', será exibido essa mensagem
			break;

			default : JOptionPane.showMessageDialog(null, "Diversos"); 
			//Se 'coigo' for diferente de todos os anteriores, será demonstrada essa mensage
			//O comando 'default' define uma reposta padrão para os casos. Ou seja, caso nenhum 'case' seja executado, a resposta entregue será a presente no comando 'default'
		}
	}
}