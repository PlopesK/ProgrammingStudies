// Exercício 1
#include <stdio.h>
#include <stdlib.h>

int main ()
{
	int A[15], B[15];
	int x, conta;
	int i, j;
	
	//A
	for (i=1; i<=15; i++)
	{
		printf ("\n Digite o valor %d da Matriz A: ", i);
		scanf ("%d", &A[i]);
	}
	
	//B
	for (i=1; i<=15; i++)
	{
    	conta = 1;
    	for (j=1; j<=A[i]; j++)
		{
      		conta *= j;
    	}
    	B[i] = conta;
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
	
	printf ("\n //////////////////////////////////////////////////////// \n");
	
	for (i=1; i<=15; i++)
	{
		printf ("\n O valor %d da Matriz B eh: %d", i, B[i]);
	}
}
