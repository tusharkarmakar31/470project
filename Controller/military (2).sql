-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 01:58 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `military`
--

-- --------------------------------------------------------

--
-- Table structure for table `army`
--

CREATE TABLE `army` (
  `ID` int(11) NOT NULL,
  `First Name` varchar(50) NOT NULL,
  `Last Name` varchar(50) NOT NULL,
  `Joining Date` date NOT NULL,
  `Position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `army`
--

INSERT INTO `army` (`ID`, `First Name`, `Last Name`, `Joining Date`, `Position`) VALUES
(1001, 'Tushar', 'Karmakar', '2019-05-28', 'Major'),
(1002, 'Istear', 'Ahmed', '2019-05-14', 'Army'),
(1003, 'Iffat', 'Sumaita', '2019-10-01', 'LT. Colonel'),
(1004, 'Faiza', 'Ibnat', '2019-08-12', 'Colonel'),
(1005, 'John', 'Smith', '2019-12-13', 'Colonel'),
(1006, 'Jonathan', 'Doe', '2019-12-18', 'Army'),
(1007, 'Bill', 'Gates', '2019-12-12', 'Major'),
(1008, 'Joy', 'Roy', '2019-09-16', 'Brigadier'),
(1009, 'Mehadi', 'Hasan', '2019-08-13', 'Lt. Colonel'),
(1010, 'Abdus', 'Samad', '2018-08-15', 'Lt. Colonel'),
(1011, 'Kuddus', 'Ahmed', '2015-11-21', 'Major');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `army`
--
ALTER TABLE `army`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `army`
--
ALTER TABLE `army`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1012;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
