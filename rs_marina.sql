-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 08:51 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rs_marina`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id` int(11) NOT NULL,
  `no_identitas` int(11) NOT NULL,
  `nama_pasien` varchar(256) NOT NULL,
  `tmpt_tgl_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(256) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `no_telp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id`, `no_identitas`, `nama_pasien`, `tmpt_tgl_lahir`, `jenis_kelamin`, `alamat`, `no_telp`) VALUES
(1, 123456789, 'salma', 'batang,8 mei 2000', 'perempuan', 'pemalang', 98765432),
(5, 778977, 'angel', 'nvkldsmv ', 'perempuan', 'def', 756388),
(6, 9876000, 'dzaki', 'Pekalongan, 28-02-06', 'Laki laki', 'Dekoro, pekalongan timur', 2147483647),
(7, 778977, 'fkasbk,f', 'nvkldsmv ', 'ioafoijeifoiaefoinfoc', 'KEDUNGMIRI BARAT ', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
