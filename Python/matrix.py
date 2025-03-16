from sympy import Matrix, symbols, Eq, solve, sin, cos, exp, lambdify
import numpy as np

print("\n-------------- COMEÇO --------------")
A = Matrix([[-7, 8], [11, 9]])

#Determinante:
determinant = A.det()
print(f"\nDeterminante: {determinant}")

#Autovalores:
autovalores = A.eigenvals()
autovalores_arredondados = {round(valor.evalf(), 2): multiplicidade for valor, multiplicidade in autovalores.items()}

autovalores_formatados = {f"{valor:.2f}".rstrip('0').rstrip('.'): multiplicidade for valor, multiplicidade in autovalores_arredondados.items()}
autovalores_sem_multiplicidade = list(autovalores_formatados.keys())
print(f"\nAutovalores: {', '.join(autovalores_sem_multiplicidade)}")

# Definição das variáveis
x, y, z = symbols('x y z')

eq1 = Eq(2.0 * x + 7.0 * y, 11.0)
eq2 = Eq(1.0 * x + 3.5 * y, 9.0)
#eq3 = Eq(-3.0 * x + 1.0 * y -1.0 * z, 0.0)
eq3 = 0

solution = solve((eq1, eq2, eq3), (x, y, z))

if not solution:
    print("\nO sistema de equações é impossível.\n")
else:
    x_value = solution[x]
    y_value = solution[y]
    z_value = solution[z]

    solution_formatada = {f"x: {x_value:.2f}, y: {y_value:.2f}, z: {z_value:.2f}"}
    print(f"\nSolução: {solution_formatada}\n")    

#Soma de Matrizes
Anp = np.array([[-2, 7], [4, 9]])
Bnp = np.array([[-19, 15], [-22, 11]])
C = Anp + Bnp

print("A + B =")
print(C)

#Transposta
At = np.array([[3, -1, 1], [5, 4, -6], [2, 0, 1]])
A_transposta = At.T

print("\nMatriz Transposta A^T:")
print(A_transposta)

#Escalar
Ak = np.array([[3, 6], [-2, 9]])
k= 4
k_A = k * Ak

print("\nMatriz k.A:")
print(k_A)

#Definindo o sistema de equações
def sistema_equacoes(x):
    x1, x2 = x
    return np.array([3*x1**2 + 5*x2 - 13, 2*x1 + x2**3 - 6])

def jacobiana(x):
    x1, x2 = x
    return np.array([[6*x1, 5], [2, 3*x2**2]])

def newton_raphson(x0, tol=1e-2, max_iter=100):
    x = x0.astype(np.float64)  # Converte o tipo de dado para float64
    for _ in range(max_iter):
        f = sistema_equacoes(x)
        j = jacobiana(x)
        delta_x = np.linalg.solve(j, -f)
        x += delta_x
        if np.linalg.norm(delta_x) < tol:
            break
    return x

x0 = np.array([0, 0])
solucao = newton_raphson(x0)
print("Solução: x1 = {:.6f}, x2 = {:.6f}".format(solucao[0], solucao[1]))

print("\n-------------- FIM --------------\n")