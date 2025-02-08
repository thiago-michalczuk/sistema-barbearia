-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2021 às 22:57
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `atp`
--
CREATE DATABASE IF NOT EXISTS `atp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `atp`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

DROP TABLE IF EXISTS `agendamento`;
CREATE TABLE `agendamento` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `barb` varchar(100) NOT NULL,
  `dtatd` date NOT NULL,
  `tpcorte` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`id`, `nome`, `barb`, `dtatd`, `tpcorte`) VALUES
(20, 'Silvana', 'joao', '0023-03-12', 'tijelinha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `barbeiros`
--

DROP TABLE IF EXISTS `barbeiros`;
CREATE TABLE `barbeiros` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `dtent` date NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `cpf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `barbeiros`
--

INSERT INTO `barbeiros` (`id`, `nome`, `dtent`, `telefone`, `cpf`) VALUES
(1, 'andressa ', '1234-02-23', '11 98411-1212', '1212121'),
(2, 'joao', '2013-01-25', '2434112', '3323131323'),
(12, 'Thiago ', '1122-02-12', '123232', '12323');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `dataNascimento` date NOT NULL,
  `genero` varchar(1) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `cpf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `dataNascimento`, `genero`, `telefone`, `cpf`) VALUES
(18, 'Silvana ', '0000-00-00', 'f', '123231', '1323123'),
(28, 'carlos', '0032-03-12', 'm', '1123', '32321');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tpcorte`
--

DROP TABLE IF EXISTS `tpcorte`;
CREATE TABLE `tpcorte` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `tempo` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tpcorte`
--

INSERT INTO `tpcorte` (`id`, `nome`, `tempo`) VALUES
(1, 'moicano', '00:10:00'),
(2, 'social', '00:16:00'),
(3, 'tijelinha', '00:06:00'),
(5, 'ondulado', '00:40:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'thithi', 'thi@hot.com', '123123'),
(15, 'teste', 'teste', 'teste');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `barbeiros`
--
ALTER TABLE `barbeiros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tpcorte`
--
ALTER TABLE `tpcorte`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `barbeiros`
--
ALTER TABLE `barbeiros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `tpcorte`
--
ALTER TABLE `tpcorte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
