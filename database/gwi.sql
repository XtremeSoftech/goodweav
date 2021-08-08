-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2021 at 01:26 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `del_flg` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exporter_sub_info`
--

CREATE TABLE `exporter_sub_info` (
  `id` int(11) NOT NULL,
  `exporter_code` varchar(111) NOT NULL,
  `address` varchar(500) NOT NULL,
  `country` varchar(100) NOT NULL,
  `registration_date` date NOT NULL,
  `delicensed_date` date DEFAULT NULL,
  `re_registration_date` date DEFAULT NULL,
  `flg` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `expoter`
--

CREATE TABLE `expoter` (
  `exporter_code` varchar(111) NOT NULL,
  `exporter_name` varchar(100) NOT NULL,
  `gstin` varchar(100) NOT NULL,
  `license_name` varchar(100) NOT NULL,
  `license_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `website` varchar(100) NOT NULL,
  `hash` varchar(100) NOT NULL,
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
  `gstin` varchar(100) NOT NULL,
  `license_name` varchar(100) NOT NULL,
  `license_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `hash` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `flg` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `importer_sub_info`
--

CREATE TABLE `importer_sub_info` (
  `id` int(11) NOT NULL,
  `importer_code` varchar(111) NOT NULL,
  `address` varchar(500) NOT NULL,
  `country` varchar(100) NOT NULL,
  `registration_date` varchar(20) NOT NULL,
  `delicensed_date` varchar(20) DEFAULT NULL,
  `re_registration_date` varchar(20) DEFAULT NULL,
  `flg` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `intregration`
--

CREATE TABLE `intregration` (
  `id` int(11) NOT NULL,
  `curr_api_link` varchar(500) NOT NULL,
  `curr_api_keys` varchar(200) NOT NULL,
  `del_flg` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `label_type`
--

CREATE TABLE `label_type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL,
  `del_flg` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `link_exp_to_imp`
--

CREATE TABLE `link_exp_to_imp` (
  `id` int(11) NOT NULL,
  `exp_code` varchar(100) NOT NULL,
  `imp_code` varchar(100) NOT NULL,
  `flg` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `requested_label`
--

CREATE TABLE `requested_label` (
  `id` int(11) NOT NULL,
  `exporter_code` varchar(100) NOT NULL,
  `label_type` int(11) NOT NULL,
  `no_of_requested_label` varchar(20) NOT NULL,
  `currency_type` int(11) NOT NULL,
  `usd_price` int(1) NOT NULL DEFAULT 1,
  `inr_price` varchar(10) NOT NULL,
  `euro_price` varchar(10) NOT NULL,
  `gbp_price` varchar(10) NOT NULL,
  `request_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(1) NOT NULL DEFAULT 0,
  `del_flg` char(1) NOT NULL DEFAULT 'N'
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
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `intregration`
--
ALTER TABLE `intregration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `label_type`
--
ALTER TABLE `label_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link_exp_to_imp`
--
ALTER TABLE `link_exp_to_imp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exp_code` (`exp_code`),
  ADD KEY `imp_code` (`imp_code`);

--
-- Indexes for table `requested_label`
--
ALTER TABLE `requested_label`
  ADD PRIMARY KEY (`id`),
  ADD KEY `currency_type` (`currency_type`),
  ADD KEY `label_type` (`label_type`),
  ADD KEY `exporter_code` (`exporter_code`);

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
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `intregration`
--
ALTER TABLE `intregration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `label_type`
--
ALTER TABLE `label_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `link_exp_to_imp`
--
ALTER TABLE `link_exp_to_imp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requested_label`
--
ALTER TABLE `requested_label`
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
-- Constraints for table `link_exp_to_imp`
--
ALTER TABLE `link_exp_to_imp`
  ADD CONSTRAINT `link_exp_to_imp_ibfk_1` FOREIGN KEY (`exp_code`) REFERENCES `expoter` (`exporter_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `link_exp_to_imp_ibfk_2` FOREIGN KEY (`imp_code`) REFERENCES `importer` (`importer_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requested_label`
--
ALTER TABLE `requested_label`
  ADD CONSTRAINT `requested_label_ibfk_1` FOREIGN KEY (`currency_type`) REFERENCES `currency` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requested_label_ibfk_2` FOREIGN KEY (`label_type`) REFERENCES `label_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requested_label_ibfk_3` FOREIGN KEY (`exporter_code`) REFERENCES `expoter` (`exporter_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `varities`
--
ALTER TABLE `varities`
  ADD CONSTRAINT `varities_ibfk_1` FOREIGN KEY (`sector_id`) REFERENCES `sector` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
