-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 09:28 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gwi`
--
CREATE DATABASE IF NOT EXISTS `gwi` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gwi`;

-- --------------------------------------------------------

--
-- Table structure for table `exporter_sub_info`
--

CREATE TABLE `exporter_sub_info` (
  `id` int(11) NOT NULL,
  `exporter_code` varchar(111) NOT NULL,
  `registration_date` varchar(20) NOT NULL,
  `source_country` varchar(20) NOT NULL,
  `delicensed_date` varchar(20) NOT NULL,
  `flg` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `expoter`
--

CREATE TABLE `expoter` (
  `exporter_code` varchar(111) NOT NULL,
  `exporter_name` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `country` varchar(200) NOT NULL,
  `website` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `flg` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `importer`
--

CREATE TABLE `importer` (
  `importer_code` varchar(111) NOT NULL,
  `importer_name` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `country` varchar(200) NOT NULL,
  `website` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `flg` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `importer`
--

INSERT INTO `importer` (`importer_code`, `importer_name`, `address`, `country`, `website`, `status`, `flg`) VALUES
('123swapanil', 'swapanil', 'swapanil', 'sqwapanil', 'swapanil', 0, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `importer_sub_info`
--

CREATE TABLE `importer_sub_info` (
  `id` int(11) NOT NULL,
  `importer_code` varchar(111) NOT NULL,
  `registration_date` varchar(20) NOT NULL,
  `source_country` varchar(20) NOT NULL,
  `delicensed_date` varchar(20) NOT NULL,
  `re-registration_date` varchar(20) NOT NULL,
  `flg` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `id` int(11) NOT NULL,
  `sector_name` varchar(100) NOT NULL,
  `flg` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `varities`
--

CREATE TABLE `varities` (
  `id` int(11) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `varities_name` varchar(100) NOT NULL,
  `flg` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exporter_sub_info`
--
ALTER TABLE `exporter_sub_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exporter_code` (`exporter_code`);

--
-- Indexes for table `expoter`
--
ALTER TABLE `expoter`
  ADD PRIMARY KEY (`exporter_code`) USING BTREE;

--
-- Indexes for table `importer`
--
ALTER TABLE `importer`
  ADD PRIMARY KEY (`importer_code`) USING BTREE;

--
-- Indexes for table `importer_sub_info`
--
ALTER TABLE `importer_sub_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `importer_code` (`importer_code`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `varities`
--
ALTER TABLE `varities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sector_id` (`sector_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exporter_sub_info`
--
ALTER TABLE `exporter_sub_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `importer_sub_info`
--
ALTER TABLE `importer_sub_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sector`
--
ALTER TABLE `sector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `varities`
--
ALTER TABLE `varities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exporter_sub_info`
--
ALTER TABLE `exporter_sub_info`
  ADD CONSTRAINT `exporter_sub_info_ibfk_1` FOREIGN KEY (`exporter_code`) REFERENCES `expoter` (`exporter_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `importer_sub_info`
--
ALTER TABLE `importer_sub_info`
  ADD CONSTRAINT `importer_sub_info_ibfk_1` FOREIGN KEY (`importer_code`) REFERENCES `importer` (`importer_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `varities`
--
ALTER TABLE `varities`
  ADD CONSTRAINT `varities_ibfk_1` FOREIGN KEY (`sector_id`) REFERENCES `sector` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
