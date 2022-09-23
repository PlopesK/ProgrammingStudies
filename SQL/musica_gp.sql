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


-- Copiando estrutura do banco de dados para 08musica
CREATE DATABASE IF NOT EXISTS `08musica` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `08musica`;

-- Copiando estrutura para tabela 08musica.disco
CREATE TABLE IF NOT EXISTS `disco` (
  `dis_iden` int(11) NOT NULL AUTO_INCREMENT,
  `dis_titulo` varchar(50) DEFAULT NULL,
  `dis_data` date DEFAULT NULL,
  `dis_formato` varchar(50) DEFAULT NULL,
  `mus_num` int(11) DEFAULT NULL,
  `msc_titulo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dis_iden`),
  KEY `FK_disco_musico` (`mus_num`),
  KEY `FK_disco_musica` (`msc_titulo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 08musica.disco: 0 rows
/*!40000 ALTER TABLE `disco` DISABLE KEYS */;
/*!40000 ALTER TABLE `disco` ENABLE KEYS */;

-- Copiando estrutura para tabela 08musica.instrumento
CREATE TABLE IF NOT EXISTS `instrumento` (
  `ins_cod` int(11) NOT NULL AUTO_INCREMENT,
  `ins_nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ins_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 08musica.instrumento: 0 rows
/*!40000 ALTER TABLE `instrumento` DISABLE KEYS */;
/*!40000 ALTER TABLE `instrumento` ENABLE KEYS */;

-- Copiando estrutura para tabela 08musica.musica
CREATE TABLE IF NOT EXISTS `musica` (
  `msc_titulo` varchar(50) NOT NULL,
  `msc_autor` varchar(50) DEFAULT NULL,
  `dis_iden` int(11) DEFAULT NULL,
  PRIMARY KEY (`msc_titulo`),
  KEY `FK__disco` (`dis_iden`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 08musica.musica: 0 rows
/*!40000 ALTER TABLE `musica` DISABLE KEYS */;
/*!40000 ALTER TABLE `musica` ENABLE KEYS */;

-- Copiando estrutura para tabela 08musica.musico
CREATE TABLE IF NOT EXISTS `musico` (
  `mus_num` int(11) NOT NULL AUTO_INCREMENT,
  `mus_nome` varchar(50) DEFAULT NULL,
  `mus_ender` varchar(50) DEFAULT NULL,
  `mus_tele` int(11) DEFAULT NULL,
  `ins_cod` int(11) DEFAULT NULL,
  `dis_iden` int(11) DEFAULT NULL,
  PRIMARY KEY (`mus_num`),
  KEY `FK_musico_instrumento` (`ins_cod`),
  KEY `FK_musico_disco` (`dis_iden`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 08musica.musico: 0 rows
/*!40000 ALTER TABLE `musico` DISABLE KEYS */;
/*!40000 ALTER TABLE `musico` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
