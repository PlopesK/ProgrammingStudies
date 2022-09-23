//Estacoes
#include <stdio.h>
#include <conio.h>
int data (int mes);
int main(){

int mes;
printf("\n Insira o Numero do Mes que voce deseja visualizar: ");
scanf("%d", &mes);

switch( mes ) {
case 1:
printf("\n Mes: Janeiro, Estacao: Verao"); break;
case 2:
printf("Mes: Fevereiro, Estacao: Verao"); break;
case 3:
printf("\n Mes: Marco, Estacao: Verao"); break;
case 4:
printf("\n Mes: Abril, Estacao: Outono"); break;
case 5:
printf("\n Mes: Maio, Estacao: Outono"); break;
case 6:
printf("\n Mes: Junnho, Estacao: Outono"); break;
case 7:
printf("\n Mes: Julho, Estacao: Inverno"); break;
case 8:
printf("\n Mes: Agosto, Estacao: Inverno"); break;
case 9:
printf("\n Mes: Setembro, Estacao: Inverno"); break;
case 10:
printf("\n Mes: Outubro, Estacao: Primavera"); break;
case 11:
printf("\n Mes: Novembro, Estacao: Primavera"); break;
case 12:
printf("\n Mes: Dezembro, Estacao: Primavera"); break;
default: printf("\n Mes Inexistente.");
}
getch();

return 0;
}
