import java.util.Scanner;

public class RegrasEKS {
    public static void main(String[] args) {
        // Definindo as regras básicas
        double podsPorNode = 10;
        double podsPorServidor = 4;

        // Criando um objeto Scanner para receber as entradas do usuário
        Scanner scanner = new Scanner(System.in);

        // Recebendo as informações do usuário
        int numeroTotalPods = scanner.nextInt();

        int numeroMinimoNodes = (int) Math.ceil(numeroTotalPods/podsPorNode);

        int numeroMinimoServidores = (int) Math.ceil(numeroTotalPods/podsPorServidor);

        if (numeroMinimoNodes <= 1) {
            System.out.println("1.Recomendamos usar um unico node");
        } else {
            System.out.println("1.Numero minimo de nodes:" + numeroMinimoNodes);
        }

        System.out.println("2.Numero minimo de servidores:" + numeroMinimoServidores);

        scanner.close();
    }
}