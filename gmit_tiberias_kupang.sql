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
  `judul_artikel` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `isi_artikel` text,
  `added_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_user` int DEFAULT NULL,
  PRIMARY KEY (`id_artikel`),
  KEY `artikel_FK` (`id_user`),
  CONSTRAINT `artikel_FK` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artikel`
--

LOCK TABLES `artikel` WRITE;
/*!40000 ALTER TABLE `artikel` DISABLE KEYS */;
INSERT INTO `artikel` VALUES (20,'Mencegah Penularan Covid-19','1111111111','2021-05-11 08:06:21',NULL),(21,'Mencegah Penularan Covid-19','kjhskjdfdsf','2021-05-11 21:03:15',NULL);
/*!40000 ALTER TABLE `artikel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `baptisan`
--

DROP TABLE IF EXISTS `baptisan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `baptisan` (
  `id_baptisan` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `tanggal_baptis` date DEFAULT NULL,
  `tempat_baptis` varchar(100) DEFAULT NULL,
  `oleh` varchar(100) DEFAULT NULL,
  `added_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_user` int DEFAULT NULL,
  PRIMARY KEY (`id_baptisan`),
  KEY `baptisan_FK` (`id_user`),
  CONSTRAINT `baptisan_FK` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `baptisan`
--

LOCK TABLES `baptisan` WRITE;
/*!40000 ALTER TABLE `baptisan` DISABLE KEYS */;
/*!40000 ALTER TABLE `baptisan` ENABLE KEYS */;
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
  CONSTRAINT `berita_FK` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `berita`
--

LOCK TABLES `berita` WRITE;
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `file_artikel`
--

DROP TABLE IF EXISTS `file_artikel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `file_artikel` (
  `id_file` int NOT NULL AUTO_INCREMENT,
  `id_artikel` int DEFAULT NULL,
  `nama_file` text,
  PRIMARY KEY (`id_file`),
  KEY `file_artikel_FK` (`id_artikel`),
  CONSTRAINT `file_artikel_FK` FOREIGN KEY (`id_artikel`) REFERENCES `artikel` (`id_artikel`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file_artikel`
--

LOCK TABLES `file_artikel` WRITE;
/*!40000 ALTER TABLE `file_artikel` DISABLE KEYS */;
INSERT INTO `file_artikel` VALUES (33,20,'Screenshot_from_2021-05-10_15-34-57.png'),(34,20,'Screenshot_from_2021-04-30_13-46-17.png'),(35,21,'Screenshot_from_2021-05-10_15-34-571.png'),(36,21,'Screenshot_from_2021-04-30_13-46-171.png'),(37,21,'Screenshot_from_2021-04-30_13-23-35.png');
/*!40000 ALTER TABLE `file_artikel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `file_berita`
--

DROP TABLE IF EXISTS `file_berita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `file_berita` (
  `id_file` int NOT NULL AUTO_INCREMENT,
  `id_berita` int DEFAULT NULL,
  `nama_file` text,
  PRIMARY KEY (`id_file`),
  KEY `file_berita_FK` (`id_berita`),
  CONSTRAINT `file_berita_FK` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file_berita`
--

LOCK TABLES `file_berita` WRITE;
/*!40000 ALTER TABLE `file_berita` DISABLE KEYS */;
/*!40000 ALTER TABLE `file_berita` ENABLE KEYS */;
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
  `nama_gereja` varchar(100) DEFAULT NULL,
  `alamat_gereja` varchar(200) DEFAULT NULL,
  `tentang_kami` text,
  `pelayanan_gereja` text,
  `kontak` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`id_informasi_gereja`),
  KEY `informasi_gereja_FK` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `informasi_gereja`
--

LOCK TABLES `informasi_gereja` WRITE;
/*!40000 ALTER TABLE `informasi_gereja` DISABLE KEYS */;
INSERT INTO `informasi_gereja` VALUES (2,NULL,'GMIT Tiberias Kupang','Kupang,\r\nNusa Tenggara Timur,\r\nIndonesia','jskjs\r\njdsfjds\r\njhdsfkjdfs\r\njndsfldsf','kkkkkkk\r\nlllllllll\r\nppppppppp\r\nooooooo','085555');
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
  KEY `jadwal_ibdah_FK_1` (`id_kategori`),
  KEY `jadwal_ibadah_FK` (`id_user`),
  CONSTRAINT `jadwal_ibadah_FK` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`),
  CONSTRAINT `jadwal_ibdah_FK_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jadwal_ibadah`
--

LOCK TABLES `jadwal_ibadah` WRITE;
/*!40000 ALTER TABLE `jadwal_ibadah` DISABLE KEYS */;
INSERT INTO `jadwal_ibadah` VALUES (1,1,'BB',1,'2021-05-13','07:00:00','10:00:00','2021-05-09 00:48:54',NULL),(2,NULL,'CTT',0,'2021-05-12','00:49:00','00:49:00',NULL,NULL),(3,2,'HOHOH',1,'2021-05-12','08:39:00','12:39:00','2021-05-11 11:34:50',NULL);
/*!40000 ALTER TABLE `jadwal_ibadah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jemaat`
--

DROP TABLE IF EXISTS `jemaat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jemaat` (
  `id_jemaat` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `nik` varchar(17) DEFAULT NULL,
  `gereja_sebelumnya` varchar(100) DEFAULT NULL,
  `added_at` datetime DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` text,
  `rayon` varchar(12) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `role` char(1) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_jemaat`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jemaat`
--

LOCK TABLES `jemaat` WRITE;
/*!40000 ALTER TABLE `jemaat` DISABLE KEYS */;
INSERT INTO `jemaat` VALUES (1,'Syahril','115151515','Kertajaya',NULL,'syahril@gmail.com','$2y$10$RKMx0gcYKS/inWbBz5rW0ecJTjea3o/bnwRGE.qQx4/G11lCLcOzi','5',1,'1','2021-05-20 23:45:00','Pakis'),(2,'Syahril','55555','Kertajaya',NULL,'syahri@gmail.com','$2y$10$ccdquUlaslf4/aXqNxFTQO.ZJfTYVfA7cEfj.X3TcpmMnjypfGxfi','2',1,'1',NULL,'Surabaya'),(3,'Rafqi','555555','Kertajaya',NULL,'rafqi@gmail.com','$2y$10$G6Ywqdlk.XhMu9ep.wk4VOS1ArnwtkUNllWUac94v5V67WIaPpAjy','2',1,'2',NULL,'Malang'),(4,'Dody Pramana','1111','Kertajaya',NULL,'dodyprmna6@gmail.com','$2y$10$fIQeZ6BAyoRgoFheVJAu6.sYW2Tb3Ug28NFiTiCUxDWSCD4PVQxKq','1',1,'1',NULL,'Surabaya');
/*!40000 ALTER TABLE `jemaat` ENABLE KEYS */;
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
  KEY `kategori_FK_1` (`id_user`),
  CONSTRAINT `kategori_FK_1` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`)
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
-- Table structure for table `kategori_keuangan`
--

DROP TABLE IF EXISTS `kategori_keuangan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kategori_keuangan` (
  `id_kategori_keuangan` int NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) DEFAULT NULL,
  `jenis` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_keuangan`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_keuangan`
--

LOCK TABLES `kategori_keuangan` WRITE;
/*!40000 ALTER TABLE `kategori_keuangan` DISABLE KEYS */;
INSERT INTO `kategori_keuangan` VALUES (1,'Kolekta',0),(2,'Perpuluhan',0),(3,'Nazar',0),(4,'Lain-Lain',0);
/*!40000 ALTER TABLE `kategori_keuangan` ENABLE KEYS */;
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
  `jenis_transaksi` tinyint(1) DEFAULT NULL,
  `kategori` int DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` text,
  `added_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_laporan`),
  KEY `laporan_keuangan_FK_1` (`kategori`),
  KEY `laporan_keuangan_FK` (`id_user`),
  CONSTRAINT `laporan_keuangan_FK` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laporan_keuangan`
--

LOCK TABLES `laporan_keuangan` WRITE;
/*!40000 ALTER TABLE `laporan_keuangan` DISABLE KEYS */;
INSERT INTO `laporan_keuangan` VALUES (1,NULL,0,3,1000000,'2021-05-13','','2021-05-11 15:06:50'),(3,NULL,1,4,300000,'2021-05-09','pembelian karpet','2021-05-11 23:12:23');
/*!40000 ALTER TABLE `laporan_keuangan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `liturgi`
--

DROP TABLE IF EXISTS `liturgi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `liturgi` (
  `id_liturgi` int NOT NULL AUTO_INCREMENT,
  `file` text,
  `id_jadwal` int DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  `added_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_liturgi`),
  KEY `liturgi_FK` (`id_jadwal`),
  KEY `liturgi_FK_1` (`id_user`),
  CONSTRAINT `liturgi_FK` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal_ibadah` (`id_jadwal`),
  CONSTRAINT `liturgi_FK_1` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `liturgi`
--

LOCK TABLES `liturgi` WRITE;
/*!40000 ALTER TABLE `liturgi` DISABLE KEYS */;
INSERT INTO `liturgi` VALUES (3,'doc11234.pdf',1,NULL,'2021-05-13 23:29:37');
/*!40000 ALTER TABLE `liturgi` ENABLE KEYS */;
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
  CONSTRAINT `pengumuman_FK` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengumuman`
--

LOCK TABLES `pengumuman` WRITE;
/*!40000 ALTER TABLE `pengumuman` DISABLE KEYS */;
INSERT INTO `pengumuman` VALUES (3,NULL,'Perubahan tanggal','tetetee\r\ndds\r\ndsfdsf','2021-05-09 19:44:07');
/*!40000 ALTER TABLE `pengumuman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perkawinan`
--

DROP TABLE IF EXISTS `perkawinan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perkawinan` (
  `id_perkawinan` int NOT NULL AUTO_INCREMENT,
  `nama_calon_istri` varchar(100) DEFAULT NULL,
  `tempat_lahir_calon_istri` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tanggal_lahir_calon_istri` date DEFAULT NULL,
  `alamat_calon_istri` varchar(100) DEFAULT NULL,
  `telepon_calon_istri` varchar(13) DEFAULT NULL,
  `agama_calon_istri` varchar(100) DEFAULT NULL,
  `gereja_calon_istri` varchar(100) DEFAULT NULL,
  `nama_calon_suami` varchar(100) DEFAULT NULL,
  `tempat_lahir_calon_suami` varchar(100) DEFAULT NULL,
  `tanggal_lahir_calon_suami` date DEFAULT NULL,
  `alamat_calon_suami` varchar(100) DEFAULT NULL,
  `telepon_calon_suami` varchar(13) DEFAULT NULL,
  `agama_calon_suami` varchar(100) DEFAULT NULL,
  `gereja_calon_suami` varchar(100) DEFAULT NULL,
  `tanggal_pemberkatan` date DEFAULT NULL,
  `nama_ayah_calon_suami` varchar(100) DEFAULT NULL,
  `nama_ayah_calon_istri` varchar(100) DEFAULT NULL,
  `agama_ayah_calon_suami` varchar(100) DEFAULT NULL,
  `agama_ayah_calon_istri` varchar(100) DEFAULT NULL,
  `pekerjaan_ayah_calon_suami` varchar(100) DEFAULT NULL,
  `pekerjaan_ayah_calon_istri` varchar(100) DEFAULT NULL,
  `alamat_ayah_calon_suami` varchar(100) DEFAULT NULL,
  `alamat_ayah_calon_istri` varchar(100) DEFAULT NULL,
  `nama_ibu_calon_suami` varchar(100) DEFAULT NULL,
  `nama_ibu_calon_istri` varchar(100) DEFAULT NULL,
  `agama_ibu_calon_suami` varchar(100) DEFAULT NULL,
  `agama_ibu_calon_istri` varchar(100) DEFAULT NULL,
  `pekerjaan_ibu_calon_suami` varchar(100) DEFAULT NULL,
  `pekerjaan_ibu_calon_istri` varchar(100) DEFAULT NULL,
  `alamat_ibu_calon_suami` varchar(100) DEFAULT NULL,
  `alamat_ibu_calon_istri` varchar(100) DEFAULT NULL,
  `gereja` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `added_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_user` int DEFAULT NULL,
  PRIMARY KEY (`id_perkawinan`),
  KEY `perkawinan_FK` (`id_user`),
  CONSTRAINT `perkawinan_FK` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perkawinan`
--

LOCK TABLES `perkawinan` WRITE;
/*!40000 ALTER TABLE `perkawinan` DISABLE KEYS */;
INSERT INTO `perkawinan` VALUES (2,'Elly','Surabaya','1998-02-02','Surabaya','086666','Kristen','Kertajaya','Ahmad','Surabaya','1995-02-02','Surabaya','0858555','Kristen','Kertajaya','2021-06-21','Roni','Iwan','Islam','Islam','Wirausaha','Pegawai Swasta','Surabaya','Surabaya','Naomi','Loli','Hindu','Katolik','Wiraswasta','Ibu Rumah Tangga','Surabaya','Surabaya','Kertajayaa','2021-05-20 21:58:41',NULL);
/*!40000 ALTER TABLE `perkawinan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registrasi_tk`
--

DROP TABLE IF EXISTS `registrasi_tk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `registrasi_tk` (
  `id_registrasi` int NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `nik` varchar(17) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `kewarganegaraan` char(1) DEFAULT NULL,
  `tinggal_bersama` varchar(100) DEFAULT NULL,
  `anak_ke` int DEFAULT NULL,
  `usia` int DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  `added_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_user` int DEFAULT NULL,
  PRIMARY KEY (`id_registrasi`),
  KEY `registrasi_tk_FK` (`id_user`),
  CONSTRAINT `registrasi_tk_FK` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registrasi_tk`
--

LOCK TABLES `registrasi_tk` WRITE;
/*!40000 ALTER TABLE `registrasi_tk` DISABLE KEYS */;
/*!40000 ALTER TABLE `registrasi_tk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `renungan_dan_doa_harian`
--

DROP TABLE IF EXISTS `renungan_dan_doa_harian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `renungan_dan_doa_harian` (
  `id_renungan_dan_doa` int NOT NULL AUTO_INCREMENT,
  `isi` text,
  `added_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_user` int DEFAULT NULL,
  PRIMARY KEY (`id_renungan_dan_doa`),
  KEY `renungan_dan_doa_harian_FK` (`id_user`),
  CONSTRAINT `renungan_dan_doa_harian_FK` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `renungan_dan_doa_harian`
--

LOCK TABLES `renungan_dan_doa_harian` WRITE;
/*!40000 ALTER TABLE `renungan_dan_doa_harian` DISABLE KEYS */;
/*!40000 ALTER TABLE `renungan_dan_doa_harian` ENABLE KEYS */;
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
  KEY `warta_jemaat_FK_1` (`id_jadwal`),
  KEY `warta_jemaat_FK` (`id_user`),
  CONSTRAINT `warta_jemaat_FK` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`),
  CONSTRAINT `warta_jemaat_FK_1` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal_ibadah` (`id_jadwal`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `warta_jemaat`
--

LOCK TABLES `warta_jemaat` WRITE;
/*!40000 ALTER TABLE `warta_jemaat` DISABLE KEYS */;
INSERT INTO `warta_jemaat` VALUES (2,1,'test.pdf',NULL);
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

-- Dump completed on 2021-05-21 10:02:28
