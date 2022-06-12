-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: stack_login
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
-- Table structure for table `daftar_kategori`
--

DROP TABLE IF EXISTS `daftar_kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `daftar_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(32) NOT NULL,
  PRIMARY KEY (`id_kategori`),
  UNIQUE KEY `nama_kategori` (`nama_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daftar_kategori`
--

LOCK TABLES `daftar_kategori` WRITE;
/*!40000 ALTER TABLE `daftar_kategori` DISABLE KEYS */;
INSERT INTO `daftar_kategori` VALUES (23,'Food'),(3,'Internet of Things'),(19,'SEO'),(2,'Sosial Media'),(1,'Startup');
/*!40000 ALTER TABLE `daftar_kategori` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `log_insert_kat` AFTER INSERT ON `daftar_kategori` FOR EACH ROW BEGIN
INSERT INTO log_activity (keterangan, data_type, id_data, data_name, waktu) VALUES ('New Data', 'Kategori', NEW.id_kategori, NEW.nama_kategori, NOW());
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `log_update_kat` AFTER UPDATE ON `daftar_kategori` FOR EACH ROW BEGIN
INSERT INTO log_activity (keterangan, data_type, id_data, data_name, waktu) VALUES ('Update Data', 'Kategori', OLD.id_kategori, NEW.nama_kategori, NOW());
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `log_del_kat` BEFORE DELETE ON `daftar_kategori` FOR EACH ROW BEGIN
INSERT INTO log_activity (keterangan, data_type, id_data, data_name, waktu) VALUES ('Delete Data', 'Kategori', OLD.id_kategori, OLD.nama_kategori, NOW());
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `daftar_perusahaan`
--

DROP TABLE IF EXISTS `daftar_perusahaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `daftar_perusahaan` (
  `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `pemilik` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `status_perusahaan` varchar(32) NOT NULL,
  PRIMARY KEY (`id_perusahaan`)
) ENGINE=InnoDB AUTO_INCREMENT=3124 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daftar_perusahaan`
--

LOCK TABLES `daftar_perusahaan` WRITE;
/*!40000 ALTER TABLE `daftar_perusahaan` DISABLE KEYS */;
INSERT INTO `daftar_perusahaan` VALUES (1,'Tokopedia 1','gojek.png','GoTo','Toko Online','Merger');
/*!40000 ALTER TABLE `daftar_perusahaan` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `log_insert_comp` AFTER INSERT ON `daftar_perusahaan` FOR EACH ROW BEGIN
INSERT INTO log_activity (keterangan, data_type, id_data, data_name, waktu) VALUES ('New Data', 'Perusahaan', NEW.id_perusahaan, NEW.nama, NOW());
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `log_update_comp` AFTER UPDATE ON `daftar_perusahaan` FOR EACH ROW BEGIN
INSERT INTO log_activity (keterangan, data_type, id_data, data_name, waktu) VALUES ('Update Data', 'Perusahaan', OLD.id_perusahaan, NEW.nama, NOW());
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `log_del_comp` BEFORE DELETE ON `daftar_perusahaan` FOR EACH ROW BEGIN
INSERT INTO log_activity (keterangan, data_type, id_data, data_name, waktu) VALUES ('Delete Data', 'Perusahaan', OLD.id_perusahaan, OLD.nama, NOW());
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `detail_perusahaan`
--

DROP TABLE IF EXISTS `detail_perusahaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_perusahaan` (
  `id_detail` int(11) NOT NULL AUTO_INCREMENT,
  `id_perusahaan` int(11) NOT NULL,
  `nama_api` varchar(128) NOT NULL,
  PRIMARY KEY (`id_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_perusahaan`
--

LOCK TABLES `detail_perusahaan` WRITE;
/*!40000 ALTER TABLE `detail_perusahaan` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_perusahaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_activity`
--

DROP TABLE IF EXISTS `log_activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(20) NOT NULL,
  `data_type` varchar(20) NOT NULL,
  `id_data` int(11) NOT NULL,
  `data_name` varchar(20) NOT NULL,
  `waktu` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_activity`
--

LOCK TABLES `log_activity` WRITE;
/*!40000 ALTER TABLE `log_activity` DISABLE KEYS */;
INSERT INTO `log_activity` VALUES (1,'New Data','Perusahaan',2,'Google','2022-06-10'),(2,'Update Data','Perusahaan',2,'Google','2022-06-10'),(3,'Delete Data','Perusahaan',2,'Google','2022-06-10'),(4,'Delete Data','Kategori',24,'Tools','2022-06-10'),(5,'Update Data','Kategori',19,'SEO','2022-06-10'),(6,'Update Data','Perusahaan',1,'Tokopedia','2022-06-11'),(7,'New Data','Perusahaan',2,'Gojek','2022-06-11'),(8,'Delete Data','Perusahaan',3123,'Canvas','2022-06-12'),(9,'Delete Data','Perusahaan',2,'Gojek','2022-06-12'),(10,'Delete Data','Perusahaan',1,'Tokopedia','2022-06-12'),(11,'New Data','Perusahaan',1,'Tokopedia','2022-06-12'),(12,'Delete Data','Perusahaan',1,'Tokopedia','2022-06-12'),(13,'New Data','Perusahaan',1,'Tokopedia','2022-06-12'),(14,'Delete Data','Perusahaan',1,'Tokopedia','2022-06-12'),(15,'New Data','Perusahaan',1,'Tokopedia','2022-06-12'),(16,'Delete Data','Perusahaan',1,'Tokopedia','2022-06-12'),(17,'New Data','Perusahaan',1,'Tokopedia','2022-06-12'),(18,'Delete Data','Perusahaan',1,'Tokopedia','2022-06-12'),(19,'New Data','Perusahaan',1,'Tokopedia','2022-06-12'),(20,'Update Data','Perusahaan',1,'Tokopedia','2022-06-12'),(21,'Update Data','Perusahaan',1,'Tokopedia','2022-06-12'),(22,'Update Data','Perusahaan',1,'Tokopedia','2022-06-12'),(23,'Update Data','Perusahaan',1,'Tokopedia','2022-06-12'),(24,'Delete Data','Perusahaan',1,'Tokopedia','2022-06-12'),(25,'New Data','Perusahaan',1,'Tokopedia','2022-06-12'),(26,'Update Data','Perusahaan',1,'Tokopedia','2022-06-12'),(27,'Update Data','Perusahaan',1,'Tokopedia','2022-06-12'),(28,'Update Data','Perusahaan',1,'Tokopedia','2022-06-12'),(29,'Update Data','Perusahaan',1,'Tokopedia','2022-06-12'),(30,'Delete Data','Perusahaan',1,'Tokopedia','2022-06-12'),(31,'New Data','Perusahaan',1,'Tokopedia','2022-06-12'),(32,'Update Data','Perusahaan',1,'Tokopedia','2022-06-12'),(33,'Update Data','Perusahaan',1,'Tokopedia','2022-06-12'),(34,'Delete Data','Perusahaan',1,'Tokopedia','2022-06-12'),(35,'New Data','Perusahaan',1,'Tokopedia','2022-06-12'),(36,'Update Data','Perusahaan',1,'Tokopedia','2022-06-12'),(37,'Update Data','Perusahaan',1,'Tokopedia 2','2022-06-12'),(38,'Update Data','Perusahaan',1,'Tokopedia 2','2022-06-12'),(39,'Update Data','Perusahaan',1,'Tokopedia 2','2022-06-12'),(40,'Update Data','Perusahaan',1,'Tokopedia 2','2022-06-12'),(41,'Update Data','Perusahaan',1,'Tokopedia 2','2022-06-12'),(42,'Update Data','Perusahaan',1,'Tokopedia 1','2022-06-12'),(43,'Delete Data','Perusahaan',1,'Tokopedia 1','2022-06-12'),(44,'New Data','Perusahaan',1,'Tokopedia','2022-06-12'),(45,'Update Data','Perusahaan',1,'Tokopedia','2022-06-12'),(46,'Update Data','Perusahaan',1,'Tokopedia','2022-06-12'),(47,'Update Data','Perusahaan',1,'Tokopedia','2022-06-12'),(48,'Update Data','Perusahaan',1,'Tokopedia','2022-06-12'),(49,'Update Data','Perusahaan',1,'Tokopedia 2','2022-06-12'),(50,'Update Data','Perusahaan',1,'Tokopedia 1','2022-06-12'),(51,'Update Data','Perusahaan',1,'Tokopedia 1','2022-06-12');
/*!40000 ALTER TABLE `log_activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'rhizkaka@nomail.com','Rhz123',1,'$2y$10$opyfCuiWnQ.O505L4Ex3nuwp1woa/eEfnEw..H14pdMdsk5p8rqGK','2022-06-01 23:58:18');
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

-- Dump completed on 2022-06-12 16:43:46
