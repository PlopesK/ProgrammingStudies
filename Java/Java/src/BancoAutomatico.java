import java.util.ArrayList;

public class BancoAutomatico {
        public static void main(String[] args) {
            abstract class Moeda {
                protected double valor;

                public Moeda(double valor) {
                    this.valor = valor;
                }

                public double getValor() {
                    return valor;
                }

                public abstract String getNome();
            }

            class Dolar extends Moeda {
                public Dolar(double valor) {
                    super(valor);
                }

                @Override
                public String getNome() {
                    return "Dolar";
                }
            }

            class Euro extends Moeda {
                public Euro(double valor) {
                    super(valor);
                }

                @Override
                public String getNome() {
                    return "Euro";
                }

                public double converterParaReal(double taxaDeCambio) {
                    return this.valor * taxaDeCambio;
                }
            }

            class Real extends Moeda {
                public Real(double valor) {
                    super(valor);
                }

                @Override
                public String getNome() {
                    return "Real";
                }
            }

// Classe Cofrinho
            class Cofrinho {
                private final ArrayList<Moeda> moedas;

                public Cofrinho() {
                    this.moedas = new ArrayList<>();
                }

                public void adicionar(Moeda moeda) {
                    moedas.add(moeda);
                }

                public void remover(String nomeMoeda) {
                    System.out.println("\n-- Removendo uma moeda: --");
                    for (Moeda moeda : moedas) {
                        if (moeda.getNome().equalsIgnoreCase(nomeMoeda)) {
                            moedas.remove(moeda);
                            System.out.println("Moeda " + nomeMoeda + " removida com sucesso!");
                            return;
                        }
                    }
                    System.out.println("Moeda " + nomeMoeda + " nao encontrada no cofrinho.");
                }

                public void listagemMoedas() {
                    System.out.println("\n** Moedas no cofrinho: **");
                    for (Moeda moeda : moedas) {
                        System.out.println(moeda.getNome() + ": " + moeda.getValor());
                    }
                    System.out.println("******");
                }

                    public double totalConvertido(double taxaDeCambioEuroParaReal, double taxaDeCambioDolarParaReal) {
                        double total = 0;
                        for (Moeda moeda : moedas) {
                            if (moeda instanceof Euro) {
                                total += ((Euro) moeda).getValor() * taxaDeCambioEuroParaReal;
                            } else if (moeda instanceof Dolar) {
                                total += ((Dolar) moeda).getValor() * taxaDeCambioDolarParaReal;
                            } else {
                                total += moeda.getValor();
                            }
                        }
                        return total;
                    }
            }

                Cofrinho cofrinho = new Cofrinho();

                cofrinho.adicionar(new Dolar(5.5));
                cofrinho.adicionar(new Euro(9));
                cofrinho.adicionar(new Real(12.2));

                double taxaDeCambioEuroParaReal = 5.43;
                double taxaDeCambioDolarParaReal = 5.05;

                cofrinho.listagemMoedas();

                cofrinho.remover("Dolar");

                cofrinho.listagemMoedas();
                cofrinho.remover("Dolar");

                System.out.println("\nTotal no cofrinho (convertido para Real): R$" + String.format("%.2f", cofrinho.totalConvertido(taxaDeCambioEuroParaReal, taxaDeCambioDolarParaReal)));


        }
    }
