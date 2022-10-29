-- MariaDB dump 10.19  Distrib 10.4.25-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: controlvehicular31
-- ------------------------------------------------------
-- Server version	10.4.25-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `conductores`
--

DROP TABLE IF EXISTS `conductores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conductores` (
  `IDconductor` bigint(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
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
  `Observaciones` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IDconductor`)
) ENGINE=InnoDB AUTO_INCREMENT=6700000013 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conductores`
--

LOCK TABLES `conductores` WRITE;
/*!40000 ALTER TABLE `conductores` DISABLE KEYS */;
INSERT INTO `conductores` VALUES (6700000001,'foto.png','David Emmanuel','Cano','Cabrera','2001-10-15','firma.png','Av. Bandera Nacional 185 Col San Agustin','A+','Si','000-418-129-3358','H',1,'Ninguna'),(6700000011,'foto.png','','Cano','Cabrera','2001-10-15','firma.png','Av. Bandera Nacional 185 Col San Agustin','A+','Si','000-418-129-3358','H',1,'Ninguna'),(6700000012,'hola.png','davidcano','','','3215-12-10','hola','','A+','Si','000-000-000-0000','H',0,' ');
/*!40000 ALTER TABLE `conductores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `licencias`
--

DROP TABLE IF EXISTS `licencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `licencias` (
  `IDLicencia` bigint(10) unsigned NOT NULL AUTO_INCREMENT,
  `IDConductor` int(10) unsigned NOT NULL,
  `TipoLicencia` char(2) NOT NULL,
  `FechaExpedicion` date NOT NULL DEFAULT current_timestamp(),
  `FechaVencimiento` date DEFAULT NULL,
  `AtributoDesconocido` bigint(11) NOT NULL,
  `Observaciones` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IDLicencia`)
) ENGINE=InnoDB AUTO_INCREMENT=8111035489 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `licencias`
--

LOCK TABLES `licencias` WRITE;
/*!40000 ALTER TABLE `licencias` DISABLE KEYS */;
/*!40000 ALTER TABLE `licencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `multas`
--

DROP TABLE IF EXISTS `multas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `multas` (
  `IDMulta` int(8) NOT NULL,
  `FechaHora` datetime NOT NULL DEFAULT current_timestamp(),
  `ReporteSeccion` int(11) NOT NULL,
  `NombreVia` int(11) NOT NULL,
  `Kilometro` int(11) NOT NULL,
  `Sentido` int(11) NOT NULL,
  `Referencia` int(11) NOT NULL,
  `Municipio` int(11) NOT NULL,
  `Articulo` int(11) NOT NULL,
  `Motivo` int(11) NOT NULL,
  `GarantiaRetenida` int(11) NOT NULL,
  `NoParteAccidente` int(11) NOT NULL,
  `Convenio` int(11) NOT NULL,
  `PuestaDisposicion` int(11) NOT NULL,
  `Deposito` int(11) NOT NULL,
  `ObservacionConductor` int(11) NOT NULL,
  `ObservacionOficial` int(11) NOT NULL,
  `CalificacionBoleta` int(11) NOT NULL,
  `IDLicencia` int(11) NOT NULL,
  `IDVehiculo` int(11) NOT NULL,
  `IDTarjeta` int(11) NOT NULL,
  `IDOficial` int(11) NOT NULL,
  PRIMARY KEY (`IDMulta`),
  UNIQUE KEY `IDLicencia` (`IDLicencia`),
  UNIQUE KEY `IDVehiculo` (`IDVehiculo`),
  UNIQUE KEY `IDTarjeta` (`IDTarjeta`),
  UNIQUE KEY `IDOficial` (`IDOficial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `multas`
--

LOCK TABLES `multas` WRITE;
/*!40000 ALTER TABLE `multas` DISABLE KEYS */;
/*!40000 ALTER TABLE `multas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oficiales`
--

DROP TABLE IF EXISTS `oficiales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oficiales` (
  `IDOficial` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `ApellidoPaterno` varchar(25) NOT NULL,
  `ApelidoMaterno` varchar(25) NOT NULL,
  `Grupo` int(50) NOT NULL,
  `Firma` varchar(50) NOT NULL,
  PRIMARY KEY (`IDOficial`)
) ENGINE=InnoDB AUTO_INCREMENT=8000 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oficiales`
--

LOCK TABLES `oficiales` WRITE;
/*!40000 ALTER TABLE `oficiales` DISABLE KEYS */;
/*!40000 ALTER TABLE `oficiales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propietarios`
--

DROP TABLE IF EXISTS `propietarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `propietarios` (
  `IDPropietario` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `RFC` varchar(13) NOT NULL,
  `Localidad` varchar(50) NOT NULL,
  `Municipio` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `ApellidoPaterno` varchar(25) NOT NULL,
  `ApellidoMaterno` varchar(25) NOT NULL,
  PRIMARY KEY (`IDPropietario`),
  UNIQUE KEY `RFC` (`RFC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propietarios`
--

LOCK TABLES `propietarios` WRITE;
/*!40000 ALTER TABLE `propietarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `propietarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tarjetas`
--

DROP TABLE IF EXISTS `tarjetas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tarjetas` (
  `IDTarjeta` int(11) NOT NULL,
  `TipoServicio` int(11) NOT NULL,
  `Folio` int(11) NOT NULL,
  `Vigencia` date DEFAULT NULL,
  `Placa` int(11) NOT NULL,
  `IDPropietario` int(11) NOT NULL,
  `IDVehiculo` int(11) NOT NULL,
  `Operacion` int(11) NOT NULL,
  `PlacaAnterior` int(11) NOT NULL,
  `NCI` int(11) NOT NULL,
  `Uso` int(11) NOT NULL,
  `Rfa` int(11) NOT NULL,
  `CVE` int(11) NOT NULL,
  `OficinaExpedidora` int(11) NOT NULL,
  `Movimiento` int(11) NOT NULL,
  `FechaExpedicion` int(11) NOT NULL,
  `QR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarjetas`
--

LOCK TABLES `tarjetas` WRITE;
/*!40000 ALTER TABLE `tarjetas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tarjetas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehiculos`
--

DROP TABLE IF EXISTS `vehiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehiculos` (
  `IDVehiculo` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `NIV` char(17) NOT NULL,
  `Modelo` smallint(5) unsigned NOT NULL,
  `Marca` varchar(25) NOT NULL,
  `Linea` varchar(25) NOT NULL,
  `Sublinea` varchar(25) NOT NULL,
  `Origen` varchar(20) NOT NULL,
  `Color` varchar(25) NOT NULL,
  `Clase` varchar(20) NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `NumCilindros` tinyint(2) unsigned NOT NULL,
  `Capacidad` tinyint(3) unsigned NOT NULL,
  `NumPuertas` tinyint(3) unsigned DEFAULT NULL,
  `NumAsientos` tinyint(3) unsigned NOT NULL,
  `Combustible` varchar(15) NOT NULL,
  `Transmision` varchar(15) NOT NULL,
  `NumMotor` char(11) NOT NULL,
  `NumSerie` char(17) NOT NULL,
  PRIMARY KEY (`IDVehiculo`),
  UNIQUE KEY `NIV` (`NIV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehiculos`
--

LOCK TABLES `vehiculos` WRITE;
/*!40000 ALTER TABLE `vehiculos` DISABLE KEYS */;
/*!40000 ALTER TABLE `vehiculos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verificaciones`
--

DROP TABLE IF EXISTS `verificaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verificaciones` (
  `FolioVerificacion` int(10) unsigned NOT NULL,
  `IDTarjeta` int(11) NOT NULL,
  `EntidadFederativa` int(11) NOT NULL,
  `Municipio` int(11) NOT NULL,
  `NumCentro` varchar(30) NOT NULL,
  `NumLinea` tinyint(4) NOT NULL,
  `NombreTecnico` int(11) NOT NULL,
  `FechaExpedicion` int(11) NOT NULL,
  `FechaVencimiento` int(11) NOT NULL,
  `HoraEntrada` time NOT NULL,
  `HoraSalida` time NOT NULL,
  `MotivoVerificacion` int(11) NOT NULL,
  `Semestre` int(11) NOT NULL,
  `Dictamen` int(11) NOT NULL,
  `Holograma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verificaciones`
--

LOCK TABLES `verificaciones` WRITE;
/*!40000 ALTER TABLE `verificaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `verificaciones` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-28 23:57:09
