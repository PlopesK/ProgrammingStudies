//Exercício de Fixação
#include <stdio.h>
#include <Windows.h>
#include <iostream>
#include <conio.h>
#include <string.h>
#include <math.h>

int main()
{    
    //Dados
	char pesquisa[50];
	
	struct registro
	{
		char nome[50];
		char endereco[50];
		int telefone[50];
	};
	
	int i, j, resposta, resp;
	struct registro agenda[50];
	
	//Início
	system ("color 03");
	
	//Cadastro
	for (i=1; i<=10; i++)
	{
		printf ("\n ------Registro %d------", i);

		printf ("\n Digite o Nome: ");
		scanf ("%s", &agenda[i].nome);
		
		printf ("\n Digite o Endereco: ");
		scanf ("%s", &agenda[i].endereco);
		
		printf ("\n Digite o Telefone: ");
		scanf ("%s", &agenda[i].telefone);
		
		printf ("\n");
		system ("pause");
		system ("cls");
	}
	system ("cls");
		
	//Ações com os dados registrados
	printf ("\n Digite 1 se deseja que os registros sejam apresentados; \n");
	printf ("\n Digite 2 se deseja pesquisar algo dos registro; \n");
	printf ("\n Digite 0 se deseja encerrar o programa. \n\n");
	
	printf ("\n -O que deseja? ");
	scanf ("%i", &resposta);
	
	system ("cls");
	
	while (resposta!=0)
	{
		system ("color 03");
		
		//Ação 1
		if (resposta==1)
		{
			for (i=1; i<=10; i++)
			{
				printf ("\n ------Registro %d------\n", i);
				printf ("\n Nome: %s", agenda[i].nome);
				printf ("\n\n Endereco: %s", agenda[i].endereco);
				printf ("\n\n Telefone: %s", agenda[i].telefone);
				
				printf ("\n");
			}
			system ("pause");
			system ("cls");
			
			printf ("\n Digite 1 se deseja que os registros sejam apresentados; \n");
			printf ("\n Digite 2 se deseja pesquisar algo dos registros; \n");
			printf ("\n Digite 0 se deseja encerrar o programa. \n\n");
		
			printf ("\n -O que deseja? ");
			scanf ("%i", &resposta);
				
			system ("cls");
		}
		
		//Ação 2
		if (resposta==2)
		{
			printf ("\n--Digite o Valor correspondente a pesquisa--");
			printf ("\n 1- Nome");
			printf ("\n 2- Endereco");
			printf ("\n 3- Telefone");
			printf ("\n 0- Voltar ao Menu Inicial");
			
			printf ("\n\n O que deseja visualizar? ");
			scanf ("%i", &resp);
			
			system ("cls");
			
			//Ação 2.1
			if (resp==1)
			{
				for (i=0;i<11;i++)
				{
					printf ("\n\n __Registro %i__", i);
					printf ("\n Nome: %s ", agenda[i].nome);
					printf ("\n");
				}
				system ("pause");
				system ("cls");
			
				printf ("\n--Digite o Valor correspondente a pesquisa--");
				printf ("\n 1- Nome");
				printf ("\n 2- Endereco");
				printf ("\n 3- Telefone");
				printf ("\n 0- Voltar ao Menu Inicial");
			
				printf ("\n\n O que deseja visualizar? ");
				scanf ("%i", &resp);
				
				system ("cls");
			}
			
			//Ação 2.2
			if (resp==2)
			{
				for (i=1; i<=10; i++)
				{
					printf ("\n\n __Registro %i__", i);
					printf ("\n Endereco: %s ", agenda[i].endereco);
					printf ("\n");
				}
				system ("pause");
				system ("cls");
				
				printf ("\n--Digite o Valor correspondente a pesquisa--");
				printf ("\n 1- Nome");
				printf ("\n 2- Endereco");
				printf ("\n 3- Telefone");
				printf ("\n 0- Voltar ao Menu Inicial");
			
				printf ("\n\n O que deseja visualizar? ");
				scanf ("%i", &resp);
				
				system ("cls");
			}
			
			//Ação 2.3
			if (resp==3)
			{
				for (i=1; i<=10; i++)
				{
					printf ("\n\n __Registro %i__", i);
					printf ("\n Telefone: %s ", agenda[i].telefone);
					printf ("\n");
				}
				system ("pause");
				system ("cls");
				
				printf ("\n--Digite o Valor correspondente a pesquisa--");
				printf ("\n 1- Nome");
				printf ("\n 2- Endereco");
				printf ("\n 3- Telefone");
				printf ("\n 0- Voltar ao Menu Inicial");
			
				printf ("\n\n O que deseja visualizar? ");
				scanf ("%i", &resp);
				
				system ("cls");
			}
			
			//Ação 2.4
			if (resp==0)
			{
				printf ("\n Digite 1 se deseja que os registros sejam apresentados; \n");
				printf ("\n Digite 2 se deseja pesquisar algo dos registros; \n");
				printf ("\n Digite 0 se deseja encerrar o programa. \n\n");
		
				printf ("\n -O que deseja? ");
				scanf ("%i", &resposta);
				
				system ("cls");
			}
			
			//Ação 2 Inválida
			if (resp>=4)
			{
				system ("color 04");
				printf ("\n Valor Invalido!");
				
				printf ("\n\n Tente outro valor");
				
				printf ("\n 1- Nome");
				printf ("\n 2- Endereco");
				printf ("\n 3- Telefone");
				printf ("\n 0- Voltar ao Menu Inicial");
			
				printf ("\n\n O que deseja visualizar? ");
				scanf ("%i", &resp);
				
				system ("cls");
			}
		}
		
		//Ação Inválida
		if (resposta>=3)
		{
			system ("color 04");
			printf ("\nValor Invalido!");
			
			printf ("\n\n Tente outro valor");
			
			printf ("\n Digite 1 se deseja que os registros sejam apresentados; \n");
			printf ("\n Digite 2 se deseja pesquisar algo dos registros; \n");
			printf ("\n Digite 0 se deseja encerrar o programa. \n\n");
		
			printf ("\n -O que deseja? ");
			scanf ("%i", &resposta);
				
			system ("cls");
		}
	}
	
	system ("color 04");
	printf ("\n FIM DO PROGRAMA!");
}
