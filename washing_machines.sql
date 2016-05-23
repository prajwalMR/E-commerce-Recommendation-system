-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2016 at 06:30 AM
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
-- Table structure for table `washing machines`
--

CREATE TABLE IF NOT EXISTS `washing machines` (
  `brand` varchar(30) NOT NULL,
  `model name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `function type` varchar(30) NOT NULL,
  `washing capacity` varchar(30) NOT NULL,
  `shade` varchar(30) NOT NULL,
  `digital display` varchar(30) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `warranty` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `washing machines`
--

INSERT INTO `washing machines` (`brand`, `model name`, `price`, `function type`, `washing capacity`, `shade`, `digital display`, `weight`, `warranty`) VALUES
('IFB', 'TL-RDW 6.5KG Aqua',  16990, 'Fully Automatic Top Load', '6.5 Kg', 'Ivory White', 'Yes', '35 Kg', '24 months'),
('Panasonic', 'NA-W65B2RRB',  8290, 'Semi Automatic Top Load', '6.5 Kg', 'Red', 'No', '32 Kg', '24 months'),
('Kelvinator', 'KT6012TR-FAU',  10490, 'Fully Automatic Top Load', '6 Kg', 'Techno Red', 'No', '35 Kg', '24 months'),
('LG', 'T72CMG22P',  16071, 'Fully Automatic Top Load', '6.2 Kg', 'Cool Grey', 'Yes', '32.5 Kg', '24 months'),
('Whirlpool', 'Ace 7.2 Supreme',  10490, 'Semi Automatic Top Load', '7.2 Kg', 'Purple', 'No', '28 Kg', '12 months'),
('LG', 'FH0B8NDL22', 25848, 'Fully Automatic Front Load', '6 Kg', 'White', 'Yes', '70 Kg', '24 months'),
('IFB', 'Senator Aqua SX',  35490, 'Fully Automatic Front Load', '8 Kg', 'Silver', 'Yes', '75 Kg', '48 months'),
('Electrolux', 'EF60ERWH',  17990, 'Fully Automatic Front Load', '6 Kg', 'White', 'No', '54 Kg', '24 months'),
('Whirlpool', 'SUPERB ATOM 65S',  9990, 'Semi Automatic Top Load', '6.5 Kg', 'Ruby', 'No', '21 Kg', '12 months'),
('LG', 'F7091MDL2', 21990, 'Fully Automatic Front Load', '5.5 Kg', 'White', 'No', '60 Kg', '24 months'),
('Godrej', 'WT 620 CFS',  13490, 'Fully Automatic Top Load', '6.2 Kg', 'Graphite Grey', 'No', '29.5 Kg', '24 months'),
('GEM', 'GWM 620GA',  6290, 'Semi Automatic Top Load', '6.2 Kg', 'Blue', 'No', '21 Kg', '24 months');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
