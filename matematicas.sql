-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-05-2018 a las 18:45:17
-- Versión del servidor: 5.7.22-0ubuntu0.17.10.1
-- Versión de PHP: 7.1.17-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `matematicas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control1`
--

CREATE TABLE `control1` (
  `id` int(240) NOT NULL,
  `name` varchar(240) NOT NULL,
  `password` varchar(240) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `control1`
--

INSERT INTO `control1` (`id`, `name`, `password`, `fecha`, `hora`) VALUES
(1, 'prueba1', 'prueba1', '2018-05-15', '22:42:25'),
(2, 'prueba2', 'prueba2', '2018-05-15', '22:44:09'),
(3, 'colombia', '1', '2018-05-07', '00:19:00'),
(5, 'argentina', 'a', '2018-05-23', '16:36:40'),
(6, 'lapiz', '1', '2018-05-23', '16:42:35'),
(7, 'qwerty', 'q', '2018-05-23', '16:45:28'),
(8, 'q', 'q', '2018-05-23', '16:51:24'),
(9, 'qw', 'qw', '2018-05-23', '16:52:31'),
(10, 'we', 'we', '2018-05-23', '16:56:53'),
(11, 'fg', 'fg', '2018-05-23', '17:07:23'),
(12, 'alzate', 'a', '2018-05-23', '17:09:03'),
(13, 'Mexico', 'marianaeslamejor', '2018-05-23', '17:25:18'),
(14, 'karen', 'kare---', '2018-05-23', '17:25:26'),
(15, 'nigeria', 'nigie', '2018-05-23', '17:29:16'),
(16, 'Dominicana', 'porfinalv', '2018-05-23', '17:29:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control2`
--

CREATE TABLE `control2` (
  `id` int(240) NOT NULL,
  `name` varchar(240) NOT NULL,
  `password` varchar(240) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `control2`
--

INSERT INTO `control2` (`id`, `name`, `password`, `fecha`, `hora`) VALUES
(1, 'prueba1', 'prueba1', '2018-05-15', '22:45:57'),
(2, 'prueba2', 'prueba2', '2018-05-15', '22:46:45'),
(3, 'j', 'h', '2018-05-23', '17:37:19'),
(4, 'k', 'k', '2018-05-23', '17:40:24');

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
  `a2` int(11) NOT NULL DEFAULT '0',
  `b2` int(11) NOT NULL DEFAULT '0',
  `c2` int(11) NOT NULL DEFAULT '0',
  `d2` int(11) NOT NULL DEFAULT '0',
  `e2` int(11) NOT NULL DEFAULT '0',
  `resultado2` int(11) NOT NULL DEFAULT '0',
  `tiempo2` time NOT NULL DEFAULT '00:00:00',
  `a3` int(11) NOT NULL DEFAULT '0',
  `b3` int(11) NOT NULL DEFAULT '0',
  `c3` int(11) NOT NULL DEFAULT '0',
  `resultado3` int(11) NOT NULL DEFAULT '0',
  `tiempo3` time NOT NULL DEFAULT '00:00:00',
  `total` int(11) NOT NULL DEFAULT '0',
  `tiempot` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `secundaria1`
--

INSERT INTO `secundaria1` (`id`, `nombre`, `a1`, `b1`, `c1`, `d1`, `e1`, `f1`, `g1`, `h1`, `i1`, `j1`, `resultado1`, `tiempo1`, `a2`, `b2`, `c2`, `d2`, `e2`, `resultado2`, `tiempo2`, `a3`, `b3`, `c3`, `resultado3`, `tiempo3`, `total`, `tiempot`) VALUES
(1, 'prueba1', 0, 0, 0, 3, 0, 0, 0, 3, 0, 3, 9, '00:00:17', 5, 0, 5, 5, 5, 20, '00:00:12', 0, 0, 5, 5, '00:00:06', 34, '00:00:35'),
(2, 'prueba2', 0, 0, 0, 3, 0, 0, 0, 3, 0, 3, 9, '00:00:16', 5, 5, 5, 0, 5, 20, '00:00:09', 5, 0, 5, 10, '00:00:05', 39, '00:00:30'),
(3, 'we', 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 3, '00:00:00', 0, 0, 0, 0, 0, 0, '00:00:00', 0, 0, 0, 0, '00:00:00', 3, '00:00:00'),
(4, 'fg', 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 3, '00:00:14', 0, 0, 0, 0, 0, 0, '00:00:00', 0, 0, 0, 0, '00:00:00', 3, '00:00:14'),
(5, 'alzate', 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 3, '00:00:12', 0, 0, 0, 0, 0, 0, '00:00:08', 0, 0, 5, 5, '00:00:24', 8, '00:00:44'),
(6, 'Mexico', 0, 3, 3, 0, 0, 3, 0, 3, 0, 3, 15, '00:00:21', 5, 0, 0, 5, 5, 15, '00:00:11', 0, 0, 5, 5, '00:00:07', 35, '00:00:39'),
(7, 'karen', 3, 3, 3, 0, 0, 3, 0, 0, 0, 3, 15, '00:00:24', 0, 0, 0, 0, 0, 0, '00:00:00', 0, 0, 0, 0, '00:00:00', 15, '00:00:24'),
(8, 'Dominicana', 0, 0, 3, 0, 0, 3, 3, 3, 3, 3, 18, '00:00:24', 0, 0, 0, 0, 0, 0, '00:15:00', 0, 0, 0, 0, '00:00:00', 18, '00:15:24'),
(9, 'nigeria', 0, 0, 3, 0, 0, 3, 3, 3, 3, 3, 18, '00:00:32', 0, 0, 0, 0, 0, 0, '00:15:00', 0, 0, 0, 0, '00:00:00', 18, '00:15:32');

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
  `tiempo1` time NOT NULL,
  `a2` int(11) NOT NULL DEFAULT '0',
  `b2` int(11) NOT NULL DEFAULT '0',
  `c2` int(11) NOT NULL DEFAULT '0',
  `d2` int(11) NOT NULL DEFAULT '0',
  `e2` int(11) NOT NULL DEFAULT '0',
  `resultado2` int(11) NOT NULL DEFAULT '0',
  `tiempo2` time NOT NULL DEFAULT '00:00:00',
  `a3` int(11) NOT NULL DEFAULT '0',
  `b3` int(11) NOT NULL DEFAULT '0',
  `c3` int(11) NOT NULL DEFAULT '0',
  `resultado3` int(11) NOT NULL DEFAULT '0',
  `tiempo3` time NOT NULL DEFAULT '00:00:00',
  `total` int(11) NOT NULL,
  `tiempot` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `secundaria2`
--

INSERT INTO `secundaria2` (`id`, `nombre`, `a1`, `b1`, `c1`, `d1`, `e1`, `f1`, `g1`, `h1`, `i1`, `j1`, `resultado1`, `tiempo1`, `a2`, `b2`, `c2`, `d2`, `e2`, `resultado2`, `tiempo2`, `a3`, `b3`, `c3`, `resultado3`, `tiempo3`, `total`, `tiempot`) VALUES
(1, 'prueba1', 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 3, '00:00:15', 0, 0, 0, 0, 0, 0, '00:00:09', 0, 0, 0, 0, '00:00:06', 3, '00:00:30'),
(2, 'prueba2', 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 3, '00:00:16', 0, 0, 0, 0, 0, 0, '00:00:07', 0, 0, 0, 0, '00:00:05', 3, '00:00:28'),
(3, 'j', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '00:00:05', 0, 0, 0, 0, 0, 0, '00:00:10', 5, 5, 5, 15, '00:00:06', 15, '00:00:21'),
(4, 'k', 3, 0, 0, 0, 0, 0, 0, 0, 0, 3, 6, '00:00:11', 0, 0, 0, 0, 0, 0, '00:00:00', 0, 0, 0, 0, '00:00:00', 6, '00:00:11'),
(5, 'k', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '00:01:03', 0, 0, 0, 0, 0, 0, '00:00:00', 0, 0, 0, 0, '00:00:00', 0, '00:01:03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `control1`
--
ALTER TABLE `control1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indices de la tabla `control2`
--
ALTER TABLE `control2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indices de la tabla `secundaria1`
--
ALTER TABLE `secundaria1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `secundaria2`
--
ALTER TABLE `secundaria2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `control1`
--
ALTER TABLE `control1`
  MODIFY `id` int(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `control2`
--
ALTER TABLE `control2`
  MODIFY `id` int(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `secundaria1`
--
ALTER TABLE `secundaria1`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `secundaria2`
--
ALTER TABLE `secundaria2`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
