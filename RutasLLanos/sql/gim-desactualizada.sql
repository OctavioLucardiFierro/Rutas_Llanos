-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2021 a las 22:24:10
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gimnasio`
--
CREATE DATABASE IF NOT EXISTS `gimnasio` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gimnasio`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `ID` int(50) NOT NULL,
  `Cursos` varchar(50) NOT NULL,
  `dias` varchar(255) NOT NULL,
  `horario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`ID`, `Cursos`, `dias`, `horario`) VALUES
(1, 'Pilates', 'martes,miercoles,viernes', '19:00 a 20:00'),
(2, 'Pesas', 'lunes, jueves', '14:30 a 15:20'),
(4, 'Boxing', 'sabado , lunes', '15:30 a 17:30'),
(5, 'Crossfit', 'viernes', '16:00 a 18:00'),
(6, 'Zumba', 'sabados', '9:00 a 11:00'),
(7, 'Yoga', 'domingos', '10:00 a 11:00'),
(8, 'Natacion ', 'miercoles,viernes,sabados', '15:30 a 17:00'),
(9, 'Spinning', 'lunes,miercoles', '16:00 a 18:00'),
(10, 'League of legends', 'lunes a domingo', 'infinito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `Equipo` varchar(50) NOT NULL,
  `Cant_Equipo` int(50) NOT NULL,
  `Ubicación` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `Nombre` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DNI` int(50) NOT NULL,
  `FechaDeNacimiento` date NOT NULL,
  `Edad` int(50) NOT NULL,
  `num_celular` int(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Estado` varchar(50) NOT NULL,
  `Contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`Nombre`, `Email`, `DNI`, `FechaDeNacimiento`, `Edad`, `num_celular`, `Apellido`, `Estado`, `Contraseña`) VALUES
('tgrth', 'a@gmail.com', 56756, '2021-11-04', 345, 2147483647, 'hfgh', '', 'dfbhdfvbhdf1232'),
('g', 'dgfdg@gmail.com', 1, '2000-02-02', 2, 11564555, 'g', '', '1'),
('fede', 'fede@caca.com', 231453548, '1211-12-12', 23, 89664665, 'adsasda', '', '4545454545'),
('Ibai', 'IBAIGOD@gmail.com', 2147483647, '2021-11-09', 26, 423442, 'LLANOS', '', '2'),
('tfyty', 'owe@gmail.com', 165156, '1020-09-09', 4, 234238912, 'lni', '', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `Precio` double NOT NULL,
  `Turnos_Disponibles` tinyint(1) NOT NULL,
  `Ganancias` double NOT NULL,
  `Id_Cursos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `DNI` (`DNI`),
  ADD UNIQUE KEY `num_celular` (`num_celular`),
  ADD UNIQUE KEY `Contraseña` (`Contraseña`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD UNIQUE KEY `Id_Cursos` (`Id_Cursos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
