-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-01-2021 a las 15:46:24
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `supervisor web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componentes`
--

CREATE TABLE `componentes` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Cantidad` int(255) NOT NULL,
  `Codigo` int(20) NOT NULL,
  `Descripcion` text NOT NULL,
  `Tiempo` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `componentes`
--

INSERT INTO `componentes` (`ID`, `Nombre`, `Cantidad`, `Codigo`, `Descripcion`, `Tiempo`) VALUES
(3, 'Ram', 12, 1243242354, '10 unidades de ram ddr3 ', '2020-12-13 18:32:27'),
(4, 'GPU', 10, 51343254, 'GTX 3090', '2020-12-13 18:45:55'),
(5, 'Placa base', 5, 462345476, 'Placa base Asus', '2020-12-13 18:50:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `NombreUse` varchar(200) NOT NULL,
  `Contraseña` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `register`
--

INSERT INTO `register` (`id`, `NombreUse`, `Contraseña`) VALUES
(1, 'Nigher Sifuentes', 'nigher610'),
(4, 'Adonai Sifuentes', 'adonai02'),
(5, 'Oriana Sifuentes', 'Ori0213'),
(6, 'Cristian Sifuentes', 'cris2000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `componentes`
--
ALTER TABLE `componentes`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `componentes`
--
ALTER TABLE `componentes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
