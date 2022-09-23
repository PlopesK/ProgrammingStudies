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


-- Copiando estrutura do banco de dados para 11loja
CREATE DATABASE IF NOT EXISTS `11loja` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `11loja`;

-- Copiando estrutura para tabela 11loja.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `cli_cod` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nome` varchar(50) DEFAULT NULL,
  `cli_telefone` int(11) DEFAULT NULL,
  `cli_email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cli_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 11loja.cliente: 0 rows
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Copiando estrutura para tabela 11loja.compra
CREATE TABLE IF NOT EXISTS `compra` (
  `com_cod` int(11) NOT NULL AUTO_INCREMENT,
  `cli_cod` int(11) DEFAULT NULL,
  `jog_cod` int(11) NOT NULL,
  `com_precott` float DEFAULT NULL,
  PRIMARY KEY (`com_cod`,`jog_cod`),
  KEY `FK__cliente` (`cli_cod`),
  KEY `FK_compra_jogo` (`jog_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 11loja.compra: 0 rows
/*!40000 ALTER TABLE `compra` DISABLE KEYS */;
/*!40000 ALTER TABLE `compra` ENABLE KEYS */;

-- Copiando estrutura para tabela 11loja.historico
CREATE TABLE IF NOT EXISTS `historico` (
  `cli_cod` int(11) NOT NULL,
  `cli_email` varchar(50) DEFAULT NULL,
  `jog_cod` int(11) NOT NULL,
  `jog_preco` float NOT NULL,
  `his_data` datetime DEFAULT NULL,
  PRIMARY KEY (`cli_cod`,`jog_cod`),
  KEY `FK__jogo` (`jog_cod`,`jog_preco`),
  KEY `FK_historico_cliente` (`cli_cod`,`cli_email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 11loja.historico: 0 rows
/*!40000 ALTER TABLE `historico` DISABLE KEYS */;
/*!40000 ALTER TABLE `historico` ENABLE KEYS */;

-- Copiando estrutura para tabela 11loja.jogo
CREATE TABLE IF NOT EXISTS `jogo` (
  `jog_cod` int(11) NOT NULL AUTO_INCREMENT,
  `jog_empresa` varchar(50) DEFAULT NULL,
  `jog_preco` float DEFAULT NULL,
  PRIMARY KEY (`jog_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 11loja.jogo: 0 rows
/*!40000 ALTER TABLE `jogo` DISABLE KEYS */;
/*!40000 ALTER TABLE `jogo` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
