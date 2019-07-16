-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-07-2019 a las 18:33:57
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectoGuacari`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE `movimientos` (
  `id` int(11) NOT NULL,
  `codigoUsuario` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  `fechaMovimiento` date NOT NULL,
  `valor` int(11) NOT NULL,
  `observaciones` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `movimientos`
--

INSERT INTO `movimientos` (`id`, `codigoUsuario`, `tipo`, `fechaMovimiento`, `valor`, `observaciones`) VALUES
(74, 'tei19t', 0, '2019-07-16', 300000, ''),
(75, 'mh6068', 0, '2019-07-16', 300000, ''),
(76, 'hi7hqn', 0, '2019-07-16', 300000, ''),
(77, '4tnzdq', 0, '2019-07-16', 300000, ''),
(78, '97bcg0', 0, '2019-07-16', 300000, ''),
(79, 'z9b8dv', 0, '2019-07-16', 300000, ''),
(80, 'k0gsjk', 0, '2019-07-16', 300000, ''),
(81, 'k0gsjk', 0, '2019-07-16', 300000, ''),
(82, '0wxrzh', 0, '2019-07-16', 300000, ''),
(83, 'p9zvel', 0, '2019-07-16', 300000, ''),
(84, 'p9zvel', 0, '2019-07-16', 300000, ''),
(85, 'p9zvel', 0, '2019-07-16', 300000, ''),
(86, 'p9zvel', 0, '2019-07-16', 300000, ''),
(87, 'p9zvel', 0, '2019-07-16', 300000, ''),
(88, 'p9zvel', 0, '2019-07-16', 300000, ''),
(89, 'p9zvel', 0, '2019-07-16', 300000, ''),
(90, 'p9zvel', 0, '2019-07-16', 300000, ''),
(91, 'p9zvel', 0, '2019-07-16', 300000, ''),
(92, 'p9zvel', 0, '2019-07-16', 300000, ''),
(93, 'p9zvel', 0, '2019-07-16', 300000, ''),
(94, 'p9zvel', 0, '2019-07-16', 300000, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE `niveles` (
  `id` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `porcentaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`id`, `nivel`, `porcentaje`) VALUES
(1, 1, 18),
(2, 2, 12),
(3, 3, 9),
(4, 4, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rangoUsuario`
--

CREATE TABLE `rangoUsuario` (
  `id` int(11) NOT NULL,
  `rango` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `vp` int(11) NOT NULL,
  `ipMaxMensual` bigint(20) NOT NULL,
  `igMax` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rangoUsuario`
--

INSERT INTO `rangoUsuario` (`id`, `rango`, `vp`, `ipMaxMensual`, `igMax`) VALUES
(1, 'Estandar', 3, 162000, 2430000),
(2, 'Ejecutivo', 6, 324000, 4860000),
(3, 'Plata', 10, 540000, 8100000),
(4, 'Oro', 15, 810000, 12150000),
(5, 'Platino', 20, 1080000, 16200000),
(6, 'Platino global', 30, 1620000, 24300000),
(7, 'Diamante', 50, 2700000, 40500000),
(8, 'Presidencial', 75, 4050000, 60750000),
(9, 'Elite presidencial', 100, 5400000, 81000000),
(10, 'Leyenda', 150, 8100000, 121500000),
(11, 'Leyenda global', 250, 13500000, 202500000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroComision`
--

CREATE TABLE `registroComision` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `usuarioIniciador` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `codigoHijo` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `codigoCabeza` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `padreDeIniciador` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `nivel` int(11) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registroComision`
--

INSERT INTO `registroComision` (`id`, `fecha`, `usuarioIniciador`, `codigoHijo`, `codigoCabeza`, `padreDeIniciador`, `nivel`, `valor`) VALUES
(163, '2019-07-16', 'p9zvel', 'p9zvel', '97bcg0', '97bcg0', 1, 54000),
(164, '2019-07-16', 'p9zvel', '97bcg0', 'mh6068', '97bcg0', 2, 36000),
(165, '2019-07-16', 'p9zvel', 'p9zvel', '97bcg0', '97bcg0', 1, 54000),
(166, '2019-07-16', 'p9zvel', '97bcg0', 'mh6068', '97bcg0', 2, 36000),
(167, '2019-07-16', 'p9zvel', 'p9zvel', '97bcg0', '97bcg0', 1, 54000),
(168, '2019-07-16', 'p9zvel', '97bcg0', 'mh6068', '97bcg0', 2, 36000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `id` int(11) NOT NULL,
  `codigoUsuario` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `fechaSolicitud` date NOT NULL,
  `valor` int(11) NOT NULL,
  `mensaje` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `obversaciones` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `codigo` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `fechaDeIngreso` date NOT NULL,
  `direccion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `codigoReferido` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(36) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `activo` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `codigo`, `nombre`, `cedula`, `fechaNacimiento`, `fechaDeIngreso`, `direccion`, `telefono`, `codigoReferido`, `usuario`, `correo`, `password`, `activo`, `tipo`, `saldo`) VALUES
(141, 'd13g0', 'DIEGO FERNANDO ROSERO GIRALDO', '1114061791', '1992-05-31', '2019-07-08', 'carrera 9 # 10-52', '3154299722', '', 'diegoferose', 'diegoferose@hotmail.com', '12345', 12345, 1, 100000),
(142, 'tei19t', 'LINA MARCELA ROSERO', '', '1994-09-04', '2019-07-09', 'carrera 9 # 10-52', '318900912', 'd13g0', 'lina', 'lina@hmotmail.co', '12345', 0, 2, 1329000),
(143, 'mh6068', 'JESUS DAVID ROSERO', '', '1960-06-15', '2019-07-09', 'carrera 9 # 10-52', '3156130803', 'tei19t', 'david', 'davida@hotmail.com', '12345', 0, 2, 2214000),
(144, 'hi7hqn', 'MELBA GIRALDO', '', '1995-01-13', '2019-07-09', 'carrera 9 # 10-52', '349057', '', 'melba', 'melba@gmail.com', '12345', 0, 2, 0),
(145, '97bcg0', 'LUIS ESTABAN SANCHEZ', '', '2019-07-08', '2019-07-09', 'calle 12 # 12 - 22', '2300202', 'mh6068', 'luis', 'luis@gmail.com', '12345', 0, 2, 2853000),
(146, 'z9b8dv', 'JUAN CALERO', '', '1991-01-01', '2019-07-09', 'CRA 14 # 18-04', '7888978', 'mh6068', 'juan', 'juan@gmail.com', '12345', 0, 2, 0),
(147, 'k0gsjk', 'ALVARO ARCE', '', '1988-07-15', '2019-07-09', 'cra 1 # 22-33', '7384248', 'mh6068', 'alvaro', 'alvaro@gmail.com', '12345', 0, 2, 0),
(148, '4tnzdq', 'DIEGO ALEXANDER RIOS', '', '1994-11-25', '2019-07-09', 'calle 65 # 1-104', '4324', 'tei19t', 'diegoA', 'diegoAlexander@gmail.com', '12345', 0, 2, 54000),
(149, 'p9zvel', 'OSCAR JAVIER DORADO', '', '1992-07-25', '2019-07-09', 'Uninorte torre 4 apt 604', '48938903', '97bcg0', 'oscar', 'osdo@yopmaill.com', '12345', 0, 2, 378000),
(150, 'c7nhxv', 'JOHANA CARDENAS', '', '1991-08-17', '2019-07-09', 'carrera 9 # 10-52', '2390218', '97bcg0', 'johana', 'joha@hotmail.com', '12345', 0, 2, 0),
(151, 'hxsjca', 'LUISA FERNANDA W', '', '1995-10-03', '2019-07-09', 'cra 23 # 10a - 56', '787887', '97bcg0', 'luisa', 'luisa@gmail.com', '12345', 0, 2, 0),
(152, 'lvnltw', 'ELIAN MATIAS DELGADO', '', '2019-07-08', '2019-07-09', 'carrera 9 # 10-52', '456789', 'hxsjca', 'elian', 'elian@gmail.com', '12345', 0, 2, 0),
(153, 'u78of3', 'YEISON DELGADO', '', '1993-09-21', '2019-07-09', 'carrera 9 # 10-52', '6556', 'hxsjca', 'yeison', 'yeison@gmail.com', '12345', 0, 2, 0),
(154, 'g9gfbj', 'GUILLERMO QUEVEDO', '', '2019-07-09', '2019-07-09', 'cra 8 # 19-23', '8937288', 'p9zvel', 'yesion', 'yesion@yopmail.com', '12345', 0, 2, 0),
(155, 'w7c470', 'YULI GRISALES', '', '1992-01-23', '2019-07-09', 'cerra 18 # 8-33', '3158876', 'p9zvel', 'yuli', 'yuli@yopmail.com', '12345', 0, 2, 0),
(156, 'lktc3j', 'RICARDO ACEVEDO', '', '2019-07-14', '2019-07-09', 'CALLE 7 # 22', '4243', 'p9zvel', 'ricardo', 'ricardo@yopmail.com', '12345', 0, 2, 216000),
(157, 'o8dpx0', 'JULIAN RAMIREZ', '', '1994-07-14', '2019-07-09', 'CALLE 23A # 13-44', '7490', 'lktc3j', 'julian', 'julian@yopmail.com', '12345', 0, 2, 0),
(158, 'cv4hxs', 'ALEJANDRA DUQUE', '', '2019-07-09', '2019-07-09', 'carrera 9 # 10-52', '56780234', 'lktc3j', 'alejandra', 'alejandra@yopmail.com', '12345', 0, 2, 0),
(159, 'uzzfx5', 'KAREM TORRES', '', '1991-07-02', '2019-07-09', 'GUAVITAS', '879290', 'lktc3j', 'karem', 'karem@yopmail.com', '12345', 0, 2, 0),
(160, '', '', '', '0000-00-00', '2019-07-09', '', '', '', '', '', '', 0, 2, 0),
(161, 'jdt2d6', 'OSVALDO CORRALES', '', '1988-06-15', '2019-07-09', 'EL DOBIO CASA 5 ', '3185475547', 'lktc3j', 'osvaldo', 'osdo@yopmaill.com', '12345', 0, 2, 0),
(162, 'p4158n', 'CARMEN JULIA OSPINA', '', '2019-07-15', '2019-07-15', 'carrera 9 # 10-52', '679033', '97bcg0', 'carmen', 'carmen@yopmail.com', '12345', 0, 2, 0),
(163, '0wxrzh', 'NORA DUQUE', '', '2019-07-16', '2019-07-16', 'carrera 9 # 10-52', '4923080', 'mh6068', 'nora', 'nora@yopmail.com', '12345', 0, 2, 0),
(164, 'vr0pjj', 'DIANA GIRALDO', '', '2019-07-16', '2019-07-16', 'carrera 9 # 10-52', '8765409', 'mh6068', 'diana', 'diana@yopmail.com', '12345', 0, 2, 0),
(165, 'na4kjh', 'DANIELA GIRALDO', '', '2019-07-16', '2019-07-16', 'carrera 9 # 10-52', '7839523489020', 'mh6068', 'daniela', 'daniela@yopmail.com', '12345', 0, 2, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rangoUsuario`
--
ALTER TABLE `rangoUsuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registroComision`
--
ALTER TABLE `registroComision`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
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
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT de la tabla `niveles`
--
ALTER TABLE `niveles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rangoUsuario`
--
ALTER TABLE `rangoUsuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `registroComision`
--
ALTER TABLE `registroComision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
