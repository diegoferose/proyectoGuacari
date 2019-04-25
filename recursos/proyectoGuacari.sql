-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-04-2019 a las 05:10:40
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
  `codigoUsarioAsociado` varchar(12) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`id`, `codigoUsuario`, `fechaSolicitud`, `valor`, `mensaje`, `obversaciones`, `estado`, `tipo`) VALUES
(1, '3ddk3s', '2019-04-02', 40000, '', '', 0, 0),
(2, '4frw93', '2019-04-05', 6000, '', '', 0, 0),
(3, '4frw93', '2019-04-07', 10000, '', '', 0, 0),
(4, '4frw93', '2019-04-07', 33000, '', '', 0, 0),
(5, '4frw93', '2019-04-28', 70000, '', '', 0, 0),
(6, '4frw93', '2019-04-28', 9000, '', '', 0, 0),
(7, '4frw93', '2019-04-05', 6000, '', '', 0, 0);

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
(1, '34rd32', 'DIEGO FERNANDO ROSERO GIRALDO', '1114061791', '1992-05-31', '0000-00-00', 'carrera 9 # 10-52', '3154299722', '', 'diegoferose', 'diegoferose@hotmail.com', '12345', 0, 0, 0),
(2, '', 'OSCAR JAVIER DORADO', '', '0000-00-00', '0000-00-00', 'carrera 9 # 10-52', '', '', '', '', '12345', 0, 2, 0),
(3, '', 'OSCAR JAVIER DORADO', '', '0000-00-00', '0000-00-00', 'cra 4 333', '', '', '', '', '1234', 0, 2, 0),
(4, '', 'JESUS DAVID ROSERO', '', '0000-00-00', '0000-00-00', 'avellaned 345', '3185475547', '', 'dadiv', 'davida@hotmail.com', '12345', 0, 2, 0),
(5, '', 'LINA MARCELA ROSERO', '', '0000-00-00', '0000-00-00', 'avellaned 345', '349057', '', 'lina', 'lina@hmotmail.co', '12345', 0, 2, 0),
(6, '', 'ROCKY EMILIO', '', '0000-00-00', '0000-00-00', 'avellaned 345', '89789', '', 'rocky', 'rocky099@gmail.com', '2345', 0, 2, 0),
(7, '763041', 'JOHANA CARDENAS', '', '2019-04-06', '0000-00-00', 'carrera 9 # 10-52', '3458989', '34rd32', 'joha', 'joha@hotmail.com', '12345', 0, 2, 0),
(8, 'ksjmrf', 'MELBA GIRALDO', '', '2019-04-06', '0000-00-00', 'afdf 34', '345345', '34rd32', 'melba', 'diegoferose@hotmail.com', '1234', 0, 2, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
