-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jul-2022 às 17:31
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sitesigma`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `CateoriaID` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`CateoriaID`, `Nome`, `Ativo`) VALUES
(1, 'Alan Patrick', 1),
(2, 'Neymar', 1),
(3, 'Wanderson', 1),
(4, 'S.C. Internacional', 1),
(5, 'Messi', 1),
(6, 'Vasco da Gama', 1),
(7, 'Brasil', 1),
(8, 'Futbol', 1),
(9, 'Neymar Jr 90\'', 1),
(10, 'Messi 89\'', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `ProdutoID` int(11) NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `Descricao` longtext NOT NULL,
  `Imagem` varchar(200) NOT NULL,
  `Preco` float NOT NULL,
  `CategoriaID` int(11) NOT NULL,
  `Ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`ProdutoID`, `Nome`, `Descricao`, `Imagem`, `Preco`, `CategoriaID`, `Ativo`) VALUES
(1, 'Allan Patrick', ' Classe', 'Alan Patrick.jpg', 16, 1, 1),
(2, 'Neymar', ' Coringa', 'Neymar.jpg', 20, 1, 1),
(3, 'Wanderson', ' Craque', 'Wanderson.webp', 50, 1, 1),
(4, 'S.C. Internacional', ' O maior de TODOS', 'Internacional.png', 70, 1, 1),
(5, 'Messi', ' E.T. melhor da história', 'Messi.webp', 20000, 1, 1),
(6, 'Vasco da Gama', ' Gigante da colina', 'Vasco da Gama.png', 30000, 1, 1),
(7, 'Brasil', ' Hexa 2022', 'Brasil.webp', 50000, 1, 1),
(8, 'Futebol', ' Melhor criação do homem', 'Futebol.webp', 35000, 1, 1),
(9, 'Neymar aos 90', ' Decisivo', 'Neymar 90.webp', 30000, 1, 1),
(10, 'Messi aos 90', ' Decisivo', 'Messi aos 90.webp', 30000, 1, 1),
(11, 'HEXA', ' Brasil hexa p0rr4', 'Hexa.jpg', 30000, 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`CateoriaID`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ProdutoID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `CateoriaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ProdutoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
