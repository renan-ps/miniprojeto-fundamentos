-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Set-2019 às 01:34
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cornout`
--
CREATE DATABASE IF NOT EXISTS `cornout` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cornout`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nome`, `email`, `senha`, `tipo`) VALUES
(10, 'Renan', 'renan@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 0),
(11, 'renan', 'renan2@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 0),
(12, 'renan', 'renan3@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 0),
(13, 'renan', 'renan4@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 0),
(14, 'renan', 'renan5@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 0),
(15, 'renan', 'terer@gmail.com', 'bfe54caa6d483cc3887dce9d1b8eb91408f1ea7a', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
