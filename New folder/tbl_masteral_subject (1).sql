-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 10:42 AM
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
-- Table structure for table `tbl_masteral_subject`
--

CREATE TABLE `tbl_masteral_subject` (
  `subj_id` int(11) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `subj_course` varchar(250) NOT NULL,
  `subj_major` varchar(250) NOT NULL,
  `subj_unit` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_masteral_subject`
--

INSERT INTO `tbl_masteral_subject` (`subj_id`, `subject`, `subj_course`, `subj_major`, `subj_unit`) VALUES
(1, 'Research Methodology', 'Master in Management', 'Educational Planning and Management', '3'),
(2, 'Managerial Statistics', 'Master in Management', 'Educational Planning and Management', '3'),
(3, 'Organization and Management', 'Master in Management', 'Educational Planning and Management', '3'),
(4, 'Human Resource Management', 'Master in Management', 'Educational Planning and Management', '3'),
(5, 'Administrative Communication', 'Master in Management', 'Educational Planning and Management', '3'),
(6, 'Financial Management', 'Master in Management', 'Educational Planning and Management', '3'),
(7, 'Project Planning and Management', 'Master in Management', 'Educational Planning and Management', '3'),
(8, 'Curriculum Development', 'Master in Management', 'Educational Planning and Management', '3'),
(9, 'Educational Administration and Supervision', 'Master in Management', 'Educational Planning and Management', '3'),
(10, 'Current Issues and Problem in Education', 'Master in Management', 'Educational Planning and Management', '3'),
(11, 'Advanced Philosophy of Education', 'Master in Management', 'Educational Planning and Management', '3'),
(12, 'Modern Trends in Education', 'Master in Management', 'Educational Planning and Management', '3'),
(13, 'Seminar in Thesis Writing', 'Master in Management', 'Educational Planning and Management', '3'),
(14, 'Thesis Writing', 'Master in Management', 'Educational Planning and Management', '6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_masteral_subject`
--
ALTER TABLE `tbl_masteral_subject`
  ADD PRIMARY KEY (`subj_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_masteral_subject`
--
ALTER TABLE `tbl_masteral_subject`
  MODIFY `subj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
