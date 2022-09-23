// Exercício 2
#include <stdio.h>
#include <stdlib.h>
#include <conio.h>
int main ()
{
	int A[12], B[12], C[12], x;
	int i, j;
	
	//A
	printf ("\n ----Matriz A----");
	for (i=1; i<=12; i++)
	{
		printf ("\n Digite o valor %d da Matriz A: ", i);
		scanf ("%d", &A[i]);
	}
	
	for (i=1; i<=12; i++)
	{
		for (j=1; j<=12; j++)
		{
			if (A[i]<A[j])
			{
				x = A[i];
				A[i] = A[j];
				A[j] = x;
			}
		}
	}
	
	//B
	printf ("\n");
	printf ("\n ----Matriz B----");
	for (i=1; i<=12; i++)
	{
		printf ("\n Digite o valor %d da Matriz B: ", i);
		scanf ("%d", &B[i]);
	}
	
	for (i=1; i<=12; i++)
	{
		for (j=1; j<=12; j++)
		{
			if (B[i]<B[j])
			{
				x = B[i];
				B[i] = B[j];
				B[j] = x;
			}
		}
	}
	
	//C
	for (i=1; i<=12; i++)
	{
		C[i] = A[i] + B[i];
	}
	
	for (i=1; i<=12; i++)
	{
		for (j=1; j<=12; j++)
		{
			if (C[i]>C[j])
			{
				x = C[i];
				C[i] = C[j];
				C[j] = x;
			}
		}
	}
	
	printf ("\n ----------------------------------------------- \n");
	
	//Demonstração de Valores
	printf ("\n ////Matriz A////");
	for (i=1; i<=12; i++)
	{
		printf ("\n O valor %d da Matriz A eh: %d \n", i, A[i]);
	}
	
	printf ("\n");
	printf ("\n ////Matriz B////");
	for (i=1; i<=12; i++)
	{
		printf ("\n O valor %d da Matriz B eh: %d \n", i, B[i]);
	}
	
	printf ("\n");
	printf ("\n ////Matriz C////");
	for (i=1; i<=12; i++)
	{
		printf ("\n O valor %d da Matriz C eh: %d \n", i, C[i]);
	}
	
	getch();
	return 0;
}
