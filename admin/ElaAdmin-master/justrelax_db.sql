-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2019 at 09:47 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `justrelax_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `code` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `des` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`code`, `name`, `des`, `image`, `status`) VALUES
(1, 'Ac Repair', 'Ac repair and service', 'jpg', ''),
(2, 'Home Appliances Repair', 'Repair every home appliance', 'jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `code` int(11) NOT NULL,
  `scode` int(11) NOT NULL,
  `ucode` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `price` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`code`, `scode`, `ucode`, `date_time`, `price`, `name`, `mobile`, `email`, `address`, `status`) VALUES
(1, 2, 0, '2019-07-30 20:16:43', 0, 'sdasd', 'asda', 'sad@sda.com', 'asd', 'pendeing'),
(2, 1, 0, '2019-07-30 20:23:01', 0, 'ali', '03226283554', 'alirehman.cs@gmail.com', '212 p', 'pending'),
(3, 2, 0, '2019-07-30 20:32:49', 0, 'umar', '03226250922', 'abc@gmail.com', '212', 'pending'),
(4, 1, 0, '2019-07-30 20:35:05', 0, 'mohsin', '03226283554', 'alirehman.cs@gmail.com', 'hoouse', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `code` int(11) NOT NULL COMMENT '<ni></ni>',
  `cat_code` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `des` text NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`code`, `cat_code`, `name`, `price`, `image`, `des`, `status`) VALUES
(1, 1, 'Repair ac', 200, 'jpg', 'repairing ac', ''),
(2, 2, 'Iron Repiar', 200, 'jpg', 'Iron mechanical and electrical work', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `code` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(40) NOT NULL,
  `type` varchar(20) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `mobile2` varchar(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`code`, `name`, `email`, `pwd`, `image`, `address`, `city`, `type`, `mobile`, `mobile2`, `status`) VALUES
(1, 'Ramzan Sharif', 'rh@gmail.com', '123', '1.jpg', 'yt', 'Faisalabad', 'user', '76', '', ''),
(2, 'tr', 'a', 'a', '', 'yt', 'Faisalabad', '', '4545', '', ''),
(3, 'tr', 'ererwe', 'yt', '', 'yt', 'Faisalabad', '', '4545', '', ''),
(4, 'tr', 'ytyyyyyy', 'yt', '', 'yt', 'Faisalabad', '', '4545', '', ''),
(5, 'ALI', 'iiuiu', '123', '', 'iuiu', 'Faisalabad', 'Service Provider', '9898', '', ''),
(6, 't', '', '', '', '', 'Faisalabad', 'Visitor', '', '', ''),
(7, 'ALI', 'ali@gmail.com', '123', '', 'D GROUND ', 'FAISALABAD', 'user', '998989898', '', ''),
(8, 'IU', 'IU', '12', '', 'IU', 'FAISALABAD', 'user', '98', '', ''),
(9, 'IU', 'IU2', '12', '', 'IU2', 'FAISALABAD', 'user', '98', '', ''),
(10, '43', '43', '43', '', '43', 'FAISALABAD', 'user', '43', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`code`),
  ADD KEY `scode` (`scode`),
  ADD KEY `ucode` (`ucode`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`code`),
  ADD KEY `cat_code` (`cat_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT COMMENT '<ni></ni>', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`cat_code`) REFERENCES `cat` (`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
