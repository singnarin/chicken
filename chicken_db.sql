-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2017 at 09:49 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chicken_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `chickens`
--

CREATE TABLE `chickens` (
  `id` int(10) NOT NULL,
  `farm_id` int(10) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `weight` int(10) DEFAULT NULL,
  `status` enum('baby','big','for_kill','killed') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chickens`
--

INSERT INTO `chickens` (`id`, `farm_id`, `code`, `weight`, `status`) VALUES
(1, 1, '1b86', 2000, 'for_kill'),
(2, 1, '11ef', 2000, 'killed'),
(3, 1, '1162', 70, 'baby'),
(4, 1, '1627', 800, 'big'),
(5, 1, '15d8', 70, 'baby'),
(6, 1, '1831', 70, 'baby'),
(7, 1, '1a16', 70, 'baby'),
(8, 1, '1cf9', 70, 'baby'),
(9, 1, '1fce', 70, 'baby'),
(10, 1, '119e', 70, 'baby'),
(11, 1, '1153', 70, 'baby'),
(12, 1, '1282', 70, 'baby'),
(13, 1, '11ae', 70, 'baby'),
(14, 1, '1490', 70, 'baby'),
(15, 1, '16d3', 70, 'baby'),
(16, 1, '1897', 70, 'baby'),
(17, 1, '17fc', 70, 'baby'),
(18, 1, '1ac8', 70, 'baby'),
(19, 1, '1a24', 70, 'baby'),
(20, 1, '1d03', 70, 'baby'),
(21, 2, '2aab', 70, 'baby'),
(22, 2, '2bef', 70, 'baby'),
(23, 2, '2b63', 70, 'baby'),
(24, 2, '2dea', 70, 'baby'),
(25, 2, '2d39', 70, 'baby'),
(26, 2, '2066', 70, 'baby'),
(27, 2, '2f93', 70, 'baby'),
(28, 2, '2218', 70, 'baby'),
(29, 2, '21da', 70, 'baby'),
(30, 2, '2506', 70, 'baby'),
(31, 3, '3f37', 1000, 'big'),
(32, 3, '3d5d', 2000, 'for_kill'),
(33, 3, '3f79', 70, 'baby'),
(34, 3, '3ef0', 70, 'baby'),
(35, 3, '31d1', 70, 'baby'),
(36, 3, '32b7', 70, 'baby'),
(37, 3, '349e', 70, 'baby'),
(38, 3, '3534', 70, 'baby'),
(39, 3, '37cd', 70, 'baby'),
(40, 3, '3762', 70, 'baby');

-- --------------------------------------------------------

--
-- Table structure for table `farms`
--

CREATE TABLE `farms` (
  `id` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `farms`
--

INSERT INTO `farms` (`id`, `name`) VALUES
(1, 'ไก่สวรรค์1'),
(2, 'ไก่สวรรค์2'),
(3, 'ไก่สวรรค์3');

-- --------------------------------------------------------

--
-- Table structure for table `feed_foods`
--

CREATE TABLE `feed_foods` (
  `id` int(10) NOT NULL,
  `chicken_id` int(10) DEFAULT NULL,
  `food_id` int(10) DEFAULT NULL,
  `feed` int(10) DEFAULT NULL,
  `create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feed_foods`
--

INSERT INTO `feed_foods` (`id`, `chicken_id`, `food_id`, `feed`, `create`) VALUES
(1, 1, 1, 50, NULL),
(2, 1, 1, 50, NULL),
(3, 1, 1, 200, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `approved` enum('wait','no','yes') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `name`, `amount`, `approved`) VALUES
(1, 'ปลายข้าว', 2750, 'yes'),
(2, 'ข้าวโพดป่น', 5000, 'no'),
(3, 'น้ำ', 2000, 'wait');

-- --------------------------------------------------------

--
-- Table structure for table `order_babies`
--

CREATE TABLE `order_babies` (
  `id` int(10) NOT NULL,
  `farm_id` int(10) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `approved` enum('wait','no','yes') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_babies`
--

INSERT INTO `order_babies` (`id`, `farm_id`, `amount`, `approved`) VALUES
(1, 1, 10, 'yes'),
(2, 1, 10, 'yes'),
(3, 2, 10, 'no'),
(4, 1, 10, 'wait'),
(5, 3, 0, 'no'),
(6, 3, 10, 'yes'),
(7, 2, 10, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user_type_id` int(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type_id`, `name`, `username`, `password`) VALUES
(1, 1, 'user1', 'user1', '1234'),
(2, 2, 'user2', 'user2', '1234'),
(3, 3, 'user3', 'user3', '1234'),
(5, 4, 'admin', 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `name`) VALUES
(1, 'ฝ่ายเลี้ยงไก่'),
(2, 'ฝ่ายจัดซื้อ'),
(3, 'ผู้บริหาร'),
(4, 'ผู้ดูแลระบบ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chickens`
--
ALTER TABLE `chickens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farms`
--
ALTER TABLE `farms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed_foods`
--
ALTER TABLE `feed_foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_babies`
--
ALTER TABLE `order_babies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chickens`
--
ALTER TABLE `chickens`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `farms`
--
ALTER TABLE `farms`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `feed_foods`
--
ALTER TABLE `feed_foods`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order_babies`
--
ALTER TABLE `order_babies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
