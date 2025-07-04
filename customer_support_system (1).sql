-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 09:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer_support_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `Id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`Id`, `username`, `password`, `usertype`) VALUES
(1, 'Admin', '12345', 'admin'),
(2, 'support Agent', '6789', 'support Agent'),
(3, 'Sponsor', '33333', 'sponsor');

-- --------------------------------------------------------

--
-- Table structure for table `replytable`
--

CREATE TABLE `replytable` (
  `ReplyId` int(50) NOT NULL,
  `CustomerName` varchar(50) NOT NULL,
  `CustomerEmail` varchar(50) NOT NULL,
  `Customermessage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `replytable`
--

INSERT INTO `replytable` (`ReplyId`, `CustomerName`, `CustomerEmail`, `Customermessage`) VALUES
(1, 'wwe', 'sakithhemsara7@gmail.com', 'wwwwwwww'),
(2, 'san', 'sakithhemsara7@gmail.com', 'wwwww');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE `sponsor` (
  `sID` int(11) NOT NULL,
  `fName` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telNo` int(15) NOT NULL,
  `package` varchar(15) NOT NULL,
  `nameC` varchar(15) NOT NULL,
  `creditN` int(25) NOT NULL,
  `eM` varchar(10) NOT NULL,
  `eY` int(5) NOT NULL,
  `cvV` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticketsnew`
--

CREATE TABLE `ticketsnew` (
  `usersName` varchar(11) NOT NULL,
  `usersEmail` varchar(11) NOT NULL,
  `ticketId` int(11) NOT NULL,
  `subject` varchar(11) NOT NULL,
  `message` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticketsnew`
--

INSERT INTO `ticketsnew` (`usersName`, `usersEmail`, `ticketId`, `subject`, `message`) VALUES
('aas', 'aas@gmail.c', 96, 'rrrt', 'wwww');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Fname` varchar(200) DEFAULT NULL,
  `Lname` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Tel_no` int(15) DEFAULT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Fname`, `Lname`, `Email`, `Tel_no`, `Username`, `Password`) VALUES
(1, 'sakith', 'hemsara', 'sakithhemsara7@gmail.com', 2147483647, 'sarith', '456'),
(3, 'madmin', '1', 'madmin@gmail.com', 773511612, 'admin', '1230'),
(4, 'aaa', 'lll', 'll@gmail.com', 11245632, 'saaa', '2255');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `replytable`
--
ALTER TABLE `replytable`
  ADD PRIMARY KEY (`ReplyId`);

--
-- Indexes for table `ticketsnew`
--
ALTER TABLE `ticketsnew`
  ADD PRIMARY KEY (`ticketId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alogin`
--
ALTER TABLE `alogin`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `replytable`
--
ALTER TABLE `replytable`
  MODIFY `ReplyId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ticketsnew`
--
ALTER TABLE `ticketsnew`
  MODIFY `ticketId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
