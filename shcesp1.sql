-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-10-2021 a las 00:36:56
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `shcesp1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cie`
--

CREATE TABLE `cie` (
  `idCie` int(11) NOT NULL,
  `codigoCie` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `describe` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactofamiliar`
--

CREATE TABLE `contactofamiliar` (
  `idContactoFamiliar` int(11) NOT NULL,
  `parentescoFamiliar` text COLLATE utf8_spanish_ci NOT NULL,
  `numeroTelefonico` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cedulaPer` varchar(11) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examensolicitado`
--

CREATE TABLE `examensolicitado` (
  `idExamenSolici` int(11) NOT NULL,
  `idTipoExamen` int(11) NOT NULL,
  `FechaSolicitud` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hallazgo`
--

CREATE TABLE `hallazgo` (
  `idHallazgo` int(11) NOT NULL,
  `idExamen` int(11) NOT NULL,
  `idParteCuerpo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historiaclinica`
--

CREATE TABLE `historiaclinica` (
  `idHistoriaClinic` bigint(20) NOT NULL,
  `fechaHistoria` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fechaEvento` datetime NOT NULL,
  `lugarEvento` text COLLATE utf8_spanish_ci NOT NULL,
  `direcccionEvento` text COLLATE utf8_spanish_ci NOT NULL,
  `custodiaPolicial` enum('si','no') COLLATE utf8_spanish_ci DEFAULT 'no',
  `idMot` int(11) NOT NULL,
  `obsMot` text COLLATE utf8_spanish_ci NOT NULL,
  `alientoEtilico` text COLLATE utf8_spanish_ci NOT NULL,
  `valorAlcotec` text COLLATE utf8_spanish_ci NOT NULL,
  `cedulaPer` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `condicionViaAerea` text COLLATE utf8_spanish_ci NOT NULL,
  `condicionPaciente` text COLLATE utf8_spanish_ci NOT NULL,
  `detalle` text COLLATE utf8_spanish_ci NOT NULL,
  `idHallazgo` bigint(20) NOT NULL,
  `presionArterial` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `frecuenciaCardiaca` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `frecuenciaRespiratoria` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `temperaturaAxilar` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `temperaturaBucal` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `peso` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `talla` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `reacPulmDerech` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `reacPulmIzquier` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tLlenadoCapilar` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `glasgow` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idLesion` bigint(20) DEFAULT NULL,
  `idEmergencia` bigint(20) DEFAULT NULL,
  `idExamenSolici` bigint(20) DEFAULT NULL,
  `idDiagnosticoIngreso` bigint(20) DEFAULT NULL,
  `idDiagnosticoEgreso` bigint(20) DEFAULT NULL,
  `idPlanTratamiento` bigint(20) DEFAULT NULL,
  `idAlta` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `historiaclinica`
--

INSERT INTO `historiaclinica` (`idHistoriaClinic`, `fechaHistoria`, `fechaEvento`, `lugarEvento`, `direcccionEvento`, `custodiaPolicial`, `idMot`, `obsMot`, `alientoEtilico`, `valorAlcotec`, `cedulaPer`, `condicionViaAerea`, `condicionPaciente`, `detalle`, `idHallazgo`, `presionArterial`, `frecuenciaCardiaca`, `frecuenciaRespiratoria`, `temperaturaAxilar`, `temperaturaBucal`, `peso`, `talla`, `reacPulmDerech`, `reacPulmIzquier`, `tLlenadoCapilar`, `glasgow`, `idLesion`, `idEmergencia`, `idExamenSolici`, `idDiagnosticoIngreso`, `idDiagnosticoEgreso`, `idPlanTratamiento`, `idAlta`) VALUES
(1, '2021-10-03 06:01:01', '2021-10-20 00:59:43', 'asd', 'asd', 'no', 1, 'asd', 'asd', 'asd', '1313377317', 'asd', 'asd', 'asd', 1, 'q', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 1, 1, 1, 1, 1, 1, 1),
(2, '2021-10-03 16:57:26', '2021-10-08 00:00:00', 'as', 'asd', 'no', 1, 'asd', 'asd', 'qsd', '1313377317', 'as', 'asd', 'asd', 1, 'qwe', 'qwe', 'ew', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 1, 1, 1, 1, 1, 1, 1),
(3, '2021-10-04 17:25:02', '2021-10-01 00:00:00', 'calle los jazmines', 'Portoviejo', 'no', 1, 'qwe', 'qwe', 'qwe', '123', 'qwe', 'qwe', 'qwe', 1, 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 1, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lesion`
--

CREATE TABLE `lesion` (
  `idLesion` int(11) NOT NULL,
  `lesion` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listalesiones`
--

CREATE TABLE `listalesiones` (
  `idLesiones` int(11) NOT NULL,
  `srcImagen` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `nombreParteCuerpo` int(11) NOT NULL,
  `lesion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `idMedico` int(11) NOT NULL,
  `razonSocial` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `codigoMedico` varchar(9) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `correo` char(75) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idEspecialidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partecuerpo`
--

CREATE TABLE `partecuerpo` (
  `idParteCuerpo` int(11) NOT NULL,
  `nombreParteCuerpo` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `cedulaPer` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `nombrePer` text COLLATE utf8_spanish_ci NOT NULL,
  `apellidoPPer` text COLLATE utf8_spanish_ci NOT NULL,
  `apellidoMPer` text COLLATE utf8_spanish_ci NOT NULL,
  `emailPer` text COLLATE utf8_spanish_ci NOT NULL,
  `telefonoPer` text COLLATE utf8_spanish_ci NOT NULL,
  `direccionPer` text COLLATE utf8_spanish_ci NOT NULL,
  `fechaNacimientoPer` date NOT NULL,
  `nacionalidadPer` text COLLATE utf8_spanish_ci NOT NULL,
  `lugarNacimientoPer` text COLLATE utf8_spanish_ci NOT NULL,
  `sexoPer` enum('M','F') COLLATE utf8_spanish_ci DEFAULT NULL,
  `etniaPer` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estadoCivilPer` enum('Soltero (a)','Casado (a)','Divorciado (a)','Union Libre','Viudo (a)') COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipoSangrePer` enum('O+','O-','A+','A-','B+','B-','AB+','AB-') COLLATE utf8_spanish_ci DEFAULT NULL,
  `hijosVPer` int(4) DEFAULT 0,
  `hijosMPer` int(4) DEFAULT 0,
  `tabaquismoPer` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ocupacionPer` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cargoPer` varchar(90) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idPareja` int(11) DEFAULT NULL,
  `referidoPer` text COLLATE utf8_spanish_ci NOT NULL,
  `idFamilia` int(11) DEFAULT NULL,
  `fechaAdminPer` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `barrioPer` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `parroquiaPer` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cantonPer` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `provinciaPer` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipoSeguroPer` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`cedulaPer`, `nombrePer`, `apellidoPPer`, `apellidoMPer`, `emailPer`, `telefonoPer`, `direccionPer`, `fechaNacimientoPer`, `nacionalidadPer`, `lugarNacimientoPer`, `sexoPer`, `etniaPer`, `estadoCivilPer`, `tipoSangrePer`, `hijosVPer`, `hijosMPer`, `tabaquismoPer`, `ocupacionPer`, `cargoPer`, `idPareja`, `referidoPer`, `idFamilia`, `fechaAdminPer`, `barrioPer`, `parroquiaPer`, `cantonPer`, `provinciaPer`, `tipoSeguroPer`) VALUES
('123456789', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', '2021-09-28', 'admin', 'admin', 'M', 'admin', 'Soltero (a)', 'O+', 0, 0, NULL, 'admin', 'admin', NULL, 'admin', NULL, '2021-09-12 01:39:59', NULL, NULL, NULL, NULL, NULL),
('987654321', 'Jhon', 'Doe', 'Doe', 'jhondoe@gmail.com', '0987654321', 'Calle los jaxmines', '2021-09-11', 'Ecuatoriano', 'Bahia de Caraquez', 'M', 'Blanco', 'Soltero (a)', 'O+', 1, 1, 'No', 'Programmer', 'programmer', 123, 'pedro', 2, '2021-09-13 17:25:12', 'Calle grande centeno', 'Angel Pedro Giler', 'Tosagua', 'Manabi', 'Campesino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `nombreRol` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `codigoRol` varchar(2) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoemergencia`
--

CREATE TABLE `tipoemergencia` (
  `idTipoEmergencia` int(11) NOT NULL,
  `nombreEmergencia` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoexamen`
--

CREATE TABLE `tipoexamen` (
  `idTipoExamen` int(11) NOT NULL,
  `nombreExamen` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `userUsuario` varchar(45) DEFAULT NULL,
  `passUsuario` text DEFAULT NULL,
  `idRol` enum('1','2','3') NOT NULL,
  `cedulaPer` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `fotoPerfilUsuario` text DEFAULT NULL,
  `estado` enum('activo','inactivo') DEFAULT NULL,
  `ultimoLogin` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `userUsuario`, `passUsuario`, `idRol`, `cedulaPer`, `fotoPerfilUsuario`, `estado`, `ultimoLogin`) VALUES
(1, 'admin', '$2a$07$usesomesillystringforegFOeQOp8RK/V8Yn0LZIZwSlh5IkndD.', '1', '123456789', '', 'activo', '2021-10-08 17:34:54');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cie`
--
ALTER TABLE `cie`
  ADD PRIMARY KEY (`idCie`);

--
-- Indices de la tabla `contactofamiliar`
--
ALTER TABLE `contactofamiliar`
  ADD PRIMARY KEY (`idContactoFamiliar`);

--
-- Indices de la tabla `examensolicitado`
--
ALTER TABLE `examensolicitado`
  ADD PRIMARY KEY (`idExamenSolici`);

--
-- Indices de la tabla `hallazgo`
--
ALTER TABLE `hallazgo`
  ADD PRIMARY KEY (`idHallazgo`);

--
-- Indices de la tabla `historiaclinica`
--
ALTER TABLE `historiaclinica`
  ADD PRIMARY KEY (`idHistoriaClinic`);

--
-- Indices de la tabla `lesion`
--
ALTER TABLE `lesion`
  ADD PRIMARY KEY (`idLesion`);

--
-- Indices de la tabla `listalesiones`
--
ALTER TABLE `listalesiones`
  ADD PRIMARY KEY (`idLesiones`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`idMedico`);

--
-- Indices de la tabla `partecuerpo`
--
ALTER TABLE `partecuerpo`
  ADD PRIMARY KEY (`idParteCuerpo`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`cedulaPer`);

--
-- Indices de la tabla `tipoemergencia`
--
ALTER TABLE `tipoemergencia`
  ADD PRIMARY KEY (`idTipoEmergencia`);

--
-- Indices de la tabla `tipoexamen`
--
ALTER TABLE `tipoexamen`
  ADD PRIMARY KEY (`idTipoExamen`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cie`
--
ALTER TABLE `cie`
  MODIFY `idCie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contactofamiliar`
--
ALTER TABLE `contactofamiliar`
  MODIFY `idContactoFamiliar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `examensolicitado`
--
ALTER TABLE `examensolicitado`
  MODIFY `idExamenSolici` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hallazgo`
--
ALTER TABLE `hallazgo`
  MODIFY `idHallazgo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historiaclinica`
--
ALTER TABLE `historiaclinica`
  MODIFY `idHistoriaClinic` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `lesion`
--
ALTER TABLE `lesion`
  MODIFY `idLesion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `listalesiones`
--
ALTER TABLE `listalesiones`
  MODIFY `idLesiones` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `idMedico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `partecuerpo`
--
ALTER TABLE `partecuerpo`
  MODIFY `idParteCuerpo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipoemergencia`
--
ALTER TABLE `tipoemergencia`
  MODIFY `idTipoEmergencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipoexamen`
--
ALTER TABLE `tipoexamen`
  MODIFY `idTipoExamen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
