CREATE DATABASE `26universidade_gp(11-11)`;
USE `26universidade_gp(11-11)`;

CREATE TABLE aluno (
	RA INT (11) NOT NULL PRIMARY KEY, 
	nome VARCHAR (40) NOT NULL, 
	endereço VARCHAR (40) NOT NULL, 
	cidade VARCHAR (40) NOT NULL
);


INSERT INTO 
	`aluno` (`RA`, `nome`) 
VALUES
	(1, 'Eduardo'),
	(2, 'Marcelo'),
	(3, 'João');


CREATE TABLE disciplinas (
	COD_DISC VARCHAR (40) NOT NULL PRIMARY KEY, 
	nome_disc VARCHAR (40) NOT NULL, 
	carga_hor TIME NOT NULL
);


INSERT INTO
	`disciplinas` (`COD_DISC`, `nome_disc`) 
VALUES
	('BD', 'Banco de Dados'),
	('MT', 'Matemática');

CREATE TABLE professores (
	COD_PROF INT (11) NOT NULL PRIMARY KEY, 
	nome VARCHAR (40) NOT NULL, 
	endereço VARCHAR (40) NOT NULL,
	cidade VARCHAR (40) NOT NULL
);

INSERT INTO 
	`professores` (`COD_PROF`, `nome`) 
VALUES
	(1, 'Paulo Junior'),
	(2, 'Maria Eduarda');


CREATE TABLE turma (
	COD_TURMA INT (11) NOT NULL PRIMARY KEY,
	ANO YEAR NOT NULL,
	horário TIME NOT NULL,
	COD_DISC VARCHAR (40) NOT NULL,
	COD_PROF INT (11) NOT NULL,
	FOREIGN KEY (COD_DISC) REFERENCES disciplinas (COD_DISC),
	FOREIGN KEY (COD_PROF) REFERENCES professores (COD_PROF)
);


INSERT INTO 
	`turma` (`COD_TURMA`, `COD_PROF`, `COD_DISC`, `ANO`) 
VALUES
	(1, 1, 'BD', 2010),
	(2, 2, 'MT', 2010);


CREATE TABLE historico (
	freqüência VARCHAR (40) NOT NULL,
	nota INT (11) NOT NULL,
	RA INT (11) NOT NULL,
	COD_DISC VARCHAR (40) NOT NULL,
	COD_TURMA INT (11) NOT NULL,
	ANO YEAR NOT NULL,
	COD_PROF INT (11) NOT NULL,
	FOREIGN KEY (RA) REFERENCES aluno (RA),
	FOREIGN KEY (COD_DISC) REFERENCES disciplinas (COD_DISC),
	FOREIGN KEY (COD_TURMA) REFERENCES turma (COD_TURMA),
	FOREIGN KEY (ANO) REFERENCES turma (ANO),
	FOREIGN KEY (COD_PROF) REFERENCES professores (COD_PROF)
);


INSERT INTO 
	`historico` (`RA`, `nota`, `COD_DISC`, `ANO`, `COD_PROF`) 
VALUES
	(1, 4, 'BD', 2010, 1),
	(2, 3, 'BD', 2010, 1),
	(3, 8, 'BD', 2010, 1);
	
	
/* 1. Encontre o RA dos alunos com nota em BD em 2010 menor que 5 (obs: BD = código da disciplinas). */
SELECT RA
FROM historico
WHERE COD_DISC='BD' AND ANO=2010 AND nota <5

/* 2. Forneça o RA, nome e nota dos alunos com nota menor que 5 em BD em 2010. */
SELECT a.RA, a.NOME, h.nota
from HISTORICO h, ALUNO a
where cod_disc='BD' and ano=2010 and nota <5 and a.RA=h.RA

/* 3. Forneça o nome dos professores de BD em 2010. */
SELECT distinct(p.NOME)
from PROFESSORES p, TURMA t
where p.COD_PROF=t.COD_PROF and t.ANO=2010 and t.COD_DISC='BD'

/* 4. Obtenha o nome e RA dos alunos do professor em 2010. */
SELECT distinct a.NOME, a.RA
from ALUNO a, PROFESSORES p, HISTORICO h
where h.RA=a.RA and h.COD_PROF = p.COD_PROF
and h.ANO = 2010