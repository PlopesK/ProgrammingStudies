#Enunciado: Você foi contratado para desenvolver um sistema de cobrança de serviços de uma copiadora. Você ficou com a parte de desenvolver a interface com o funcionário.
#A copiadora opera da seguinte maneira:

#	Serviço de Digitalização (DIG) o custo por página é de um real e dez centavos;
#	Serviço de Impressão Colorida (ICO) o custo por página é de um real; 
#	Serviço de Impressão Preto e Branco (IPB) o custo por página é de quarenta centavos; 
#	Serviço de Fotocópia (FOT) o custo por página é de vinte centavos; 

#	Se número de páginas for menor que 20 retornar o número de página sem desconto;
#	Se número de páginas for igual ou maior que 20 e menor que 200 retornar o número de páginas com o desconto é de 15%;
#	Se número de páginas for igual ou maior que 200 e menor que 2000 retornar o número de páginas com o desconto é de 20%;
#	Se número de páginas for igual ou maior que 2000 e menor que 20000 retornar o número de páginas com o desconto é de 25%;
#	Se número de páginas for maior ou igual à 20000 não é aceito pedidos nessa quantidade de páginas;

#	Para o adicional de encadernação simples (1) é cobrado um valor extra de 15 reais;
#	Para o adicional de encadernação de capa dura (2) é cobrado um valor extra de 40 reais;
#	Para o adicional de não querer mais nada (0) é cobrado um valor extra de 0 reais;


#O valor final da conta é calculado da seguinte maneira:

#total = (servico * paginasina) + extra

#Elabore um programa em Python que: 
 
#	Deve-se implementar o print com uma mensagem de boas-vindas que apareça o seu nome [EXIGÊNCIA DE CÓDIGO 1 de 7];
#	Deve-se implementar a função escolha_servico() em que: [EXIGÊNCIA DE CÓDIGO 2 de 7];
#	Pergunta o servico desejado;
#	Retorna o valor servico com base na escolha do usuário;
#	Repete a pergunta do item B.a se digitar uma opção diferente de: dig/ico/ipb/fot;

#	Deve-se implementar a função paginasina() em que: [EXIGÊNCIA DE CÓDIGO 3 de 7];
#	Pergunta o número de páginas;
#	Retorna o número de páginas com desconto seguindo a regra do enunciado (desconto calculado em cima do número de páginas);
#	Repete a pergunta do item C.a se digitar um valor acima de 20000 ou valor não numérico (use try/except para não numérico)

#	Deve-se implementar a função servico_extra() em que: [EXIGÊNCIA DE CÓDIGO 4 de 7];
#	Pergunta pelo serviço adicional;
#	Retornar o valor de apenas uma das opções de adicional 
#	Repetir a pergunta item D.a se digitar uma opção diferente de: 1/2/0;
#	Deve-se implementar o total a pagar no código principal (main), ou seja, não pode estar dentro de função, conforme o enunciado [EXIGÊNCIA DE CÓDIGO 5 de 7];
#	Deve-se implementar try/except [EXIGÊNCIA DE CÓDIGO 6 de 7];
#	Deve-se inserir comentários relevantes no código [EXIGÊNCIA DE CÓDIGO 7 de 7];

#	Deve-se apresentar na saída de console uma mensagem de boas-vindas com o seu nome [EXIGÊNCIA DE SAÍDA DE CONSOLE 1 de 4];
#	Deve-se apresentar na saída de console um pedido no qual o usuário errou a opção de serviço [EXIGÊNCIA DE SAÍDA DE CONSOLE 2 de 4];
#	Deve-se apresentar na saída de console um pedido no qual o usuário digitou ultrapassou no número de páginas [EXIGÊNCIA DE SAÍDA DE CONSOLE 3 de 4];
#	Deve-se apresentar na saída de console um pedido com opção de serviço, número de páginas e serviço extra válidos [EXIGÊNCIA DE SAÍDA DE CONSOLE 4 de 4];

precos = { #Definindo preços dependendo das especificações do produto
        'DIG': 1.10,
        'ICO': 1,
        'IPB': 0.40,
        'FOT': 0.20
    }

def escolha_servico():
    while True:
        print("\nDigite o serviço desejado: \nDIG - Digitação\nICO - Impressão Colorida\nIPB - Impressão Preto e Branco\nFOT - Fotocópia\n")
        servico = input(">> ")
        if servico not in ['DIG', 'ICO', 'IPB', 'FOT']:
            print("Opção inválida! Digite novamente!")
            continue
        else:
            if servico in precos:
                return precos[servico]

def num_pagina():
    while True:
        try:
            paginas = int(input("\nDigite o número de páginas\n>> "))
            if paginas >= 20000:
                print("Não aceitamos pedidos com 20000 ou mais páginas.")
                continue
            elif paginas >= 2000:
                return paginas * 0.75 #25% de desconto / 75% do valor original
            elif paginas >= 200:
                return paginas * 0.80 #20% de desconto / 80% do valor original
            elif paginas >= 20:
                return paginas * 0.85 #15% de desconto / 85% do valor original
            else:
                return paginas
        except ValueError:
            print("Por favor, insira um número válido de páginas.")

def servico_extra():
    while True:
        try:
            print("\nDeseja adicionar algum serviço extra? \n1 - Simples (R$15.00) \n2 - Capa Dura (R$40.00) \n0 - Nenhum Serviço (Sem custos adicionais)")
            servico_extra = int(input(">> "))
        except ValueError:
            print("Opção inválida! Digite novamente!")
            continue
        else:
            if servico_extra == 1:
                return 15.00
            elif servico_extra == 2:
                return 40.00
            elif servico_extra == 0:
                return 0.00
            else:
                print("Opção de serviço adicional inválida, por favor escolha entre: 1, 2 ou 0!")
                continue

print("\n-- Bem-vindo a Copiadora do Gabriel Primo! --\n")

valor_servico = escolha_servico() #Recebe o valor do serviço
numero_paginas = num_pagina() #Recebe o valor do número de páginas
valor_extra = servico_extra() #Recebendo o valor do serviço extra
total = (valor_servico * numero_paginas) + valor_extra # Cálculo total

print(f"\nO Valor final a se pagar é: R${total:.2f}\n") # Saída final