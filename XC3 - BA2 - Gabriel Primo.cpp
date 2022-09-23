// Exercício 3
#include <stdio.h>
#include <stdlib.h>
#include <conio.h>

int main ()
{
	int A[15], B[15], x;
	int i, j;
	
	//A
	printf ("\n ----Matriz A----");
	for (i=1; i<=15; i++)
	{
		printf ("\n Digite o valor %d da Matriz A: ", i);
		scanf ("%d", &A[i]);
	}
	
	for (i=1; i<=15; i++)
	{
		for (j=1; j<=15; j++)
		{
			if (A[i]>A[j])
			{
				x = A[i];
				A[i] = A[j];
				A[j] = x;	
			}
		}
	}
	
	//B
	for (i=1; i<=15; i++)
	{
		B[i] = A[i]/2;
	}
	
	for (i=1; i<=15; i++)
	{
		for (j=1; j<=15; j++)
		{
			if (B[i]<B[j])
			{
				x = B[i];
				B[i] = B[j];
				B[j] = x;	
			}
		}
	}
	
	printf ("\n");
	printf ("\n ----------------------------------------------- \n");
	
	//Demonstrando Valores
	printf ("\n ////Matriz A////");
	for (i=1; i<=15; i++)
	{
		printf ("\n O valor %d da Matriz A eh: %d \n", i, A[i]);
	}
	
	printf ("\n");
	printf ("\n ////Matriz B////");
	for (i=1; i<=15; i++)
	{
		printf ("\n O valor %d da Matriz B eh: %d \n", i, B[i]);
	}
	
	getch();
	return 0;
}
