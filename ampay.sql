-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 16, 2020 at 08:49 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ampay`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `phone`, `email`, `address`, `country`, `state`, `zipcode`, `datetime`) VALUES
('tn9876tan', 'tanuj namdeo', '+91 9876543210', 'tanujn45@gmail.com', 'qwertyui', 'India', 'MP', 452001, '2020-06-16 12:00:00'),
('tn9876tan', 'tanuj namdeo', '+91 9876543210', 'tanujn45@gmail.com', 'qwertyui', 'India', 'MP', 452001, '2020-06-16 12:00:00'),
('aaadsfsdf', 'adfs adsf', '+91 adsf', 'sdf@df.asd', 'asdf', 'India', 'adsf', 1234, '2020-06-17 12:00:00'),
('aaadsfsdf', 'adfs adsf', '+91 adsf', 'sdf@df.asd', 'asdf', 'India', 'adsf', 1234, '2020-06-17 12:00:00'),
('tn9876adf', 'tanuj namdeo', '+91 9876543120', 'adf@adf.com', 'asdfadf', 'United States', 'adadf', 134, '2020-08-29 14:00:00'),
('pg9876pra', 'pranjal garg', '+91 9876543210', 'pranjal@google.com', 'qwertyuiop', 'Nepal', 'Kathmandu', 98765, '2020-06-25 21:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
