-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2022 a las 02:27:51
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rutas_llanos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `usuarios` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `comentario` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_comentario` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`usuarios`, `comentario`, `fecha_comentario`) VALUES
('pipo', 'MY KINDOM CUM', '2022-09-16 21:18:23'),
('Ivan', 'ME FUMO CUATRO PORROS', '2022-09-16 21:23:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras`
--

CREATE TABLE `obras` (
  `id` int(11) NOT NULL,
  `nombre_de_la_obra` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `descripsion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `sucursal_museo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `zona` varchar(55) COLLATE utf8_spanish2_ci NOT NULL,
  `piso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `obras`
--

INSERT INTO `obras` (`id`, `nombre_de_la_obra`, `descripsion`, `sucursal_museo`, `zona`, `piso`) VALUES
(1, 'EL CARNOTAURUS', 'Esqueleto de un carnotauro', 'MUSEO ARGENTINO DE CIENCIAS NATURALES', 'A', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nombre_de_Usuario` varchar(100) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `D.N.I` int(11) NOT NULL,
  `Contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nombre_de_Usuario`, `gmail`, `D.N.I`, `Contraseña`) VALUES
(1, 'Ibai Llanos', 'lucardini@gmail.com', 123456789, 'nosequeponer');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `obras`
--
ALTER TABLE `obras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `obras`
--
ALTER TABLE `obras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
