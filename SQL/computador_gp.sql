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


-- Copiando estrutura do banco de dados para 13computador-gp
CREATE DATABASE IF NOT EXISTS `13computador-gp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `13computador-gp`;

-- Copiando estrutura para tabela 13computador-gp.equipamento
CREATE TABLE IF NOT EXISTS `equipamento` (
  `ped_num` int(11) NOT NULL,
  `equ_dono` varchar(50) NOT NULL,
  `equ_config` varchar(50) DEFAULT NULL,
  `equ_defeito` varchar(50) DEFAULT NULL,
  `equ_marca` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ped_num`,`equ_dono`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 13computador-gp.equipamento: 0 rows
/*!40000 ALTER TABLE `equipamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `equipamento` ENABLE KEYS */;

-- Copiando estrutura para tabela 13computador-gp.especialidade
CREATE TABLE IF NOT EXISTS `especialidade` (
  `esp_desc` varchar(50) NOT NULL,
  `esp_salario` float DEFAULT NULL,
  PRIMARY KEY (`esp_desc`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 13computador-gp.especialidade: 0 rows
/*!40000 ALTER TABLE `especialidade` DISABLE KEYS */;
/*!40000 ALTER TABLE `especialidade` ENABLE KEYS */;

-- Copiando estrutura para tabela 13computador-gp.pagamento
CREATE TABLE IF NOT EXISTS `pagamento` (
  `pag_orcamen` float NOT NULL,
  `pag_pago` varchar(50) DEFAULT NULL,
  `pag_naopago` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pag_orcamen`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 13computador-gp.pagamento: 0 rows
/*!40000 ALTER TABLE `pagamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `pagamento` ENABLE KEYS */;

-- Copiando estrutura para tabela 13computador-gp.pedido
CREATE TABLE IF NOT EXISTS `pedido` (
  `ped_num` int(11) NOT NULL AUTO_INCREMENT,
  `ser_cod` int(11) NOT NULL,
  `ped_data` date DEFAULT NULL,
  `equ_dono` varchar(50) DEFAULT NULL,
  `pag_orcamen` float DEFAULT NULL,
  PRIMARY KEY (`ped_num`,`ser_cod`),
  KEY `FK__equipamento` (`equ_dono`),
  KEY `FK_pedido_servico` (`ser_cod`),
  KEY `FK_pedido_pagamento` (`pag_orcamen`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 13computador-gp.pedido: 0 rows
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;

-- Copiando estrutura para tabela 13computador-gp.servico
CREATE TABLE IF NOT EXISTS `servico` (
  `ser_cod` int(11) NOT NULL AUTO_INCREMENT,
  `ser_entrada` float DEFAULT NULL,
  `ser_bancada` varchar(50) DEFAULT NULL,
  `ser_servico` varchar(50) DEFAULT NULL,
  `ser_nvpeca` varchar(50) DEFAULT NULL,
  `tec_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ser_cod`),
  KEY `FK__tecnico` (`tec_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 13computador-gp.servico: 0 rows
/*!40000 ALTER TABLE `servico` DISABLE KEYS */;
/*!40000 ALTER TABLE `servico` ENABLE KEYS */;

-- Copiando estrutura para tabela 13computador-gp.tecnico
CREATE TABLE IF NOT EXISTS `tecnico` (
  `tec_id` int(11) NOT NULL AUTO_INCREMENT,
  `esp_desc` varchar(50) NOT NULL,
  `ser_cod` int(11) DEFAULT NULL,
  PRIMARY KEY (`tec_id`,`esp_desc`),
  KEY `FK_tecnico_especialidade` (`esp_desc`),
  KEY `FK_tecnico_servico` (`ser_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 13computador-gp.tecnico: 0 rows
/*!40000 ALTER TABLE `tecnico` DISABLE KEYS */;
/*!40000 ALTER TABLE `tecnico` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
