package Banco_Polimorfismo;

import java.util.Scanner;

public class Banco {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in); // Cria um objeto Scanner para ler entradas do usuário
        Cofrinho cofrinho = new Cofrinho(); // Cria uma instância da classe Cofrinho

        double taxaEuroParaReal = 5.43; // Taxa de conversão do Euro para Real
        double taxaDolarParaReal = 5.05; // Taxa de conversão do Dólar para Real

        while (true) { // Loop infinito para exibir o menu até que o usuário escolha sair
            System.out.println("\n----- Menu -----");
            System.out.println("1 - Adicionar Moeda");
            System.out.println("2 - Remover Moeda");
            System.out.println("3 - Listar Moedas");
            System.out.println("4 - Calcular Total Convertido para Real");
            System.out.println("0 - Sair");
            System.out.print("\nEscolha uma opção: ");

            int opcao = scanner.nextInt(); // Lê a opção do usuário e armazena na variável "opcao"
            scanner.nextLine(); // Limpa o buffer para permitir que o usuário digite a próxima entrada corretamente

            switch (opcao) { //Um leitor da variável "opcao" que realizará ações dependendo do valor
                case 1: //Caso seja 1 - Adicionar Moeda
                    System.out.print("\nDigite o tipo de moeda (Dolar, Euro, Real): ");
                    String tipo = scanner.nextLine().trim(); //Armazena a opção do usuário em "tipo"
                    double valor = 0; // Inicializa a variável valor com 0 para acumular o valor total
                    boolean valorValido = false; //Boolean para verificar se o valor inserido é válido

                    while (!valorValido) { // Enquanto o valor não for válido, continue pedindo a entrada
                        try {
                            System.out.print("Digite o valor da moeda: ");
                            String entrada = scanner.nextLine().replace(',', '.');
                            // Substitui a vírgula por ponto, permitindo que o usuário use ',' ou '.' para números decimais
                            valor = Double.parseDouble(entrada); // Converte a entrada de texto (String) para um valor numérico do tipo double
                            valorValido = true; // Define "valorValido" como verdadeiro para sair do loop
                        } catch (NumberFormatException e) { // Se ocorrer um erro ao converter a String para double (entrada inválida)
                            System.out.println("\nXXXX Valor inválido. Digite um valor numérico XXXX\n");
                        }
                    }

                    if (tipo.equalsIgnoreCase("Dolar")) { // Se o tipo da moeda for "Dolar" (comparação sem diferenciar maiúsculas/minúsculas)
                        cofrinho.adicionar(new Dolar(valor)); // Cria uma nova instância de Dolar com o valor inserido e adiciona ao cofrinho
                    }
                    else if (tipo.equalsIgnoreCase("Euro")) { // Se o tipo da moeda for "Euro"
                        cofrinho.adicionar(new Euro(valor)); // Cria uma nova instância de Euro com o valor inserido e adiciona ao cofrinho
                    } else if (tipo.equalsIgnoreCase("Real")) { // Se o tipo da moeda for "Real"
                        cofrinho.adicionar(new Real(valor)); // Cria uma nova instância de Real com o valor inserido e adiciona ao cofrinho
                    } else {
                        System.out.println("\nXXXX Tipo de moeda inválido! XXXX\n"); //Exibe um erro caso a moeda seja inválida
                    }
                    break; //Encerra o caso 1

                case 2: //Caso 2 - Remover Moeda
                    if (cofrinho.getMoedas().isEmpty()) { //Se o cofrinho estive vazio
                        System.out.println("\nNenhuma moeda no cofrinho."); //Informa ao usuário
                    } else { //Caso não
                        System.out.println("\n** Moedas no cofrinho **");
                        for (int i = 0; i < cofrinho.getMoedas().size(); i++) { //Para cada moeda dentro do cofrinho
                            Moeda moeda = cofrinho.getMoedas().get(i); //armazena o valor da moeda do cofrinho em uma variável
                            System.out.println((i + 1) + " - " + moeda.getNome() + " de valor " + moeda.getValor());
                            //Informa ao usuário as informações dessa moeda
                        }

                        int indice; //Cria a variável do indice
                        boolean indiceValido = false; //Boolean para verificar se o valor inserido é válido

                        while (!indiceValido) { //Enquanto o valor não for válido, continue pedindo a entrada
                            try {
                                System.out.print("\nDigite o índice da moeda que deseja remover (ou 0 para sair): ");
                                indice = scanner.nextInt(); // Armazena a opção na variável "indice"
                                scanner.nextLine(); //Limpa o buffer

                                if (indice == 0) { //Se o indice for 0
                                    System.out.println("\nVoltando ao menu...");
                                    break; //O usuário retornará ao menu
                                }

                                int indiceReal = indice - 1; // Ajusta o índice para começar do 0 (pois a lista começa no 0)
                                //Para que assim, os valores do cofrinho apareçam a partir do 1 (mesmo que esse não seja o seu valor real)
                                if (indiceReal < 0 || indiceReal >= cofrinho.getMoedas().size()) {
                                    // Verifica se o índice está fora dos limites da lista
                                    System.out.println("\nÍndice inválido! Tente novamente.");
                                } else {
                                    cofrinho.removerMoeda(indiceReal); //Do contrário, remove a moeda solicitada
                                    indiceValido = true; // Define "indiceValido" como verdadeiro para sair do loop
                                }
                            } catch (Exception e) { // Captura exceções em caso de erro na entrada
                                System.out.println("\nXXXX Entrada inválida. Digite um número inteiro correspondente ao índice ou 0 para sair! XXXX\n");
                                //Informa ao usuário que está errado e solicita para que ele reescreva a resposta
                                scanner.nextLine(); //Limpa o buffer
                            }
                        }
                    }
                    break; //Encerra o caso 2

                case 3: //Caso 3 - Lista todas as moedas presentes no cofrinho
                    cofrinho.listagemMoedas(); //Executa o void da "Listagem de moedas" presente no cofrinho
                    break;//Encerra o caso 3

                case 4: //Caso 4 - Calcula o total das moedas convertidos para real
                    double total = cofrinho.totalConvertido(taxaEuroParaReal, taxaDolarParaReal);
                    //Armazena o resultado do void "totalConvertido" presente no cofrinho em uma variável
                    System.out.printf("\nTotal no cofrinho (convertido para Real): R$%.2f", total);
                    // Exibe o total no cofrinho, formatando o valor para exibição como moeda com duas casas decimais (%.2f).
                    break; //Encerra o caso 4

                case 0: //Caso for 0 - Sair
                    System.out.println("\nXXXX Encerrando o programa... XXXX");
                    scanner.close(); //Encerra o scanner
                    return; //Finaliza o programa

                default: //Opção padrão - Caso seja nenhum das opções já mencionadas
                    System.out.println("\n XXXX Opção inválida. Tente novamente! XXXX\n");
                    break; //Retorna ao menu e solicita novamente a entrada do usuário
            }

            System.out.println("\nPressione Enter para continuar...");
            // Solicita ao usuário que pressione Enter para prosseguir, permitindo que ele leia as informações exibidas antes de avançar.
            scanner.nextLine();
            // Aguarda o pressionamento da tecla Enter para continuar a execução do programa, garantindo que o usuário tenha tempo de visualizar a mensagem.
        }
    }
} //Fim do programa!

