//Crédito 07/06

/*
Código   Preço
1001 ---- 5,32 
1324 ---- 6,45 
6548 ---- 2,37 
9870 ---- 5,32  -----> era 0987, Porém eu troquei pra encaixar no sistema de "cases" (iniciando com 0 não funciona)
7623 ---- 6,45
*/

import javax.swing.JOptionPane;

public class mercadinho 
{
	public static void main (String args[])
	  {
	   float preco = 0;
	   int cod = Integer.parseInt(JOptionPane.showInputDialog(null, "                                Código          Preço \n" + 
	   "🍏Maça Verde-    1001             5,32🍏 \n" + "🍉Melancia-          1324             6,45🍉 \n"
	   + "🍌Banana-             6548             2,37🍌 \n" + "🍓Morango-           9870             5,32🍓 \n" 
	   + "🍍Abacaxi-            7623             6,45🍍 \n"
	   + "Digite o código do produto que você deseja!"));

	   try
	   {
		     // ---------------------------------Casos---------------------------------
		     switch (cod)
		     {
		     //Maças Verdes
		     	case 1001: 
			     	preco = (float) 5.32;
			     	int quantidade = Integer.parseInt(JOptionPane.showInputDialog(null, "Digite quantas maças verdes você deseja: "));
				    float total = (preco * quantidade);
				    
			 //Preço Total    	
				    JOptionPane.showMessageDialog(null, "🍏O preço total será de " + total + "R$🍏");
			     	break;
		     	
			 //Melancia
		     	case 1324: 
		     		preco = (float) 6.45;
			     	quantidade = Integer.parseInt(JOptionPane.showInputDialog(null, "Digite quantas melancias você deseja: "));
			     	total = (preco * quantidade);    	
				    JOptionPane.showMessageDialog(null, "🍉O preço total será de " + total + "R$🍉");
			     	break;
			     	
			 //Banana
		     	case 6548: 
		     		preco = (float) 2.37;
			     	quantidade = Integer.parseInt(JOptionPane.showInputDialog(null, "Digite quantas bananas você deseja: "));
			     	total = (preco * quantidade);    	
				    JOptionPane.showMessageDialog(null, "🍌O preço total será de " + total + "R$🍌");
			     	break;
		     			
			 //Morango
		     	case 9870: 
		     		preco = (float) 5.32;
			     	quantidade = Integer.parseInt(JOptionPane.showInputDialog(null, "Digite quantos morangos você deseja: "));
			     	total = (preco * quantidade);    	
				    JOptionPane.showMessageDialog(null, "🍓O preço total será de " + total + "R$🍓");
			     	break;
     					
			 //Abacaxi
		     	case 7623: 
		     		preco = (float) 6.45;
			     	quantidade = Integer.parseInt(JOptionPane.showInputDialog(null, "Digite quantos abacaxis você deseja: "));
			     	total = (preco * quantidade);  	
				    JOptionPane.showMessageDialog(null, "🍍O preço total será de " + total + "R$🍍");
			     	break;
		     }
	    }
	    catch (NumberFormatException erro)
	      {
	        JOptionPane.showMessageDialog(null, "Compra cancelada!", "ERRO", JOptionPane.ERROR_MESSAGE);
	      }
	   
	    System.exit(0);
	    
	    }
}
