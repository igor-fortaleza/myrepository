-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 06-Jun-2018 às 22:55
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de Dados: `loja`
--
CREATE DATABASE IF NOT EXISTS `loja` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `loja`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `idadministrador` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL,
  PRIMARY KEY (`idadministrador`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `administradores`
--

INSERT INTO `administradores` (`idadministrador`, `email`, `senha`) VALUES
(1, 'dieggopsc@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(100) NOT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`idcategoria`, `categoria`) VALUES
(1, 'CDs'),
(2, 'DVDs');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` text NOT NULL,
  `nome` text NOT NULL,
  `endereco` text NOT NULL,
  `telefone` text NOT NULL,
  `data_nascimento` text NOT NULL,
  `login` text NOT NULL,
  `senha` text NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `cpf`, `nome`, `endereco`, `telefone`, `data_nascimento`, `login`, `senha`) VALUES
(4, '6576576576', 'DIeggo Carrilho', 'Rua do Riachuelo, 132', '97282363', '27/02/87', 'dieggopsc@gmail.com', '1234'),
(5, '081081081', 'Leticia Oliveira', 'Riachuelo', '', '17/01/1992', 'olc.leticia@gmail.com', '123'),
(6, '36472837466', 'igor', 'dfdfffsfsfdfd', '3234345445', '16/09/1997', 'pedro@hotmail.com', 'dk12345'),
(7, '55366478829', 'Igor', 'Rua Vinte e Oito de Julho', '1142261797', '423155273', 'igorf135@gmail.com', 'xsaxasxsaccdfsdf'),
(8, '36547326547', 'Igor', 'Rua Vinte e Oito de Julho', '1142261797', '44/05/1992', 'igorf135@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `id_compra` int(11) NOT NULL AUTO_INCREMENT,
  `produtoid` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `valor` double(5,2) NOT NULL,
  `qtd` int(11) NOT NULL,
  `data_compra` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `total` double(5,2) NOT NULL,
  `clienteid` int(11) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id_compra`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`id_compra`, `produtoid`, `nome`, `valor`, `qtd`, `data_compra`, `total`, `clienteid`, `status`) VALUES
(13, 5, '2 Dream Theater - Metropolis Pt.2 Scenes From A Memory 3', 23.50, 1, '2018-05-24 22:56:36', 23.50, 6, 'P'),
(14, 3, 'Metallica - Master of Puppets', 23.60, 1, '2018-05-24 22:56:36', 23.60, 6, 'P'),
(15, 3, 'Metallica - Master of Puppets', 23.60, 4, '2018-05-24 23:21:19', 94.40, 6, 'P'),
(16, 3, 'Metallica - Master of Puppets', 23.60, 2, '2018-05-28 19:14:36', 47.20, 8, 'P');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) CHARACTER SET utf8 NOT NULL,
  `descricao` text CHARACTER SET utf8 NOT NULL,
  `preco` double(5,2) NOT NULL,
  `estoque` int(11) NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `categoria` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `preco`, `estoque`, `imagem`, `categoria`) VALUES
(7, 'Açaí Ninja (750ml)', 'Banana, Morango, Kiwi, Abacaxi, Leite Condensado', 19.90, 100, 'acai1', 1),
(8, 'Açaí Candy (750ml)', 'Morango, Uva, Leite Condensado, Chocobol,Farinha láctea', 18.90, 100, 'acai1', 1),
(9, 'Açaí da Casa (500ml)', 'Banana, Kiwi, Leite Condensado, Farinha láctea', 17.00, 100, 'acai1', 1),
(10, '\r\nAçaí do Chef (500ml)', 'Abacaxi, Manga, Leite Condensado, Granola', 17.00, 100, 'acai1', 1),
(11, '\r\nAçaí do Chef (500ml)', 'Abacaxi, Manga, Leite Condensado, Granola', 17.00, 100, 'acai1', 1),
(12, '\r\nAçaí Crocante (350ml)', 'Banana, Granola, Sucrilhos, M&M', 15.90, 100, 'acai1', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
