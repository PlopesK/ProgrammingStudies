//Exercício 1 - Matriz A,B e C
#include <stdio.h>
#include <stdlib.h>
#include <conio.h>

int main ()
{
	int vetor_a[5][3], vetor_b[5][3], vetor_c[5][3];
	int i, j;
	
	//Matriz A
	printf ("___Matriz A___");
	for (i=1; i<=5; i++)
	{
		printf ("\n <///////////>");
		for (j=1; j<=3; j++)
		{
			printf ("\n Entre com o valor presente na linha %d coluna %d da Matriz A: ", i, j);
			scanf ("%d", &vetor_a[i][j]);
		}
	}
	
	//Matriz B
	printf ("\n <------------------------------------------------------------------------------> \n");
	
	printf ("\n___Matriz B___");
	for (i=1; i<=5; i++)
	{
		printf ("\n <///////////>");
		for (j=1; j<=3; j++)
		{
			printf ("\n Entre com o valor presente na linha %d coluna %d da Matriz B: ", i, j);
			scanf ("%d", &vetor_b[i][j]);
		}
	}
	
	//Matriz C
	printf ("\n <------------------------------------------------------------------------------> \n");
	
	printf ("\n___Matriz C___");
	for (i=1; i<=5; i++)
	{
		printf ("\n <///////////>");
		for (j=1; j<=3; j++)
		{
			vetor_c[i][j]= vetor_a[i][j] + vetor_b[i][j];
			printf ("\n Valor na linha %d coluna %d: %d", i, j, vetor_c[i][j]);
		}
	}
	
	getch();
	return 0;
}
