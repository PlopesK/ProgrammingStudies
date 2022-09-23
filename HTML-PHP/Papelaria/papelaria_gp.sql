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


-- Copiando estrutura do banco de dados para papelaria_gp
CREATE DATABASE IF NOT EXISTS `papelaria_gp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `papelaria_gp`;

-- Copiando estrutura para tabela papelaria_gp.produto
CREATE TABLE IF NOT EXISTS `produto` (
  `pro_codigo` varchar(10) NOT NULL,
  `pro_nome` varchar(20) NOT NULL,
  `pro_preco` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`pro_codigo`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela papelaria_gp.produto: 0 rows
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
