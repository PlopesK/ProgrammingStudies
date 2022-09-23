import javax.swing.JOptionPane;
//09/08
//1. Faça um programa que copie o conteúdo de um vetor em um segundo vetor


public class vetor 
{
	public static void main(String[] args) 
    {
        int A = Integer.parseInt(JOptionPane.showInputDialog(null, "                                ✔️Transferência de valores!✔️                                \n" 
        + "Digite o valor de A: "));
        
        int B = Integer.parseInt(JOptionPane.showInputDialog(null, "                                ✔️Transferência de valores!✔️                                \n" 
                + "Digite o valor de B: "));
        
        JOptionPane.showMessageDialog(null, "O Vetor A vale: " + A + "\n O Vetor B vale: " + B);
        
        JOptionPane.showMessageDialog(null, "                                Transferindo valor...                                ");
        
        B = A;
        A = 0;
        
        JOptionPane.showMessageDialog(null, "O novo valor do Vetor A é: " + A + "\n Enquanto o novo valor do Vetor B vale: " + B);
    }
}
