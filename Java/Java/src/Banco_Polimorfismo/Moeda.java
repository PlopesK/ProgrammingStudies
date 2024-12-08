package Banco_Polimorfismo;

public abstract class Moeda { //Classe dá moeda que pré-define os valores que serão utilizados
    protected double valor;

    public Moeda(double valor) {
        this.valor = valor; //Inicializa o valor da moeda
    }

    public double getValor() {
        return valor; //Retorna o valor quando solicitado
    }

    public abstract String getNome(); //String do nome da moeda
}

class Dolar extends Moeda { //A classe será uma extensão da classe Moeda (mãe)
    public Dolar(double valor) {
        super(valor); // Chama o construtor da classe Moeda para inicializar o valor da moeda
    }

    @Override
    public String getNome() {
        return (this.valor > 1) ? "Dólares" : "Dólar"; //Caso o valor seja maior que 1, será escrito "Dólares" na solicitação do nome.
        //Se for igual a 1, o nome aparecerá como "Dólar"
    }
}

class Euro extends Moeda { //A classe será uma extensão da classe Moeda (mãe)
    public Euro(double valor) {
        super(valor); // Chama o construtor da classe Moeda para inicializar o valor da moeda
    }

    @Override
    public String getNome() {
        return (this.valor > 1) ? "Euros" : "Euro";
        //Mais que 1, irá utilizar "Euros", do contrário será "Euro"
    }
}

class Real extends Moeda { //A classe será uma extensão da classe Moeda (mãe)
    public Real(double valor) {
        super(valor); // Chama o construtor da classe Moeda para inicializar o valor da moeda
    }

    @Override
    public String getNome() {
        return (this.valor > 1) ? "Reais" : "Real";
        //Mais que 1, irá utilizar "Reais", do contrário será "Real"
    }
}
