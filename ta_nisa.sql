-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: ta_nisa
-- ------------------------------------------------------
-- Server version	8.0.25-0ubuntu0.20.04.1

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
-- Table structure for table `bandara`
--

DROP TABLE IF EXISTS `bandara`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bandara` (
  `idbandara` int NOT NULL,
  `nmbandara` varchar(50) NOT NULL,
  `kota` varchar(30) NOT NULL,
  PRIMARY KEY (`idbandara`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bandara`
--

LOCK TABLES `bandara` WRITE;
/*!40000 ALTER TABLE `bandara` DISABLE KEYS */;
INSERT INTO `bandara` VALUES (1,'Bandara Internasional Soekarno Hatta','Jakarta'),(2,'Bandara Internasional Halim Perdanakusuma','Jakarta'),(3,'Bandara Internasional Supadio','Pontianak'),(4,'Bandara Internasional Kualanamu','Medan'),(5,'Bandara Internasional Minangkabau','Padang'),(6,'Bandara Internasional Sultan Mahmud Badaruddin II','Palembang'),(7,'Bandara Internasional Sultan Syarif Kasim II','Pekanbaru'),(8,'Bandara Internasional Husein Sastranegara','Bandung'),(9,'Bandara Internasional Sultan Iskandarmuda','Banda Aceh'),(10,'Bandara Internasional Raja Haji Fisabilillah','Tanjungpinang'),(11,'Bandara Internasional Sultan Thaha','Jambi'),(12,'Bandara Depati Amir','Pangkal Pinang'),(13,'Bandara Tjilik Riwut','Palangkaraya'),(14,'Bandara Internasional Silangit','Tapanuli Utara'),(15,'Bandara Internasional Kertajati','Kertajati'),(16,'Bandara Internasional Banyuwangi','Banyuwangi'),(17,'Bandara Fatmawati Soekarno','Bengkulu'),(18,'Bandara Internasional H.A.S. Hanandjoeddin','Tanjung Pandan'),(19,'Bandara Internasional Radin Inten II','Lampung');
/*!40000 ALTER TABLE `bandara` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori` (
  `idkategori` int NOT NULL,
  `nmkategori` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`idkategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES (1,'Hijau','Hazard Ringan'),(2,'Kuning','Hazard Sedang'),(3,'Merah','Hazard Berat\r\n');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penumpang`
--

DROP TABLE IF EXISTS `penumpang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penumpang` (
  `idpenumpang` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `notelp` int NOT NULL,
  `email` varchar(30) NOT NULL,
  `nmbandara` varchar(100) DEFAULT NULL,
  `nmkategori` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `tgl` date NOT NULL,
  PRIMARY KEY (`idpenumpang`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penumpang`
--

LOCK TABLES `penumpang` WRITE;
/*!40000 ALTER TABLE `penumpang` DISABLE KEYS */;
/*!40000 ALTER TABLE `penumpang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'ta_nisa'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-18  2:26:35
