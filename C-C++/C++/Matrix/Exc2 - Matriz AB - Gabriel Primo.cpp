// Atividade 2
#include <stdio.h>
#include <stdlib.h>

int main ()
{
	int A[15], B[15], x;
	int i, j;
	
	for (i=1; i<=15; i++)
	{
		printf("\n Insira o valor %d da Matriz A: ", i);
		scanf("%d", &A[i]);
	}
	
	for (i=1; i<=15; i++)
	{
		B[i] = A[i]*5;
	}
	
	for (i=1; i<=15; i++)
	{
		for (j= i+1; j<=15; j++)
		{
			if (B[i]>B[j])
			{
				x = B[i];
				B[i] = B[j];
				B[j] = x;
			}
		}
	}
	
	printf("\n ///////////////////////////////////////////////////\n");
	
	for (i=1; i<=15; i++)
	{
		printf("\n O valor %d da Matriz B eh: %d", i, B[i]);
	}
}
