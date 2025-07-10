-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 10:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oescdlb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shs_student`
--

CREATE TABLE `tbl_shs_student` (
  `id` int(11) NOT NULL,
  `notif` int(11) NOT NULL DEFAULT 0,
  `enrolled_date` varchar(250) NOT NULL,
  `student_status` varchar(250) DEFAULT NULL,
  `strand` varchar(250) DEFAULT NULL,
  `student_id` varchar(11) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `house_street` varchar(250) DEFAULT NULL,
  `barangay` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `province` varchar(250) NOT NULL,
  `bdate` varchar(255) DEFAULT NULL,
  `bplace` text DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `cstat` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mnum` varchar(255) DEFAULT NULL,
  `fathername` varchar(255) DEFAULT NULL,
  `fathermnum` varchar(255) DEFAULT NULL,
  `foccupation` varchar(255) DEFAULT NULL,
  `faddress` text DEFAULT NULL,
  `mothername` varchar(255) DEFAULT NULL,
  `mothermnum` varchar(255) DEFAULT NULL,
  `moccupation` varchar(255) DEFAULT NULL,
  `maddress` text DEFAULT NULL,
  `guardianname` varchar(255) DEFAULT NULL,
  `guardiannumber` varchar(255) DEFAULT NULL,
  `goccupation` varchar(255) DEFAULT NULL,
  `gaddress` text DEFAULT NULL,
  `requirement1` text DEFAULT NULL,
  `requirement2` text DEFAULT NULL,
  `requirement3` text DEFAULT NULL,
  `requirement4` text DEFAULT NULL,
  `requirement5` text DEFAULT NULL,
  `requirement6` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_shs_student`
--
ALTER TABLE `tbl_shs_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_shs_student`
--
ALTER TABLE `tbl_shs_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
