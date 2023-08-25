-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2022 a las 19:00:22
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clientes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `Username` varchar(17) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasena` varchar(17) COLLATE utf8_spanish2_ci NOT NULL,
  `Correo_Electronico` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`Username`, `contrasena`, `Correo_Electronico`) VALUES
('Tommy', '12345', 'shelby00@gmail.com'),
('Arthur', 'shelby123', 'arthursh@gmail.com'),
('Jhonny', 'js000', 'jhon44@gmail.com'),
('aida', '09876', 'aidashelby@gmail.com'),
('Santiago', 'santiago17', 'santiago@gmail.com'),
('santiago', 's1234', 'santiago@gmail.com'),
('', '', ''),
('', '', ''),
('santiago', 's123456', 'santiago@gmail.com'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('santiago', 's123456', 'santiago@gmail.com'),
('santiago', 's123456', 'santiago@gmail.com'),
('santiago', 's123456', 'santiago@gmail.com'),
('santiago', 's123456', 'santiago@gmail.com'),
('santiago', 's123456', 'santiago@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
