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


-- Copiando estrutura do banco de dados para 16empresa_gp
CREATE DATABASE IF NOT EXISTS `16empresa_gp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `16empresa_gp`;

-- Copiando estrutura para tabela 16empresa_gp.administrador
CREATE TABLE IF NOT EXISTS `administrador` (
  `adm_id` int(11) NOT NULL AUTO_INCREMENT,
  `adm_nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`adm_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 16empresa_gp.administrador: 0 rows
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;

-- Copiando estrutura para tabela 16empresa_gp.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `cli_cpf` int(11) NOT NULL,
  `cli_nome` varchar(50) DEFAULT NULL,
  `cli_telef` int(11) DEFAULT NULL,
  `cli_email` varchar(60) DEFAULT NULL,
  `cli_ender` varchar(50) DEFAULT NULL,
  `cli_datansc` date DEFAULT NULL,
  PRIMARY KEY (`cli_cpf`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 16empresa_gp.cliente: 0 rows
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Copiando estrutura para tabela 16empresa_gp.funcionario
CREATE TABLE IF NOT EXISTS `funcionario` (
  `fun_id` int(11) NOT NULL AUTO_INCREMENT,
  `fun_nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`fun_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 16empresa_gp.funcionario: 0 rows
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;

-- Copiando estrutura para tabela 16empresa_gp.pedido
CREATE TABLE IF NOT EXISTS `pedido` (
  `ped_id` int(11) NOT NULL AUTO_INCREMENT,
  `ped_dataen` datetime DEFAULT NULL,
  `ped_quant` int(11) DEFAULT NULL,
  PRIMARY KEY (`ped_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 16empresa_gp.pedido: 0 rows
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;

-- Copiando estrutura para tabela 16empresa_gp.produto
CREATE TABLE IF NOT EXISTS `produto` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_nome` varchar(50) DEFAULT NULL,
  `pro_modelo` varchar(50) DEFAULT NULL,
  `pro_preco` float DEFAULT NULL,
  `pro_marca` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 16empresa_gp.produto: 0 rows
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
