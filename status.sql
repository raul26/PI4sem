-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-06-2014 a las 17:47:53
-- Versión del servidor: 5.5.33
-- Versión de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pi4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `id_objeto` int(11) NOT NULL,
  `nombre_objeto` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `status_objeto` tinyint(1) NOT NULL,
  `hora` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` text COLLATE utf8_spanish_ci NOT NULL,
  `ultima_actualizacion` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id_status`, `id_objeto`, `nombre_objeto`, `status_objeto`, `hora`, `fecha`, `ultima_actualizacion`) VALUES
(1, 1, 'Foco1', 1, '09:55:13p.m.', '01/06/2014\r\n', '1401733211'),
(2, 2, 'Foco2', 0, '09:55:13p.m.', '01/06/2014\r\n', '1401733211'),
(3, 3, 'Puerta1', 0, '09:55:13p.m.', '01/06/2014\r\n', '1401733211'),
(4, 4, 'Puerta2', 0, '09:55:13p.m.', '01/06/2014\r\n', '1401733211'),
(5, 5, 'Ventana1', 1, '09:55:13p.m.', '01/06/2014\r\n', '1401733211'),
(6, 6, 'Ventana2', 0, '09:55:13p.m.', '01/06/2014\r\n', '1401733211'),
(7, 1, 'Foco1', 1, '09:55:13p.m.', '01/06/2014\r\n', '1401763802'),
(8, 2, 'Foco2', 1, '09:55:13p.m.', '01/06/2014\r\n', '1401763802'),
(9, 3, 'Puerta1', 1, '09:55:13p.m.', '01/06/2014\r\n', '1401763802'),
(10, 4, 'Puerta2', 0, '09:55:13p.m.', '01/06/2014\r\n', '1401763802'),
(11, 5, 'Ventana1', 0, '09:55:13p.m.', '01/06/2014\r\n', '1401763802'),
(12, 6, 'Ventana2', 0, '09:55:13p.m.', '01/06/2014\r\n', '1401763802'),
(13, 1, 'Foco1', 0, '09:55:13p.m.', '01/06/2014\r\n', '1401833762'),
(14, 2, 'Foco2', 0, '09:55:13p.m.', '01/06/2014\r\n', '1401833762'),
(15, 3, 'Puerta1', 0, '09:55:13p.m.', '01/06/2014\r\n', '1401833762'),
(16, 4, 'Puerta2', 0, '09:55:13p.m.', '01/06/2014\r\n', '1401833762'),
(17, 5, 'Ventana1', 0, '09:55:13p.m.', '01/06/2014\r\n', '1401833762'),
(18, 6, 'Ventana2', 0, '09:55:13p.m.', '01/06/2014\r\n', '1401833762'),
(19, 1, 'Foco1', 0, '09:55:13p.m.', '01/06/2014\r\n', '1401833777'),
(20, 2, 'Foco2', 0, '09:55:13p.m.', '01/06/2014\r\n', '1401833777'),
(21, 3, 'Puerta1', 1, '09:55:13p.m.', '01/06/2014\r\n', '1401833777'),
(22, 4, 'Puerta2', 1, '09:55:13p.m.', '01/06/2014\r\n', '1401833777'),
(23, 5, 'Ventana1', 0, '09:55:13p.m.', '01/06/2014\r\n', '1401833777'),
(24, 6, 'Ventana2', 0, '09:55:13p.m.', '01/06/2014\r\n', '1401833777');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
