-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2021 a las 19:30:25
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
-- Base de datos: `gimnacio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `ID` int(50) NOT NULL,
  `Cursos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`ID`, `Cursos`) VALUES
(1, 'Pilates'),
(2, 'Pesas'),
(3, 'Estiramiento'),
(4, 'Boxing'),
(5, 'Crossfit'),
(6, 'Cardio'),
(7, 'Danza'),
(8, 'Maquinas'),
(9, 'Yoga'),
(10, 'League of legends');

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
('Cinta', 10),
('Prensa', 5),
('Dorsalera', 5),
('Barras', 10),
('Kit pesas', 40),
('Caminadora Eliptica', 10),
('Multigimnasio', 5),
('Mancuernas', 50),
('Polea', 5),
('Banca', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `Nombre` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DNI` int(50) NOT NULL,
  `Fecha De Nacimiento` date NOT NULL,
  `Edad` int(50) NOT NULL,
  `num_celular` int(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Estado` varchar(50) NOT NULL,
  `Contraseña` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`Nombre`, `Email`, `DNI`, `Fecha De Nacimiento`, `Edad`, `num_celular`, `Apellido`, `Estado`, `Contraseña`) VALUES
('Jotaro', 'ibaijojo@gmail.com', 123123456, '1972-12-21', 43, 5555555, 'llanos', 'ADMIN', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `Horarios` date NOT NULL,
  `Cursos` varchar(50) NOT NULL,
  `Id_Cursos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`Horarios`, `Cursos`, `Id_Cursos`) VALUES
('2021-12-03', 'Curso1', '1'),
('2021-12-07', 'Curso10', '10'),
('2021-12-14', 'Curso2', '2'),
('2021-12-12', 'Curso3', '3'),
('2021-12-22', 'Curso4', '4'),
('2021-12-01', 'Curso5', '5'),
('2021-11-23', 'Curso6', '6'),
('2021-11-30', 'Curso7', '7'),
('0000-00-00', 'Curso8', '8'),
('2021-12-06', 'Curso9', '9');

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
  ADD UNIQUE KEY `num_celular` (`num_celular`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD UNIQUE KEY `Id_Cursos` (`Id_Cursos`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD UNIQUE KEY `Id_Cursos` (`Id_Cursos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
