-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2024 at 04:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_les`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jdwl`
--

CREATE TABLE `tbl_jdwl` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kls` varchar(10) NOT NULL,
  `hari` varchar(25) NOT NULL,
  `jam` time NOT NULL,
  `mapel` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mentor`
--

CREATE TABLE `tbl_mentor` (
  `id` int(11) NOT NULL,
  `nm_mntr` varchar(50) NOT NULL,
  `kls` varchar(10) NOT NULL,
  `mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pndftrn`
--

CREATE TABLE `tbl_pndftrn` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` char(13) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_jdwl`
--
ALTER TABLE `tbl_jdwl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mapel` (`mapel`);

--
-- Indexes for table `tbl_mentor`
--
ALTER TABLE `tbl_mentor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mapel` (`mapel`);

--
-- Indexes for table `tbl_pndftrn`
--
ALTER TABLE `tbl_pndftrn`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_jdwl`
--
ALTER TABLE `tbl_jdwl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_mentor`
--
ALTER TABLE `tbl_mentor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pndftrn`
--
ALTER TABLE `tbl_pndftrn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_jdwl`
--
ALTER TABLE `tbl_jdwl`
  ADD CONSTRAINT `tbl_jdwl_ibfk_1` FOREIGN KEY (`mapel`) REFERENCES `tbl_mentor` (`mapel`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_mentor`
--
ALTER TABLE `tbl_mentor`
  ADD CONSTRAINT `tbl_mentor_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tbl_pndftrn` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
