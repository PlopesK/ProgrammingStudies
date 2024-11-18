/*
    1-Mostre um alerta com a mensagem "Boas vindas ao nosso site!".

    2-Declare uma variável chamada nome e atribua a ela o valor "Lua".

    3-Crie uma variável chamada idade e atribua a ela o valor 25.

    4-Defina uma variável numeroDeVendas e atribua a ela o valor 50.

    5-Defina uma variável saldoDisponivel e atribua a ela o valor 1000.

    6-Exiba um alerta com o texto "Erro! Preencha todos os campos"

    7-Declare uma variável chamada mensagemDeErro e atribua a ela o valor "Erro! Preencha todos os campos" Agora exiba um alerta com o valor da variável mensagemDeErro.

    8-Use um prompt para perguntar o nome do usuário e armazená-lo na variável nome.

    9-Peça ao usuário para digitar sua idade usando um prompt e armazene-a na variável idade.

    10-Agora, caso a idade seja maior ou igual que 18, exiba um alerta com a mensagem "Pode tirar a habilitação!".
*/

alert("Boas vindas ao nosso site!");

let nome= "Lua";
let idade= 25;
let numeroDeVendas= 50;
let saldoDisponivel= 1000;
let mensagemDeErro= "Erro! Preencha todos os campos";

/* Prompts */
let nomePrompt = prompt("Qual é o seu nome?");
let idadePrompt = prompt("Qual é a sua idade?");

function isValidInput(input) {
    return input !== null && input.trim() !== "";
}

if (isValidInput(nomePrompt) && isValidInput(idadePrompt)) {
    if (idadePrompt >= 18) {
        alert("Pode tirar a habilitação!");
    } else {
        alert("Não pode tirar a habilitação!");
        window.close();
    }
} else {
    alert(mensagemDeErro);
    location.reload(true);
}