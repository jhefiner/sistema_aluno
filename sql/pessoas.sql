-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 07-Set-2020 às 01:10
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `alunos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE IF NOT EXISTS `pessoas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `idade` int(11) NOT NULL,
  `endereco` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`, `idade`, `endereco`) VALUES
(1, 'Ricardo', 40, 'Rua das Flores'),
(2, 'Paulo', 14, 'Rua das Crisantemos'),
(3, 'Pedro', 23, 'Rua das Amelias'),
(4, 'Augusto', 27, 'Rua das BromÃ©lias'),
(5, 'Luiza', 19, 'Rua dos Fuscas'),
(6, 'Rafael Pavan', 25, 'Rua das Lojas'),
(7, 'Vinicius Almeida', 23, 'Rua das Ãrvores'),
(8, 'Sabrina Zanella', 31, 'Rua das Plantas'),
(9, 'Jhenifer', 17, 'Rua dos Doces'),
(10, 'Rafaelly Camargo', 18, 'Rua dos Quadros'),
(11, 'Zeca EvoluÃ§Ã£o', 35, 'Rua das tatuagens');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
