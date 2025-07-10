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
-- Table structure for table `tbl_login_acc`
--

CREATE TABLE `tbl_login_acc` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `login_id` varchar(250) DEFAULT NULL,
  `login_name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login_acc`
--

INSERT INTO `tbl_login_acc` (`id`, `username`, `password`, `type`, `login_id`, `login_name`) VALUES
(1, 'Admin', '7488e331b8b64e5794da3fa4eb10ad5d', 'Admin', NULL, 'Lei Lopez'),
(7, '18-1883', '71e6272f5803b4086f909f1e131e4846', 'Student', '18-1883', 'John Rey Nazareno Subion'),
(8, '18-3282', '71e6272f5803b4086f909f1e131e4846', 'Student', '18-3282', 'Jomar Soliman Coronel'),
(9, '15-0000', '93f9f81403b562e4498f2c8f4657660d', 'Student', '15-0000', 'Jomar Soliman N/A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_login_acc`
--
ALTER TABLE `tbl_login_acc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login_acc`
--
ALTER TABLE `tbl_login_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
