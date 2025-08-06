-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2022 a las 03:26:09
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebas eventos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `id` int(11) NOT NULL,
  `especialidad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`id`, `especialidad`) VALUES
(1, 'Consulta'),
(2, 'Periodoncia'),
(3, 'Prostodoncia'),
(4, 'Odontopediatria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `id` int(11) NOT NULL,
  `id_especialidad` int(11) NOT NULL,
  `dni` varchar(15) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `correo` varchar(25) NOT NULL,
  `contrasena` varchar(28) NOT NULL,
  `turno_dia` text NOT NULL,
  `turno_tarde` text NOT NULL,
  `dias` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`id`, `id_especialidad`, `dni`, `nombre`, `apellido`, `correo`, `contrasena`, `turno_dia`, `turno_tarde`, `dias`) VALUES
(1, 2, '35246123', 'Marcos', 'Daziano', 'marcos89@gmail.com', 'marcos123', '08:00,11:00', '13:00,18:00\r\n', 'Monday,Tuesday,Wednesday,Thursday,Friday'),
(2, 3, '30659875', 'Romina', 'Rivarola', 'romiriv@gmail.com', 'romi123', '08:00,12:00', '14:00,19:00', 'Monday,Tuesday,Wednesday,Thursday,Friday');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mutuales`
--

CREATE TABLE `mutuales` (
  `id` int(11) NOT NULL,
  `mutual` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mutuales`
--

INSERT INTO `mutuales` (`id`, `mutual`) VALUES
(1, 'Medife'),
(2, 'Galeno'),
(3, 'Apross'),
(4, 'IOMA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `id` int(11) NOT NULL,
  `title` int(11) NOT NULL,
  `dni` varchar(11) NOT NULL,
  `id_mutual` varchar(25) NOT NULL,
  `sintomas` varchar(200) NOT NULL,
  `start` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`id`, `title`, `dni`, `id_mutual`, `sintomas`, `start`) VALUES
(70, 45246492, '35246123', 'Medife', '', '2022-11-25 09:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `dni` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `correo` varchar(80) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `contra` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`dni`, `nombre`, `apellido`, `fecha_nacimiento`, `correo`, `telefono`, `contra`) VALUES
(45089271, 'Joaquin', 'Bas', '2003-10-05', 'joaquinbas@gmail.com', '3547460086', '4d186321c1a7f0f354b297e8914ab240'),
(45246492, 'Gonzalo Agustín', 'Fonseca', '2003-12-16', 'gonzafonzeca16@gmail.com', '3547460087', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mutuales`
--
ALTER TABLE `mutuales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `turnos_ibfk_1` (`title`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `mutuales`
--
ALTER TABLE `mutuales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD CONSTRAINT `turnos_ibfk_1` FOREIGN KEY (`title`) REFERENCES `usuarios` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
