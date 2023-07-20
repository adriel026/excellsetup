-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/07/2023 às 14:28
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `excelldatabase`
--
CREATE DATABASE IF NOT EXISTS `excelldatabase` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `excelldatabase`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `auditoria`
--

CREATE TABLE `auditoria` (
  `id` int(200) NOT NULL,
  `rota` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `codigo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `auditoria`
--

INSERT INTO `auditoria` (`id`, `rota`, `nome`, `codigo`) VALUES
(6, '01', 'Adriel Gomes', '12245788');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nomecompleto` varchar(80) DEFAULT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `usuario`, `senha`, `email`, `nomecompleto`, `foto`) VALUES
(1, '', '', '', '', ''),
(2, '', '', '', '', ''),
(3, '', '', '', '', ''),
(4, '', '', 'adrianoemiria2009@hotmail.com', '', ''),
(5, '', '', 'adrianoemiria2009@hotmail.com', '', ''),
(7, 'adriel', '1234', 'adrielsantos@gmail.com', ' adriel santos', ''),
(8, '', '', 'adrianoemiria2009@hotmail.com', '', ''),
(9, 'adriel', '12275', 'adrianoemiria2009@hotmail.com', ' adriel santosaaa', ''),
(10, 'Jarvis', '12275', 'excellgov@gmail.com', 'Jarvis', ''),
(11, 'adriel2', '12275', 'excellgv@gmail.com', 'adriel Gomes', '140,00.png'),
(12, 'adriel2', '12275', 'excellgv@gmail.com', 'adriel Gomes', '140,00.png'),
(13, 'adriel', '111', 'excellgv@gmail.com', 'adriel Gomes', ''),
(14, 'Adriel', '12275', 'adrielsantosjob@gmail.com', 'Adriel Gomes', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadproduto`
--

CREATE TABLE `cadproduto` (
  `id` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `produto` varchar(45) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `quantidade` varchar(1000) DEFAULT NULL,
  `valor_inicial` mediumtext DEFAULT NULL,
  `Valor` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `caixa`
--

CREATE TABLE `caixa` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `nome` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `quantidade` varchar(1000) NOT NULL,
  `valor` double NOT NULL,
  `data_abertura` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `caixa`
--

INSERT INTO `caixa` (`id`, `data`, `nome`, `modelo`, `quantidade`, `valor`, `data_abertura`) VALUES
(41, '0000-00-00', '', '', '', 0, '2023-05-25'),
(42, '2023-05-26', 'Pelicula', '4fr4r', '2', 3, '0000-00-00'),
(43, '2023-05-25', 'Pelicula', '6y', '2', 3, '0000-00-00'),
(44, '2023-05-25', 'Pelicula', '6y', '2', 3, '0000-00-00'),
(45, '2023-05-25', 'ddd', 'd3e', '222', 222, '0000-00-00'),
(46, '2023-05-25', 'Fone', 'Bluetooth', '150', 56, '0000-00-00'),
(47, '2023-05-25', 'teste', 'teste', '2', 5, '0000-00-00'),
(48, '2023-05-25', 'Pelicula', 'redmi', '100', 30, '0000-00-00'),
(49, '2023-05-25', 'Fone', 'redmi', '1', 65, '0000-00-00'),
(50, '2023-05-25', 'Fone', 'Bluetooth', '1', 20, '0000-00-00'),
(51, '2023-05-26', 'Fone', 'Bluetooth', '56', 3, '0000-00-00'),
(52, '2023-05-26', 'ee', 'ee', '33', 34, '0000-00-00'),
(53, '2023-05-26', 'Fone', 'Bluetooth', '1', 10, '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pelicula`
--

CREATE TABLE `pelicula` (
  `id` int(11) DEFAULT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `compatibilidade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `pelicula`
--

INSERT INTO `pelicula` (`id`, `marca`, `modelo`, `compatibilidade`) VALUES
(NULL, 'Xaiomi', 'MI9', 'Nenhum'),
(NULL, 'Samsung', 'A10', 'A10S - G8 PLAY / PLUS - REDMI 8 - K40S - E6 PLUS - G7 / G7+ - E6S - MI8A - M10 - K12 MAX - K22'),
(NULL, 'Xaiomi', 'A70', 'A80 - A90 - A20 S - A21 S - ONE FUSION - K50 S - K41 S - G8 POWER LITE'),
(NULL, 'Samsung', 'A70', 'A80 - A90 - A20 S - A21 S - ONE FUSION - K50 S - K41 S - G8 POWER LITE'),
(NULL, 'Xiaomi', 'MI9', 'Nenhum'),
(NULL, 'IPHONE', '11', 'XR - K8 PLUS'),
(NULL, 'APPLE', 'IPHONE 11', 'XR - K8 PLUS'),
(NULL, 'SAMSUNG', 'A2', 'J8 - REDIMI NOTE 5 - A8 PLUS - S2 - REDIMI 5 PLUS'),
(NULL, 'XIOME', 'NOTE 9', 'A51 - A11 - K50S - K51 - A21S'),
(NULL, 'XIOME', 'NOTE 9S', 'POCO X3 - A80 - A71 - K41S - A70 - A20S'),
(NULL, 'XIOME', 'MI 9', 'ONE FUSION - MOTO E7 - REDMI 9A'),
(NULL, 'XIOME', 'REDMI 9C', 'A71 - A20S'),
(NULL, 'APPLE', 'IPHONE XR', '11'),
(NULL, 'IPHONE 11 PRO', 'APPLE', 'IPHONE X / XS');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `auditoria`
--
ALTER TABLE `auditoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cadproduto`
--
ALTER TABLE `cadproduto`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `caixa`
--
ALTER TABLE `caixa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `auditoria`
--
ALTER TABLE `auditoria`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `cadproduto`
--
ALTER TABLE `cadproduto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `caixa`
--
ALTER TABLE `caixa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
