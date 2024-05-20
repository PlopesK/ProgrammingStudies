#Enunciado: Imagina-se que você é um dos programadores responsáveis pela construção de app de vendas para uma determinada empresa X que vende em atacado. Uma das estratégias de vendas dessa empresa X é dar desconto maior conforme o valor da compra, conforme a listagem abaixo:

#⦁	Se valor for menor que 2500 o desconto será de 0%;
#⦁	Se valor for igual ou maior que 2500 e menor que 6000 o desconto será de 4%;
#⦁	Se valor for igual ou maior que 6000 e menor que 10000 o desconto será de 7%;
#⦁	Se valor for igual ou maior que 10000 o desconto será de 11%;

#Elabore um programa em Python que:
#⦁	Deve-se implementar o print com uma mensagem de boas-vindas que apareça o seu nome [EXIGÊNCIA DE CÓDIGO 1 de 6];
#⦁	Deve-se implementar o input do valor unitário e da quantidade do produto [EXIGÊNCIA DE CÓDIGO 2 de 6];
#⦁	Deve-se implementar o desconto conforme a enunciado acima (obs.: atente-se as condições de menor, igual e maior) [EXIGÊNCIA DE CÓDIGO 3 de 6];
#⦁	Deve-se implementar o valor total sem desconto e o valor total com desconto [EXIGÊNCIA DE CÓDIGO 4 de 6];
#⦁	Deve-se implementar as estruturas if, elif e else (todas elas) [EXIGÊNCIA DE CÓDIGO 5 de 6];  
#⦁	Deve-se inserir comentários relevantes no código [EXIGÊNCIA DE CÓDIGO 6 de 6];
#⦁	Deve-se apresentar na saída de console uma mensagem de boas-vindas com seu nome [EXIGÊNCIA DE SAÍDA DE CONSOLE 1 de 2];
#⦁	Deve-se apresentar na saída de console um pedido recebendo desconto (valor total sem desconto maior ou igual a 2500) [EXIGÊNCIA DE SAÍDA DE CONSOLE 2 de 2];  

print("\n-------------- Bem-vindo a loja do Gabriel Primo --------------\n")
valor = float(input("Digite o valor do produto: ")) #Input do Valor do Produto
quant = int(input("Digite a quantidade de produtos que você deseja comprar: ")) #Input da Quantidade de produtos que serão comprados
total = valor * quant #Valor total sem desconto

#Utilização de IF, ELIF e ELSE com base o enunciado para atribuir um desconto ao Valor Total
if  total < 2500:
    desconto = 0 #0% de Desconto
elif total >= 2500 and total < 6000:
    desconto = 0.04 #4% de Desconto
elif total >= 6000 and total < 10000:
    desconto = 0.07 #7% de Desconto
elif total >= 10000:
    desconto = 0.11 #11% de Desconto
else:
    print("Valor inválido!") #Mensagem que irá aparecer caso o valor seja inválido

valordesconto = total * desconto #Valor do desconto
totdesconto = total - valordesconto #Valor total com desconto

print("\n--------------------------------------------")

if desconto == 0: #Caso não tenha desconto, a saída será diferente
    print(f"O valor total é de R${total:.2f}")
    print("Você não tem direito a desconto\n")
else: #Saída final esperada quando se tem desconto
    print(f"O valor total sem desconto é de R${total:.2f}")
    print(f"Você recebeu um desconto de {desconto*100:.0f}%, sendo assim R${valordesconto:.2f} a menos do valor total")
    print(f"O valor total final é de R${totdesconto:.2f}\n")