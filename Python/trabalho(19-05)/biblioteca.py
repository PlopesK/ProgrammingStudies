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

print("\n-- Bem-vindo a Biblioteca do Gabriel Primo! --")

lista_livro = [] #Cria um array (lista) vazia para armazenar os livros
id_global = 0 #Inicia o programa com um Id global sem valor, pois não há livros cadastrados

def cadastrar(id): #Função para cadastrar livro, cuja recebe um valor para o 'id' ao ser chamado
    print("\n-- Cadastrar Livro --")
    print(f"ID do livro: {id}") #Informa ao usuário qual será o ID do livro
    nome = input("Informe o nome do livro: ")
    autor = input("Informe o nome do autor: ")
    editora = input("Informe a editora: ")

    livro = { #Cria um objeto livro utilizando as informações digitadas
        "id": id,
        "nome": nome,
        "autor": autor,
        "editora": editora
    }

    lista_livro.append(livro) #Adiciona um novo objeto 'livro' a lista de 'lista_livro'
    print("\nLivro cadastrado com sucesso!\n")

def mostrar_livro(id, nome, autor, editora): #Função para mostrar um livro
    #Função criada para simplificar o código, informando o 'id', 'nome', 'autor' e 'editora' informados ao ser chamado
    print(f"ID: {id}")
    print(f"Nome: {nome}")
    print(f"Autor: {autor}")
    print(f"Editora: {editora}\n")

def consultar(): #Função para consultar os livros
    print("\n" + "-" * 46)
    print("-" * 15 + " MENU CONSULTAR " + '-' * 15) #Menu de consultar livros
    print("\nEscolha a opção desejada: ")
    print("1 - Consultar todos os livros")
    print("2 - Consultar livro por id")
    print("3 - Consultar livro(s) por autor")
    print("4 - Sair")

    opcao = int(input(">> "))
    print("-" * 46 + '\n')

    if opcao == 1:
        if len(lista_livro) > 0: #Verifica se há pelo menos 1 livro
            for livro in lista_livro: #Verifica todos os objetos 'livro' na array 'lista_livro'
                print("------")
                mostrar_livro(livro['id'], livro['nome'], livro['autor'], livro['editora']) #Chama a função 'mostrar_livro()' com as informações encontradas do livro
        else:
            print("\nNão há livros cadastrados.\n")
            return #Informa que não tem livros cadastrados e retorna ao menu
        
    elif opcao == 2:
        id = int(input("Informe o ID do livro: "))
        livro_id = False # Variável de controle
        for livro in lista_livro: #Verifica todos os objetos 'livro' na array 'lista_livro'
            if livro['id'] == id: #Caso encontre o Id informado, irá realizar o código abaixo
                print('') #Espaço para decoração da saída
                mostrar_livro(livro['id'], livro['nome'], livro['autor'], livro['editora']) #Chama a função 'mostrar_livro()' com as informações encontradas do livro
                livro_id = True #Define a variavél como 'verdadeira' caso encontre o livro, evitando com que a mensagem de erro apareça indevidamente
        if not livro_id: #Caso não encontre o livro, imprimirá uma mensagem de erro
            print("\nLivro não encontrado!")
            consultar() #Reinicia a função

    elif opcao == 3:
        autor = input("Informe o nome do autor: ")
        autor_encontrado = False  # Variável de controle
        for livro in lista_livro: #Verifica todos os objetos 'livro' na array 'lista_livro'
            if livro['autor'] == autor: #Caso haja um autor que possua com nome igual ao inserido
                print('') #Espaço para decoração da saída
                mostrar_livro(livro['id'], livro['nome'], livro['autor'], livro['editora'])
                autor_encontrado = True #Define a variavél como 'verdadeira' caso encontre o autor
        if not autor_encontrado: #Caso não encontre o autor, imprimirá uma mensagem de erro
            print("\nAutor não encontrado!")
            consultar() #Reinicia a função

    elif opcao == 4:
        print("\n-- Voltando ao menu principal --\n")
        return #Retorna ao menu
    else:
        print("\nOcorreu um erro! Tente novamente!\n")
        consultar() #Reinicia a função

def remover(): #Função para remover um livro
    print("-" * 46 + '\n')
    id = int(input("Digite o ID do livro que será removido: "))
    livro_removido = False  # Variável de controle
    for livro in lista_livro: #Verifica todos os objetos 'livro' na array 'lista_livro'
        if livro['id'] == id: #Caso haja um livro que possua um id igual ao inserido
            print('') #Espaço para decoração da saída
            lista_livro.remove(livro) #O livro selecionado será removido da lista
            print("\nLivro removido com sucesso!\n")
            livro_removido = True #Define a variavél como 'verdadeira' caso encontre o livro
    if not livro_removido: #Caso não encontre o livro, imprimirá uma mensagem de erro
        print("\nLivro não encontrado!\n")
        return #Retorna ao menu


while True:
    print("-" * 46)
    print("-" * 15 + " MENU PRINCIPAL " + '-' * 15) #Menu Principal
    print("\nEscolha a opção desejada: ")
    print("1 - Cadastrar livro")
    print("2 - Consultar livros")
    print("3 - Remover livro")
    print("4 - Sair")

    acao = int(input(">> "))

    if acao == 1:
        id_global += 1 #Adiciona 1 novo id a variável 'id_global'
        cadastrar(id_global) #Chama a função 'cadastrar()' informando qual o id atual
    elif acao == 2:
        consultar() #Chama a função 'consultar()'
    elif acao == 3:
        remover() #Chama a função 'remover()'
    elif acao == 4:
        print("\n-- Encerrando o programa... --\n")
        break #Encerra o programa
    else:
        print("\nOcorreu um erro! Tente novamente!\n")
        continue #Reinicia o programa caso seja inserido uma opção não informada