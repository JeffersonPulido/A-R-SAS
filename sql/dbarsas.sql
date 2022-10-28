-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2022 a las 00:15:19
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbarsas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE `planes` (
  `Id_Plan` int(11) NOT NULL,
  `Nombre_Plan` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `Descripcion_Plan` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Riesgo_Plan` int(11) NOT NULL,
  `Valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `planes`
--

INSERT INTO `planes` (`Id_Plan`, `Nombre_Plan`, `Descripcion_Plan`, `Riesgo_Plan`, `Valor`) VALUES
(1, 'Básico', 'EPS Y ARL', 1, 85000),
(2, 'Básico', 'EPS Y ARL', 2, 90000),
(3, 'Básico', 'EPS Y ARL', 3, 106000),
(4, 'Básico', 'EPS Y ARL', 4, 125000),
(5, 'Básico', 'EPS Y ARL', 5, 150000),
(6, 'FAMILIAR', 'EPS, ARL Y CAJA DE COMPENSACION', 1, 125000),
(7, 'FAMILIAR', 'EPS, ARL Y CAJA DE COMPENSACION', 2, 135000),
(8, 'FAMILIAR', 'EPS, ARL Y CAJA DE COMPENSACION', 3, 145000),
(9, 'FAMILIAR', 'EPS, ARL Y CAJA DE COMPENSACION', 4, 165000),
(10, 'FAMILIAR', 'EPS, ARL Y CAJA DE COMPENSACION', 5, 190000),
(11, 'COMPLEMENTARIO', 'EPS, ARL Y PENSION', 1, 245000),
(12, 'COMPLEMENTARIO', 'EPS, ARL Y PENSION', 2, 250000),
(13, 'COMPLEMENTARIO', 'EPS, ARL Y PENSION', 3, 265000),
(14, 'COMPLEMENTARIO', 'EPS, ARL Y PENSION', 4, 285000),
(15, 'COMPLEMENTARIO', 'EPS, ARL Y PENSION', 5, 310000),
(16, 'INTEGRAL', 'EPS, ARL, PENSION Y CAJA DE COMPENSACION', 1, 285000),
(17, 'INTEGRAL', 'EPS, ARL, PENSION Y CAJA DE COMPENSACION', 2, 290000),
(18, 'INTEGRAL', 'EPS, ARL, PENSION Y CAJA DE COMPENSACION', 3, 305000),
(19, 'INTEGRAL', 'EPS, ARL, PENSION Y CAJA DE COMPENSACION', 4, 325000),
(20, 'INTEGRAL', 'EPS, ARL, PENSION Y CAJA DE COMPENSACION', 5, 350000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `Id_user` int(11) NOT NULL,
  `username` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(45) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`Id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'Alejandra', 'Alejandra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_interesado`
--

CREATE TABLE `usuario_interesado` (
  `Id_Usuario` int(11) NOT NULL,
  `Nombre_Usuario` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Cedula_Usuario` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `Correo_Usuario` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `Num_Usuario` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `Observacion` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `Fecha` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_nuevo`
--

CREATE TABLE `usuario_nuevo` (
  `Id_Usuario` int(11) NOT NULL,
  `Nombre_Usuario` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `Cedula_Usuario` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `Correo_Usuario` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `Num_Usuario` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `Dire_Usuario` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Eps_Usuario` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Pensiones_Usuario` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Plan_Usuario` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `Observacion` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `Fecha` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`Id_Plan`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_user`);

--
-- Indices de la tabla `usuario_interesado`
--
ALTER TABLE `usuario_interesado`
  ADD PRIMARY KEY (`Id_Usuario`);

--
-- Indices de la tabla `usuario_nuevo`
--
ALTER TABLE `usuario_nuevo`
  ADD PRIMARY KEY (`Id_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `planes`
--
ALTER TABLE `planes`
  MODIFY `Id_Plan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuario_interesado`
--
ALTER TABLE `usuario_interesado`
  MODIFY `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario_nuevo`
--
ALTER TABLE `usuario_nuevo`
  MODIFY `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
