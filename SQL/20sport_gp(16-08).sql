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


-- Copiando estrutura do banco de dados para 20sport_gp(16-08)
CREATE DATABASE IF NOT EXISTS `20sport_gp(16-08)` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `20sport_gp(16-08)`;

-- Copiando estrutura para tabela 20sport_gp(16-08).marcacao
CREATE TABLE IF NOT EXISTS `marcacao` (
  `mar_cod` int(11) NOT NULL,
  `mar_datavaga` datetime DEFAULT NULL,
  `mar_pagmensal` int(11) DEFAULT NULL,
  `des_nome` varchar(50) DEFAULT NULL,
  `rec_notaf` int(11) DEFAULT NULL,
  PRIMARY KEY (`mar_cod`),
  KEY `FK__recinto desportivo` (`des_nome`),
  KEY `FK_marcacao_recibo` (`rec_notaf`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 20sport_gp(16-08).marcacao: 0 rows
/*!40000 ALTER TABLE `marcacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `marcacao` ENABLE KEYS */;

-- Copiando estrutura para tabela 20sport_gp(16-08).recibo
CREATE TABLE IF NOT EXISTS `recibo` (
  `rec_notaf` int(11) NOT NULL,
  `soc_cod` int(11) NOT NULL,
  `rec_valorpago` int(11) DEFAULT NULL,
  `rec_periodo` datetime DEFAULT NULL,
  PRIMARY KEY (`rec_notaf`,`soc_cod`),
  KEY `FK_recibo_socio` (`soc_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 20sport_gp(16-08).recibo: 0 rows
/*!40000 ALTER TABLE `recibo` DISABLE KEYS */;
/*!40000 ALTER TABLE `recibo` ENABLE KEYS */;

-- Copiando estrutura para tabela 20sport_gp(16-08).recinto desportivo
CREATE TABLE IF NOT EXISTS `recinto desportivo` (
  `des_nome` varchar(50) NOT NULL,
  `des_desc` varchar(50) DEFAULT NULL,
  `des_horario` time DEFAULT NULL,
  `des_vagas` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`des_nome`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 20sport_gp(16-08).recinto desportivo: 0 rows
/*!40000 ALTER TABLE `recinto desportivo` DISABLE KEYS */;
/*!40000 ALTER TABLE `recinto desportivo` ENABLE KEYS */;

-- Copiando estrutura para tabela 20sport_gp(16-08).socio
CREATE TABLE IF NOT EXISTS `socio` (
  `soc_cod` int(11) NOT NULL,
  `soc_nome` varchar(50) DEFAULT NULL,
  `soc_dataadmis` datetime DEFAULT NULL,
  `soc_numident` int(11) DEFAULT NULL,
  `soc_datanasc` date DEFAULT NULL,
  `soc_rua` varchar(50) DEFAULT NULL,
  `soc_codpostal` int(11) DEFAULT NULL,
  `soc_localidade` varchar(50) DEFAULT NULL,
  `soc_telefone` int(13) DEFAULT NULL,
  `mar_cod` int(11) DEFAULT NULL,
  PRIMARY KEY (`soc_cod`),
  KEY `FK__marcacao` (`mar_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 20sport_gp(16-08).socio: 0 rows
/*!40000 ALTER TABLE `socio` DISABLE KEYS */;
/*!40000 ALTER TABLE `socio` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
