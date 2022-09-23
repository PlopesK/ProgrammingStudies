#include<stdio.h>
#include<conio.h>// biblioteca com as cores

int main(int argc, char** argv) {
	
float a, b, m;
//clrscr();
printf("\n Informe as duas notas obtidas: ");
scanf("%f %f", &a, &b);
m = (a+b)/2;
if( m >= 7.0 ) {
printf("\n Aprovado");// exibe o texto na cor selecionada
}
else {
printf("\n Reprovado");
}
getch();

return 0;
}
