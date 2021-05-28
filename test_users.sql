-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 28, 2021 at 09:32 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
-- Table structure for table `test_users`
--

DROP TABLE IF EXISTS `test_users`;
CREATE TABLE IF NOT EXISTS `test_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(600) NOT NULL,
  `email` varchar(600) NOT NULL,
  `phone` varchar(600) NOT NULL,
  `address` varchar(600) NOT NULL,
  `city` varchar(600) NOT NULL,
  `state` varchar(600) NOT NULL,
  `country` varchar(600) NOT NULL,
  `zip` bigint NOT NULL,
  `password` varchar(600) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test_users`
--

INSERT INTO `test_users` (`id`, `name`, `email`, `phone`, `address`, `city`, `state`, `country`, `zip`, `password`, `updated_at`, `created_at`) VALUES
(11, 'SANAT DEY', 'deysanat001@gmail.com', '1000000000', 'Station Road , Jhalda', 'Purulia', 'WB', 'United Kingdom', 72320, 'e10adc3949ba59abbe56e057f20f883e', '2021-05-28 21:00:07', '2021-05-28 09:05:07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
