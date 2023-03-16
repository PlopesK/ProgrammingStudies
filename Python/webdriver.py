from selenium import webdriver 
import pandas as pd
#import unicodedata
      
table = pd.read_excel("../Python/datas/commodities.xlsx")
for line in table.index:
    product = table.loc[line, "Produto"]
    print(product)
    product = product.replace("ó", "o").replace("ã", "a").replace(
        "á", "a").replace("ç", "c").replace("ú", "u").replace("é", "e")
    #Other way: product = unicodedata.normalize("NFKD", product).encode("ascii", "ignore")

    navegator = webdriver.Firefox()
    link = f"https://www.melhorcambio.com/{product}-hoje"
    print(link)
    navegator.get(link)
    
    price = navegator.find_element("xpath", '//*[@id="comercial"]').get_attribute('value')
    price = price.replace(".", " ").replace(",", ".")
    print(price,'\n')
    table.loc[line, "Preço Atual"] = float(price)
    navegator.quit
print("\n End :D \n")

table["Comprar"] = table["Preço Atual"] < table["Preço Ideal"]
table["Não Comprar"] = table["Preço Atual"] > table["Preço Ideal"]
print(table)

table.to_excel("../Python/datas/commodities.xlsx", index=False)