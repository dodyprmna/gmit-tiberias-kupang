-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 10:56 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heroku_6e5e46fdc42c001`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(100) DEFAULT NULL,
  `isi_artikel` text DEFAULT NULL,
  `added_at` datetime DEFAULT current_timestamp(),
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `added_at`, `id_user`) VALUES
(20, 'Mencegah Penularan Covid-19', '1111111111', '2021-05-11 08:06:21', NULL),
(21, 'Mencegah Penularan Covid-19', 'kjhskjdfdsf', '2021-05-11 21:03:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `baptisan`
--

CREATE TABLE `baptisan` (
  `id_baptisan` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `tanggal_baptis` date DEFAULT NULL,
  `tempat_baptis` varchar(100) DEFAULT NULL,
  `oleh` varchar(100) DEFAULT NULL,
  `added_at` datetime DEFAULT current_timestamp(),
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baptisan`
--

INSERT INTO `baptisan` (`id_baptisan`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `nama_ayah`, `nama_ibu`, `tanggal_baptis`, `tempat_baptis`, `oleh`, `added_at`, `id_user`) VALUES
(2, 'Syahril', 'Surabaya', '2000-06-03', 'Surabaya', 'Syahril', 'Syahra', '2021-06-17', 'Rumah', 'Rafqi', '2021-06-01 22:47:50', NULL),
(6, 'Alex', 'Surabaya', '2021-06-04', 'Surabaya', 'Pak Alex', 'Bu Alex', '2021-06-05', 'Rumah', 'Alex', '2021-06-04 13:39:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `judul_berita` varchar(100) DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `added_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_user`, `judul_berita`, `isi_berita`, `added_at`) VALUES
(4, 4, 'Berita 1', 'Berita Berita Berita Berita Berita ', '2021-06-06 22:46:43');

-- --------------------------------------------------------

--
-- Table structure for table `file_artikel`
--

CREATE TABLE `file_artikel` (
  `id_file` int(11) NOT NULL,
  `id_artikel` int(11) DEFAULT NULL,
  `nama_file` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `file_artikel`
--

INSERT INTO `file_artikel` (`id_file`, `id_artikel`, `nama_file`) VALUES
(33, 20, 'Screenshot_from_2021-05-10_15-34-57.png'),
(34, 20, 'Screenshot_from_2021-04-30_13-46-17.png'),
(35, 21, 'Screenshot_from_2021-05-10_15-34-571.png'),
(36, 21, 'Screenshot_from_2021-04-30_13-46-171.png'),
(37, 21, 'Screenshot_from_2021-04-30_13-23-35.png');

-- --------------------------------------------------------

--
-- Table structure for table `file_berita`
--

CREATE TABLE `file_berita` (
  `id_file` int(11) NOT NULL,
  `id_berita` int(11) DEFAULT NULL,
  `nama_file` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `file_berita`
--

INSERT INTO `file_berita` (`id_file`, `id_berita`, `nama_file`) VALUES
(27, 4, 'header.png');

-- --------------------------------------------------------

--
-- Table structure for table `informasi_gereja`
--

CREATE TABLE `informasi_gereja` (
  `id_informasi_gereja` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama_gereja` varchar(100) DEFAULT NULL,
  `alamat_gereja` varchar(200) DEFAULT NULL,
  `tentang_kami` text DEFAULT NULL,
  `pelayanan_gereja` text DEFAULT NULL,
  `kontak` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `informasi_gereja`
--

INSERT INTO `informasi_gereja` (`id_informasi_gereja`, `id_user`, `nama_gereja`, `alamat_gereja`, `tentang_kami`, `pelayanan_gereja`, `kontak`) VALUES
(2, NULL, 'GMIT Tiberias Kupang', 'Kupang,\r\nNusa Tenggara Timur,\r\nIndonesia', 'jskjs\r\njdsfjds\r\njhdsfkjdfs\r\njndsfldsf', 'kkkkkkk\r\nlllllllll\r\nppppppppp\r\nooooooo', '085555');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_ibadah`
--

CREATE TABLE `jadwal_ibadah` (
  `id_jadwal` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_ibadah` varchar(100) DEFAULT NULL,
  `jenis_ibadah` tinyint(1) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jadwal_ibadah`
--

INSERT INTO `jadwal_ibadah` (`id_jadwal`, `id_kategori`, `nama_ibadah`, `jenis_ibadah`, `tanggal`, `jam_mulai`, `jam_selesai`, `deleted_at`, `id_user`) VALUES
(1, 1, 'BB', 1, '2021-05-13', '07:00:00', '10:00:00', '2021-05-09 00:48:54', NULL),
(2, NULL, 'CTT', 0, '2021-05-12', '00:49:00', '00:49:00', NULL, NULL),
(3, 2, 'HOHOH', 1, '2021-05-12', '08:39:00', '12:39:00', '2021-05-11 11:34:50', NULL),
(4, 2, 'Ibadah 1', 1, '2021-06-09', '14:55:00', '14:00:00', NULL, 4),
(5, NULL, 'Ibadah 2', 0, '2021-06-09', '14:58:00', '17:56:00', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `jemaat`
--

CREATE TABLE `jemaat` (
  `id_jemaat` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nik` varchar(17) DEFAULT NULL,
  `gereja_sebelumnya` varchar(100) DEFAULT NULL,
  `added_at` datetime DEFAULT current_timestamp(),
  `email` varchar(100) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `rayon` varchar(12) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `role` char(1) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jemaat`
--

INSERT INTO `jemaat` (`id_jemaat`, `nama`, `nik`, `gereja_sebelumnya`, `added_at`, `email`, `password`, `rayon`, `status`, `role`, `deleted_at`, `alamat`) VALUES
(1, 'Syahril', '115151515', 'Kertajaya', '2021-05-20 23:45:00', 'syahril@gmail.com', '$2y$10$RKMx0gcYKS/inWbBz5rW0ecJTjea3o/bnwRGE.qQx4/G11lCLcOzi', '5', 1, '1', '2021-05-20 23:45:00', 'Pakis'),
(2, 'Syahril', '55555', 'Kertajaya', '2021-05-20 23:45:00', 'syahri@gmail.com', '$2y$10$ccdquUlaslf4/aXqNxFTQO.ZJfTYVfA7cEfj.X3TcpmMnjypfGxfi', '2', 1, '1', NULL, 'Surabaya'),
(3, 'Rafqi', '555555', 'Kertajaya', '2021-05-20 23:45:00', 'rafqi@gmail.com', '$2y$10$G6Ywqdlk.XhMu9ep.wk4VOS1ArnwtkUNllWUac94v5V67WIaPpAjy', '2', 1, '2', NULL, 'Malang'),
(4, 'Dody Pramana', '1111', 'Kertajaya', '2021-05-20 23:45:00', 'dodyprmna6@gmail.com', '$2y$10$Ijq55hvWIQwKbXP55uMmPe/1o/gwhhOkQqCeY1JNMUf4JQpGGghGu', '1', 1, '1', NULL, 'Surabaya'),
(7, 'alex', '123123', 'Kertajaya', '2021-06-06 01:21:07', 'alex@alex.com', '$2y$10$1EDK/W2mMe306cwsm8zXn.qYY7jOYKZx9spSvrZrqAK3vUyAQ7vfu', '1', 1, '2', NULL, 'Surabaya'),
(8, NULL, NULL, NULL, '2021-06-06 22:43:02', 'qwe@qwe.com', 'qwe', NULL, 1, '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `id_user`, `deleted_at`) VALUES
(1, 'Pemuda', NULL, NULL),
(2, 'PAR', NULL, NULL),
(3, 'Kaum Ibu', NULL, NULL),
(4, 'Kaum Bapak', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_keuangan`
--

CREATE TABLE `kategori_keuangan` (
  `id_kategori_keuangan` int(11) NOT NULL,
  `nama_kategori` varchar(100) DEFAULT NULL,
  `jenis` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori_keuangan`
--

INSERT INTO `kategori_keuangan` (`id_kategori_keuangan`, `nama_kategori`, `jenis`) VALUES
(1, 'Kolekta', 0),
(2, 'Perpuluhan', 0),
(3, 'Nazar', 0),
(4, 'Lain-Lain', 0);

-- --------------------------------------------------------

--
-- Table structure for table `laporan_keuangan`
--

CREATE TABLE `laporan_keuangan` (
  `id_laporan` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `jenis_transaksi` tinyint(1) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `added_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `laporan_keuangan`
--

INSERT INTO `laporan_keuangan` (`id_laporan`, `id_user`, `jenis_transaksi`, `kategori`, `jumlah`, `tanggal`, `keterangan`, `added_at`) VALUES
(1, NULL, 0, 3, 1000000, '2021-05-13', '', '2021-05-11 15:06:50'),
(3, NULL, 1, 4, 300000, '2021-05-09', 'pembelian karpet', '2021-05-11 23:12:23'),
(4, NULL, NULL, 1, 900000, '2021-06-05', NULL, '2021-06-05 22:09:36');

-- --------------------------------------------------------

--
-- Table structure for table `liturgi`
--

CREATE TABLE `liturgi` (
  `id_liturgi` int(11) NOT NULL,
  `file` text DEFAULT NULL,
  `id_jadwal` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `added_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `liturgi`
--

INSERT INTO `liturgi` (`id_liturgi`, `file`, `id_jadwal`, `id_user`, `added_at`) VALUES
(3, 'doc11234.pdf', 1, NULL, '2021-05-13 23:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `added_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `id_user`, `judul`, `isi`, `added_at`) VALUES
(3, NULL, 'Perubahan tanggal', 'tetetee\r\ndds\r\ndsfdsf', '2021-05-09 19:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `perkawinan`
--

CREATE TABLE `perkawinan` (
  `id_perkawinan` int(11) NOT NULL,
  `nama_calon_istri` varchar(100) DEFAULT NULL,
  `tempat_lahir_calon_istri` varchar(100) DEFAULT NULL,
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
  `gereja` varchar(100) DEFAULT NULL,
  `added_at` datetime DEFAULT current_timestamp(),
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `perkawinan`
--

INSERT INTO `perkawinan` (`id_perkawinan`, `nama_calon_istri`, `tempat_lahir_calon_istri`, `tanggal_lahir_calon_istri`, `alamat_calon_istri`, `telepon_calon_istri`, `agama_calon_istri`, `gereja_calon_istri`, `nama_calon_suami`, `tempat_lahir_calon_suami`, `tanggal_lahir_calon_suami`, `alamat_calon_suami`, `telepon_calon_suami`, `agama_calon_suami`, `gereja_calon_suami`, `tanggal_pemberkatan`, `nama_ayah_calon_suami`, `nama_ayah_calon_istri`, `agama_ayah_calon_suami`, `agama_ayah_calon_istri`, `pekerjaan_ayah_calon_suami`, `pekerjaan_ayah_calon_istri`, `alamat_ayah_calon_suami`, `alamat_ayah_calon_istri`, `nama_ibu_calon_suami`, `nama_ibu_calon_istri`, `agama_ibu_calon_suami`, `agama_ibu_calon_istri`, `pekerjaan_ibu_calon_suami`, `pekerjaan_ibu_calon_istri`, `alamat_ibu_calon_suami`, `alamat_ibu_calon_istri`, `gereja`, `added_at`, `id_user`) VALUES
(2, 'Elly', 'Surabaya', '1998-02-02', 'Surabaya', '086666', 'Kristen', 'Kertajaya', 'Ahmad', 'Surabaya', '1995-02-02', 'Surabaya', '0858555', 'Kristen', 'Kertajaya', '2021-06-21', 'Roni', 'Iwan', 'Islam', 'Islam', 'Wirausaha', 'Pegawai Swasta', 'Surabaya', 'Surabaya', 'Naomi', 'Loli', 'Hindu', 'Katolik', 'Wiraswasta', 'Ibu Rumah Tangga', 'Surabaya', 'Surabaya', 'Kertajayaa', '2021-05-20 21:58:41', NULL),
(3, 'eve', 'surabaya', '1990-01-01', 'surabaya', '089999', 'kristen', '2', 'ava', 'surabaya', '1990-01-01', 'surabaya', '089999', 'kristen', 'kertajaya', '2021-01-01', 'pak ava', 'pak ava', 'kristen', 'kristen', 'pekerjaan 1', 'pekerjaan 1', 'surabaya', 'surabaya', 'bu eve', 'bu eve', 'kristen', 'kristen', 'pekerjaan 1', 'pekerjaan 1', 'surabaya', 'surabaya', 'kertajaya', '2021-06-05 14:53:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registrasi_tk`
--

CREATE TABLE `registrasi_tk` (
  `id_registrasi` int(11) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `nik` varchar(17) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `kewarganegaraan` char(1) DEFAULT NULL,
  `tinggal_bersama` varchar(100) DEFAULT NULL,
  `anak_ke` int(11) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL,
  `added_at` datetime DEFAULT current_timestamp(),
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registrasi_tk`
--

INSERT INTO `registrasi_tk` (`id_registrasi`, `nama_lengkap`, `nik`, `alamat`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `kewarganegaraan`, `tinggal_bersama`, `anak_ke`, `usia`, `telepon`, `added_at`, `id_user`) VALUES
(2, 'Rani', '1545454', 'Surabaya', '2', 'Surabaya', '2016-06-04', 'Kristen', '1', 'Orang Tua', 1, 5, '052554', '2021-06-02 08:31:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `renungan_dan_doa_harian`
--

CREATE TABLE `renungan_dan_doa_harian` (
  `id_renungan_dan_doa` int(11) NOT NULL,
  `isi` text DEFAULT NULL,
  `added_at` datetime DEFAULT current_timestamp(),
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `renungan_dan_doa_harian`
--

INSERT INTO `renungan_dan_doa_harian` (`id_renungan_dan_doa`, `isi`, `added_at`, `id_user`) VALUES
(2, 'Renungan dan Doa Hari Senin', '2021-06-04 05:28:36', NULL),
(3, 'Renungan dan Doa Hari Selasa', '2021-06-04 05:29:29', NULL),
(4, 'Renungan dan Doa Hari Rabu', '2021-06-04 05:29:29', NULL),
(5, 'Renungan dan Doa Hari Kamis', '2021-06-04 05:29:41', NULL),
(6, 'Renungan dan Doa Hari Jumat', '2021-06-04 05:29:41', NULL),
(7, 'Renungan dan Doa Hari Sabtu', '2021-06-04 05:30:08', NULL),
(8, 'Renungan dan Doa Hari Minggu', '2021-06-04 05:30:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `warta_jemaat`
--

CREATE TABLE `warta_jemaat` (
  `id_warta` int(11) NOT NULL,
  `id_jadwal` int(11) DEFAULT NULL,
  `file_warta` text DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `warta_jemaat`
--

INSERT INTO `warta_jemaat` (`id_warta`, `id_jadwal`, `file_warta`, `id_user`) VALUES
(2, 1, 'test.pdf', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `artikel_FK` (`id_user`);

--
-- Indexes for table `baptisan`
--
ALTER TABLE `baptisan`
  ADD PRIMARY KEY (`id_baptisan`),
  ADD KEY `baptisan_FK` (`id_user`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `berita_FK` (`id_user`);

--
-- Indexes for table `file_artikel`
--
ALTER TABLE `file_artikel`
  ADD PRIMARY KEY (`id_file`),
  ADD KEY `file_artikel_FK` (`id_artikel`);

--
-- Indexes for table `file_berita`
--
ALTER TABLE `file_berita`
  ADD PRIMARY KEY (`id_file`),
  ADD KEY `file_berita_FK` (`id_berita`);

--
-- Indexes for table `informasi_gereja`
--
ALTER TABLE `informasi_gereja`
  ADD PRIMARY KEY (`id_informasi_gereja`),
  ADD KEY `informasi_gereja_FK` (`id_user`);

--
-- Indexes for table `jadwal_ibadah`
--
ALTER TABLE `jadwal_ibadah`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `jadwal_ibdah_FK_1` (`id_kategori`),
  ADD KEY `jadwal_ibadah_FK` (`id_user`);

--
-- Indexes for table `jemaat`
--
ALTER TABLE `jemaat`
  ADD PRIMARY KEY (`id_jemaat`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `kategori_FK_1` (`id_user`);

--
-- Indexes for table `kategori_keuangan`
--
ALTER TABLE `kategori_keuangan`
  ADD PRIMARY KEY (`id_kategori_keuangan`);

--
-- Indexes for table `laporan_keuangan`
--
ALTER TABLE `laporan_keuangan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `laporan_keuangan_FK` (`id_user`),
  ADD KEY `kategori_FK` (`kategori`);

--
-- Indexes for table `liturgi`
--
ALTER TABLE `liturgi`
  ADD PRIMARY KEY (`id_liturgi`),
  ADD KEY `liturgi_FK` (`id_jadwal`),
  ADD KEY `liturgi_FK_1` (`id_user`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`),
  ADD KEY `pengumuman_FK` (`id_user`);

--
-- Indexes for table `perkawinan`
--
ALTER TABLE `perkawinan`
  ADD PRIMARY KEY (`id_perkawinan`),
  ADD KEY `perkawinan_FK` (`id_user`);

--
-- Indexes for table `registrasi_tk`
--
ALTER TABLE `registrasi_tk`
  ADD PRIMARY KEY (`id_registrasi`),
  ADD KEY `registrasi_tk_FK` (`id_user`);

--
-- Indexes for table `renungan_dan_doa_harian`
--
ALTER TABLE `renungan_dan_doa_harian`
  ADD PRIMARY KEY (`id_renungan_dan_doa`),
  ADD KEY `renungan_dan_doa_harian_FK` (`id_user`);

--
-- Indexes for table `warta_jemaat`
--
ALTER TABLE `warta_jemaat`
  ADD PRIMARY KEY (`id_warta`),
  ADD KEY `warta_jemaat_FK_1` (`id_jadwal`),
  ADD KEY `warta_jemaat_FK` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `baptisan`
--
ALTER TABLE `baptisan`
  MODIFY `id_baptisan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `file_artikel`
--
ALTER TABLE `file_artikel`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `file_berita`
--
ALTER TABLE `file_berita`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `informasi_gereja`
--
ALTER TABLE `informasi_gereja`
  MODIFY `id_informasi_gereja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jadwal_ibadah`
--
ALTER TABLE `jadwal_ibadah`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jemaat`
--
ALTER TABLE `jemaat`
  MODIFY `id_jemaat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_keuangan`
--
ALTER TABLE `kategori_keuangan`
  MODIFY `id_kategori_keuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `laporan_keuangan`
--
ALTER TABLE `laporan_keuangan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `liturgi`
--
ALTER TABLE `liturgi`
  MODIFY `id_liturgi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `perkawinan`
--
ALTER TABLE `perkawinan`
  MODIFY `id_perkawinan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registrasi_tk`
--
ALTER TABLE `registrasi_tk`
  MODIFY `id_registrasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `renungan_dan_doa_harian`
--
ALTER TABLE `renungan_dan_doa_harian`
  MODIFY `id_renungan_dan_doa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `warta_jemaat`
--
ALTER TABLE `warta_jemaat`
  MODIFY `id_warta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_FK` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`);

--
-- Constraints for table `baptisan`
--
ALTER TABLE `baptisan`
  ADD CONSTRAINT `baptisan_FK` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`);

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_FK` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`);

--
-- Constraints for table `file_artikel`
--
ALTER TABLE `file_artikel`
  ADD CONSTRAINT `file_artikel_FK` FOREIGN KEY (`id_artikel`) REFERENCES `artikel` (`id_artikel`);

--
-- Constraints for table `file_berita`
--
ALTER TABLE `file_berita`
  ADD CONSTRAINT `file_berita_FK` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id_berita`);

--
-- Constraints for table `jadwal_ibadah`
--
ALTER TABLE `jadwal_ibadah`
  ADD CONSTRAINT `jadwal_ibadah_FK` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`),
  ADD CONSTRAINT `jadwal_ibdah_FK_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_FK_1` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`);

--
-- Constraints for table `laporan_keuangan`
--
ALTER TABLE `laporan_keuangan`
  ADD CONSTRAINT `laporan_keuangan_FK` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`),
  ADD CONSTRAINT `laporan_keuangan_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori_keuangan` (`id_kategori_keuangan`);

--
-- Constraints for table `liturgi`
--
ALTER TABLE `liturgi`
  ADD CONSTRAINT `liturgi_FK` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal_ibadah` (`id_jadwal`),
  ADD CONSTRAINT `liturgi_FK_1` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`);

--
-- Constraints for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD CONSTRAINT `pengumuman_FK` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`);

--
-- Constraints for table `perkawinan`
--
ALTER TABLE `perkawinan`
  ADD CONSTRAINT `perkawinan_FK` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`);

--
-- Constraints for table `registrasi_tk`
--
ALTER TABLE `registrasi_tk`
  ADD CONSTRAINT `registrasi_tk_FK` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`);

--
-- Constraints for table `renungan_dan_doa_harian`
--
ALTER TABLE `renungan_dan_doa_harian`
  ADD CONSTRAINT `renungan_dan_doa_harian_FK` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`);

--
-- Constraints for table `warta_jemaat`
--
ALTER TABLE `warta_jemaat`
  ADD CONSTRAINT `warta_jemaat_FK` FOREIGN KEY (`id_user`) REFERENCES `jemaat` (`id_jemaat`),
  ADD CONSTRAINT `warta_jemaat_FK_1` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal_ibadah` (`id_jadwal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
