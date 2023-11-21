-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 21, 2023 at 03:16 PM
-- Server version: 10.10.2-MariaDB
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orderfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `id_food` int(11) NOT NULL AUTO_INCREMENT,
  `name_food` varchar(100) NOT NULL,
  `detail_food` varchar(255) NOT NULL,
  `price_food` float NOT NULL,
  `id_type` varchar(2) NOT NULL,
  `img_food` varchar(100) NOT NULL,
  PRIMARY KEY (`id_food`),
  KEY `id_type` (`id_type`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id_food`, `name_food`, `detail_food`, `price_food`, `id_type`, `img_food`) VALUES
(1, 'กระเพรา', 'กระเพราหมู', 78, '3', '655cc74ede465_aduno.png'),
(2, 'ราดหน้า', 'ราดหน้าทะเล', 100, '4', '655cc7ec57991_censor.png'),
(3, 'กระเพรา', 'กระเพราหมู', 100, '4', '655cc9b7ae237_googlemap.png');

-- --------------------------------------------------------

--
-- Table structure for table `type_food`
--

DROP TABLE IF EXISTS `type_food`;
CREATE TABLE IF NOT EXISTS `type_food` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `name_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_food`
--

INSERT INTO `type_food` (`id_type`, `name_type`) VALUES
(4, 'แกง'),
(3, 'ทอด'),
(5, 'อาหารหวาน');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
