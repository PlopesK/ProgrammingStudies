//Exercício 2 e 3
#include <stdio.h>
#include <Windows.h>
#include <iostream>
#include <string.h>

int main()
{
	//Solicitação
	char So;
	
	//ABC Soma
	int A[5][3], B[5][3], C[5][3], x;
	int i, j;
	
	//AB Fatorial
	int A2[5][4], B2[5][4], resultado[5];
	int g, h;
	int fatorial;
	
	//Solicitação de Exercício
	system ("cls");
	system ("color 03");
	
	printf ("\n Digite exatamente como nos exemplos abaixo.\n");
	printf ("\n Se deseja o Exercicio 1, digite '1'");
	printf ("\n Se deseja o Exercicio 2, digite '2'");
	printf ("\n Se deseja visualizar Ambos, digite '3'");
	
	printf ("\n\n Qual exercicios voce deseja visualizar? ");
	scanf ("%d", &So);
	
	//-----------------------Só Exercício 1-----------------------
	if (So == 1)
	{
		system ("cls");
		system ("color 05");
	
		printf ("\n_________Exercicio 1_________\n");
		//A
		printf ("\n ----------Matriz A----------");
		for (i=1; i<=5; i++)
		{
			for (j=1; j<=3; j++)
			{
				printf ("\n Digite o valor da coluna %d linha %d da Matriz A: ", i, j);
				scanf ("%d", &A[i][j]);
			}
		}
		printf ("\n");
		system ("pause");
		
		system ("cls");
		
		//B
		printf ("\n ----------Matriz B----------");
		for (i=1; i<=5; i++)
		{
			for (j=1; j<=3; j++)
			{
				printf ("\n Digite o valor da coluna %d linha %d da Matriz B: ", i, j);
				scanf ("%d", &B[i][j]);
			}
		}
		
		//C
		for (i=1; i<=5; i++)
		{
			for (j=1; j<=3; j++)
			{
				C[i][j] = A[i][j] + B[i][j];
			}
		}
		printf ("\n");
		system ("pause");
		
		system ("cls");
		
		//Demonstração de Valores
		system ("cls");
		system ("color 04");
		
		printf ("\n Os valores sao: ");
		//A
		printf ("\n__________________        __________________\n");
		printf ("__________________Matriz A__________________");
		for (i=1; i<=5; i++)
		{
			for (j=1; j<=3; j++)
			{
				printf ("\n O valor da coluna %d linha %d da Matriz A eh: %d \n", i, j, A[i][j]);
			}
		}
		printf ("\n");
		
		system ("pause");
		system ("color 06");
		
		//B
		printf ("\n__________________        __________________\n");
		printf ("__________________Matriz B__________________");
		for (i=1; i<=5; i++)
		{
			for (j=1; j<=3; j++)
			{
				printf ("\n O valor da coluna %d linha %d da Matriz B eh: %d \n", i, j, B[i][j]);
			}
		}
		printf ("\n");
		
		system ("pause");
		system ("color 09");
		
		//C
		printf ("\n__________________        __________________\n");
		printf ("__________________Matriz C__________________");
		for (i=1; i<=5; i++)
		{
			for (j=1; j<=3; j++)
			{
				printf ("\n O valor da coluna %d linha %d da Matriz C eh: %d \n", i, j, C[i][j]);
			}
		}
		printf ("\n");
	}
	
	//-----------------------Só Exercício 2-----------------------
		else if (So == 2)
	{
		system ("cls");
		system ("color 09");
		
		printf ("\n_________Exercicio 2_________\n");
		
		//A
		for (g=1; g<=5; g++)
		{
			for (h=1; h<=4; h++)
			{
				printf ("\n Digite o valor da coluna %d linha %d da Matriz A: ", g, h);
				scanf ("%d", &A2[g][h]);
			}
		}

		//B
		for (g=1; g<=5; g++)
		{
	    	fatorial = 1;
	    	for (h=1; h<=A2[g][h]; h++)
			{
	      		fatorial = fatorial * h;
	      		
	    	}
	    	B2[g][h] = fatorial;
	  	}
		
		printf ("\n");
		system ("pause");
		
		system ("cls");
		
		//Demonstração de Valores
		system ("cls");
		system ("color 04");
		
		printf ("\n Os valores sao: ");
		
		//A
		printf ("\n__________________        __________________\n");
		printf ("__________________Matriz A__________________");
		for (g=1; g<=5; g++)
		{
			for (h=1; h<=4; h++)
			{
				printf ("\n O valor da coluna %d linha %d da Matriz A eh: %d \n", g, h, A2[g][h]);
			}
		}
		
		printf ("\n");
		system ("pause");
		
		//B
		printf ("\n__________________        __________________\n");
		printf ("__________________Matriz B__________________");
		for (g=1; g<=5; g++)
		{
			for (h=1; h<=4; h++)
			{
				printf ("\n O valor da coluna %d linha %d da Matriz B eh: %d \n", g, h, B2[g][h]);
			}
		}	
	}
	
	//-----------------------Ambos Exercícios-----------------------
	else if (So == 3)
	{
		system ("cls");
		system ("color 03");
		
		printf ("\n________________Ambos Exercicios________________");
		//=============================== Exercício 1 ===============================
		printf ("\n__________________Exercicio 1__________________\n");
		//A
		printf ("\n--------------------Matriz A--------------------");
		for (i=1; i<=5; i++)
		{
			for (j=1; j<=3; j++)
			{
				printf ("\n Digite o valor da coluna %d linha %d da Matriz A: ", i, j);
				scanf ("%d", &A[i][j]);
			}
		}
		printf ("\n");
		system ("pause");
		
		system ("cls");
		
		//B
		printf ("\n ----------Matriz B----------");
		for (i=1; i<=5; i++)
		{
			for (j=1; j<=3; j++)
			{
				printf ("\n Digite o valor da coluna %d linha %d da Matriz B: ", i, j);
				scanf ("%d", &B[i][j]);
			}
		}
		
		//C
		for (i=1; i<=5; i++)
		{
			for (j=1; j<=3; j++)
			{
				C[i][j] = A[i][j] + B[i][j];
			}
		}
		printf ("\n");
		system ("pause");
		
		system ("cls");
		
		//Demonstração de Valores
		system ("cls");
		system ("color 09");
		
		printf ("\n Os valores sao: ");
		//A
		printf ("\n__________________        __________________\n");
		printf ("__________________Matriz A__________________");
		for (i=1; i<=5; i++)
		{
			for (j=1; j<=3; j++)
			{
				printf ("\n O valor da coluna %d linha %d da Matriz A eh: %d \n", i, j, A[i][j]);
			}
		}
		printf ("\n");
		
		system ("pause");
		
		//B
		printf ("\n__________________        __________________\n");
		printf ("__________________Matriz B__________________");
		for (i=1; i<=5; i++)
		{
			for (j=1; j<=3; j++)
			{
				printf ("\n O valor da coluna %d linha %d da Matriz B eh: %d \n", i, j, B[i][j]);
			}
		}
		printf ("\n");
		
		system ("pause");
		
		//C
		printf ("\n__________________        __________________\n");
		printf ("__________________Matriz C__________________");
		for (i=1; i<=5; i++)
		{
			for (j=1; j<=3; j++)
			{
				printf ("\n O valor da coluna %d linha %d da Matriz C eh: %d \n", i, j, C[i][j]);
			}
		}
		printf ("\n");
		
		system ("pause");
		system ("cls");
		system ("color 03");
		
		//=============================== Exercício 2 ===============================
		printf ("\n________________Ambos Exercicios________________\n");
		printf ("\n_________Exercicio 2_________\n");
		
		//A
		for (g=1; g<=5; g++)
		{
			for (h=1; h<=4; h++)
			{
				printf ("\n Digite o valor da coluna %d linha %d da Matriz A: ", g, h);
				scanf ("%d", &A2[g][h]);
			}
		}

		//B
		for (g=1; g<=5; g++)
		{
	    	fatorial = 1;
	    	for (h=1; h<=A2[g][h]; h++)
			{
	      		fatorial = fatorial * h;
	      		
	    	}
	    	B2[g][h] = fatorial;
	  	}
		
		printf ("\n");
		system ("pause");
		
		system ("cls");
		
		//Demonstração de Valores
		system ("cls");
		system ("color 09");
		
		printf ("\n Os valores sao: ");
		
		//A
		printf ("\n__________________        __________________\n");
		printf ("__________________Matriz A__________________");
		for (g=1; g<=5; g++)
		{
			for (h=1; h<=4; h++)
			{
				printf ("\n O valor da coluna %d linha %d da Matriz A eh: %d \n", g, h, A2[g][h]);
			}
		}
		
		printf ("\n");
		system ("pause");
		
		//B
		printf ("\n__________________        __________________\n");
		printf ("__________________Matriz B__________________");
		for (g=1; g<=5; g++)
		{
			for (h=1; h<=4; h++)
			{
				printf ("\n O valor da coluna %d linha %d da Matriz B eh: %d \n", g, h, B2[g][h]);
			}
		}	
	}
	
	else printf ("\n Valor digitado inexistente! \n");
	system ("color 04");
	
	return 0;
	system("exit");
}
