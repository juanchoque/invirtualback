-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: inmobiliaria_virtual
-- ------------------------------------------------------
-- Server version	5.6.14

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aviso`
--

DROP TABLE IF EXISTS `aviso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aviso` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `orden` int(11) NOT NULL DEFAULT '0',
  `estado` varchar(1) NOT NULL DEFAULT 'A',
  `telefono` varchar(20) NOT NULL,
  `empresap` varchar(255) NOT NULL,
  `latitud` varchar(255) NOT NULL,
  `longitud` varchar(255) NOT NULL,
  `web` varchar(255) NOT NULL DEFAULT '#',
  `wat` varchar(255) NOT NULL DEFAULT '',
  `face` varchar(255) NOT NULL DEFAULT '#',
  `publicado` int(10) NOT NULL DEFAULT '0',
  `promocion` int(10) NOT NULL DEFAULT '0',
  `precio` float NOT NULL DEFAULT '0',
  `comision` float NOT NULL DEFAULT '0',
  `fec_publicacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fec_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fec_modificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fec_fin_publicacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cuenta` bigint(20) unsigned NOT NULL,
  `sub_categoria` int(10) unsigned NOT NULL,
  `tipo_aviso` int(10) unsigned NOT NULL,
  `transaccion_aviso` int(20) unsigned NOT NULL,
  `imagen` longtext,
  `direccion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cuenta` (`cuenta`),
  KEY `sub_categoria` (`sub_categoria`),
  KEY `tipo_aviso` (`tipo_aviso`),
  KEY `transaccion_aviso` (`transaccion_aviso`),
  CONSTRAINT `aviso_ibfk_1` FOREIGN KEY (`cuenta`) REFERENCES `cuenta` (`id`),
  CONSTRAINT `aviso_ibfk_2` FOREIGN KEY (`sub_categoria`) REFERENCES `sub_categoria` (`id`),
  CONSTRAINT `aviso_ibfk_3` FOREIGN KEY (`tipo_aviso`) REFERENCES `tipo_aviso` (`id`),
  CONSTRAINT `aviso_ibfk_4` FOREIGN KEY (`transaccion_aviso`) REFERENCES `transaccion_aviso` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=322 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aviso`
--

LOCK TABLES `aviso` WRITE;
/*!40000 ALTER TABLE `aviso` DISABLE KEYS */;
INSERT INTO `aviso` VALUES (320,'otro mod 6','descripcion nuevo6',0,'A','788834388','','-17.398163','-66.198642','#','','#',0,0,56464,0,'2018-02-25 20:11:33','2018-02-25 20:11:33','2018-02-25 20:11:33','2018-02-25 20:11:33',51,1,1,1,'imagen','direccion'),(321,'otro mod 6','descripcion nuevo6',0,'A','788834388','','-17.398163','-66.198642','#','','#',0,0,56464,0,'2018-02-25 20:12:41','2018-02-25 20:12:41','2018-02-25 20:12:41','2018-02-25 20:12:41',51,1,1,2,'imagen','direccion');
/*!40000 ALTER TABLE `aviso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bitacora`
--

DROP TABLE IF EXISTS `bitacora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bitacora` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imei` varchar(20) NOT NULL,
  `fec_actualizacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `operacion` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bitacora`
--

LOCK TABLES `bitacora` WRITE;
/*!40000 ALTER TABLE `bitacora` DISABLE KEYS */;
INSERT INTO `bitacora` VALUES (122,'8959102061629836774','2018-02-25 20:13:29',1),(123,'2342434243','2018-02-25 16:59:45',1),(124,'89591020616298367743','2018-02-25 17:16:35',1),(125,'89591020616298367746','2018-02-25 17:41:06',1);
/*!40000 ALTER TABLE `bitacora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `orden` int(11) NOT NULL DEFAULT '0',
  `estado` varchar(1) NOT NULL DEFAULT 'A',
  `empresa` int(11) NOT NULL DEFAULT '0',
  `imagen` varchar(255) NOT NULL DEFAULT 'default.png',
  `fec_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fec_modificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'categoria1',0,'A',0,'default.png','2018-02-13 03:12:22','2018-02-13 03:12:22');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ciudad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `orden` int(11) NOT NULL DEFAULT '0',
  `estado` varchar(1) NOT NULL DEFAULT 'A',
  `fec_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fec_modificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pais` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pais` (`pais`),
  CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`pais`) REFERENCES `pais` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciudad`
--

LOCK TABLES `ciudad` WRITE;
/*!40000 ALTER TABLE `ciudad` DISABLE KEYS */;
INSERT INTO `ciudad` VALUES (1,'Cochabamba',0,'A','2018-02-17 23:47:59','2018-02-17 23:47:59',1);
/*!40000 ALTER TABLE `ciudad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuenta`
--

DROP TABLE IF EXISTS `cuenta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cuenta` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombres` varchar(255) NOT NULL,
  `aparteno` varchar(255) DEFAULT NULL,
  `amaterno` varchar(255) DEFAULT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `estado` varchar(1) NOT NULL DEFAULT 'A',
  `fec_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fec_modificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `latitud` varchar(255) DEFAULT NULL,
  `longitud` varchar(250) DEFAULT NULL,
  `observacion` text,
  `link` varchar(255) DEFAULT NULL,
  `fecFin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ci` varchar(100) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `whatsapp` varchar(20) DEFAULT NULL,
  `web` varchar(255) DEFAULT NULL,
  `face` varchar(255) DEFAULT NULL,
  `nombre_empresa` varchar(255) NOT NULL,
  `telefono_empresa` varchar(255) NOT NULL,
  `direccion_empresa` varchar(255) NOT NULL,
  `tipo_cuenta` int(10) unsigned NOT NULL,
  `ciudad` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tipo_cuenta` (`tipo_cuenta`),
  KEY `ciudad` (`ciudad`),
  CONSTRAINT `cuenta_ibfk_1` FOREIGN KEY (`tipo_cuenta`) REFERENCES `tipo_cuenta` (`id`),
  CONSTRAINT `cuenta_ibfk_2` FOREIGN KEY (`ciudad`) REFERENCES `ciudad` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuenta`
--

LOCK TABLES `cuenta` WRITE;
/*!40000 ALTER TABLE `cuenta` DISABLE KEYS */;
INSERT INTO `cuenta` VALUES (50,'ryrye','fjj','fhfjh','','','A','2018-02-25 14:42:33','2018-02-25 14:42:33',NULL,NULL,NULL,NULL,'2018-02-25 14:42:33',NULL,NULL,NULL,'8959102061629836774',NULL,NULL,NULL,'','','',1,1),(51,'juan','','baldiviezo','','','A','2018-02-25 15:11:43','2018-02-25 15:11:43',NULL,NULL,NULL,NULL,'2018-02-25 15:11:43',NULL,NULL,NULL,'89591020616298367743',NULL,NULL,NULL,'','','',1,1);
/*!40000 ALTER TABLE `cuenta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagen_aviso`
--

DROP TABLE IF EXISTS `imagen_aviso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagen_aviso` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `estado` varchar(1) NOT NULL DEFAULT 'A',
  `orden` int(11) NOT NULL DEFAULT '0',
  `aviso` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `aviso` (`aviso`),
  CONSTRAINT `imagen_aviso_ibfk_1` FOREIGN KEY (`aviso`) REFERENCES `aviso` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagen_aviso`
--

LOCK TABLES `imagen_aviso` WRITE;
/*!40000 ALTER TABLE `imagen_aviso` DISABLE KEYS */;
/*!40000 ALTER TABLE `imagen_aviso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pais`
--

DROP TABLE IF EXISTS `pais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pais` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `orden` int(11) NOT NULL DEFAULT '0',
  `estado` varchar(1) NOT NULL DEFAULT 'A',
  `fec_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fec_modificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pais`
--

LOCK TABLES `pais` WRITE;
/*!40000 ALTER TABLE `pais` DISABLE KEYS */;
INSERT INTO `pais` VALUES (1,'Bolivia',0,'A','2018-02-17 23:47:26','2018-02-17 23:47:26');
/*!40000 ALTER TABLE `pais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permiso`
--

DROP TABLE IF EXISTS `permiso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permiso` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `estado` varchar(1) NOT NULL DEFAULT 'A',
  `orden` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permiso`
--

LOCK TABLES `permiso` WRITE;
/*!40000 ALTER TABLE `permiso` DISABLE KEYS */;
INSERT INTO `permiso` VALUES (1,'Admin','','','A',0),(2,'Usuario','','','A',1);
/*!40000 ALTER TABLE `permiso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_categoria`
--

DROP TABLE IF EXISTS `sub_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sub_categoria` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `orden` int(11) NOT NULL DEFAULT '0',
  `estado` varchar(1) NOT NULL DEFAULT 'A',
  `imagen` varchar(255) NOT NULL DEFAULT 'default.png',
  `fec_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fec_modificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `latitud` varchar(100) DEFAULT NULL,
  `longitud` varchar(100) DEFAULT NULL,
  `categoria` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categoria` (`categoria`),
  CONSTRAINT `sub_categoria_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_categoria`
--

LOCK TABLES `sub_categoria` WRITE;
/*!40000 ALTER TABLE `sub_categoria` DISABLE KEYS */;
INSERT INTO `sub_categoria` VALUES (1,'sub categoria1',0,'A','default.png','2018-02-13 03:13:27','2018-02-13 03:13:27',NULL,NULL,1);
/*!40000 ALTER TABLE `sub_categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_aviso`
--

DROP TABLE IF EXISTS `tipo_aviso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_aviso` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) DEFAULT NULL,
  `estado` varchar(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_aviso`
--

LOCK TABLES `tipo_aviso` WRITE;
/*!40000 ALTER TABLE `tipo_aviso` DISABLE KEYS */;
INSERT INTO `tipo_aviso` VALUES (1,'Casa/Chalet','A'),(2,'Departamento','A'),(3,'Habitacion','A'),(4,'Local Comercial/Tienda','A'),(5,'Oficina','A'),(6,'Edificio','A'),(7,'Otros','A'),(8,'Todos','A');
/*!40000 ALTER TABLE `tipo_aviso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_cuenta`
--

DROP TABLE IF EXISTS `tipo_cuenta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_cuenta` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `orden` int(11) NOT NULL DEFAULT '0',
  `estado` varchar(1) NOT NULL DEFAULT 'A',
  `fec_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fec_modificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_cuenta`
--

LOCK TABLES `tipo_cuenta` WRITE;
/*!40000 ALTER TABLE `tipo_cuenta` DISABLE KEYS */;
INSERT INTO `tipo_cuenta` VALUES (1,'Comun',0,'A','2018-02-17 23:40:34','2018-02-17 23:40:34');
/*!40000 ALTER TABLE `tipo_cuenta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_cuenta_permiso`
--

DROP TABLE IF EXISTS `tipo_cuenta_permiso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_cuenta_permiso` (
  `id` bigint(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_cuenta` int(10) unsigned NOT NULL,
  `permiso` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tipo_cuenta` (`tipo_cuenta`),
  KEY `permiso` (`permiso`),
  CONSTRAINT `tipo_cuenta_permiso_ibfk_1` FOREIGN KEY (`tipo_cuenta`) REFERENCES `tipo_cuenta` (`id`),
  CONSTRAINT `tipo_cuenta_permiso_ibfk_2` FOREIGN KEY (`permiso`) REFERENCES `permiso` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_cuenta_permiso`
--

LOCK TABLES `tipo_cuenta_permiso` WRITE;
/*!40000 ALTER TABLE `tipo_cuenta_permiso` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_cuenta_permiso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaccion_aviso`
--

DROP TABLE IF EXISTS `transaccion_aviso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaccion_aviso` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) DEFAULT NULL,
  `estado` varchar(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaccion_aviso`
--

LOCK TABLES `transaccion_aviso` WRITE;
/*!40000 ALTER TABLE `transaccion_aviso` DISABLE KEYS */;
INSERT INTO `transaccion_aviso` VALUES (1,'Venta','A'),(2,'Alquiler','A'),(3,'Anticretico','A'),(4,'Otros','A'),(5,'Todos','A');
/*!40000 ALTER TABLE `transaccion_aviso` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-25 18:26:51
