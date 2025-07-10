-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 10:41 AM
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
-- Table structure for table `tbl_instructor`
--

CREATE TABLE `tbl_instructor` (
  `ins_id` int(11) NOT NULL,
  `ins_name` varchar(255) DEFAULT NULL,
  `ins_description` varchar(255) DEFAULT NULL,
  `ins_status` int(1) NOT NULL,
  `ins_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_instructor`
--

INSERT INTO `tbl_instructor` (`ins_id`, `ins_name`, `ins_description`, `ins_status`, `ins_image`) VALUES
(1, 'ALLELI TERESA L SAN AGUSTIN', 'School Director', 0, 'upload/Agustin.jpg'),
(2, 'LEA A. LOPEZ', 'School Registrar', 0, 'upload/LopezL.jpg'),
(3, 'AIMEE R. ONA', 'Program Coordinator, Caregiving NCII', 0, 'upload/OnaA.JPG'),
(4, 'JULIETA T. GONZALES', 'Assistant to the Registrar', 0, 'upload/GonzalesJ.JPG'),
(5, 'LUCIA R. LUSANEA', 'School Cashier', 0, 'upload/Mamu.JPG'),
(6, 'AMALIA E. ABDURAHMAN', 'School Principal', 0, 'upload/ABDURAHMAN.JPG'),
(7, 'FLORA M. MARBELLA', 'School Librarian', 0, 'upload/MARBELLA.JPG'),
(8, 'LEOVIGILDA R. ALCASID', 'Faculty', 0, 'upload/ALCASID.JPG'),
(9, 'MARIA ROBERTA C. ARAGON', 'Guidance Advocate', 0, 'upload/ARAGON.JPG'),
(10, 'MA. CRISTINA P. CORPUZ', 'Faculty', 0, 'upload/CORPUZ.jpg'),
(11, 'KATHERINE JOY L. TICZON', 'Accounting Assistant', 0, 'upload/Ticzon, Katherine Joy L._pp.jpg'),
(12, 'ROGELIO M. CRUZ JR.', 'Faculty', 0, 'upload/ROGELIO M. CRUZ JR..JPG'),
(13, 'ELY G. GUAÑIZO JR.', 'Faculty', 0, 'upload/GUAÑIZO JR..JPG'),
(14, 'LIZA B. MASTRILI', 'Faculty', 0, 'upload/MASTRILI.jpg'),
(15, 'RUDJERICK C. OCAMPO', 'Faculty', 0, 'upload/RUDJERICK C. OCAMPO.JPG'),
(16, 'RICHARD L. PASCUA', 'Faculty', 0, 'upload/RICHARD L. PASCUA.JPG'),
(17, 'BENJAMIN JOSE N. ROSALES', 'Faculty', 0, 'upload/BENJAMIN JOSE N. ROSALES.JPG'),
(18, 'MA. EMELITA A. SASA', 'Faculty', 0, 'upload/MA. EMELITA A. SASA.JPG'),
(19, 'ANGELICA L.  RAGOT', 'Faculty', 0, 'upload/RAGOT.jpg'),
(20, 'KARLO M. SITYAR', 'Faculty', 0, 'upload/KARLO M SITYAR.JPG'),
(21, 'ROSELYN L. PASCUA', 'Faculty', 0, 'upload/ROSELYN L. PASCUA.JPG'),
(22, 'JACQUELINE F. RAMOS', 'Faculty', 0, 'upload/JACQUELINE F. RAMOS.JPG'),
(23, 'ELAIZA D. BAUTISTA', 'Faculty', 0, 'upload/ELAIZA D. BAUTISTA.JPG'),
(24, 'MAY ANN E. BIENES', 'Faculty', 0, 'upload/MAY ANN E. BIENES.JPG'),
(25, 'NORIELYN D. ELEC', 'Faculty', 0, 'upload/NORIELYN D. ELEC.JPG'),
(26, 'MAR CRIS A. VELASCO', 'Faculty', 0, 'upload/MAR CRIS A. VELASCO.JPG'),
(27, 'DIANNE MAE P. SISON', 'Faculty', 0, 'upload/DIANNE MAE P. SISON.jpg'),
(28, 'NORMAN JAY R. BALLESTEROS', 'Assistant to the Registrar', 0, 'upload/NORMAN JAY R. BALLESTEROS.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_instructor`
--
ALTER TABLE `tbl_instructor`
  ADD PRIMARY KEY (`ins_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_instructor`
--
ALTER TABLE `tbl_instructor`
  MODIFY `ins_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
