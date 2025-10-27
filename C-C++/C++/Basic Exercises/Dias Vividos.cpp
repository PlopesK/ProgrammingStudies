//Exercício 1
#include <stdio.h>
#include <stdlib.h>

int main(){
	
	int dn, dm, mn, mm, an, am;
	int dt, mt, at, total;
	
	//Dados
	printf ("\n Este programa nao atribui anos bissextos e Todos os meses possuem 30 dias.");
	printf ("\n");
	
	printf ("\n Insira o Ano em que a pessoa Nasceu: ");
	scanf ("%d", &an);
	printf ("Insia o Ano em que esta pessoa Morreu: ");
	scanf ("%d", &am);
	printf ("\n");
	
	printf ("Digite o Mes em que a pessoa Nasceu: ");
	scanf ("%d", &mn);
	printf ("Digite o Mes em que ela Morreu: ");
	scanf ("%d", &mm);
	printf ("\n");
	
	printf ("Coloque o Dia em que esta pessoa Nasceu: ");
	scanf ("%d", &dn);
	printf ("Coloque o Dia em que ela Morreu: ");
	scanf ("%d", &dm);
	printf ("\n");	
	
	//Contas
	at = (am-an);
	mt = ((mm-mn)*30);
	dt = (dm-dn);
	total = ((at*360)+mt+dt);
	
	//Total
	printf ("O Total de Dias vividos eh: %d", total);
}
