//Calculadora

#include <stdio.h>
int main(int argc, char** argv) {

float x, y;
char op;
printf("\n Expressao? ");
scanf("%f %c %f", &x, &op, &y);
switch( op ) {
case '+': printf("\n valor = %.2f", x+y); break; // break para a execução
case '-': printf("\n valor = %.2f", x-y); break;
case '*': printf("\n valor = %.2f", x*y); break;
case '/': printf("\n valor = %.2f", x/y); break;
default : printf("\n Operador Invalido: %c",op);
}

return 0;
}
