-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: dbbitwear
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `tcarrito`
--

DROP TABLE IF EXISTS `tcarrito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tcarrito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_producto` (`id_producto`),
  CONSTRAINT `tcarrito_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tuser` (`id`),
  CONSTRAINT `tcarrito_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `tproductos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tcarrito`
--

LOCK TABLES `tcarrito` WRITE;
/*!40000 ALTER TABLE `tcarrito` DISABLE KEYS */;
INSERT INTO `tcarrito` VALUES (3,NULL,NULL,1),(4,3,NULL,1),(7,3,4,1),(10,3,3,1),(11,3,NULL,1),(13,3,10,1),(14,3,NULL,1),(15,3,NULL,1);
/*!40000 ALTER TABLE `tcarrito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tcategoria`
--

DROP TABLE IF EXISTS `tcategoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tcategoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tcategoria`
--

LOCK TABLES `tcategoria` WRITE;
/*!40000 ALTER TABLE `tcategoria` DISABLE KEYS */;
INSERT INTO `tcategoria` VALUES (1,'Ropa'),(2,'Accesorios');
/*!40000 ALTER TABLE `tcategoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tproductos`
--

DROP TABLE IF EXISTS `tproductos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tproductos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `precio` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `tproductos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `tcategoria` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tproductos`
--

LOCK TABLES `tproductos` WRITE;
/*!40000 ALTER TABLE `tproductos` DISABLE KEYS */;
INSERT INTO `tproductos` VALUES (2,'Camiseta','Camiseta star wars',15,'imagenes/camiseta-star-wars.jpg',1),(3,'Sudadera','sudera notorius',15,'imagenes/sudadera_notorius.jpg',1),(4,'Sudadera','Sudadera plan bitcoin',15,'imagenes/sudadera_plan.jpg',1),(5,'Camiseta','Camiseta taxes',15,'imagenes/taxes.png',1),(6,'Sudadera','Sudadera ethereum',15,'imagenes/ethereum.jpg',1),(7,'Camiseta','Camiseta to the moon',15,'imagenes/moon.jpg',1),(9,'Cartera','Cartera bitcoin',15,'imagenes/cartera.jpg',2),(10,'Gorra','Gorra de  bitcoin',15,'imagenes/gorra.jpg',2),(11,'Anillo','Anillo bitcoin',15,'imagenes/anillo.png',2);
/*!40000 ALTER TABLE `tproductos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tuser`
--

DROP TABLE IF EXISTS `tuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `encrypted_password` varchar(100) NOT NULL,
  `active_session_token` char(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tuser`
--

LOCK TABLES `tuser` WRITE;
/*!40000 ALTER TABLE `tuser` DISABLE KEYS */;
INSERT INTO `tuser` VALUES (1,'asfa','sadfas','','$2y$10$xfdfCNJiLzksvBBGt9AiKu1ll1YNXb3LCZxZvNGn2MiwvYpJ77ZrW',NULL),(2,'xoel','xoel','','$2y$10$j3X1XPGKvwBAP2pJPbA1SOJY9G8HR92aHCvvEzBYMuBe5Iy0523iu',NULL),(3,'xoelgarcia27@gmail.com','xoel','','$2y$10$OPcqLOre3iwvJA.12SCcsej2FU35gH8XUeXsC8hsPKVpuONbBCvIm',NULL),(4,'ruben@gmail.com','Ruben','','$2y$10$Smn6l5BPVbgj2d8pzmjBC.6LI2YFrX781.satEtj9ev/Iu6XNX4Vu',NULL),(5,'patriciamuoz19@gmail.com','patri','','$2y$10$fKkOsMC1byaW1i2A1TNYO.2VSy4/wl8lZNyy4sH8U6t0vitZmiwQq',NULL);
/*!40000 ALTER TABLE `tuser` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-05 19:35:00
