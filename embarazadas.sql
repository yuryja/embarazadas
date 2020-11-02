-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-11-2020 a las 22:23:31
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `embarazadas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `embarazadas`
--

CREATE TABLE `embarazadas` (
  `id` int(11) UNSIGNED NOT NULL,
  `cedula` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `nombres` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `apellidos` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `direccion` text COLLATE utf8_unicode_ci NOT NULL,
  `parroquia` int(1) NOT NULL,
  `telefono` varchar(11) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `condicion` tinyint(1) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `embarazadas`
--

INSERT INTO `embarazadas` (`id`, `cedula`, `nombres`, `apellidos`, `direccion`, `parroquia`, `telefono`, `condicion`, `created_date`, `updated_date`) VALUES
(1, 'v21000000', 'Maria Mercedes', 'Perez Rodriguez', 'Carrera 7 #95', 1, '04245890000', 1, '2020-10-20 20:58:43', '2020-10-28 20:22:07'),
(4, 'v21000001', 'Maria de Lourdes', 'Sanchez Sanchez', 'Calle 10 equina carrera 5. Yaritagua', 1, '04245392222', 1, '2020-10-21 03:56:39', '2020-10-28 20:22:07'),
(5, 'v12249121', 'Yury', 'Jajitzky', 'Carrera 7 #95. Yaritagua', 1, '04245392300', 2, '2020-10-28 21:03:46', '2020-10-28 21:03:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prenatal`
--

CREATE TABLE `prenatal` (
  `id` int(11) NOT NULL,
  `ultima_regla` date NOT NULL,
  `tiempo_embarazo` float NOT NULL,
  `fecha_parto` date NOT NULL,
  `control` tinyint(1) NOT NULL DEFAULT 1,
  `centro` varchar(200) NOT NULL,
  `condicion_centro` tinyint(1) NOT NULL DEFAULT 1,
  `enfermedad` tinyint(1) NOT NULL DEFAULT 1,
  `tipo_enfermedad` varchar(200) DEFAULT NULL,
  `micronutrientes` tinyint(1) NOT NULL DEFAULT 1,
  `asic` tinyint(1) NOT NULL DEFAULT 1,
  `parto_humanizado` tinyint(1) NOT NULL DEFAULT 1,
  `antecedentes` text NOT NULL,
  `id_embarazada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `acl` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `password`, `acl`, `creation_date`, `update_date`) VALUES
(1, 'yuryja', '123456', 'super', '2020-10-20 17:33:55', '2020-10-20 18:12:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `embarazadas`
--
ALTER TABLE `embarazadas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prenatal`
--
ALTER TABLE `prenatal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_embarazada` (`id_embarazada`) USING BTREE;

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `embarazadas`
--
ALTER TABLE `embarazadas`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `prenatal`
--
ALTER TABLE `prenatal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
