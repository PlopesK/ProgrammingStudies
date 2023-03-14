import pandas as pd

table = pd.read_csv("../Python/__pycache__/values.csv", sep=";")
print(table)
quantity = table['Quantidade'].sum()
valuefinal = table['ValorFinal'].sum()
average = valuefinal / quantity
print("Total Quantity:", quantity)
print("Total Final Costs:", valuefinal)
print("Total Average Costs:", average)

message = f"""

Hello! I completed what you had asked!
So there it's:

Quantity of products: quantity
Final costs: ${valuefinal:,.2f}
Average cost: ${average:,.2f}

Assigned, ඞ PlopesK ඞ
"""
print(message)