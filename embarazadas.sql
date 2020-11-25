-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-11-2020 a las 16:02:47
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
  `tcontrol` tinyint(1) NOT NULL DEFAULT 1,
  `centro` varchar(200) DEFAULT NULL,
  `condicion_centro` tinyint(1) NOT NULL DEFAULT 0,
  `enfermedad` tinyint(1) NOT NULL DEFAULT 1,
  `tipo_enfermedad` varchar(200) DEFAULT NULL,
  `micronutrientes` tinyint(1) NOT NULL DEFAULT 1,
  `asic` tinyint(1) NOT NULL DEFAULT 1,
  `parto_humanizado` tinyint(1) NOT NULL DEFAULT 1,
  `antecedentes` tinyint(1) NOT NULL DEFAULT 1,
  `tipo_antecedente` text DEFAULT NULL,
  `id_embarazada` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prenatal`
--

INSERT INTO `prenatal` (`id`, `ultima_regla`, `tiempo_embarazo`, `fecha_parto`, `tcontrol`, `centro`, `condicion_centro`, `enfermedad`, `tipo_enfermedad`, `micronutrientes`, `asic`, `parto_humanizado`, `antecedentes`, `tipo_antecedente`, `id_embarazada`, `created`, `modified`) VALUES
(1, '2020-11-03', 20, '2020-11-03', 2, '', 0, 2, '', 2, 2, 2, 2, '', 1, '2020-11-03 16:24:36', '2020-11-03 16:24:36'),
(2, '2020-10-26', 10, '2021-07-20', 1, 'Matarozzo', 1, 1, 'Gonorrea', 1, 1, 1, 1, 'Presenta gonorrea crónica', 4, '2020-11-03 16:24:36', '2020-11-03 16:24:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombres` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `acl` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `contrasena`, `nombres`, `acl`, `estado`, `creation_date`, `update_date`) VALUES
(1, 'super', 'e10adc3949ba59abbe56e057f20f883e', 'SuperAdmin', 'super', 1, '2020-11-23 05:44:29', '2020-11-23 06:01:34'),
(2, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Administrador', 'Admin', 1, '2020-11-23 05:45:54', '2020-11-23 06:00:55'),
(3, 'registrador', 'e10adc3949ba59abbe56e057f20f883e', 'Registrador', 'Regis', 1, '2020-11-23 05:53:12', '2020-11-23 06:01:43'),
(4, 'usuario2', '14e1b600b1fd579f47433b88e8d85291', 'Rafael', 'Regis', 2, '2020-11-25 14:22:40', '2020-11-25 14:56:08');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
