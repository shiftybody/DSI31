-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2022 a las 06:39:14
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `controlvehicular31`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductores`
--

CREATE TABLE `conductores` (
  `IDconductor` bigint(10) UNSIGNED NOT NULL,
  `Fotografia` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `ApellidoPaterno` varchar(25) DEFAULT NULL,
  `ApellidoMaterno` varchar(25) DEFAULT NULL,
  `FechaNacimiento` date NOT NULL,
  `Firma` varchar(50) NOT NULL,
  `Domicilio` varchar(100) NOT NULL,
  `GrupoSanguineo` char(3) NOT NULL,
  `Donador` char(2) NOT NULL,
  `NumEmergencia` char(16) NOT NULL,
  `Sexo` char(1) NOT NULL,
  `Antiguedad` tinyint(2) DEFAULT NULL,
  `Observaciones` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `conductores`
--

INSERT INTO `conductores` (`IDconductor`, `Fotografia`, `Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `FechaNacimiento`, `Firma`, `Domicilio`, `GrupoSanguineo`, `Donador`, `NumEmergencia`, `Sexo`, `Antiguedad`, `Observaciones`) VALUES
(4, 'foto.png', 'David', 'Cano', 'Cabrera', '2001-12-10', 'firma.png', 'Av. Bandera Nacional 185 Col San Agustin', 'B+', 'Si', '000-418-129-3358', 'H', 2, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licencias`
--

CREATE TABLE `licencias` (
  `IDLicencia` bigint(10) UNSIGNED NOT NULL,
  `IDConductor` bigint(10) UNSIGNED ZEROFILL NOT NULL,
  `TipoLicencia` char(2) NOT NULL,
  `FechaExpedicion` date NOT NULL,
  `FechaVencimiento` date DEFAULT NULL,
  `AtributoD` bigint(11) NOT NULL,
  `Restricciones` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `licencias`
--

INSERT INTO `licencias` (`IDLicencia`, `IDConductor`, `TipoLicencia`, `FechaExpedicion`, `FechaVencimiento`, `AtributoD`, `Restricciones`) VALUES
(8111035545, 0000000004, 'A', '2022-11-09', '2023-11-09', 12345678987, ' ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multas`
--

CREATE TABLE `multas` (
  `IDMulta` int(8) NOT NULL,
  `FechaHora` datetime NOT NULL,
  `ReporteSeccion` varchar(50) NOT NULL,
  `NombreVia` varchar(25) NOT NULL,
  `Kilometro` smallint(4) UNSIGNED NOT NULL,
  `Sentido` varchar(5) NOT NULL,
  `Referencia` varchar(30) NOT NULL,
  `Municipio` varchar(20) NOT NULL,
  `Articulo` tinyint(3) NOT NULL,
  `Motivo` varchar(150) NOT NULL,
  `GarantiaRetenida` varchar(20) NOT NULL,
  `NoParteAccidente` tinyint(2) DEFAULT NULL,
  `Convenio` char(2) NOT NULL,
  `PuestaDisposicion` char(2) NOT NULL,
  `Deposito` mediumtext DEFAULT NULL,
  `ObservacionConductor` varchar(100) DEFAULT NULL,
  `ObservacionOficial` varchar(100) NOT NULL,
  `CalificacionBoleta` varchar(100) DEFAULT NULL,
  `IDLicencia` bigint(10) UNSIGNED DEFAULT NULL,
  `IDVehiculo` bigint(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `IDTarjeta` bigint(9) UNSIGNED DEFAULT NULL,
  `IDOficial` smallint(4) UNSIGNED ZEROFILL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficiales`
--

CREATE TABLE `oficiales` (
  `IDOficial` smallint(4) UNSIGNED ZEROFILL NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `ApellidoPaterno` varchar(25) NOT NULL,
  `ApelidoMaterno` varchar(25) NOT NULL,
  `Grupo` varchar(25) NOT NULL,
  `Firma` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `oficiales`
--

INSERT INTO `oficiales` (`IDOficial`, `Nombre`, `ApellidoPaterno`, `ApelidoMaterno`, `Grupo`, `Firma`) VALUES
(8002, 'Jacobed', 'Maria', 'Cabrera', 'Divison III', 'firma.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE `propietarios` (
  `IDPropietario` bigint(10) UNSIGNED NOT NULL,
  `RFC` varchar(13) NOT NULL,
  `Localidad` varchar(50) NOT NULL,
  `Municipio` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `ApellidoPaterno` varchar(25) NOT NULL,
  `ApellidoMaterno` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `propietarios`
--

INSERT INTO `propietarios` (`IDPropietario`, `RFC`, `Localidad`, `Municipio`, `Nombre`, `ApellidoPaterno`, `ApellidoMaterno`) VALUES
(4, 'CACD011015HGT', 'El Llanito', 'Dolores Hidalgo', 'David', 'Cano', 'Perez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjetas`
--

CREATE TABLE `tarjetas` (
  `IDTarjeta` bigint(9) UNSIGNED NOT NULL,
  `TipoServicio` varchar(20) NOT NULL,
  `Folio` int(11) NOT NULL,
  `Vigencia` date DEFAULT NULL,
  `Placa` varchar(12) NOT NULL,
  `IDPropietario` bigint(10) UNSIGNED NOT NULL,
  `IDVehiculo` bigint(10) UNSIGNED NOT NULL,
  `Operacion` varchar(12) NOT NULL,
  `PlacaAnterior` varchar(12) DEFAULT NULL,
  `NCI` varchar(8) DEFAULT NULL,
  `Uso` varchar(25) NOT NULL,
  `Rfa` varchar(20) DEFAULT NULL,
  `CVE` int(7) NOT NULL,
  `OficinaExpedidora` tinyint(2) NOT NULL,
  `Movimiento` varchar(30) NOT NULL,
  `FechaExpedicion` date NOT NULL,
  `QR` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tarjetas`
--

INSERT INTO `tarjetas` (`IDTarjeta`, `TipoServicio`, `Folio`, `Vigencia`, `Placa`, `IDPropietario`, `IDVehiculo`, `Operacion`, `PlacaAnterior`, `NCI`, `Uso`, `Rfa`, `CVE`, `OficinaExpedidora`, `Movimiento`, `FechaExpedicion`, `QR`) VALUES
(650000007, 'Particular', 123456790, '2022-11-17', '2008/UPX017B', 4, 14, '2022/1211308', '', '12354687', '', 'xd', 123547, 1, 'REFRENDO CON CANJE DE PLACAS', '2022-11-09', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `IDVehiculo` bigint(10) UNSIGNED NOT NULL,
  `NIV` char(17) NOT NULL,
  `Modelo` smallint(5) UNSIGNED NOT NULL,
  `Marca` varchar(25) NOT NULL,
  `Linea` varchar(25) NOT NULL,
  `Sublinea` varchar(25) DEFAULT NULL,
  `Origen` varchar(20) NOT NULL,
  `Color` varchar(25) NOT NULL,
  `Clase` varchar(20) NOT NULL,
  `TipoVehiculo` varchar(20) NOT NULL,
  `NumCilindros` tinyint(2) NOT NULL,
  `Capacidad` tinyint(3) NOT NULL,
  `NumPuertas` tinyint(3) DEFAULT NULL,
  `NumAsientos` tinyint(3) NOT NULL,
  `Combustible` varchar(15) NOT NULL,
  `Transmision` varchar(15) NOT NULL,
  `NumMotor` char(11) NOT NULL,
  `NumSerie` varchar(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`IDVehiculo`, `NIV`, `Modelo`, `Marca`, `Linea`, `Sublinea`, `Origen`, `Color`, `Clase`, `TipoVehiculo`, `NumCilindros`, `Capacidad`, `NumPuertas`, `NumAsientos`, `Combustible`, `Transmision`, `NumMotor`, `NumSerie`) VALUES
(14, '1GNCS12Z6M0246591', 2022, 'NISSAN', 'Versa', '', 'Nacional', 'negro', 'Automovil', 'S', 1, 4, 3, 2, 'Gas Natural', 'Automatica', '12345678945', '123545688789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `verificaciones`
--

CREATE TABLE `verificaciones` (
  `FolioVerificacion` int(10) UNSIGNED NOT NULL,
  `IDTarjeta` bigint(9) UNSIGNED NOT NULL,
  `EntidadFederativa` varchar(20) NOT NULL,
  `Municipio` varchar(50) NOT NULL,
  `NumCentro` varchar(30) NOT NULL,
  `NumLinea` tinyint(2) NOT NULL,
  `NombreTecnico` varchar(50) NOT NULL,
  `FechaExpedicion` date NOT NULL,
  `FechaVencimiento` date DEFAULT NULL,
  `HoraEntrada` time NOT NULL,
  `HoraSalida` time NOT NULL,
  `MotivoVerificacion` varchar(100) NOT NULL,
  `Semestre` char(1) NOT NULL,
  `Dictamen` varchar(10) DEFAULT NULL,
  `Holograma` tinyint(2) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `verificaciones`
--

INSERT INTO `verificaciones` (`FolioVerificacion`, `IDTarjeta`, `EntidadFederativa`, `Municipio`, `NumCentro`, `NumLinea`, `NombreTecnico`, `FechaExpedicion`, `FechaVencimiento`, `HoraEntrada`, `HoraSalida`, `MotivoVerificacion`, `Semestre`, `Dictamen`, `Holograma`) VALUES
(1, 650000007, 'Campeche', 'Dolores Hidalgo', 'dsajlfjsuhgiwefjds', 0, 'Fernando Ochoa', '2022-11-09', '2022-11-02', '23:36:00', '23:37:00', 'Vehiculo Nuevo', '2', 'RECHAZADO', 01);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conductores`
--
ALTER TABLE `conductores`
  ADD PRIMARY KEY (`IDconductor`);

--
-- Indices de la tabla `licencias`
--
ALTER TABLE `licencias`
  ADD PRIMARY KEY (`IDLicencia`),
  ADD KEY `IDConductor` (`IDConductor`);

--
-- Indices de la tabla `multas`
--
ALTER TABLE `multas`
  ADD PRIMARY KEY (`IDMulta`),
  ADD UNIQUE KEY `IDLicencia` (`IDLicencia`),
  ADD UNIQUE KEY `IDVehiculo` (`IDVehiculo`),
  ADD UNIQUE KEY `IDTarjeta` (`IDTarjeta`),
  ADD UNIQUE KEY `IDOficial` (`IDOficial`);

--
-- Indices de la tabla `oficiales`
--
ALTER TABLE `oficiales`
  ADD PRIMARY KEY (`IDOficial`);

--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`IDPropietario`),
  ADD UNIQUE KEY `RFC` (`RFC`);

--
-- Indices de la tabla `tarjetas`
--
ALTER TABLE `tarjetas`
  ADD PRIMARY KEY (`IDTarjeta`),
  ADD UNIQUE KEY `Folio` (`Folio`),
  ADD KEY `IDPropietario` (`IDPropietario`),
  ADD KEY `IDVehiculo` (`IDVehiculo`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`IDVehiculo`),
  ADD UNIQUE KEY `NIV` (`NIV`);

--
-- Indices de la tabla `verificaciones`
--
ALTER TABLE `verificaciones`
  ADD PRIMARY KEY (`FolioVerificacion`),
  ADD KEY `IDTarjeta` (`IDTarjeta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conductores`
--
ALTER TABLE `conductores`
  MODIFY `IDconductor` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `licencias`
--
ALTER TABLE `licencias`
  MODIFY `IDLicencia` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8111035546;

--
-- AUTO_INCREMENT de la tabla `multas`
--
ALTER TABLE `multas`
  MODIFY `IDMulta` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `oficiales`
--
ALTER TABLE `oficiales`
  MODIFY `IDOficial` smallint(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8004;

--
-- AUTO_INCREMENT de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  MODIFY `IDPropietario` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tarjetas`
--
ALTER TABLE `tarjetas`
  MODIFY `IDTarjeta` bigint(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=650000008;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `IDVehiculo` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `verificaciones`
--
ALTER TABLE `verificaciones`
  MODIFY `FolioVerificacion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `licencias`
--
ALTER TABLE `licencias`
  ADD CONSTRAINT `licencias_ibfk_1` FOREIGN KEY (`IDConductor`) REFERENCES `conductores` (`IDconductor`);

--
-- Filtros para la tabla `multas`
--
ALTER TABLE `multas`
  ADD CONSTRAINT `multas_ibfk_1` FOREIGN KEY (`IDOficial`) REFERENCES `oficiales` (`IDOficial`),
  ADD CONSTRAINT `multas_ibfk_2` FOREIGN KEY (`IDLicencia`) REFERENCES `licencias` (`IDLicencia`),
  ADD CONSTRAINT `multas_ibfk_3` FOREIGN KEY (`IDVehiculo`) REFERENCES `vehiculos` (`IDVehiculo`),
  ADD CONSTRAINT `multas_ibfk_4` FOREIGN KEY (`IDTarjeta`) REFERENCES `tarjetas` (`IDTarjeta`);

--
-- Filtros para la tabla `tarjetas`
--
ALTER TABLE `tarjetas`
  ADD CONSTRAINT `tarjetas_ibfk_1` FOREIGN KEY (`IDPropietario`) REFERENCES `propietarios` (`IDPropietario`),
  ADD CONSTRAINT `tarjetas_ibfk_2` FOREIGN KEY (`IDVehiculo`) REFERENCES `vehiculos` (`IDVehiculo`);

--
-- Filtros para la tabla `verificaciones`
--
ALTER TABLE `verificaciones`
  ADD CONSTRAINT `verificaciones_ibfk_1` FOREIGN KEY (`IDTarjeta`) REFERENCES `tarjetas` (`IDTarjeta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
