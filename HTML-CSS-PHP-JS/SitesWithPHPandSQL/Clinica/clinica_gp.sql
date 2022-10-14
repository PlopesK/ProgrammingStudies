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


-- Copiando estrutura do banco de dados para clinica_gp
CREATE DATABASE IF NOT EXISTS `clinica_gp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `clinica_gp`;

-- Copiando estrutura para tabela clinica_gp.consulta
CREATE TABLE IF NOT EXISTS `consulta` (
  `con_cod` int(11) NOT NULL,
  `con_data` date DEFAULT NULL,
  PRIMARY KEY (`con_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela clinica_gp.consulta: 1 rows
/*!40000 ALTER TABLE `consulta` DISABLE KEYS */;
INSERT INTO `consulta` (`con_cod`, `con_data`) VALUES
	(2, '2021-10-28');
/*!40000 ALTER TABLE `consulta` ENABLE KEYS */;

-- Copiando estrutura para tabela clinica_gp.medico
CREATE TABLE IF NOT EXISTS `medico` (
  `med_crm` varchar(50) NOT NULL,
  `med_nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`med_crm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela clinica_gp.medico: 1 rows
/*!40000 ALTER TABLE `medico` DISABLE KEYS */;
INSERT INTO `medico` (`med_crm`, `med_nome`) VALUES
	('25534', 'João');
/*!40000 ALTER TABLE `medico` ENABLE KEYS */;

-- Copiando estrutura para tabela clinica_gp.paciente
CREATE TABLE IF NOT EXISTS `paciente` (
  `pac_rg` int(8) NOT NULL,
  `pac_nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pac_rg`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela clinica_gp.paciente: 1 rows
/*!40000 ALTER TABLE `paciente` DISABLE KEYS */;
INSERT INTO `paciente` (`pac_rg`, `pac_nome`) VALUES
	(41134142, 'Gabriel');
/*!40000 ALTER TABLE `paciente` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
