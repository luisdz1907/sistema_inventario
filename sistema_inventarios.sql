-- phpMyAdmin SQL Dump
-- version 5.1.4deb1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 16-11-2022 a las 08:43:39
-- Versión del servidor: 8.0.31-0ubuntu2
-- Versión de PHP: 8.1.7-1ubuntu3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_inventarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int NOT NULL,
  `usuario` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` char(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `perfil` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `usuario`, `password`, `perfil`) VALUES
(1, 'admin', '123', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_user_data`
--

CREATE TABLE `tbl_user_data` (
  `id` int NOT NULL,
  `nombre` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo_documento` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `nro_documento` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `ciudad_residencia` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `celular` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_user_data`
--

INSERT INTO `tbl_user_data` (`id`, `nombre`, `tipo_documento`, `nro_documento`, `direccion`, `fecha_nacimiento`, `ciudad_residencia`, `celular`) VALUES
(2, 'Luis Eduardo', 'cedula', '433333', 'Pueblito Español', '2022-11-25', 'Galeras', '232323'),
(3, 'Luis Eduardo', 'cedula', '433333', 'Pueblito Español', '2022-12-01', '', '232323');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_user_data`
--
ALTER TABLE `tbl_user_data`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_user_data`
--
ALTER TABLE `tbl_user_data`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
