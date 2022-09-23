//Calculadora_05/05

import javax.swing.*;
public class Calculadora
{
 public static void main (String args[])
  {
   String aux1 = JOptionPane.showInputDialog(null, "Forneça o valor do 1º número: ");
   if (aux1 == null)
   {
        System.exit(0);
   }
   
    String aux2 = JOptionPane.showInputDialog(null, "Forneça o valor do 2º número: ");
    if (aux2 == null)
    {
        System.exit(0);
    }
    
    try
    {
     int num1 = Integer.parseInt(aux1);
     int num2 = Integer.parseInt(aux2);
     JOptionPane.showMessageDialog(null, "Soma = " + (num1 +num2));
     JOptionPane.showMessageDialog(null, "Subtração = " + (num1  - num2));
     JOptionPane.showMessageDialog(null, "Multiplicação = " + (num1 * num2));
     JOptionPane.showMessageDialog(null, "Divisão = " + (num1 / num2));
     }
     catch (ArithmeticException erro)
       {
    	 JOptionPane.showMessageDialog(null, "Erro de divisão por zero!", "erro", 0);
       }
     catch (NumberFormatException erro)
      {
        JOptionPane.showMessageDialog(null, "Digite apenas números inteiros!", "ERRO", JOptionPane.ERROR_MESSAGE);
      }
      System.exit(0);
    }
}
