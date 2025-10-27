//Exercício(3) 03/07
#include <stdio.h>
#include <stdlib.h>

int main(){
	
	int vetor_a[10], vetor_b[10], vetor_c[10];
	int i;
	
	for (i=1; i<=10; i++){
		printf ("\n Entre com o Valor %i do Vetor A:   ", i);
		scanf ("%d", &vetor_a[i]);
		
	}

	printf("/////////////////////////////////////////////////////////////////////////");
	printf("\n");
	
	for (i=1; i<=10; i++){
		printf("\n Insira o Valor %i do Vetor B: ", i);
		scanf("%d", &vetor_b[i]);
		
	}
	
	printf("////////////////////////////////////////////////////////////////////////");
	printf("\n");
	
	for (i=1; i<=10; i++){
		vetor_c[i]= vetor_a[i]+vetor_b[i];
		printf("\n O Terceiro Vetor tera como Valor: %d", vetor_c[i]);
	}
	
	return 0;
}
