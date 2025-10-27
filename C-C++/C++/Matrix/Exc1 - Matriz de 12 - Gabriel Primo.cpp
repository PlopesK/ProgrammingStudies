// Atividade 1
#include <stdio.h>
#include <stdlib.h>

int main ()
{
	int vetor[12], x;
	int i, j;
	
	for (i=1; i<=12; i++)
	{
		printf ("\n Digite um numero: ");
		scanf ("%d", &vetor[i]);
	}
	
	for (i=1; i<=12; i++)
	{
		for (j= i+1; j<=12; j++)
		{
			if (vetor[i] < vetor[j])
			{
				x = vetor[i] ;
				vetor[i] = vetor[j];
				vetor[j] = x;
			}
		}
	}
	
	printf ("\n //////////////////////////////////////////////// \n");
	
	for (i=1; i<=12; i++)
	{
		printf ("\n %d", vetor[i]);
	}
}
	
