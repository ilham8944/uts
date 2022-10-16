-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2022 at 05:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reksadana`
--

-- --------------------------------------------------------

--
-- Table structure for table `listrdr`
--

CREATE TABLE `listrdr` (
  `no` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `satuthn` varchar(100) NOT NULL,
  `tigathn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listrdr`
--

INSERT INTO `listrdr` (`no`, `nama`, `jenis`, `satuthn`, `tigathn`) VALUES
(1, 'Sucorinvest Flexi Fund	', 'Campuran', '19.64%	', '38.17%	'),
(2, 'Sucorinvest Sharia Equity Fund	', 'Saham', '8.51%	', '18.61%	'),
(3, 'Sucorinvest Maxi Fund	', 'Saham', '23.27%		', '18.14%	'),
(4, 'Sucorinvest Equity Fund	', 'Saham	', '28.12%	', '31.18%	'),
(5, 'Danamasas Stabil	', 'Obligasi	', '5.32%	', '22.05%	');

-- --------------------------------------------------------

--
-- Table structure for table `rdpu`
--

CREATE TABLE `rdpu` (
  `no` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `satuthn` varchar(100) NOT NULL,
  `tigathn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rdpu`
--

INSERT INTO `rdpu` (`no`, `nama`, `jenis`, `satuthn`, `tigathn`) VALUES
(1, 'Sucorinvest Money Market Fund', 'Pasar Uang', '4.59%', '17.84%'),
(2, 'Sucorinvest Sharia Money Market Fund', 'Pasar Uang', '4.19%', '16.97%'),
(3, 'Danamas Rupiah Plus', 'Pasar Uang', '3.74%', '14.98%');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listrdr`
--
ALTER TABLE `listrdr`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `rdpu`
--
ALTER TABLE `rdpu`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rdpu`
--
ALTER TABLE `rdpu`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
