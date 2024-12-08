package Banco_Polimorfismo;

import java.util.ArrayList;

public class Cofrinho {
    private final ArrayList<Moeda> moedas; //Define uma array (lista) para armazenar as moedas

    public Cofrinho() {
        this.moedas = new ArrayList<>(); // Inicializa a lista de moedas
    }

    public void adicionar(Moeda moeda) { //Void para adicionar moedas ao cofrinho
        moedas.add(moeda); //Adiciona o valor "moeda" para a lista "moedas"
        System.out.println(moeda.getValor() + " " + moeda.getNome() + " adicionado ao cofrinho.");
        //Informa ao usuário o Valor e o Nome da moeda que foi adicionada ao array
    }

    public void removerMoeda(int index) { //Void para remover moedas ao cofrinho
        if (index < 0 || index >= moedas.size()) {
            //Caso o valor inserido pelo usuário seja menor ou maior do que a quantidade real da lista, o programa exibirá um erro
            System.out.println("Índice inválido! Tente novamente.");
        } else { //No contrário
            Moeda moedaRemovida = moedas.get(index); //Obtém a moeda no índice especificado e a armazena na variável moedaRemovida
            System.out.println("Removendo moeda: " + moedaRemovida.getNome() + " de valor " + moedaRemovida.getValor());
            //Exibe ao usuário as informações da moeda
            moedas.remove(index); //Remove a moeda da lista de moedas
        }
    }

    public void listagemMoedas() { //Void para listar as moedas presentes no cofrinho
        if (moedas.isEmpty()) { //Se o array (lista) estiver vazia
            System.out.println("Nenhuma moeda no cofrinho."); //Informa ao usuário que não tem nenhuma moeda no cofrinho
        } else {
            System.out.println("\n** Moedas no cofrinho: **");
            for (int i = 0; i < moedas.size(); i++) { //Para cada moeda presente no array "moedas"
                Moeda moeda = moedas.get(i); // Obtém a moeda e a armazena na variável
                System.out.println(i + " - " + moeda.getNome() + ": " + moeda.getValor());
                //Informa ao usuário o nome e o valor das moedas presentes
            }
            System.out.println("******");
        }
    }

    public double totalConvertido(double taxaEuroParaReal, double taxaDolarParaReal) { //Void para calcular o total em reais do cofrinho
        double total = 0; // Inicializa a variável total com 0 para acumular o valor total
        for (Moeda moeda : moedas) { //Para cada moeda dentro do array "moedas"
            if (moeda instanceof Euro) { //Se a moeda for "Euro"
                total += moeda.getValor() * taxaEuroParaReal; //Adiciona ao total o valor da moeda inserido multiplicado pela taxa
            } else if (moeda instanceof Dolar) { //Se a moeda for "Dolar"
                total += moeda.getValor() * taxaDolarParaReal;
            } else { //Se a moeda for "Real" (No caso, ela não será nenhuma das opções anteriores)
                total += moeda.getValor(); // Apenas adiciona o valor da moeda, pois já está em reais
            }
        }
        return total;  // Retorna o valor total calculado
    }

    public ArrayList<Moeda> getMoedas() {
        return moedas; // Retorna a lista de moedas armazenadas no cofrinho
    }
}
