-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2016 at 05:27 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) NOT NULL,
  `restaurant_id` bigint(20) NOT NULL,
  `day` int(1) NOT NULL,
  `start_time` varchar(10) NOT NULL,
  `end_time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `restaurant_id`, `day`, `start_time`, `end_time`) VALUES
(15, 1, 3, '9:00 AM', '1:00 PM'),
(16, 1, 3, '2:00 PM', '6:00 PM'),
(17, 1, 4, '9:00 AM', '1:00 PM'),
(18, 1, 4, '2:00 PM', '6:00 PM'),
(19, 1, 5, '9:00 AM', '1:00 PM'),
(20, 1, 5, '2:00 PM', '6:00 PM'),
(21, 1, 6, '9:00 AM', '1:00 PM'),
(22, 1, 6, '2:00 PM', '6:00 PM'),
(23, 1, 7, '9:00 AM', '1:00 PM'),
(24, 1, 7, '2:00 PM', '6:00 PM'),
(25, 1, 1, '10:00 AM', '12:00 PM'),
(26, 1, 2, '12:00 AM', '1:00 PM'),
(27, 1, 2, '2:00 PM', '3:00 PM'),
(28, 1, 2, '4:00 PM', '5:00 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
