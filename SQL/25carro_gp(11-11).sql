CREATE DATABASE `25carro_gp(11-11)`;
USE `25carro_gp(11-11)`;

CREATE TABLE cliente (
	cli_cod INT (11) NOT NULL PRIMARY KEY,
	cli_nome VARCHAR (50) NOT NULL,
	cli_rg INT (11) NOT NULL,
	cli_endereco VARCHAR (50) NOT NULL,
	cli_telefone INT (11) NOT NULL,
	car_cod INT (11) NOT NULL,
	FOREIGN KEY (car_cod) REFERENCES carro (car_cod)
);

CREATE TABLE carro (
	car_cod INT (11) NOT NULL PRIMARY KEY,
	car_placa VARCHAR (50) NOT NULL,
	car_fabricante VARCHAR (50) NOT NULL,
	car_modelo VARCHAR (50) NOT NULL,
	car_ano INT (11) NOT NULL,
);

CREATE TABLE ocorrencia (
	oco_numero INT (11) NOT NULL PRIMARY KEY,
	oco_data DATE NOT NULL,
	oco_local VARCHAR (50) NOT NULL,
	oco_descricao VARCHAR (50) NOT NULL,
	car_cod INT (11) NOT NULL,
	FOREIGN KEY (car_cod) REFERENCES carro (car_cod)
);

/*------------------Exercício 1------------------*/
/*Selecione todos os automóveis*/
SELECT *
FROM carro
ORDER BY car_cod

/*------------------Exercício 2------------------*/
/*Listar os automóveis fabricados entre 2005 e 2016*/
SELECT *
FROM carro
WHERE car_ano = '2005' OR '2006'
ORDER BY car_cod

/*------------------Exercício 3------------------*/
/*Listar nome do proprietário e seu veículo*/
SELECT 'cli_nome', 'car_cod', 'car_modelo'
FROM cliente, carro
ORDER BY cli_nome

/*------------------Exercício 4------------------*/
/*Listar nome dos veículos e data de ocorrência*/
SELECT 'car_cod', 'car_modelo', 'oco_numero', 'oco_data'
FROM carro, ocorrencia
WHERE 'oco_numero' IS NOT NULL 
ORDER BY car_cod

/*------------------Exercício 5------------------*/
/*Listar as ocorrências do veiculo com placa “aaa 1234”*/
SELECT 'car_cod', 'car_modelo', 'car_placa', 'oco_numero'
FROM carro, ocorrencia
WHERE 'car_placa' = 'aaa 1234'
ORDER BY car_cod