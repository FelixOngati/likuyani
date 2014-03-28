-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2014 at 10:16 AM
-- Server version: 5.5.35
-- PHP Version: 5.4.25-1+sury.org~precise+2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `likuyani`
--

-- --------------------------------------------------------

--
-- Table structure for table `academia`
--

CREATE TABLE IF NOT EXISTS `academia` (
  `pId` int(11) NOT NULL,
  `institution` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `admNo` varchar(50) NOT NULL,
  `totalFees` double NOT NULL,
  `paid` double NOT NULL,
  `balance` double NOT NULL,
  KEY `pId` (`pId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academia`
--

INSERT INTO `academia` (`pId`, `institution`, `class`, `year`, `admNo`, `totalFees`, `paid`, `balance`) VALUES
(1, 'St Anthony''s Boys High School', 'Form 3', '2014', '6524', 47200, 30000, 17200);

-- --------------------------------------------------------

--
-- Table structure for table `applicationstatus`
--

CREATE TABLE IF NOT EXISTS `applicationstatus` (
  `pId` int(11) NOT NULL,
  `bursary` varchar(100) NOT NULL,
  `applicationStatus` varchar(10) NOT NULL,
  `amountAwarded` double NOT NULL,
  KEY `pId` (`pId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bursaries`
--

CREATE TABLE IF NOT EXISTS `bursaries` (
  `pId` int(11) NOT NULL,
  `bursary` varchar(100) NOT NULL,
  `dateAwarded` date NOT NULL,
  `amount` double NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `pId` (`pId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bursaries`
--

INSERT INTO `bursaries` (`pId`, `bursary`, `dateAwarded`, `amount`, `id`) VALUES
(1, 'Constituency Development Fund', '2013-03-12', 5000, 1),
(1, 'Macmillan Scholarship', '2012-03-19', 15000, 2),
(1, 'Wings to Fly  ', '2014-01-07', 10000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `personaldata`
--

CREATE TABLE IF NOT EXISTS `personaldata` (
  `pId` int(11) NOT NULL AUTO_INCREMENT,
  `lName` varchar(50) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `ward` varchar(50) NOT NULL,
  `village` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `sublocation` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `father` varchar(50) NOT NULL,
  `foccupation` varchar(50) NOT NULL,
  `mother` varchar(50) NOT NULL,
  `moccupation` varchar(50) NOT NULL,
  PRIMARY KEY (`pId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `personaldata`
--

INSERT INTO `personaldata` (`pId`, `lName`, `fName`, `year`, `ward`, `village`, `location`, `sublocation`, `sex`, `dob`, `father`, `foccupation`, `mother`, `moccupation`) VALUES
(1, 'Ongati', 'Felix', 2014, 'Nzoia', 'Matunda', 'Nzoia', 'Matunda', 'Male', '2004-05-28', 'Some Name', 'Farmer', 'Fridah Silwa', 'N/A');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academia`
--
ALTER TABLE `academia`
  ADD CONSTRAINT `academia_ibfk_1` FOREIGN KEY (`pId`) REFERENCES `personaldata` (`pId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicationstatus`
--
ALTER TABLE `applicationstatus`
  ADD CONSTRAINT `applicationstatus_ibfk_1` FOREIGN KEY (`pId`) REFERENCES `personaldata` (`pId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bursaries`
--
ALTER TABLE `bursaries`
  ADD CONSTRAINT `bursaries_ibfk_1` FOREIGN KEY (`pId`) REFERENCES `personaldata` (`pId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
