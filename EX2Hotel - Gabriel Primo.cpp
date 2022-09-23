//Exercício(2) 03/07
#include <stdio.h>
#include <stdlib.h>

int main()
{
	
	int i, nh, ndist;
	char nome[20][50];
	int acesso[10], visi[10];
	float dist[10];
	
	ndist= 0;
	printf("\n Digite o numero de hoteis que serao analizados: ");
	scanf("%d", &nh);
	
	for(i=1; i<=nh; i++)
	{
	printf("\n Digite o Nome do Hotel: ");
	scanf("%s", &nome[i][0]);
	
	printf("\n Digite o acesso desse hotel (Asfaltado[1] ou Nao Asfaltado[0]): ");
	scanf("%d", &acesso[i]);
	if ((acesso[i]== 1) || (acesso[i]== 0))
	{
		printf("\n Digite o numero de pessoas que visitaram esse hotel: ");
		scanf("%d", &visi[i]);
		
		printf("\n Digite a distancia desse hotel do Centro: ");
		scanf("%f", &dist[i]);
		
		if (dist[i]>15)
		{
			ndist= ndist+1;
		}
		printf("\n//////////////////////////////////////////////////////////////");
		printf("\n");
	}		
	else printf("\n Acesso Invalido.");
	}
	
	for (i=1; i<=nh; i++)
	{
		if (acesso[i]==0)
		{
			printf("\n O hotel %s nao possui acesso asfaltado e tem %d visitantes.", nome[i], visi[i]);
		}
		if ((acesso[i]==1) && (visi[i]<1000))
		{
			printf("\n O hotel %s possui acesso asfaltado, %d visitantes e %.f de distancia do Centro.", nome[i], visi[i], dist[i]);
		}
	}
	
	if (ndist== 1)
	{
		printf("\n %d hotel esta a mais de 15 Km de distancia do Centro.", ndist);
	}
	else printf("\n %d hoteis estao a mais de 15 Km de distancia do Centro.", ndist);
}
