//Algoritmo 2
#include <stdio.h>
#include <Windows.h>
#include <iostream>
#include <conio.h>
#include <string.h>
#include <math.h>

int main()
{
	//Dados
	char sexo[2];
	float altura, peso;
	int resposta;
	
	//Solicitação Sexo
	system ("color 03");
	
	resposta == 1;
	
	printf ("\n Qual seu Sexo? (Responda usando 'M' para Masculino e 'F' para Feminino(Podendo tambem suas variacoes em Minusculo))");
	printf ("\n Caso o valor escrito nao for 'M' ou 'F'(Podendo tambem 'm' e 'f'), o programa finalizara apos a proxima etapa.");
	printf ("\n ");
	scanf ("%s", &sexo);
	printf ("\n");
	
    system ("pause");
	system ("cls");
	
	//Solicitação Altura
	printf ("\n Qual sua altura? (Por favor, utilize '.' para indicar a medida de centimetros, Exemplo: 1.72)");
	printf ("\n ");
	scanf ("%f", &altura);
	printf ("\n");
	
	system ("pause");
	system ("cls");
	
	//Masculino
	if (strcmp(sexo,"M") == 0 || strcmp(sexo,"m") == 0)
	{
		printf ("\n_____________________________________________________");
		peso = (72.7*altura)-58;
		printf ("\n Seu peso ideal eh de %.2fKg \n", peso);
		
		printf ("\n Deseja ver todas as informacoes inseridas?\n");
		printf ("\n Digite '1' para 'Sim'\n");
		printf ("\n Digite '0' para 'Nao'");
		printf ("\n ");
		scanf ("%d", &resposta);

		system ("cls");
		
		//Caso Sim
		if (resposta==1)
		{
			system ("color 02");
			printf ("\n____________________________________________________________________________________\n");
			printf ("Voce eh do sexo Masculino tendo %.2f de Altura e possuindo como Peso Ideal %.2fKg \n", altura, peso);
			printf ("____________________________________________________________________________________\n");
			
		}
	}

	//Feminino
	if (strcmp(sexo,"F") == 0 || strcmp(sexo,"f") == 0)
	{
		printf ("\n_____________________________________________________");
		peso = (62.1*altura)-44.7;
		printf ("\n Seu peso ideal eh de %.2fKg \n", peso);
		
		printf ("\n Deseja ver todas as informacoes inseridas?\n");
		printf ("\n Digite '1' para 'Sim'\n");
		printf ("\n Digite '0' para 'Nao'");
		printf ("\n ");
		scanf ("%d", &resposta);

		system ("cls");
		
		//Caso Sim
		if (resposta==1)
		{
			system ("color 02");
			printf ("\n____________________________________________________________________________________\n");
			printf ("Voce eh do sexo Feminino tendo %.2f de Altura e possuindo como Peso Ideal %.2fKg \n", altura, peso);
			printf ("____________________________________________________________________________________\n");	
		}
	}
	
	//Caso Não
	if (resposta==0 || resposta>=2)
	{
		system ("color 02");
		printf ("\n Fim do Programa!");
	}
	
	return 0;
}
