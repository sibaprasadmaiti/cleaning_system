-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 21, 2021 at 07:51 AM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cleaning_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE `admin_master` (
  `admin_master_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `is_active` enum('Y','N') DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_datetime` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_datetime` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`admin_master_id`, `username`, `password`, `is_active`, `updated_by`, `created_datetime`, `updated_datetime`) VALUES
(2, 'admin', '$2y$10$CyIJWw92tLhjvbyUEQDCaeW33E5zcvT0FNeWOdweiAmHa4cBdrypa', 'Y', NULL, '2021-08-10 23:27:01', '2021-08-10 23:27:01');

-- --------------------------------------------------------

--
-- Table structure for table `sub_contractor`
--

CREATE TABLE `sub_contractor` (
  `sub_contractor_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `location` text,
  `is_active` enum('Y','N') DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_datetime` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_datetime` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_contractor`
--

INSERT INTO `sub_contractor` (`sub_contractor_id`, `name`, `email`, `password`, `phone`, `location`, `is_active`, `updated_by`, `created_datetime`, `updated_datetime`) VALUES
(4, 'test', 'tanmay.craiglist@gmail.com', '$2y$10$uLUCH0lpPqJQC5n25zuOBe7Gy6Q57lmenJnTULp.nb8pQUFDNOCiC', '9930969680', 'india', 'Y', 2, '2021-08-11 01:25:52', '2021-08-11 07:54:55'),
(5, 'Tanmay', 'tanmay@digyug.com', '$2y$10$8sx1y4nfY1T9DT2NOrhGbu2yN9r.QLjVScwtHMAJf28aQhbQcSM7u', '9930969680', 'Mumbai', 'Y', 2, '2021-08-11 08:20:33', '2021-08-11 08:20:33'),
(6, 'test2', 'pooja@oya.auction', '$2y$10$UdisU7IoWy0cbowUdjt1VeLhP3H4.lWvl9QcURyHm3ogc0Z1EGWBm', '9999999999', 'Mumbai', 'Y', 2, '2021-08-12 03:45:05', '2021-08-12 05:08:37');

-- --------------------------------------------------------

--
-- Table structure for table `sub_contractor_email_log`
--

CREATE TABLE `sub_contractor_email_log` (
  `id` int(11) NOT NULL,
  `sub_contractor_id` int(11) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `attachment` text NOT NULL,
  `seen` enum('Y','N') DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_datetime` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `file_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_contractor_email_log`
--

INSERT INTO `sub_contractor_email_log` (`id`, `sub_contractor_id`, `sub`, `msg`, `attachment`, `seen`, `updated_by`, `updated_datetime`, `file_name`) VALUES
(11, 4, 'teattess', '<p>Details of inspection has been updated</p>', 'ImgFile258884654.pdf', 'N', 2, '2021-08-11 06:16:30', '1121.jpg,117.jpg'),
(12, 4, 'qwe', '<p>Details of inspection has been send to you on the portal</p>', 'ImgFile1863242799.pdf', 'N', NULL, '2021-08-11 06:14:06', 'carl-heyerdahl-KE0nC8-58MQ-unsplash11.jpg,carl-heyerdahl-KE0nC8-58MQ-unsplash12.jpg'),
(13, 4, 'Tere Naam', '<p>Details of inspection has been send to you on the portal</p>', 'ImgFile1100257995.pdf', 'N', NULL, '2021-08-11 06:14:56', 'carl-heyerdahl-KE0nC8-58MQ-unsplash13.jpg,carl-heyerdahl-KE0nC8-58MQ-unsplash14.jpg'),
(14, 4, 'Tere Naam', '<p>Details of inspection has been send to you on the portal</p>', 'ImgFile1411793659.pdf', 'N', NULL, '2021-08-11 06:15:54', 'austin-chan-ukzHlkoz1IE-unsplash11.jpg,austin-chan-ukzHlkoz1IE-unsplash12.jpg'),
(15, 4, 'hi test', '<p>hi this is test</p><p>&nbsp;</p>', 'ImgFile1146796761.pdf', 'Y', 2, '2021-08-11 07:56:25', 'wallcoatingimg1-600x4004.jpg'),
(16, 5, 'Testing', '<p>Details of inspection has been updated</p>', 'ImgFile1646949009.pdf', 'N', 2, '2021-08-12 05:03:49', 'wallcoatingimg1-600x4005.jpg'),
(17, 5, 'Tere Naam', '<p>Details of inspection has been send to you on the portal</p>', 'ImgFile1386906453.pdf', 'N', 2, '2021-08-12 03:34:35', 'eid110.jpg,eid111.jpg'),
(18, 6, 'Text greeting lourme siplmen', '<p>Details of inspection has been updated</p>', 'ImgFile1813932836.pdf', 'N', 2, '2021-08-12 05:08:07', '1124.jpg,1111.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_contractor_email_log_copy`
--

CREATE TABLE `sub_contractor_email_log_copy` (
  `id` int(11) NOT NULL,
  `sub_contractor_id` int(11) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `attachment` text NOT NULL,
  `seen` enum('Y','N') DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_datetime` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `file_name` varchar(255) DEFAULT NULL,
  `sub_contractor_email_log_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_master`
--
ALTER TABLE `admin_master`
  ADD PRIMARY KEY (`admin_master_id`);

--
-- Indexes for table `sub_contractor`
--
ALTER TABLE `sub_contractor`
  ADD PRIMARY KEY (`sub_contractor_id`);

--
-- Indexes for table `sub_contractor_email_log`
--
ALTER TABLE `sub_contractor_email_log`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `sub_contractor_email_log_copy`
--
ALTER TABLE `sub_contractor_email_log_copy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_master`
--
ALTER TABLE `admin_master`
  MODIFY `admin_master_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_contractor`
--
ALTER TABLE `sub_contractor`
  MODIFY `sub_contractor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_contractor_email_log`
--
ALTER TABLE `sub_contractor_email_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sub_contractor_email_log_copy`
--
ALTER TABLE `sub_contractor_email_log_copy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
