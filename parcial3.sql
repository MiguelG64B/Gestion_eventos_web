-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2022 a las 23:57:29
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parcial3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `fecha` date NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `Encargado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `nombre`, `fecha`, `direccion`, `Encargado`) VALUES
(1, 'Evento 321', '2022-05-05', 'calle 12', 1231),
(2, 'Foranjen', '2022-05-13', 'calle 314', 433);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `ciudad` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nivel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `Apellido`, `telefono`, `ciudad`, `estado`, `direccion`, `email`, `password`, `nivel`) VALUES
(30, 'Edgar miguel', 'hernandez', '3295825', 'medellin', 'antioquia', 'Calle 12 av21 #20-68', 'miguelbermudez664@gmail.com', '1c988d54912a626978b095a3ecf8d2b279eef301', 'admin'),
(51, 'prueba', 'inicio', '3242', 'cichasa', 'vichasa', 'Casota#132', 'correodeprueba@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'admin'),
(52, 'prueba24', 'pr', '5868', 'venezuela', 'venecia', '', 'prueba@gmail.com', '$2y$10$h3acOPnnk1B/k.onuFOjf.jWUs.2FYEOQ63wu/pJ9fH6A8L1Ve6La', 'cliente'),
(54, 'cuenta ', 'usuario', '2332', 'cucuta', 'norte de santander', 'call3223', 'correodeprueba2@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'cliente'),
(56, 'prueba', 'apellido prue', '32143', 'prueba city', 'departa city', '', 'pruebaconidsnuevas@gmail.com', '$2y$10$k.Yb7SN7LlLSh90t5tfKreHRyeZbqd7GkppLmsQjBeL7DLGilrHEa', 'cliente'),
(59, 'prueba 324', 'apellido 324', '324', 'ciudad 324', 'departamento 324', 'dire#324', '324@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'cliente'),
(66, 'prueba', 'apellido de la prueb', '3004597915', 'cucuta', 'Norte de santander', 'Call231', 'pruebaclase@gmail.com', '1c988d54912a626978b095a3ecf8d2b279eef301', 'cliente'),
(71, 'soy una prueba', 'apellido de la prueb', '3004597915', 'caracas', 'Norte de santander', 'Calle 12 av21 #20-69', 'miguesad@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'cliente'),
(72, '21', '21', '12', '12', '21', '21', 'info@osh.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'cliente'),
(73, '2', '2', '2', '2', '2', '2', '221@gmail.com', '1c988d54912a626978b095a3ecf8d2b279eef301', 'cliente'),
(74, 'Anderson', 'Torres', '3242524', 'Cucuta', 'Norte de santander', 'call3223', 'andersonpruebas@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
