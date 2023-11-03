-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/11/2023 às 18:57
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
-- Banco de dados: `bd_salao`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `table_clientes`
--

CREATE TABLE `table_clientes` (
  `id` int(11) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `endereco_rua` varchar(255) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `data_nasc` date NOT NULL,
  `nome` varchar(255) NOT NULL,
  `ativo` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `table_clientes`
--

INSERT INTO `table_clientes` (`id`, `cpf`, `email`, `endereco_rua`, `cidade`, `data_nasc`, `nome`, `ativo`) VALUES
(12, '12345678900', 'cliente1@example.com', 'Rua das Flores', 'São Paulo', '1980-01-01', 'guilherme', 1),
(13, '111.11', 'leo34@example.com', 'Rua da norte', '22222', '1994-06-02', 'leo garcia christoni', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `table_reserva`
--

CREATE TABLE `table_reserva` (
  `id_reserva` int(11) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `horario` time NOT NULL,
  `data` date NOT NULL,
  `ativo` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `table_reserva`
--

INSERT INTO `table_reserva` (`id_reserva`, `cpf`, `horario`, `data`, `ativo`) VALUES
(1, '12345678900', '19:00:00', '2023-11-03', 0),
(2, '111.11', '02:04:00', '2026-06-30', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `table_clientes`
--
ALTER TABLE `table_clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices de tabela `table_reserva`
--
ALTER TABLE `table_reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `table_clientes`
--
ALTER TABLE `table_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `table_reserva`
--
ALTER TABLE `table_reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `table_reserva`
--
ALTER TABLE `table_reserva`
  ADD CONSTRAINT `fk_table_reserva1_cpf` FOREIGN KEY (`cpf`) REFERENCES `table_clientes` (`cpf`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
