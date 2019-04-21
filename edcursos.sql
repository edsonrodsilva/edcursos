-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 21/04/2019 às 12:53
-- Versão do servidor: 5.5.50-0ubuntu0.14.04.1
-- Versão do PHP: 5.6.23-1+deprecated+dontuse+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `admin_edcursos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `cfp` varchar(45) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `estados_sigla` char(2) NOT NULL,
  `municipio` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cfp`),
  UNIQUE KEY `cfp_UNIQUE` (`cfp`),
  KEY `fk_alunos_estados1_idx` (`estados_sigla`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `alunos`
--

INSERT INTO `alunos` (`cfp`, `nome`, `endereco`, `estados_sigla`, `municipio`, `telefone`, `email`, `senha`) VALUES
('4323763000', 'Edson Rodrigues', 'Rua O 300 Casa 2', 'MG', 'Esmeraldas', '31989787892', 'edsonrodsilva@gmail.com', '12345678'),
('63237634000', 'Viviane Braga', 'Rua O 300 Casa 2', 'MG', 'Esmeraldas', '31989787892', 'viviane@gmail.com', '12345678'),
('73237634034', 'Paulo Braga', 'Rua O 300 Casa 2', 'MG', 'Esmeraldas', '31989787892', 'paulo@gmail.com', '12345678');

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `fk_alunos_estados1` FOREIGN KEY (`estados_sigla`) REFERENCES `estados` (`sigla`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
