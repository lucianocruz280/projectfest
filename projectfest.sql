-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2017 a las 02:09:16
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `projectfest`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(5) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `calle` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `colonia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `date` datetime NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `cover` int(3) NOT NULL,
  `urlimg` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `nombre`, `calle`, `colonia`, `date`, `descripcion`, `cover`, `urlimg`) VALUES
(1, 'STUDENT FEST', 'SIN NUMERO', 'BENITO JUAREZ', '2017-09-30 21:00:00', 'dasdadsa', 120, 'dasdasdasdas'),
(2, 'WEEKEND', 'CALLE ARRAYAN #20008 ', 'ALARCON', '2017-09-30 21:00:00', 'MUCHA FIESTA', 100, 'directorio/img/2017_09_19/fiestanoviembre.jpg'),
(3, 'REU JABALIES', 'SIN NUMERO 2', 'JABALIES', '2017-09-23 00:00:00', 've a la fiesta etc', 50, 'asdjoaisdjasdoais/643674025/adsas.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` int(11) NOT NULL,
  `publicacion` varchar(600) COLLATE utf8_spanish_ci NOT NULL,
  `comentario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_usuario` int(11) NOT NULL,
  `img_url` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `rango` int(1) NOT NULL,
  `celular` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `correo`, `password`, `rango`, `celular`) VALUES
(8, 'QWERTY', 'QWERTY', 'qwerty@hotmail.com', '$2y$10$19X2aZDR6Oj6UCk02lN1eeIz2Pn5MBl5JVa4qRPN3N4ZaemumFMwa', 2, 0),
(9, 'asdf', 'asdf', 'ytrewq@hotmail.com', '$2y$10$WHOPMaYCVzrXMJvv80ZHv.oXrJXafZH/fMQk/9i3qql1ERCJCYhYq', 1, 0),
(10, 'asdf', 'qw', 'asdf@hotmail.com', '$2y$10$AY/gQ33yGASVwJUVKNKxHud3Z8guZf4i512VgH7dq2U1ir3Au0X2C', 0, 0),
(11, 'cc', 'ccc', 'cc@cc.com', '$2y$10$4Nl95/IDXckM09TpLGR3buNQww3ADQIKJm/SBqSCVvRvme4Ezjeia', 0, 0),
(12, 'cc', 'ac', 'as@cc.com', '$2y$10$MuazU060sSYmPcivbifrbOOdUA276zbira4XYXiUqc9AZK7OJn53G', 0, 0),
(13, 'ass', 'cx', 'ax@c.com', '$2y$10$qmykm3nag4H/BPwpyJQ4G.228dmmHmqianTg3e9hK76345JMXDxgm', 0, 0),
(14, 'admin', 'admin', 'admin@admin.com', '$2y$10$6h/JuzsPmUTpLNeE6VQ8fO5rXclROn0CLIf1/9okjqjnJI2dYwfR6', 2, 0),
(22, 'luciano cruz maldonado', 'lucianocruz28', 'chano14@live.com.mx', '$2y$10$aLqBaZcQwCaGw3QzTAmN7eUoPL/wKZVqslxh9o2HT76B18m8in.ym', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_eventos`
--

CREATE TABLE `usuarios_eventos` (
  `id_usuario` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios_eventos`
--

INSERT INTO `usuarios_eventos` (`id_usuario`, `id_evento`) VALUES
(10, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios_eventos`
--
ALTER TABLE `usuarios_eventos`
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_evento` (`id_evento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios_eventos`
--
ALTER TABLE `usuarios_eventos`
  ADD CONSTRAINT `usuarios_eventos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_eventos_ibfk_2` FOREIGN KEY (`id_evento`) REFERENCES `eventos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
