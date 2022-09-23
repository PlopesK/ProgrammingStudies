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


-- Copiando estrutura do banco de dados para 10academia
CREATE DATABASE IF NOT EXISTS `10academia` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `10academia`;

-- Copiando estrutura para tabela 10academia.aluno
CREATE TABLE IF NOT EXISTS `aluno` (
  `alu_matri` int(11) NOT NULL AUTO_INCREMENT,
  `tur_monitorada` int(11) NOT NULL,
  `alu_nome` varchar(50) DEFAULT NULL,
  `alu_ender` varchar(50) DEFAULT NULL,
  `alu_tele` int(11) DEFAULT NULL,
  `alu_datanasc` date DEFAULT NULL,
  `alu_altura` float DEFAULT NULL,
  `alu_peso` float DEFAULT NULL,
  PRIMARY KEY (`alu_matri`,`tur_monitorada`),
  KEY `FK_aluno_turma` (`tur_monitorada`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 10academia.aluno: 0 rows
/*!40000 ALTER TABLE `aluno` DISABLE KEYS */;
/*!40000 ALTER TABLE `aluno` ENABLE KEYS */;

-- Copiando estrutura para tabela 10academia.instrutor
CREATE TABLE IF NOT EXISTS `instrutor` (
  `ins_rg` int(9) NOT NULL,
  `ins_nome` varchar(50) DEFAULT NULL,
  `ins_datanasc` date DEFAULT NULL,
  `ins_titulo` varchar(50) DEFAULT NULL,
  `ins_tele` int(11) DEFAULT NULL,
  `tur_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ins_rg`),
  KEY `FK_instrutor_turma` (`tur_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 10academia.instrutor: 0 rows
/*!40000 ALTER TABLE `instrutor` DISABLE KEYS */;
/*!40000 ALTER TABLE `instrutor` ENABLE KEYS */;

-- Copiando estrutura para tabela 10academia.matricula
CREATE TABLE IF NOT EXISTS `matricula` (
  `alu_matri` int(11) NOT NULL,
  `mat_chamada` int(11) NOT NULL AUTO_INCREMENT,
  `tur_id` int(11) NOT NULL,
  `mat_data` datetime DEFAULT NULL,
  `mat_presente` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`alu_matri`,`mat_chamada`,`tur_id`),
  KEY `FK__turma` (`tur_id`),
  KEY `FK1_aluno` (`alu_matri`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 10academia.matricula: 0 rows
/*!40000 ALTER TABLE `matricula` DISABLE KEYS */;
/*!40000 ALTER TABLE `matricula` ENABLE KEYS */;

-- Copiando estrutura para tabela 10academia.turma
CREATE TABLE IF NOT EXISTS `turma` (
  `tur_id` int(11) NOT NULL AUTO_INCREMENT,
  `tur_numalu` int(2) NOT NULL,
  `tur_horario` time DEFAULT NULL,
  `tur_duracao` time DEFAULT NULL,
  `tur_datain` date DEFAULT NULL,
  `tur_datafim` date DEFAULT NULL,
  `tur_atividade` varchar(50) NOT NULL,
  `ins_rg` int(9) DEFAULT NULL,
  PRIMARY KEY (`tur_id`,`tur_atividade`) USING BTREE,
  KEY `FK_turma_instrutor` (`ins_rg`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 10academia.turma: 0 rows
/*!40000 ALTER TABLE `turma` DISABLE KEYS */;
/*!40000 ALTER TABLE `turma` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
