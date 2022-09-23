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


-- Copiando estrutura do banco de dados para 09biblioteca
CREATE DATABASE IF NOT EXISTS `09biblioteca` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `09biblioteca`;

-- Copiando estrutura para tabela 09biblioteca.autor
CREATE TABLE IF NOT EXISTS `autor` (
  `aut_num` int(11) NOT NULL AUTO_INCREMENT,
  `aut_nome` varchar(50) DEFAULT NULL,
  `aut_datnasc` date DEFAULT NULL,
  `aut_pais` varchar(50) DEFAULT NULL,
  `aut_biografia` int(140) DEFAULT NULL,
  PRIMARY KEY (`aut_num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 09biblioteca.autor: 0 rows
/*!40000 ALTER TABLE `autor` DISABLE KEYS */;
/*!40000 ALTER TABLE `autor` ENABLE KEYS */;

-- Copiando estrutura para tabela 09biblioteca.edicao
CREATE TABLE IF NOT EXISTS `edicao` (
  `edc_isbn` int(13) NOT NULL AUTO_INCREMENT,
  `edc_preco` int(11) DEFAULT NULL,
  `edc_ano` year(4) DEFAULT NULL,
  `edc_numpag` int(11) DEFAULT NULL,
  `edc_estoque` int(11) DEFAULT NULL,
  `liv_cod` int(11) DEFAULT NULL,
  `edt_identi` int(11) DEFAULT NULL,
  PRIMARY KEY (`edc_isbn`),
  KEY `FK__livro` (`liv_cod`),
  KEY `FK__editora` (`edt_identi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 09biblioteca.edicao: 0 rows
/*!40000 ALTER TABLE `edicao` DISABLE KEYS */;
/*!40000 ALTER TABLE `edicao` ENABLE KEYS */;

-- Copiando estrutura para tabela 09biblioteca.editora
CREATE TABLE IF NOT EXISTS `editora` (
  `edt_identi` int(11) NOT NULL AUTO_INCREMENT,
  `edt_nome` varchar(50) DEFAULT NULL,
  `edt_ender` varchar(50) DEFAULT NULL,
  `edt_tele` int(13) DEFAULT NULL,
  PRIMARY KEY (`edt_identi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 09biblioteca.editora: 0 rows
/*!40000 ALTER TABLE `editora` DISABLE KEYS */;
/*!40000 ALTER TABLE `editora` ENABLE KEYS */;

-- Copiando estrutura para tabela 09biblioteca.livro
CREATE TABLE IF NOT EXISTS `livro` (
  `liv_cod` int(11) NOT NULL AUTO_INCREMENT,
  `liv_nome` varchar(50) DEFAULT NULL,
  `liv_lingua` varchar(50) DEFAULT NULL,
  `liv_ano` year(4) DEFAULT NULL,
  `aut_num` int(11) DEFAULT NULL,
  `edc_isbn` int(11) DEFAULT NULL,
  PRIMARY KEY (`liv_cod`),
  KEY `FK_livro_autor` (`aut_num`),
  KEY `FK_livro_edicao` (`edc_isbn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 09biblioteca.livro: 0 rows
/*!40000 ALTER TABLE `livro` DISABLE KEYS */;
/*!40000 ALTER TABLE `livro` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
