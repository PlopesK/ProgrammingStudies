//Algoritmo 3
#include <stdio.h>
#include <Windows.h>
#include <iostream>
#include <conio.h>
#include <string.h>
#include <math.h>

/* Um banco concederá um crédito especial aos seus clientes, variável com o saldo médio no último ano. 
Faça um algoritmo que leia o saldo médio de um cliente e calcule o valor do crédito de acordo com a tabela abaixo. 
Mostre uma mensagem informando o saldo médio e o valor do crédito. 

Saldo médio	Percentual
de 0 a 200	nenhum crédito
de 201 a 400	20% do valor do saldo médio
de 401 a 600	30% do valor do saldo médio
acima de 601	40% do valor do saldo médio
*/
int main()
{
	//Dados
	float saldo, credito;
	
	//Solicitação
	system ("color 03");
	
	printf (" Digite seu Saldo Medio: ");
	scanf ("%f", &saldo);
	printf ("\n");
    
    system ("pause");
	system ("cls");
	
	//Saldo de 0 a 200
	if (saldo>=0 && saldo<=200)
	{
		system ("color 09");
		printf ("\n Seu Saldo Medio era de R$%.2f, logo voce nao possui nenhum credito.\n", saldo);
		printf ("\n");
    
    	system ("pause");
		system ("cls");
	}
	
	//Saldo de 201 a 400
	if (saldo>=201 && saldo<=400)
	{
		system ("color 09");
		credito = saldo*20/100;
		printf ("\n Seu Saldo Medio era de R$%.2f.\n", saldo);
		printf (" Voce recebeu R$%.2f de credito, ficando com R$%.2f no total.\n", credito, saldo+credito);
		printf ("\n");
    
    	system ("pause");
		system ("cls");
	} 
	
	//Saldo de 401 ate 600
	if (saldo>=401 && saldo<=600)
	{
		system ("color 09");
		credito = saldo*30/100;
		printf ("\n Seu Saldo Medio era de R$%.2f.\n", saldo);
		printf (" Voce recebeu R$%.2f de credito, ficando com R$%.2f no total.\n", credito, saldo+credito);
		printf ("\n");
    
    	system ("pause");
		system ("cls");	
	}
	
	//Saldo acima de 601
	if (saldo>=601)
	{
		system ("color 09");
		credito = saldo*40/100;
		printf ("\n Seu Saldo Medio era de R$%.2f.\n", saldo);
		printf (" Voce recebeu R$%.2f de credito, ficando com R$%.2f no total.\n", credito, saldo+credito);
		printf ("\n");
    
    	system ("pause");
		system ("cls");	
	} 
	
	system ("color 09");
	printf ("__________________________");
	printf ("\nFim do Programa!\n");
	printf ("__________________________");
	
}
