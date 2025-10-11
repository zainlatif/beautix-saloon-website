-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 10:06 AM
-- Server version: 5.6.26
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barberz`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinguser`
--

CREATE TABLE IF NOT EXISTS `bookinguser` (
  `code` int(11) NOT NULL,
  `ucode` int(11) NOT NULL,
  `salcode` int(11) NOT NULL,
  `sercode` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `status` varchar(40) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookinguser`
--

INSERT INTO `bookinguser` (`code`, `ucode`, `salcode`, `sercode`, `date`, `time`, `status`, `rating`) VALUES
(1, 5, 1, 1, '08/14/2020', '21:55', '', 4),
(2, 4, 1, 5, '08/20/2020', '11:00', '', 1),
(3, 4, 1, 1, '09/03/2020', '12:09', '', 0),
(4, 5, 1, 5, '08/21/2020', '19:49', '', 5),
(6, 5, 2, 4, '', '21:46', '', 5),
(8, 5, 2, 4, '10/15/2020', '12:28', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `saloonservice`
--

CREATE TABLE IF NOT EXISTS `saloonservice` (
  `code` int(11) NOT NULL,
  `scode` int(20) NOT NULL,
  `sername` varchar(50) NOT NULL,
  `serprice` varchar(11) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saloonservice`
--

INSERT INTO `saloonservice` (`code`, `scode`, `sername`, `serprice`, `image`) VALUES
(1, 1, 'Men''s Cut', '$10', 'img_1.jpg'),
(2, 1, 'Men''s Cut with Shampoo', '$20', 'img_2.jpg'),
(3, 2, 'Ladies Cut with Shampoo and Blow Dry', '$10', 'img_3.jpg'),
(4, 2, 'Head Shave', '$250', 'img_4.jpg'),
(5, 1, 'ladies hair triming', '$26', 'img_6.jpg'),
(6, 3, 'Man''s hair triming', '$10', 'img_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `salooonuser`
--

CREATE TABLE IF NOT EXISTS `salooonuser` (
  `code` int(11) NOT NULL,
  `salname` varchar(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `location` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `image` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Deativate'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salooonuser`
--

INSERT INTO `salooonuser` (`code`, `salname`, `city`, `location`, `email`, `pass`, `phone`, `image`, `status`) VALUES
(1, 'saloon', 'test', 'test area', 'saloon@test.com', '12345', '03001234567', 'shop3.jpeg', 'Activited'),
(2, 'The White R', 'Faisalabad', 'Motor CityUp Town Motor City -', 'white@mail.com', '123', '03001234567', 'shop2.jpg', 'Deactivited'),
(3, 'Rookie Hair', 'Faisalabad', 'shop#32 D-ground', 'Rookie@mail.com', '123456', '03001234567', 'shop1.jpg', 'Activited'),
(4, 'Arslan', 'Faisalabad', 'faisalabd', 'saloon@test.com', '123445', '03001234567', 'person_1.jpg', 'Deactivited'),
(5, 'ad', 'daw', 'adw', 'saloon@test.com', '123456', '03001234567', 'person_1.jpg', 'Deactivited'),
(6, 'test', 'test', 'test', 'ab@mail.com', '12345', '03002134533', 'shop3.jpeg', 'Activited');

-- --------------------------------------------------------

--
-- Table structure for table `stylist`
--

CREATE TABLE IF NOT EXISTS `stylist` (
  `code` int(11) NOT NULL,
  `scode` int(11) NOT NULL,
  `stname` varchar(20) NOT NULL,
  `bio` text NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stylist`
--

INSERT INTO `stylist` (`code`, `scode`, `stname`, `bio`, `image`) VALUES
(1, 1, 'test', 'man cut , shave ,hair triming\r\n', ''),
(2, 1, 'test2', 'man cut , shave ,hair triming', ''),
(3, 2, 'Rookie', 'man cut , shave ,hair triming,', ''),
(4, 0, 'Arslan', '', ''),
(5, 1, 'Arslan', 'f,b,rb,e,b ,b ,b', ''),
(6, 0, 'saltext', 'bvshhjvshvbaj', ''),
(7, 0, 'abc', 'jhdfjhjh', ''),
(8, 0, 'abc', 'vds', ''),
(9, 0, 'abc', 'vds', ''),
(10, 0, 'abc', 'vds', ''),
(11, 0, 'abc', 'vds', ''),
(12, 0, 'abc', 'vds', ''),
(13, 0, 'abc', 'vds', ''),
(14, 0, 'abc', 'vds', ''),
(15, 1, 'abc', 'vdshg', ''),
(16, 1, 'James', 'hair triming, hair dying\r\n', ''),
(17, 1, 'abc', 'fdsfvrgv', ''),
(18, 1, 'abc', 'fdsfvrgv', ''),
(19, 1, 'abc', 'fdsfvrgv', ''),
(20, 1, 'jngdjf', 'snfjnjfsd', ''),
(33, 1, 'Arslan', 'bcahbhjcb sdjbjsbj ds', 'hero_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tt`
--

CREATE TABLE IF NOT EXISTS `tt` (
  `code` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tt`
--

INSERT INTO `tt` (`code`, `name`, `fname`, `address`) VALUES
(1, 'abc', 'xyz', 'gqhwgfhbhjsbvhuegfuhybjbhbhfbchjjchbsbqacqhbdchbdhnsbhjcnb');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `code` int(11) NOT NULL,
  `fname` varchar(11) NOT NULL,
  `lname` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`code`, `fname`, `lname`, `email`, `pass`, `phone`, `address`) VALUES
(1, '', '', '', '', '', ''),
(2, '$fname', '$lname', '$email', '$pass', '$phn', '$adres'),
(3, '', '', '', '', '', ''),
(4, 'Arslan', 'Rajpoot', 'Rookie@mail.com', '123456', '03001234567', 'faisalbad'),
(5, 'test', 'test', 'test@test.com', '123456', '03001234567', 'Faisalabad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinguser`
--
ALTER TABLE `bookinguser`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `saloonservice`
--
ALTER TABLE `saloonservice`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `salooonuser`
--
ALTER TABLE `salooonuser`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `stylist`
--
ALTER TABLE `stylist`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `tt`
--
ALTER TABLE `tt`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinguser`
--
ALTER TABLE `bookinguser`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `saloonservice`
--
ALTER TABLE `saloonservice`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `salooonuser`
--
ALTER TABLE `salooonuser`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `stylist`
--
ALTER TABLE `stylist`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tt`
--
ALTER TABLE `tt`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
