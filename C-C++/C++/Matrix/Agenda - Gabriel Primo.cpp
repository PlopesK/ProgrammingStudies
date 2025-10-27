// Agenda
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main ()
{
  	char Dado[10][5][20];
  	char x[20];
  	int i, j;
  	int Atual, Prox;
  
	// Rotina de Entrada
	for (i=1; i<=10; i++)
	{
		printf ("\n _Insira os dados do Usuario %d_ \n", i);
		//Nome
		printf ("\n Nome: ");
		scanf ("%s", &Dado[i][1]);
		
		//Endereço
		printf ("\n Endereco: ");
		scanf ("%s", &Dado[i][2]);
		
		//CEP
		printf ("\n CEP: ");
		scanf ("%s", &Dado[i][3]);
		
		//Bairro
		printf ("\n Bairro:");
		scanf ("%s", &Dado[i][4]);
		
		//Telefone
		printf ("\n Telefone: ");
		scanf ("%s", &Dado[i][5]);
		
		printf ("\n");
	}

	//Rotina de ordenação e troca de todos os elementos
	for (Atual=1; Atual<=9; Atual++)
	{
		for (Prox=Atual+1; Prox<=9; Prox++)
		{
			if (Dado[Atual] > Dado[Prox])
			{
				//Troca Nome
				strcpy(x, Dado[Atual][1]);
                strcpy(Dado[Atual][1], Dado[Prox][1]);
                strcpy(Dado[Prox][1], x);
                
                //Troca Endereço
                strcpy(x, Dado[Atual][2]);
                strcpy(Dado[Atual][2], Dado[Prox][2]);
                strcpy(Dado[Prox][2], x);

				//Troca CEP
                strcpy(x, Dado[Atual][3]);
                strcpy(Dado[Atual][3], Dado[Prox][3]);
                strcpy(Dado[Prox][3], x);

				//Troca Bairro
                strcpy(x, Dado[Atual][4]);
                strcpy(Dado[Atual][4], Dado[Prox][4]);
                strcpy(Dado[Prox][4], x);

				//Troca Telefone
                strcpy(x, Dado[Atual][5]);
                strcpy(Dado[Atual][5], Dado[Prox][5]);
                strcpy(Dado[Prox][5], x);
			}
		}
	}
	
	//Rotina de saída
	printf ("\n////////////Agenda//////////////////\n");
	for (i=1; i<=10; i++)
	{
		printf ("\n--------------- Usuario %d ---------------\n", i);
			
		printf ("\n Nome: %s", Dado[i][1]);
				
	    printf ("\n Endereco: %s", Dado[i][2]);
	        	
	    printf ("\n CEP: %s", Dado[i][3]);
	        	
	    printf ("\n Bairro: %s", Dado[i][4]);
	        	
	    printf ("\n Telefone: %s", Dado[i][5]);
	        
	    printf ("\n");
	}
}

