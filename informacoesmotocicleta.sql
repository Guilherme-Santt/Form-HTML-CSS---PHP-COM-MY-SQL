-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/01/2024 às 14:06
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `form-anuncio-motocicletas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `informacoesmotocicleta`
--

CREATE TABLE `informacoesmotocicleta` (
  `id` int(11) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `preco` varchar(30) NOT NULL,
  `descricao` longtext NOT NULL,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `km` int(10) NOT NULL,
  `data_compra` date NOT NULL,
  `freio` text NOT NULL,
  `data` datetime DEFAULT current_timestamp(),
  `opcionais` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `informacoesmotocicleta`
--

INSERT INTO `informacoesmotocicleta` (`id`, `titulo`, `preco`, `descricao`, `marca`, `modelo`, `km`, `data_compra`, `freio`, `data`, `opcionais`) VALUES
(11, 'TESTEq', '12', 'Não informada', 'TESTE', 'TESTE', 12, '2001-03-12', 'Disco', '2024-01-25 21:20:25', ''),
(12, 'TESTEq', '12', 'Não informada', 'TESTE', 'TESTE', 12, '2001-03-12', 'Tambor', '2024-01-25 21:22:34', 'Cavalete de moto'),
(13, 'TESTEq', '12', 'Não informada', 'TESTE', 'TESTE', 12, '2001-03-12', 'Disco', '2024-01-25 21:31:08', '7'),
(14, 'TESTEq', '12', 'Não informada', 'TESTE', 'TESTE', 12, '2001-03-12', 'Disco', '2024-01-25 21:31:59', 'Cavalete de moto');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `informacoesmotocicleta`
--
ALTER TABLE `informacoesmotocicleta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `informacoesmotocicleta`
--
ALTER TABLE `informacoesmotocicleta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
