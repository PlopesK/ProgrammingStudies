import javax.swing.JOptionPane;
//09/08
/* 3. Com base em seu conhecimento defina os registros abaixo. 
Crie um programa que solicite ao usuário informar os dados do registro e imprima os mesmos na tela:
a) cheque bancário;
b) livro;
c) aluno;
d) endereço;
e) cadastro de pessoa; */


public class cadastro 
{
	public static void main(String[] args) 
    {
		int cheque= Integer.parseInt(JOptionPane.showInputDialog(null, "                               "
				+ " 🏦Cheque Bancário🏦                                \n" + "Digite o seu Cheque Bancário: "));
		
		String livro= JOptionPane.showInputDialog(null, "                               "
				+ " 📕Livro📕                                \n" + "Digite o Livro que você deseja comprar: ");
		
		String aluno= JOptionPane.showInputDialog(null, "                               "
				+ " 🏫Aluno🏫                                \n" + "Digite o nome do Aluno: ");
		
		String endereco= JOptionPane.showInputDialog(null, "                               "
				+ " 🗺️Endereço🗺️                                \n" + "Digite seu Endereço: ");
		
		int cadastro= Integer.parseInt(JOptionPane.showInputDialog(null, "                               "
				+ " 🛑Finalização do Cadastro🛑                                \n" + "Digite o código de Cadastro dessa pessoa: "));
		
		JOptionPane.showMessageDialog(null, "                     Analisando dados...                                ");
		
		JOptionPane.showMessageDialog(null, "                               "
				+ " ❗Recapitulando informações inseridas❗                                \n" + "Código do Aluno: " + cadastro + "\n"
				+ "Aluno: " + aluno + "\n"
				+ "Livro: " + livro + "\n"
				+ "Cheque Bancário: " + cheque + "\n"
				+ "Endereço: " + endereco);
    }
}