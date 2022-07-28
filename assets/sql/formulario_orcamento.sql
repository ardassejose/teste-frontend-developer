-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jul-2022 às 21:35
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `landing_page`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulario_orcamento`
--

CREATE TABLE `formulario_orcamento` (
  `nomePessoa` varchar(120) DEFAULT NULL,
  `emailPessoa` varchar(60) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `descOrcamento` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `formulario_orcamento`
--

INSERT INTO `formulario_orcamento` (`nomePessoa`, `emailPessoa`, `telefone`, `descOrcamento`) VALUES
('JOSE VICTOR ARDASSE MONTEIRO LIMA', 'josevictorps3lima@gmail.com', 2147483647, 'ok'),
('Mariana Kelly Cabral Prado', 'mariana.kelly@gmail.com', 2147483647, 'Quero um site fake');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
