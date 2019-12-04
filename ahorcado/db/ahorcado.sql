-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2019 a las 19:23:38
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
  `Idpalabra` int(11) NOT NULL,
  `textopalabra` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `animales`
--

INSERT INTO `animales` (`Idpalabra`, `textopalabra`) VALUES
(1, 'Cocodrilo'),
(2, 'Jirafa'),
(3, 'Gorila'),
(4, 'Gusano'),
(5, 'Caballo'),
(6, 'Camello'),
(7, 'Gato'),
(8, 'Pelicano'),
(9, 'Mariposa'),
(10, 'Abeja'),
(11, 'Tortugas'),
(12, 'Delfin'),
(13, 'Tiburon'),
(14, 'Aguila'),
(15, 'Lombris'),
(16, 'Perro'),
(17, 'Cangrejo'),
(18, 'Gallina'),
(19, 'Mosca'),
(20, 'Borrego'),
(21, 'Cucaracha'),
(22, 'Hormiga'),
(23, 'Conejo'),
(24, 'Tigre'),
(25, 'Leon'),
(26, 'Serpiente'),
(27, 'Lagartija'),
(28, 'Elefante'),
(29, 'Camaron'),
(30, 'Raton'),
(26, 'Camaron');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
