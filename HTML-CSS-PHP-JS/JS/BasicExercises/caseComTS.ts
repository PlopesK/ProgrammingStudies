type Hero = {
  nome: string;
  vulgo: string;
  telefone: string;
};

function ligarPara(heroi: Hero): string {
  return "Ligando para: " + heroi.vulgo + "( " + heroi.telefone + " )";
}

ligarPara({
  nome: "Steve Rogers",
  vulgo: "Capitão América",
  telefone: "11 23233212",
});
