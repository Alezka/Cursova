-- MySQL dump 10.13  Distrib 5.7.28, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: barbershop2
-- ------------------------------------------------------
-- Server version	5.7.28-log

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
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id_customer` int(11) NOT NULL,
  `name` int(11) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_customer`),
  CONSTRAINT `customers_our_orders_id_order_fk` FOREIGN KEY (`id_customer`) REFERENCES `our_orders` (`id_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,NULL,676450600),(2,NULL,676450601),(3,NULL,676450602),(4,NULL,676450603),(5,NULL,676450605),(6,NULL,676450606),(7,NULL,676450607),(8,NULL,676450608),(9,NULL,676450609),(10,NULL,676450610),(11,NULL,676450611),(12,NULL,676450612),(13,NULL,676450613),(14,NULL,676450614),(15,NULL,676450615),(16,NULL,676450616),(17,NULL,676450617),(18,NULL,676450618),(19,NULL,676450619),(20,NULL,676450620);
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `our_orders`
--

DROP TABLE IF EXISTS `our_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `our_orders` (
  `id_order` int(11) NOT NULL,
  `id_servises` int(11) DEFAULT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `id_worker` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `our_orders`
--

LOCK TABLES `our_orders` WRITE;
/*!40000 ALTER TABLE `our_orders` DISABLE KEYS */;
INSERT INTO `our_orders` VALUES (1,2,10,NULL),(2,5,20,NULL),(3,1,1,NULL),(4,5,5,NULL),(5,9,18,NULL),(6,11,11,NULL),(7,14,15,NULL),(8,13,6,NULL),(9,10,9,NULL),(10,9,7,NULL),(11,13,3,NULL),(12,5,5,NULL),(13,6,15,NULL),(14,3,18,NULL),(15,8,19,NULL),(16,7,12,NULL),(17,6,14,NULL),(18,11,16,NULL),(19,2,2,NULL),(20,1,8,NULL);
/*!40000 ALTER TABLE `our_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salary` (
  `id_worker` int(11) NOT NULL,
  `size_salary` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_worker`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salary`
--

LOCK TABLES `salary` WRITE;
/*!40000 ALTER TABLE `salary` DISABLE KEYS */;
INSERT INTO `salary` VALUES (1,20000),(2,25000),(3,30000),(4,27000);
/*!40000 ALTER TABLE `salary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id_service` int(11) NOT NULL,
  `name` tinytext,
  `prise` int(11) DEFAULT NULL,
  `discont` tinyint(4) DEFAULT NULL,
  `photo_services` tinytext,
  PRIMARY KEY (`id_service`),
  CONSTRAINT `services_our_orders_id_order_fk` FOREIGN KEY (`id_service`) REFERENCES `our_orders` (`id_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Men’s Facial',15,1,'img/1.webp'),(2,'Clean Cut',18,0,'img/our_servise_3.webp'),(3,'Classic haircut',15,0,'img/our_servise_2.webp'),(4,'Haircut and shampoo',20,1,'img/our_servise_4.webp'),(5,'Close Shave',15,0,'img/1.webp'),(6,'Hair treatment',20,0,'img/our_servise_6.webp'),(7,'Razor Cut',15,1,'img/our_servise_7.webp'),(8,'Beard trimming',12,0,'img/our_servise_8.webp'),(9,'Face Massage',18,0,'img/our_service_9.jpg'),(10,'Beard and moustache',20,1,'img/our_service_10.jpg'),(11,'Classic manicure',13,0,'img/ourservices_nails.png'),(12,'Eyebrow shaping',9,0,'img/services_eyebrow.png'),(13,'Baby haircut',14,0,'img/servise_babycut.png'),(14,'SPECIALY CUT',20,1,'img/services_specialitycut.png');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workers`
--

DROP TABLE IF EXISTS `workers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workers` (
  `id_worker` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `specialization` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_worker`),
  CONSTRAINT `workers_our_orders_id_order_fk` FOREIGN KEY (`id_worker`) REFERENCES `our_orders` (`id_order`),
  CONSTRAINT `workers_salary_id_worker_fk` FOREIGN KEY (`id_worker`) REFERENCES `salary` (`id_worker`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workers`
--

LOCK TABLES `workers` WRITE;
/*!40000 ALTER TABLE `workers` DISABLE KEYS */;
INSERT INTO `workers` VALUES (1,'Macau Wilium','Massage Master','img/worker1.webp'),(2,'Dan Jacky','Mens Cut','img/worker2.webp'),(3,'Luka Luka','Mens Cut','img/worker3.webp'),(4,'Rona Dana','Ladies Cut, Manicure Master','img/worker4.webp');
/*!40000 ALTER TABLE `workers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-24 18:08:36
