
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-07-2017 a las 15:09:24
-- Versión del servidor: 10.1.24-MariaDB
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u595030875_corra`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE IF NOT EXISTS `materiales` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `precio` float NOT NULL,
  `tipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`codigo`, `nombre`, `precio`, `tipo`) VALUES
(1, 'cemento', 120.1, 'Solido'),
(2, 'cal', 80.5, 'Solido'),
(3, 'arena fina', 12.2, 'Solido'),
(4, 'arena mediana', 13.2, 'Solido'),
(5, 'arena gruesa', 14.2, 'Solido'),
(6, 'hidrofugo', 40.2, 'Liquido'),
(8, 'aislante', 32, 'Liquido'),
(9, 'ladrillo hueco', 11.55, 'Solido'),
(10, 'ladrillo ceramico', 12.55, 'Solido'),
(11, 'malla metalica', 52.85, 'Solido'),
(12, 'pintura al latex', 257.5, 'Liquido'),
(13, 'pintura al agua', 420.55, 'Liquido'),
(7, 'pintura aislante', 358.5, 'Liquido'),
(15, 'pintura', 320, 'Liquido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `categoria` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `categoria`) VALUES
(1, 'Juan', 'juan@gmail.com', 0),
(2, 'Jose', 'jose@gmail.com', 1),
(3, 'Maria', 'maria@gmail.com', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
