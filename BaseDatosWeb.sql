-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-05-2020 a las 21:42:57
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `BaseDatosWeb`
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

--
-- Volcado de datos para la tabla `accidentes`
--

INSERT INTO `accidentes` (`id`, `gravedad_del_accidente`, `tipo_de_accidente`, `choque_con`, `lugar`, `localidad_o_comuna`, `fecha`, `hora`, `area`, `sector`, `diseno_de_la_via`, `clima`, `observaciones`) VALUES
(1, 'con muertos', 'otro', 'tren', 'hahah', 'asd', '2020-03-10', '00:03', 'rural', 'residencial', 'tramo de via', 'lluvia', 'nbnnb'),
(2, 'con muertos', 'otro', 'tren', 'hahah', 'asd', '2020-03-10', '00:03', 'rural', 'residencial', 'tramo de via', 'lluvia', 'nbnnb'),
(3, 'con muertos', 'choque del vehiculo', 'vehiculo', 'adas', 'ads', '2020-04-09', '02:22', 'urbana', 'residencial', 'tramo de via', '', 'asdasdas'),
(4, 'con muertos', 'choque del vehiculo', 'vehiculo', 'qqq', 'qqq', '2020-04-09', '02:01', 'rural', 'residencial', 'tramo de via', 'soleado', 'QWE'),
(5, 'con muertos', 'choque del vehiculo', 'vehiculo', 'qqq', 'qqq', '2020-04-09', '02:01', 'rural', 'residencial', 'tramo de via', 'soleado', 'QWE'),
(6, 'con muertos', 'choque del vehiculo', 'tren', 'Ghh', 'Ghh', '2020-04-09', '14:10', 'rural', 'residencial', 'tramo de via', 'soleado', 'Jajaja'),
(7, 'con muertos', 'choque del vehiculo', 'vehiculo', 'Leo', 'Jwjeje', '2020-04-09', '14:13', 'rural', '', '', 'soleado', 'Jajajja fuciona'),
(8, 'con muertos', 'choque del vehiculo', 'vehiculo', 'sdf', 'dsf', '2020-04-09', '03:04', 'rural', 'residencial', 'tramo de via', 'soleado', 'dsff'),
(9, 'con muertos', 'choque del vehiculo', 'vehiculo', 'Jdjdjd', 'Bdjdndn', '2020-04-09', '16:46', 'rural', 'residencial', 'tramo de via', 'soleado', 'Hoda leo'),
(10, 'con muertos', 'choque del vehiculo', 'vehiculo', 'Chiquinquirá ', 'Antonia Santos', '2020-04-09', '16:53', 'urbana', 'residencial', 'glorieta', 'soleado', 'Hoda'),
(11, 'solo daños', 'choque del vehiculo', 'vehiculo', 'Chiquinquirá ', 'Antonia Santos ', '2020-04-09', '17:05', 'urbana', 'residencial', 'glorieta', 'soleado', 'Hoda'),
(12, 'solo daños', 'choque del vehiculo', 'vehiculo', 'Chiquinquirá ', 'Antonia Santos', '2020-04-09', '17:12', 'urbana', 'residencial', 'glorieta', 'soleado', 'Hoda'),
(13, 'con muertos', 'choque del vehiculo', 'vehiculo', 'Bla', 'Bla', '2020-04-30', '11:20', 'rural', 'comercial', 'lote o predio', 'soleado', 'Hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Registro`
--

CREATE TABLE `Registro` (
  `ID` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Nombres` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellidos` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `TipoDoc` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `NumDoc` int(20) NOT NULL,
  `NumTel` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Password` varchar(73) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `Registro`
--

INSERT INTO `Registro` (`ID`, `email`, `Nombres`, `Apellidos`, `TipoDoc`, `NumDoc`, `NumTel`, `Password`) VALUES
(1, 'juanlov4321@gmail.com', 'Leonardo', 'Ramirez', 'CC', 1002527434, '3002100794', '1234'),
(2, 'jeans@gmail.com', 'Jean Sebastián', 'Gómez Salinas', 'CC', 10567123, '321356129', '12345678'),
(3, 'amadordejuegos@gmail.com', 'Felipe', 'Saenz', 'CC', 1193442004, '3112109402', 'felipipo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id` int(11) NOT NULL,
  `latitud` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `longitud` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`id`, `latitud`, `longitud`) VALUES
(9, '', ''),
(10, '5.6257951', '-73.8094554'),
(11, '5.3163063', '-73.8134781');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accidentes`
--
ALTER TABLE `accidentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Registro`
--
ALTER TABLE `Registro`
  ADD PRIMARY KEY (`ID`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `Registro`
--
ALTER TABLE `Registro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
