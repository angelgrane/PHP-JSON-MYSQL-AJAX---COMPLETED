-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-05-2016 a las 15:52:10
-- Versión del servidor: 5.5.49-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------
CREATE DATABASE registro;
USE registro;
--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nota` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id`, `nota`) VALUES
(2, 'jose tita'),
(18, 'david paredes'),
(29, 'josseling');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
