#include <stdio.h>
#include <stdlib.h>

// Estrutura da lista (Nó)
typedef struct No {
    int numero;
    char prioridade; // 'P' ou 'C'
    struct No* prox;
} No;

No* filaIni = NULL; // início da fila
int numC = 1;    // contador de senhas comuns (Começa em 1)
int numP = 301;  // contador de senhas prioritárias (Começa em 301)

// ===== Inserir cliente comum =====
void inserirSemPrioridade(No* novo) {
    if (filaIni == NULL) {
        filaIni = novo; // Se a fila estiver vazia, o novo nó se torna o primeiro
        return;
    }

    // Percorre a lista até o último nó
    No* atual = filaIni;
    while (atual->prox != NULL) {
        atual = atual->prox;
    }

    // Adiciona o novo nó no final da lista
    atual->prox = novo;
}

// ===== Inserir cliente prioritário =====
void inserirComPrioridade(No* novo) {
    if (filaIni == NULL) {
        filaIni = novo;
        return;
    }

     // Se o primeiro da fila for C, o novo P vai antes
    if (filaIni->prioridade == 'C') {
        novo->prox = filaIni;
        filaIni = novo;
        return;
    }

    // Percorre a fila até encontrar o último P
    No* atual = filaIni;
    while (atual->prox != NULL && atual->prox->prioridade == 'P') {
        atual = atual->prox;
    }

    // Insere o novo cliente **depois do último P e antes do primeiro C**
    novo->prox = atual->prox;
    atual->prox = novo;
}

// ===== Inserir cliente =====
void inserir() {
    char tipo;
    printf("\nDigite o tipo de senha (P - Prioritário, C - Comum): ");
    scanf(" %c", &tipo);

    // Cria um novo nó
    No* novo = (No*)malloc(sizeof(No));
    novo->prox = NULL;

    // Se for um cliente COMUM
    if (tipo == 'C' || tipo == 'c') {
        novo->numero = numC++;   // Atribui número e incrementa contador
        novo->prioridade = 'C';
        inserirSemPrioridade(novo); // Insere no final da fila
        printf("\nCliente adicionado com sucesso!!\n");

    // Se for um cliente PRIORITÁRIO
    } else if (tipo == 'P' || tipo == 'p') {
        novo->numero = numP++;
        novo->prioridade = 'P';
        inserirComPrioridade(novo); // Insere após o último P
        printf("\nCliente adicionado com sucesso!!\n");

    // Caso o usuário digite algo inválido
    } else {
        printf("Tipo inválido!\n");
        free(novo); // Libera memória alocada
    }
}

// ===== Mostrar fila =====
void imprimirFilaClientes() {
    if (filaIni == NULL) {
        printf("\nFila vazia!\n"); // Se a fila estiver vazia, informa ao usuário
        return;
    }

    printf("\n--- Fila de Clientes ---\n");
    No* atual = filaIni; // Começa pelo primeiro cliente
    while (atual != NULL) { // Percorre até o final da lista
        printf("Senha %c%d\n", atual->prioridade, atual->numero);
        atual = atual->prox; // Passa para o próximo nó
    }
}

// ===== Atender cliente =====
void atenderCliente() {
    if (filaIni == NULL) {
        printf("\nNenhum cliente na fila!\n");
        return;
    }

    No* temp = filaIni; // Guarda o nó que será removido
    filaIni = filaIni->prox; // Move para o próximo cliente

    printf("\nChamando cliente com senha %c%d para atendimento.\n", temp->prioridade, temp->numero);
    free(temp);
}

// ===== Customização do programa =====
void limparTela() { // Limpa a tela para deixar o programa mais limpo
    printf("\033[2J\033[H");
    fflush(stdout);
}

void esperarTecla() { // Void para o sistema ser mais interativo
    int c;
    printf("\n-- Pressione Enter para prosseguir... --\n");
    
    // Limpa o buffer
    while ((c = getchar()) != '\n' && c != EOF);

    // Espera o Enter
    getchar();
}

// ===== Menu principal =====
int main() {
    int opcao;
    limparTela();

    do {
        //limparTela(); // Limpa a tela a cada novo loop do menu

        printf("\n==================================\n");
        printf("      SISTEMA DE SENHAS BANCO     \n");
        printf("==================================\n");
        printf("\n1 - Adicionar cliente à fila\n");
        printf("2 - Mostrar clientes na fila\n");
        printf("3 - Chamar próximo cliente\n");
        printf("4 - Sair\n");
        printf("\n----------------------------------\n");
        printf("Escolha uma opção: ");
        if (scanf(" %d", &opcao) != 1) { // Verifica se um número foi digitado
            printf("\nEntrada inválida! Digite um número.\n");

            esperarTecla(); // Espera o usuário
            continue;  // Volta para o início do loop
        }

        switch (opcao) {
            case 1:
                inserir(); // Adiciona cliente
                break;
            case 2:
                imprimirFilaClientes(); // Mostra a fila
                break;
            case 3:
                atenderCliente(); // Chama próximo cliente
                break;
            case 4:
                printf("\nEncerrando o sistema...\n"); // Encerra programa
                break;
            default:
                printf("\nOpção inválida!\n");
                printf("Recomeçando programa!\n");
                break;
        }

        esperarTecla(); // Espera o usuário antes de limpar a tela e voltar ao menu

    } while (opcao != 4); // Repete até o usuário escolher sair

    return 0;
}