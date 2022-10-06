-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-05-2018 a las 02:58:47
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `matematicas`
--
CREATE DATABASE IF NOT EXISTS `matematicas` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `matematicas`;

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
  `tiempo2` time NOT NULL,
  `a3` int(11) NOT NULL,
  `b3` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `resultado3` int(11) NOT NULL,
  `tiempo3` time NOT NULL,
  `total` int(11) NOT NULL,
  `tiempot` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `a2` int(11) NOT NULL,
  `b2` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `d2` int(11) NOT NULL,
  `e2` int(11) NOT NULL,
  `resultado2` int(11) NOT NULL,
  `tiempo2` time NOT NULL,
  `a3` int(11) NOT NULL,
  `b3` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `resultado3` int(11) NOT NULL,
  `tiempo3` time NOT NULL,
  `total` int(11) NOT NULL,
  `tiempot` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `control1`
--
ALTER TABLE `control1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `control2`
--
ALTER TABLE `control2`
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
-- AUTO_INCREMENT de la tabla `control1`
--
ALTER TABLE `control1`
  MODIFY `id` int(240) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `control2`
--
ALTER TABLE `control2`
  MODIFY `id` int(240) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `secundaria1`
--
ALTER TABLE `secundaria1`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `secundaria2`
--
ALTER TABLE `secundaria2`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
