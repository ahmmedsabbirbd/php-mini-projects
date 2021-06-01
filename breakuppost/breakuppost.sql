-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 01, 2021 at 01:31 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmyeducation`
--

-- --------------------------------------------------------

--
-- Table structure for table `breakuppost`
--

DROP TABLE IF EXISTS `breakuppost`;
CREATE TABLE IF NOT EXISTS `breakuppost` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `story` varchar(1500) NOT NULL,
  `storytitile` varchar(255) NOT NULL,
  `cdate` date NOT NULL,
  `sdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breakuppost`
--

INSERT INTO `breakuppost` (`id`, `story`, `storytitile`, `cdate`, `sdate`) VALUES
(1, 'tar sathe first dekha hoy Kodum kaser nije.................\r\n\r\n			Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quia animi ipsa, quae eligendi reprehenderit, quibusdam iste officia assumenda veniam eum necessitatibus corrupti molestias dolore nihil voluptatum quisquam alias quis facilis facere, blanditiis rem, iusto odit? Itaque dignissimos non perspiciatis quis assumenda est autem, ea accusantium soluta, id saepe! Inventore?', 'First love of my life', '2021-05-31', '2017-07-26'),
(2, 'Ami tkhon class 9 a pori...........\r\nbonna tkhon class 7 a pore.\r\nami oke like kortam............', 'Threed Pream', '2021-05-31', '2020-01-31'),
(9, 'ewrtyuj', 'qwertyuuwqe', '2021-06-01', '2021-06-15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
