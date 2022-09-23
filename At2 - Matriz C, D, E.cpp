//Exercício 2 - Matriz C, D e E
#include <stdio.h>
#include <stdlib.h>
#include <conio.h>

int main ()
{
	int vetor_c[5][3], vetor_d[5][3], vetor_e[5][3];
	int i, j;
	
	//Matriz C
	printf ("___Matriz C___");
	for (i=1; i<=5; i++)
	{
		printf ("\n <///////////>");
		for (j=1; j<=3; j++)
		{
			printf ("\n Entre com o valor presente na linha %d coluna %d da Matriz C: ", i, j);
			scanf ("%d", &vetor_c[i][j]);
		}
	}
	
	//Matriz D
	printf ("\n <------------------------------------------------------------------------------> \n");
	
	printf ("\n___Matriz D___");
	for (i=1; i<=5; i++)
	{
		printf ("\n <///////////>");
		for (j=1; j<=3; j++)
		{
			printf ("\n Entre com o valor presente na linha %d coluna %d da Matriz D: ", i, j);
			scanf ("%d", &vetor_d[i][j]);
		}
	}
	
	//Matriz E
	printf ("\n <------------------------------------------------------------------------------> \n");
	
	printf ("\n___Matriz E___");
	for (i=1; i<=5; i++)
	{
		printf ("\n <///////////>");
		for (j=1; j<=3; j++)
		{
			vetor_e[i][j]= (vetor_c[i][j] + vetor_d[i][j]) * 2;
			printf ("\n Valor na linha %d coluna %d: %d", i, j, vetor_e[i][j]);
		}
	}
	
	getch();
	return 0;
}
