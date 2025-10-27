const enemyHealth = 150;
const playerAtk = 75;

function gerarBarra(vidaAtual, vidaMaxima, tamanho = 20) {
	const porcentagem = vidaAtual / vidaMaxima;
	const cheios = Math.round(tamanho * porcentagem);
	const vazios = tamanho - cheios;
	return "[" + "#".repeat(cheios) + "-".repeat(vazios) + "] " + Math.round(porcentagem * 100) + "%";
}

console.log("➡️ Vida cheia:");
console.log(gerarBarra(enemyHealth, enemyHealth));

const newHP = enemyHealth - playerAtk;

console.log("\n💥 Atacando com " + playerAtk + " de dano...\n");

console.log("❤️ Vida depois do ataque:");
console.log(gerarBarra(newHP, enemyHealth));