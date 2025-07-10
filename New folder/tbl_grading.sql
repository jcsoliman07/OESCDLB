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
-- Table structure for table `tbl_grading`
--

CREATE TABLE `tbl_grading` (
  `id` int(11) NOT NULL,
  `subj_grade` varchar(250) NOT NULL,
  `student_id` varchar(250) NOT NULL,
  `subj_code` varchar(250) NOT NULL,
  `subj_description` varchar(250) NOT NULL,
  `subj_course` varchar(250) NOT NULL,
  `subj_year` varchar(250) NOT NULL,
  `subj_sem` varchar(250) NOT NULL,
  `subj_unit` varchar(250) NOT NULL,
  `subj_prereq` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_grading`
--

INSERT INTO `tbl_grading` (`id`, `subj_grade`, `student_id`, `subj_code`, `subj_description`, `subj_course`, `subj_year`, `subj_sem`, `subj_unit`, `subj_prereq`) VALUES
(1, 'Passed', '18-8384', 'Eng1', 'English Communication ', 'Bachelor of Science in Computer Science', 'First', 'First', '3', 'None'),
(2, 'Passed', '18-8384', 'PerDev', 'Personality Development', 'Bachelor of Science in Computer Science', 'First', 'First', '3', 'None'),
(3, 'Passed', '18-8384', 'CSCC01', 'Introduction of Computing', 'Bachelor of Science in Computer Science', 'First', 'First', '3', 'None'),
(4, 'Passed', '18-8384', 'CSCC02', 'Fundamentals of Programming', 'Bachelor of Science in Computer Science', 'First', 'First', '3', 'None'),
(5, 'Passed', '18-8384', 'Math1', 'Algebra and Trigonometry', 'Bachelor of Science in Computer Science', 'First', 'First', '3', 'None'),
(6, 'Passed', '18-8384', 'CWTS1', 'Civic Welfare Training Service 1', 'Bachelor of Science in Computer Science', 'First', 'First', '3', 'None'),
(7, 'Passed', '18-8384', 'PE1', 'Self Testing Activities', 'Bachelor of Science in Computer Science', 'First', 'First', '2', 'None'),
(8, 'Passed', '18-8384', 'CSPC101', 'Discrete Structures 1', 'Bachelor of Science in Computer Science', 'First', 'Second', '3', 'Math1'),
(9, 'Passed', '18-8384', 'Math2', 'Analytic Geometry', 'Bachelor of Science in Computer Science', 'First', 'Second', '3', 'Math1'),
(10, 'Passed', '18-8384', 'CWTS2', 'Civic Welfare Service 2', 'Bachelor of Science in Computer Science', 'First', 'Second', '3', 'CWTS1'),
(11, 'Passed', '18-8384', 'PE2', 'Rhythmic Activities', 'Bachelor of Science in Computer Science', 'First', 'Second', '2', 'PE1'),
(12, 'Passed', '18-8384', 'SocSci1', 'Economics w/ Taxation and Agrarian', 'Bachelor of Science in Computer Science', 'First', 'Second', '3', 'None'),
(13, 'Passed', '18-8384', 'GenEd4', 'Basic Logic w/ Professional Ethics', 'Bachelor of Science in Computer Science', 'First', 'Second', '3', 'None'),
(14, 'Passed', '18-8384', 'CSCC03', 'Intermediate Programming', 'Bachelor of Science in Computer Science', 'First', 'Second', '3', 'None'),
(15, 'Passed', '18-8384', 'CSPC102', 'Discrete Structures 2', 'Bachelor of Science in Computer Science', 'Second', 'First', '3', 'CSPC101'),
(16, 'Passed', '18-8384', 'PE3', 'Group Games and Sports', 'Bachelor of Science in Computer Science', 'Second', 'First', '2', 'PE2'),
(17, 'Passed', '18-8384', 'CSPC103', 'Object Oriented Programming', 'Bachelor of Science in Computer Science', 'Second', 'First', '3', 'CSCC03'),
(18, 'Passed', '18-8384', 'CSCC04', 'Data Structures and Algorithms ', 'Bachelor of Science in Computer Science', 'Second', 'First', '3', 'CSCC03'),
(19, 'Passed', '18-8384', 'Fil1', 'Komunikasyon Sa Akademikong Filipino', 'Bachelor of Science in Computer Science', 'Second', 'First', '3', 'None'),
(20, 'Passed', '18-8384', 'GenEd1', 'Understanding the Self ', 'Bachelor of Science in Computer Science', 'Second', 'First', '3', 'None'),
(21, 'Passed', '18-8384', 'GenEd2', 'Mathematics in the Modern World', 'Bachelor of Science in Computer Science', 'Second', 'First', '3', 'None'),
(22, 'Passed', '18-8384', 'Internet', 'Fundamentals of Internet', 'Bachelor of Science in Computer Science', 'Second', 'First', '3', 'None'),
(23, 'Passed', '18-8384', 'GenEd5', 'Purposive Communication', 'Bachelor of Science in Computer Science', 'Second', 'First', '3', 'None'),
(24, 'Passed', '18-8384', 'CSCC05', 'Information Management', 'Bachelor of Science in Computer Science', 'Second', 'Second', '3', 'CSCC03'),
(25, 'Passed', '18-8384', 'CSPC106', 'Architecture and Organization', 'Bachelor of Science in Computer Science', 'Second', 'Second', '3', 'CSPC102'),
(26, 'Passed', '18-8384', 'PE4', 'Recreational Activities', 'Bachelor of Science in Computer Science', 'Second', 'Second', '2', 'PE3'),
(27, 'Passed', '18-8384', 'CSPC104', 'JAVA Programming', 'Bachelor of Science in Computer Science', 'Second', 'Second', '3', 'CSPC103'),
(28, 'Passed', '18-8384', 'CSPC105', 'Algorithms And Complexity', 'Bachelor of Science in Computer Science', 'Second', 'Second', '3', 'CSCC04'),
(29, 'Passed', '18-8384', 'Fil2', 'Pagbasa at Pagsulat tungo sa Pananaksil', 'Bachelor of Science in Computer Science', 'Second', 'Second', '3', 'Fil1'),
(30, 'Passed', '18-8384', 'CSPC107', 'Information Assurance Security', 'Bachelor of Science in Computer Science', 'Second', 'Second', '2', 'None'),
(31, 'Passed', '18-8384', 'CSPC108', 'Web Programming', 'Bachelor of Science in Computer Science', 'Third', 'First', '3', 'CSCC05'),
(32, 'Passed', '18-8384', 'CSCC06', 'Application Development and Emerging ', 'Bachelor of Science in Computer Science', 'Third', 'First', '3', 'CSCC05'),
(33, 'Passed', '18-8384', 'CSPC110', 'Operating System', 'Bachelor of Science in Computer Science', 'Third', 'First', '3', 'CSPC106'),
(34, 'Passed', '18-8384', 'CSPC109', 'Automata Theory and Formal Language ', 'Bachelor of Science in Computer Science', 'Third', 'First', '3', 'CSPC105'),
(35, 'Passed', '18-8384', 'GenEd6', 'The Contemporary World', 'Bachelor of Science in Computer Science', 'Third', 'First', '3', 'None'),
(36, 'Passed', '18-8384', 'GenEd7', 'Art Appreciation', 'Bachelor of Science in Computer Science', 'Third', 'First', '3', 'None'),
(37, 'Passed', '18-8384', 'GenEd8', 'Readings in the Philippine History', 'Bachelor of Science in Computer Science', 'Third', 'First', '3', 'None'),
(38, 'Passed', '18-8384', 'CSPC113', 'Program Languages', 'Bachelor of Science in Computer Science', 'Third', 'Second', '3', 'CSCC04'),
(39, 'Passed', '18-8384', 'CSPC114', 'Software Engineering 1', 'Bachelor of Science in Computer Science', 'Third', 'Second', '3', 'CSCC05'),
(40, 'Passed', '18-8384', 'CSPC112', 'Mobile Programming', 'Bachelor of Science in Computer Science', 'Third', 'Second', '3', 'CSPC104'),
(41, 'Passed', '18-8384', 'CSPC115', 'Networks and Communication', 'Bachelor of Science in Computer Science', 'Third', 'Second', '3', 'CSPC110'),
(42, 'Passed', '18-8384', 'CSELEC1', 'Intelligent System', 'Bachelor of Science in Computer Science', 'Third', 'Second', '3', 'None'),
(43, 'Passed', '18-8384', 'Lit', 'Introduction to Philippine Literature', 'Bachelor of Science in Computer Science', 'Third', 'Second', '3', 'None'),
(44, 'Passed', '18-8384', 'CSPC111', 'Human Computer Interaction', 'Bachelor of Science in Computer Science', 'Third', 'Second', '1', 'None'),
(45, 'Passed', '18-8384', 'Acctg', 'Basic Accounting', 'Bachelor of Science in Computer Science', 'Third', 'Second', '3', 'None'),
(46, 'Passed', '18-8384', 'CSELEC2', 'Computational Science', 'Bachelor of Science in Computer Science', 'Fourth', 'First', '3', 'CSCC05'),
(47, 'Passed', '18-8384', 'CSPC119', 'Software Engineering 2', 'Bachelor of Science in Computer Science', 'Fourth', 'First', '3', 'CSPC114'),
(48, 'Passed', '18-8384', 'CSPC117', 'Cloud Computing', 'Bachelor of Science in Computer Science', 'Fourth', 'First', '3', 'CSPC115'),
(49, 'Passed', '18-8384', 'CSPC116', 'Fundamentals of Robotics', 'Bachelor of Science in Computer Science', 'Fourth', 'First', '3', 'CSELEC1'),
(50, 'Passed', '18-8384', 'CSPC118', 'Social Issues and Professional Practices', 'Bachelor of Science in Computer Science', 'Fourth', 'First', '3', 'None'),
(51, 'Passed', '18-8384', 'CSPC120', 'CS Thesis Writing 1', 'Bachelor of Science in Computer Science', 'Fourth', 'First', '3', 'None'),
(52, 'Passed', '18-8384', 'CSELEC3', 'Graphics and Visual Computing', 'Bachelor of Science in Computer Science', 'Fourth', 'Second', '3', 'CSCC04'),
(53, 'Passed', '18-8384', 'CSPC121', 'Technopreneurship', 'Bachelor of Science in Computer Science', 'Fourth', 'Second', '3', 'CSCC06'),
(54, 'Passed', '18-8384', 'CSPC122', 'CS Thesis Writing 2', 'Bachelor of Science in Computer Science', 'Fourth', 'Second', '3', 'CSPC120'),
(55, 'Passed', '18-8384', 'CSPC123', 'Practicum', 'Bachelor of Science in Computer Science', 'Fourth', 'Second', '3', 'None'),
(367, 'Passed', '19-9999', 'PE1', 'Physical Fitness and Related Activities', 'Bachelor of Arts in Economics', 'First', '', '2', 'None'),
(368, 'Passed', '18-3282', 'Eng1', 'English Communication ', 'Bachelor of Science in Computer Science', 'First', 'First', '3', 'None'),
(369, 'Passed', '18-3282', 'PerDev', 'Personality Development', 'Bachelor of Science in Computer Science', 'First', 'First', '3', 'None'),
(370, 'Passed', '18-3282', 'CSCC01', 'Introduction of Computing', 'Bachelor of Science in Computer Science', 'First', 'First', '3', 'None'),
(371, 'Passed', '18-3282', 'CSCC02', 'Fundamentals of Programming', 'Bachelor of Science in Computer Science', 'First', 'First', '3', 'None'),
(372, 'Passed', '18-3282', 'Math1', 'Algebra and Trigonometry', 'Bachelor of Science in Computer Science', 'First', 'First', '3', 'None'),
(373, 'Passed', '18-3282', 'CWTS1', 'Civic Welfare Training Service 1', 'Bachelor of Science in Computer Science', 'First', 'First', '3', 'None'),
(374, 'Passed', '18-3282', 'PE1', 'Self Testing Activities', 'Bachelor of Science in Computer Science', 'First', 'First', '2', 'None');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_grading`
--
ALTER TABLE `tbl_grading`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_grading`
--
ALTER TABLE `tbl_grading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=375;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
