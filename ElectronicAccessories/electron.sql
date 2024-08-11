-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 03, 2022 at 06:15 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electron`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `Name` varchar(100) NOT NULL,
  `Mobile_No` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `P_id` varchar(5) NOT NULL,
  `Product` varchar(250) NOT NULL,
  `Price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Name`, `Mobile_No`, `password`, `P_id`, `Product`, `Price`) VALUES
('Mihir Makwana', '8460716859', '123', 'P3', 'SanDisk Cruzer Blade 32GB USB Flash Drive', 279),
('xyz', '9876543210', 'xyz', 'P7', 'Samsung Galaxy Watch5 Bluetooth (44 mm, Graphite, Compatible with Android only)', 30999),
('Mihir Makwana', '8460716859', '123', 'P1', 'Leaf Bass 2 Wireless Bluetooth Headphones with Mic and 15 Hours Battery Life, Over-Ear Headphones with Super Soft Cushions and Deep Bass (Black)', 1499),
('xyz', '9876543210', '$2y$10$efTmKVKA6JTq4', 'P4', 'boAt Airdopes 121v2 True Wireless Earbuds with Upto 14 Hours Playback, 8MM Drivers, Battery Indicators, Lightweight Earbuds & Multifunction Controls(Active Black)', 1299);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `phone`, `email`, `msg`) VALUES
('Mihir Makwana', '8460716859', 'mihirpmakwana786@gmail.com', 'Hello '),
('abc', '9876543210', 'ab@email.com', 'gsd'),
('abc', '9876543210', 'ab@email.com', 'gsd'),
('xyz', '1234567890', 'xyz@email.com', 'gdhrj'),
('Mihir Makwana', '0846071685', 'mihirpmakwana786@gmail.com', 'fasf'),
('Mihir Makwana', '0846071685', 'mihirpmakwana786@gmail.com', 'tjtrj'),
('Mihir Makwana', '0846071685', 'mihirpmakwana786@gmail.com', 'hfh');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `P_Id` varchar(5) NOT NULL,
  `P_img` varchar(1000) NOT NULL,
  `P_name` varchar(5000) NOT NULL,
  `P_Price` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`P_Id`, `P_img`, `P_name`, `P_Price`) VALUES
('P1', 'https://m.media-amazon.com/images/I/71PVecPhPUL._SY450_.jpg', 'Leaf Bass 2 Wireless Bluetooth Headphones with Mic and 15 Hours Battery Life, Over-Ear Headphones with Super Soft Cushions and Deep Bass (Black)', 1499),
('P2', 'https://m.media-amazon.com/images/I/51bsG9jG08L._SX522_.jpg', 'WRIGHT USB External Sound Card Audio Adapter 2 in 1 USB to 3.5mm Jack Audio Adapter Aluminum Stereo Sound Card for Windows Mac PS5 Linux PC Laptops Desktops connect any TRRS pin headphone with mic [NOT for TV or Car] aux to usb and usb to aux converter [12 Months Warranty]', 399),
('P3', 'https://m.media-amazon.com/images/I/61DjwgS4cbL._SX522_.jpg', 'SanDisk Cruzer Blade 32GB USB Flash Drive', 279),
('P4', 'https://m.media-amazon.com/images/I/510+wjzq-vL._SX522_.jpg', 'boAt Airdopes 121v2 True Wireless Earbuds with Upto 14 Hours Playback, 8MM Drivers, Battery Indicators, Lightweight Earbuds & Multifunction Controls(Active Black)', 1299),
('P5', 'https://m.media-amazon.com/images/I/51aBTOiXRlL._SY450_.jpg', 'boAt Rockerz 255 Pro+ Bluetooth Neckband with Upto 40 Hours Playback, ASAPâ„¢ Charge, IPX7, Dual Pairing, BT v5.0 and Mic(Active Black)', 1299),
('P6', 'https://m.media-amazon.com/images/I/71lVwl3q-kL._SY450_.jpg', 'MI Power Bank 3i 20000mAh Lithium Polymer 18W Fast PD Charging | Input- Type C and Micro USB| Triple Output | Sandstone Black', 1999),
('P7', 'https://m.media-amazon.com/images/I/61O5Xjb9uEL._SX450_.jpg', 'Samsung Galaxy Watch5 Bluetooth (44 mm, Graphite, Compatible with Android only)', 30999),
('P8', 'https://m.media-amazon.com/images/I/61JM7nC4OKL._SY450_.jpg', 'Mi 360Â° Home Security Camera 1080P l Full HD Picture l AI Powered Motion Detection l Infrared Night Vision | 360Â° Panorama | Talk Back Feature (2-Way Audio)', 3499),
('P9', 'https://m.media-amazon.com/images/I/61KSceiLHwL._SY450_.jpg', 'HP X1000 Wired USB Mouse with 3 Handy Buttons, Fast-Moving Scroll Wheel and Optical Sensor works on most Surfaces (H2C21AA, Black/Grey)', 269),
('P10', 'https://m.media-amazon.com/images/I/61xNG4wjOuL._SY450_.jpg', 'HP v236w USB 2.0 64GB Pen Drive, Metal', 472);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
CREATE TABLE IF NOT EXISTS `purchase` (
  `Name` varchar(100) NOT NULL,
  `Mobile_No` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `P_id` varchar(5) NOT NULL,
  `Product` varchar(250) NOT NULL,
  `Price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`Name`, `Mobile_No`, `password`, `P_id`, `Product`, `Price`) VALUES
('Mihir Makwana', '8460716859', '123', 'P1', 'Leaf Bass 2 Wireless Bluetooth Headphones with Mic and 15 Hours Battery Life, Over-Ear Headphones with Super Soft Cushions and Deep Bass (Black)', 1499),
('xyz', '9876543210', 'xyz', 'P1', 'Leaf Bass 2 Wireless Bluetooth Headphones with Mic and 15 Hours Battery Life, Over-Ear Headphones with Super Soft Cushions and Deep Bass (Black)', 1499),
('xyz', '9876543210', 'xyz', 'P1', 'Leaf Bass 2 Wireless Bluetooth Headphones with Mic and 15 Hours Battery Life, Over-Ear Headphones with Super Soft Cushions and Deep Bass (Black)', 1499),
('xyz', '9876543210', 'xyz', 'P6', 'MI Power Bank 3i 20000mAh Lithium Polymer 18W Fast PD Charging | Input- Type C and Micro USB| Triple Output | Sandstone Black', 1999),
('Mihir Makwana', '8460716859', '$2y$10$TXwiu.lWsCClr', 'P4', 'boAt Airdopes 121v2 True Wireless Earbuds with Upto 14 Hours Playback, 8MM Drivers, Battery Indicators, Lightweight Earbuds & Multifunction Controls(Active Black)', 1299);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Name` varchar(100) NOT NULL,
  `Mobile_No` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Pincode` int NOT NULL,
  `District` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`Mobile_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Mobile_No`, `Email`, `Address`, `Pincode`, `District`, `State`, `Password`) VALUES
('abc', '1234567890', 'abc@email.com', 'abc', 0, 'abc', 'abc', '$2y$10$qk9ef2V9nQgQen999Pk4l.fvFeIyipvwyEU5P8QB9EZ0Ow/YFFgWe'),
('Mihir Makwana', '8460716859', 'mihirpmakwana786@gmail.com', '20, Muktinagar Society Nr. Parikh Bhuvan B/H Railway Godi, Anand', 388001, 'Anand', 'Gujarat', '$2y$10$Lhkml9n86oFz4g7zDFkTdOMmnlJvj8IOF4AkiR5WBcJKb86kHHuoa'),
('xyz', '9876543210', 'xyz@email.com', 'xyz', 0, 'xyz', 'xyz', '$2y$10$flrsJX7xf2vStPbxgYvcDumhkilRPmvRxAuZVnAqzTAfGSef4/LOS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
