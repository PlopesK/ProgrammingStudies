// “Numa empresa paga-se R$ 19,50 a hora e 
//recolhe-se para o imposto de renda 10% dos
//salários acima de R$ 1500,00. Dado o número de horas trabalhadas por um
//funcionário, informar o valor do seu salário líquido”.

#include <stdio.h>
#include <conio.h>
int main(int argc, char** argv) {
	
int h;
float s;
//clrscr();
printf("\nHoras trabalhadas? ");
scanf("%d", &h);
s = h*19.50;
if( s>1500.00 )
s = 0.90*s;
printf("\nSalário líquido: R$ %.2f", s);
getch();

return 0;
}
// o else pode ser omitido sem problema
