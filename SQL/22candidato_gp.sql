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


-- Copiando estrutura do banco de dados para 22candidato_gp
CREATE DATABASE IF NOT EXISTS `22candidato_gp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `22candidato_gp`;

-- Copiando estrutura para tabela 22candidato_gp.candidato
CREATE TABLE IF NOT EXISTS `candidato` (
  `num_candidato` int(11) NOT NULL,
  `nome_candidato` varchar(50) DEFAULT NULL,
  `cod_cargo` int(11) NOT NULL,
  `cod_partido` int(11) NOT NULL,
  PRIMARY KEY (`num_candidato`),
  KEY `FK_candidato_cargo` (`cod_cargo`),
  KEY `FK_candidato_partido` (`cod_partido`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 22candidato_gp.candidato: 0 rows
/*!40000 ALTER TABLE `candidato` DISABLE KEYS */;
/*!40000 ALTER TABLE `candidato` ENABLE KEYS */;

-- Copiando estrutura para tabela 22candidato_gp.cargo
CREATE TABLE IF NOT EXISTS `cargo` (
  `cod_cargo` int(11) NOT NULL,
  `nome_cargo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cod_cargo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 22candidato_gp.cargo: 0 rows
/*!40000 ALTER TABLE `cargo` DISABLE KEYS */;
/*!40000 ALTER TABLE `cargo` ENABLE KEYS */;

-- Copiando estrutura para tabela 22candidato_gp.partido
CREATE TABLE IF NOT EXISTS `partido` (
  `cod_partido` int(11) NOT NULL,
  `nome_partido` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cod_partido`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 22candidato_gp.partido: 0 rows
/*!40000 ALTER TABLE `partido` DISABLE KEYS */;
/*!40000 ALTER TABLE `partido` ENABLE KEYS */;

-- Copiando estrutura para tabela 22candidato_gp.votacao
CREATE TABLE IF NOT EXISTS `votacao` (
  `num_zona` int(11) DEFAULT NULL,
  `num_secao` int(11) DEFAULT NULL,
  `num_candidato` int(11) DEFAULT NULL,
  `qtd_votos` int(11) DEFAULT NULL,
  `data_votacao` date DEFAULT NULL,
  KEY `FK__candidato` (`num_candidato`),
  KEY `FK_votacao_zona_secao` (`num_zona`,`num_secao`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 22candidato_gp.votacao: 0 rows
/*!40000 ALTER TABLE `votacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `votacao` ENABLE KEYS */;

-- Copiando estrutura para tabela 22candidato_gp.zona_secao
CREATE TABLE IF NOT EXISTS `zona_secao` (
  `num_zona` int(11) NOT NULL,
  `num_secao` int(11) NOT NULL,
  `nome_zona_secao` varchar(50) DEFAULT NULL,
  `qtd_eleitores` int(11) DEFAULT NULL,
  PRIMARY KEY (`num_zona`,`num_secao`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 22candidato_gp.zona_secao: 0 rows
/*!40000 ALTER TABLE `zona_secao` DISABLE KEYS */;
/*!40000 ALTER TABLE `zona_secao` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
