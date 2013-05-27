-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 27, 2013 at 11:33 AM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `giggedin`
--

-- --------------------------------------------------------

--
-- Table structure for table `phototags`
--

CREATE TABLE `phototags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `x1` int(11) DEFAULT NULL,
  `y1` int(11) DEFAULT NULL,
  `x2` int(11) DEFAULT NULL,
  `y2` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `phototags`
--

INSERT INTO `phototags` VALUES(14, 'Sarim', 414, 304, 0, 0, 1, 1);
INSERT INTO `phototags` VALUES(15, 'Faryal', 445, 190, 0, 0, 2, 2);
INSERT INTO `phototags` VALUES(16, 'Afnan', 187, 241, 0, 0, 1, 1);
INSERT INTO `phototags` VALUES(17, 'Sarim', 422, 289, 0, 0, 1, 1);
