-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 25, 2017 at 06:42 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fas_batu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id_akun`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 1),
(8, 'ale', 'ale', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_lomba`
--

CREATE TABLE `tb_lomba` (
  `id_lomba` int(11) NOT NULL,
  `nama_lomba` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lomba`
--

INSERT INTO `tb_lomba` (`id_lomba`, `nama_lomba`) VALUES
(1, 'Mewarna'),
(2, 'Gambar'),
(7, 'tulis\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelaksana`
--

CREATE TABLE `tb_pelaksana` (
  `id_pelaksana` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_pelaksana`
--

INSERT INTO `tb_pelaksana` (`id_pelaksana`, `date`) VALUES
(2, '2017-03-25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `id_peserta` int(11) NOT NULL,
  `id_tpq` int(11) DEFAULT NULL,
  `nama_peserta` varchar(100) DEFAULT NULL,
  `jenkel` enum('P','L') DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peserta`
--

INSERT INTO `tb_peserta` (`id_peserta`, `id_tpq`, `nama_peserta`, `jenkel`, `tgl_daftar`, `status`) VALUES
(14, 1, 'Alen', 'L', '2017-03-26', 1),
(15, 1, 'Bima', 'L', '2017-03-26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_peserta_lomba`
--

CREATE TABLE `tb_peserta_lomba` (
  `id_peserta_lomba` int(11) NOT NULL,
  `id_peserta` int(11) DEFAULT NULL,
  `id_lomba` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peserta_lomba`
--

INSERT INTO `tb_peserta_lomba` (`id_peserta_lomba`, `id_peserta`, `id_lomba`) VALUES
(13, 14, 1),
(14, 14, 2),
(15, 15, 1),
(16, 15, 2),
(17, 15, 7),
(18, 15, 1),
(19, 15, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tpq`
--

CREATE TABLE `tb_tpq` (
  `id_tpq` int(11) NOT NULL,
  `nama_tpq` varchar(45) DEFAULT NULL,
  `wilayah_tpq` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tpq`
--

INSERT INTO `tb_tpq` (`id_tpq`, `nama_tpq`, `wilayah_tpq`) VALUES
(1, 'TPQ 1', 'Sisir 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `tb_lomba`
--
ALTER TABLE `tb_lomba`
  ADD PRIMARY KEY (`id_lomba`);

--
-- Indexes for table `tb_pelaksana`
--
ALTER TABLE `tb_pelaksana`
  ADD PRIMARY KEY (`id_pelaksana`);

--
-- Indexes for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `tb_peserta_lomba`
--
ALTER TABLE `tb_peserta_lomba`
  ADD PRIMARY KEY (`id_peserta_lomba`);

--
-- Indexes for table `tb_tpq`
--
ALTER TABLE `tb_tpq`
  ADD PRIMARY KEY (`id_tpq`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_lomba`
--
ALTER TABLE `tb_lomba`
  MODIFY `id_lomba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_pelaksana`
--
ALTER TABLE `tb_pelaksana`
  MODIFY `id_pelaksana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_peserta_lomba`
--
ALTER TABLE `tb_peserta_lomba`
  MODIFY `id_peserta_lomba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tb_tpq`
--
ALTER TABLE `tb_tpq`
  MODIFY `id_tpq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
