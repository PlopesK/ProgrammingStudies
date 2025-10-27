//Fatorial
#include <stdio.h>
#include <Windows.h>
#include <iostream>
#include <conio.h>
#include <string.h>
#include <math.h>

int main()
{
	//Dados
	int numero, fatorial;
	int i, j, conta;
	
	//Início
	system ("color 09");
	
	printf ("\n Digite o numero que voce deseja fazer a fatorial: ");
	scanf ("%d", &numero);
	
	for (i=1; i<=1; i++)
	{
	    conta = 1;
	    for (j=1; j<=numero; j++)
		{
	      	conta = conta*j;
	    }
	    fatorial = conta;
	}
	
	printf ("\n A Fatorial de %d eh: %d", numero, fatorial);
}
