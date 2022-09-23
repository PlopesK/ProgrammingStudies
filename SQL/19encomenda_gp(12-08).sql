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


-- Copiando estrutura do banco de dados para 19encomenda_gp(12-08)
CREATE DATABASE IF NOT EXISTS `19encomenda_gp(12-08)` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `19encomenda_gp(12-08)`;

-- Copiando estrutura para tabela 19encomenda_gp(12-08).encomenda
CREATE TABLE IF NOT EXISTS `encomenda` (
  `enc_notaf` int(11) NOT NULL,
  `enc_clicpf` int(11) DEFAULT NULL,
  `enc_clinome` int(11) DEFAULT NULL,
  `enc_conteudo` varchar(50) DEFAULT NULL,
  `enc_valors` int(11) DEFAULT NULL,
  PRIMARY KEY (`enc_notaf`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 19encomenda_gp(12-08).encomenda: 0 rows
/*!40000 ALTER TABLE `encomenda` DISABLE KEYS */;
/*!40000 ALTER TABLE `encomenda` ENABLE KEYS */;

-- Copiando estrutura para tabela 19encomenda_gp(12-08).filial
CREATE TABLE IF NOT EXISTS `filial` (
  `fil_cod` int(11) NOT NULL,
  `enc_notaf` int(11) DEFAULT NULL,
  `rot_local` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`fil_cod`),
  KEY `FK_filial_encomenda` (`enc_notaf`),
  KEY `FK_filial_rota` (`rot_local`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 19encomenda_gp(12-08).filial: 0 rows
/*!40000 ALTER TABLE `filial` DISABLE KEYS */;
/*!40000 ALTER TABLE `filial` ENABLE KEYS */;

-- Copiando estrutura para tabela 19encomenda_gp(12-08).rota
CREATE TABLE IF NOT EXISTS `rota` (
  `rot_local` varchar(50) NOT NULL,
  `fil_cod` int(11) DEFAULT NULL,
  `vei_cod` int(11) DEFAULT NULL,
  PRIMARY KEY (`rot_local`),
  KEY `FK_rota_filial` (`fil_cod`),
  KEY `FK_rota_veiculo` (`vei_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 19encomenda_gp(12-08).rota: 0 rows
/*!40000 ALTER TABLE `rota` DISABLE KEYS */;
/*!40000 ALTER TABLE `rota` ENABLE KEYS */;

-- Copiando estrutura para tabela 19encomenda_gp(12-08).veiculo
CREATE TABLE IF NOT EXISTS `veiculo` (
  `vei_cod` int(11) NOT NULL,
  `vei_motcpf` int(11) DEFAULT NULL,
  `vei_motnome` varchar(50) DEFAULT NULL,
  `rot_local` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`vei_cod`),
  KEY `FK_veiculo_rota` (`rot_local`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 19encomenda_gp(12-08).veiculo: 0 rows
/*!40000 ALTER TABLE `veiculo` DISABLE KEYS */;
/*!40000 ALTER TABLE `veiculo` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
