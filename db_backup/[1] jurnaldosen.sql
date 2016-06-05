-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2016 at 01:27 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnaldosen`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_alat`
--

CREATE TABLE IF NOT EXISTS `all_alat` (
  `id_alat` int(11) NOT NULL COMMENT 'id alat auto increment',
  `nama_alat` varchar(100) NOT NULL COMMENT 'nama semua alat yang biasa dipinjamkan ke dosen'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_alat`
--

INSERT INTO `all_alat` (`id_alat`, `nama_alat`) VALUES
(1, 'Jurnal'),
(2, 'Spidol'),
(3, 'Remote LCD');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `id_dosen` int(11) NOT NULL COMMENT 'id dosen auto increment',
  `kode_jurnal` varchar(50) NOT NULL COMMENT 'kode jurnal setiap dosen berbeda, untuk QR Code',
  `nama` varchar(50) NOT NULL COMMENT 'Nama Lengkap Dosen',
  `no_hp` varchar(20) NOT NULL COMMENT 'Kontak yang dapat dihubungi dosen'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `kode_jurnal`, `nama`, `no_hp`) VALUES
(1, 'QRE312', 'Gunawan Ariyanto', '08937222233'),
(2, 'RUT109', 'Husni Thamrin', '08293292012'),
(4, 'QRE311', 'Fajar Suryawan', '0829321239212'),
(5, 'QYERH12', 'Helman Muhammad', '081923212134'),
(6, 'QYERI81', 'Heru Supriyono', '089231212121'),
(7, 'QRIT78', 'Heru Suyatna', '08992329212');

-- --------------------------------------------------------

--
-- Table structure for table `log_jurnal`
--

CREATE TABLE IF NOT EXISTS `log_jurnal` (
  `id_log` int(11) NOT NULL COMMENT 'id auto increment',
  `id_dosenFK` int(11) NOT NULL COMMENT 'Foreign Key id Dosen',
  `waktu_pinjam` datetime NOT NULL COMMENT 'waktu peminjaman',
  `waktu_kembali` datetime NOT NULL COMMENT 'waktu pengembalian (jika kosong berarti belum dikembalikan)',
  `feedback` varchar(50) NOT NULL COMMENT 'feed back berisi (Puas,Tidak)',
  `list_pinjam` varchar(100) NOT NULL COMMENT 'list id_alat yang dipinjem (id,id,id)',
  `belum_kembali` varchar(100) NOT NULL COMMENT 'list id_alat yang belum dikembalikan (id,id,id)'
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_jurnal`
--

INSERT INTO `log_jurnal` (`id_log`, `id_dosenFK`, `waktu_pinjam`, `waktu_kembali`, `feedback`, `list_pinjam`, `belum_kembali`) VALUES
(10, 2, '2016-06-05 22:05:03', '2016-06-06 06:18:54', 'Puas', '1,2', ''),
(11, 5, '2016-06-06 04:53:02', '2016-06-06 06:23:44', 'Tidak', '1,2', ''),
(12, 4, '2016-06-06 04:53:12', '2016-06-06 05:30:09', '', '1', ''),
(13, 6, '2016-06-06 04:53:23', '2016-06-06 05:41:43', '', '1,2,3', ''),
(14, 2, '2016-06-06 06:20:00', '2016-06-06 06:23:00', 'Puas', '1,2', ''),
(15, 2, '2016-06-06 06:25:00', '2016-06-06 06:25:16', 'Puas', '1,2', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_alat`
--
ALTER TABLE `all_alat`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD UNIQUE KEY `kode_jurnal` (`kode_jurnal`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `log_jurnal`
--
ALTER TABLE `log_jurnal`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `kode_jurnalFK` (`id_dosenFK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_alat`
--
ALTER TABLE `all_alat`
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id alat auto increment',AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id dosen auto increment',AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `log_jurnal`
--
ALTER TABLE `log_jurnal`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id auto increment',AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `log_jurnal`
--
ALTER TABLE `log_jurnal`
  ADD CONSTRAINT `log_jurnal_ibfk_1` FOREIGN KEY (`id_dosenFK`) REFERENCES `dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
