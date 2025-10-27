#include <stdio.h>
int main(int argc, char** argv){
	
int Num, Unidades, Dezenas, Invertido;
printf("\n Digite um numero inteiro com dois algoristimos: ");
scanf("%d", &Num);
Unidades = Num % 10;
Dezenas = Num/10;
Invertido = Unidades * 10 + Dezenas;
printf("O invertido de %d eh %d ", Num, Invertido);

return 0;
}
