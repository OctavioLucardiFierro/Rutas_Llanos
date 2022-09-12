-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2021 a las 00:55:42
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
  `Cant_Equipo` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`Equipo`, `Cant_Equipo`) VALUES
('mancuerna', 40),
('flotadores', 20),
('caminadora', 10);

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
('Jotaro', 'ibaijojo@gmail.com', 123123456, '1978-05-02', 43, 4387954, 'Llanos', 'ADMIN', 'ibaigodora'),
('Juan', 'Juancapo@gmail.com', 124321232, '1978-09-09', 43, 11233445, 'Estoico', 'Cliente', 'fee4321'),
('Pedro', 'Torredeasalto123@gmail.com', 5646643, '1998-05-06', 23, 745389, 'Torres', 'Cliente', 'terrateniente123');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
