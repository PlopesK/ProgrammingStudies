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


-- Copiando estrutura do banco de dados para 17empresa_gp(26-07)
CREATE DATABASE IF NOT EXISTS `17empresa_gp(26-07)` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `17empresa_gp(26-07)`;

-- Copiando estrutura para tabela 17empresa_gp(26-07).departamento
CREATE TABLE IF NOT EXISTS `departamento` (
  `dep_cod` int(11) NOT NULL AUTO_INCREMENT,
  `dep_nome` varchar(50) DEFAULT NULL,
  `dnt_cod` int(11) DEFAULT NULL,
  `dep_datainigeren` datetime DEFAULT NULL,
  PRIMARY KEY (`dep_cod`),
  KEY `FK__dependente` (`dnt_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 17empresa_gp(26-07).departamento: 0 rows
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;

-- Copiando estrutura para tabela 17empresa_gp(26-07).dependente
CREATE TABLE IF NOT EXISTS `dependente` (
  `dnt_cod` int(11) NOT NULL,
  `emp_nome` varchar(50) DEFAULT NULL,
  `emp_sexo` varchar(50) DEFAULT NULL,
  `emp_datanasc` date DEFAULT NULL,
  `dnt_relacao` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dnt_cod`),
  KEY `FK_dependente_empregado` (`emp_nome`,`emp_sexo`,`emp_datanasc`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 17empresa_gp(26-07).dependente: 0 rows
/*!40000 ALTER TABLE `dependente` DISABLE KEYS */;
/*!40000 ALTER TABLE `dependente` ENABLE KEYS */;

-- Copiando estrutura para tabela 17empresa_gp(26-07).empregado
CREATE TABLE IF NOT EXISTS `empregado` (
  `emp_cod` int(11) NOT NULL AUTO_INCREMENT,
  `emp_nome` varchar(50) DEFAULT NULL,
  `emp_sexo` varchar(50) DEFAULT NULL,
  `emp_datanasc` date DEFAULT NULL,
  `emp_endereco` varchar(50) DEFAULT NULL,
  `emp_salario` double(5,2) DEFAULT NULL,
  `dnt_cod` int(11) DEFAULT NULL,
  `dep_cod` int(11) DEFAULT NULL,
  PRIMARY KEY (`emp_cod`),
  KEY `FK_empregado_dependente` (`dnt_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 17empresa_gp(26-07).empregado: 0 rows
/*!40000 ALTER TABLE `empregado` DISABLE KEYS */;
/*!40000 ALTER TABLE `empregado` ENABLE KEYS */;

-- Copiando estrutura para tabela 17empresa_gp(26-07).projeto
CREATE TABLE IF NOT EXISTS `projeto` (
  `pro_cod` int(11) NOT NULL AUTO_INCREMENT,
  `pro_titulo` varchar(50) DEFAULT NULL,
  `dep_cod` int(11) DEFAULT NULL,
  PRIMARY KEY (`pro_cod`) USING BTREE,
  KEY `FK__departamento` (`dep_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 17empresa_gp(26-07).projeto: 0 rows
/*!40000 ALTER TABLE `projeto` DISABLE KEYS */;
/*!40000 ALTER TABLE `projeto` ENABLE KEYS */;

-- Copiando estrutura para tabela 17empresa_gp(26-07).trabalhaem
CREATE TABLE IF NOT EXISTS `trabalhaem` (
  `emp_cod` int(11) NOT NULL,
  `pro_cod` int(11) NOT NULL,
  `tra_horas` time DEFAULT NULL,
  PRIMARY KEY (`emp_cod`,`pro_cod`),
  KEY `FK__projeto` (`pro_cod`),
  KEY `FK1_empregado` (`emp_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 17empresa_gp(26-07).trabalhaem: 0 rows
/*!40000 ALTER TABLE `trabalhaem` DISABLE KEYS */;
/*!40000 ALTER TABLE `trabalhaem` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
