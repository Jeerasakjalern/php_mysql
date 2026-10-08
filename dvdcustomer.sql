-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2026 at 12:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dvdcustomer`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `actorid` int(3) NOT NULL,
  `actorname` varchar(20) NOT NULL,
  `actorsurname` varchar(20) NOT NULL,
  `actorgender` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cusid` int(5) NOT NULL,
  `cusname` varchar(20) NOT NULL,
  `cussurname` varchar(20) NOT NULL,
  `cusgender` varchar(10) NOT NULL,
  `custel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cusid`, `cusname`, `cussurname`, `cusgender`, `custel`) VALUES
(1, 'John', 'Doe', 'Male', 999999999),
(2, 'Jane', 'Doe', 'Female', 999999998),
(3, 'membertest', 'test', 'female', 898944631);

-- --------------------------------------------------------

--
-- Table structure for table `dvd`
--

CREATE TABLE `dvd` (
  `dvdid` int(3) NOT NULL,
  `dvdname` varchar(20) NOT NULL,
  `year_release` year(4) NOT NULL,
  `dvdduration` int(10) NOT NULL,
  `genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dvd`
--

INSERT INTO `dvd` (`dvdid`, `dvdname`, `year_release`, `dvdduration`, `genre`) VALUES
(1, 'Jumanji', '1995', 104, 'fantasy adventure'),
(2, 'testtest', '2026', 120, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `dvd_actor`
--

CREATE TABLE `dvd_actor` (
  `actorid` int(3) NOT NULL,
  `dvdid` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `purchaseid` int(3) NOT NULL,
  `cusid` int(3) NOT NULL,
  `dvdid` int(3) NOT NULL,
  `purdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`actorid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cusid`);

--
-- Indexes for table `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`dvdid`);

--
-- Indexes for table `dvd_actor`
--
ALTER TABLE `dvd_actor`
  ADD PRIMARY KEY (`actorid`,`dvdid`),
  ADD KEY `dvdid` (`dvdid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`purchaseid`,`cusid`,`dvdid`),
  ADD KEY `cusid` (`cusid`,`dvdid`),
  ADD KEY `dvdid` (`dvdid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dvd_actor`
--
ALTER TABLE `dvd_actor`
  ADD CONSTRAINT `dvd_actor_ibfk_1` FOREIGN KEY (`actorid`) REFERENCES `actor` (`actorid`),
  ADD CONSTRAINT `dvd_actor_ibfk_2` FOREIGN KEY (`dvdid`) REFERENCES `dvd` (`dvdid`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`dvdid`) REFERENCES `dvd` (`dvdid`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`cusid`) REFERENCES `customer` (`cusid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
