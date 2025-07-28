-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 01:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a083`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(23) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `cname` varchar(50) DEFAULT NULL,
  `place` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `pcode` varchar(50) DEFAULT NULL,
  `cno` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cname`, `place`, `street`, `pcode`, `cno`, `email`, `uname`, `pass`) VALUES
(1, 'fdgfg', 'sdfsd', 'fd', '334f', '3344', 'fff@gmail.com', 'aaa', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `id` int(11) NOT NULL,
  `pid` varchar(50) DEFAULT NULL,
  `vtype` varchar(50) DEFAULT NULL,
  `place` varchar(50) DEFAULT NULL,
  `lmark` varchar(50) DEFAULT NULL,
  `st` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`id`, `pid`, `vtype`, `place`, `lmark`, `st`) VALUES
(1, 'P-1', 'Car', 'nagercoil', 'ngl', 'N'),
(2, 'P-2', 'Car', 'nagercoil', 'ngl', 'N'),
(3, 'P-3', 'Car', 'nagercoil', 'ngl', 'N'),
(4, 'P-4', 'Car', 'nagercoil', 'ngl', 'P'),
(5, 'P-5', 'Car', 'nagercoil', 'ngl', 'N'),
(6, 'P-1', 'Car', 'Kanyakumari', 'rock', 'N'),
(7, 'P-2', 'Car', 'Kanyakumari', 'rock', 'N'),
(8, 'P-1', 'Car', 'Kanyakumari', 'rock', 'N'),
(9, 'P-2', 'Car', 'Kanyakumari', 'rock', 'N'),
(10, 'P-1', 'Car', 'Kanyakumari', 'rock', 'P'),
(11, 'P-2', 'Car', 'Kanyakumari', 'rock', 'N'),
(12, 'P-3', 'Car', 'Kanyakumari', 'rock', 'N'),
(13, 'P-1', 'Car', 'Kanyakumari', 'rock', 'N'),
(14, 'P-2', 'Car', 'Kanyakumari', 'rock', 'N'),
(15, 'P-3', 'Car', 'Kanyakumari', 'rock', 'N'),
(16, 'P-16', 'Car', 'Kanyakumari', 'rock', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `vregister`
--

CREATE TABLE `vregister` (
  `id` int(11) NOT NULL,
  `rno` varchar(50) DEFAULT NULL,
  `vname` varchar(50) DEFAULT NULL,
  `vtype` varchar(50) DEFAULT NULL,
  `oname` varchar(50) DEFAULT NULL,
  `cno` varchar(50) DEFAULT NULL,
  `dt` date DEFAULT NULL,
  `tm` varchar(50) DEFAULT NULL,
  `tm1` varchar(50) DEFAULT NULL,
  `pid` varchar(50) DEFAULT NULL,
  `amt` varchar(50) DEFAULT NULL,
  `uid` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vregister`
--

INSERT INTO `vregister` (`id`, `rno`, `vname`, `vtype`, `oname`, `cno`, `dt`, `tm`, `tm1`, `pid`, `amt`, `uid`, `email`) VALUES
(1, '53543', 'sfdg', 'Car', 'gdfg', '9488870339', '2023-10-29', '19:53', '20:23', 'P-2', NULL, '1', 'fff@gmail.com'),
(2, 'TN74', 'bvbcv', 'Car', 'fgh', '9488870339', '2023-11-01', '15:31', '-', 'P-1', NULL, '1', 'fff@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vregister`
--
ALTER TABLE `vregister`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `vregister`
--
ALTER TABLE `vregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
