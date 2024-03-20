-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2024 at 11:43 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rajanee_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `stu_subject`
--

CREATE TABLE `stu_subject` (
  `id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `subjects` varchar(100) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stu_subject`
--

INSERT INTO `stu_subject` (`id`, `stu_id`, `subjects`, `marks`) VALUES
(52, 55, 'eng', 46),
(53, 55, 'hindi', 54),
(54, 55, 'ss', 75),
(55, 55, 'guj', 55);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `tid` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` text NOT NULL,
  `Photo` varchar(30) NOT NULL,
  `Collage_Name` varchar(30) NOT NULL,
  `Enrollment_Number` int(11) NOT NULL,
  `Subjects` varchar(30) NOT NULL,
  `Total` varchar(30) NOT NULL,
  `Percentage` varchar(30) NOT NULL,
  `Grade` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`tid`, `Name`, `Email`, `Phone`, `Photo`, `Collage_Name`, `Enrollment_Number`, `Subjects`, `Total`, `Percentage`, `Grade`) VALUES
(55, 'rajanee', 'sa@hgs', '54544646', '', 'df', 0, '', '230', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stu_subject`
--
ALTER TABLE `stu_subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stu_id` (`stu_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stu_subject`
--
ALTER TABLE `stu_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stu_subject`
--
ALTER TABLE `stu_subject`
  ADD CONSTRAINT `stu_subject_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `tasks` (`tid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
