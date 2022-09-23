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


-- Copiando estrutura do banco de dados para 15loja_gp
CREATE DATABASE IF NOT EXISTS `15loja_gp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `15loja_gp`;

-- Copiando estrutura para tabela 15loja_gp.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `cli_id` int(10) NOT NULL,
  `cli_nome` char(50) DEFAULT NULL,
  `cli_end` char(50) DEFAULT NULL,
  `cli_end_cid` char(20) DEFAULT NULL,
  `cli_end_cep` char(8) DEFAULT NULL,
  `cli_telefone` char(10) DEFAULT NULL,
  `cli_per_descon` decimal(2,0) DEFAULT NULL,
  `est_cod` char(2) DEFAULT NULL,
  PRIMARY KEY (`cli_id`),
  KEY `FK_cliente_estado` (`est_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 15loja_gp.cliente: 0 rows
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Copiando estrutura para tabela 15loja_gp.estado
CREATE TABLE IF NOT EXISTS `estado` (
  `est_cod` char(2) NOT NULL,
  `est_nome` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`est_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 15loja_gp.estado: 0 rows
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;

-- Copiando estrutura para tabela 15loja_gp.item
CREATE TABLE IF NOT EXISTS `item` (
  `ped_identifi` int(11) NOT NULL,
  `pro_cod` smallint(6) NOT NULL,
  `ite_quant` smallint(6) DEFAULT NULL,
  `ite_val_unitario` double(5,2) DEFAULT NULL,
  `ite_val_total` double(5,2) DEFAULT NULL,
  PRIMARY KEY (`ped_identifi`,`pro_cod`),
  KEY `FK__produto` (`pro_cod`),
  KEY `FK1_pedido` (`ped_identifi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 15loja_gp.item: 0 rows
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
/*!40000 ALTER TABLE `item` ENABLE KEYS */;

-- Copiando estrutura para tabela 15loja_gp.pedido
CREATE TABLE IF NOT EXISTS `pedido` (
  `ped_identifi` int(11) NOT NULL,
  `ped_tipo` enum('A vista','A prazo de 30 dias') DEFAULT NULL,
  `ped_dataentr` date DEFAULT NULL,
  `ped_valtotal` decimal(7,2) DEFAULT NULL,
  `ped_dt_embarq` date DEFAULT NULL,
  `cli_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`ped_identifi`),
  KEY `FK_pedido_cliente` (`cli_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 15loja_gp.pedido: 0 rows
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;

-- Copiando estrutura para tabela 15loja_gp.produto
CREATE TABLE IF NOT EXISTS `produto` (
  `pro_cod` smallint(6) NOT NULL,
  `pro_nome` char(40) DEFAULT NULL,
  `pro_preco` double(5,2) DEFAULT NULL,
  `ve_prod_cod` char(3) DEFAULT NULL,
  PRIMARY KEY (`pro_cod`) USING BTREE,
  KEY `FK__ve_produto` (`ve_prod_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 15loja_gp.produto: 0 rows
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;

-- Copiando estrutura para tabela 15loja_gp.versao_produto
CREATE TABLE IF NOT EXISTS `versao_produto` (
  `ve_prod_cod` char(3) NOT NULL,
  `ve_prod_descr` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`ve_prod_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 15loja_gp.versao_produto: 0 rows
/*!40000 ALTER TABLE `versao_produto` DISABLE KEYS */;
/*!40000 ALTER TABLE `versao_produto` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
