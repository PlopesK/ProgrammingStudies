//Crédito 07/06

/*
Saldo de 0 a 200 ---- Nenhum crédito 
Saldo de 201 a 400 ---- 20% do valor do saldo médio 
Saldo de 401 a 600 ---- 30% do valor do saldo médio 
Acima de 601 ---- 40% do valor do saldo médio 
*/

import javax.swing.JOptionPane;

public class credito 
{
	public static void main (String args[])
	  {
	   int caso = 0, credito = 0;
	   int saldo = Integer.parseInt(JOptionPane.showInputDialog(null, "Insire o valor de seu saldo médio! "));

	   try
	   {
	    	 // ---------------------------------Nenhum Crédito---------------------------------
		     if (saldo <= 200)
		     {
		    	 caso = 1;
		    	 credito = saldo;
		     }
		     
		     // ---------------------------------20% de Crédito---------------------------------
		     else if (saldo >= 201 && saldo <= 400)
		     {
		    	caso = 2;
		    	credito = (saldo * 20)/100;
		     }
		     
		     // ---------------------------------30% de Crédito---------------------------------
		     else if (saldo >= 401 && saldo <= 600)
		     {
		    	caso = 3;
		    	credito = (saldo * 30)/100;
		     }
		     
		     // ---------------------------------40% de Crédito---------------------------------
		     else if (saldo >= 601)
		     {
		    	 caso = 4;
		    	 credito = (saldo * 40)/100;
		     }
		     
		     int total = saldo + credito;
		     // ---------------------------------Casos---------------------------------
		     switch (caso)
		     {
		     	case 1: JOptionPane.showMessageDialog(null, "Você não receberá crédito😞"); 
		     			JOptionPane.showMessageDialog(null, "Seu saldo continuará sendo de " + saldo + "R$"); break;
		     			
		     	case 2: JOptionPane.showMessageDialog(null, "Você receberá 20% de crédito! \n" +  " Equivalendo a " + credito + "R$ de crédito");
		     			JOptionPane.showMessageDialog(null, "Seu saldo será de " + total + "R$"); break;
		     			
		     	case 3: JOptionPane.showMessageDialog(null, "Você receberá 30% de crédito! \n" + " Equivalendo a " + credito + "R$ de crédito");
     					JOptionPane.showMessageDialog(null, "Seu saldo será de " + total + "R$"); break;
     					
		     	case 4: JOptionPane.showMessageDialog(null, "Você receberá 40% de crédito! \n" + " Equivalendo a " + credito + "R$ de crédito");
     					JOptionPane.showMessageDialog(null, "Seu saldo será de " + total + "R$"); break;
		     }
	    }
	    catch (NumberFormatException erro)
	      {
	        JOptionPane.showMessageDialog(null, "Digite apenas números inteiros!", "ERRO", JOptionPane.ERROR_MESSAGE);
	      }
	   
	    System.exit(0);
	    
	    }
}
