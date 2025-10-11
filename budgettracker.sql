-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 12:40 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budgettracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `bankaccounts`
--

CREATE TABLE IF NOT EXISTS `bankaccounts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `startamount` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankaccounts`
--

INSERT INTO `bankaccounts` (`id`, `name`, `color`, `startamount`, `createdAt`, `updatedAt`) VALUES
(1, 'aaaaa', 'red', '23', '2020-10-26 07:25:41', '2020-11-05 07:59:23'),
(2, 'qeeee', 'red', '23', '2020-10-26 13:37:12', '2020-11-05 07:59:30'),
(3, 'qeeee', 'red', '213', '2020-10-26 13:41:53', '2020-11-05 07:59:41'),
(4, 'tt', 'Color(0xff4ebde6)', 'ff', '2020-10-26 13:56:35', '2020-10-26 13:56:35'),
(5, 'eee', 'Color(0xffe6d94e)', 'eee', '2020-10-28 12:04:18', '2020-10-28 12:04:18'),
(6, 'aaa', 'Color(0xffeb5e34)', 'ss', '2020-10-28 13:18:12', '2020-10-28 13:18:12'),
(7, 'ww', 'Color(0xffeb5e34)', 'rr', '2020-10-28 13:23:43', '2020-10-28 13:23:43'),
(8, 'qq', 'Color(0xffeb5e34)', 'ww', '2020-10-28 13:28:46', '2020-10-28 13:28:46'),
(9, 'sss', 'Color(0xffe6a14e)', 'ww', '2020-10-28 13:30:35', '2020-10-28 13:30:35'),
(10, 'ww', 'Color(0xffb8e64e)', 'rrr', '2020-10-28 13:34:00', '2020-10-28 13:34:00'),
(11, 'fff', 'Color(0xffb8e64e)', 'ttt', '2020-10-28 13:41:06', '2020-10-28 13:41:06'),
(12, 'bb', 'Color(0xffe6d94e)', '124', '2020-11-02 08:33:33', '2020-11-02 08:33:33');

-- --------------------------------------------------------

--
-- Table structure for table `budgets`
--

CREATE TABLE IF NOT EXISTS `budgets` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `Amount` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budgets`
--

INSERT INTO `budgets` (`id`, `name`, `Amount`, `createdAt`, `updatedAt`, `userId`) VALUES
(1, 'Arslan', '1234', '0000-00-00 00:00:00', '2020-11-04 11:48:23', NULL),
(2, 'test', '120', '2020-10-23 10:20:48', '2020-11-04 11:48:43', NULL),
(3, 'd', '23', '2020-10-23 10:21:47', '2020-11-04 11:28:39', NULL),
(4, 'ab', '123454', '2020-10-23 10:22:04', '2020-11-04 11:28:58', NULL),
(5, 'test', '32', '2020-10-26 09:18:15', '2020-10-26 09:18:15', NULL),
(6, 'car repair', '34', '2020-10-26 11:31:11', '2020-10-26 11:31:11', NULL),
(7, 'bike repair', '423', '2020-10-26 11:37:33', '2020-10-26 11:37:33', NULL),
(8, '', '23', '2020-10-26 11:41:37', '2020-10-26 11:41:37', NULL),
(9, '', '223', '2020-10-26 11:42:22', '2020-10-26 11:42:22', NULL),
(10, 'uuu', '23', '2020-10-26 11:45:58', '2020-10-26 11:45:58', NULL),
(14, 'sdf', '123', '2020-10-28 11:11:51', '2020-10-28 11:11:51', NULL),
(15, 'sdf', '123', '2020-10-29 13:02:34', '2020-10-29 13:02:34', NULL),
(16, 'aa', '2222', '2020-10-29 13:06:20', '2020-10-29 13:06:20', NULL),
(17, 'ee', '22', '2020-11-02 09:09:41', '2020-11-02 09:09:41', NULL),
(18, '11', 'qq', '2020-11-02 09:10:53', '2020-11-02 09:10:53', NULL),
(19, 'ee', '111', '2020-11-02 09:12:36', '2020-11-02 09:12:36', NULL),
(24, 'abc', '123', '2020-11-02 10:10:18', '2020-11-02 10:10:18', NULL),
(25, 'abc', '123', '2020-11-02 10:12:58', '2020-11-02 10:12:58', NULL),
(26, 'nm ', 'nm ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(27, 'abc', '123', '2020-11-02 10:34:07', '2020-11-02 10:34:07', NULL),
(28, 'cc', '22', '2020-11-02 10:52:10', '2020-11-02 10:52:10', NULL),
(29, 'abcD', '23', '2020-11-02 11:42:20', '2020-11-04 11:46:11', NULL),
(30, 'wf', '23', '2020-11-02 11:44:22', '2020-11-04 12:15:56', NULL),
(31, 'test', '1233', '2020-11-02 11:51:26', '2020-11-04 12:15:46', 2),
(32, 'ddd', 'rr', '2020-11-02 12:07:10', '2020-11-02 12:07:10', NULL),
(33, 'eee', 'ee', '2020-11-02 12:12:10', '2020-11-02 12:12:10', 1),
(34, 'bike maintaince', '239', '2020-11-04 10:54:10', '2020-11-04 10:54:10', 2),
(35, 'ello', '233', '2020-11-04 10:54:51', '2020-11-04 10:54:51', 2),
(36, 'ello', '233', '2020-11-04 10:54:51', '2020-11-04 10:54:51', 2),
(37, 'test', '22', '2020-11-04 10:56:30', '2020-11-04 10:56:30', 2),
(38, 'test', '22', '2020-11-04 10:56:30', '2020-11-04 10:56:30', 2),
(39, 'wf', '34', '2020-11-04 10:59:28', '2020-11-04 10:59:28', 2),
(40, 'wf', '34', '2020-11-04 10:59:28', '2020-11-04 10:59:28', 2),
(41, 'd', '32', '2020-11-04 11:00:11', '2020-11-04 11:00:11', 2),
(42, 'maintaince', '23', '2020-11-04 11:00:37', '2020-11-04 11:00:37', 2),
(43, 'sdgfer', '23', '2020-11-04 11:01:56', '2020-11-04 11:01:56', 2),
(44, 'ndsn', '234', '2020-11-04 11:03:07', '2020-11-04 11:03:07', 2),
(45, 'dmns', '324', '2020-11-04 11:05:27', '2020-11-04 11:05:27', 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `icon`, `createdAt`, `updatedAt`) VALUES
(2, 'aa', 'jsha', '2020-10-23 14:02:05', '2020-11-04 13:38:33'),
(3, 'ab', '12345', '2020-10-26 06:50:10', '2020-10-26 06:50:10'),
(5, 'expense', 'C:\\fakepath\\mob.jpg', '2020-11-04 13:03:58', '2020-11-04 13:03:58'),
(6, 'test', '1604906642351-download (2).jpg', '2020-11-09 07:24:03', '2020-11-09 07:24:03'),
(7, 'an', '1604907665715-mob.jpg', '2020-11-09 07:41:06', '2020-11-09 07:41:06'),
(8, 'asd', '1604908296081-enterprise.png', '2020-11-09 07:51:36', '2020-11-09 07:51:36'),
(9, 'asdfghjkl', '1604994425972-math-6.jpg', '2020-11-10 07:47:07', '2020-11-10 07:47:07');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL,
  `payeename` text,
  `date` text,
  `price` text,
  `trantype` text,
  `category` text,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `payeename`, `date`, `price`, `trantype`, `category`, `createdAt`, `updatedAt`, `userId`) VALUES
(1, 'test', 'Mon 12 PM', '2000', 'Expense', 'Cash', '0000-00-00 00:00:00', '2020-11-04 08:38:13', 3),
(2, 'test33333', 'Sun 1 PM', '250', 'Expense', 'Cash', '2020-10-23 11:01:51', '2020-11-04 11:47:10', 1),
(3, 'abc', '112313', '23', 'test', 'test', '2020-10-23 11:03:40', '2020-11-04 08:05:02', NULL),
(4, 'Expence', '2020-10-29 00:00:00.000', '200', 'car registration', 'test', '2020-10-28 10:31:16', '2020-11-04 08:23:40', NULL),
(5, 'job corps', '2020-10-30 00:00:00.000', '200', 'Income', 'test', '2020-10-29 11:21:56', '2020-10-29 11:21:56', NULL),
(6, 'dd', '2020-10-30 00:00:00.000', '200', 'Income', 'test', '2020-10-29 11:24:24', '2020-10-29 11:24:24', NULL),
(7, 'vgbf', '10-11-2020', '200', 'Income', 'test', '2020-11-01 14:26:12', '2020-11-11 07:13:51', NULL),
(8, 'vgbf', '10-10-2020', '200', 'Income', 'test', '2020-11-01 14:26:23', '2020-11-11 07:14:16', NULL),
(9, 'shopping', '2020-11-03 00:00:00.000', '200', 'Income', 'test', '2020-11-02 08:35:38', '2020-11-02 08:35:38', NULL),
(22, 'abc', '123', '2', 'abc', 'as', '2020-11-02 11:22:02', '2020-11-02 11:22:02', NULL),
(23, 'abc', '123', '2', 'abc', 'as', '2020-11-02 11:22:21', '2020-11-02 11:22:21', NULL),
(24, 'abc', '123', '2', 'abc', 'as', '2020-11-02 11:23:45', '2020-11-02 11:23:45', NULL),
(25, 'abc', '123', '2', 'abc', 'as', '2020-11-02 11:35:51', '2020-11-02 11:35:51', 1),
(29, 'aa', '2020-11-15 00:00:00.000', '200', 'Income', 'test', '2020-11-02 12:20:58', '2020-11-02 12:20:58', 1),
(30, 'ee', '2020-11-03 00:00:00.000', '200', 'Income', 'test', '2020-11-02 12:21:54', '2020-11-02 12:21:54', 1),
(31, 'asf', '2343', '32', 'dac', 'sdc', '2020-11-03 13:23:11', '2020-11-03 13:23:11', 2),
(32, 'd m,', 'ef', '32', 'sd', 'sd', '2020-11-03 13:27:23', '2020-11-03 13:27:23', 2),
(33, 'sc', 'ds', '3', 'dssdsdv', 'ds', '2020-11-03 13:29:16', '2020-11-03 13:29:16', 2),
(34, 'wf', 'sd', '23', 'dssdsdv', 'dcs', '2020-11-03 13:33:49', '2020-11-03 13:33:49', 2),
(35, 'wf', 'hjk', '798', 'gfhjk', 'gfhj', '2020-11-04 11:04:07', '2020-11-04 11:04:07', 2),
(36, 'd', '123', '2343', 'asdf', 'sadf', '2020-11-10 11:00:39', '2020-11-10 11:00:39', 2),
(37, 'd', '11-10-2020', '123', 'Expense', 'test', '2020-11-11 07:57:32', '2020-11-11 07:57:32', 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `mobtoken` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `email`, `password`, `createdAt`, `updatedAt`, `mobtoken`) VALUES
(1, 'ali', 'a@a.com', 'sha1$b177cddb$1$d045f37a81b5fa9483f0d6c6bb4ce083e212abf9', '2020-10-15 11:13:17', '2020-10-16 12:25:44', 'fgcqlU1hRmuR-Mcj2OFoLT:APA91bGNblBCr5YM0irRGEuW4V9ABkc558aoKsstYtCIi7yvL52DnXX2MFRzecR8YqA7DzkzGk5l7NymgjI9ogTcUlxixF6u8JEpmGRW38nqZE6SiDSoPI1MSWYfBy9P_GzyeL3NMntC'),
(2, 'test', 'test1@mail.com', 'sha1$3aebd9c9$1$a2e64753ec07ccd8e19e76c9155702317fe2d938', '2020-10-15 11:28:14', '2020-10-16 12:25:14', NULL),
(3, 'test', 'test2@mail.com', 'sha1$c925fe8f$1$229260d7e5e3e3d9b3827c526c7aa69eec8572a5', '2020-10-16 07:29:41', '2020-10-16 12:25:49', NULL),
(4, 'test', 'test3@mail.com', 'sha1$1c150986$1$18c479e40249063bebf43132d8b2b6cc90809e6a', '2020-10-16 07:30:12', '2020-10-16 12:25:52', NULL),
(5, 'abc', 'a@mail.com', 'sha1$da74fb6d$1$d9dbaea8b9e71ae465fadf47b1b5ad558bf59967', '2020-10-16 07:52:18', '2020-10-16 12:25:58', NULL),
(6, 'abc', 'b@mail.com', 'sha1$6b4a39a4$1$9c2749c30caef51b67c489e7c16290c1d3f8ca80', '2020-10-16 07:54:48', '2020-10-16 12:26:03', NULL),
(7, 'abc', 'c@mail.com', 'sha1$5aecad95$1$eb7ca2ab1ee778dba0fd7981ff2bf98d4bb19fd9', '2020-10-16 07:54:55', '2020-10-16 12:26:07', NULL),
(8, NULL, 'ars@mail.com', 'sha1$6cf1a491$1$9e6c9436b19ca260065f8773a92923637fc2995e', '2020-10-16 11:40:30', '2020-10-16 12:26:10', NULL),
(9, NULL, 'arslan@mail.com', 'sha1$3f289386$1$8b22526d52ec90d08661b36b95c80a2f5e01aec8', '2020-10-16 11:44:14', '2020-10-16 11:44:14', NULL),
(10, '', '', 'sha1$48ea7481$1$ef791c390dddfa29655d8badad4f89e1d8b4b923', '2020-10-16 13:35:13', '2020-10-16 13:35:13', NULL),
(11, 'na', 'y@m.com', 'sha1$fe044f55$1$d915ec944d46dc96be13f95cc40a8c3f8db60361', '2020-10-16 13:38:46', '2020-10-16 13:38:46', NULL),
(12, 'na', 'yyy@m.com', 'sha1$bb4a3483$1$cc243c320b6e8288abaaad00c94cf7e8bcce6f2e', '2020-10-16 13:45:49', '2020-10-16 13:45:49', NULL),
(13, 'abc', 'm@mail.com', 'sha1$02e00537$1$3bc4e4777222b60ab3d3548381f27af98b5eef93', '2020-10-19 07:44:05', '2020-10-19 07:44:05', NULL),
(14, 'arslan', 'ar@mail.com', 'sha1$e1c4ff0b$1$ab00e9004942e113e8d6bc78aadbbfbf093b113b', '2020-10-19 09:27:39', '2020-10-19 09:27:39', NULL),
(15, 'bb', 'b@b.com', 'sha1$a828b878$1$a64f26eaf7b92ce7774b72787a17a8e4502de903', '2020-11-02 08:08:19', '2020-11-02 08:08:19', NULL),
(16, 'hhh', 'h@h.com', 'sha1$da704a36$1$503c9645d289c98531cffd83af39c449fcff7497', '2020-11-12 11:54:08', '2020-11-12 11:54:08', 'snmdjnjvfe vbjejn eknjknnrkjnekmkmekkvn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bankaccounts`
--
ALTER TABLE `bankaccounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `budgets`
--
ALTER TABLE `budgets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bankaccounts`
--
ALTER TABLE `bankaccounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `budgets`
--
ALTER TABLE `budgets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `budgets`
--
ALTER TABLE `budgets`
  ADD CONSTRAINT `budgets_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
