//Salário Empresa
#include <stdio.h>
#include <string.h>
#include <conio.h>
#include <math.h>
int main(){
	
char ca[2], nome[40];
float sa, sar;
printf("\n Insira o nome do funcionario: ");
scanf("%s", &nome);
printf("\n Digite a Categoria em que este funcionario esta associado: ");
scanf("%s", &ca);
printf("\n Digite o salario atual deste funcionario: ");
scanf("%f", &sa);

if(strcmp(ca, "A") != 1 || strcmp(ca, "C") != 1 || strcmp(ca, "F") != 1 || strcmp(ca, "H") != 1) 
sar = sa * 1.10;
else if(strcmp(ca, "B") != 1 || strcmp(ca, "D") != 1 || strcmp(ca, "E") != 1 || strcmp(ca, "I") != 1 || strcmp(ca, "J") != 1 || strcmp(ca, "T") != 1) 
sar = sa * 1.15;
else if(strcmp(ca, "L") != 1 || strcmp(ca, "M") != 1 || strcmp(ca, "N") != 1 || strcmp(ca, "O") != 1 || strcmp(ca, "P") != 1 || strcmp(ca, "Q") != 1 || strcmp(ca, "S") != 1) 
sar = sa * 1.35;
else if(strcmp(ca, "K") != 1 || strcmp(ca, "R") != 1)
sar = sa * 1.25;
else if(strcmp(ca, "U") != 1 || strcmp(ca, "V") != 1 || strcmp(ca, "W") != 1 || strcmp(ca, "X") != 1 || strcmp(ca, "Z") != 1 || strcmp(ca, "Y") != 1) 
sar = sa * 1.50;
else sar = 0;

if(sar != 0) printf("\n O funcionario %s pertencente a categoria %s tinha como antigo salario R$ %.2f e foi reajustado para R$ %.2f", nome, ca, sa,sar);
else ("\n Categoria Inexistente.");


return 0;
}
