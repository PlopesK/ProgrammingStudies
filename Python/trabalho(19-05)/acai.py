#Enunciado: Você e sua equipe de programadores foram contratados para desenvolver um app de vendas para uma loja que vende Açaí e Cupuaçu. Você ficou com a parte de desenvolver a interface do cliente para retirada do produto.
#A Loja possui seguinte relação:

#	Tamanho P de Cupuaçu (CP) custa 9 reais e o Açaí (AC) custa 11 reais;
#	Tamanho M de Cupuaçu (CP) custa 14 reais e o Açaí (AC) custa 16 reais;
#	Tamanho G de Cupuaçu (CP) custa 18 reais e o Açaí (AC) custa 20 reais;
#Elabore um programa em Python que: 
 
#	Deve-se implementar o print com uma mensagem de boas-vindas que apareça o seu nome [EXIGÊNCIA DE CÓDIGO 1 de 8];
#	Deve-se implementar o input do sabor (CP/AC) e o print “Sabor inválido. Tente novamente" se o usuário entra com valor diferente de CP e AC [EXIGÊNCIA DE CÓDIGO 2 de 8];
#	Deve-se implementar o input do tamanho (P/M/G) e o print “Tamanho inválido. Tente novamente" se o usuário com entra valor diferente de P, M ou G [EXIGÊNCIA DE CÓDIGO 3 de 8];
#	Deve-se implementar if, elif e/ou else com cada uma das combinações de sabor e tamanho [EXIGÊNCIA DE CÓDIGO 4 de 8];
#	Deve-se implementar um acumulador para somar os valores dos pedidos [EXIGÊNCIA DE CÓDIGO 5 de 8];
#	Deve-se implementar o input com a pergunta: “Deseja pedir mais alguma coisa?”. Se sim repetir a partir do item B, senão encerrar o programa executar o print do acumulador [EXIGÊNCIA DE CÓDIGO 6 de 8];
#	Deve-se implementar as estruturas de while, break, continue (todas elas) [EXIGÊNCIA DE CÓDIGO 7 de 8];
#	Deve-se inserir comentários relevantes no código [EXIGÊNCIA DE CÓDIGO 8 de 8];
#	Deve-se apresentar na saída de console uma mensagem de boas-vindas com o seu nome [EXIGÊNCIA DE SAÍDA DE CONSOLE 1 de 4];
#	Deve-se apresentar na saída de console um pedido em que o usuário errou o sabor [EXIGÊNCIA DE SAÍDA DE CONSOLE 2 de 4]; 
#	Deve-se apresentar na saída de console um pedido em que o usuário errou o tamanho [EXIGÊNCIA DE SAÍDA DE CONSOLE 3 de 4];
#	Deve-se apresentar na saída de console um pedido com duas opções sabores diferentes e com tamanhos diferentes [EXIGÊNCIA DE SAÍDA DE CONSOLE 4 de 4]; 

print("\n-- Bem-vindo a Loja de Gelados do Gabriel Primo! --\n")
print("-------------------- Cardápio --------------------") #Cardápio informando as opções do menu
print("--------------------------------------------------")
print("---|  Tamanho  |  Cupuaçu (CP)  |  Açaí (AC)  |---")
print("---|     P     |    R$ 9.00     |   R$ 11.00  |---")
print("---|     M     |    R$ 14.00    |   R$ 16.00  |---")
print("---|     G     |    R$ 18.00    |   R$ 20.00  |---")
print("--------------------------------------------------")


total = 0 #Variável para somar os valores dos pedidos
quant = 0 #Quantidade de vezes que foram feitas pedidos
pedidos = [] #Array para armazenar os pedidos realizados e formar uma lista

while True:
    print("\n---------- Escolher Sabor ----------")
    sabor = input("Digite o sabor (AC para Açaí, CP para Cupuaçu): ").upper() #Input para informar o sabor
    if sabor not in ['CP', 'AC']: #Caso não seja uma das opções pré-definidas, o código exibirá um erro e reiniciará
        print( "Sabor inválido. Tente novamente!")
        continue

    print("\n---------- Escolher Tamanho ----------")
    tamanho = input("Digite o tamanho desejado (P,M ou G): ").upper() #Input para informar o tamanho
    if tamanho not in ['P', 'M', 'G']: #Caso não seja uma das opções pré-definidas, o código exibirá um erro e reiniciará
        print( "Tamanho inválido. Recomeçando o programa!")
        continue

    precos = { #Definindo preços dependendo das especificações do produto
        'CP': {'P': 9, 'M': 14, 'G': 18}, #Mescla o tamanho com o sabor selecionado para assim decidir um preço
        'AC': {'P': 11, 'M': 16, 'G': 20}
    }

    print("\n--------------------------------------------")
    #Se for um sabor dentro da array de "precos" E um tamanho mesclado com esse sabor
    if sabor in precos and tamanho in precos[sabor]: 
        valor = precos[sabor][tamanho] #A variável "valor" irá armazenar o preço do sabor com certo tamanho
        total += valor #Caso haja mais de um pedido, o total irá se somar com o novo valor
        quant += 1 #Aumenta o valor que armazena a quantidade de produtos que estão sendo pedidos
        pedidos.append((sabor, tamanho, valor)) #Armazena o pedido e o valor no array de pedidos
        print(f"Você pediu um {sabor} de tamanho {tamanho} que custa R${valor:.2f}.\n")
    else: #Se o sabor ou o tamanho não forem encontrados, exibirá um erro
        print("Erro ao processar seu pedido. Por favor, tente novamente!")
        continue

    continuar = input("Deseja pedir mais alguma coisa? (S/N): ").upper() 
    #Pergunta ao usuário se ele deseja fazer outro pedido
    if continuar == 'S':
        continue  #Se sim, repete o código
    elif continuar == 'N':
        print("Obrigado por comprar conosco! Volte sempre!\n")
        break #Se não, encerra o pedido
    else:
        print("Resposta inválida. Encerrando o pedido.") #Caso a resposta seja inválida, o loop se encerra
        break

print("\n----------- Detalhes dos Pedidos -----------")
for pedido in pedidos: #Passa por cada pedido dentro da array de "pedidos"
    sabor, tamanho, valor = pedido #Passa os valores de "pedido" para "sabor", "tamanho" e "valor"
    print(f"Sabor: {sabor}, Tamanho: {tamanho}, Valor: R${valor:.2f}") #Exibe os pedidos em uma lista

print("-------------------------------------------- \n")

if quant > 1:
    print(f"O total dos seus pedidos é: R${total:.2f} \n") #Caso tenha sido feito só 1 pedido, a mensagem será singular
else:
    print(f"O total do seu pedido é: R${total:.2f} \n") #Caso tenha sido feito mais de 1 pedido, a mensagem será plural

print("Obrigado pela compra! Volte sempre\n")