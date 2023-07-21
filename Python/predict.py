import pandas as pd
import seaborn as sns
import matplotlib.pyplot as plt

table = pd.read_csv(r"..\Python\datas\barcos_ref.csv", sep=",")
correlation = table.corr()[["Preco"]]
sns.heatmap(correlation, cmap="Blues", annot=True)
plt.show()

y = table["Preco"] #What I want to predict
#axis = 0 ->Line; axis = 1 -> Column
x = table.drop("Preco", axis = 1) #Everything else

#train test split (machine learning)
from sklearn.model_selection import train_test_split
x_train, x_test, y_train, y_test = train_test_split(x,y, test_size=0.3, random_state=1)

from sklearn.linear_model import LinearRegression
from sklearn.ensemble import RandomForestRegressor
#NeuralNetwork

LRegression = LinearRegression()
ForestRegression = RandomForestRegressor()

LRegression.fit(x_train, y_train)
ForestRegression.fit(x_train, y_train)

RandomForestRegressor()

from sklearn.metrics import r2_score

PredictLRegression = LRegression.predict(x_test)
PredictForestRegression = ForestRegression.predict(x_test)

print(r2_score(y_test, PredictLRegression))# Less accurate
print(r2_score(y_test, PredictForestRegression)) #More accurate to this case

newtable = pd.read_csv(r"..\Python\datas\novos_barcos.csv")
predict = ForestRegression.predict(newtable)
print(predict)
https://www.youtube.com/watch?v=8zm4L3rVreI
progress bar