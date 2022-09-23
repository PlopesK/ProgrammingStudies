-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.1.54-community-log - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para 23aluno_gp
CREATE DATABASE IF NOT EXISTS `23aluno_gp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `23aluno_gp`;

-- Copiando estrutura para tabela 23aluno_gp.aluno
CREATE TABLE IF NOT EXISTS `aluno` (
  `aluno_cpf` int(11) NOT NULL,
  `aluno_matricula` int(11) NOT NULL,
  `aluno_nome` varchar(50) DEFAULT NULL,
  `numero_turma` int(11) DEFAULT NULL,
  PRIMARY KEY (`aluno_cpf`),
  KEY `FK_aluno_turma` (`numero_turma`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 23aluno_gp.aluno: 0 rows
/*!40000 ALTER TABLE `aluno` DISABLE KEYS */;
/*!40000 ALTER TABLE `aluno` ENABLE KEYS */;

-- Copiando estrutura para tabela 23aluno_gp.disciplina
CREATE TABLE IF NOT EXISTS `disciplina` (
  `disciplina_codigo` int(11) NOT NULL,
  `disciplina_nome` varchar(50) DEFAULT NULL,
  `disciplina_numeroCreditos` int(11) DEFAULT NULL,
  PRIMARY KEY (`disciplina_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 23aluno_gp.disciplina: 0 rows
/*!40000 ALTER TABLE `disciplina` DISABLE KEYS */;
/*!40000 ALTER TABLE `disciplina` ENABLE KEYS */;

-- Copiando estrutura para tabela 23aluno_gp.professor
CREATE TABLE IF NOT EXISTS `professor` (
  `professor_cpf` int(11) NOT NULL,
  `professor_nome` varchar(50) DEFAULT NULL,
  `professor_salario` decimal(5,2) DEFAULT NULL,
  `numero_turma` int(11) DEFAULT NULL,
  `disciplina_codigo` int(11) DEFAULT NULL,
  PRIMARY KEY (`professor_cpf`),
  KEY `FK_professor_turma` (`numero_turma`),
  KEY `FK_professor_disciplina` (`disciplina_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 23aluno_gp.professor: 0 rows
/*!40000 ALTER TABLE `professor` DISABLE KEYS */;
/*!40000 ALTER TABLE `professor` ENABLE KEYS */;

-- Copiando estrutura para tabela 23aluno_gp.turma
CREATE TABLE IF NOT EXISTS `turma` (
  `numero_turma` int(11) NOT NULL,
  `sala_turma` varchar(50) DEFAULT NULL,
  `horario_turma` time DEFAULT NULL,
  `disciplina_codigo` int(11) DEFAULT NULL,
  PRIMARY KEY (`numero_turma`),
  KEY `FK_turma_disciplina` (`disciplina_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 23aluno_gp.turma: 0 rows
/*!40000 ALTER TABLE `turma` DISABLE KEYS */;
/*!40000 ALTER TABLE `turma` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
