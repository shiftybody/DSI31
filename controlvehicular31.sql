-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 08:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `controlvehicular31`
--

-- --------------------------------------------------------

--
-- Table structure for table `conductores`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conductores`
--

INSERT INTO `conductores` (`IDconductor`, `Fotografia`, `Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `FechaNacimiento`, `Firma`, `Domicilio`, `GrupoSanguineo`, `Donador`, `NumEmergencia`, `Sexo`, `Antiguedad`, `Observaciones`) VALUES
(6, 'sdf', 'sadf', 'asdf', 'asdf', '2023-01-19', 'asdf', 'asdf', 'B', 'Si', '123-000-000-0000', 'H', 1, 'asdf'),
(23, 'Screenshot_20221027_041112.png', 'David Emmanuel', 'Cano', 'Cabrera', '2023-01-06', 'Screenshot_20221028_030745.png', 'Av. Bandera Nacional 185 Col San Agustin', 'A-', 'Si', '000-418-129-3358', 'H', 4, 'asdf'),
(24, 'Screenshot_20221027_041112.png', 'David Emmanuel', 'Cano', 'Cabrera', '2023-01-05', 'Screenshot_20221103_090659.png', 'Av. Bandera Nacional 185 Col San Agustin', 'A-', 'Si', '123-000-000-0000', 'H', 4, 'asdf'),
(25, 'Screenshot_20221101_125815.png', 'David Emmanuel', 'Cano', 'Cabrera', '2023-01-12', 'Screenshot_20221103_085802.png', 'penjamito', 'B+', 'No', '000-418-129-3358', 'H', 4, 'asdf'),
(27, 'Screenshot_20221114_084326.png', 'shiftybody', 'Cano', 'asdf', '2023-01-06', 'Screenshot_20221101_125815.png', 'Av. Bandera Nacional 185 Col San Agustin', 'A-', 'No', '000-418-129-3358', 'H', 4, 'sdf'),
(29, 'Screenshot_20221107_064959.png', 'David Emmanuel', 'Cano', 'Cabrera', '2022-12-02', 'Screenshot_20221103_090659.png', 'Av. Bandera Nacional 185 Col San Agustin', 'B-', 'Si', '000-418-129-3358', 'H', 4, 'asdf'),
(30, 'Screenshot_20221027_041112.png', 'asdf', 'asdf', 'asdf', '2023-01-06', 'Screenshot_20221028_030745.png', 'Av. Bandera Nacional 185 Col San Agustin', 'B-', 'Si', '000-418-129-3358', 'H', 4, 'asdf'),
(31, 'Screenshot_20221027_041112.png', 'asdf', 'asdf', 'asdf', '2023-01-06', 'Screenshot_20221028_030745.png', 'Av. Bandera Nacional 185 Col San Agustin', 'B-', 'Si', '000-418-129-3358', 'H', 4, 'asdf'),
(33, 'Screenshot_20221113_113825.png', 'David Emmanuel', 'Cano', 'Cabrera', '2023-01-06', 'Screenshot_20221027_041112.png', 'Av. Bandera Nacional 185 Col San Agustin', 'B-', 'Si', '000-418-129-3358', 'M', 4, '23'),
(34, 'Screenshot_20221113_113825.png', 'David Emmanuel', 'Cano', 'Cabrera', '2023-01-06', 'Screenshot_20221027_041112.png', 'Av. Bandera Nacional 185 Col San Agustin', 'B-', 'Si', '000-418-129-3358', 'M', 4, '23'),
(35, 'fblue.png', 'David Emmanuel', 'Cano', 'Cabrera', '2023-01-07', 'loto.png', 'Av. Bandera Nacional 185 Col San Agustin', 'B+', 'No', '000-418-129-3358', 'H', 4, 'asdf'),
(37, 'fblue.png', 'David Emmanuel', 'Cano', 'Cabrera', '2023-01-07', 'loto.png', 'Av. Bandera Nacional 185 Col San Agustin', 'B+', 'No', '000-418-129-3358', 'H', 4, 'asdf'),
(39, 'BD231_297140_EvaluaciónDocente.png', 'David Emmanuel', 'Cano', 'Cabrera', '2023-01-19', 'Screenshot_20221027_041112.png', 'Av. Bandera Nacional 185 Col San Agustin', 'A-', 'Si', '000-418-129-3358', 'M', 4, '87'),
(40, 'BD231_297140_EvaluaciónDocente.png', 'David Emmanuel', 'Cano', 'Cabrera', '2023-01-19', 'Screenshot_20221027_041112.png', 'Av. Bandera Nacional 185 Col San Agustin', 'A-', 'Si', '000-418-129-3358', 'M', 4, '87'),
(41, 'Foto.jpeg', 'David Emmanuel', 'Cano', 'Cabrera', '2023-01-14', 'tcq.jpg', 'Av. Bandera Nacional 185 Col San Agustin', 'B', 'Si', '000-418-129-3358', 'H', 2, 'qwe'),
(42, 'Captura de pantalla (2).png', 'David Emmanuel', 'Cano', 'Cabrera', '2023-01-07', 'Captura de pantalla (2).png', 'Av. Bandera Nacional 185 Col San Agustin', 'B+', 'Si', '123-000-000-0000', 'H', 4, 'aslkd;fjk'),
(43, 'Foto.jpeg', 'asdf', 'asdf', 'asdf', '2023-01-12', 'tcq.jpg', 'Av. Bandera Nacional 185 Col San Agustin', 'B+', 'Si', '000-418-129-3358', 'M', 2, 'kjhl'),
(44, 'Foto.jpeg', 'asdf', 'asdf', 'asdf', '2023-01-12', 'tcq.jpg', 'Av. Bandera Nacional 185 Col San Agustin', 'B+', 'Si', '000-418-129-3358', 'M', 2, 'kjhl'),
(45, 'Foto.jpeg', 'asdf', 'asdf', 'asdf', '2023-01-12', 'tcq.jpg', 'Av. Bandera Nacional 185 Col San Agustin', 'B+', 'Si', '000-418-129-3358', 'M', 2, 'kjhl'),
(47, 'green-tree-frog-jumping-sequence-isolated-on-white', 'David Emmanuel', 'Cano', 'Cabrera', '2023-01-11', 'Evaluación Docente.png', 'Av. Bandera Nacional 185 Col San Agustin', 'A-', 'Si', '000-418-129-3358', 'H', 4, 'dsaf'),
(48, 'green-tree-frog-jumping-sequence-isolated-on-white', 'David Emmanuel', 'Cano', 'Cabrera', '2023-01-11', 'Evaluación Docente.png', 'Av. Bandera Nacional 185 Col San Agustin', 'A-', 'Si', '000-418-129-3358', 'H', 4, 'dsaf'),
(49, 'green-tree-frog-jumping-sequence-isolated-on-white', 'David Emmanuel', 'Cano', 'Cabrera', '2023-01-11', 'Evaluación Docente.png', 'Av. Bandera Nacional 185 Col San Agustin', 'A-', 'Si', '000-418-129-3358', 'H', 4, 'dsaf'),
(50, 'Screenshot_20221027_041112.png', 'David Emmanuel', 'Cano', 'Cabrera', '2023-01-13', 'BD231_297140_EvaluaciónDocente.png', 'penjamito', 'B+', 'Si', '000-418-129-3358', 'H', 4, 'asdf'),
(51, 'Screenshot_20221027_041112.png', 'David Emmanuel', 'Cano', 'Cabrera', '2023-01-13', 'BD231_297140_EvaluaciónDocente.png', 'penjamito', 'B+', 'Si', '000-418-129-3358', 'H', 4, 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `cuentas`
--

CREATE TABLE `cuentas` (
  `UserName` varchar(30) NOT NULL,
  `Psw` varchar(30) NOT NULL,
  `Rol` char(1) NOT NULL,
  `Estado` tinyint(1) NOT NULL,
  `Intentos` smallint(6) DEFAULT NULL,
  `Bloqueado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cuentas`
--

INSERT INTO `cuentas` (`UserName`, `Psw`, `Rol`, `Estado`, `Intentos`, `Bloqueado`) VALUES
('Ana', 'A1234', 'U', 1, 0, 1),
('Juan', 'J1234', 'A', 1, 0, 0),
('Oscar', 'O1234', 'U', 1, 0, 0),
('Rosa', 'R1234', 'U', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `licencias`
--

CREATE TABLE `licencias` (
  `IDLicencia` bigint(10) UNSIGNED NOT NULL,
  `IDConductor` bigint(10) UNSIGNED NOT NULL,
  `TipoLicencia` char(2) NOT NULL,
  `FechaExpedicion` date NOT NULL,
  `FechaVencimiento` date DEFAULT NULL,
  `AtributoD` bigint(11) NOT NULL,
  `Restricciones` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `licencias`
--

INSERT INTO `licencias` (`IDLicencia`, `IDConductor`, `TipoLicencia`, `FechaExpedicion`, `FechaVencimiento`, `AtributoD`, `Restricciones`) VALUES
(8111035548, 6, 'Ct', '2022-11-20', '1970-01-01', 12345678988, 'holaquehace'),
(8111035551, 6, 'A', '2023-01-18', '2028-01-18', 12345678987, 'ninguna'),
(8111035552, 6, 'A', '2023-01-18', '2028-01-18', 12345678987, 'ninguna'),
(8111035553, 6, 'A', '2023-01-18', '2028-01-18', 12345678987, 'ninguna'),
(8111035554, 6, 'A', '2023-01-18', '2028-01-18', 12345678987, 'ninguna');

-- --------------------------------------------------------

--
-- Table structure for table `multas`
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
  `IDVehiculo` bigint(10) UNSIGNED DEFAULT NULL,
  `IDTarjeta` bigint(9) UNSIGNED DEFAULT NULL,
  `IDOficial` smallint(4) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `multas`
--

INSERT INTO `multas` (`IDMulta`, `FechaHora`, `ReporteSeccion`, `NombreVia`, `Kilometro`, `Sentido`, `Referencia`, `Municipio`, `Articulo`, `Motivo`, `GarantiaRetenida`, `NoParteAccidente`, `Convenio`, `PuestaDisposicion`, `Deposito`, `ObservacionConductor`, `ObservacionOficial`, `CalificacionBoleta`, `IDLicencia`, `IDVehiculo`, `IDTarjeta`, `IDOficial`) VALUES
(10, '2022-11-28 01:00:00', 'sdafasdf', 'xd', 25, 'Oeste', 'sdafasdf', 'Dolores Hidalgo', 13, 'df', 'Licencia', 0, 'SI', 'SI', '4', 'sadfasdf', 'dsfasdf', 'asdfasdf', 8111035548, 2, 13, 1),
(23, '2022-11-28 23:44:35', 'dfasdf', 'libramientoxd', 4, 'Sur', 'dfasdf', 'Dolores Hidalgo', 15, 'sdfasdfsadf', 'TarjetaCirculacion', 0, 'NO', 'NO', '1000', 'asdfasdf', 'dfasdfasdf', 'asdfasdf', 8111035548, 2, 17, 1),
(25, '2023-01-18 11:29:00', 'noAplica', '1', 2, 'Norte', 'abajo del arbol', 'Dolores Hidalgo', 15, 'fasmdf', 'TarjetaCirculacion', 1, 'SI', 'NO', '1', 'asdf', 'jkh', 'ssdf', 8111035548, 2, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `oficiales`
--

CREATE TABLE `oficiales` (
  `IDOficial` smallint(4) UNSIGNED NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `ApellidoPaterno` varchar(25) NOT NULL,
  `ApellidoMaterno` varchar(25) NOT NULL,
  `Grupo` varchar(25) NOT NULL,
  `Firma` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oficiales`
--

INSERT INTO `oficiales` (`IDOficial`, `Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `Grupo`, `Firma`) VALUES
(1, 'David', 'Emmanuel', 'Cano', '31', 'firma.xml');

-- --------------------------------------------------------

--
-- Table structure for table `propietarios`
--

CREATE TABLE `propietarios` (
  `IDPropietario` bigint(10) UNSIGNED NOT NULL,
  `RFC` varchar(13) NOT NULL,
  `Localidad` varchar(50) NOT NULL,
  `Municipio` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `ApellidoPaterno` varchar(25) NOT NULL,
  `ApellidoMaterno` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `propietarios`
--

INSERT INTO `propietarios` (`IDPropietario`, `RFC`, `Localidad`, `Municipio`, `Nombre`, `ApellidoPaterno`, `ApellidoMaterno`) VALUES
(3, '', '', '', '', '', ''),
(6, 'CACD011015HGH', 'Dolores Hidalgo, Guanajuato', 'Dolores Hidalgo', 'Davidodes', 'Canuto', 'Cano');

-- --------------------------------------------------------

--
-- Table structure for table `tarjetas`
--

CREATE TABLE `tarjetas` (
  `IDTarjeta` bigint(9) UNSIGNED NOT NULL,
  `TipoServicio` varchar(20) NOT NULL,
  `Folio` int(11) NOT NULL,
  `Vigencia` varchar(10) DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tarjetas`
--

INSERT INTO `tarjetas` (`IDTarjeta`, `TipoServicio`, `Folio`, `Vigencia`, `Placa`, `IDPropietario`, `IDVehiculo`, `Operacion`, `PlacaAnterior`, `NCI`, `Uso`, `Rfa`, `CVE`, `OficinaExpedidora`, `Movimiento`, `FechaExpedicion`, `QR`) VALUES
(13, 'Publico', 0, '4', '2008/UPX017B', 3, 2, '2022/1211308', '2022/1211308', '12354687', 'PARTICULAR', 'xd', 123547, 4, 'REFRENDO CON CANJE DE PLACAS', '2022-11-18', NULL),
(14, 'Federal', 0, '5', '2008/UPX017B', 3, 2, '2022/1211308', '2022/1211308', '12354687', '', 'asdfg23', 123547, 3, 'REFRENDO CON CANJE DE PLACAS', '2022-11-21', NULL),
(15, 'Federal', 0, '5', '2008/UPX017B', 3, 2, '2022/1211308', '2022/1211308', '12354687', '', 'asdfg23', 123547, 3, 'REFRENDO CON CANJE DE PLACAS', '2022-11-21', NULL),
(17, 'Federal', 0, '5', '2008/UPX017X', 3, 2, '2022/1211308', '2022/1211308', '12354689', 'asd', 'asdfg23', 123547, 4, 'REFRENDO CONdsfas', '2022-11-21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehiculos`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehiculos`
--

INSERT INTO `vehiculos` (`IDVehiculo`, `NIV`, `Modelo`, `Marca`, `Linea`, `Sublinea`, `Origen`, `Color`, `Clase`, `TipoVehiculo`, `NumCilindros`, `Capacidad`, `NumPuertas`, `NumAsientos`, `Combustible`, `Transmision`, `NumMotor`, `NumSerie`) VALUES
(2, '1GNCS12Z6M0246591', 2000, 'NISSAN', 's', 'd', 'Importado', 'negro', 'Automovil', 's', 15, 3, 3, 1, 'Gas Natural', 'Estandar', '12345678945', '123456789126');

-- --------------------------------------------------------

--
-- Table structure for table `verificaciones`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `verificaciones`
--

INSERT INTO `verificaciones` (`FolioVerificacion`, `IDTarjeta`, `EntidadFederativa`, `Municipio`, `NumCentro`, `NumLinea`, `NombreTecnico`, `FechaExpedicion`, `FechaVencimiento`, `HoraEntrada`, `HoraSalida`, `MotivoVerificacion`, `Semestre`, `Dictamen`, `Holograma`) VALUES
(3, 13, 'Aguascalientes', 'Dolores Hidalgo', 'dsajlfjsuhgiwefjds', 0, 'Fernando Ochoa', '2022-11-20', '2022-11-02', '12:40:00', '12:42:00', 'x', '1', 'APROBADO', 01),
(4, 13, 'Estado de México', 'Dolores Hidalgo', 'dsajlfjsuhgiwefjds', 3, 'Fernando Ochoa', '2022-11-10', '2022-11-07', '14:44:00', '14:44:00', 'dfa', '2', 'RECHAZADO', 01);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conductores`
--
ALTER TABLE `conductores`
  ADD PRIMARY KEY (`IDconductor`);

--
-- Indexes for table `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `licencias`
--
ALTER TABLE `licencias`
  ADD PRIMARY KEY (`IDLicencia`),
  ADD KEY `IDConductor` (`IDConductor`);

--
-- Indexes for table `multas`
--
ALTER TABLE `multas`
  ADD PRIMARY KEY (`IDMulta`),
  ADD KEY `IDLicencia` (`IDLicencia`) USING BTREE,
  ADD KEY `IDVehiculo` (`IDVehiculo`) USING BTREE,
  ADD KEY `IDOficial` (`IDOficial`) USING BTREE,
  ADD KEY `IDTarjeta` (`IDTarjeta`) USING BTREE;

--
-- Indexes for table `oficiales`
--
ALTER TABLE `oficiales`
  ADD PRIMARY KEY (`IDOficial`);

--
-- Indexes for table `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`IDPropietario`),
  ADD UNIQUE KEY `RFC` (`RFC`);

--
-- Indexes for table `tarjetas`
--
ALTER TABLE `tarjetas`
  ADD PRIMARY KEY (`IDTarjeta`),
  ADD KEY `IDPropietario` (`IDPropietario`),
  ADD KEY `IDVehiculo` (`IDVehiculo`);

--
-- Indexes for table `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`IDVehiculo`),
  ADD UNIQUE KEY `NIV` (`NIV`);

--
-- Indexes for table `verificaciones`
--
ALTER TABLE `verificaciones`
  ADD PRIMARY KEY (`FolioVerificacion`),
  ADD KEY `IDTarjeta` (`IDTarjeta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conductores`
--
ALTER TABLE `conductores`
  MODIFY `IDconductor` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `licencias`
--
ALTER TABLE `licencias`
  MODIFY `IDLicencia` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8111035555;

--
-- AUTO_INCREMENT for table `multas`
--
ALTER TABLE `multas`
  MODIFY `IDMulta` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `oficiales`
--
ALTER TABLE `oficiales`
  MODIFY `IDOficial` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `propietarios`
--
ALTER TABLE `propietarios`
  MODIFY `IDPropietario` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tarjetas`
--
ALTER TABLE `tarjetas`
  MODIFY `IDTarjeta` bigint(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `IDVehiculo` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `verificaciones`
--
ALTER TABLE `verificaciones`
  MODIFY `FolioVerificacion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `licencias`
--
ALTER TABLE `licencias`
  ADD CONSTRAINT `licencias_ibfk_1` FOREIGN KEY (`IDConductor`) REFERENCES `conductores` (`IDconductor`);

--
-- Constraints for table `multas`
--
ALTER TABLE `multas`
  ADD CONSTRAINT `multas_ibfk_1` FOREIGN KEY (`IDOficial`) REFERENCES `oficiales` (`IDOficial`),
  ADD CONSTRAINT `multas_ibfk_2` FOREIGN KEY (`IDLicencia`) REFERENCES `licencias` (`IDLicencia`),
  ADD CONSTRAINT `multas_ibfk_3` FOREIGN KEY (`IDVehiculo`) REFERENCES `vehiculos` (`IDVehiculo`),
  ADD CONSTRAINT `multas_ibfk_4` FOREIGN KEY (`IDTarjeta`) REFERENCES `tarjetas` (`IDTarjeta`);

--
-- Constraints for table `tarjetas`
--
ALTER TABLE `tarjetas`
  ADD CONSTRAINT `tarjetas_ibfk_1` FOREIGN KEY (`IDPropietario`) REFERENCES `propietarios` (`IDPropietario`),
  ADD CONSTRAINT `tarjetas_ibfk_2` FOREIGN KEY (`IDVehiculo`) REFERENCES `vehiculos` (`IDVehiculo`);

--
-- Constraints for table `verificaciones`
--
ALTER TABLE `verificaciones`
  ADD CONSTRAINT `verificaciones_ibfk_1` FOREIGN KEY (`IDTarjeta`) REFERENCES `tarjetas` (`IDTarjeta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
