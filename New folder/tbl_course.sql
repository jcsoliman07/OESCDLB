-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 10:40 AM
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
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `crse_id` int(11) NOT NULL,
  `crse_depart` varchar(255) DEFAULT NULL,
  `crse_major` varchar(255) DEFAULT NULL,
  `crse_description` varchar(255) DEFAULT NULL,
  `crse_department` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`crse_id`, `crse_depart`, `crse_major`, `crse_description`, `crse_department`) VALUES
(1, 'BSCS', 'None', 'Bachelor of Science in Computer Science', 'Computer Science'),
(2, 'BSBA', 'Financial Management', 'Bachelor of Science in Business Administration', 'Business Administration'),
(3, 'BSBA', 'Marketing Management', 'Bachelor of Science in Business Administration', 'Business Administration'),
(4, 'BSE', 'English', 'Bachelor of Secondary Education', 'Education'),
(5, 'BSE', 'Filipino', 'Bachelor of Secondary Education', 'Education'),
(6, 'BSE', 'Mathematics', 'Bachelor of Secondary Education', 'Education'),
(7, 'BSE', 'Science', 'Bachelor of Secondary Education', 'Education'),
(8, 'BEE', 'None', 'Bachelor of Elementary Education', 'Education'),
(9, 'AB', 'None', 'Bachelor of Arts in Economics', 'Economics'),
(10, NULL, 'Educational Planning and Management', 'Master in Management', 'Masteral');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`crse_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `crse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
