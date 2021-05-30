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
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `ani` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `acard` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `pancard` varchar(100) NOT NULL,
  `matric` varchar(100) NOT NULL,
  `it` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `name`, `fname`, `mname`, `hname`, `dob`, `ani`, `address`, `mail`, `phone`, `acard`, `photo`, `pancard`, `matric`, `it`) VALUES
(3, 'Jagadish Mohanty', 'Lokanath Mohanty', 'dfadfa', 'adfadf', '2021-05-26', '2021-05-22', 'at-nayapara,po-belpahar', 'jagadish.mohanty1994@gmail.com', 2147483647, 'aadhar/1721109002 Diptimayee Sahoo.pdf', 'pic/anita.png', 'pancard/Camera_Ready_paper_87.pdf', 'matric/Profile.pdf', 'it/signature.pdf'),
(4, 'Anita Maharana', 'kaldflajl', 'lakjlfajlda', 'lakfjdlajfl', '2021-05-20', '2021-05-20', 'at-nayapara,po-belpahar', 'anitamaharana55@gmail.com', 2147483647, 'aadhar/1721109002 Diptimayee Sahoo.pdf', 'pic/anita.png', 'pancard/Camera_Ready_paper_87.pdf', 'matric/Profile.pdf', 'it/TEQIP_OFFICE_P1_20201022_194356.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
