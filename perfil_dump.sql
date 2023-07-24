-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: perfil
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photo` longblob,
  `name` varchar(50) DEFAULT NULL,
  `bio` varchar(250) DEFAULT NULL,
  `phone` int DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contrase` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ruta_img` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,NULL,'Deedee','tecnologa',2147483647,'dridett0@cyberchimps.com','$2y$10$pQrR1HXElrWOppf4QbFeweIlFuZi8Kk7.4Y/drtqAaptygJjkSjJ6','img_subidas/perfil1.jpg'),(2,NULL,'Claudell','tecnologa',2147483647,'cchaulk2@zimbio.com','$2y$10$/9RqGoMMKtw5sZxaTnOIVepicPPt9YahNII1V/6L/siAp.js1558u','img_subidas/perfil3.jpg'),(3,NULL,'Ewell','Vendedora',2147483647,'espendley3@github.io','$2y$10$Ls1Rem.3kR4jOI.PBbia5uGL17Kkit54ARk3M4RwkynbRckk9S5JW','img_subidas/perfil2.jpg'),(4,NULL,'Del','doctora',2147483647,'darmell4@drupal.org','$2y$10$RkomF2eO90A52M0/sIJjuOtg6/79fQwawrw75suz9LAZCVoLl74nS','img_subidas/perfil4.jpg'),(5,NULL,'Aurthur','884 925 7469',0,'aleyburn5@sohu.com','$2y$10$vK78nt98K9H95E9YKKSCxOpShvGQA.dE5BAy.6JDWLUOF9rYGm6nW','img_subidas/perfil9.png'),(6,NULL,'Udale','Es una buena tipa',2147483647,'ucoultass6@omniture.com','$2y$10$jiRedmb79Egp33t3fTIivuuv8qeUnZHofhcDPUZCVfHyMaChSAWkC','img_subidas/perfil5.jpg'),(7,NULL,'Alexandra','tecnologa',2147483647,'abillings7@nsw.gov.au','$2y$10$f4X1NxwA0ET2pXj118bzneJO.Ohnz0S8NfQIRFkV1U7l1bHmJHo/O','img_subidas/perfil6.jpg'),(8,NULL,'Enos','enfermero',2147483647,'egoodliff8@adobe.com','$2y$10$umZmPdpbKDNYD22NWmXnAOp21BtzHS1dlDYQH.Vk/kuOOzx3kI4lK','img_subidas/perfil10.jpg'),(9,NULL,'Gussy','cientifica',2147483647,'ggokes9@gov.uk','$2y$10$SIS0N542FteGakW3VM5JmOuHreEXBelA7UyeER6RXKuuziAFF8mYO','img_subidas/perfil8.jpg'),(11,NULL,'Suki','Mensajera',2147483647,'smartijnb@weebly.com','$2y$10$FVLLrS8k9Dkmo9yHAq4Loe5tnQrIfpB45RE2F5IY6Qmethxy/dPAq','img_subidas/perfil7.jpg');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-24 10:54:41
