-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2015 at 02:53 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `asscourier`
--

-- --------------------------------------------------------

--
-- Table structure for table `asscourier`
--

CREATE TABLE IF NOT EXISTS `asscourier` (
`jobID` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `weight` decimal(10,2) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `delivery_method` varchar(20) NOT NULL,
  `total_cost` decimal(10,2) NOT NULL,
  `isfragile` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `asscourier`
--

INSERT INTO `asscourier` (`jobID`, `address`, `weight`, `price`, `delivery_method`, `total_cost`, `isfragile`) VALUES
(1, '23 wilmer st', '10.00', '5.00', 'registered', '51.00', 'no'),
(3, '43 mook st', '3.00', '4.00', 'express', '64.26', 'no'),
(4, '47 grove rd', '6.00', '7.00', 'normal', '42.84', 'yes'),
(5, '32 tupperware rd', '1.00', '9.00', 'express', '9.18', 'yes'),
(6, '12 angel drv', '7.00', '2.00', 'registered', '14.28', 'yes'),
(8, '65 gravel crt', '7.00', '9.00', 'normal', '73.44', 'no'),
(9, '78 drawy crt', '7.00', '10.00', 'registered', '20.40', 'yes'),
(10, '1 fragilenorm st', '2.00', '3.00', 'normal', '6.12', 'yes'),
(11, '2 nonfragilenorm st', '2.00', '3.00', 'normal', '6.12', 'no'),
(12, '56 jolly st', '7.00', '6.00', 'registered', '42.84', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asscourier`
--
ALTER TABLE `asscourier`
 ADD PRIMARY KEY (`jobID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asscourier`
--
ALTER TABLE `asscourier`
MODIFY `jobID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
