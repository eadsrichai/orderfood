-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 22, 2023 at 02:39 PM
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
  `img_food` varchar(100) NOT NULL,
  `status_food` varchar(1) NOT NULL,
  `id_type` int(11) NOT NULL,
  PRIMARY KEY (`id_food`),
  KEY `id_type` (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id_food`, `name_food`, `detail_food`, `price_food`, `img_food`, `status_food`, `id_type`) VALUES
(7, 'ข้าวผัดซีฟูด', 'ข้าวผัดซีฟูด กุ้ง หอย ปู ปลา', 150, '655e0bb5739ab_655db2237c9fe_1.png', '1', 7),
(8, 'ส้มตำ', 'ส้มตำไทย เส้นมะละกอนุ่ม', 150, '655e0d5d8839a_4.jpg', '1', 7),
(9, 'เปิดย่าง', 'เป็ดย่าง น้ำผึ้ง', 750, '655e0d7a134ce_3.jpg', '1', 7),
(10, 'แกงจืด', 'แกงจืด เต้าหู้ หมูสับ', 250, '655e0d92e2741_2.jpg', '1', 7),
(11, 'ผัดกุ้งมะขาม', 'ผัดกุ้งมะขาว หอมกรุ่น', 550, '655e0dbb37b2c_1.jpg', '1', 7);

-- --------------------------------------------------------

--
-- Table structure for table `order_food`
--

DROP TABLE IF EXISTS `order_food`;
CREATE TABLE IF NOT EXISTS `order_food` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_food` int(11) NOT NULL,
  `date_order` datetime NOT NULL,
  `quntity_food` int(11) NOT NULL,
  `priec_order` float NOT NULL,
  `status_order` varchar(1) NOT NULL,
  PRIMARY KEY (`order_id`,`id_user`,`id_food`),
  KEY `order_id` (`order_id`,`id_user`,`id_food`),
  KEY `id_user` (`id_user`),
  KEY `id_food` (`id_food`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_food`
--

INSERT INTO `order_food` (`order_id`, `id_user`, `id_food`, `date_order`, `quntity_food`, `priec_order`, `status_order`) VALUES
(1, 1, 9, '2023-11-22 03:50:22', 1, 100, '1'),
(2, 1, 8, '2023-11-22 03:51:01', 2, 200, '1');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` varchar(2) NOT NULL,
  `name_role` varchar(30) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `name_role`) VALUES
('1', 'Admin'),
('2', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `type_food`
--

DROP TABLE IF EXISTS `type_food`;
CREATE TABLE IF NOT EXISTS `type_food` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `name_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_food`
--

INSERT INTO `type_food` (`id_type`, `name_type`) VALUES
(6, 'ข้าวผัด'),
(7, 'อาหารตามสั่ง');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `u_user` varchar(30) NOT NULL,
  `p_user` varchar(30) NOT NULL,
  `fname_user` varchar(50) NOT NULL,
  `lname_user` varchar(50) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `tel_user` varchar(12) NOT NULL,
  `id_role` varchar(2) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_user` (`id_user`,`id_role`),
  KEY `id_role` (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `u_user`, `p_user`, `fname_user`, `lname_user`, `email_user`, `tel_user`, `id_role`) VALUES
(1, 'user1', '1234', 'วุฒิวงศ์', 'เอียดศรีชาย', 'xx@gmail.com', '0926124435', '2');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type_food` (`id_type`);

--
-- Constraints for table `order_food`
--
ALTER TABLE `order_food`
  ADD CONSTRAINT `order_food_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `order_food_ibfk_2` FOREIGN KEY (`id_food`) REFERENCES `food` (`id_food`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
