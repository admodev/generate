-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 28, 2020 at 01:29 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `generate`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `sponsor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `dni` bigint(255) NOT NULL,
  `edad` int(100) NOT NULL,
  `sexo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `telefono` int(255) NOT NULL,
  `direccion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pais` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `provincia_estado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `codigo_postal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `estudios` set('null','Ninguno','Primario','Secundario','Universitario') CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `profesion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `referido_por` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `num_socio_ref` set('null','No','Si') DEFAULT NULL,
  `num_socio_ref_input` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `llegada_club` set('null','Referido','Internet','Facebook','Google','Instagram','Otro') CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `llegada_club_input` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `ultimos_tres_exp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `activationcode` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `sponsor`, `nombre`, `apellido`, `dni`, `edad`, `sexo`, `telefono`, `direccion`, `pais`, `provincia_estado`, `codigo_postal`, `estudios`, `profesion`, `referido_por`, `num_socio_ref`, `num_socio_ref_input`, `llegada_club`, `llegada_club_input`, `ultimos_tres_exp`, `activationcode`, `status`) VALUES
(4, 'prueba1', 'prueba@hotmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'prueba1prueba prueba1prueba', 'prueba1 prueba1', 'prueba1', 40129457, 24, 'Masculino', 1132456578, 'Direccion De Prueba 1526', 'Argentina', 'Buenos Aires', '1279', 'Universitario', 'Tester1', 'Otro Tester1', 'Si', '42495824', 'Otro', 'Twitter', 'Testear', '', 0),
(5, 'prueba', 'prueba1@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', 'prueba prueba', 'prueba prueba', 'prueba', 40592847, 23, 'Masculino', 1164578967, 'Direccion De Prueba 1585', 'Argentina', 'Buenos Aires', '1754', 'Secundario', 'Tester', 'Otro Tester', 'Si', '15335645', 'Otro', 'Conocido', 'Testear', '', 0),
(7, 'pruebamail', 'pruebamail@yopmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'pruebamail pruebamail', 'prueba mail', 'pruebamail', 40592749, 23, 'Masculino', 1140596874, 'Direccion De Prueba 5329', 'Argentina', 'Buenos Aires', '1956', 'Universitario', 'Tester', 'Otro Tester', 'Si', '15346789', 'Otro', 'Un Socio', 'Testear', '98f2e10632e2f252dbca56ae9c1bb106', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
