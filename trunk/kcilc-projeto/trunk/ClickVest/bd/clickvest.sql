-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 05/04/2013 às 13h30min
-- Versão do Servidor: 5.5.16
-- Versão do PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `clickvest`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `foto_produto`
--

CREATE TABLE IF NOT EXISTS `foto_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_arquivo` varchar(200) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `status` text,
  PRIMARY KEY (`id`),
  KEY `id_produto` (`id_produto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `foto_produto`
--

INSERT INTO `foto_produto` (`id`, `nome_arquivo`, `id_produto`, `status`) VALUES
(4, 'ft1034.jpg', 31, 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantidade_estoque` int(11) DEFAULT NULL,
  `descricao` text COLLATE latin1_bin,
  `valor` float DEFAULT NULL,
  `status` text COLLATE latin1_bin,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_bin AUTO_INCREMENT=32 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `quantidade_estoque`, `descricao`, `valor`, `status`) VALUES
(1, 4, 'calcinha Plínio', 20, 'ATIVO'),
(2, 8, 'calção de banho', 15, 'ATIVO'),
(3, 90, NULL, 23, 'ATIVO'),
(4, 55, 'sdfsf', 45, 'ATIVO'),
(5, 333, 'wwww', 333, 'ATIVO'),
(6, 6, NULL, 6, 'ATIVO'),
(7, 9, 'Clara.jpg', 9, 'ATIVO'),
(8, 20, NULL, 20, 'ATIVO'),
(9, 333, 'Array', 23, 'ATIVO'),
(10, 55, 'folha.jpg', 55, 'ATIVO'),
(11, 75, 'image/jpeg', 75, 'ATIVO'),
(12, 100, 'vagne', 100, 'ATIVO'),
(13, 49, 'pli pli', 49, 'ATIVO'),
(14, 45646, 'wwwwww', 65464, 'ATIVO'),
(15, 44, 'dsvs', 44, 'ATIVO'),
(16, 57, 'vvvvvv', 57, 'ATIVO'),
(17, 5, 'camisa social', 130, 'ATIVO'),
(18, 2222, 'asdads', 2222, 'ATIVO'),
(19, 87, 'pliplipli', 87, 'ATIVO'),
(20, 55, 'xuxu', 55, 'ATIVO'),
(21, 12, 'biscoito', 12, 'ATIVO'),
(22, 55, '44', 44, 'ATIVO'),
(23, 100, 'Evento de Palestras', 20, 'ATIVO'),
(24, 0, '', 0, 'ATIVO'),
(25, 0, '', 0, 'ATIVO'),
(26, 0, '', 0, 'ATIVO'),
(27, 0, '', 0, 'ATIVO'),
(28, 100, 'sdfsf', 100, 'ATIVO'),
(29, 9, '44', 9, 'ATIVO'),
(30, 44, 'vagner', 44, 'ATIVO'),
(31, 0, '67', 0, 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_reservado`
--

CREATE TABLE IF NOT EXISTS `produto_reservado` (
  `id_reserva` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `status` text COLLATE latin1_bin,
  KEY `id_reserva` (`id_reserva`,`id_produto`),
  KEY `id_produto` (`id_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `status` text COLLATE latin1_bin,
  PRIMARY KEY (`id`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text COLLATE latin1_bin,
  `perfil` text COLLATE latin1_bin NOT NULL,
  `email` text COLLATE latin1_bin,
  `senha` text COLLATE latin1_bin,
  `status` text COLLATE latin1_bin,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_bin AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `perfil`, `email`, `senha`, `status`) VALUES
(1, 'WOLNEY HENRIQUE QUEIROZ FREITAS', 'Funcionário', 'wolneyhqf@gmail.com', '1', 'ATIVO');

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `foto_produto`
--
ALTER TABLE `foto_produto`
  ADD CONSTRAINT `foto_produto_ibfk_1` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `produto_reservado`
--
ALTER TABLE `produto_reservado`
  ADD CONSTRAINT `produto_reservado_ibfk_1` FOREIGN KEY (`id_reserva`) REFERENCES `reserva` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produto_reservado_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
