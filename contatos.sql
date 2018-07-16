-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/07/2018 às 10:18
-- Versão do servidor: 10.1.31-MariaDB
-- Versão do PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `contatos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `apelido` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `contatos`
--

INSERT INTO `contatos` (`id`, `nome`, `apelido`) VALUES
(1, 'Fabricio', 'boi'),
(2, 'Fabricio', 'boi'),
(3, 'dasdada', 'sada'),
(4, 'louco', 'pirado'),
(5, 'Joao', 'Joazinho');

-- --------------------------------------------------------

--
-- Estrutura para tabela `informacoes`
--

CREATE TABLE `informacoes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `valor` varchar(500) NOT NULL,
  `contatos_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `informacoes`
--

INSERT INTO `informacoes` (`id`, `tipo`, `valor`, `contatos_id`) VALUES
(1, 'TELEFONE', '43991877707', 1),
(2, 'TELEFONE', '43991877707', 1),
(3, 'TELEFONE', '43991877707', 1),
(4, 'EMAIL', 'fabricio@gmail.com', 1),
(5, 'ENDEREÃ‡O', 'dadas', 1),
(6, 'ANIVERSARIO', '1996-10-28', 1),
(7, 'TELEFONE', '43991877707', 4),
(8, 'EMAIL', 'fabricio@gmail.com', 4),
(9, 'ENDERECO', 'dadas', 4),
(10, 'ANIVERSARIO', '1996-10-28', 4),
(11, 'TELEFONE', '998744420', 5),
(12, 'EMAIL', 'joazinhoLenda@hotmail.com', 5),
(13, 'ENDERECO', 'Rua joao', 5),
(14, 'ANIVERSARIO', '1999-12-30', 5),
(15, 'TELEFONE', '999999999', 5),
(16, 'EMAIL', 'joazinhoLenda@hotmail.com', 5),
(17, 'ENDERECO', 'Rua', 5),
(18, 'ANIVERSARIO', '2017-08-22', 5);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Índices de tabela `informacoes`
--
ALTER TABLE `informacoes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `informacoes`
--
ALTER TABLE `informacoes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
