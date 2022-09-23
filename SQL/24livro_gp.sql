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


-- Copiando estrutura do banco de dados para 24livro_gp
CREATE DATABASE IF NOT EXISTS `24livro_gp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `24livro_gp`;

-- Copiando estrutura para tabela 24livro_gp.aluno
CREATE TABLE IF NOT EXISTS `aluno` (
  `alu_cod` int(11) NOT NULL,
  `alu_nome` varchar(50) DEFAULT NULL,
  `alu_endereco` varchar(50) DEFAULT NULL,
  `alu_telefone` int(11) DEFAULT NULL,
  `emp_emprestimo` date DEFAULT NULL,
  `emp_devolucao` date DEFAULT NULL,
  `liv_isbn` int(11) DEFAULT NULL,
  PRIMARY KEY (`alu_cod`),
  KEY `FK_aluno_empresta` (`emp_emprestimo`,`emp_devolucao`),
  KEY `FK_aluno_livro` (`liv_isbn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 24livro_gp.aluno: 0 rows
/*!40000 ALTER TABLE `aluno` DISABLE KEYS */;
/*!40000 ALTER TABLE `aluno` ENABLE KEYS */;

-- Copiando estrutura para tabela 24livro_gp.autor
CREATE TABLE IF NOT EXISTS `autor` (
  `aut_codigo` int(11) NOT NULL,
  `aut_nome` varchar(50) DEFAULT NULL,
  `liv_titulo` varchar(50) DEFAULT NULL,
  `esc_sequencia` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`aut_codigo`),
  KEY `FK__livro` (`liv_titulo`),
  KEY `FK__escrito` (`esc_sequencia`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 24livro_gp.autor: 0 rows
/*!40000 ALTER TABLE `autor` DISABLE KEYS */;
/*!40000 ALTER TABLE `autor` ENABLE KEYS */;

-- Copiando estrutura para tabela 24livro_gp.empresta
CREATE TABLE IF NOT EXISTS `empresta` (
  `emp_emprestimo` date DEFAULT NULL,
  `emp_devolucao` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 24livro_gp.empresta: 0 rows
/*!40000 ALTER TABLE `empresta` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresta` ENABLE KEYS */;

-- Copiando estrutura para tabela 24livro_gp.escrito
CREATE TABLE IF NOT EXISTS `escrito` (
  `esc_sequencia` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 24livro_gp.escrito: 0 rows
/*!40000 ALTER TABLE `escrito` DISABLE KEYS */;
/*!40000 ALTER TABLE `escrito` ENABLE KEYS */;

-- Copiando estrutura para tabela 24livro_gp.livro
CREATE TABLE IF NOT EXISTS `livro` (
  `liv_isbn` int(11) NOT NULL,
  `liv_titulo` varchar(50) DEFAULT NULL,
  `liv_situacao` varchar(50) DEFAULT NULL,
  `aut_codigo` int(11) DEFAULT NULL,
  PRIMARY KEY (`liv_isbn`),
  KEY `FK_livro_autor` (`aut_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 24livro_gp.livro: 0 rows
/*!40000 ALTER TABLE `livro` DISABLE KEYS */;
/*!40000 ALTER TABLE `livro` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
