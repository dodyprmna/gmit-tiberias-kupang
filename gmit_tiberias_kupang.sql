-- MySQL dump 10.13  Distrib 8.0.23, for Linux (x86_64)
--
-- Host: localhost    Database: gmit_tiberias_kupang
-- ------------------------------------------------------
-- Server version	8.0.23-0ubuntu0.20.04.1

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
-- Table structure for table `artikel`
--

DROP TABLE IF EXISTS `artikel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `artikel` (
  `id_artikel` int NOT NULL AUTO_INCREMENT,
  `judul_artike` varchar(100) DEFAULT NULL,
  `isi_artikel` text,
  `added_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_user` int DEFAULT NULL,
  PRIMARY KEY (`id_artikel`),
  KEY `artikel_FK` (`id_user`),
  CONSTRAINT `artikel_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artikel`
--

LOCK TABLES `artikel` WRITE;
/*!40000 ALTER TABLE `artikel` DISABLE KEYS */;
/*!40000 ALTER TABLE `artikel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `berita`
--

DROP TABLE IF EXISTS `berita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `berita` (
  `id_berita` int NOT NULL AUTO_INCREMENT,
  `id_user` int DEFAULT NULL,
  `judul_berita` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `isi_berita` text,
  `added_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_berita`),
  KEY `berita_FK` (`id_user`),
  CONSTRAINT `berita_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `berita`
--

LOCK TABLES `berita` WRITE;
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `informasi_gereja`
--

DROP TABLE IF EXISTS `informasi_gereja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `informasi_gereja` (
  `id_informasi_gereja` int NOT NULL AUTO_INCREMENT,
  `id_user` int DEFAULT NULL,
  `alamat_gereja` varchar(200) DEFAULT NULL,
  `tentang_kami` text,
  `pelayanan_gereja` text,
  `kontak` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`id_informasi_gereja`),
  KEY `informasi_gereja_FK` (`id_user`),
  CONSTRAINT `informasi_gereja_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `informasi_gereja`
--

LOCK TABLES `informasi_gereja` WRITE;
/*!40000 ALTER TABLE `informasi_gereja` DISABLE KEYS */;
/*!40000 ALTER TABLE `informasi_gereja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jadwal_ibadah`
--

DROP TABLE IF EXISTS `jadwal_ibadah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jadwal_ibadah` (
  `id_jadwal` int NOT NULL AUTO_INCREMENT,
  `id_kategori` int DEFAULT NULL,
  `nama_ibadah` varchar(100) DEFAULT NULL,
  `jenis_ibadah` tinyint(1) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  PRIMARY KEY (`id_jadwal`),
  KEY `jadwal_ibdah_FK` (`id_user`),
  KEY `jadwal_ibdah_FK_1` (`id_kategori`),
  CONSTRAINT `jadwal_ibdah_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  CONSTRAINT `jadwal_ibdah_FK_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jadwal_ibadah`
--

LOCK TABLES `jadwal_ibadah` WRITE;
/*!40000 ALTER TABLE `jadwal_ibadah` DISABLE KEYS */;
INSERT INTO `jadwal_ibadah` VALUES (1,1,'BB',1,'2021-05-13','07:00:00','10:00:00','2021-05-09 00:48:54',NULL),(2,NULL,'CTT',0,'2021-05-12','00:49:00','00:49:00',NULL,NULL),(3,2,'HOHOH',1,'2021-05-12','08:39:00','12:39:00',NULL,NULL);
/*!40000 ALTER TABLE `jadwal_ibadah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_kategori`),
  KEY `kategori_FK` (`id_user`),
  CONSTRAINT `kategori_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES (1,'Pemuda',NULL,NULL),(2,'PAR',NULL,NULL),(3,'Kaum Ibu',NULL,NULL),(4,'Kaum Bapak',NULL,NULL);
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `laporan_keuangan`
--

DROP TABLE IF EXISTS `laporan_keuangan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `laporan_keuangan` (
  `id_laporan` int NOT NULL AUTO_INCREMENT,
  `id_user` int DEFAULT NULL,
  `id_jenis_pemasukan` int DEFAULT NULL,
  `jenis_transaksi` tinyint(1) DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id_laporan`),
  KEY `laporan_keuangan_FK` (`id_user`),
  KEY `laporan_keuangan_FK_1` (`id_jenis_pemasukan`),
  CONSTRAINT `laporan_keuangan_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laporan_keuangan`
--

LOCK TABLES `laporan_keuangan` WRITE;
/*!40000 ALTER TABLE `laporan_keuangan` DISABLE KEYS */;
/*!40000 ALTER TABLE `laporan_keuangan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengumuman`
--

DROP TABLE IF EXISTS `pengumuman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pengumuman` (
  `id_pengumuman` int NOT NULL AUTO_INCREMENT,
  `id_user` int DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi` text,
  `added_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pengumuman`),
  KEY `pengumuman_FK` (`id_user`),
  CONSTRAINT `pengumuman_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengumuman`
--

LOCK TABLES `pengumuman` WRITE;
/*!40000 ALTER TABLE `pengumuman` DISABLE KEYS */;
INSERT INTO `pengumuman` VALUES (3,NULL,'Perubahan tanggal','tetetee','2021-05-09 19:44:07');
/*!40000 ALTER TABLE `pengumuman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registrasi_member`
--

DROP TABLE IF EXISTS `registrasi_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `registrasi_member` (
  `id_registrasi` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `rayon` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_registrasi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registrasi_member`
--

LOCK TABLES `registrasi_member` WRITE;
/*!40000 ALTER TABLE `registrasi_member` DISABLE KEYS */;
/*!40000 ALTER TABLE `registrasi_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` text,
  `deleted_at` datetime DEFAULT NULL,
  `jenis_user` char(1) DEFAULT NULL,
  `status_user` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Syahril','syahril','$2y$10$0wPuIUsiKMFkJiAlmaUUQO.7idbOX8p1o20OPO/CgibX2VejuWMH.',NULL,'1',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `warta_jemaat`
--

DROP TABLE IF EXISTS `warta_jemaat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `warta_jemaat` (
  `id_warta` int NOT NULL AUTO_INCREMENT,
  `id_jadwal` int DEFAULT NULL,
  `file_warta` text,
  `id_user` int DEFAULT NULL,
  PRIMARY KEY (`id_warta`),
  KEY `warta_jemaat_FK` (`id_user`),
  KEY `warta_jemaat_FK_1` (`id_jadwal`),
  CONSTRAINT `warta_jemaat_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  CONSTRAINT `warta_jemaat_FK_1` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal_ibadah` (`id_jadwal`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `warta_jemaat`
--

LOCK TABLES `warta_jemaat` WRITE;
/*!40000 ALTER TABLE `warta_jemaat` DISABLE KEYS */;
INSERT INTO `warta_jemaat` VALUES (1,1,'doc1123.pdf',NULL);
/*!40000 ALTER TABLE `warta_jemaat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'gmit_tiberias_kupang'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-09 23:02:06
