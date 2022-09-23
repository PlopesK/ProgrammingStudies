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
	float A2, B2, R2;
	float A3, B3, R3;
	float A4, B4, R4;
	
	//Opções
	opcao = 0;
	while (opcao != 5)
	{
		system ("color 09");
		
		//Menu
		printf ("\n ____MENU____ \n");
		printf ("\n [1] - Adicao");
		printf ("\n [2] - Subtracao");
		printf ("\n [3] - Multiplicacao");
		printf ("\n [4] - Divisao");
		printf ("\n [5] - Fim do Programa");
		printf ("\n Escolha uma das opcoes: ");
		scanf ("%d", &opcao);
		
		system ("cls");
		if (opcao != 5)
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
				scanf ("%f", &A2);
				
				printf ("\n");
				
				printf ("\n Entre com o Segundo Valor: ");
				scanf ("%f", &B2);
				
				R2 = A2 - B2;
				printf ("\n O resultado da operacao eh: %.2f", R2);
				
				printf ("\n");
				system ("pause");
				system ("cls");
				break;
				
				//Multiplicação
				case 3:
				printf ("\n ____Rotina Multiplicacao____ \n");
				printf ("\n Entre com o Primeiro Valor: ");
				scanf ("%f", &A3);
				
				printf ("\n");
				
				printf ("\n Entre com o Segundo Valor: ");
				scanf ("%f", &B3);
				
				R3 = A3 * B3;
				printf ("\n O resultado da operacao eh: %.2f", R3);
				
				printf ("\n");
				system ("pause");
				system ("cls");
				break;
				
				//Divisão
				case 4:
				printf ("\n ____Rotina Divisao____ \n");
				printf ("\n Entre com o Primeiro Valor: ");
				scanf ("%f", &A4);
				
				printf ("\n");
				
				printf ("\n Entre com o Segundo Valor: ");
				scanf ("%f", &B4);
				
				R4 = A4 / B4;
				
				if (A4 == 0 || B4 == 0)
				{
					printf ("\n O resultado da operacao eh: ERRO");
				}
				else printf ("\n O resultado da operacao eh: %.2f", R4);
				
				printf ("\n");
				system ("pause");
				system ("cls");
				break;
			}
		}
	}
	
	//Fim do Programa
	if (opcao == 5)
	{
		system ("color 04");
		printf ("FIM DO PROGRAMA!");
	}
}
