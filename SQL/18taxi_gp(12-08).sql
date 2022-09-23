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


-- Copiando estrutura do banco de dados para 18taxi_gp(12-08)
CREATE DATABASE IF NOT EXISTS `18taxi_gp(12-08)` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `18taxi_gp(12-08)`;

-- Copiando estrutura para tabela 18taxi_gp(12-08).cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `cli_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_cpf` int(11) DEFAULT NULL,
  `cli_nome` varchar(50) DEFAULT NULL,
  `cli_idade` int(11) DEFAULT NULL,
  `sol_cod` int(11) DEFAULT NULL,
  PRIMARY KEY (`cli_id`),
  KEY `FK_cliente_solicitacao` (`sol_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 18taxi_gp(12-08).cliente: 0 rows
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Copiando estrutura para tabela 18taxi_gp(12-08).motorista
CREATE TABLE IF NOT EXISTS `motorista` (
  `mot_cpf` int(11) NOT NULL,
  `mot_nome` varchar(50) DEFAULT NULL,
  `mot_idade` int(11) DEFAULT NULL,
  `vei_placa` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`mot_cpf`),
  KEY `FK_motorista_veiculo` (`vei_placa`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 18taxi_gp(12-08).motorista: 0 rows
/*!40000 ALTER TABLE `motorista` DISABLE KEYS */;
/*!40000 ALTER TABLE `motorista` ENABLE KEYS */;

-- Copiando estrutura para tabela 18taxi_gp(12-08).solicitacao
CREATE TABLE IF NOT EXISTS `solicitacao` (
  `sol_cod` int(11) NOT NULL AUTO_INCREMENT,
  `cli_id` int(11) NOT NULL,
  `mot_cpf` int(11) NOT NULL,
  `sol_datah` datetime DEFAULT NULL,
  `sol_percurso` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sol_cod`,`cli_id`,`mot_cpf`),
  KEY `FK_solicitacao_cliente` (`cli_id`),
  KEY `FK_solicitacao_motorista` (`mot_cpf`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 18taxi_gp(12-08).solicitacao: 0 rows
/*!40000 ALTER TABLE `solicitacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `solicitacao` ENABLE KEYS */;

-- Copiando estrutura para tabela 18taxi_gp(12-08).veiculo
CREATE TABLE IF NOT EXISTS `veiculo` (
  `vei_placa` varchar(7) NOT NULL,
  `vei_marca` varchar(50) DEFAULT NULL,
  `vei_cor` varchar(50) DEFAULT NULL,
  `mot_cpf` int(11) DEFAULT NULL,
  PRIMARY KEY (`vei_placa`),
  KEY `FK_veiculo_motorista` (`mot_cpf`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 18taxi_gp(12-08).veiculo: 0 rows
/*!40000 ALTER TABLE `veiculo` DISABLE KEYS */;
/*!40000 ALTER TABLE `veiculo` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
