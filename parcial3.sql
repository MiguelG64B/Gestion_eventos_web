-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-06-2022 a las 14:15:39
-- Versión del servidor: 10.5.15-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u830288118_pruebalogin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `idasistencia` int(11) NOT NULL,
  `idevento` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`idasistencia`, `idevento`, `id_usuario`) VALUES
(1, 132, 132);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `idevento` int(11) NOT NULL,
  `idtipousuario` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `cupo` int(11) NOT NULL,
  `costo` int(11) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `fecha` datetime NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`idevento`, `idtipousuario`, `nombre`, `cupo`, `costo`, `direccion`, `fecha`, `imagen`) VALUES
(1, 213, '1', 21, 13, '', '2022-06-07 22:30:43', 'https://micarrerauniversitaria.com/wp-content/uploads/2018/02/planning-of-human-resources.jpg'),
(2, 123, '', 23, 443, '', '2022-06-07 22:30:43', 'https://1.bp.blogspot.com/-7cKP0QzN1Ig/WekJb5fhTDI/AAAAAAAAAT0/cVESwE3v1XABuKmaeyq2Or58MPQKerhxwCLcBGAs/s1600/8.png'),
(3, 2, '23', 34, 11, '', '2022-06-24 07:08:00', 'https://micarrerauniversitaria.com/wp-content/uploads/2018/02/ingenieria-web_1.jpg'),
(4, 4353546, 'mi primera fiesta', 13, 312, '', '2022-06-10 02:03:00', 'http://3.bp.blogspot.com/-w3opNROzkWM/ULbaDVpixzI/AAAAAAAAAQU/z1VfQ3gkVJY/w1200-h630-p-k-no-nu/internet.jpg'),
(10, 43256, 'evento foto', 13, 0, 'calle la foto', '2022-06-08 09:00:00', '../img/TheBirb.jpg'),
(12, 43256, 'Evento Politico', 100, 500000, 'Barrio Pueblo Nuevo, El zulia', '2022-06-09 13:18:00', '../img/alumnos.jpg'),
(13, 4353546, 'Integración Fundación de la mujer', 100, 400000, 'Restaurante La Novilla', '2022-06-10 13:44:00', '../img/alumnos.jpg'),
(15, 4353546, 'Teatro del Pueblo', 100, 60000, 'Universidad Simón Bolívar, sede E', '2022-06-09 14:20:00', '../img/alumnos.jpg'),
(16, 43256, 'mi primera farra', 32, 19, 'call 123', '2022-06-24 10:09:00', '../img/Emulación app.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id_reporte` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `reporte` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `id` int(11) NOT NULL,
  `tipousuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `idtipousuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `idtipousuario`, `nombre`, `apellido`, `cedula`, `direccion`, `telefono`, `correo`, `contrasena`) VALUES
(1, 1, 'prueba', 'prueba apellido', '43256', 'call342', '43256', 'prueba@gmail.com', '12345'),
(2, 1, 'Miguel', 'Bermudes', '4353546', '', '345646', 'miguelbermudez664@gmail.com', '1c988d54912a626978b095a3ecf8d2b279eef301'),
(3, 2, 'prueba', 'prueba apellido', '43256', 'call342', '43256', 'prueba2@gmail.com', '12345'),
(4, 1, 'Daniel', 'Jaimes', '342543', '', '3228524916', 'djaimes@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`idasistencia`),
  ADD KEY `idevento` (`idevento`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`idevento`),
  ADD KEY `idtipousuario` (`idtipousuario`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id_reporte`),
  ADD KEY `id_evento` (`id_evento`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `idtipousuario` (`idtipousuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `idasistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `idevento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id_reporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
