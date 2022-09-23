import javax.swing.JOptionPane;
//23/08
//Atividade: Elabore um programa que faça a entrada de produtos para o estoque de uma Padaria.

public class padaria 
{
	public static void main(String[] args) 
  {
		int PP = Integer.parseInt(JOptionPane.showInputDialog(null, "Digite a quantia de produtos que você deseja:"));
		int CC = Integer.parseInt(JOptionPane.showInputDialog(null, "Digite a quantia de colunas que serão necessárias:"));
		
		String[][] produto = new String[PP + 1][CC + 1];
		int[][] preco = new int[PP + 1][CC + 1];
		int[][] quantidade = new int[PP + 1][CC + 1];
		
		for (int i = 1; i <= PP; i++ ) 
		{
		    for (int j = 1; j <= CC; j++)
		    {
		    	produto[i][j]= JOptionPane.showInputDialog(null, "                                🌟Adicionando produtos🌟                                \n"
		    	+ "Digite o produto " + i + " que será adicionado na coluna " + j);
		    	preco[i][j]= Integer.parseInt(JOptionPane.showInputDialog(null, "                                🌟Adicionando produtos🌟                                \n"
				    	+ "Digite o preço do produto " + produto[i][j]));
		    	quantidade[i][j]= Integer.parseInt(JOptionPane.showInputDialog(null, "                                🌟Adicionando produtos🌟                                \n"
				    	+ "Digite a quantidade presente do produto " + produto[i][j]));
		    }
		}
		
		for (int i = 1; i <= PP; i++ ) 
		{
			for (int j = 1; j <= CC; j++)
			{
				JOptionPane.showMessageDialog(null, "                                🌟Lista dos produtos🌟                                \n"
		        + "O produto " + i + " da coluna " + j + " é: " + produto[i][j] + "\n custando: " + preco[i][j]
		        		+ "\n tendo: " + quantidade[i][j] + " unidades");
		    }
		}
  }
}