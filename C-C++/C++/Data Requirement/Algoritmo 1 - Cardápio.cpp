//Algoritmo 1
#include <stdio.h>
#include <Windows.h>
#include <iostream>
#include <conio.h>
#include <string.h>
#include <math.h>
#include <locale> //Língua pt-br

int main()
{
	//Português
	UINT CPAGE_UTF8 = 65001;
    UINT CPAGE_DEFAULT = GetConsoleOutputCP();

    SetConsoleOutputCP(CPAGE_UTF8);
    
    //Dados
    int codigo, quantidade;
    int cardapio, resposta;
    float preco;
    
    //Saudação
    system ("color 0D");
    
    printf ("Seja Bem vindo!!\n");
    printf ("\n");
    
    system ("pause");
	system ("cls");
	
	//Solicitação
	while (cardapio!=0)
	{
		system ("color 03");
		
		printf ("Por favor digite o Codigo referente ao produto.\n");
		printf ("\n__Cardapio__\n");
		printf ("\nEspecificacao	  Codigo     Preco\n");
		printf ("Cachorro quente     100	     1,20\n");
		printf ("Bauru simples	    101	     1,30\n");
		printf ("Bauru com ovo	    102	     1,50\n");
		printf ("Hamburger	    103	     1,20\n");
		printf ("Cheeseburguer	    104      1,30\n");
		printf ("Refrigerante	    105	     1,00\n");
		
		printf ("\n");
		
		printf ("\nO que deseja comprar?\n");
		scanf ("%d", &codigo);
		
		system ("cls");
		
		//------------------------------------------------1-------------------------------------------------------
		//Cachorro Quente
		if (codigo==100)
		{
			//Quantidade
			printf ("Quantos Cachorros Quentes voce deseja comprar?\n");
			scanf ("%d", &quantidade);	
			
			system ("cls");
			
			//Conta
			preco = quantidade*1.20;
			
			//Resultado
			printf ("A quantidade de %d Cachorros Quentes tera o preco total de: R$ %.2f \n", quantidade, preco);
			
			printf ("\nEsta de acordo com essa quantidade?\n");
			printf ("\nDigite '1' para 'Sim'\n");
			printf ("\nDigite '0' para 'Nao'");
			printf ("\n");
			scanf ("%d", &resposta);
			
			system ("cls");
			
			//Caso Não
			if (resposta==0)
			{
				//Quantidade
				printf ("Quantos Cachorros Quentes voce deseja comprar?\n");
				scanf ("%d", &quantidade);	
				
				system ("cls");
				
				//Conta
				preco = quantidade*1.20;
				
				//Resultado
				printf ("A quantidade de %d Cachorros Quentes tera o preco total de: R$ %.2f \n", quantidade, preco);
				
				printf ("\nEsta de acordo com essa quantidade?\n");
				printf ("\nDigite '1' para 'Sim'\n");
				printf ("\nDigite '0' para 'Nao'");
				printf ("\n");
				scanf ("%d", &resposta);
				
				system ("cls");
			}
			
			//Caso "Sim" está no final do programa
			
			//Resposta Inválida
			if (resposta>=2)
			{
				system ("color 04");
				printf ("\nValor Invalido!");
				printf ("\nRetornando ao cardapio.\n");
				printf ("\n");
				
				system ("pause");
				system ("cls");
			}
		}
		
		//------------------------------------------------2-------------------------------------------------------
		//Bauru simples
		if (codigo==101)
		{
			//Quantidade
			printf ("Quantos Baurus Simples voce deseja comprar?\n");
			scanf ("%d", &quantidade);	
			
			system ("cls");
			
			//Conta
			preco = quantidade*1.30;
			
			//Resultado
			printf ("A quantidade de %d Baurus Simples tera o preco total de: R$ %.2f \n", quantidade, preco);
			
			printf ("\nEsta de acordo com essa quantidade?\n");
			printf ("\nDigite '1' para 'Sim'\n");
			printf ("\nDigite '0' para 'Nao'");
			printf ("\n");
			scanf ("%d", &resposta);
			
			system ("cls");
			
			//Caso Não
			if (resposta==0)
			{
				//Quantidade
				printf ("Quantos Baurus Simples voce deseja comprar?\n");
				scanf ("%d", &quantidade);	
				
				system ("cls");
				
				//Conta
				preco = quantidade*1.30;
				
				//Resultado
				printf ("A quantidade de %d Baurus Simples tera o preco total de: R$ %.2f \n", quantidade, preco);
				
				printf ("\nEsta de acordo com essa quantidade?\n");
				printf ("\nDigite '1' para 'Sim'\n");
				printf ("\nDigite '0' para 'Nao'");
				printf ("\n");
				scanf ("%d", &resposta);
				
				system ("cls");
			}
			
			//Resposta Inválida
			if (resposta>=2)
			{
				system ("color 04");
				printf ("\nValor Invalido!");
				printf ("\nRetornando ao cardapio.\n");
				printf ("\n");
				
				system ("pause");
				system ("cls");
			}
		}
		
		//------------------------------------------------3-------------------------------------------------------
		//Bauru com ovo
		if (codigo==102)
		{
			//Quantidade
			printf ("Quantos Baurus com Ovo voce deseja comprar?\n");
			scanf ("%d", &quantidade);	
			
			system ("cls");
			
			//Conta
			preco = quantidade*1.50;
			
			//Resultado
			printf ("A quantidade de %d Baurus com Ovo tera o preco total de: R$ %.2f \n", quantidade, preco);
			
			printf ("\nEsta de acordo com essa quantidade?\n");
			printf ("\nDigite '1' para 'Sim'\n");
			printf ("\nDigite '0' para 'Nao'");
			printf ("\n");
			scanf ("%d", &resposta);
			
			system ("cls");
			
			//Caso Não
			if (resposta==0)
			{
				//Quantidade
				printf ("Quantos Baurus com Ovo voce deseja comprar?\n");
				scanf ("%d", &quantidade);	
				
				system ("cls");
				
				//Conta
				preco = quantidade*1.50;
				
				//Resultado
				printf ("A quantidade de %d Baurus com Ovo tera o preco total de: R$ %.2f \n", quantidade, preco);
				
				printf ("\nEsta de acordo com essa quantidade?\n");
				printf ("\nDigite '1' para 'Sim'\n");
				printf ("\nDigite '0' para 'Nao'");
				printf ("\n");
				scanf ("%d", &resposta);
				
				system ("cls");
			}

			//Resposta Inválida
			if (resposta>=2)
			{
				system ("color 04");
				printf ("\nValor Invalido!");
				printf ("\nRetornando ao cardapio.\n");
				printf ("\n");
				
				system ("pause");
				system ("cls");
			}
		}
		
		//------------------------------------------------4-------------------------------------------------------
		//Hambúrguer
		if (codigo==103)
		{
			//Quantidade
			printf ("Quantos Hamburgueres voce deseja comprar?\n");
			scanf ("%d", &quantidade);	
			
			system ("cls");
			
			//Conta
			preco = quantidade*1.20;
			
			//Resultado
			printf ("A quantidade de %d Hamburgueres tera o preco total de: R$ %.2f \n", quantidade, preco);
			
			printf ("\nEsta de acordo com essa quantidade?\n");
			printf ("\nDigite '1' para 'Sim'\n");
			printf ("\nDigite '0' para 'Nao'");
			printf ("\n");
			scanf ("%d", &resposta);
			
			system ("cls");
			
			//Caso Não
			if (resposta==0)
			{
				//Quantidade
				printf ("Quantos Hamburgueres voce deseja comprar?\n");
				scanf ("%d", &quantidade);	
				
				system ("cls");
				
				//Conta
				preco = quantidade*1.20;
				
				//Resultado
				printf ("A quantidade de %d Hamburgueres tera o preco total de: R$ %.2f \n", quantidade, preco);
				
				printf ("\nEsta de acordo com essa quantidade?\n");
				printf ("\nDigite '1' para 'Sim'\n");
				printf ("\nDigite '0' para 'Nao'");
				printf ("\n");
				scanf ("%d", &resposta);
				
				system ("cls");
			}
			
			//Resposta Inválida
			if (resposta>=2)
			{
				system ("color 04");
				printf ("\nValor Invalido!");
				printf ("\nRetornando ao cardapio.\n");
				printf ("\n");
				
				system ("pause");
				system ("cls");
			}
		}
		
		//------------------------------------------------5-------------------------------------------------------
		//Cheeseburguer
		if (codigo==104)
		{
			//Quantidade
			printf ("Quantos Cheeseburguers voce deseja comprar?\n");
			scanf ("%d", &quantidade);	
			
			system ("cls");
			
			//Conta
			preco = quantidade*1.30;
			
			//Resultado
			printf ("A quantidade de %d Cheeseburguers tera o preco total de: R$ %.2f \n", quantidade, preco);
			
			printf ("\nEsta de acordo com essa quantidade?\n");
			printf ("\nDigite '1' para 'Sim'\n");
			printf ("\nDigite '0' para 'Nao'");
			printf ("\n");
			scanf ("%d", &resposta);
			
			system ("cls");
			
			//Caso Não
			if (resposta==0)
			{
				//Quantidade
				printf ("Quantos Cheeseburguers voce deseja comprar?\n");
				scanf ("%d", &quantidade);	
				
				system ("cls");
				
				//Conta
				preco = quantidade*1.30;
				
				//Resultado
				printf ("A quantidade de %d Cheeseburguers tera o preco total de: R$ %.2f \n", quantidade, preco);
				
				printf ("\nEsta de acordo com essa quantidade?\n");
				printf ("\nDigite '1' para 'Sim'\n");
				printf ("\nDigite '0' para 'Nao'");
				printf ("\n");
				scanf ("%d", &resposta);
				
				system ("cls");
			}
	
			//Resposta Inválida
			if (resposta>=2)
			{
				system ("color 04");
				printf ("\nValor Invalido!");
				printf ("\nRetornando ao cardapio.\n");
				printf ("\n");
				
				system ("pause");
				system ("cls");
			}
		}
		
		//------------------------------------------------6-------------------------------------------------------
		//Refrigerante
		if (codigo==105)
		{
			//Quantidade
			printf ("Quantos Refrigerantes voce deseja comprar?\n");
			scanf ("%d", &quantidade);	
			
			system ("cls");
			
			//Conta
			preco = quantidade*1.00;
			
			//Resultado
			printf ("A quantidade de %d Refrigerantes tera o preco total de: R$ %.2f \n", quantidade, preco);
			
			printf ("\nEsta de acordo com essa quantidade?\n");
			printf ("\nDigite '1' para 'Sim'\n");
			printf ("\nDigite '0' para 'Nao'");
			printf ("\n");
			scanf ("%d", &resposta);
			
			system ("cls");
			
			//Caso Não
			if (resposta==0)
			{
				//Quantidade
				printf ("Quantos Refrigerantes voce deseja comprar?\n");
				scanf ("%d", &quantidade);	
				
				system ("cls");
				
				//Conta
				preco = quantidade*1.00;
				
				//Resultado
				printf ("A quantidade de %d Refrigerantes tera o preco total de: R$ %.2f \n", quantidade, preco);
				
				printf ("\nEsta de acordo com essa quantidade?\n");
				printf ("\nDigite '1' para 'Sim'\n");
				printf ("\nDigite '0' para 'Nao'");
				printf ("\n");
				scanf ("%d", &resposta);
				
				system ("cls");
			}
			
			//Resposta Inválida
			if (resposta>=2)
			{
				system ("color 04");
				printf ("\nValor Invalido!");
				printf ("\nRetornando ao cardapio.\n");
				printf ("\n");
				
				system ("pause");
				system ("cls");
			}
		}
		
		//Caso Sim
		if (resposta==1)
		{
			printf ("\n");
			printf ("Compra realizada!\n");
			printf ("\n");
				
			printf ("Deseja comprar outro produto?");
			printf ("\nDigite '1' para 'Sim'\n");
			printf ("\nDigite '0' para 'Nao'");
			printf ("\n");
			scanf ("%d", &cardapio);
	
			system ("cls");
		}
	}
	
	//Finalização do Programa
	if (cardapio==0)
	{
		system ("color 0D");
		printf ("Programa Finalizado!");
		printf ("\n");
		printf ("\nObrigado por comprar conosco!");
	}
	
	//Resposta Inválida
	if (cardapio>=2)
	{
		system ("color 04");
		printf ("\nValor Invalido!");
		printf ("Caso voce ja tenha realizado compras antes desse valor, elas nao serao canceladas.");
		
		printf ("\nContinue comprando com a gente alguma hora!\n");
	}
	return 0;
}
