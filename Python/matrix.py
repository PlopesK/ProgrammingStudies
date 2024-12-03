from sympy import Matrix, symbols, Eq, solve

A = Matrix([[3, 0], [2, 5]])

#Determinante:
determinant = A.det()
print(f"\n Determinante: {determinant}")

#Autovalores:
autovalores = A.eigenvals()
autovalores_arredondados = {round(valor.evalf(), 2): multiplicidade for valor, multiplicidade in autovalores.items()}

autovalores_formatados = {f"{valor:.2f}".rstrip('0').rstrip('.'): multiplicidade for valor, multiplicidade in autovalores_arredondados.items()}
autovalores_sem_multiplicidade = list(autovalores_formatados.keys())
print(f"\n Autovalores: {', '.join(autovalores_sem_multiplicidade)}")

# Definição das variáveis
x, y = symbols('x y')

eq1 = Eq(1.0 * x - 2.0 * y, 12.0)
eq2 = Eq(4.0 * x + 2.0 * y, 22.0)

solution = solve((eq1, eq2), (x, y))
x_value = solution[x]
y_value = solution[y]

solution_formatada = {f"x: {x_value:.2f}, y: {y_value:.2f}"}
print(f"\nSolução: {solution_formatada}\n")