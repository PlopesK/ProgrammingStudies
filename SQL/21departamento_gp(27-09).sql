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


-- Copiando estrutura do banco de dados para 21departamento_gp
CREATE DATABASE IF NOT EXISTS `21departamento_gp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `21departamento_gp`;

-- Copiando estrutura para tabela 21departamento_gp.departamento
CREATE TABLE IF NOT EXISTS `departamento` (
  `Cd_Departamento` varchar(50) NOT NULL,
  `Ds_Setor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Cd_Departamento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 21departamento_gp.departamento: 0 rows
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;

-- Copiando estrutura para tabela 21departamento_gp.deposito
CREATE TABLE IF NOT EXISTS `deposito` (
  `Cd_Deposito` varchar(50) NOT NULL,
  `Ds_Endereco` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Cd_Deposito`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 21departamento_gp.deposito: 0 rows
/*!40000 ALTER TABLE `deposito` DISABLE KEYS */;
/*!40000 ALTER TABLE `deposito` ENABLE KEYS */;

-- Copiando estrutura para tabela 21departamento_gp.fornecedor
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `Cd_Fornecedor` varchar(50) NOT NULL,
  `Ds_Endereco` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Cd_Fornecedor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 21departamento_gp.fornecedor: 0 rows
/*!40000 ALTER TABLE `fornecedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `fornecedor` ENABLE KEYS */;

-- Copiando estrutura para tabela 21departamento_gp.funcionario
CREATE TABLE IF NOT EXISTS `funcionario` (
  `Cd_Funcionario` varchar(50) NOT NULL,
  `Vl_Salario` decimal(10,0) DEFAULT NULL,
  `Cd_Telefone` int(11) DEFAULT NULL,
  PRIMARY KEY (`Cd_Funcionario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 21departamento_gp.funcionario: 0 rows
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;

-- Copiando estrutura para tabela 21departamento_gp.itens
CREATE TABLE IF NOT EXISTS `itens` (
  `Qt_PecaUtilizada` varchar(50) DEFAULT NULL,
  KEY `FK_itens_peca` (`Qt_PecaUtilizada`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 21departamento_gp.itens: 0 rows
/*!40000 ALTER TABLE `itens` DISABLE KEYS */;
/*!40000 ALTER TABLE `itens` ENABLE KEYS */;

-- Copiando estrutura para tabela 21departamento_gp.participa
CREATE TABLE IF NOT EXISTS `participa` (
  `Dt_Inicio` datetime DEFAULT NULL,
  `Hr_Trabalhada` time DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 21departamento_gp.participa: 0 rows
/*!40000 ALTER TABLE `participa` DISABLE KEYS */;
/*!40000 ALTER TABLE `participa` ENABLE KEYS */;

-- Copiando estrutura para tabela 21departamento_gp.peca
CREATE TABLE IF NOT EXISTS `peca` (
  `Cd_Peca` varchar(50) NOT NULL,
  `Ds_Cor` varchar(50) DEFAULT NULL,
  `Qt_Peso` int(11) DEFAULT NULL,
  PRIMARY KEY (`Cd_Peca`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 21departamento_gp.peca: 0 rows
/*!40000 ALTER TABLE `peca` DISABLE KEYS */;
/*!40000 ALTER TABLE `peca` ENABLE KEYS */;

-- Copiando estrutura para tabela 21departamento_gp.projeto
CREATE TABLE IF NOT EXISTS `projeto` (
  `Cd_Projeto` varchar(50) NOT NULL,
  `Vl_Orcamento` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`Cd_Projeto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 21departamento_gp.projeto: 0 rows
/*!40000 ALTER TABLE `projeto` DISABLE KEYS */;
/*!40000 ALTER TABLE `projeto` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
