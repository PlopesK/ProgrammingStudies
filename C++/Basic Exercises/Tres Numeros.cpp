#include <stdio.h>
int main(int argc, char** argv){
	
float a, b, c, Media;
printf("Digite três  números");
scanf("%f %f %f", &a, &b, &c);
Media = (a + b + c)/3;
printf("A media dos números %f , %f e %f é igual a %f ", a, b, c, Media);

return 0;
}
