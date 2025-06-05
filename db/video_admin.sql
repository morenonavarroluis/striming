/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.11.11-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: video_admin
-- ------------------------------------------------------
-- Server version	10.11.11-MariaDB-0+deb12u1

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'videos','25d55ad283aa400af464c76d713c07ad');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `duracion` time DEFAULT NULL,
  `formato` varchar(50) NOT NULL,
  `ruta` varchar(255) NOT NULL,
  `fecha_subida` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES
(1,'WhatsApp Video 2025-02-12 at 10.01.06 AM',NULL,'mp4','../videos/WhatsApp Video 2025-02-12 at 10.01.06 AM.mp4','2025-05-20 16:20:10'),
(2,'WhatsApp Video 2025-02-12 at 9.10',NULL,'mp4','../videos/WhatsApp Video 2025-02-12 at 9.10.mp4','2025-05-20 16:20:10'),
(3,'WhatsApp Video 2025-02-17 at 2.58.57 PM',NULL,'mp4','../videos/WhatsApp Video 2025-02-17 at 2.58.57 PM.mp4','2025-05-20 16:20:10'),
(4,'WhatsApp Video 2025-02-24 at 9.52.17 AM',NULL,'mp4','../videos/WhatsApp Video 2025-02-24 at 9.52.17 AM.mp4','2025-05-20 16:20:10'),
(5,'WhatsApp Video 2025-03-05 at 1.29.07 PM',NULL,'mp4','../videos/WhatsApp Video 2025-03-05 at 1.29.07 PM.mp4','2025-05-20 16:20:10'),
(6,'WhatsApp Video 2025-03-05 at 2.32.43 PM',NULL,'mp4','../videos/WhatsApp Video 2025-03-05 at 2.32.43 PM.mp4','2025-05-20 16:20:10'),
(7,'WhatsApp Video 2025-03-05 at 2.57.21 PM',NULL,'mp4','../videos/WhatsApp Video 2025-03-05 at 2.57.21 PM.mp4','2025-05-20 16:20:10'),
(8,'WhatsApp Video 2025-03-05 at 3.09.38 PM',NULL,'mp4','../videos/WhatsApp Video 2025-03-05 at 3.09.38 PM.mp4','2025-05-20 16:20:10'),
(9,'WhatsApp Video 2025-03-05 at 3.45.54 PM',NULL,'mp4','../videos/WhatsApp Video 2025-03-05 at 3.45.54 PM.mp4','2025-05-20 16:20:10'),
(10,'WhatsApp Video 2025-03-06 at 1.33.38 PM',NULL,'mp4','../videos/WhatsApp Video 2025-03-06 at 1.33.38 PM.mp4','2025-05-20 16:20:10'),
(11,'WhatsApp Video 2025-03-10 at 11.15.14 AM',NULL,'mp4','../videos/WhatsApp Video 2025-03-10 at 11.15.14 AM.mp4','2025-05-20 16:20:10'),
(12,'WhatsApp Video 2025-03-10 at 11.21.01 AM',NULL,'mp4','../videos/WhatsApp Video 2025-03-10 at 11.21.01 AM.mp4','2025-05-20 16:20:10'),
(13,'WhatsApp Video 2025-03-10 at 11.31.56 AM',NULL,'mp4','../videos/WhatsApp Video 2025-03-10 at 11.31.56 AM.mp4','2025-05-20 16:20:10'),
(14,'WhatsApp Video 2025-03-10 at 11.33.55 AM',NULL,'mp4','../videos/WhatsApp Video 2025-03-10 at 11.33.55 AM.mp4','2025-05-20 16:20:10'),
(15,'WhatsApp Video 2025-03-10 at 11.36.15 AM',NULL,'mp4','../videos/WhatsApp Video 2025-03-10 at 11.36.15 AM.mp4','2025-05-20 16:20:10'),
(16,'WhatsApp Video 2025-03-10 at 11.48.18 AM',NULL,'mp4','../videos/WhatsApp Video 2025-03-10 at 11.48.18 AM.mp4','2025-05-20 16:20:10'),
(17,'WhatsApp Video 2025-03-10 at 11.49.25 AM',NULL,'mp4','../videos/WhatsApp Video 2025-03-10 at 11.49.25 AM.mp4','2025-05-20 16:20:10'),
(18,'WhatsApp Video 2025-03-10 at 11.51.25 AM',NULL,'mp4','../videos/WhatsApp Video 2025-03-10 at 11.51.25 AM.mp4','2025-05-20 16:20:10'),
(19,'WhatsApp Video 2025-03-10 at 11.54.18 AM',NULL,'mp4','../videos/WhatsApp Video 2025-03-10 at 11.54.18 AM.mp4','2025-05-20 16:20:10'),
(20,'WhatsApp Video 2025-03-10 at 12.00.28 PM',NULL,'mp4','../videos/WhatsApp Video 2025-03-10 at 12.00.28 PM.mp4','2025-05-20 16:20:10'),
(21,'WhatsApp Video 2025-03-10 at 12.37.07 PM',NULL,'mp4','../videos/WhatsApp Video 2025-03-10 at 12.37.07 PM.mp4','2025-05-20 16:20:10'),
(22,'WhatsApp Video 2025-03-18 at 3.02.23 PM',NULL,'mp4','../videos/WhatsApp Video 2025-03-18 at 3.02.23 PM.mp4','2025-05-20 16:20:10'),
(23,'WhatsApp Video 2025-04-04 at 8.59.01 AM',NULL,'mp4','../videos/WhatsApp Video 2025-04-04 at 8.59.01 AM.mp4','2025-05-20 16:20:10'),
(24,'WhatsApp Video 2025-04-07 at 11.22.20 AM(1)',NULL,'mp4','../videos/WhatsApp Video 2025-04-07 at 11.22.20 AM(1).mp4','2025-05-20 16:20:10'),
(25,'WhatsApp Video 2025-04-07 at 11.45.14 AM',NULL,'mp4','../videos/WhatsApp Video 2025-04-07 at 11.45.14 AM.mp4','2025-05-20 16:20:10'),
(26,'WhatsApp Video 2025-04-07 at 11.55.58 AM',NULL,'mp4','../videos/WhatsApp Video 2025-04-07 at 11.55.58 AM.mp4','2025-05-20 16:20:10'),
(27,'WhatsApp Video 2025-04-09 at 9.03.37 AM',NULL,'mp4','../videos/WhatsApp Video 2025-04-09 at 9.03.37 AM.mp4','2025-05-20 16:20:10'),
(28,'WhatsApp Video 2025-04-14 at 10.05.45 AM',NULL,'mp4','../videos/WhatsApp Video 2025-04-14 at 10.05.45 AM.mp4','2025-05-20 16:20:10'),
(29,'WhatsApp Video 2025-04-22 at aniversario 22',NULL,'mp4','../videos/WhatsApp Video 2025-04-22 at aniversario 22.mp4','2025-05-20 16:20:10'),
(30,'WhatsApp Video 2025-04-28 aniversario 22',NULL,'mp4','../videos/WhatsApp Video 2025-04-28 aniversario 22.mp4','2025-05-20 16:20:10'),
(31,'WhatsApp Video 2025-04-28 copa aniversario 22',NULL,'mp4','../videos/WhatsApp Video 2025-04-28 copa aniversario 22.mp4','2025-05-20 16:20:10'),
(32,'WhatsApp Video 2025-04-30 at 9.41.17 AM',NULL,'mp4','../videos/WhatsApp Video 2025-04-30 at 9.41.17 AM.mp4','2025-05-20 16:20:10'),
(33,'WhatsApp Video 2025-05-05 at 9.42.04 AM',NULL,'mp4','../videos/WhatsApp Video 2025-05-05 at 9.42.04 AM.mp4','2025-05-20 16:20:10'),
(34,'WhatsApp Video 2025-05-08 at 10.42.41 AM',NULL,'mp4','../videos/WhatsApp Video 2025-05-08 at 10.42.41 AM.mp4','2025-05-20 16:20:10');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-06-03 15:11:55
