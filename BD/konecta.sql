-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-09-2020 a las 05:40:07
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `konecta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `ID` int(11) NOT NULL,
  `FECHA_INGRESO` date NOT NULL,
  `NOMBRE` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `SALARIO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`ID`, `FECHA_INGRESO`, `NOMBRE`, `SALARIO`) VALUES
(11111, '2020-09-09', 'David Muñoz', 1500000),
(1028028266, '2020-09-01', 'Jerson Polo', 1600000),
(1029313012, '2020-08-03', 'Luis Calle', 2000000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `ID` int(11) NOT NULL,
  `CODIGO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `DESCRIPCION` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `RESUMEN` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `ID_EMPLEADO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`ID`, `CODIGO`, `DESCRIPCION`, `RESUMEN`, `ID_EMPLEADO`) VALUES
(111, 'SOL1', 'Solicitud de pruebas', 'se realiza las pruebas ', 1028028266);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_EMPLEADO` (`ID_EMPLEADO`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`ID_EMPLEADO`) REFERENCES `empleado` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
