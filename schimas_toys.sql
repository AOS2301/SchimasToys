-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/04/2024 às 02:23
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
-- Banco de dados: `schimas_toys`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `brinquedos`
--

CREATE TABLE `brinquedos` (
  `Id` int(11) NOT NULL,
  `nome_brinquedo` varchar(45) NOT NULL,
  `preco` int(11) NOT NULL,
  `sexo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome_usuario` varchar(45) NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `senha_usuario` varchar(28) NOT NULL,
  `telefone_usuario` varchar(15) NOT NULL,
  `sexo_usuario` varchar(15) DEFAULT NULL,
  `data_nascimento_usuario` date DEFAULT NULL,
  `cidade_usuario` varchar(45) DEFAULT NULL,
  `estado_usuario` varchar(45) DEFAULT NULL,
  `endereco_usuario` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome_usuario`, `email_usuario`, `senha_usuario`, `telefone_usuario`, `sexo_usuario`, `data_nascimento_usuario`, `cidade_usuario`, `estado_usuario`, `endereco_usuario`) VALUES
(28, 'flávio', 'flavio@gmail.com', 'flavio', '519999999', 'Feminino', '2024-02-16', 'sao leo', 'RS', '123094829034');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `brinquedos`
--
ALTER TABLE `brinquedos`
  ADD PRIMARY KEY (`Id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
