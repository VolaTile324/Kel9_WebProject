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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daftar_kategori`
--

LOCK TABLES `daftar_kategori` WRITE;
/*!40000 ALTER TABLE `daftar_kategori` DISABLE KEYS */;
INSERT INTO `daftar_kategori` VALUES (23,'Industry'),(3,'Internet of Things'),(8,'News'),(19,'SEO'),(7,'Shopping'),(2,'Sosial Media'),(1,'Startup');
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
  `kategori` varchar(64) NOT NULL,
  `status_perusahaan` varchar(32) NOT NULL,
  PRIMARY KEY (`id_perusahaan`)
) ENGINE=InnoDB AUTO_INCREMENT=3126 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daftar_perusahaan`
--

LOCK TABLES `daftar_perusahaan` WRITE;
/*!40000 ALTER TABLE `daftar_perusahaan` DISABLE KEYS */;
INSERT INTO `daftar_perusahaan` VALUES (1,'Tokopedia','tokopedia.png','GoTo','Toko Online','Shopping','Merger'),(2,'IDN Times','idn_times.png','Uni','IDN Times is a multi-platform news and entertainment digital media company for Millennials and Gen Z in Indonesia.','News','Active'),(3,'Gojek','gojek.png','GoTo','Superapps & Transport','Startup','Merger'),(4,'Shopee','shopee.png','Ate','Toko Online','Shopping','Active');
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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_activity`
--

LOCK TABLES `log_activity` WRITE;
/*!40000 ALTER TABLE `log_activity` DISABLE KEYS */;
INSERT INTO `log_activity` VALUES (1,'Update Data','Perusahaan',1,'Tokopedia 1','2022-06-12'),(2,'Update Data','Perusahaan',1,'Tokopedia','2022-06-12'),(3,'New Data','Perusahaan',2,'IDN Times','2022-06-12'),(4,'Update Data','Perusahaan',1,'Tokopedia','2022-06-12'),(5,'Update Data','Perusahaan',2,'IDN Times','2022-06-12'),(6,'New Data','Perusahaan',3,'Gojek','2022-06-12'),(7,'Delete Data','Perusahaan',3,'Gojek','2022-06-12'),(8,'New Data','Perusahaan',3,'Gojek','2022-06-12'),(9,'Update Data','Perusahaan',3,'Gojek','2022-06-12'),(10,'Update Data','Perusahaan',3,'Gojek','2022-06-12'),(11,'Update Data','Perusahaan',3,'Gojek','2022-06-12'),(12,'Update Data','Perusahaan',3,'Gojek','2022-06-12'),(13,'Delete Data','Perusahaan',3,'Gojek','2022-06-12'),(14,'New Data','Perusahaan',3,'Gojek','2022-06-12'),(15,'New Data','Kategori',7,'Shopping','2022-06-12'),(16,'New Data','Perusahaan',4,'Shopee','2022-06-12'),(17,'New Data','Kategori',8,'News','2022-06-12'),(18,'New Data','Kategori',25,'','2022-06-12'),(19,'Update Data','Kategori',25,'','2022-06-12'),(20,'Delete Data','Kategori',25,'','2022-06-12'),(21,'New Data','Kategori',26,'aaaa','2022-06-12'),(22,'Update Data','Kategori',26,'','2022-06-12'),(23,'Delete Data','Kategori',26,'','2022-06-12'),(24,'Update Data','Kategori',23,'Industry','2022-06-12'),(25,'New Data','Perusahaan',3124,'','2022-06-12'),(26,'New Data','Perusahaan',3125,'a','2022-06-12'),(27,'Delete Data','Perusahaan',3124,'','2022-06-12'),(28,'Delete Data','Perusahaan',3125,'a','2022-06-12'),(29,'Update Data','Perusahaan',4,'Shopee','2022-06-12');
/*!40000 ALTER TABLE `log_activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nasabah`
--

DROP TABLE IF EXISTS `nasabah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nasabah` (
  `nomor_kartu` int(15) NOT NULL,
  `pin` int(6) DEFAULT NULL,
  `nama` varchar(32) DEFAULT NULL,
  `saldo` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`nomor_kartu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nasabah`
--

LOCK TABLES `nasabah` WRITE;
/*!40000 ALTER TABLE `nasabah` DISABLE KEYS */;
INSERT INTO `nasabah` VALUES (1111,1111,'ilham',1000000.00);
/*!40000 ALTER TABLE `nasabah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaksi` (
  `id_trans` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) DEFAULT NULL,
  `nomor_kartu` int(15) DEFAULT NULL,
  `tanggal_mulai` datetime DEFAULT NULL,
  `tanggal_akhir` datetime DEFAULT NULL,
  `jumlah` int(15) DEFAULT NULL,
  PRIMARY KEY (`id_trans`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksi`
--

LOCK TABLES `transaksi` WRITE;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` VALUES (1,'Rhz123',1111,'2022-06-12 21:14:53','2022-07-12 21:14:53',75000),(2,'Rhz123',1111,'2022-06-12 21:16:35','2023-06-12 21:16:35',120000),(3,'admin',1111,'2022-06-12 22:12:05','2022-07-12 22:12:05',75000);
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'rhizkaka@nomail.com','Rhz123',1,'$2y$10$opyfCuiWnQ.O505L4Ex3nuwp1woa/eEfnEw..H14pdMdsk5p8rqGK','2022-06-01 23:58:18'),(2,'rhizkoka@nomail.com','AdmRhizka',2,'$2y$10$2Ei7NPYZV93ymTJWkrZe6ezzWeAyqreEDfBJmrThGt6UCUn6TMaIq','2022-06-12 21:02:02'),(3,'rizky@mail.com','rizky',2,'$2y$10$v/rfk6TTw8lVzmEdJIGgJOv7vV1Xq7nDMheUvu84nq9vyiYdfMfdG','2022-06-12 22:08:15'),(4,'tes@mail.com','client',1,'$2y$10$p2G41EUfSLpJZmdaruPe5.bN18bY6C2kq/g4yxwuxJj35SGUVmyFi','2022-06-12 22:29:12');
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

-- Dump completed on 2022-06-12 23:44:47
