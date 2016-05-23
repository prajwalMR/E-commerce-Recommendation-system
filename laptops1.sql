-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2016 at 05:22 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `recommendation_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptops`
--

CREATE TABLE IF NOT EXISTS `laptops` (
  `brand` varchar(30) NOT NULL,
  `model name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `operating system` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `processor` varchar(30) NOT NULL,
  `screen size` varchar(30) NOT NULL,
  `RAM` varchar(30) NOT NULL,
  `HDD capacity` varchar(30) NOT NULL,
  `system architecture` varchar(30) NOT NULL,
  `graphics` varchar(30) NOT NULL,
  `warranty` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptops`
--

INSERT INTO `laptops` (`brand`, `model name`, `price`, `operating system`, `color`, `processor`, `screen size`, `RAM`, `HDD capacity`, `system architecture`, `graphics`, `warranty`) VALUES
('HP', 'AC184TU', 27970, 'Free DOS', 'Jack Black', 'Intel Core i3(5th Gen)', '15.6 inch', '4 GB', '1 TB', '64 bit', '128 MB(Dedicated)', '12 months'),
('Lenovo', 'IdeaPad', 28990, 'Windows 10', 'Black', 'Intel Core i3(5th Gen)', '14 inch', '4 GB', '500 GB', '64 bit', 'Intel HD Graphics 5500', '12 months'),
('HP', '15-ac123tx', 45589, 'Windows 10', 'Turbo Silver', 'Intel Core i5(5th Gen)', '15.6 inch', '4 GB', '1 TB', '64 bit', '2 GB (AMD)', '12 months'),
('Lenovo', 'G50-80', 31590, 'Windows 10', 'Black', 'Intel Core i5(5th Gen)', '15.6 inch', '8 GB', '1 TB', '64 bit', '2 GB (ATI EXO PRO)', '12 months'),
('Dell ', 'Inspiron 15 3542', 54990, 'Windows 10', 'Black', 'Intel Core i3', '15.6 inch', '4 GB', '1 TB', '64 bit', 'Intel HD Graphics 4400', '12 months'),
('Dell', 'Inspiron 5000 5558', , 'Windows 8.1', 'Silver Matt', 'Intel Core i5(5th Gen)', '15.6 inch', '8 GB', '1 TB', '64 bit', '2 GB (NVIDIA)', '12 months'),
('Lenovo ', 'IdeaPad 300', 43000, 'Windows 10', 'Silver', 'Intel Core i5(6th Gen)', '15.6 inch', '4 GB', '1 TB', '64 bit', '2 GB (AMD)', '12 months'),
('Dell ', 'Inspiron 5000 5558', 74600, 'Windows 8.1', 'Silver Matt', 'Intel Core i7(5th Gen)', '15.6 inch', '16 GB', '2 TB', '64 bit', '4 GB (NVIDIA)', '24 months'),
('Apple', 'MacBook Air', 61900, 'Mac OS X EI Capitan', 'Silver', 'Intel Core i5(5th Gen)', '13.3 inch', '4 GB', '128 GB', '64 bit', 'Intel HD Graphics 6000', '12 months'),
('Apple', 'MacBook Pro', 94900, 'Mac OS X Yosemite', 'Silver', 'Intel Core i5(5th Gen)', '13.17 inch', '8 GB', '128 GB', '64 bit', 'Intel Iris Graphics 6100', '12 months'),
('Lenovo', 'G50-80', 45490, 'Windows 10', 'Black', 'Intel Core i5(5th Gen)', '15.6 inch', '8 GB', '1 TB', '64 bit', '2 GB (ATI EXO PRO)', '12 months'),
('Asus', 'A555LA-XX2064D', 25790, 'Free DOS', 'Black', 'Intel Core i3(5th Gen)', '15.6 inch', '4 GB', '1 TB', '64 bit', 'Intel HD Graphics', '24 months'),
('HP', 'Pavilion 15t-H39778', 70990, 'Windows 10', 'Silver', 'Intel Core i5(6th Gen)', '15.6 inch', '16 GB', '1 TB', '64 bit', '2 GB(NVIDIA)', '12 months');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
