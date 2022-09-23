CREATE DATABASE biblioteca;
USE biblioteca;

CREATE TABLE editora (
	editora_codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	editora_nome VARCHAR(50) NOT NULL,
	editora_endereco VARCHAR(50) NOT NULL,
	editora_telefone VARCHAR(15) NOT NULL,
	editora_email VARCHAR(30) NOT NULL
);

CREATE TABLE instituicao (
	instituicao_codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	instituicao_nome VARCHAR(50) NOT NULL,
	instituicao_endereco VARCHAR(50) NOT NULL,
	instituicao_email VARCHAR(30) NOT NULL
);

CREATE TABLE cliente (
	cliente_codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	cliente_nome VARCHAR(50) NOT NULL,
	cliente_cpf VARCHAR(15) NOT NULL,
	cliente_rg VARCHAR(15) NOT NULL,
	cliente_telefone VARCHAR(15) NOT NULL
);

CREATE TABLE autor (
	autor_codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	autor_nome VARCHAR(50) NOT NULL,
	autor_nacionalidade VARCHAR(2) NOT NULL
);

CREATE TABLE bibliotecario (
	biblio_codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	biblio_nome VARCHAR(50) NOT NULL,
	biblio_cpf VARCHAR(15) NOT NULL,
	biblio_rg VARCHAR(15) NOT NULL,
	biblio_turno VARCHAR(20) NOT NULL,
	biblio_salario DECIMAL(5, 2) NOT NULL,
	biblio_dias_trabalho VARCHAR(50) NOT NULL
);

CREATE TABLE estante (
	estante_codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	estante_descricao VARCHAR(40) NOT NULL,
	estante_sala INT NOT NULL,
	biblio_codigo INT NOT NULL,
	FOREIGN KEY (biblio_codigo) REFERENCES bibliotecario (biblio_codigo)
);

CREATE TABLE categoria (
	categoria_codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	categoria_descricao VARCHAR(50) NOT NULL,
	estante_codigo INT NOT NULL,
	FOREIGN KEY (estante_codigo) REFERENCES estante(estante_codigo)
);

CREATE TABLE estagiario (
	estagiario_codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	estagiario_nome VARCHAR(50) NOT NULL,
	estagiario_cpf VARCHAR(15) NOT NULL,
	estagiario_rg VARCHAR(15) NOT NULL,
	estagiario_email VARCHAR(40) NOT NULL,
	estagiario_telefone VARCHAR(20) NOT NULL,
	estagiario_turno VARCHAR(20) NOT NULL,
	estagiario_salario DECIMAL(5, 2) NOT NULL,
	estagiario_dias_trabalho VARCHAR(50) NOT NULL,
	biblio_codigo INT NOT NULL,
	instituicao_codigo INT NOT NULL,
	FOREIGN KEY (biblio_codigo) REFERENCES bibliotecario (biblio_codigo),
	FOREIGN KEY (instituicao_codigo) REFERENCES instituicao(instituicao_codigo)
);

CREATE TABLE livro (
	livro_codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	livro_isbn VARCHAR(20) NOT NULL,
	livro_nome VARCHAR(60) NOT NULL,
	livro_descricao VARCHAR(60) NOT NULL,
	livro_num_paginas INT NOT NULL,
	livro_quantidade INT NOT NULL,
	editora_codigo INT NOT NULL,
	categoria_codigo INT NOT NULL,
	FOREIGN KEY(categoria_codigo) REFERENCES categoria(categoria_codigo),
	FOREIGN KEY(editora_codigo) REFERENCES editora(editora_codigo)
);

CREATE TABLE exemplar (
	exemplar_codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	exemplar_descricao VARCHAR(60),
	livro_codigo INT NOT NULL,
	FOREIGN KEY (livro_codigo) REFERENCES livro(livro_codigo)
);

CREATE TABLE emprestimo (
	emprestimo_codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	emprestimo_descricao VARCHAR(60),
	emprestimo_valor_diario_multa DECIMAL(5, 2) NOT NULL,
	emprestimo_data_devolucao DATE NOT NULL,
	emprestimo_valor_multa_total DECIMAL(5, 2) NOT NULL,
	exemplar_codigo INT NOT NULL,
	biblio_codigo INT NOT NULL,
	cliente_codigo INT NOT NULL,
	FOREIGN KEY (exemplar_codigo) REFERENCES exemplar(exemplar_codigo),
	FOREIGN KEY (biblio_codigo) REFERENCES bibliotecario(biblio_codigo),
	FOREIGN KEY (cliente_codigo) REFERENCES cliente(cliente_codigo)
);

CREATE TABLE obra_autor (
	codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	autor_codigo INT NOT NULL,
	livro_codigo INT NOT NULL,
	FOREIGN KEY (livro_codigo) REFERENCES livro(livro_codigo),
	FOREIGN KEY (autor_codigo) REFERENCES autor(autor_codigo)
);