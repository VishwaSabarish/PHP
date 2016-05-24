-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2014 at 08:55 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `adata`
--

CREATE TABLE IF NOT EXISTS `adata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `discrpts` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `adata`
--

INSERT INTO `adata` (`id`, `name`, `discrpts`) VALUES
(1, 'google', 'The famous search engine.'),
(2, 'yahoo', 'The famous search engine and also best news site.'),
(3, 'gmail', 'The famous mailing site.'),
(4, 'microsoft', 'The famous windows operating system provider.'),
(5, 'apple', 'The famous mac operating system provider and also apple products provider.'),
(6, 'digit', 'The famous magazine about new products and computer things .'),
(7, 'chip', 'The famous magazine about new computer oriended products and computer things .'),
(8, 'sabarish', 'This website designner and developer .'),
(9, 'selva', 'best website templete creator and css designner.'),
(10, 'karthi', 'best web programmer and software developer.'),
(11, 'bill gates', 'CEO of microsoft.'),
(12, 'steve jobs', 'CEO of apple.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500'),
(2, 'sabarish', 'c3d0bc2d88487cae80768291ad0718cf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
