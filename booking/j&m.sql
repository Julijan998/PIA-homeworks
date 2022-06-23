-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 09, 2021 at 11:40 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `j&m`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `apartmani`
--

DROP TABLE IF EXISTS `apartmani`;
CREATE TABLE IF NOT EXISTS `apartmani` (
  `id` int(10) NOT NULL,
  `mesto` text NOT NULL,
  `ime` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apartmani`
--

INSERT INTO `apartmani` (`id`, `mesto`, `ime`) VALUES
(20, 'Divcibare', 'Apartmani Milosavljevic'),
(19, 'Divcibare', 'Divcibarski Vajat'),
(18, 'Divcibare', 'Hotel Crni Vrh'),
(17, 'Jagodina', 'Hotel Lion'),
(16, 'Jagodina', 'Gold Crown'),
(15, 'Jagodina', 'S-apartmani '),
(14, 'Vrnjacka Banja', 'Solaris Resort'),
(13, 'Vrnjacka Banja', 'Hotel Fontana'),
(12, 'Novi Sad', 'Hotel Park'),
(11, 'Zlatibor', 'Hotel Mons'),
(10, 'Zlatibor', 'Hotel Idila'),
(9, 'Zlatibor', 'Hotel Tornik'),
(8, 'Sokobanja', 'Hotel Sunce'),
(7, 'Sokobanja', 'Apartmani \"MEGI\"'),
(6, 'Golubac', 'Apartmani Cvetkovic'),
(5, 'Beograd', 'Hotel Moskva'),
(4, 'Beograd', 'Hilton'),
(3, 'Beograd', 'Tulip Inn Putnik'),
(2, 'Kopaonik', 'Angella hotel'),
(1, 'Kopaonik', 'Kraljevi Cardaci'),
(21, 'Krupanj', 'Hotel Grand'),
(22, 'Smederevo', 'Vila Graf'),
(23, 'Smederevo', 'Vila Lily'),
(24, 'Tara', 'Apartmani Milev');

-- --------------------------------------------------------

--
-- Table structure for table `poruke`
--

DROP TABLE IF EXISTS `poruke`;
CREATE TABLE IF NOT EXISTS `poruke` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime` text NOT NULL,
  `prezime` text NOT NULL,
  `email` text NOT NULL,
  `poruka` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poruke`
--

INSERT INTO `poruke` (`id`, `ime`, `prezime`, `email`, `poruka`) VALUES
(1, 'Julijan', 'Stojanovic', 'juca2994@gmail.com', ''),
(2, 'Hilton', 'da', 'julijan.kraljevski.stojanovic@gmai.com', 'sajt je top'),
(3, 'Hilton', 'da', 'julijan.kraljevski.stojanovic@gmai.com', 'sajt je top'),
(4, 'Hilton', 'da', 'julijan.kraljevski.stojanovic@gmai.com', 'sajt je top'),
(5, 'Kraljevi Cardaci', 'sssssssssss', 'juca0@gmail.com', 'da');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(2, 'Julijan', 'juca', 'juca@gmail.com', 'juca@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users_i`
--

DROP TABLE IF EXISTS `users_i`;
CREATE TABLE IF NOT EXISTS `users_i` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_i`
--

INSERT INTO `users_i` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'Julijan', 'julijan', 'juca@gmail.com', 'julijan');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
