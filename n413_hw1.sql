-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 17, 2019 at 09:38 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n413_hw1`
--

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

DROP TABLE IF EXISTS `dogs`;
CREATE TABLE IF NOT EXISTS `dogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `breed` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `energy` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`id`, `breed`, `color`, `energy`, `height`, `weight`) VALUES
(1, 'Golden Retriever', 'Dark Golden', 'A lot', '23 - 24 inches', '67 - 75  Pounds'),
(2, 'Siberian Husky', 'White, Black', 'Energetic', '21 - 23.5 Inches', '45 - 60 Pounds'),
(3, 'Pug', 'Black, Fawn', 'Regular Excercise', '10 - 13 Inches', '14 - 18 Pounds'),
(4, 'Goldendoodle', 'Golden', 'Regular Excercise', '2 - 2.2 Feet', '30 - 45 Pounds'),
(5, 'Bernedoodle', 'Black and White, White and Golden', 'Very Energetic', '2 - 2.5 Feet', '45 - 55 Pounds');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
