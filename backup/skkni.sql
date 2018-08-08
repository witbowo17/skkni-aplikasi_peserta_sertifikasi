-- MySQL dump 10.16  Distrib 10.1.21-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.1.21-MariaDB

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
-- Table structure for table `peserta`
--

DROP TABLE IF EXISTS `peserta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peserta` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `skema_sertifikasi` varchar(100) NOT NULL,
  `tempat_uji_kompetensi` varchar(100) NOT NULL,
  `rekomendasi` varchar(100) NOT NULL,
  `tgl_terbit_sertifikat` date NOT NULL,
  `tgl_lahir` date NOT NULL,
  `organisasi` varchar(100) NOT NULL,
  PRIMARY KEY (`nik`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peserta`
--

LOCK TABLES `peserta` WRITE;
/*!40000 ALTER TABLE `peserta` DISABLE KEYS */;
INSERT INTO `peserta` (`no`, `nama`, `nik`, `hp`, `email`, `skema_sertifikasi`, `tempat_uji_kompetensi`, `rekomendasi`, `tgl_terbit_sertifikat`, `tgl_lahir`, `organisasi`) VALUES (4,'tes2','0987654321','0987654321','emai@email.com','Programing Madya','tes2','tes2','2018-01-01','2018-01-01','tes2'),(6,'1212','11','1212','1212','- Pilih -','12212','- Pilih -','0121-12-12','0012-12-12','1212'),(5,'nama','1111','1111','email','Programing Madya','tempat','rekomend','2018-08-22','2018-07-30','organisasi'),(2,'tes','1234567890','1234567890','emai@email.com','Programing Madya','tes','tes','2018-01-01','2018-01-01','tes'),(1,'Witbowo Sulisno','1571081704920001','085266639933','bowosulisno17@gmail.com','skema sertifikasi','Swiss-belHotel Jambi','rekomendasi','2018-08-09','1992-04-17','STMIK NH JAMBI'),(7,'tes','222','111','email','Programing Madya','tes','Rekomendasi','2018-08-08','2018-08-08','STMIK NH JAMBI');
/*!40000 ALTER TABLE `peserta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-08 14:41:21
