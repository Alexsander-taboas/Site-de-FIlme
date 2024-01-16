-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/06/2023 às 21:02
-- Versão do servidor: 10.4.21-MariaDB
-- Versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aleflix`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `filme`
--

CREATE TABLE `filme` (
  `idFilme` int(11) NOT NULL,
  `nomeFilme` varchar(200) NOT NULL,
  `sinopseFilme` varchar(500) NOT NULL,
  `diretorFilme` varchar(100) NOT NULL,
  `categoriaFilme` varchar(50) NOT NULL,
  `fotoFilme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `filme`
--

INSERT INTO `filme` (`idFilme`, `nomeFilme`, `sinopseFilme`, `diretorFilme`, `categoriaFilme`, `fotoFilme`) VALUES
(3, 'Teste12', 'teste', 'Teste10', 'teste', '6e70c92f93790346d220315f4383d619Carros3.png'),
(6, 'Zelda breath of the wild', 'Link acorda e descobre que deu o caraio memo em hyrule', 'Nintendo', 'Aventura', '2490383b711de4f7b4fe3a9024b69cb7zeldabotw.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `nomeLogin` varchar(50) NOT NULL,
  `enderecoLogin` varchar(50) NOT NULL,
  `emailLogin` varchar(50) NOT NULL,
  `foneLogin` varchar(50) NOT NULL,
  `senhaLogin` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`idFilme`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filme`
--
ALTER TABLE `filme`
  MODIFY `idFilme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
