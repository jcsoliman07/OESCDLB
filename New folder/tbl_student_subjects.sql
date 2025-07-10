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
-- Table structure for table `tbl_student_subjects`
--

CREATE TABLE `tbl_student_subjects` (
  `id` int(11) NOT NULL,
  `student_id` varchar(11) DEFAULT NULL,
  `subj_code` varchar(250) DEFAULT NULL,
  `student_subj_course` varchar(250) DEFAULT NULL,
  `student_subj_year` varchar(250) DEFAULT NULL,
  `student_subj_sem` varchar(250) NOT NULL,
  `student_subj_unit` int(11) DEFAULT NULL,
  `student_subj_description` text DEFAULT NULL,
  `student_subj_prereq` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student_subjects`
--

INSERT INTO `tbl_student_subjects` (`id`, `student_id`, `subj_code`, `student_subj_course`, `student_subj_year`, `student_subj_sem`, `student_subj_unit`, `student_subj_description`, `student_subj_prereq`) VALUES
(455, '18-1883', 'GenEd1', 'Bachelor of Arts in Economics', 'First', 'First', 3, 'Understanding the Self', 'None'),
(456, '18-1883', 'GenEd2', 'Bachelor of Arts in Economics', 'First', 'First', 3, 'Mathematics in the Modern World', 'None'),
(458, '18-1883', 'BCMathA', 'Bachelor of Arts in Economics', 'First', 'First', 3, 'Algebra and Trigonometry', 'None'),
(459, '18-1883', 'CWTS 1', 'Bachelor of Arts in Economics', 'First', 'First', 3, 'Civic Welfare Training Services 1', 'None');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_student_subjects`
--
ALTER TABLE `tbl_student_subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_student_subjects`
--
ALTER TABLE `tbl_student_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=468;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
