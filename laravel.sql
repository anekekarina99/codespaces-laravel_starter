-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306:3306
-- Generation Time: Sep 08, 2023 at 03:37 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `activa_order`
--

DROP TABLE IF EXISTS `activa_order`;
CREATE TABLE IF NOT EXISTS `activa_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tagihan_id` int(11) DEFAULT NULL,
  `jumlah_pembayaran` int(11) DEFAULT NULL,
  `tanggal_pemb` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tagihan_id` (`tagihan_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activa_order`
--

INSERT INTO `activa_order` (`id`, `created_at`, `updated_at`, `tagihan_id`, `jumlah_pembayaran`, `tanggal_pemb`) VALUES
(1, '2023-09-08 15:32:32', '2023-09-08 15:32:32', 1, 2500, '2023-09-20'),
(2, '2023-09-08 15:32:32', '2023-09-08 15:32:32', 2, 8000, '2023-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `created_at`, `updated_at`, `nama`, `alamat`, `telepon`) VALUES
(1, '2023-09-08 15:32:31', '2023-09-08 15:32:31', 'Client A', 'Alamat A', '1234567890'),
(2, '2023-09-08 15:32:31', '2023-09-08 15:32:31', 'Client B', 'Alamat B', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `penawaran_jasa`
--

DROP TABLE IF EXISTS `penawaran_jasa`;
CREATE TABLE IF NOT EXISTS `penawaran_jasa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `work_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `work_id` (`work_id`),
  KEY `project_id` (`project_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penawaran_jasa`
--

INSERT INTO `penawaran_jasa` (`id`, `created_at`, `updated_at`, `work_id`, `project_id`, `jumlah`) VALUES
(1, '2023-09-08 15:32:31', '2023-09-08 15:32:31', 1, 1, 5),
(2, '2023-09-08 15:32:31', '2023-09-08 15:32:31', 2, 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `permintaan_jasa`
--

DROP TABLE IF EXISTS `permintaan_jasa`;
CREATE TABLE IF NOT EXISTS `permintaan_jasa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama_pelanggan` varchar(255) DEFAULT NULL,
  `jenis_jasa` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `total_biaya` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permintaan_jasa`
--

INSERT INTO `permintaan_jasa` (`id`, `created_at`, `updated_at`, `nama_pelanggan`, `jenis_jasa`, `deskripsi`, `tanggal_mulai`, `tanggal_selesai`, `total_biaya`) VALUES
(1, '2023-09-08 15:32:32', '2023-09-08 15:32:32', 'Pelanggan A', 'Jasa A', 'Deskripsi A', '2023-09-01', '2023-09-10', 5000),
(2, '2023-09-08 15:32:32', '2023-09-08 15:32:32', 'Pelanggan B', 'Jasa B', 'Deskripsi B', '2023-10-01', '2023-10-15', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_pembelian`
--

DROP TABLE IF EXISTS `pesanan_pembelian`;
CREATE TABLE IF NOT EXISTS `pesanan_pembelian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `client_id` int(11) DEFAULT NULL,
  `tanggal_pesanan` date DEFAULT NULL,
  `nomor_pesanan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `client_id` (`client_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pesanan_pembelian`
--

INSERT INTO `pesanan_pembelian` (`id`, `created_at`, `updated_at`, `client_id`, `tanggal_pesanan`, `nomor_pesanan`) VALUES
(1, '2023-09-08 15:32:32', '2023-09-08 15:32:32', 1, '2023-09-05', 'PO001'),
(2, '2023-09-08 15:32:32', '2023-09-08 15:32:32', 2, '2023-10-05', 'PO002');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `client_id_project` int(11) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `client_id_project` (`client_id_project`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `created_at`, `updated_at`, `name`, `start_date`, `end_date`, `client_id_project`, `telepon`) VALUES
(1, '2023-09-08 15:32:31', '2023-09-08 15:32:31', 'Proyek 1', '2023-09-01', '2023-09-30', 1, '1111111111'),
(2, '2023-09-08 15:32:31', '2023-09-08 15:32:31', 'Proyek 2', '2023-10-01', '2023-10-31', 2, '2222222222');

-- --------------------------------------------------------

--
-- Table structure for table `referensi_perusahaan`
--

DROP TABLE IF EXISTS `referensi_perusahaan`;
CREATE TABLE IF NOT EXISTS `referensi_perusahaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `akun_bank` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `referensi_perusahaan`
--

INSERT INTO `referensi_perusahaan` (`id`, `created_at`, `updated_at`, `nama`, `alamat`, `telepon`, `akun_bank`) VALUES
(1, '2023-09-08 15:32:32', '2023-09-08 15:32:32', 'Perusahaan X', 'Alamat X', '3333333333', 'Bank X'),
(2, '2023-09-08 15:32:32', '2023-09-08 15:32:32', 'Perusahaan Y', 'Alamat Y', '4444444444', 'Bank Y');

-- --------------------------------------------------------

--
-- Table structure for table `refernsi_bahasa`
--

DROP TABLE IF EXISTS `refernsi_bahasa`;
CREATE TABLE IF NOT EXISTS `refernsi_bahasa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kode_bahasa` varchar(255) DEFAULT NULL,
  `nama_bahasa` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `refernsi_bahasa`
--

INSERT INTO `refernsi_bahasa` (`id`, `created_at`, `updated_at`, `kode_bahasa`, `nama_bahasa`) VALUES
(1, '2023-09-08 15:32:32', '2023-09-08 15:32:32', 'EN', 'English'),
(2, '2023-09-08 15:32:32', '2023-09-08 15:32:32', 'ID', 'Indonesian');

-- --------------------------------------------------------

--
-- Table structure for table `total_payment`
--

DROP TABLE IF EXISTS `total_payment`;
CREATE TABLE IF NOT EXISTS `total_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `project_id` int(11) DEFAULT NULL,
  `total_tagihan` int(11) DEFAULT NULL,
  `tanggal_tagihan` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `total_payment`
--

INSERT INTO `total_payment` (`id`, `created_at`, `updated_at`, `project_id`, `total_tagihan`, `tanggal_tagihan`) VALUES
(1, '2023-09-08 15:32:32', '2023-09-08 15:32:32', 1, 5000, '2023-09-15'),
(2, '2023-09-08 15:32:32', '2023-09-08 15:32:32', 2, 10000, '2023-10-15');

-- --------------------------------------------------------

--
-- Table structure for table `type_work`
--

DROP TABLE IF EXISTS `type_work`;
CREATE TABLE IF NOT EXISTS `type_work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type_work`
--

INSERT INTO `type_work` (`id`, `created_at`, `updated_at`, `name_type`) VALUES
(1, '2023-09-08 15:32:31', '2023-09-08 15:32:31', 'Tipe A'),
(2, '2023-09-08 15:32:31', '2023-09-08 15:32:31', 'Tipe B');

-- --------------------------------------------------------

--
-- Table structure for table `users_fix`
--

DROP TABLE IF EXISTS `users_fix`;
CREATE TABLE IF NOT EXISTS `users_fix` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_fix`
--

INSERT INTO `users_fix` (`id`, `created_at`, `updated_at`, `name`, `email`) VALUES
(1, '2023-09-08 15:32:31', '2023-09-08 15:32:31', 'John Doe', 'john@example.com'),
(2, '2023-09-08 15:32:31', '2023-09-08 15:32:31', 'Jane Smith', 'jane@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

DROP TABLE IF EXISTS `work`;
CREATE TABLE IF NOT EXISTS `work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name_work` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `created_at`, `updated_at`, `name_work`) VALUES
(1, '2023-09-08 15:32:31', '2023-09-08 15:32:31', 'Pekerjaan A'),
(2, '2023-09-08 15:32:31', '2023-09-08 15:32:31', 'Pekerjaan B');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
