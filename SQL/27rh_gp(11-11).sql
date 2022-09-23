CREATE DATABASE `27rh_gp(11-11)`;
USE `27rh_gp(11-11)`;

CREATE TABLE funcionario (
	fun_matri INT (11) NOT NULL PRIMARY KEY, 
	fun_nome VARCHAR (40) NOT NULL, 
	fun_endereço VARCHAR (40) NOT NULL, 
	fun_telefone VARCHAR (40) NOT NULL,
	fun_data_admissao DATE NOT NULL,
	set_setor VARCHAR (40) NOT NULL,
	pro_cod INT (11) NOT NULL,
	FOREIGN KEY (set_setor) REFERENCES setor (set_setor),
	FOREIGN KEY (pro_cod) REFERENCES projeto (pro_cod)
);

CREATE TABLE setor (
	set_setor VARCHAR (40) NOT NULL PRIMARY KEY,
	set_funcao VARCHAR (40) NOT NULL
);

CREATE TABLE projeto (
	pro_cod INT (11) NOT NULL PRIMARY KEY,
	pro_desc VARCHAR (50) NOT NULL,
	pro_inicio DATE NOT NULL,
	pro_conclusao DATE NOT NULL,
	pro_objetivo VARCHAR (50) NOT NULL,
	fun_matri INT (11) NOT NULL,
	fun_ativi VARCHAR (40) NOT NULL,
	FOREIGN KEY (fun_matri) REFERENCES funcionario (fun_matri)
);

/* -------------Exercício 1------------- */
/*Listar os dados de todos os funcionários*/
SELECT *
FROM funcionario
ORDER BY fun_matri

/* -------------Exercício 2------------- */
/*listar o telefone e código dos funcionários admitidos em 20/01/2020*/
SELECT fun_matri, fun_telefone, fun_data_admissao
FROM funcionario
WHERE fun_data_admissao = '20/01/2020'

/* -------------Exercício 3------------- */
/*listar o nome do funcionário e o setor onde atua*/
SELECT 'fun_nome', 'set_setor', 'set_funcao'
FROM funcionario, setor
ORDER BY set_setor

/* -------------Exercício 4------------- */
/*Listar nome e codigo de todos os setores da empresa*/
SELECT *
FROM setor
ORDER BY set_setor

/* -------------Exercício 5------------- */
/*listar o nome do funcionário e o projeto em que atua*/
SELECT fun_nome, pro_cod
FROM funcionario
ORDER BY pro_cod

/* -------------Exercício 6------------- */
/*listar codigo e nome de todos os projetos*/
SELECT pro_cod, pro_desc
FROM projeto
ORDER BY pro_cod