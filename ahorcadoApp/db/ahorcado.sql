-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2019 a las 18:24:48
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ahorcado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animales`
--

CREATE TABLE IF NOT EXISTS `animales` (
  `idPalabra` int(11) NOT NULL,
  `textoPalabra` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  FULLTEXT KEY `textoPalabra` (`textoPalabra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `animales`
--

INSERT INTO `animales` (`idPalabra`, `textoPalabra`) VALUES
(1, 'COCODRILO'),
(2, 'JIRAFA'),
(3, 'GORILA'),
(4, 'GUSANO'),
(5, 'CABALLO'),
(6, 'CAMELLO'),
(7, 'GATO'),
(8, 'PELICANO'),
(9, 'MARIPOSA'),
(10, 'ABEJA'),
(11, 'TORTUGAS'),
(12, 'TIBURON'),
(13, 'DELFIN'),
(14, 'AGUILA'),
(15, 'LOMBRIS'),
(16, 'PERRO'),
(17, 'CANGREJO'),
(18, 'GALLINA'),
(19, 'MOSCA'),
(20, 'BORREGO'),
(21, 'CUCARACHA'),
(22, 'HORMIGA'),
(23, 'CONEJO'),
(24, 'TIGRE'),
(25, 'LEON');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
