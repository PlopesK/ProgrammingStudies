import os

# Programa para renomear arquivos com palavra iguais
caminho_pasta = r"C:\Users\Usuario\sonicr\sprites\ClassicSonic"

antigo_nome = "sonic3"
novo_nome = "classicsonic"

for nome_arquivo in os.listdir(caminho_pasta):
    if antigo_nome in nome_arquivo:  # Verifica se o nome antigo está presente
        novo_nome_arquivo = nome_arquivo.replace(antigo_nome, novo_nome)  # Renomeia o arquivo
        caminho_antigo = os.path.join(caminho_pasta, nome_arquivo)
        caminho_novo = os.path.join(caminho_pasta, novo_nome_arquivo)
        os.rename(caminho_antigo, caminho_novo)  # Renomeia
        print(f'Renomeado: {nome_arquivo} -> {novo_nome_arquivo}')
