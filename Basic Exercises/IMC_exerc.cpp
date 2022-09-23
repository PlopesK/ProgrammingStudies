//A diretiva #include causa a inclusão de arquivos de cabeçalho contendo
//declarações necessárias à compilação. Os arquivos stdio.h, conio.h e
//math.h declaram, respectivamente, comandos de E/S padrão, E/S console
//e funções matemáticas. A diretiva #define declara constantes simbólicas.

#include <stdio.h>
#include <conio.h>
#include <math.h>

//#define limite 30
int main(int argc, char** argv) { 

    float peso, altura, imc;
    //clrscr;
    printf("\n Qual seu peso e altura? ");
    scanf("%f %f", &peso, &altura);
    imc = peso/pow(altura,2);
    
    printf("\n Seu IMC é  %1f", imc);
    if (imc <= 30) {
        printf("\n Você está acima do peso! ");
    }
    else    
    {
         printf("\n Você está com o peso correto! ");
     }
     getch();
     
     return 0;
}
