-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2022 a las 17:48:06
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cartelera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carteleraweb`
--

CREATE TABLE `carteleraweb` (
  `id` int(4) NOT NULL,
  `portada` varchar(255) COLLATE utf32_spanish2_ci NOT NULL,
  `titulo` varchar(30) COLLATE utf32_spanish2_ci NOT NULL,
  `directores` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `actor` varchar(50) COLLATE utf32_spanish2_ci NOT NULL,
  `fecha` varchar(15) COLLATE utf32_spanish2_ci NOT NULL,
  `trailer` varchar(255) COLLATE utf32_spanish2_ci NOT NULL,
  `resumen` varchar(500) COLLATE utf32_spanish2_ci NOT NULL,
  `categoria` varchar(20) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carteleraweb`
--
ALTER TABLE `carteleraweb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carteleraweb`
--
ALTER TABLE `carteleraweb`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
