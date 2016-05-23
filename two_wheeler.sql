-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2016 at 06:24 AM
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
-- Table structure for table `two wheeler`
--

CREATE TABLE IF NOT EXISTS `two wheeler` (
  `brand` varchar(30) NOT NULL,
  `model name` varchar(30) NOT NULL,
  `style` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `mileage` varchar(30) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `height` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `engine power` varchar(30) NOT NULL,
  `gears` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `two wheeler`
--

INSERT INTO `two wheeler` (`brand`, `model name`, `style`, `price`, `mileage`, `weight`, `height`, `color`, `engine power`, `gears`) VALUES
('Honda', ' Activa 3G', 'Scooter',  49516, '60 kmpl', '108 Kg', '765 mm', 'white', '110 cc ', 'gearless'),
('Bajaj ', 'Pulsar AS150', 'Sport', 81000, '40 kmpl', '145 Kg', '807 mm', 'Black', '150 cc', '5 '),
('Honda', 'Dio', 'Scooter', 52000, '65 kmpl', '105 Kg', '765 mm', 'Black', '110 cc ', 'gearless'),
('Honda', ' CBR150 R', 'Street',  135000, '40 kmpl', '150 Kg', '807 mm', 'Blue', '150 cc', '5 '),
('Hero ', 'Splendor PRO', 'Street',  47000, '80 kmpl', '109 Kg', '780 mm', 'Black', '100 cc', '4'),
('Hero ', 'Karizma ZMR 2014', 'Sport',  105999, '38 kmpl', '150 Kg', '795 mm', 'Orange', '220 cc', '5'),
('Royal Enfield ', 'Classic 350', 'Cruiser',  136000, '37 kmpl', '187 Kg', '800 mm', 'Black', '350 cc', '5'),
('TVS ', 'Jupiter', 'Scooter',  51000, '65 kmpl', '108 Kg', '765 mm', 'Red', '110 cc ', 'gearless'),
('Royal Enfield ', 'Thunderbird 350', 'Cruiser',  150000, '37 kmpl', '192 Kg', '775 mm', 'Black', '350 cc', '5'),
('Yamaha ', 'FZ16', 'Street',  80000, '50 kmpl', '135 Kg', '780 mm', 'Red', '150 cc', '5'),
('Suzuki', ' Gixxer', 'Street',  76000, '45 kmpl', '135 Kg', '790 mm', 'Black', '155 cc', '5'),
('Suzuki', ' Hayabusa', 'Sport',  1600000, '11 kmpl', '266 Kg', '805 mm', 'Black', '1350 cc', '6'),
('KTM ', 'Duke 200', 'Sport',  148000, '35 kmpl', '136 Kg', '810 mm', 'Black', '200 cc', '6'),
('Harley Davidson', ' Street 750', 'Cruiser',  470700, '8 kmpl', '222 Kg', '710 mm', 'Black', '750 cc', '6');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
