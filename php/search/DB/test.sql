-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2014 at 06:54 AM
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
  `name` varchar(50) NOT NULL,
  `discrpts` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `adata`
--

INSERT INTO `adata` (`id`, `name`, `discrpts`) VALUES
(1, 'Google', 'The Famous Search Engine ..'),
(2, 'Yahoo', 'The Famous Mailling Servicer...'),
(3, 'Sabari', 'This Web App Programmer ...'),
(4, 'Selva', 'Web App Designer...'),
(5, 'Bilgates', 'The Microsoft Founder and CEO ...'),
(6, 'Stive jobs', 'The Apple Founder and CEO..'),
(7, 'Mayan', 'The Magical people belive magic spirets  '),
(8, 'Mayan calendar', 'The calendar that says world end in 2012..'),
(9, 'Ramaanujam', 'The Greatest Mathamatision ..'),
(10, 'Amazon', 'The famous online buying website..'),
(11, 'Zorpia', 'The famous chat and gaming site'),
(12, 'Bing', 'The microsoft famous sezrch engine..'),
(13, 'Thenewboston.com', 'Famous tutorials website.. '),
(14, 'Linux.com', 'Famous Linux tutorials website.. '),
(15, 'Makers magazines', 'Famous electronics tutorials website and magazine.. '),
(16, 'Youtube', 'Famous online videos watching site.. '),
(17, 'Facebook', 'Famous chatting website..'),
(18, 'Twitter', 'Famous social network..'),
(19, 'sathis', 'the future IAS officer');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sno` varchar(5) NOT NULL,
  `username` varchar(40) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `sno`, `username`, `fname`, `lname`, `password`, `email`) VALUES
(1, '12345', 'Admin', 'admin', 'admins', 'cb7ad4c1b06086b86c97fc6dc1180047', 'Admin@Adminsite.com'),
(2, '56789', 'Admin2', 'admin', 'admins', 'cb7ad4c1b06086b86c97fc6dc1180047', 'Admin@Adminsite.com'),
(3, '47705', 'sabari', 'sabarish', 'waran', '420b838f913b378a7d104afe53d32ae2', 'sabareeswaran11266@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
