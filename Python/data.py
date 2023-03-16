import pandas as pd 
import plotly.express as px

table = pd.read_csv('..\Python\datas\clients.csv', encoding='latin', sep=";")
table = table.drop("Unnamed: 8", axis=1)
print(table.info())
table["Salário Anual (R$)"] = pd.to_numeric(table["Salário Anual (R$)"], errors="coerce")
table = table.dropna()
print(table.info())
print(table.describe())

for coluna in table.columns:
    graphic = px.histogram(table, x=coluna, y="Nota (1-100)", histfunc="avg", text_auto=True)
    graphic.show()