//Exercício 2
#include <stdio.h>
#include <stdlib.h>

int main()
{
	
	int i;
	int cont;
	
	printf ("\n Digite a quantia de numeros que sera contada: ");
	scanf ("%d", &cont);
	for (i = 1; i <= cont; i++)
		{
			if (i%2 == 0)
			{
				printf ("%d ", i);
			}
		}
}
