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


-- Copiando estrutura do banco de dados para academia_gp
CREATE DATABASE IF NOT EXISTS `academia_gp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `academia_gp`;

-- Copiando estrutura para tabela academia_gp.aluno
CREATE TABLE IF NOT EXISTS `aluno` (
  `alu_rg` varchar(50) NOT NULL,
  `alu_nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`alu_rg`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela academia_gp.aluno: 0 rows
/*!40000 ALTER TABLE `aluno` DISABLE KEYS */;
/*!40000 ALTER TABLE `aluno` ENABLE KEYS */;

-- Copiando estrutura para tabela academia_gp.tipo
CREATE TABLE IF NOT EXISTS `tipo` (
  `tip_cod` int(11) NOT NULL AUTO_INCREMENT,
  `tip_desc` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`tip_cod`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela academia_gp.tipo: 2 rows
/*!40000 ALTER TABLE `tipo` DISABLE KEYS */;
INSERT INTO `tipo` (`tip_cod`, `tip_desc`) VALUES
	(1, 'Musculação'),
	(2, 'Pilates');
/*!40000 ALTER TABLE `tipo` ENABLE KEYS */;

-- Copiando estrutura para tabela academia_gp.treinador
CREATE TABLE IF NOT EXISTS `treinador` (
  `tre_rg` varchar(50) NOT NULL,
  `tre_nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`tre_rg`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela academia_gp.treinador: 0 rows
/*!40000 ALTER TABLE `treinador` DISABLE KEYS */;
/*!40000 ALTER TABLE `treinador` ENABLE KEYS */;

-- Copiando estrutura para tabela academia_gp.treino
CREATE TABLE IF NOT EXISTS `treino` (
  `tno_cod` int(11) NOT NULL,
  `tip_cod` int(11) NOT NULL,
  `tre_rg` varchar(50) DEFAULT NULL,
  `alu_rg` varchar(50) DEFAULT NULL,
  `tno_horario` time DEFAULT NULL,
  `tno_data` date DEFAULT NULL,
  PRIMARY KEY (`tno_cod`),
  KEY `FK__tipo` (`tip_cod`),
  KEY `FK_treino_treinador` (`tre_rg`),
  KEY `FK_treino_aluno` (`alu_rg`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela academia_gp.treino: 0 rows
/*!40000 ALTER TABLE `treino` DISABLE KEYS */;
/*!40000 ALTER TABLE `treino` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
