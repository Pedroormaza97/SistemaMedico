-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-06-2021 a las 00:45:28
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
-- Base de datos: `cesp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cirugias`
--

CREATE TABLE `cirugias` (
  `IdCirugia` int(11) NOT NULL,
  `IdMedico` int(11) DEFAULT NULL,
  `CedulaP` varchar(11) DEFAULT NULL,
  `Fecha_hora` datetime DEFAULT NULL,
  `Id_Qx` int(11) DEFAULT NULL,
  `Duracion` time DEFAULT NULL,
  `Detalle` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citasm`
--

CREATE TABLE `citasm` (
  `IdCitaM` int(11) NOT NULL,
  `idTcita` int(11) DEFAULT NULL,
  `Id_medico` int(11) DEFAULT NULL,
  `CedulaP` varchar(11) NOT NULL,
  `Fech_hora` datetime DEFAULT NULL,
  `estado` enum('Confirmada','No Confirmada') DEFAULT NULL,
  `Valor` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamento`
--

CREATE TABLE `medicamento` (
  `idMedicamento` int(11) NOT NULL,
  `nombreMedicamento` varchar(60) NOT NULL,
  `id_Stock` int(11) DEFAULT NULL,
  `Precio` float DEFAULT NULL,
  `Presentacion` varchar(50) DEFAULT NULL,
  `Prescripciones` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `idMedico` int(11) NOT NULL,
  `nombreMedico` varchar(45) DEFAULT NULL,
  `apellidoMedico` varchar(45) DEFAULT NULL,
  `codigoMedico` varchar(9) DEFAULT NULL,
  `estado` int(11) NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  `correo` char(75) DEFAULT NULL,
  `idespecialidad` int(11) DEFAULT NULL,
  `cedula` varchar(11) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `idOrden` int(11) NOT NULL,
  `tipoOrden_idtipoOrden` int(11) NOT NULL,
  `recetaOrden` text DEFAULT NULL,
  `detallesOrden` text DEFAULT NULL,
  `Urgencia_idUrgencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `cedula` varchar(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido_p` varchar(50) DEFAULT NULL,
  `apellido_m` varchar(50) DEFAULT NULL,
  `Dir_domicilio` varchar(60) DEFAULT NULL,
  `Sexo` enum('M','F') DEFAULT NULL,
  `Etnia` varchar(50) DEFAULT NULL,
  `EstadoCivil` enum('Soltero (a)','Casado (a)','Divorciado (a)','Union Libre','Viudo (a)') DEFAULT NULL,
  `Fecha_Naci` date DEFAULT NULL,
  `T_sangre` enum('O+','O-','A+','A-','B+','B-','AB+','AB-') DEFAULT NULL,
  `HijosV` int(4) DEFAULT 0,
  `HijosM` int(4) DEFAULT 0,
  `Tabaquismo` varchar(50) DEFAULT NULL,
  `Ocupacion` varchar(50) DEFAULT NULL,
  `Cargo` varchar(90) DEFAULT NULL,
  `idPareja` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`cedula`, `nombre`, `apellido_p`, `apellido_m`, `Dir_domicilio`, `Sexo`, `Etnia`, `EstadoCivil`, `Fecha_Naci`, `T_sangre`, `HijosV`, `HijosM`, `Tabaquismo`, `Ocupacion`, `Cargo`, `idPareja`) VALUES
('0000000000', 'Admin', 'Admin', 'Admin', '--', 'M', '--', 'Soltero (a)', '2021-06-27', 'O+', 0, 0, '', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `qx`
--

CREATE TABLE `qx` (
  `idQx` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `estado` enum('Ocupado','Libre') DEFAULT NULL,
  `Descripcion` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `IdReceta` int(11) NOT NULL,
  `Tratamiento` mediumtext DEFAULT NULL,
  `Prescripcion` mediumtext DEFAULT NULL,
  `idMedico` int(11) DEFAULT NULL,
  `CedulaP` varchar(11) DEFAULT NULL,
  `Fecha_R` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `nomRol` varchar(45) DEFAULT NULL,
  `codRol` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `nomRol`, `codRol`) VALUES
(1, 'Admin', '1'),
(2, 'Medico', '2'),
(3, 'Recepcionista', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `id_stock` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `Fech_fabrica` date NOT NULL,
  `fech_Venci` date DEFAULT NULL,
  `estado` enum('Proximo a vencer','Vencido','ok') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoorden`
--

CREATE TABLE `tipoorden` (
  `idtipoOrden` int(11) NOT NULL,
  `conceptoOrden` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `triage`
--

CREATE TABLE `triage` (
  `idTriage` int(11) NOT NULL,
  `nivelNumTriage` int(11) DEFAULT NULL,
  `tipoTriage` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `urgencia`
--

CREATE TABLE `urgencia` (
  `idUrgencia` int(11) NOT NULL,
  `fechaUrgencia` datetime DEFAULT NULL,
  `detallesUrgencia` text DEFAULT NULL,
  `estado` int(11) NOT NULL,
  `Triage_idTriage` int(11) NOT NULL,
  `Medico_idMedico` int(11) NOT NULL,
  `cedula` varchar(11) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `userUsuario` varchar(45) DEFAULT NULL,
  `passUsuario` text DEFAULT NULL,
  `rol_idrol` int(11) NOT NULL,
  `cedulaP` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `FotoPerfilUsuario` text DEFAULT NULL,
  `Estado` enum('activo','inactivo') DEFAULT NULL,
  `ultimo_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `userUsuario`, `passUsuario`, `rol_idrol`, `cedulaP`, `FotoPerfilUsuario`, `Estado`, `ultimo_login`) VALUES
(96, 'admin', '$2a$07$usesomesillystringforegFOeQOp8RK/V8Yn0LZIZwSlh5IkndD.', 1, '0000000000', '', 'activo', '2021-06-27 17:42:58');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cirugias`
--
ALTER TABLE `cirugias`
  ADD PRIMARY KEY (`IdCirugia`),
  ADD KEY `fk_idmedicos` (`IdMedico`),
  ADD KEY `fk_idQx` (`Id_Qx`);

--
-- Indices de la tabla `citasm`
--
ALTER TABLE `citasm`
  ADD PRIMARY KEY (`IdCitaM`),
  ADD KEY `fk_cedulap` (`CedulaP`),
  ADD KEY `Fk_idmedico` (`Id_medico`);

--
-- Indices de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`idMedicamento`),
  ADD KEY `fk_stockm` (`id_Stock`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`idMedico`),
  ADD KEY `fk_Medico_Usuario1` (`Usuario_idUsuario`),
  ADD KEY `fk_cedulaM` (`cedula`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`idOrden`,`tipoOrden_idtipoOrden`),
  ADD KEY `fk_Orden_tipoOrden1` (`tipoOrden_idtipoOrden`),
  ADD KEY `fk_Orden_Urgencia1` (`Urgencia_idUrgencia`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `qx`
--
ALTER TABLE `qx`
  ADD PRIMARY KEY (`idQx`);

--
-- Indices de la tabla `receta`
--
ALTER TABLE `receta`
  ADD PRIMARY KEY (`IdReceta`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_stock`);

--
-- Indices de la tabla `tipoorden`
--
ALTER TABLE `tipoorden`
  ADD PRIMARY KEY (`idtipoOrden`);

--
-- Indices de la tabla `triage`
--
ALTER TABLE `triage`
  ADD PRIMARY KEY (`idTriage`);

--
-- Indices de la tabla `urgencia`
--
ALTER TABLE `urgencia`
  ADD PRIMARY KEY (`idUrgencia`),
  ADD KEY `fk_Urgencia_Triage1` (`Triage_idTriage`),
  ADD KEY `fk_Urgencia_Medico1` (`Medico_idMedico`),
  ADD KEY `fk_Urgencia_persona` (`cedula`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `fk_cedulapersona` (`cedulaP`),
  ADD KEY `fk_Usuario_Rol1` (`rol_idrol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cirugias`
--
ALTER TABLE `cirugias`
  MODIFY `IdCirugia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `citasm`
--
ALTER TABLE `citasm`
  MODIFY `IdCitaM` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  MODIFY `idMedicamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `idMedico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `idOrden` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `qx`
--
ALTER TABLE `qx`
  MODIFY `idQx` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `receta`
--
ALTER TABLE `receta`
  MODIFY `IdReceta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipoorden`
--
ALTER TABLE `tipoorden`
  MODIFY `idtipoOrden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `triage`
--
ALTER TABLE `triage`
  MODIFY `idTriage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `urgencia`
--
ALTER TABLE `urgencia`
  MODIFY `idUrgencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cirugias`
--
ALTER TABLE `cirugias`
  ADD CONSTRAINT `fk_idQx` FOREIGN KEY (`Id_Qx`) REFERENCES `qx` (`idQx`),
  ADD CONSTRAINT `fk_idmedicos` FOREIGN KEY (`IdMedico`) REFERENCES `medico` (`idMedico`);

--
-- Filtros para la tabla `citasm`
--
ALTER TABLE `citasm`
  ADD CONSTRAINT `Fk_idmedico` FOREIGN KEY (`Id_medico`) REFERENCES `medico` (`idMedico`),
  ADD CONSTRAINT `fk_cedulap` FOREIGN KEY (`CedulaP`) REFERENCES `persona` (`cedula`);

--
-- Filtros para la tabla `medicamento`
--
ALTER TABLE `medicamento`
  ADD CONSTRAINT `fk_stockm` FOREIGN KEY (`id_Stock`) REFERENCES `stock` (`id_stock`);

--
-- Filtros para la tabla `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `fk_cedulaM` FOREIGN KEY (`cedula`) REFERENCES `persona` (`cedula`),
  ADD CONSTRAINT `medico_ibfk_1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `fk_Orden_Urgencia1` FOREIGN KEY (`Urgencia_idUrgencia`) REFERENCES `urgencia` (`idUrgencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Orden_tipoOrden1` FOREIGN KEY (`tipoOrden_idtipoOrden`) REFERENCES `tipoorden` (`idtipoOrden`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `urgencia`
--
ALTER TABLE `urgencia`
  ADD CONSTRAINT `fk_Urgencia_Medico1` FOREIGN KEY (`Medico_idMedico`) REFERENCES `medico` (`idMedico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Urgencia_Triage1` FOREIGN KEY (`Triage_idTriage`) REFERENCES `triage` (`idTriage`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Urgencia_persona` FOREIGN KEY (`cedula`) REFERENCES `persona` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_Usuario_Rol1` FOREIGN KEY (`rol_idrol`) REFERENCES `rol` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`cedulaP`) REFERENCES `persona` (`cedula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
