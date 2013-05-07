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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `foto_produto`
--

INSERT INTO `foto_produto` (`id`, `nome_arquivo`, `id_produto`, `status`) VALUES
(6, 'produto_01.png', 33, 'ATIVO'),
(7, 'produto_04.png', 34, 'ATIVO'),
(8, 'produto_07.png', 32, 'ATIVO'),
(9, 'produto_05.png', 35, 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantidade_estoque` int(11) DEFAULT NULL,
  `descricao` text COLLATE latin1_bin,
  `valor` float DEFAULT NULL,
  `genero` text COLLATE latin1_bin,
  `categoria` text COLLATE latin1_bin,
  `status` text COLLATE latin1_bin,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_bin AUTO_INCREMENT=36 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `quantidade_estoque`, `descricao`, `valor`, `genero`, `categoria`, `status`) VALUES
(32, 6, 'descricao', 10, 'Masculino', 'Esportivo', 'ATIVO'),
(33, 6, 'descricao', 10, 'Masculino', 'Casual', 'ATIVO'),
(34, 5, 'teste', 100, 'Feminino', 'Casual', 'ATIVO'),
(35, 1, 'Calcinha de Plinio', 100, 'Feminino', 'Casual', 'ATIVO');

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

--
-- Extraindo dados da tabela `produto_reservado`
--

INSERT INTO `produto_reservado` (`id_reserva`, `id_produto`, `quantidade`, `status`) VALUES
(1, 32, 1, 'ATIVO'),
(2, 33, 1, 'ATIVO'),
(3, 35, 1, 'ATIVO'),
(4, 33, 1, 'ATIVO'),
(5, 33, 1, 'ATIVO'),
(6, 33, 1, 'ATIVO'),
(7, 33, 1, 'ATIVO'),
(8, 33, 1, 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `situacao` text COLLATE latin1_bin,
  `status` text COLLATE latin1_bin,
  PRIMARY KEY (`id`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_bin AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `reserva`
--

INSERT INTO `reserva` (`id`, `id_cliente`, `data`, `situacao`, `status`) VALUES
(1, 4, '2013-04-08', 'Fechado', 'ATIVO'),
(2, 4, '2013-04-23', 'Fechado', 'ATIVO'),
(3, 4, '2013-04-23', 'Fechado', 'ATIVO'),
(4, 4, '2013-05-03', 'Fechado', 'ATIVO'),
(5, 4, '2013-05-03', 'Fechado', 'ATIVO'),
(6, 4, '2013-05-03', 'Fechado', 'ATIVO'),
(7, 4, '2013-05-03', 'Fechado', 'ATIVO'),
(8, 4, '2013-05-03', 'Fechado', 'ATIVO');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_bin AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `perfil`, `cpf`, `rg`, `cep`, `rua`, `numero`, `bairro`, `complemento`, `cidade`, `estado`, `telefone`, `celular`, `email`, `senha`, `status`) VALUES
(1, 'Vagner Barros Pereira', 'Funcionário', '050.529.594-60', '6701912', '55.024-130', 'Alferes Jorge', '251', 'Indianópolis', '', 'Caruaru', 'PE', '(81)3721-0928', '(81)9602-2052', '1', '1', 'ATIVO'),
(4, 'cliente1', 'Cliente', '0505050505050', '05050505050', 'lfaskjdflkasj', 'kfaslkjd', 'lkfjasdlk', 'lkfajsdlkj', 'kjfaslkdj', 'lkfjaslkdj', 'flaksj', 'alskdjf', 'lkfajsdlkj', '2', '2', 'ATIVO'),
(5, 'novo', 'Cliente', 'novo cpf', 'novo rg', 'novo cep', 'nova rua', 'novo numero', 'novo bairro', 'novo complemento', 'nova cidade', 'novo estado', 'novo telefone', 'novo cel', 'novo email', 'senha', 'ATIVO');

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
