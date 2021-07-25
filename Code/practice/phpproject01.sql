-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 11:48 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(50) NOT NULL,
  `usersEmail` varchar(250) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin12', 'admin12');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `tenantinformation` (
  `usersId` int(11) NOT NULL,
  `tenantId` int(11) NOT NULL,
  `usersName` varchar(100) NOT NULL,
  `flatNo` varchar(100) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `usersEmail` varchar(100) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(250) NOT NULL,
  `rent` varchar(100) NOT NULL,
  `nid` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `tenantinformation` (`usersId`, `tenantId`, `usersName`, `flatNo`, `mobile`, `usersEmail`, `usersUid`,`usersPwd`, `rent`, `nid`) VALUES
(5, 1002, 'Abul', '1', '01759364574', 'abul@gmail.com', 'abul12', 'abul12', '10000', '5789638'),
(7, 1003, 'Kabul', '2', '0171968574', 'kabul@gmail.com', 'kabul12', 'kabul12', '10500', '5789639'),


-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- Indexes for table `students`
--
ALTER TABLE `tenantinformation`
  ADD PRIMARY KEY (`usersId`);

--
-- Indexes for table `teachers`
--

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `tenantinformation`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `teachers`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
