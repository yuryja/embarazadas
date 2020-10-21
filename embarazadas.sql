-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-10-2020 a las 06:32:39
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.32

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
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `embarazadas`
--

INSERT INTO `embarazadas` (`id`, `cedula`, `nombres`, `apellidos`, `direccion`, `parroquia`, `telefono`, `created_date`, `updated_date`) VALUES
(1, 'v21000000', 'Maria Mercedes', 'Perez Rodriguez', 'Carrera 7 #95', 1, '04245890000', '2020-10-20 20:58:43', '2020-10-21 03:52:25'),
(4, 'v21000001', 'Maria de Lourdes', 'Sanchez Sanchez', 'Calle 10 equina carrera 5. Yaritagua', 1, '04245392222', '2020-10-21 03:56:39', '2020-10-21 03:57:24');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
