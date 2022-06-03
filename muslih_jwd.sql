-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2020 at 01:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muslih_jwd`
--

-- --------------------------------------------------------

--
-- Table structure for table `bangun_ruang`
--

CREATE TABLE `bangun_ruang` (
  `id_bangun` int(11) NOT NULL,
  `bangun_ruang` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bangun_ruang`
--

INSERT INTO `bangun_ruang` (`id_bangun`, `bangun_ruang`, `jumlah`) VALUES
(1, 'segitiga', 17),
(2, 'persegi', 4),
(3, 'lingkaran', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bangun_ruang`
--
ALTER TABLE `bangun_ruang`
  ADD PRIMARY KEY (`id_bangun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bangun_ruang`
--
ALTER TABLE `bangun_ruang`
  MODIFY `id_bangun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
