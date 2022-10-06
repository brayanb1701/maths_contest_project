-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2018 a las 17:40:41
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `matematicass`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control`
--

CREATE TABLE `control` (
  `id` int(240) NOT NULL,
  `name` varchar(240) NOT NULL,
  `password` varchar(240) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `control`
--

INSERT INTO `control` (`id`, `name`, `password`, `fecha`, `hora`) VALUES
(1, 'Karen', 'Mi_Amor', '2018-04-25', '11:34:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secundaria1`
--

CREATE TABLE `secundaria1` (
  `id` int(250) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `a1` int(250) NOT NULL,
  `b1` int(11) NOT NULL,
  `c1` int(11) NOT NULL,
  `d1` int(11) NOT NULL,
  `e1` int(11) NOT NULL,
  `f1` int(11) NOT NULL,
  `g1` int(11) NOT NULL,
  `h1` int(11) NOT NULL,
  `i1` int(11) NOT NULL,
  `j1` int(11) NOT NULL,
  `resultado1` int(11) NOT NULL,
  `tiempo1` time NOT NULL,
  `a2` int(11) NOT NULL,
  `b2` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `d2` int(11) NOT NULL,
  `e2` int(11) NOT NULL,
  `resultado2` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tiempo2` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `secundaria1`
--

INSERT INTO `secundaria1` (`id`, `nombre`, `a1`, `b1`, `c1`, `d1`, `e1`, `f1`, `g1`, `h1`, `i1`, `j1`, `resultado1`, `tiempo1`, `a2`, `b2`, `c2`, `d2`, `e2`, `resultado2`, `total`, `tiempo2`) VALUES
(1, '1', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 30, '11:11:11', 0, 0, 0, 0, 0, 9, 39, '11:44:37'),
(3, 'karen', 3, 0, 0, 0, 3, 3, 0, 3, 0, 3, 15, '09:26:46', 0, 0, 0, 0, 0, 0, 0, '00:00:00'),
(4, 'h', 0, 3, 0, 3, 3, 0, 0, 0, 0, 3, 12, '09:29:48', 0, 0, 0, 0, 0, 0, 0, '00:00:00'),
(5, 'h', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '09:30:00', 0, 0, 0, 0, 0, 0, 0, '00:00:00'),
(6, 'f', 0, 3, 3, 0, 3, 3, 0, 3, 3, 3, 21, '09:31:47', 5, 5, 5, 5, 5, 25, 46, '09:32:01'),
(7, 'j', 0, 3, 0, 0, 3, 0, 0, 3, 0, 3, 12, '09:34:28', 0, 0, 0, 0, 0, 0, 12, '09:34:36'),
(8, 'c', 3, 0, 0, 0, 0, 0, 0, 0, 0, 3, 6, '09:36:13', 5, 5, 5, 5, 5, 25, 31, '09:36:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secundaria2`
--

CREATE TABLE `secundaria2` (
  `id` int(250) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `a1` int(250) NOT NULL,
  `b1` int(11) NOT NULL,
  `c1` int(11) NOT NULL,
  `d1` int(11) NOT NULL,
  `e1` int(11) NOT NULL,
  `f1` int(11) NOT NULL,
  `g1` int(11) NOT NULL,
  `h1` int(11) NOT NULL,
  `i1` int(11) NOT NULL,
  `j1` int(11) NOT NULL,
  `resultado1` int(11) NOT NULL,
  `tiempo1` date NOT NULL,
  `a2` int(11) NOT NULL,
  `b2` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `d2` int(11) NOT NULL,
  `e2` int(11) NOT NULL,
  `f2` int(11) NOT NULL,
  `g2` int(11) NOT NULL,
  `h2` int(11) NOT NULL,
  `i2` int(11) NOT NULL,
  `j2` int(11) NOT NULL,
  `resultado2` int(11) NOT NULL,
  `tiempo2` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `secundaria1`
--
ALTER TABLE `secundaria1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `secundaria2`
--
ALTER TABLE `secundaria2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `control`
--
ALTER TABLE `control`
  MODIFY `id` int(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `secundaria1`
--
ALTER TABLE `secundaria1`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `secundaria2`
--
ALTER TABLE `secundaria2`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
