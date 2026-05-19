-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 19-Maio-2026 às 00:36
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `bd_lojacamiseta`
--
CREATE DATABASE IF NOT EXISTS `bd_lojacamiseta` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_lojacamiseta`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_camisa`
--

CREATE TABLE IF NOT EXISTS `tb_camisa` (
  `cd_camisa` int(11) NOT NULL AUTO_INCREMENT,
  `sg_tamanhos` char(5) NOT NULL,
  `ds_cor` varchar(15) NOT NULL,
  PRIMARY KEY (`cd_camisa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Extraindo dados da tabela `tb_camisa`
--

INSERT INTO `tb_camisa` (`cd_camisa`, `sg_tamanhos`, `ds_cor`) VALUES
(1, 'P', 'Azul'),
(2, 'P', 'Roxa'),
(3, 'M', 'Roxa'),
(4, 'GG', 'Verde'),
(5, 'GG', 'Azul'),
(6, 'P', 'Laranja'),
(7, 'P', 'Laranja'),
(8, 'M', 'Verde'),
(9, 'P', 'Preta'),
(10, 'P', 'Vermelha'),
(11, 'P', 'Vermelha'),
(12, 'G', 'Cinza'),
(13, 'PP', 'Preta'),
(14, 'G', 'Rosa'),
(15, 'G', 'Rosa'),
(16, 'G', 'Rosa'),
(17, 'PP', 'Preta'),
(18, 'PP', 'Preta'),
(19, 'PP', 'Preta'),
(20, 'PP', 'Preta'),
(21, 'M', 'Preta'),
(22, 'M', 'Verde'),
(23, 'PP', 'Preta'),
(24, 'PP', 'Preta'),
(25, 'PP', 'Preta'),
(26, 'M', 'Preta'),
(27, 'M', 'Roxa'),
(28, 'GG', 'Vermelha'),
(29, 'G', 'Marrom'),
(30, 'M', 'Roxa'),
(31, 'G', 'Amarela');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
