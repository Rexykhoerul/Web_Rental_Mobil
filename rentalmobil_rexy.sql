-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 08:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalmobil_rexy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mobil_rexy`
--

CREATE TABLE `tbl_mobil_rexy` (
  `no_plat_rexy` varchar(10) NOT NULL,
  `nama_mobil_rexy` varchar(25) NOT NULL,
  `brand_mobil_rexy` varchar(25) NOT NULL,
  `tipe_transmisi_rexy` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_mobil_rexy`
--

INSERT INTO `tbl_mobil_rexy` (`no_plat_rexy`, `nama_mobil_rexy`, `brand_mobil_rexy`, `tipe_transmisi_rexy`) VALUES
('D 2301 HZ', 'Ferrari Spider', 'Ferrari', 'Manual');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan_rexy`
--

CREATE TABLE `tbl_pelanggan_rexy` (
  `nik_ktp_rexy` varchar(16) NOT NULL,
  `nama_rexy` varchar(35) NOT NULL,
  `no_hp_rexy` varchar(15) NOT NULL,
  `alamat_rexy` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rental_rexy`
--

CREATE TABLE `tbl_rental_rexy` (
  `no_trx_rexy` varchar(20) NOT NULL,
  `nik_ktp_rexy` varchar(16) NOT NULL,
  `no_plat_rexy` varchar(10) NOT NULL,
  `tgl_rental_rexy` date NOT NULL,
  `jam_rental_rexy` time NOT NULL,
  `harga_rexy` int(11) NOT NULL,
  `lama_rexy` int(11) NOT NULL,
  `total_rexy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_rexy`
--

CREATE TABLE `tbl_user_rexy` (
  `id_user_rexy` int(11) NOT NULL,
  `username_rexy` varchar(35) NOT NULL,
  `password_rexy` varchar(100) NOT NULL,
  `nama_lengkap_rexy` varchar(35) NOT NULL,
  `level_rexy` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user_rexy`
--

INSERT INTO `tbl_user_rexy` (`id_user_rexy`, `username_rexy`, `password_rexy`, `nama_lengkap_rexy`, `level_rexy`) VALUES
(1, 'dinda', '827ccb0eea8a706c4c34a16891f84e7b', 'dindanoor', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mobil_rexy`
--
ALTER TABLE `tbl_mobil_rexy`
  ADD PRIMARY KEY (`no_plat_rexy`);

--
-- Indexes for table `tbl_pelanggan_rexy`
--
ALTER TABLE `tbl_pelanggan_rexy`
  ADD PRIMARY KEY (`nik_ktp_rexy`);

--
-- Indexes for table `tbl_rental_rexy`
--
ALTER TABLE `tbl_rental_rexy`
  ADD PRIMARY KEY (`no_trx_rexy`);

--
-- Indexes for table `tbl_user_rexy`
--
ALTER TABLE `tbl_user_rexy`
  ADD PRIMARY KEY (`id_user_rexy`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user_rexy`
--
ALTER TABLE `tbl_user_rexy`
  MODIFY `id_user_rexy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
