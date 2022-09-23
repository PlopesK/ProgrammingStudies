//Matriz
#include <stdio.h> 
#include <Windows.h>
#include <iostream>
#include <conio.h>
#include <string.h>
#include <math.h>
//"Bibliotecas" que eu adicionei, normalmente eu uso sempre a mesma formação pra não me preocupar em ter que alterar isso
//Sendo os comandos principais para o funcionamento do programa

/*  A Matriz que eu elaborei foi bem sem criatividade, sendo ela:
Existem 3 Matrizes, onde a Matriz A será definida pelo usuário
a Matriz B será a Soma da Matriz A com 20
e a Matriz C será a Soma de A com B, dividida por 2;

A cadeia de valores é de 3 Linhas e 3 Colunas

PS: Eu queria adicionar de alguma maneira o sistema de deixar em Português, mas por algum motivo nunca funciona
então por isso eu nunca uso (Soluções rápidas para problemas que eu não sei onde estão :D)
*/

int main()
{
	//-------------Dados-------------//
	
	int A[3][3], B[3][3]; /* O valor dentre as colchetes (3 e 2) são utilizados para específicar o tamanho da Matriz 
						  (nesse caso 4 Linhas e 5 Colunas) */
						  
	float C[4][3];	    /*se eu não específicar direito nisso, o programa não irá funcionar.
						Por algum motivo desconhecido, o programa no C não mostrava a terceira Linha,
						então tive que botar "4" nas linhas do valor C para funcionar; */
						
	int i, j, c, r;			//"i" e "j" são utilizados como contadores, 
	
	char m[3];				//"m", "c" e "r" são para um Extra.
	
	/* Todo valor Inteiro é colocado como "int", sendo "float" algo mais variável 
	(já que com INT não é possível realizar divisão, eu utilizei FLOAT no valor da Matriz C).
	"Char" serve para ler Letras, precisando desse valor entre colchetes para se transformar em um "ConstantChar"
	cujo eu utilizarei para uma parte do meu programa
	*/
	
	
	//-------------Início-------------//
	
	system ("color 09"); //Corzinha pra deixar o sistema bunitin.
	
	
	//__________Matriz A__________//
	printf ("\n ______Matriz A______\n");
	for (i=1; i<=3; i++) /* Início da contagem, começando pelas Linhas; 
						 sendo "For" utilizado parta definir um valor para contar até um outro valor específicado 
						 (Nesse caso, o valor específicado é "4")*/
	{
		
		printf ("\n <////////////////> \n"); //Divisão pra deixar bonitin no sistema
		
		for (j=1; j<=3; j++) //Contagem das Colunas
		{
			printf ("\n Entre com o valor presente na linha %d coluna %d da Matriz A: ", i, j);
			scanf ("%d", &A[i][j]);
			
			/* "Printf" é utilizado para realizar um comentário ao programa
			"Scanf" é utilizado para ler um valor que está dentro de um comentário,
			sendo o "d" específicado para anotar valores Decimais (Caso colocasse algum valor sem ser um número para scanear, o programa daria erro);
			logo ele anotaria Valores Decimais à Matriz A dentro da contagem de "i" e "j";
			*/
		}
	}
	
	printf ("\n"); //Apenas um spacin pra deixar mais bonitin
	system ("pause"); //Pausa o programa para apenas progredir na próxima tecla apertada
	system ("cls"); //Troca a janela do programa, deixando ele mais limpo e organizado
	
	
	//__________Matriz B__________//
	printf ("\n ______Matriz B______");
	for (i=1; i<=3; i++)
	{
		printf ("\n\n <////////////////> \n");
		
		for (j=1; j<=3; j++)
		{
			B[i][j] = A[i][j] + 20;
			
			printf ("\n O valor da linha %d da coluna %d na Matriz B eh: %d", i, j, B[i][j]);
			
			/* Comentando agora, mesmo que eu já utilizei isso antes nesse programna
			Esses valores de "PORCENTAGEM+D" servem para demonstrar o valor específicado (No caso, os valores de 'i', 'j' e 'B');
			Além disso, o "\n" é utilizado para Pular uma linha, deixando o programa mais organizado */
		}
	}
	
	printf ("\n\n");
	system ("pause");
	system ("cls");
	
	
	//__________Matriz C__________//
	printf ("\n ______Matriz C______");
	for (i=1; i<=3; i++)
	{
		printf ("\n\n <////////////////> \n");
		
		for (j=1; j<=3; j++)
		{
			C[i][j] = A[i][j] + B[i][j];
			
			printf ("\n O valor da linha %d da coluna %d na Matriz C eh: %.2f", i, j, C[i][j]/2);
			// Nesse caso há algo de difenrente, o "PORCENTAGEM+F" é para indicar valores do tipo Float
		}
	}
	
	printf ("\n\n");
	system ("pause");
	system ("cls");
	
	//-------------Menu-------------//
	//Adicionei um sistema de menu porque não queria deixar o programa tão simplezin
	system ("color 05");
	
	printf ("\n Voce deseja visualizar alguma Matriz? (Digite 'Sim' ou 'Nao' como resposta)");
	printf ("\n ");
	scanf ("%s", &m);
	
	/* O Scanf para string usa "PORCENTAGEM+S" */
	//__________Caso Sim__________//
	if (strcmp(m,"Sim") == 0 || strcmp(m,"sim") == 0)
	{
		/* Explicaçãozinha rápida sobre o IF:
		O "If" é utilizado para encontrar casos dentro do programa, onde ele realizará
		ações caso as condições sejam validadas.
		No caso, eu utilizo o código de "Strcmp", onde ele serve para localizar Caracteres dentro do programa
		sendo que se for "==0" é para caso for IGUAL ao valor e se for "==1" para caso for DIFERENTE.
		O "||" equivale a um "OU".
		O motivo de eu escrever a sentença em Maiúsculo e Minúsculo é por preguiça de sempre escrever em Maiúsculo
		a primeira letra e o resto em Minúsculo :)
		*/
		
		r = 1; //Especificação necessária pro comando "While" funcionar
		while (r == 1)
		{
			/* Explicaçãozinha sobre o WHILE:
			O "While" é utilizado para realizar ações constantes ENQUANTO (Literalmente a tradução de "While" para o Português)
			as especificações presentes dentro do parênteses forem verdadeiras.
			Caso alguma especificação for encontrada como falsa, o código do "while" irá parar de rodar e prosseguir
			pro próximo comando
			Nesse casoeu usei para a confecção do menu, porém ele não era necessariamente obrigatório.*/
			
			system ("cls");
			system ("color 03");
			
			printf ("\n O que voce deseja visualizar? (Digite o Valor do codigo para validar a acao) \n");	
			printf ("\n Codigo ");
			printf ("\n   01 - Visualizar apenas a Matriz A");
			printf ("\n   02 - Visualizar apenas a Matriz B");
			printf ("\n   03 - Visualizar apenas a Matriz C");
			printf ("\n   04 - Visualizar Todas as Matrizes");
			printf ("\n   00 - Encerrar o Programa");
			printf ("\n ----------------------------------------");
			printf ("\n   ");
			scanf ("%d", &c);
			
			//-_-_-_-_-Código 1-_-_-_-_-//
			if (c == 01 || c == 1)
			{
				// Caso IF do Código ser igual a 1
				
				system ("cls");
				
				printf ("\n -_-_-_-_-Matriz A-_-_-_-_-"); //Título
				
				for (i=1; i<=3; i++)
				{
					printf ("\n\n <////////////////> \n"); //Enfeitin
					
					for (j=1; j<=3; j++)
					{
						printf ("\n O valor da linha %d da coluna %d na Matriz A eh: %d", i, j, A[i][j]);
						//Parte onde eu coloco para exibir as Matrizes A
						
					}
				}
				
				printf ("\n\n Deseja voltar ao Menu?"); //Perguntando se desejo voltar ao menu ou encerrar o programa.
														//Sendo consideravelmente um "Menu2".
				printf ("\n (Digite '1' para Sim)");
				printf ("\n (Digite '2' para Nao)");
				printf ("\n  ");
				scanf ("%d", &r);
				//Aqui onde vemos o "While" em ação, pois caso o usuário coloque qualquer valor diferente de "1", o programa irá finalizar
			}
			
			//-_-_-_-_-Código 2-_-_-_-_-//
			if (c == 02 || c == 2)
			{
				// Caso IF do Código ser igual a 2
				// Todos os "Ifs" dos códigos seguem o mesmo padrão
				
				system ("cls");
				
				printf ("\n -_-_-_-_-Matriz B-_-_-_-_-");
				
				for (i=1; i<=3; i++)
				{
					printf ("\n\n <////////////////> \n");
					
					for (j=1; j<=3; j++)
					{
						printf ("\n O valor da linha %d da coluna %d na Matriz B eh: %d", i, j, B[i][j]);
						
					}
				}
				
				printf ("\n\n Deseja voltar ao Menu?");
				printf ("\n (Digite '1' para Sim)");
				printf ("\n (Digite '2' para Nao)");
				printf ("\n  ");
				scanf ("%d", &r);
			}
			
			//-_-_-_-_-Código 3-_-_-_-_-//
			if (c == 03 || c == 3)
			{
				// Caso IF do Código ser igual a 3
				
				system ("cls");
				
				printf ("\n -_-_-_-_-Matriz C-_-_-_-_-");
				
				for (i=1; i<=3; i++)
				{
					printf ("\n\n <////////////////> \n");
					
					for (j=1; j<=3; j++)
					{
						C[i][j] = A[i][j] + B[i][j];
						/* Tive que colocar essa conta aqui também, por causa de que um erro que me assombra a muito tempo me atacou >:(
						O último valor tava vindo zerado, mas por algum motivo que eu não sei,
						foi só eu recolocar essa conta aqui e funcionou */
						
						printf ("\n O valor da linha %d da coluna %d na Matriz C eh: %.2f", i, j, C[i][j]/2);
					}
				}
				
				printf ("\n\n Deseja voltar ao Menu?");
				printf ("\n (Digite '1' para Sim)");
				printf ("\n (Digite '2' para Nao)");
				printf ("\n  ");
				scanf ("%d", &r);
			}
			
			//-_-_-_-_-Código 4-_-_-_-_-//
			if (c == 04 || c == 4)
			{
				// Caso IF do Código ser igual a 4
				
				system ("cls");
				
				//__________Matriz A__________//
				printf ("\n -_-_-_-_-Matriz A-_-_-_-_-");
				
				for (i=1; i<=3; i++)
				{
					printf ("\n\n <////////////////> \n");
					
					for (j=1; j<=3; j++)
					{
						printf ("\n O valor da linha %d da coluna %d na Matriz A eh: %d", i, j, A[i][j]);
						
					}
				}
				
				//__________Matriz B__________//
				printf ("\n\n\n -_-_-_-_-Matriz B-_-_-_-_-");
				
				for (i=1; i<=3; i++)
				{
					printf ("\n\n <----------------> \n");
					
					for (j=1; j<=3; j++)
					{
						printf ("\n O valor da linha %d da coluna %d na Matriz B eh: %d", i, j, B[i][j]);
						
					}
				}
				
				//__________Matriz C__________//
				printf ("\n\n\n -_-_-_-_-Matriz C-_-_-_-_-");
				
				for (i=1; i<=3; i++)
				{
					printf ("\n\n <================> \n");
					
					for (j=1; j<=3; j++)
					{
						C[i][j] = A[i][j] + B[i][j];
						
						printf ("\n O valor da linha %d da coluna %d na Matriz C eh: %.2f", i, j, C[i][j]/2);
					}
				}
				
				printf ("\n\n Deseja voltar ao Menu?");
				printf ("\n (Digite '1' para Sim)");
				printf ("\n (Digite '2' para Nao)");
				printf ("\n  ");
				scanf ("%d", &r);
			}
			
			//__________Encerrando o Programa__________//
			if (c == 00 || c == 0)
			{
				// Caso IF do Código ser igual a 0
				
				system ("color 04");
				printf ("\n Fim do Programa!");
				return 0; //Encerra o programa
			}
			
			//__________Caso Não(Menu2)__________//
			if (r<1 || r>=2)
			{
				//Fiz essa área para ter certeza de que o "While" funcionaria como planejo, sem ter algum tipo de erro indesejado
				//Todavia, eu poderia ter colocado esses dados fora do comando "While" e ainda daria certo
				
				system ("color 04");
				printf ("\n Fim do Programa!");
				return 0;
			}
		}
	}
		
	
	//__________Caso Não__________//
	if (strcmp(m,"Nao") == 0 || strcmp(m,"nao") == 0)
	{
		/* Aqui seria a situação do usuário ter escrito "nao" naquela pergunta;
		Como o Menu não iria se inicializar e o programa simplesmente acabaria, eu decidi colocar
		essa decoração para ele pelo menos acabar com estilo 
		
		PS: Sim, é a mesma de caso você finalize o programa dentro do Menu e dentro do Menu2*/
		
		system ("color 04");
		printf ("\n Fim do Programa!");
		return 0;
	}
}
