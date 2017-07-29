-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2017 at 08:10 AM
-- Server version: 5.5.27-log
-- PHP Version: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tranding-movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookreview`
--

CREATE TABLE IF NOT EXISTS `bookreview` (
  `sn` int(11) NOT NULL,
  `dimensation` varchar(255) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `writer` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `pub` varchar(255) NOT NULL,
  `about` varchar(5000) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `flag` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE IF NOT EXISTS `career` (
  `sn` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `cnamee` varchar(255) NOT NULL,
  `about` varchar(5000) NOT NULL,
  `exam` varchar(1000) NOT NULL,
  `qualification` varchar(1000) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `flag` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gamereview`
--

CREATE TABLE IF NOT EXISTS `gamereview` (
  `sn` int(11) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `strating` varchar(255) NOT NULL,
  `spc` varchar(5000) NOT NULL,
  `year` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `about` varchar(3000) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `flag` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gamereview`
--

INSERT INTO `gamereview` (`sn`, `mname`, `strating`, `spc`, `year`, `genre`, `link`, `about`, `photo`, `flag`, `date`) VALUES
(1, 'hj', '4', 'jj', 'm', 'puzzle', 'm', 'j', 'yes', 1, '02.22.17');

-- --------------------------------------------------------

--
-- Table structure for table `lng`
--

CREATE TABLE IF NOT EXISTS `lng` (
  `sn` int(11) NOT NULL,
  `el` varchar(255) NOT NULL,
  `pd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lng`
--

INSERT INTO `lng` (`sn`, `el`, `pd`) VALUES
(1, 'riju@g.com', 'riju'),
(2, 'chitrank@g.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `mobilereview`
--

CREATE TABLE IF NOT EXISTS `mobilereview` (
  `sn` int(11) NOT NULL,
  `mobilename` varchar(255) NOT NULL,
  `starrating` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `camra` varchar(255) NOT NULL,
  `internal` varchar(255) NOT NULL,
  `about` varchar(5000) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `front` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `bettery` varchar(255) NOT NULL,
  `feture` varchar(5000) NOT NULL,
  `flag` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `screen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `moviereview`
--

CREATE TABLE IF NOT EXISTS `moviereview` (
  `sn` int(11) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `strating` varchar(255) NOT NULL,
  `cast` varchar(2000) NOT NULL,
  `year` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `dirctor` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `about` varchar(5000) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `flag` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `typess` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `sn` int(11) NOT NULL,
  `typenews` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `inshort` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `showreview`
--

CREATE TABLE IF NOT EXISTS `showreview` (
  `sn` int(11) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `starrating` varchar(255) NOT NULL,
  `cast` varchar(1500) NOT NULL,
  `year` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `director` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `about` varchar(5000) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `flag` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `typess` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trand`
--

CREATE TABLE IF NOT EXISTS `trand` (
  `sn` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `srating` varchar(255) NOT NULL,
  `cast` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `director` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `flag` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trandcareer`
--

CREATE TABLE IF NOT EXISTS `trandcareer` (
  `sn` int(11) NOT NULL,
  `careename` varchar(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `about` varchar(5000) NOT NULL,
  `exam` varchar(2000) NOT NULL,
  `qualification` varchar(1000) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `flag` int(11) NOT NULL,
  `DATE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trandshowbook`
--

CREATE TABLE IF NOT EXISTS `trandshowbook` (
  `sn` int(11) NOT NULL,
  `tranding-title` varchar(255) NOT NULL,
  `mobile-name` varchar(255) NOT NULL,
  `starrating` varchar(255) NOT NULL,
  `dimension/os` varchar(1000) NOT NULL,
  `year` varchar(255) NOT NULL,
  `genre` varchar(1000) NOT NULL,
  `publisher-caymra` varchar(255) NOT NULL,
  `internal-language` varchar(255) NOT NULL,
  `about` varchar(5000) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `front` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `bettery` varchar(255) NOT NULL,
  `feture` varchar(5000) NOT NULL,
  `flag` int(11) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
