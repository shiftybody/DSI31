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
INSERT INTO `conductores` VALUES (6700000001,'foto.png','David Emmanuel','Cano','Cabrera','2001-10-15','firma.png','Av. Bandera Nacional 185 Col San Agustin','A+','Si','000-418-129-3358','H',1,'Ninguna');
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
  `IDConductor` bigint(10) unsigned zerofill NOT NULL,
  `TipoLicencia` char(2) NOT NULL,
  `FechaExpedicion` date NOT NULL,
  `FechaVencimiento` date DEFAULT NULL,
  `AtributoD` bigint(11) NOT NULL,
  `Restricciones` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IDLicencia`),
  KEY `IDConductor` (`IDConductor`),
  CONSTRAINT `licencias_ibfk_1` FOREIGN KEY (`IDConductor`) REFERENCES `conductores` (`IDconductor`)
) ENGINE=InnoDB AUTO_INCREMENT=8111035537 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `licencias`
--

LOCK TABLES `licencias` WRITE;
/*!40000 ALTER TABLE `licencias` DISABLE KEYS */;
INSERT INTO `licencias` VALUES (8111035536,6700000001,'B','2022-10-31','2027-10-31',65123456789,' ');
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
  `FechaHora` datetime NOT NULL,
  `ReporteSeccion` varchar(50) NOT NULL,
  `NombreVia` varchar(25) NOT NULL,
  `Kilometro` smallint(4) unsigned NOT NULL,
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
  `IDLicencia` bigint(10) unsigned DEFAULT NULL,
  `IDVehiculo` bigint(10) unsigned zerofill DEFAULT NULL,
  `IDTarjeta` bigint(9) unsigned DEFAULT NULL,
  `IDOficial` smallint(4) unsigned zerofill DEFAULT NULL,
  PRIMARY KEY (`IDMulta`),
  UNIQUE KEY `IDLicencia` (`IDLicencia`),
  UNIQUE KEY `IDVehiculo` (`IDVehiculo`),
  UNIQUE KEY `IDTarjeta` (`IDTarjeta`),
  UNIQUE KEY `IDOficial` (`IDOficial`),
  CONSTRAINT `multas_ibfk_1` FOREIGN KEY (`IDOficial`) REFERENCES `oficiales` (`IDOficial`),
  CONSTRAINT `multas_ibfk_2` FOREIGN KEY (`IDLicencia`) REFERENCES `licencias` (`IDLicencia`),
  CONSTRAINT `multas_ibfk_3` FOREIGN KEY (`IDVehiculo`) REFERENCES `vehiculos` (`IDVehiculo`),
  CONSTRAINT `multas_ibfk_4` FOREIGN KEY (`IDTarjeta`) REFERENCES `tarjetas` (`IDTarjeta`)
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
  `IDOficial` smallint(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `ApellidoPaterno` varchar(25) NOT NULL,
  `ApelidoMaterno` varchar(25) NOT NULL,
  `Grupo` varchar(25) NOT NULL,
  `Firma` varchar(50) NOT NULL,
  PRIMARY KEY (`IDOficial`)
) ENGINE=InnoDB AUTO_INCREMENT=8002 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oficiales`
--

LOCK TABLES `oficiales` WRITE;
/*!40000 ALTER TABLE `oficiales` DISABLE KEYS */;
INSERT INTO `oficiales` VALUES (8001,'David','Cano','Perez','5ta division ','firma.png');
/*!40000 ALTER TABLE `oficiales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propietarios`
--

DROP TABLE IF EXISTS `propietarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `propietarios` (
  `IDPropietario` bigint(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `RFC` varchar(13) NOT NULL,
  `Localidad` varchar(50) NOT NULL,
  `Municipio` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `ApellidoPaterno` varchar(25) NOT NULL,
  `ApellidoMaterno` varchar(25) NOT NULL,
  PRIMARY KEY (`IDPropietario`),
  UNIQUE KEY `RFC` (`RFC`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propietarios`
--

LOCK TABLES `propietarios` WRITE;
/*!40000 ALTER TABLE `propietarios` DISABLE KEYS */;
INSERT INTO `propietarios` VALUES (0000000003,'CACD011015hgt','Guanajuato','Dolores','David','Emmanuel','Cano');
/*!40000 ALTER TABLE `propietarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tarjetas`
--

DROP TABLE IF EXISTS `tarjetas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tarjetas` (
  `IDTarjeta` bigint(9) unsigned NOT NULL AUTO_INCREMENT,
  `TipoServicio` varchar(20) NOT NULL,
  `Folio` int(11) NOT NULL,
  `Vigencia` date DEFAULT NULL,
  `Placa` varchar(12) NOT NULL,
  `IDPropietario` bigint(10) unsigned zerofill NOT NULL,
  `IDVehiculo` bigint(10) unsigned zerofill NOT NULL,
  `Operacion` varchar(12) NOT NULL,
  `PlacaAnterior` varchar(12) DEFAULT NULL,
  `NCI` varchar(8) DEFAULT NULL,
  `Uso` varchar(25) NOT NULL,
  `Rfa` varchar(20) DEFAULT NULL,
  `CVE` int(7) NOT NULL,
  `OficinaExpedidora` tinyint(2) NOT NULL,
  `Movimiento` varchar(30) NOT NULL,
  `FechaExpedicion` date NOT NULL,
  `QR` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IDTarjeta`),
  UNIQUE KEY `Folio` (`Folio`),
  KEY `IDPropietario` (`IDPropietario`),
  KEY `IDVehiculo` (`IDVehiculo`),
  CONSTRAINT `tarjetas_ibfk_1` FOREIGN KEY (`IDPropietario`) REFERENCES `propietarios` (`IDPropietario`),
  CONSTRAINT `tarjetas_ibfk_2` FOREIGN KEY (`IDVehiculo`) REFERENCES `vehiculos` (`IDVehiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=650000007 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarjetas`
--

LOCK TABLES `tarjetas` WRITE;
/*!40000 ALTER TABLE `tarjetas` DISABLE KEYS */;
INSERT INTO `tarjetas` VALUES (650000005,'Particular',2147483647,'2022-09-05','2008/UPX017B',0000000003,0000000009,'2022/1211308','2022/1211308','12354687','','xd',123547,9,'REFRENDO CON CANJE DE PLACAS','2022-10-31',NULL);
/*!40000 ALTER TABLE `tarjetas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehiculos`
--

DROP TABLE IF EXISTS `vehiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehiculos` (
  `IDVehiculo` bigint(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `NIV` char(17) NOT NULL,
  `Modelo` smallint(5) unsigned NOT NULL,
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
  `NumSerie` varchar(17) DEFAULT NULL,
  PRIMARY KEY (`IDVehiculo`),
  UNIQUE KEY `NIV` (`NIV`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehiculos`
--

LOCK TABLES `vehiculos` WRITE;
/*!40000 ALTER TABLE `vehiculos` DISABLE KEYS */;
INSERT INTO `vehiculos` VALUES (0000000009,'00000000000000001',2021,'NISSAN','s','d','Nacional','purpura','A','',1,1,2,3,'Gas LP','Automatica','12345678981','123545688789'),(0000000011,'00000000000000002',2018,'NISSAN','d','s','Nacional','d','f','s',1,3,3,1,'Gasolina','Automatica','12345678945','123456789123');
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
  `IDTarjeta` bigint(9) unsigned NOT NULL,
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
  `Holograma` tinyint(2) unsigned zerofill NOT NULL,
  KEY `IDTarjeta` (`IDTarjeta`),
  CONSTRAINT `verificaciones_ibfk_1` FOREIGN KEY (`IDTarjeta`) REFERENCES `tarjetas` (`IDTarjeta`)
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

-- Dump completed on 2022-10-31  6:10:56
