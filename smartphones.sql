-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2016 at 06:18 AM
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
-- Table structure for table `smartphones`
--

CREATE TABLE IF NOT EXISTS `smartphones` (
  `brand` varchar(30) NOT NULL,
  `model name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `operating system` varchar(30) NOT NULL,
  `rear camera` varchar(30) NOT NULL,
  `front camera` varchar(30) NOT NULL,
  `ram` varchar(30) NOT NULL,
  `rom` varchar(30) NOT NULL,
  `warranty` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smartphones`
--

INSERT INTO `smartphones` (`brand`, `model name`, `price`, `operating system`, `rear camera`, `front camera`, `ram`, `rom`, `warranty`) VALUES
('Mi', 'Redmi 2 Prime', 6999, 'Android', '8 MP', '2 MP', '2 GB', '8 GB', '12 months'),
('Motorola', 'Moto G(3rd Generation)',10999, 'Android', '13 MP', '5 MP', '2 GB', '16 GB', '12 months'),
('Samsung', 'Galaxy J7',  14349, 'Android', '13 MP', '5 MP', '1.5 GB', '16 GB', '12 months'),
('Samsung', 'Galaxy On5', 8190, 'Android', '8 MP', '5 MP', '1.5 GB', '8 GB', '12 months'),
('Mi', 'Mi 4',  14999, 'Android', '13 MP', '8 MP', '3 GB', '16 GB', '12 months'),
('Motorola', 'Moto E(2nd Gen)',  6999, 'Android', '5 MP', '0.3 MP', '1 GB', '8 GB', '12 months'),
('Honor', '5X', 12999, 'Android', '13 MP', '5 MP', '2 GB', '16 GB', '12 months'),
('Microsoft', 'Lumia 540',  8089, 'Windows', '8 MP', '2 MP', '1 GB', '8 GB', '12 months'),
('Asus', 'Zenfone 2 Laser ZE550KL',  9999, 'Android', '13 MP', '5 MP', '2 GB', '16 GB', '12 months'),
('Asus', 'Zenfone 2 ZE551ML',  19999, 'Android', '13 MP', '5 MP', '4 GB', '32 GB', '12 months'),
('Nokia', 'Lumia 620', 11919, 'Windows', '5 MP', '2 MP', '512 MB', '8 GB', '12 months'),
('LeEco', 'Le 1S', 10999, 'Android', '13 MP', '5 MP', '3 GB', '32 GB', '12 months'),
('Lenovo', 'A6000 Plus', 6999, 'Android', '8 MP', '2 MP', '2 GB', '16 GB', '12 months'),
('Micromax', 'Canvas Xpress 2',  6199, 'Android', '13 MP', '2 MP', '1 GB', '8 GB', '12 months'),
('Apple', 'iPhone 6S Plus',  52499, 'iOS V9', '12 MP', '5 MP', '2 GB', '16 GB', '12 months'),
('Apple', 'iPhone 6',  36999, 'iOS v9', '8 MP', '1.2 MP', '1 GB', '16 GB', '12 months'),
('HTC', 'Desire 826 DS', 20880, 'Android', '13 MP', '13 MP', '2 GB', '16 GB', '12 months'),
('Asus', 'Zenfone 2 ZE551ML',  22999, 'Android', '13 MP', '5 MP', '4 GB', '64 GB', '12 months');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
