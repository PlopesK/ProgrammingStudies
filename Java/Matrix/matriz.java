import javax.swing.JOptionPane;
//09/08
//2. Faça um programa para somar duas matrizes.


public class matriz 
{
	public static void main(String[] args) 
    {
		int[][] matrizA = new int[3][3];
		int[][] matrizB = new int[3][3];
		
		//Matriz A
		for (int i = 1; i<(matrizA.length); i++ ) 
		{
		    for (int j = 1;j<matrizA[i].length;j++)
		    {
        		matrizA[i][j]= Integer.parseInt(JOptionPane.showInputDialog(null, "                                🌟Matriz A🌟                                \n"
        		+ "Digite o valor " + j + " da coluna " + i + " da Matriz A: "));
        	}
        }
        
		//Matriz B
		for (int i = 1; i<(matrizB.length); i++ ) 
		{
		    for (int j = 1;j<matrizB[i].length;j++)
		    {
        		matrizB[i][j]= Integer.parseInt(JOptionPane.showInputDialog(null, "                                🌟Matriz B🌟                                \n"
        		+ "Digite o valor " + j + " da coluna " + i + " da Matriz B: "));
        	}
        }
		
		//Matriz C
		for (int i = 1; i<(matrizB.length); i++ ) 
		{
			for (int j = 1;j<matrizB[i].length;j++)
			{
				JOptionPane.showMessageDialog(null, "                                🌟Matriz C🌟                                \n"
		        + "O valor " + j + " da coluna " + i + " será: " + (matrizA[i][j] + matrizB[i][j]) );
		    }
		}
    }
}
