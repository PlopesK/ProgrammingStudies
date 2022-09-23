#include <stdio.h>

int main ()
{
	char hotel[10][100];
	int acesso [10], visitantes[10];
	int i, c, num_distancia;
	float distancia [10]; 

	
	printf ("\n Entre com o numero de hoteis: ");
	scanf ("%d",&i);
	num_distancia=0;
	
	for (c=1; c<=i; c++)
	{
		printf ("\n Entre com o nome do hotel:  ");
		scanf ("%s",&(hotel[c][0]));
		printf ("\n Entre com o numero de acesso: ");
		scanf ("%d",&acesso[c]);
		printf ("\n Entre com o numero medio de visitantes no ultimo feriado: ");
		scanf ("%d",&visitantes[c]);
		printf ("\n Entre com a distancia do centro da cidade: ");
		scanf ("%f",&distancia[c]);
		if (distancia[c]>15)
		{
			num_distancia=num_distancia+1;
		}
				
	}
	for (c=1; c<=i; c++)
	{
		if (acesso[c]==0)
		{
			printf ("\n O hotel %s nao tem acesso asfaltado e tem %d visitantes", hotel[c], visitantes[c]);
		}
		if ((acesso[c]==1) && (visitantes[c]<1000))
		{
			printf ("\n O hotel %s tem acesso asfaltado, %d visitantes e %f km de distancia do centro", hotel[c], visitantes[c], distancia[c]);
		}
	}		
	printf ("\n %d hoteis tem mais de 15 km de distancia do centro", num_distancia);
}

