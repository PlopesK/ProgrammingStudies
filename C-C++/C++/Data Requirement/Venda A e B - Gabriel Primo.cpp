//Venda A e B
#include <stdio.h>
#include <Windows.h>
#include <iostream>
#include <conio.h>
#include <string.h>
#include <math.h>

int main()
{
	//Dados
	int A, B;
	int opcao[20], resposta, quantidade;
	char codigo[20];
	float preco, desconto, quantidadeA, quantidadeB;
	
	//Saudação
    system ("color 0D");
    
    printf ("Seja Bem vido!!\n");
    printf ("\n");
    
    system ("pause");
	system ("cls");
	
	//Início
	while (opcao!=0)
	{
		system ("color 09");
		
		printf ("_-_-_-MENU-_-_-_\n");
		printf ("\nProduto	  Codigo     Preco\n");
		printf ("Batata Frita     A	     10\n");
		printf ("Hamburguer	 B	     20\n");
		printf ("Caso queira os 2 produtos, digite 'C'");
		printf ("\n");
		
		printf ("\nO que deseja comprar?\n");
		scanf ("%c", &codigo);
		
		system ("cls");
		
		//------------------------------------------------1-------------------------------------------------------
		if (strcmp(codigo,"A") == 0 || strcmp(codigo,"a") == 0)
		{
			printf ("Quantos pacotes de Batatas Fritas voce deseja comprar?\n");
			scanf ("%d", &quantidade);	
				
			system ("cls");
				
			//Conta
			preco = quantidade*10;
			desconto = preco*10/100;
				
			//Resultado
			printf ("A quantidade de %d pacotes de Batatas Fritas tera o preco total de: R$ %.2f \n", quantidade, preco);
			printf ("\nPorem, voce possui 10Porcento de desconto nesse produto, tendo como preco atual: R$ %.2f", preco-desconto);
				
			printf ("\n");
			printf ("\nEsta de acordo com essa quantidade?\n");
			printf ("\nDigite '1' para 'Sim'");
			printf ("\nDigite '0' para 'Nao'");
			printf ("\n");
			scanf ("%d", &resposta);
		
			//Caso Não
			if (resposta==0)
			{
				system ("cls");
						
				//Quantidade
				printf ("Quantos pacotes de Batatas Fritas voce deseja comprar?\n");
				scanf ("%d", &quantidade);	
						
				system ("cls");
						
				//Conta
				preco = quantidade*10;
				desconto = preco*10/100;
						
				//Resultado
				printf ("A quantidade de %d pacotes de Batatas Fritas tera o preco total de: R$ %.2f \n", quantidade, preco);
				printf ("\nPorem, voce possui 10Porcento de desconto nesse produto, tendo como preco atual: R$ %.2f", preco-desconto);
				
				printf ("\n");
				printf ("\nEsta de acordo com essa quantidade?\n");
				printf ("\nDigite '1' para 'Sim'");
				printf ("\nDigite '0' para 'Nao'");
				printf ("\n");
				scanf ("%d", &resposta);
			}
		}

		//------------------------------------------------2-------------------------------------------------------
		if (strcmp(codigo,"B") == 0 || strcmp(codigo,"b") == 0)
		{
			printf ("Quantos Hamburgueres voce deseja comprar?\n");
			scanf ("%d", &quantidade);	
				
			system ("cls");
				
			//Conta
			preco = quantidade*20;
			desconto = preco*10/100;
				
			//Resultado
			printf ("A quantidade de %d Hamburgueres tera o preco total de: R$ %.2f \n", quantidade, preco);
			printf ("\nPorem, voce possui 10Porcento de desconto nesse produto, tendo como preco atual: R$ %.2f", preco-desconto);
			
			printf ("\n");
			printf ("\nEsta de acordo com essa quantidade?\n");
			printf ("\nDigite '1' para 'Sim'");
			printf ("\nDigite '0' para 'Nao'");
			printf ("\n");
			scanf ("%d", &resposta);
		
			//Caso Não
			if (resposta==0)
			{
				system ("cls");
						
				//Quantidade
				printf ("Quantos Hamburgueres voce deseja comprar?\n");
				scanf ("%d", &quantidade);	
						
				system ("cls");
						
				//Conta
				preco = quantidade*20;
				desconto = preco*10/100;
						
				//Resultado
				printf ("A quantidade de %d Hamburgueres tera o preco total de: R$ %.2f \n", quantidade, preco);
				printf ("\nPorem, voce possui 10Porcento de desconto nesse produto, tendo como preco atual: R$ %.2f", preco-desconto);
						
				printf ("\n");
				printf ("\nEsta de acordo com essa quantidade?\n");
				printf ("\nDigite '1' para 'Sim'");
				printf ("\nDigite '0' para 'Nao'");
				printf ("\n");
				scanf ("%d", &resposta);
			}
		}
		
		//------------------------------------------------3-------------------------------------------------------
		if (strcmp(codigo,"C") == 0 || strcmp(codigo,"c") == 0)
		{
			//Quantidade
			printf ("Quantos pacotes de Batata Frita voce deseja comprar?\n");
			scanf ("%f", &quantidadeA);
			
			printf ("Quantos Hamburgueres voce deseja comprar?\n");
			scanf ("%f", &quantidadeB);	
				
			system ("cls");
				
			//Conta
			preco = quantidadeB*20 + quantidadeA*10;
			desconto = preco*15/100;
				
			//Resultado
			printf ("O preco total sera de: R$ %.2f \n", preco);
			printf ("\nPorem, voce possui 15Porcento de desconto nesse produto, tendo como preco atual: R$ %.2f", preco-desconto);
			
			printf ("\n");
			printf ("\nEsta de acordo com essa quantidade?\n");
			printf ("\nDigite '1' para 'Sim'");
			printf ("\nDigite '0' para 'Nao'");
			printf ("\n");
			scanf ("%d", &resposta);	
		
			//Caso Não
			if (resposta==0)
			{
				system ("cls");
				
				//Quantidade
				printf ("Quantos pacotes de Batata Frita voce deseja comprar?\n");
				scanf ("%f", &quantidadeA);
				
				printf ("Quantos Hamburgueres voce deseja comprar?\n");
				scanf ("%f", &quantidadeB);	
					
				system ("cls");
					
				//Conta
				preco = quantidadeB*20 + quantidadeA*10;
				desconto = preco*15/100;
					
				//Resultado
				printf ("O preco total sera de: R$ %.2f \n", preco);
				printf ("\nPorem, voce possui 15Porcento de desconto nesse produto, tendo como preco atual: R$ %.2f", preco-desconto);
				
				printf ("\n");
				printf ("\nEsta de acordo com essa quantidade?\n");
				printf ("\nDigite '1' para 'Sim'");
				printf ("\nDigite '0' para 'Nao'");
				printf ("\n");
				scanf ("%d", &resposta);	
			}
		}
		
		//Caso Sim
		if (resposta==1)
		{
			resposta = 2;
			system ("cls");
			
			printf ("Compra realizada!\n");
			printf ("\n");
						
			printf ("Deseja comprar outro produto?");
			printf ("\nDigite '1' para 'Sim'\n");
			printf ("\nDigite '0' para 'Nao'");
			printf ("\n");
			scanf ("%d", &opcao[20]);
			
			//Fim do Programa
			if (opcao[20]==0)
			{
				system ("cls");
				
				system ("color 0D");
				printf ("Programa Finalizado!");
				printf ("\n");
				printf ("\nObrigado por comprar conosco!");
				
				printf ("\n");
				system ("pause");
				
				break;
			}
			
			system ("cls");
		}
			
		//Resposta Inválida
		if (resposta>=3)
		{
			system ("cls");
				
			system ("color 04");
			printf ("\nValor Invalido!");
			printf ("\nRetornando ao menu.\n");
			printf ("\n");
				
			system ("pause");
			system ("cls");
		}
	}
}
