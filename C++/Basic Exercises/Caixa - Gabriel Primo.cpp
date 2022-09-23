//Caixa
#include <stdio.h>
#include <conio.h>
int main(int argc, char** argv) {

float vc, vp, vt;
printf("\n Digite o Valor da Compra: ");
scanf("%f", &vc);
printf("\n Digite o Valor do Pagamento: ");
scanf("%f", &vp);

if(vp<vc)
printf("\n O Pagamento esta abaixo do preco do Produto");
else if(vp>vc)
printf("\n O Troco devera ser de R$ %.2f", vp-vc);
else printf("\n Nao sera necessario troco.");
getch();

return 0;
}
