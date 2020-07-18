-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 12, 2020 at 02:03 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `name` char(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `e-mail` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(8) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `contact` int(20) NOT NULL,
  `city` char(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `address` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `user_id` varchar(20) NOT NULL,
  `item_id` varchar(20) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
