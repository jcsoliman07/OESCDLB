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
-- Table structure for table `tbl_approvalstudent`
--

CREATE TABLE `tbl_approvalstudent` (
  `id` int(11) NOT NULL,
  `notif` int(11) NOT NULL DEFAULT 0,
  `semester` varchar(250) NOT NULL,
  `student_status` varchar(250) DEFAULT NULL,
  `course` varchar(250) DEFAULT NULL,
  `major` varchar(250) DEFAULT NULL,
  `student_id` varchar(11) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
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
-- Dumping data for table `tbl_approvalstudent`
--

INSERT INTO `tbl_approvalstudent` (`id`, `notif`, `semester`, `student_status`, `course`, `major`, `student_id`, `year`, `fname`, `lname`, `mname`, `suffix`, `house_street`, `barangay`, `city`, `province`, `bdate`, `bplace`, `religion`, `nationality`, `gender`, `cstat`, `email`, `mnum`, `fathername`, `fathermnum`, `foccupation`, `faddress`, `mothername`, `mothermnum`, `moccupation`, `maddress`, `guardianname`, `guardiannumber`, `goccupation`, `gaddress`, `requirement1`, `requirement2`, `requirement3`, `requirement4`, `requirement5`, `requirement6`) VALUES
(1, 0, 'Second', 'Old', 'Bachelor of Arts in Economics', 'None', '19-9999', 'First', 'Rammel', 'Nazareno', 'Subion', 'Jr.', 'St.Villanueva', 'Mayondon', 'Los Banos', 'Laguna', '1999-03-12', 'Catanduanes', 'Christianity', 'Filipino', 'Male', 'Single', 'ramilnazareno@gmail.com', '09558368755', 'N/A', 'N/A', '', '', 'N/A', 'N/A', '', '', 'Nelma Nazareno', '09287684675', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 0, 'First', 'New', 'Bachelor of Arts in Economics', 'None', '18-8232', 'First', 'Rammel', 'Nazareno', 'Subion', '', 'St.Villanueva', 'Mayondon', 'Los Banos', 'Laguna', '1999-03-12', 'Catanduanes', 'Christianity', 'Filipino', 'Male', 'Single', 'ramilnazareno@gmail.com', '09281992131', 'N/A', 'N/A', '', '', 'N/A', 'N/A', '', '', 'N/A', 'N/A', '', '', 'upload/2021-09-13 (2).png', 'upload/2021-09-13 (3).png', 'upload/2021-09-13 (4).png', 'upload/2021-09-14 (1).png', 'upload/2021-09-14 (3).png', 'upload/2021-09-14 (4).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_approvalstudent`
--
ALTER TABLE `tbl_approvalstudent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_approvalstudent`
--
ALTER TABLE `tbl_approvalstudent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
