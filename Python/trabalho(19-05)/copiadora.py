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

def escolha_servico(): #Função de escolha de serviços
    while True:
        print("\nDigite o serviço desejado: \nDIG - Digitação\nICO - Impressão Colorida\nIPB - Impressão Preto e Branco\nFOT - Fotocópia")
        servico = input(">> ").upper() #Input para receber o nome do serviço. O upper deixa em Maiúsculo todos os caracteres da resposta
        if servico not in ['DIG', 'ICO', 'IPB', 'FOT']: #Caso não seja um desses serviços, imprimirá um erro na saída
            print("Opção inválida! Digite novamente!")
            continue #Repete o 'While'
        else:
            if servico in precos: #Caso o serviço escrito esteja dentro do array de 'precos'
                return precos[servico] #Retornará o preço do serviço selecionado

def num_pagina(): #Função de escolha de número de páginas
    while True:
        try:
            paginas = int(input("\nDigite o número de páginas\n>> ")) #Input do número de páginas
            if paginas >= 20000: #Verifica se a quantidade de páginas está dentro do limite. Caso não esteja, reinicia o 'while'
                print("Não aceitamos pedidos com 20000 ou mais páginas.")
                continue
            #Verificação do desconto que será atribuído dependendo da quantia de páginas
            elif paginas >= 2000 and paginas < 20000:
                return paginas * 0.75 #25% de desconto / 75% do valor original
            elif paginas >= 200 and paginas < 2000:
                return paginas * 0.80 #20% de desconto / 80% do valor original
            elif paginas >= 20 and paginas < 200:
                return paginas * 0.85 #15% de desconto / 85% do valor original
            else:
                return paginas #Retorna sem desconto
        except ValueError:
            print("Por favor, insira um número válido de páginas.") #Imprimirá esse erro caso ocorra algo de errado

def servico_extra(): #Função de escolha de serviço extra
    while True:
        try:
            print("\nDeseja adicionar algum serviço extra? \n1 - Simples (R$15.00) \n2 - Capa Dura (R$40.00) \n0 - Nenhum Serviço (Sem custos adicionais)")
            servico_extra = int(input(">> ")) #Input de escolha do serviço extra

            #Verificação de qual opção foi selecionada pelo usuário
            if servico_extra == 1:
                return 15.00 #Retorna 15 reais
            elif servico_extra == 2:
                return 40.00 #Retorna 40 reais
            elif servico_extra == 0:
                return 0.00 #Retorna 0 reais
            else:
                print("Opção de serviço adicional inválida, por favor escolha entre: 1, 2 ou 0!")
                continue #Caso não seja nenhuma das opções informadas, reinicia o 'while' e imprime um erro 
        except ValueError:
            print("Opção inválida! Digite novamente!") #Imprimirá esse erro caso ocorra algo de errado
            continue

print("\n-- Bem-vindo a Copiadora do Gabriel Primo! --")

valor_servico = escolha_servico() #Recebe o valor do serviço do 'return' em "escolha_servico()"
numero_paginas = num_pagina() #Recebe o valor do número de páginas do 'return' em "num_pagina()"
valor_extra = servico_extra() #Recebendo o valor do serviço extra do 'return' em "servico_extra()"
total = (valor_servico * numero_paginas) + valor_extra # Cálculo total

print(f"\n-- O Valor final a se pagar é: R${total:.2f} --") # Saída final
print(f"-- (Serviço: {valor_servico:.2f} * Páginas: {numero_paginas:.0f}) + Extra: {valor_extra:.2f} --")
print("-- Obrigado pela compra! Volte sempre! --\n")