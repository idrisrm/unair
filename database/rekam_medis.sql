-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 11:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekam_medis`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pasien`
--

CREATE TABLE `detail_pasien` (
  `id_detail` int(11) NOT NULL,
  `nomor_pasien` varchar(11) NOT NULL,
  `jenis_biaya` varchar(20) NOT NULL,
  `tanggal_terima` date NOT NULL,
  `tanggal_periksa` date NOT NULL,
  `id_pasien` varchar(10) NOT NULL,
  `id_dokter` int(10) NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `penyakit` varchar(100) NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_pasien`
--

INSERT INTO `detail_pasien` (`id_detail`, `nomor_pasien`, `jenis_biaya`, `tanggal_terima`, `tanggal_periksa`, `id_pasien`, `id_dokter`, `uraian`, `penyakit`, `biaya`) VALUES
(34, 'JPP1', '1', '2022-06-09', '2022-06-16', '2', 31, 'Biaya Pemeriksaan sakit demam', 'demam', 4000000),
(35, 'JPP1', '2', '2022-06-21', '2022-06-29', '2', 1, 'Biaya Pemeriksaan sakit demam', 'demam', 4000000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` int(5) NOT NULL,
  `str` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `nama_dokter` varchar(30) NOT NULL,
  `specialis` varchar(50) NOT NULL,
  `tempat_praktik` varchar(50) NOT NULL,
  `jk_dokter` varchar(15) NOT NULL,
  `alamat_dokter` varchar(30) NOT NULL,
  `umur` int(10) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `str`, `id_sub`, `nama_dokter`, `specialis`, `tempat_praktik`, `jk_dokter`, `alamat_dokter`, `umur`, `status`) VALUES
(1, 75878883, 1, 'Sung', 'Dokter Mata', 'RSU Wonolangan', 'Laki-Laki', 'Probolinggo', 21, '1'),
(31, 85739908, 2, 'Hogbak', 'Dokter Umum', 'RSU Siti Fatimah', 'Laki-Laki', 'Probolinggo', 35, '1'),
(32, 92847899, 2, 'Chopper', 'Dokter Bedah', 'RSU Lumajang', 'Laki-Laki', 'Lumajang', 27, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `nama_karyawan` varchar(20) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id`, `id_sub`, `nama_karyawan`, `status`) VALUES
(1, 1, 'hofidatul', 1),
(2, 2, 'Nova Ayu', 1),
(3, 1, 'Dinda', 1),
(4, 1, 'Novi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` int(10) NOT NULL,
  `nomor_pasien` varchar(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `id_karyawan` int(30) NOT NULL,
  `jenis_penggantian` varchar(20) NOT NULL,
  `tanggal_daftar` text NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `jumlah_item` int(11) NOT NULL,
  `stts` enum('1','0') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nomor_pasien`, `id_sub`, `id_karyawan`, `jenis_penggantian`, `tanggal_daftar`, `uraian`, `jumlah_item`, `stts`) VALUES
(69, 'JPP1', 1, 1, '2', '2022-06-08', 'Biaya Pemeriksaan sakit demam', 2, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `no_pendaftaran` int(10) NOT NULL,
  `id_pasien` int(20) NOT NULL,
  `id_dokter` int(20) NOT NULL,
  `tgl_periksa` varchar(25) NOT NULL,
  `waktu_pendaftaran` varchar(25) NOT NULL,
  `stts` enum('1','2','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekam_medis`
--

CREATE TABLE `tb_rekam_medis` (
  `id` int(5) NOT NULL,
  `id_pasien` varchar(10) NOT NULL,
  `id_dokter` int(5) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `umur` int(5) NOT NULL,
  `terapi` varchar(50) NOT NULL,
  `diagnosa` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rekam_medis`
--

INSERT INTO `tb_rekam_medis` (`id`, `id_pasien`, `id_dokter`, `tgl_periksa`, `tanggal_daftar`, `umur`, `terapi`, `diagnosa`, `status`) VALUES
(1, '2', 1, '2022-06-16', '2022-06-09', 35, 'Terapi Obat', 'gejala rinngan', 1),
(13, '4', 1, '2022-06-08', '2022-06-09', 35, 'Terapi Obat', 'ngantuk', 1),
(15, '3', 31, '2022-06-11', '2022-06-09', 33, 'obat', 'salah tidur\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sub`
--

CREATE TABLE `tb_sub` (
  `id` int(11) NOT NULL,
  `nama_sub` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sub`
--

INSERT INTO `tb_sub` (`id`, `nama_sub`) VALUES
(1, 'Keuangan'),
(2, 'Pengadaan Barang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_pengguna` int(5) NOT NULL,
  `id_dokter` int(5) DEFAULT NULL,
  `pengguna` varchar(50) NOT NULL,
  `sandi` varchar(50) NOT NULL,
  `hak_akses` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_pengguna`, `id_dokter`, `pengguna`, `sandi`, `hak_akses`) VALUES
(15, 0, 'admin', 'admin', '1'),
(16, 1, '', '', '2');

-- --------------------------------------------------------

--
-- Table structure for table `unit_sub`
--

CREATE TABLE `unit_sub` (
  `id` int(11) NOT NULL,
  `nama_sub` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit_sub`
--

INSERT INTO `unit_sub` (`id`, `nama_sub`, `status`) VALUES
(1, 'Keuangan', 1),
(2, 'Perkantoran', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pasien`
--
ALTER TABLE `detail_pasien`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`no_pendaftaran`);

--
-- Indexes for table `tb_rekam_medis`
--
ALTER TABLE `tb_rekam_medis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sub`
--
ALTER TABLE `tb_sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `unit_sub`
--
ALTER TABLE `unit_sub`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pasien`
--
ALTER TABLE `detail_pasien`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `id_dokter` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `no_pendaftaran` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_rekam_medis`
--
ALTER TABLE `tb_rekam_medis`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_sub`
--
ALTER TABLE `tb_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_pengguna` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `unit_sub`
--
ALTER TABLE `unit_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
