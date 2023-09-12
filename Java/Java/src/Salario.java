import java.util.Scanner;

public class Salario {
    public static void main(String[] args) {
        Scanner leitorDeEntrada = new Scanner(System.in);

        System.out.println("Digite seu salário: ");
        float valorSalario = leitorDeEntrada.nextFloat();

        System.out.println("Digite seus Benefícios: ");
        float valorBeneficio = leitorDeEntrada.nextFloat();
        float valorImposto = 0;

        if(valorSalario >= 0 && valorSalario <= 1100){
            valorImposto = 0.05f * valorSalario;
        }
        else if(valorSalario >= 1100.01 && valorSalario <= 2500){
            valorImposto = 0.10f * valorSalario;
        }
        else if(valorSalario >= 2500.01){
            valorImposto = 0.15f * valorSalario;
        } else {
            System.out.println("Valor inválido!");
        }

        float saida = valorSalario - valorImposto + valorBeneficio;
        System.out.println(String.format("%.2f", saida));
    }
}
