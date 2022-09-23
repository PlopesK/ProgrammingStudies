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


-- Copiando estrutura do banco de dados para 07empresa
CREATE DATABASE IF NOT EXISTS `07empresa` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `07empresa`;

-- Copiando estrutura para tabela 07empresa.departamento
CREATE TABLE IF NOT EXISTS `departamento` (
  `dep_cod` int(11) NOT NULL AUTO_INCREMENT,
  `dep_setor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dep_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 07empresa.departamento: 0 rows
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;

-- Copiando estrutura para tabela 07empresa.deposito
CREATE TABLE IF NOT EXISTS `deposito` (
  `dpt_num` int(11) NOT NULL AUTO_INCREMENT,
  `dpt_endereco` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dpt_num`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 07empresa.deposito: 0 rows
/*!40000 ALTER TABLE `deposito` DISABLE KEYS */;
/*!40000 ALTER TABLE `deposito` ENABLE KEYS */;

-- Copiando estrutura para tabela 07empresa.fornecedor
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `for_cod` int(11) NOT NULL AUTO_INCREMENT,
  `for_endereco` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`for_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 07empresa.fornecedor: 0 rows
/*!40000 ALTER TABLE `fornecedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `fornecedor` ENABLE KEYS */;

-- Copiando estrutura para tabela 07empresa.funcionario
CREATE TABLE IF NOT EXISTS `funcionario` (
  `fun_cod` int(11) NOT NULL AUTO_INCREMENT,
  `fun_salario` int(11) DEFAULT NULL,
  `fun_telefone` int(11) DEFAULT NULL,
  PRIMARY KEY (`fun_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 07empresa.funcionario: 0 rows
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;

-- Copiando estrutura para tabela 07empresa.peca
CREATE TABLE IF NOT EXISTS `peca` (
  `pec_cod` int(11) NOT NULL AUTO_INCREMENT,
  `pec_cor` varchar(50) DEFAULT NULL,
  `pec_peso` int(11) DEFAULT NULL,
  PRIMARY KEY (`pec_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 07empresa.peca: 0 rows
/*!40000 ALTER TABLE `peca` DISABLE KEYS */;
/*!40000 ALTER TABLE `peca` ENABLE KEYS */;

-- Copiando estrutura para tabela 07empresa.projeto
CREATE TABLE IF NOT EXISTS `projeto` (
  `pro_num` int(11) NOT NULL AUTO_INCREMENT,
  `pro_orcamento` int(11) DEFAULT NULL,
  PRIMARY KEY (`pro_num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 07empresa.projeto: 0 rows
/*!40000 ALTER TABLE `projeto` DISABLE KEYS */;
/*!40000 ALTER TABLE `projeto` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
