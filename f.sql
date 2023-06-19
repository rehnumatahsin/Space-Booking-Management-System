-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 03:33 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` varchar(15) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `Sdate` varchar(15) DEFAULT NULL,
  `Edate` varchar(15) DEFAULT NULL,
  `days` int(2) DEFAULT NULL,
  `reason` text NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `Sdate`, `Edate`, `days`, `reason`, `status`) VALUES
('1003', 'Bobby', '2022-03-15', '2022-03-16', 2, 'Lecture', 'Approved'),
('1003', 'Bobby', '2022-03-15', '2022-03-19', 5, 'Computer', 'Approved'),
('1004', 'Beth', '2022-07-15', '2022-07-17', 3, 'Lecture', 'Rejected'),
('1006', 'Cindy', '2022-04-15', '2022-04-16', 2, 'Lab', 'Approved'),
('1005', 'Chad', '2022-05-15', '2022-05-17', 3, 'Lecture', 'Approved'),
('1004', 'Beth', '2022-01-15', '2022-01-16', 2, 'Computer', 'Approved'),
('1005', 'Chad', '2022-03-15', '2022-03-17', 3, 'Lecture', 'Approved'),
('1006', 'Cindy', '2022-03-15', '2022-03-16', 2, 'Computer', 'Approved'),
('1005', 'Chad', '2022-06-15', '2022-06-17', 3, 'Lab', 'Rejected'),
('1006', 'Cindy', '2022-04-15', '2022-04-16', 2, 'Conference', 'Approved'),
('1005', 'Chad', '2022-07-15', '2022-07-17', 3, 'Computer', 'Approved'),
('1004', 'Beth', '2022-02-15', '2022-02-16', 2, 'Lab', 'Approved'),
('1005', 'Chad', '2022-09-15', '2022-09-17', 3, 'Lecture', 'Rejected'),
('1006', 'Cindy', '2022-06-15', '2022-06-16', 2, 'Lecture', 'Approved'),
('1005', 'Chad', '2022-11-15', '2022-11-17', 3, 'Travel', 'Approved'),
('1006', 'Cindy', '2022-07-15', '2022-07-16', 2, 'Lab', 'Approved'),
('1005', 'Chad', '2023-01-15', '2023-01-17', 3, 'Lecture', 'Rejected'),
('1006', 'Cindy', '2023-02-15', '2023-02-19', 5, 'Computer', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `newapplication`
--

CREATE TABLE `newapplication` (
  `id` varchar(15) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `Sdate` varchar(15) DEFAULT NULL,
  `Edate` varchar(15) DEFAULT NULL,
  `days` int(2) DEFAULT NULL,
  `reason` text NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newapplication`
--

INSERT INTO `newapplication` (`id`, `name`, `Sdate`, `Edate`, `days`, `reason`, `status`) VALUES
('1004', 'Beth', '2022-09-15', '2022-09-16', 2, 'Hospital', 'New Application'),
('1005', 'Chad', '2022-09-15', '2022-09-17', 3, 'Travel', 'New Application'),
('1006', 'Cindy', '2022-08-15', '2022-08-19', 5, 'Travel', 'New Application');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) DEFAULT NULL,
  `id` varchar(15) DEFAULT NULL,
  `password` varchar(13) DEFAULT NULL,
  `level` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `id`, `password`, `level`) VALUES
('Annie', '1001', 'admin1', 1),
('Adam', '1002', 'admin2', 1),
('Bobby', '1003', 'manager1', 2),
('Beth', '1004', 'manager2', 2),
('Chad', '1005', 'staff1', 3),
('Cindy', '1006', 'staff2', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
