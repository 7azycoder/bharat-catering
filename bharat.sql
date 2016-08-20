-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2016 at 06:07 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bharat`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference` int(11) NOT NULL,
  `date` varchar(20) DEFAULT NULL,
  `first` varchar(20) NOT NULL,
  `last` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `from` varchar(20) DEFAULT NULL,
  `to` varchar(20) DEFAULT NULL,
  `venue` varchar(100) NOT NULL,
  `test` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `breakfast`
--

CREATE TABLE IF NOT EXISTS `breakfast` (
  `itemNo` int(11) NOT NULL,
  `itemName` varchar(40) NOT NULL,
  `itemId` varchar(40) NOT NULL,
  `itemType` varchar(20) NOT NULL,
  `test` int(11) DEFAULT '0',
  PRIMARY KEY (`itemNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breakfast`
--

INSERT INTO `breakfast` (`itemNo`, `itemName`, `itemId`, `itemType`, `test`) VALUES
(1, 'Badam Barfi', 'badamBarfi', 'sweet', 0),
(2, 'Kaju Barfi', 'kajuBarfi', 'sweet', 0),
(3, 'Gulab Jamun', 'gulabJamun', 'sweet', 0),
(4, 'Spring Roll', 'springRoll', 'snack', 0),
(5, 'Mini Samosa', 'miniSamosa', 'snack', 0),
(6, 'Tasty', 'tasty', 'namkeen', 0),
(7, 'Gajar Halwa', 'gajarHalwa', 'sweet', 0),
(8, 'Moong Halwa', 'moongHalwa', 'sweet', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dinner`
--

CREATE TABLE IF NOT EXISTS `dinner` (
  `itemNo` int(11) NOT NULL,
  `itemName` varchar(40) NOT NULL,
  `itemId` varchar(40) NOT NULL,
  `itemType` varchar(20) NOT NULL,
  PRIMARY KEY (`itemNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `permissions` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`) VALUES
(1, 'Standard user', ''),
(2, 'Administrator', '{\r\n"admin": 1,\r\n"moderator": 1\r\n}');

-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

CREATE TABLE IF NOT EXISTS `lunch` (
  `itemNo` int(11) NOT NULL,
  `itemName` varchar(40) NOT NULL,
  `itemId` varchar(40) NOT NULL,
  `itemType` varchar(20) NOT NULL,
  `test` int(11) DEFAULT '0',
  PRIMARY KEY (`itemNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

CREATE TABLE IF NOT EXISTS `snacks` (
  `itemNo` int(11) NOT NULL,
  `itemName` varchar(40) NOT NULL,
  `itemId` varchar(40) NOT NULL,
  `itemType` varchar(20) NOT NULL,
  `test` int(11) DEFAULT '0',
  PRIMARY KEY (`itemNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `special`
--

CREATE TABLE IF NOT EXISTS `special` (
  `itemNo` int(11) NOT NULL,
  `itemName` varchar(40) NOT NULL,
  `itemId` varchar(40) NOT NULL,
  `itemType` varchar(20) NOT NULL,
  PRIMARY KEY (`itemNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `name` varchar(50) NOT NULL,
  `joined` datetime NOT NULL,
  `group` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `name`, `joined`, `group`) VALUES
(20, 'Lovepreet', 'ad8dc713b3ee72cd7e4d29d205cda76cbaa0e2c68841ed66d10301456c031f6d', '´ÌE\\£_~´ÿÁ†º9Þ&Çe%›ê¢bˆÜ÷¿ÃYÑõ', 'Lovepreet Singh', '2016-02-06 19:49:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_session`
--

CREATE TABLE IF NOT EXISTS `users_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `hash` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
