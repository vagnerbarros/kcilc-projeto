-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `santa_cruz`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `foto_produto`
--

INSERT INTO `foto_produto` (`id`, `nome_arquivo`, `id_produto`, `status`) VALUES
(6, 'site.png', 33, 'ATIVO');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_bin AUTO_INCREMENT=34 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `quantidade_estoque`, `descricao`, `valor`, `status`) VALUES
(32, 10, 'descricao', 10, 'ATIVO'),
(33, 10, 'descricao', 10, 'ATIVO');

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
  `cpf` text COLLATE latin1_bin,
  `rg` text COLLATE latin1_bin,
  `cep` text COLLATE latin1_bin,
  `rua` text COLLATE latin1_bin,
  `numero` text COLLATE latin1_bin,
  `bairro` text COLLATE latin1_bin,
  `complemento` text COLLATE latin1_bin,
  `cidade` text COLLATE latin1_bin,
  `estado` text COLLATE latin1_bin,
  `telefone` text COLLATE latin1_bin,
  `celular` text COLLATE latin1_bin,
  `email` text COLLATE latin1_bin,
  `senha` text COLLATE latin1_bin,
  `status` text COLLATE latin1_bin,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_bin AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `perfil`, `cpf`, `rg`, `cep`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `estado`, `telefone`, `celular`, `email`, `senha`, `status`) VALUES
(1, 'WOLNEY HENRIQUE QUEIROZ FREITAS', 'Funcionário', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', 'ATIVO');

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
