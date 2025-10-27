#include <stdio.h>

int main(int argc, char** argv) {

float Num, Frac;
int Inteiro;
printf("Digite um numero ");
scanf("%f", &Num);
Inteiro = Num;
Frac = Num - Inteiro;
printf("A parte fracionaria de %f e' %f ", Num, Frac);

return 0;
}
