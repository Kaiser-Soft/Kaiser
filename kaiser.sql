-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2019 a las 02:24:47
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kaiser`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accidentes`
--

CREATE TABLE `accidentes` (
  `id` int(11) NOT NULL,
  `gravedad_del_accidente` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tipo_de_accidente` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `choque_con` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `lugar` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `localidad_o_comuna` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `hora` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `area` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `sector` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `diseno_de_la_via` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `clima` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `observaciones` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id` int(11) NOT NULL,
  `latitud` double NOT NULL,
  `longitud` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`id`, `latitud`, `longitud`) VALUES
(1, 5.3162801, -75.4458624),
(2, 10.4267776, -75.4458624),
(3, 5.31222, -75.4458624),
(4, 0, 0),
(5, 0, 0),
(6, 50.3, 24),
(7, 5.3162801, -73.8134273);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accidentes`
--
ALTER TABLE `accidentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accidentes`
--
ALTER TABLE `accidentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
