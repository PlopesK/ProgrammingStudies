//Calculadora (Com Menu)
#include <stdio.h>
#include <Windows.h>
#include <iostream>
#include <conio.h>
#include <string.h>
#include <math.h>

int main()
{
	//Dados
	int opcao;
	float A1, B1, R1;
	int i;
	
	//Opções
	opcao = 0;
	while (opcao != 8 || opcao < 8)
	{
		system ("color 09");
		
		//Menu
		printf ("\n ____MENU____ \n");
		printf ("\n [1] - Adicao");
		printf ("\n [2] - Subtracao");
		printf ("\n [3] - Multiplicacao");
		printf ("\n [4] - Divisao");
		printf ("\n [5] - Porcentagem");
		printf ("\n [6] - Potenciacao");
		printf ("\n [7] - Raiz Quadrada");
		printf ("\n [8] - Fim do Programa");
		printf ("\n Escolha uma das opcoes: ");
		scanf ("%d", &opcao);
		
		system ("cls");
		if (opcao != 8)
		{
			system ("color 03");
			switch (opcao)
			{
				
				//Adição
				case 1: 
				printf ("\n ____Rotina Adicao____ \n");
				printf ("\n Entre com o Primeiro Valor: ");
				scanf ("%f", &A1);
				
				printf ("\n");
				
				printf ("\n Entre com o Segundo Valor: ");
				scanf ("%f", &B1);
				
				R1 = A1 + B1;
				printf ("\n O resultado da operacao eh: %.2f", R1);
				
				printf ("\n");
				system ("pause");
				system ("cls");
				break;
				
				//Subtração
				case 2:
				printf ("\n ____Rotina Subtracao____ \n");
				printf ("\n Entre com o Primeiro Valor: ");
				scanf ("%f", &A1);
				
				printf ("\n");
				
				printf ("\n Entre com o Segundo Valor: ");
				scanf ("%f", &B1);
				
				R1 = A1 - B1;
				printf ("\n O resultado da operacao eh: %.2f", R1);
				
				printf ("\n");
				system ("pause");
				system ("cls");
				break;
				
				//Multiplicação
				case 3:
				printf ("\n ____Rotina Multiplicacao____ \n");
				printf ("\n Entre com o Primeiro Valor: ");
				scanf ("%f", &A1);
				
				printf ("\n");
				
				printf ("\n Entre com o Segundo Valor: ");
				scanf ("%f", &B1);
				
				R1 = A1 * B1;
				printf ("\n O resultado da operacao eh: %.2f", R1);
				
				printf ("\n");
				system ("pause");
				system ("cls");
				break;
				
				//Divisão
				case 4:
				printf ("\n ____Rotina Divisao____ \n");
				printf ("\n Entre com o Primeiro Valor: ");
				scanf ("%f", &A1);
				
				printf ("\n");
				
				printf ("\n Entre com o Segundo Valor: ");
				scanf ("%f", &B1);
				
				R1 = A1 / B1;
				
				if (A1 == 0 || B1 == 0)
				{
					printf ("\n O resultado da operacao eh: ERRO");
				}
				else printf ("\n O resultado da operacao eh: %.2f", R1);
				
				printf ("\n");
				system ("pause");
				system ("cls");
				break;
				
				//Porcentagem
				case 5:
				printf ("\n ____Rotina Porcentagem____ \n");
				printf ("\n Entre com o Valor Principal: ");
				scanf ("%f", &A1);
				
				printf ("\n");
				
				printf ("\n Entre com a Porcentagem: ");
				scanf ("%f", &B1);
				
				R1 = A1 * B1/100;
		
				printf ("\n %.2f Porcento de %.2f eh: %.2f", B1, A1, R1);
				
				printf ("\n");
				system ("pause");
				system ("cls");
				break;
				
				//Potenciação
				case 6:
				printf ("\n ____Rotina Potenciacao____ \n");
				printf ("\n Escreva o Valor Principal: ");
				scanf ("%f", &A1);
				
				printf ("\n");
				
				printf ("\n Escreva o Expoente: ");
				scanf ("%f", &B1);
				
				R1 = A1;
				for (i = 0; i<B1-1; i++)
				{
					R1 = R1 * A1;	
				}	
				
				printf ("\n A Potencia %.2f de %.2f eh: %.2f", B1, A1, R1);
				
				printf ("\n");
				system ("pause");
				system ("cls");
				break;
				
				//Raiz Quadrada
				case 7:
				printf ("\n ____Rotina Raiz Quadrada____ \n");
				printf ("\n Escreva a Raiz: ");
				scanf ("%f", &A1);
				
				printf ("\n");
				
				R1 = sqrt(A1);
				printf ("\n A Raiz Quadrada de %.2f eh: %.2f", A1, R1);
				
				printf ("\n");
				system ("pause");
				system ("cls");
				break;
			}
		}
	}
	
	//Fim do Programa
	if (opcao == 8)
	{
		system ("color 04");
		printf ("FIM DO PROGRAMA!");
	}
}
