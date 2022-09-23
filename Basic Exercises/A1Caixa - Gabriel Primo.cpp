//Caixa
#include <stdio.h>
#include <conio.h>
#include <math.h>
int main(int argc, char** argv) {

float vc, vp, vt, vn, a, b, c;
printf("\n Digite o Valor da Compra: ");
scanf("%f", &vc);
printf("\n Digite o Valor do Pagamento: ");
scanf("%f", &vp);

if(vp<vc)
printf("\n O Pagamento esta abaixo do preco do Produto");
else if(vp>vc)
printf("\n O Troco devera ser de R$ %.2f", vp-vc);
else printf("\n Nao sera necessario troco.");

vt = vp - vc;
a = floor(vt / 100);
b = floor((vt - (a*100))/10);
c = vt - ((a*100)+(b*10));

printf("\n Voce devera devolver %.f notas de 100 reais, %.f de Dez Reais e %.f de Um Real.", a, b, c);
return 0;
}
