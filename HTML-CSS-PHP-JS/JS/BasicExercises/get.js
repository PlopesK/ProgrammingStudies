let contaBancaria = {
  cliente: gets(),
  numeroConta: gets(),
  saldoInicial: parseFloat(gets()),
};

print(`Nome do cliente: ` + contaBancaria.cliente);
print(`Número da conta: ` + contaBancaria.numeroConta);
print(`Saldo: R$ ` + contaBancaria.saldoInicial.toFixed(2));

/* ------ Compraing ------ */
const cliente1 = {
  nome: gets(),
  conta: gets(),
  saldo: parseFloat(gets()),
};

const cliente2 = {
  nome: gets(),
  conta: gets(),
  saldo: parseFloat(gets()),
};

if (
  cliente1.nome === cliente2.nome &&
  cliente1.conta === cliente2.conta &&
  cliente1.saldo === cliente2.saldo
) {
  print("As contas bancárias são iguais.");
} else {
  print("As contas bancárias são diferentes.");
}

/* ------ Bank Challenge ------ */
const bankAccount = {
  nomeCliente: "João",
  saldo: 1000.0,
};

function realizarOperacao() {
  const opcao = parseInt(gets());

  switch (opcao) {
    case 1:
      const valorDeposito = parseFloat(gets());
      contaBancaria.saldo += valorDeposito;
      print("Operação de depósito concluída.");
      print(`Saldo atual: R$ ${contaBancaria.saldo.toFixed(2)}`);
      break;

    case 2:
      const valorSaque = parseFloat(gets());
      if (valorSaque <= contaBancaria.saldo) {
        contaBancaria.saldo -= valorSaque;

        print("Operação de saque concluída.");
        print(`Saldo atual: R$ ` + contaBancaria.saldo.toFixed(2));
      } else {
        print("Saldo insuficiente. Operação de saque cancelada.");
        print(`Saldo atual: R$ ` + contaBancaria.saldo.toFixed(2));
      }
      break;

    case 3:
      print(`Saldo atual: R$ ` + contaBancaria.saldo.toFixed(2));
      break;

    case 4:
      print("Encerrando o programa.");
      return;

    default:
      print("Opção inválida.");
  }
}
realizarOperacao();

/* ------ Montante ------ */
const banco = {
  investimentoInicial: parseFloat(gets()),
  taxaJurosMensal: parseFloat(gets()),
  periodoMeses: parseInt(gets()),
};

let taxaJurosDecimal = banco.taxaJurosMensal / 100;
let montante =
  banco.investimentoInicial *
  Math.pow(1 + taxaJurosDecimal, banco.periodoMeses);

print("Investimento: " + banco.investimentoInicial.toFixed(2));
print("Juros: " + banco.taxaJurosMensal);
print("Período: " + banco.periodoMeses);
print("Resultado: " + montante.toFixed(2));
