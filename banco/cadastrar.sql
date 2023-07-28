-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Set-2022 às 10:59
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastrar`
--
CREATE DATABASE IF NOT EXISTS `cadastrar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cadastrar`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_cadastrar`
--

DROP TABLE IF EXISTS `tabela_cadastrar`;
CREATE TABLE IF NOT EXISTS `tabela_cadastrar` (
  `id_cadastrar` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id_cadastrar`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tabela_cadastrar`
--

INSERT INTO `tabela_cadastrar` (`id_cadastrar`, `nome`) VALUES
(1, 'teste1'),
(2, 'dieimes'),
(3, 'marcela'),
(4, 'maria');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
