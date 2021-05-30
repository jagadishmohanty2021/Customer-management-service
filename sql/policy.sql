-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 06:32 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lic`
--

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `id` int(11) NOT NULL,
  `policynum` int(30) NOT NULL,
  `policyname` varchar(50) NOT NULL,
  `doc` date NOT NULL,
  `mode` varchar(50) NOT NULL,
  `term` varchar(50) NOT NULL,
  `amount` int(20) NOT NULL,
  `recbond` varchar(10) NOT NULL,
  `daterecbond` date NOT NULL,
  `recby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`id`, `policynum`, `policyname`, `doc`, `mode`, `term`, `amount`, `recbond`, `daterecbond`, `recby`) VALUES
(1, 123456, 'jagadish', '2021-04-29', 'Yearly', '108/12', 1000, 'yes', '2021-04-30', 'jagadish'),
(2, 123456, 'jagadish', '2021-04-07', 'Halfyearly', '10/20', 1534654, 'yes', '2021-04-23', 'jagadish'),
(3, 123456, 'jagadish', '2021-04-07', 'Halfyearly', '10/20', 1534654, 'yes', '2021-04-23', 'jagadish'),
(4, 5656, 'adfa', '0065-02-15', 'Yearly', '108/12', 10210, 'yes', '2021-04-28', 'jagadish'),
(5, 2147483647, 'jagadishmohanty', '2021-05-12', 'Halfyearly', '8/10', 142564, 'yes', '2021-05-19', 'jagu'),
(6, 2147483647, 'jagadishmohanty', '2021-05-12', 'Halfyearly', '8/10', 142564, 'yes', '2021-05-19', 'jagu'),
(7, 2147483647, 'dfafa', '2021-05-12', 'Halfyearly', '10/20', 13151651, 'yes', '2021-05-11', 'mdkdk'),
(8, 546464, 'jadkljaf', '2021-05-12', 'Halfyearly', '10/20', 14526, 'yes', '2021-05-10', '12345'),
(15, 123456845, 'naresh meher', '2021-05-06', 'Halfyearly', '8/10', 142536, 'yes', '2021-05-18', 'jagu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `policy`
--
ALTER TABLE `policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
