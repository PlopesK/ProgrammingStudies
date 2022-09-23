//Exercício Extra - Matriz A,B,C,C2,D e E
#include <stdio.h>
#include <stdlib.h>
#include <conio.h>

int main ()
{
	int vetor_a[5][3], vetor_b[5][3], vetor_c[5][3];
	int vetor_c2[5][3], vetor_d[5][3], vetor_e[5][3];
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
	
	printf ("\n <--------------------------------------A---------------------------------------> \n");
	
	//Matriz B
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
	
	printf ("\n <--------------------------------------B---------------------------------------> \n");
	
	//Matriz C
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
	
	printf ("\n <--------------------------------------C---------------------------------------> \n");
	
	//Matriz C2
	printf ("\n___Matriz C2___");
	for (i=1; i<=5; i++)
	{
		printf ("\n <///////////>");
		for (j=1; j<=3; j++)
		{
			printf ("\n Entre com o valor presente na linha %d coluna %d da Matriz C2: ", i, j);
			scanf ("%d", &vetor_c2[i][j]);
		}
	}
	
	printf ("\n <--------------------------------------C2---------------------------------------> \n");
	
	//Matriz D
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
	
	printf ("\n <---------------------------------------D--------------------------------------> \n");
	
	//Matriz E
	printf ("\n___Matriz E___");
	for (i=1; i<=5; i++)
	{
		printf ("\n <///////////>");
		for (j=1; j<=3; j++)
		{
			vetor_e[i][j]= (vetor_c2[i][j] + vetor_d[i][j]) * 2;
			printf ("\n Valor na linha %d coluna %d: %d", i, j, vetor_e[i][j]);
		}
	}

	printf ("\n <--------------------------------------E---------------------------------------> \n");
	
	getch();
	return 0;
}
