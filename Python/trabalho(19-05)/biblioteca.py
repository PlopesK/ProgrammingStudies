#Enunciado: Você e sua equipe de programadores foram contratados por pequena empresa para desenvolver o software de gerenciamento de livros. Este software deve ter o seguinte menu e opções:

#	Cadastrar Livro
#	Consultar Livro
#	Consultar Todos 
#	Consultar por Id
#	Consultar por Autor
#	Retornar ao menu
#	Remover Livro
#	Encerrar Programa

#Elabore um programa em Python que: 
 
#	Deve-se implementar o print com uma mensagem de boas-vindas que apareça o seu nome [EXIGÊNCIA DE CÓDIGO 1 de 8];
#	Deve-se implementar uma lista vazia com o nome de lista_livro e a variável id_global com valor inicial igual a 0 [EXIGÊNCIA DE CÓDIGO 2 de 8];
#	Deve-se implementar uma função chamada cadastrar_livro(id) em que: [EXIGÊNCIA DE CÓDIGO 3 de 8];
#	Pergunta nome, autor, editora do livro;
#	Armazena o id (este é fornecido via parâmetro da função), nome, autor, editora dentro de um dicionário;
#	Copiar o dicionário para dentro da lista_livro;
#	Deve-se implementar uma função chamada consultar_livro() em que: [EXIGÊNCIA DE CÓDIGO 4 de 8];
#	Deve-se perguntar qual opção deseja (1. Consultar Todos / 2. Consultar por Id / 3. Consultar por Autor / 4. Retornar ao menu):
#	Se Consultar Todos, apresentar todos os livros com todos os seus dados cadastrados;
#	Se Consultar por Id, apresentar o livro específico com todos os seus dados cadastrados;
#	Se Consultar por Autor, apresentar o(s) livro(s) do autor com todos os seus dados cadastrados;
#	Se Retornar ao menu, deve-se retornar ao menu principal;
#	Se Entrar com um valor diferente de 1, 2, 3 ou 4, printar “Opção inválida" e repetir a pergunta D.a.
#	Enquanto o usuário não escolher a opção 4, o menu consultar livros deve se repetir.
#	Deve-se implementar uma função chamada remover_livro() em que: [EXIGÊNCIA DE CÓDIGO 5 de 8];
#	Deve-se pergunta pelo id do livro a ser removido;
#	Remover o livro da lista_livro;
#	Se o id fornecido não for de um livro da lista, printar “Id inválido” e repetir a pergunta E.a.
#	Deve-se implementar uma estrutura de menu no código principal (main), ou seja, não pode estar dentro de função, em que: [EXIGÊNCIA DE CÓDIGO 6 de 8];
#	Deve-se pergunta qual opção deseja (1. Cadastrar Livro / 2. Consultar Livro / 3. Remover Livro / 4. Encerrar Programa):
#	Se Cadastrar Livro, acrescentar em um id_ global e chamar a função cadastrar_livro(id_ global);
#	Se Consultar Livro, chamar função consultar_livro();
#	Se Remover Livro, chamar função remover_livro();
#	Se Encerrar Programa, sair do menu (e com isso acabar a execução do código);
#	Se Entrar com um valor diferente de 1, 2, 3 ou 4, printar “Opção inválida" e repetir a pergunta F.a.
#	Enquanto o usuário não escolher a opção 4, o menu deve se repetir.
#	Deve-se implementar uma lista de dicionários (uma lista contento dicionários dentro) [EXIGÊNCIA DE CÓDIGO 7 de 8];
#	Deve-se inserir comentários relevantes no código [EXIGÊNCIA DE CÓDIGO 8 de 8];
#	Deve-se apresentar na saída de console uma mensagem de boas-vindas com o seu nome [EXIGÊNCIA DE SAÍDA DE CONSOLE 1 de 6];
#	Deve-se apresentar na saída de console um cadastro de 3 livros (sendo 2 deles no mesmo autor) [EXIGÊNCIA DE SAÍDA DE CONSOLE 2 de 6];
#	Deve-se apresentar na saída de console uma consulta de todos os livros [EXIGÊNCIA DE SAÍDA DE CONSOLE 3 de 6];
#	Deve-se apresentar na saída de console uma consulta por código (id) de um dos livros [EXIGÊNCIA DE SAÍDA DE CONSOLE 4 de 6];
#	Deve-se apresentar na saída de console uma consulta por autor em que 2 livros sejam do mesmo autor [EXIGÊNCIA DE SAÍDA DE CONSOLE 5 de 6];
#	Deve-se apresentar na saída de console uma remoção de um dos livros seguida de uma consulta de todos os livros [EXIGÊNCIA DE SAÍDA DE CONSOLE 6 de 6];

print("\n-- Bem-vindo a Biblioteca do Gabriel Primo! --\n")

lista_livro = []
id_global = 0

def cadastrar(id):
    print("\n-- Cadastrar Livro --")
    nome = input("Informe o nome do livro: ")
    autor = input("Informe o nome do autor: ")
    editora = input("Informe a editora: ")

    livro = {
        "id": id,
        "nome": nome,
        "autor": autor,
        "editora": editora
    }

    lista_livro.append(livro)
    print("\nLivro cadastrado com sucesso!\n")

def mostrar_livro(id, nome, autor, editora):
    print(f"ID: {id}")
    print(f"Nome: {nome}")
    print(f"Autor: {autor}")
    print(f"Editora: {editora}")

def consultar():
    print("\n" + "-" * 46)
    print("-" * 15 + " MENU CONSULTAR " + '-' * 15)
    print("\nEscolha a opção desejada: ")
    print("1 - Consultar todos os livros")
    print("2 - Consultar livro por id")
    print("3 - Consultar livro(s) por autor")
    print("4 - Sair")

    opcao = int(input(">> "))
    print("-" * 46)

    if opcao == 1:
        if len(lista_livro) > 0:
            for livro in lista_livro:
                mostrar_livro(livro['id'], livro['nome'], livro['autor'], livro['editora'])
        else:
            print("\nNão há livros cadastrados.\n")
            return
        
    elif opcao == 2:
        id = int(input("\nInforme o id do livro: "))
        for livro in lista_livro:
            if livro['id'] == id:
                mostrar_livro(livro['id'], livro['nome'], livro['autor'], livro['editora'])
            else:
                print("\nLivro não encontrado!\n")

    elif opcao == 3:
        autor = input("\nInforme o nome do autor: ")
        for livro in lista_livro:
            if livro['autor'] == autor:
                mostrar_livro(livro['id'], livro['nome'], livro['autor'], livro['editora'])
            else:
                print("\nAutor não encontrado!\n")

    elif opcao == 4:
        print("\n-- Voltando ao menu principal --\n")
        return
    else:
        print("\nOcorreu um erro! Tente novamente!\n")
        consultar()

def remover():
    id = int(input("\nDigite o ID do livro que será removido: "))
    for livro in lista_livro:
        if livro['id'] == id:
            lista_livro.remove(livro)
            print("\nLivro removido com sucesso!\n")
            return
        else:
            print("\nLivro não encontrado!\n")
            return


while True:
    print("\n" + "-" * 46)
    print("-" * 15 + " MENU PRINCIPAL " + '-' * 15)
    print("\nEscolha a opção desejada: ")
    print("1 - Cadastrar livro")
    print("2 - Consultar livros")
    print("3 - Remover livro")
    print("4 - Sair")

    acao = int(input(">> "))

    if acao == 1:
        id_global += 1
        cadastrar(id_global)
    elif acao == 2:
        consultar()
    elif acao == 3:
        remover()
    elif acao == 4:
        print("\n-- Encerrando o programa... --\n")
        break
    else:
        print("\nOcorreu um erro! Tente novamente!\n")
        continue