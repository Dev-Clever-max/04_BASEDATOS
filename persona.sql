-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2025 a las 19:22:38
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ejemplo_web2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` bigint(20) NOT NULL,
  `nombres` varchar(64) NOT NULL,
  `apellidos` varchar(64) NOT NULL,
  `dni` char(8) NOT NULL,
  `telefono` char(9) NOT NULL,
  `correo` varchar(128) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `fecha_creado` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombres`, `apellidos`, `dni`, `telefono`, `correo`, `estado`, `fecha_creado`) VALUES
(1, 'Marco', 'Velez', '74152823', '992658712', 'marcos23@gmail.com', 1, '2025-05-28 15:42:47'),
(3, 'juan', 'castillo', '74125896', '963258417', 'castillo@gmail.com', 1, '2025-05-28 16:54:15'),
(4, 'juan', 'castillo', '74125896', '963258417', 'castillo@gmail.com', 1, '2025-05-28 16:55:00'),
(5, 'juan', 'castillo', '74125896', '963258417', 'castillo@gmail.com', 1, '2025-05-28 16:55:43'),
(6, 'Pedro', 'Flores', '74125896', '963258417', 'pedro23@gmail.com', 1, '2025-05-28 16:58:29'),
(7, 'Pedro', 'Flores', '74125896', '963258417', 'pedro23@gmail.com', 1, '2025-05-28 17:04:59'),
(8, 'Pedro', 'Flores', '74125896', '963258417', 'pedro23@gmail.com', 1, '2025-05-28 17:14:35'),
(9, 'Pedro', 'Flores', '74125896', '963258417', 'pedro23@gmail.com', 1, '2025-05-28 17:17:00'),
(10, 'Pedro', 'Flores', '74125896', '963258417', 'pedro23@gmail.com', 1, '2025-05-28 17:21:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
