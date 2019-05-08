-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: kirti
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.18.04.1

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
-- Table structure for table `cements`
--

DROP TABLE IF EXISTS `cements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cements` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cause` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_no_bags` int(11) NOT NULL,
  `total_good` int(11) NOT NULL,
  `total_defects` int(11) NOT NULL,
  `types` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cements`
--

LOCK TABLES `cements` WRITE;
/*!40000 ALTER TABLE `cements` DISABLE KEYS */;
INSERT INTO `cements` VALUES (1,'Inadequate training & skills',40,38,2,'Small bag','2018-11-13 02:54:46','2018-11-13 02:54:46'),(2,'In a hurry',50,45,5,'Small bag','2018-11-13 02:54:46','2018-11-13 02:54:46'),(3,'Poor compensation',70,50,20,'Medium','2018-11-13 02:54:46','2018-11-13 02:54:46'),(4,'Inadequate training & skills',70,50,20,'Medium','2018-11-13 02:54:46','2018-11-13 02:54:46'),(5,'Inadequate training & skills',50,45,5,'Tanner','2018-11-13 02:54:46','2018-11-13 02:54:46'),(6,'In a hurry',70,50,20,'Medium','2018-11-13 02:54:46','2018-11-13 02:54:46'),(7,'In a hurry',100,98,2,'Medium','2018-11-13 02:54:46','2018-11-13 02:54:46'),(8,'Lack of focus',120,116,4,'Small bag','2018-10-13 02:54:46','2018-10-13 02:54:46'),(9,'Work Discomfort',500,456,44,'Small bag','2017-10-13 02:54:46','2017-10-13 02:54:46'),(10,'Laziness',500,440,60,'Small bag','2017-10-13 02:54:46','2017-10-13 02:54:46'),(11,'Abseenteism',100,98,2,'Small bag','2017-10-13 02:54:46','2017-10-13 02:54:46'),(12,' Fatigue',90,88,2,'Small bag','2017-10-13 02:54:46','2017-10-13 02:54:46'),(13,'Work Discomfort',500,456,44,'Small bag','2018-10-13 02:54:46','2017-10-13 02:54:46'),(14,'Laziness',500,440,60,'Small bag','2018-10-13 02:54:46','2018-10-13 02:54:46'),(15,'Abseenteism',100,98,2,'Small bag','2018-10-13 02:54:46','2018-10-13 02:54:46'),(16,' Fatigue',90,88,2,'Small bag','2018-10-13 02:54:46','2018-10-13 02:54:46'),(17,' No culture of change',100,90,10,'Small bag','2018-10-13 02:54:46','2018-10-13 02:54:46'),(18,'Lack of management support',100,90,10,'Small bag','2018-10-13 02:54:46','2018-10-13 02:54:46'),(19,'Inadequate Job design',100,90,10,'Small bag','2018-10-13 02:54:46','2018-10-13 02:54:46'),(20,'Loose intervention',100,90,10,'Small bag','2018-10-13 02:54:46','2018-10-13 02:54:46'),(21,'Lack of camaraderie',100,90,10,'Small bag','2018-10-13 02:54:46','2018-10-13 02:54:46'),(22,'Occurrence of defective cement bags',100,90,10,'Small bag','2018-10-13 02:54:46','2018-10-13 02:54:46'),(23,'Poor compensation',100,99,1,'Small bag','2018-10-13 02:54:46','2018-10-13 02:54:46');
/*!40000 ALTER TABLE `cements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_10_15_085921_create_cements_table',1),(4,'2018_10_16_233957_create_types_table',1),(5,'2018_10_17_000610_create_foreign_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `types_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `types`
--

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-13  5:39:46
