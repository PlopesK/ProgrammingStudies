//Zodíaco 07/06

/*Crie um algoritmo chamado Zodiaco. Este algoritmo deve ler a data do seu
aniversário e atribuir um valor para a variável inteira chamada signo, conforme
lista abaixo:
a) 1o signo do zodíaco: Aquário (21/jan a 19/fev)
b) 2o signo do zodíaco: Peixes (20/fev a 20/mar)
c) 3o signo do zodíaco: Áries (21/mar a 20/abr)
d) 4o signo do zodíaco: Touro (21/abr a 20/mai)
e) 5o signo do zodíaco: Gêmeos (21/mai a 20/jun)
f) 6o signo do zodíaco: Câncer (21/jun a 21/jul)
g) 7o signo do zodíaco: Leão (22/jul a 22/ago)
h) 8o signo do zodíaco: Virgem (23/ago a 22/set)
i) 9o signo do zodíaco: Libra (23/set a 22/out)
j) 10o signo do zodíaco: Escorpião (23/out a 21/nov)
k) 11o signo do zodíaco: Sagitário (22/nov a 21/dez)
l) 12o signo do zodíaco: Capricórnio (22/dez a 20/jan)*/

import javax.swing.JOptionPane;

public class zodiaco 
{
	public static void main (String args[])
	  {
	   int caso = 0;
	   int dd = Integer.parseInt(JOptionPane.showInputDialog(null, "Digite o dia do seu aniversário! "));
	   int mm = Integer.parseInt(JOptionPane.showInputDialog(null, "Digite o mês do seu aniversário! "));

	   try
	   {
	    	 // ---------------------------------Aquário---------------------------------
		     if ((dd >= 21 && mm == 1) || (dd <= 19 && mm == 2))
		     {
		    	 //Mês inexistente em JANEIRO
		    	 if (dd >= 32 && mm == 1)
		    	 {
		    		 JOptionPane.showMessageDialog(null, "❌Esse mês não existe! Tente novamente!❌");
		    	 }
		    	 
		    	 else 
		    	 {
		    		 caso = 1;
		    	 }
		     }
		     
		     // ---------------------------------Peixes---------------------------------
		     else if ((dd >= 20 && mm == 2) || (dd <= 20 && mm == 3))
		     {
		    	//Mês inexistente em FEVEREIRO
		    	 if (dd >= 30 && mm == 2)
		    	 {
		    		 JOptionPane.showMessageDialog(null, "❌Esse mês não existe! Tente novamente!❌");
		    	 }
		    	 
		    	 else 
		    	 {
		    		 caso = 2;
		    	 }
		     }
		     
		     // ---------------------------------Áries---------------------------------
		     else if ((dd >= 21 && mm == 3) || (dd <= 20 && mm == 4))
		     {
		    	//Mês inexistente em MARÇO
		    	 if (dd >= 32 && mm == 3)
		    	 {
		    		 JOptionPane.showMessageDialog(null, "❌Esse mês não existe! Tente novamente!❌");
		    	 }
		    	 
		    	 else 
		    	 {
		    		 caso = 3;
		    	 }
		     }
		     
		     // ---------------------------------Touro---------------------------------
		     else if ((dd >= 21 && mm == 4) || (dd <= 20 && mm == 5))
		     {
		    	//Mês inexistente em ABRIL
		    	 if (dd >= 31 && mm == 4)
		    	 {
		    		 JOptionPane.showMessageDialog(null, "❌Esse mês não existe! Tente novamente!❌");
		    	 }
		    	 
		    	 else 
		    	 {
		    		 caso = 4;
		    	 }
		     }
		     
		     // ---------------------------------Gêmeos---------------------------------
		     else if ((dd >= 21 && mm == 5) || (dd <= 20 && mm == 6))
		     {
		    	//Mês inexistente em MAIO
		    	 if (dd >= 32 && mm == 5)
		    	 {
		    		 JOptionPane.showMessageDialog(null, "❌Esse mês não existe! Tente novamente!❌");
		    	 }
		    	 
		    	 else 
		    	 {
		    		 caso = 5;
		    	 }
		     }
		     
		     // ---------------------------------Câncer---------------------------------
		     else if ((dd >= 21 && mm == 6) || (dd <= 21 && mm == 7))
		     {
			    //Mês inexistente em JUNHO
		    	 if (dd >= 31 && mm == 6)
		    	 {
		    		 JOptionPane.showMessageDialog(null, "❌Esse mês não existe! Tente novamente!❌");
		    	 }
		    	 
		    	 else 
		    	 {
		    		 caso = 6;
		    	 }
		     }
		     
		     // ---------------------------------Leão---------------------------------
		     else if ((dd >= 22 && mm == 7) || (dd <= 22 && mm == 8))
		     {
		    	//Mês inexistente em JULHO
		    	 if (dd >= 32 && mm == 7)
		    	 {
		    		 JOptionPane.showMessageDialog(null, "❌Esse mês não existe! Tente novamente!❌");
		    	 }
		    	 
		    	 else 
		    	 {
		    		 caso = 7;
		    	 }
		     }
		     
		     // ---------------------------------Virgem---------------------------------
		     else if ((dd >= 23 && mm == 8) || (dd <= 22 && mm == 9))
		     {
		    	//Mês inexistente em AGOSTO
		    	 if (dd >= 32 && mm == 8)
		    	 {
		    		 JOptionPane.showMessageDialog(null, "❌Esse mês não existe! Tente novamente!❌");
		    	 }
		    	 
		    	 else 
		    	 {
		    		 caso = 8;
		    	 }
		     }
		     
		     // ---------------------------------Libra---------------------------------
		     else if ((dd >= 23 && mm == 9) || (dd <= 22 && mm == 10))
		     {
		    	//Mês inexistente em SETEMBRO
		    	 if (dd >= 31 && mm == 9)
		    	 {
		    		 JOptionPane.showMessageDialog(null, "❌Esse mês não existe! Tente novamente!❌");
		    	 }
		    	 
		    	 else 
		    	 {
		    		 caso = 9;
		    	 }
		     }
		     
		     // ---------------------------------Escorpião---------------------------------
		     else if ((dd >= 23 && mm == 10) || (dd <= 21 && mm == 11))
		     {
		    	//Mês inexistente em OUTUBRO
		    	 if (dd >= 32 && mm == 10)
		    	 {
		    		 JOptionPane.showMessageDialog(null, "❌Esse mês não existe! Tente novamente!❌");
		    	 }
		    	 
		    	 else 
		    	 {
		    		 caso = 10;
		    	 }
		     }
		     
		     // ---------------------------------Sagitário---------------------------------
		     else if ((dd >= 22 && mm == 11) || (dd <= 21 && mm == 12))
		     {
		    	//Mês inexistente em NOVEMBRO
		    	 if (dd >= 31 && mm == 11)
		    	 {
		    		 JOptionPane.showMessageDialog(null, "❌Esse mês não existe! Tente novamente!❌");
		    	 }
		    	 
		    	 else 
		    	 {
		    		 caso = 11;
		    	 }
		     }
		     
		     // ---------------------------------Capricórnio---------------------------------
		     else if ((dd >= 22 && mm == 12) || (dd <= 20 && mm == 1))
		     {
		    	//Mês inexistente em DEZEMBRO
		    	 if (dd >= 32 && mm == 12)
		    	 {
		    		 JOptionPane.showMessageDialog(null, "❌Esse mês não existe! Tente novamente!❌");
		    	 }
		    	 
		    	 else 
		    	 {
		    		 caso = 12;
		    	 }
		     }
		     
		     // ---------------------------------Mês inexistente Constante---------------------------------
		     else if (dd <= 0 || mm <= 0 || mm >= 13)
		     {
		    	 JOptionPane.showMessageDialog(null, "❌Esse mês não existe! Tente novamente!❌");
		    	 System.exit(0);
		     }
		     
		     // ---------------------------------Casos---------------------------------
		     switch (caso)
		     {
		     	case 1: JOptionPane.showMessageDialog(null, "♒︎ Seu signo é de Aquário! ♒︎"); break;
		     	case 2: JOptionPane.showMessageDialog(null, "♓︎ Seu signo é de Peixes! ♓︎"); break;
		     	case 3: JOptionPane.showMessageDialog(null, "♈︎ Seu signo é de Áries! ♈︎"); break;
		     	case 4: JOptionPane.showMessageDialog(null, "♉︎ Seu signo é de Touro! ♉︎"); break;
		     	case 5: JOptionPane.showMessageDialog(null, "♊︎ Seu signo é de Gêmeos! ♊︎"); break;
		     	case 6: JOptionPane.showMessageDialog(null, "♋︎ Seu signo é de Câncer! ♋︎"); break;
		     	case 7: JOptionPane.showMessageDialog(null, "♌︎ Seu signo é de Leão! ♌︎"); break;
		     	case 8: JOptionPane.showMessageDialog(null, "♍︎ Seu signo é de Virgem! ♍︎"); break;
		     	case 9: JOptionPane.showMessageDialog(null, "♎︎ Seu signo é de Libra! ♎︎"); break;
		     	case 10: JOptionPane.showMessageDialog(null, "♏︎ Seu signo é de Escorpião! ♏︎"); break;
		     	case 11: JOptionPane.showMessageDialog(null, "♐︎ Seu signo é de Sagitário! ♐︎"); break;
		     	case 12: JOptionPane.showMessageDialog(null, "♑︎ Seu signo é de Capricórnio! ♑︎"); break;
		     }
	    }
	    catch (NumberFormatException erro)
	      {
	        JOptionPane.showMessageDialog(null, "Digite apenas números inteiros!", "ERRO", JOptionPane.ERROR_MESSAGE);
	      }
	   
	    System.exit(0);
	    
	    }
}
