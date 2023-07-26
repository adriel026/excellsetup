-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/07/2023 às 23:35
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

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
(166, '01', 'Dinalva Geralda', '67825'),
(168, '01', 'Divino Marcio', '86100'),
(169, '01', 'Arthur Soyer', '52299'),
(171, '01', 'Carlos Cardoso', '10365'),
(173, '01', 'Elmo Júnior', '15677'),
(193, '01', 'Selma Lanes', '09988'),
(205, '02', 'Brunielly da Silva', '13004'),
(212, '02', 'João Paulo Firmato', '38846'),
(220, '03', 'André Costa', '03352'),
(222, '03', 'Igor Geraldo', '57351'),
(225, 'R03', 'Brunielly da Silva', '40823'),
(240, '01', 'Johan Andres', '37161'),
(250, '01', 'Valadares Estintores', '45188'),
(255, '01', 'Adressa cardoso', '11425'),
(256, '01', 'Valadares Estintores', '45453445168'),
(260, '01', 'Wasley José', '08091'),
(262, '01', 'Danaila Ranieli', '00330'),
(263, '01', 'Bruno Barbosa ', '36830'),
(264, '01', 'Silvio Zafalo', '70923'),
(266, '01', 'Daniel Cortes ', '80176'),
(271, '01', 'João Vitor', '03679'),
(272, '01', 'Ghabryel Estevam', '57929'),
(276, '01', 'Valadares Extintores', '55451'),
(278, '03', 'Dellane Ferreira', '17561'),
(279, '01', 'Wanderley Vieira', '01150'),
(281, '01', 'Vinicius Matos', '43493'),
(282, '01', 'Thiago dos Santos ', '33666'),
(283, '01', 'Claudius Faragó', '09737'),
(284, '02', 'Leandro Lima', '82904'),
(287, '02', 'Pedro henrique', '83017'),
(289, '01', 'Ricardo Jose', '78199'),
(290, '02', 'Valadares Estintores', '55625'),
(291, '02', 'Valadares Estintores', '45182'),
(293, 'R1', 'Gideão Soares', '12707'),
(294, 'R1', 'Josué Eustáquio', '52673'),
(295, 'R1', 'Janio de Oliveira', '99009'),
(296, 'R1', 'Ana Rosa Vieira', '78497'),
(297, 'R1', 'Débora Gonçalves', '01064');

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
(11, 'Adriel', '12275', 'adrielsantosjob@gmail.com', 'adriel Gomes', '140,00.png');

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
  `descrição` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `quantidade` varchar(1000) NOT NULL,
  `valor` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `caixa`
--

INSERT INTO `caixa` (`id`, `data`, `descrição`, `tipo`, `quantidade`, `valor`) VALUES
(44, '2023-05-25', 'Pelicula', '6y', '2', 3),
(45, '2023-05-25', 'ddd', 'd3e', '222', 222),
(46, '2023-05-25', 'Fone', 'Bluetooth', '150', 56),
(47, '2023-05-25', 'teste', 'teste', '2', 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `devolucoes`
--

CREATE TABLE `devolucoes` (
  `id` int(11) NOT NULL,
  `rota` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `codigo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `entregues`
--

CREATE TABLE `entregues` (
  `id` int(11) NOT NULL,
  `rota` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `codigo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `entregues`
--

INSERT INTO `entregues` (`id`, `rota`, `nome`, `codigo`) VALUES
(1, '02', 'Frankfort Bicalho', '41790'),
(2, '01', 'Vera Lucia ', '57040'),
(3, '01', 'Vera Lucia', '97839'),
(4, '02', 'Marinaldo Nunes', '40863'),
(5, '01', 'Tiago Samaro', '03020'),
(6, '01', 'Ricardo Jose', '11842'),
(7, '02', 'Marinaldo Nunes', '40863'),
(8, '01', 'Marinaldo Nunes', '20124'),
(9, '01', 'Marcos Lanes', '30133'),
(10, '03', 'Igor Menezes', '41913'),
(11, '01', 'Tiago Samora', '03020'),
(12, '01', 'Rodrigo Rodrigues ', '34401'),
(13, '02', 'Mario Artur', '91086'),
(14, '01', 'Carlos WS Ramos', '43243'),
(15, '02', 'Mariane Massico', '80404'),
(16, '01', 'Jose Eustáquio', '47840'),
(17, '02', 'adsddd', 'fffff'),
(18, 'dd', 'aaaa', 'xsdd'),
(19, '03', 'sdss', '2333'),
(20, '01', 'Ricardo Jose', '11842'),
(21, '02', 'Lourival Antunes', '56604'),
(22, '01', 'Bruno Silva', '93016'),
(23, '02', 'Denise Alves', '67288'),
(24, '03', 'Valter José', '97924'),
(25, '01', 'Poliana Kely', '50115'),
(26, '01', 'Polianna Kely', '40036'),
(27, '01', 'Juliana Pereira ', '61821'),
(28, '01', 'Alessandra Souza', '06240'),
(29, '00', '00', '00'),
(30, '00', '00', '00'),
(31, '00', '00', '00'),
(32, '00', '00', '00'),
(33, '01', 'Carlos Alberto', '81761'),
(34, '01', 'Gislaine Cristina ', '55327'),
(35, '04', 'Wallessa Bento', 'K0008972142MLB'),
(36, '04', 'Wallessa Bento', 'K0008972142MLB'),
(37, '01', 'Mirian Lopes', '64219'),
(38, '01', 'Samuel Pereira ', '36775'),
(39, 'R03', 'Caroline Soares', '43520'),
(40, '01', 'Maila de Souza', '50149'),
(41, '01', 'Lorena Brandão', '96924'),
(42, 'R03', 'Lorena Brandão', '97112'),
(43, '01', 'Renato Willian', '30724'),
(44, '01', 'Silvio Jose', '03105'),
(45, '04', 'Wallessa Bento', 'K0008972142MLB'),
(46, '04', 'Wallessa Bento', 'K0008972142MLB'),
(47, '04', 'Wallessa Bento', 'K0008972142MLB'),
(48, '04', 'Wallessa Bento', 'K0008972142MLB'),
(49, '01', 'Valadares Extintores', '41741'),
(50, '01', 'Anna Carollina', '98734'),
(51, '01', 'Vera Lucia ', '97839'),
(52, '02', 'Vera Lucia ', '61065'),
(53, '01', 'Claudius Farago', '29554'),
(54, '02', 'Frankfort Bicalho', '19796'),
(55, '02', 'Frankfort Bicalho', '41790'),
(56, '03', 'Eder Jose', '37958'),
(57, '02', 'Tiago Sanches', '67430'),
(58, '01', 'Tiago Sanches', '67436'),
(59, '01', 'Vera Lucia ', '57040'),
(60, '01', 'Alaide Freitas', '32291'),
(61, '01', 'Sandro Coutinho', '33723'),
(62, '01', 'Uasley Mariano', '93697'),
(63, 'R03', 'Mauricio Apolinario', '94264'),
(64, '03', 'Anderson Pereira', '51074'),
(65, '02', 'Adair Alves ', '57999'),
(66, '01', 'Maria dos Anjos', '74517'),
(67, '01', 'Renato Saldanha', '29356'),
(68, '01', 'Maria Luiza', '98320'),
(69, '01', 'Luis Gustavo', '40252'),
(70, '02', 'Rafael Ribeiro PS5', '16468'),
(71, '01', 'Vinicius Matos', '43501'),
(72, '01', 'Edgar Maciel', '46824'),
(73, '01', 'Matheus do Carmo', '70686'),
(74, '01', 'Fabio Jorge', '12052'),
(75, '02', 'Dhierlliane Silva', '41881'),
(76, '02', 'Cleide Paula', '46687'),
(77, '01', 'Lilian Patrícia', '40317'),
(78, '01', 'Lilian Patrícia', '16542'),
(79, '01', 'Eric Oliveira', '49857'),
(80, '02', 'Danilo Bering', '80165'),
(81, '01', 'Danilo Bering', '94590'),
(82, '01', 'Adair Alves ', '75033'),
(83, '01', 'Rodrigo de Araujo', '18316'),
(84, '02', 'Augusto Castro', '54372'),
(85, '01', 'Hermes Valério', '41864'),
(86, '01', 'regina Rodrigues', '23754'),
(87, '01', 'Edmar Nunes', '00210'),
(88, '02', 'Maria José', '34592'),
(89, '01', 'Maria Luiza', '58474'),
(90, '01', 'Priscila de Menezes', '53911'),
(91, '02', 'Jose Ilton', '15133'),
(92, '01', 'Beatriz de Fatima', '17887'),
(93, '01', 'Beatriz de Fatima', '17755'),
(94, '01', 'Beatriz de Fatima', '17749'),
(95, '01', 'Beatriz de Fatima ', '17897'),
(96, '01', 'Gilciney Gomes', '88436'),
(97, '02', 'Marcus Guilherme', '94085'),
(98, '01', 'Mariana Rosa ', '94901'),
(99, '01', 'Alexandro Nogueira', '04673'),
(100, '01', 'Alexandro Jardim', '28112');

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
(NULL, 'IPHONE 11 PRO', 'APPLE', 'IPHONE X / XS'),
(NULL, 'Samsung', 'A10', ''),
(NULL, 'Samsung', 'A10', ''),
(NULL, 'Samsung', 'A10', ''),
(NULL, 'Samsung', 'A10', 'A20'),
(NULL, 'Samsung', 'A10', 'A20'),
(NULL, 'o telefone', 'A10', 'ssss'),
(NULL, 'o telefone', 'A10', 'ssss');

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
-- Índices de tabela `devolucoes`
--
ALTER TABLE `devolucoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `entregues`
--
ALTER TABLE `entregues`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `auditoria`
--
ALTER TABLE `auditoria`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=298;

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

--
-- AUTO_INCREMENT de tabela `devolucoes`
--
ALTER TABLE `devolucoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `entregues`
--
ALTER TABLE `entregues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
