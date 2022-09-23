//“Dados três números verificar se eles podem representar as
//medidas dos lados de um triângulo e, se puderem, classificar o triângulo em
//equilátero, isósceles ou escaleno”.

#include <stdio.h>
#include <conio.h>

int main(int argc, char** argv) {
	
float a, b, c;
//clrscr();
printf("\nInforme três números: ");
scanf("%f %f %f", &a, &b, &c);
if( a<b+c && b<a+c && c<a+b ) {
printf("\nÉ um triângulo: ");
if( a==b && b==c ) printf("equilátero");
else if( a==b || a==c || b==c ) printf("isósceles");
else printf("escaleno");
}
else printf("\nNão é um triângulo");
getch();

return 0;
}
