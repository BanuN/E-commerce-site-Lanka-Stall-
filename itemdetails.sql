-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2014 at 03:25 PM
-- Server version: 5.0.45-community-nt
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lankastall`
--

-- --------------------------------------------------------

--
-- Table structure for table `itemdetails`
--

CREATE TABLE IF NOT EXISTS `itemdetails` (
  `sno` int(10) unsigned NOT NULL default '0',
  `category` varchar(30) default '',
  `material` varchar(30) default '',
  `weight` varchar(10) default '',
  `size` varchar(20) default '',
  `price` int(11) default '0',
  `stock` int(11) default '0',
  `code` varchar(7) NOT NULL default '',
  `image` varchar(40) NOT NULL default '',
  `pname` varchar(45) NOT NULL default '',
  `email` varchar(45) NOT NULL default '',
  `location` varchar(45) NOT NULL default '',
  `itemname` varchar(45) NOT NULL default '',
  PRIMARY KEY  (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemdetails`
--

INSERT INTO `itemdetails` (`sno`, `category`, `material`, `weight`, `size`, `price`, `stock`, `code`, `image`, `pname`, `email`, `location`, `itemname`) VALUES
(1, 'Arts & Crafts', 'Wooden Mask - Ratnakuta', '7', '50cm', 7150, 2, 'acw', 'acw001.jpg', 'L.N.A.Nissanka', 'banulna@gmail.com', 'Gampaha', 'Wooden Mask - Ratnakuta'),
(2, 'Arts & Crafts', 'Akeshiya wood', '4', 'H - 22.5 cm', 18500, 4, 'acw', 'acw002.jpg', 'T.K.Karunarathne', 'karurath@gmail.com', 'Rathnapura', 'Wooden Buddha Statue'),
(3, 'Arts & Crafts', 'Mahogani', '1.98', 'H - 25 cm', 5200, -23, 'acw', 'acw003.jpg', 'L.N.A.Nissanka', 'banulna@gmail.com', 'Gampaha', 'Elephant - Mahogani'),
(4, 'Arts & Crafts', 'Mahogany Wooden', '-', '16.25 x 10 cm', 3850, 2, 'acw', 'acw004.jpg', 'T.K.Karunarathne', 'karurath@gmail.com', 'Rathnapura', 'Mahogany Wooden Jewellery Box'),
(5, 'Arts & Crafts', 'Brass Buddha Statue', '-', 'H - 65 cm', 50000, 0, 'acb', 'acb005.jpg', 'A.S.P.Rathnayake', 'aspr@gmail.com', 'Kandy', 'Buddha Statue'),
(6, 'Arts & Crafts', 'Brass  - Line Carving,', '-', '12.5 x 12.5 cm', 3500, 15, 'acb', 'acb006.jpg', 'A.S.P.Rathnayake', 'aspr@gmail.com', 'Kandy', 'Brass Elephant Bowl'),
(7, 'Arts & Crafts', 'Brass', '-', '11 1/2" X 7 1/2"', 37500, 8, 'acb', 'acb007.jpg', 'A.S.P.Rathnayake', 'aspr@gmail.com', 'Kandy', 'Natarajah Statue'),
(8, 'Arts & Crafts', 'reed ware', '0.98', '40*30cm', 4400, 16, 'acr', 'acr008.jpg', 'R.Gunerathne', 'gu152@gmail.com', 'Kaluthara', 'Hand bag'),
(9, 'Arts & Crafts', 'Pulp  Kandiyan Dancer', '0.36', 'H - 33.5 cm ', 1500, 9, 'acp', 'acp009.jpg', 'W.I.Perera', 'pwi51@gmail.com', 'Colombo', 'Pulp Kandiyan Dancer'),
(10, 'Arts & Crafts', 'Cutwork design', '0.15', 'H - 42.5 cm', 5350, 0, 'aco', 'aco010.jpg', 'P.D.Kumara', 'pdkum@gmail.com', 'Dambulla', 'Oxidized Table Lamp'),
(11, 'Arts & Crafts', 'Silver Plated Decorated', '-', 'H-20 cm', 2000000, 4, 'acs', 'acs011.jpg', 'A.S.P.Rathnayake', 'aspr@gmail.com', 'Kandy', 'Silver Plated Decorated Elephant\\');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
