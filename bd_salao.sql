-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/11/2023 às 12:56
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
-- Estrutura para tabela `registros`
--

CREATE TABLE `registros` (
  `id_reserva` int(11) NOT NULL,
  `updateAt` datetime NOT NULL,
  `acao` varchar(255) NOT NULL,
  `id_registro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `registros`
--

INSERT INTO `registros` (`id_reserva`, `updateAt`, `acao`, `id_registro`) VALUES
(0, '0000-00-00 00:00:00', 'editar', 1),
(3, '2023-11-03 19:19:19', 'deletar', 31),
(4, '2023-11-03 19:25:47', 'deletar', 32),
(4, '2023-11-03 19:26:44', 'restaurar', 33),
(3, '2023-11-03 19:50:14', 'restaurar', 34),
(3, '2023-11-03 19:50:26', 'deletar', 35),
(3, '2023-11-03 19:50:58', 'restaurar', 36),
(3, '2023-11-03 19:51:13', 'restaurar', 37),
(3, '2023-11-03 19:51:20', 'restaurar', 38),
(3, '2023-11-03 19:51:31', 'restaurar', 39),
(3, '2023-11-03 19:52:52', 'restaurar', 40),
(3, '2023-11-03 19:55:25', 'restaurar', 41),
(3, '2023-11-03 19:55:40', 'deletar', 42),
(3, '2023-11-03 19:55:50', 'restaurar', 43),
(3, '2023-11-03 19:56:03', 'restaurar', 44),
(4, '2023-11-03 19:57:02', 'editou', 45),
(4, '2023-11-03 19:57:04', 'deletar', 46),
(4, '2023-11-03 19:57:17', 'restaurar', 47),
(4, '2023-11-03 19:57:32', 'editou', 48),
(4, '2023-11-03 19:57:33', 'deletar', 49),
(4, '2023-11-03 19:57:39', 'restaurar', 50),
(4, '2023-11-03 19:58:09', 'restaurar', 51),
(4, '2023-11-03 19:58:12', 'restaurar', 52),
(4, '2023-11-03 19:58:35', 'restaurar', 53),
(4, '2023-11-03 20:00:40', 'editou', 54),
(4, '2023-11-03 20:00:46', 'deletar', 55),
(4, '2023-11-03 20:02:45', 'restaurar', 56),
(4, '2023-11-03 20:02:49', 'deletar', 57),
(4, '2023-11-03 20:05:34', 'restaurar', 58),
(4, '2023-11-03 20:05:36', 'deletar', 59),
(4, '2023-11-03 20:38:13', 'restaurar', 60),
(4, '2023-11-03 20:46:30', 'restaurar', 61),
(4, '2023-11-03 20:46:35', 'restaurar', 62),
(4, '2023-11-03 20:49:42', 'restaurar', 63),
(4, '2023-11-03 20:54:04', 'restaurar', 64),
(4, '2023-11-03 20:54:09', 'restaurar', 65),
(4, '2023-11-03 20:54:21', 'restaurar', 66),
(4, '2023-11-03 20:54:31', 'restaurar', 67),
(4, '2023-11-03 20:56:15', 'restaurar', 68),
(4, '2023-11-03 20:57:31', 'restaurar', 69),
(4, '2023-11-03 20:57:56', 'restaurar', 70),
(4, '2023-11-03 20:58:01', 'restaurar', 71),
(4, '2023-11-03 21:03:51', 'deletar', 72),
(4, '2023-11-03 21:04:43', 'restaurar', 73),
(4, '2023-11-03 21:04:47', 'restaurar', 74),
(4, '2023-11-03 21:05:00', 'restaurar', 75),
(4, '2023-11-03 21:05:06', 'restaurar', 76),
(4, '2023-11-03 21:05:21', 'deletar', 77),
(4, '2023-11-03 21:41:41', 'restaurar', 78),
(4, '2023-11-03 21:41:45', 'restaurar', 79),
(4, '2023-11-03 21:43:19', 'deletar', 80),
(4, '2023-11-03 21:47:12', 'restaurar', 81),
(4, '2023-11-03 21:47:21', 'deletar', 82),
(4, '2023-11-03 21:47:24', 'restaurar', 83),
(4, '2023-11-04 18:23:59', 'deletar', 84),
(4, '2023-11-04 18:24:02', 'restaurar', 85),
(4, '2023-11-04 18:24:06', 'restaurar', 86),
(4, '2023-11-04 18:24:11', 'restaurar', 87),
(4, '2023-11-04 18:24:21', 'restaurar', 88),
(4, '2023-11-04 18:24:37', 'restaurar', 89),
(4, '2023-11-04 18:35:56', 'restaurar', 90),
(7, '2023-11-05 14:13:12', 'editou', 91),
(7, '2023-11-05 14:13:34', 'editou', 92),
(7, '2023-11-05 14:13:46', 'editou', 93),
(4, '2023-11-05 14:13:58', 'deletar', 94),
(4, '2023-11-05 14:14:10', 'restaurar', 95),
(7, '2023-11-05 14:19:17', 'editou', 96),
(7, '2023-11-05 14:22:07', 'editar', 97),
(7, '2023-11-05 14:28:07', 'editar', 98),
(7, '2023-11-05 14:28:15', 'editar', 99),
(6, '2023-11-05 14:31:07', 'editar', 100),
(4, '2023-11-06 08:15:01', 'deletar', 101),
(4, '2023-11-06 08:15:23', 'restaurar', 102),
(4, '2023-11-06 08:16:06', 'deletar', 103),
(4, '2023-11-06 08:16:15', 'restaurar', 104),
(4, '2023-11-06 08:19:32', 'editar', 105),
(8, '2023-11-06 08:20:53', 'editar', 106),
(8, '2023-11-06 08:20:55', 'deletar', 107),
(7, '2023-11-06 08:20:56', 'deletar', 108),
(7, '2023-11-06 08:33:29', 'restaurar', 109),
(7, '2023-11-06 08:33:33', 'deletar', 110),
(7, '2023-11-06 08:44:04', 'restaurar', 111),
(7, '2023-11-06 08:44:18', 'restaurar', 112),
(7, '2023-11-06 08:53:41', 'restaurar', 113),
(3, '2023-11-06 08:54:13', 'deletar', 114),
(8, '2023-11-06 08:54:58', 'restaurar', 115),
(8, '2023-11-06 08:55:01', 'deletar', 116),
(7, '2023-11-06 08:55:11', 'editar', 117);

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
(15, '067.826.508-94', 'celiochristoni@hotmail.com', '92 Rua Fábio Aparecido Vianna', 'Ourinhos', '1996-12-18', 'Celio Christoni', 1),
(16, '555.555.555-55', 'leonardocardoso@gmail.com', 'rua vitoria machado', 'p', '2023-11-07', 'leonardo cardoso', 1),
(17, '444.444.4', 'guilhermechristoni@hotmail.com', 'rua rodrigo jose da costa', 'OURINHOS', '2023-11-15', 'guilherme garcia christoni', 1),
(18, '333.334.45', 'marysmugg@hotmail.com', 'angelina victoria pecine varago', 'ourinhos3', '2001-05-27', 'marya eduarda freit', 1),
(19, '444.444.444-44', 'guilhermechristoni@hotmail.com', 'angelina victoria pecine varago', 'ourinhos', '2023-11-22', 'claudia freitas', 1);

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
(3, '067.826.508-94', '12:10:00', '2023-11-04', 0),
(4, '555.555.555-55', '09:20:00', '2023-11-15', 1),
(6, '444.444.4', '23:19:00', '2023-11-23', 1),
(7, '333.334.45', '10:00:00', '2023-11-06', 1),
(8, '444.444.444-44', '11:20:00', '2023-11-15', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id_registro`);

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
-- AUTO_INCREMENT de tabela `registros`
--
ALTER TABLE `registros`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT de tabela `table_clientes`
--
ALTER TABLE `table_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `table_reserva`
--
ALTER TABLE `table_reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
