alert("Bem-vindo ao jogo do número secreto!");
let numeroSecreto = 4;
let escolha = prompt("Escolha um número entre 1 e 40:");

if (escolha == numeroSecreto) {
    alert("Parabéns, você acertou!");
} 
else {
    alert("Tente novamente :(!");
}