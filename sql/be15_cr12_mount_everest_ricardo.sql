-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 05:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be15_cr12_mount_everest_ricardo`
--
CREATE DATABASE IF NOT EXISTS `be15_cr12_mount_everest_ricardo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be15_cr12_mount_everest_ricardo`;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `photo`, `description`, `period`, `price`, `longitude`, `latitude`) VALUES
(1, 'Paris, France', 'paris.jpg', 'Paris is great.', '2 weeks', '500 euro', '2.333686781668316', '48.910577203159555'),
(2, 'Budapest, Hungary', 'budapest.jpg', 'Budapest is great.', '7 days', '150 euro', '19.040236', '47.497913'),
(3, 'Moskow, Russia', 'moskow.jpg', 'Moskow is awesome.', '30 days', '600 euro', '37.617298', '55.755825'),
(4, 'Bratislava, Slovakia', 'bratislava.jpg', 'bratislava is good', '2 weeks', '400', '17.107748', '48.148598'),
(5, 'Santiago de Cuba, Cuba', 'cuba.jpg', 'Cuba is very nice', '2 months', '800 euro', '-75.821327', '20.025021'),
(6, 'Toronto, Canada', 'canada.jpg', 'Canada is nice', '2 weeks', '800 euro', '-106.346771', '56.130367'),
(7, 'New York, US', 'us.jpg', 'America is great', '10 days', '450 euro', '-106.346771', '56.130367');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
