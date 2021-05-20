-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 07:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krishworks`
--
CREATE DATABASE IF NOT EXISTS `krishworks` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `krishworks`;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_name` varchar(20) NOT NULL,
  `Phone_num` varchar(10) NOT NULL,
  `Email_id` varchar(30) NOT NULL,
  `Marks_Subject1` int(3) NOT NULL,
  `Marks_Subject2` int(3) NOT NULL,
  `Marks_Subject3` int(3) NOT NULL,
  `Marks_Subject4` int(3) NOT NULL,
  `Marks_Subject5` int(3) NOT NULL,
  `Total_Marks` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_name`, `Phone_num`, `Email_id`, `Marks_Subject1`, `Marks_Subject2`, `Marks_Subject3`, `Marks_Subject4`, `Marks_Subject5`, `Total_Marks`) VALUES
('sameer', '9980405583', 'sameer@gmail.com', 60, 70, 80, 60, 70, 340),
('nidhi', '9148771035', 'nidhi@gmail.com', 60, 70, 80, 60, 70, 340);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
