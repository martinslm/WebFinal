-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 20-Out-2019 às 19:22
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

DROP TABLE IF EXISTS `autor`;
CREATE TABLE IF NOT EXISTS `autor` (
  `idAutor` int(11) NOT NULL AUTO_INCREMENT,
  `NomeAutor` varchar(100) NOT NULL,
  PRIMARY KEY (`idAutor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `DescricaoCategoria` varchar(50) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filial`
--

DROP TABLE IF EXISTS `filial`;
CREATE TABLE IF NOT EXISTS `filial` (
  `idFilial` int(11) NOT NULL AUTO_INCREMENT,
  `DescricaoFilial` varchar(100) NOT NULL,
  PRIMARY KEY (`idFilial`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

DROP TABLE IF EXISTS `livro`;
CREATE TABLE IF NOT EXISTS `livro` (
  `idLivro` int(11) NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(100) NOT NULL,
  `IdAutor` int(11) NOT NULL,
  `IdCategoria` int(11) NOT NULL,
  `idFilial` int(11) NOT NULL,
  PRIMARY KEY (`idLivro`),
  KEY `fk_livro_idautor` (`IdAutor`),
  KEY `fk_livro_idcategoria` (`IdCategoria`),
  KEY `fk_livro_idfilial` (`idFilial`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(20) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
