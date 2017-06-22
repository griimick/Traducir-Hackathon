-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2016 at 07:17 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `traducirdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '12345'),
('admin', '12345'),
('admin', '12345'),
('admin', '12345'),
('admin', '12345'),
('admin', '12345'),
('admin', '12345'),
('admin', '12345'),
('admin', '12345'),
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `audios`
--

CREATE TABLE IF NOT EXISTS `audios` (
  `AudioID` int(11) NOT NULL,
  `VideoID` varchar(32) NOT NULL,
  `Reports` tinyint(1) NOT NULL,
  `Verified` tinyint(1) DEFAULT NULL,
  `Tags` varchar(64) DEFAULT NULL,
  `UserID` varchar(100) NOT NULL,
  `Language` varchar(20) NOT NULL,
  `Downvotes` int(100) NOT NULL,
  `Upvotes` int(100) NOT NULL,
  PRIMARY KEY (`AudioID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audios`
--

INSERT INTO `audios` (`AudioID`, `VideoID`, `Reports`, `Verified`, `Tags`, `UserID`, `Language`, `Downvotes`, `Upvotes`) VALUES
(1, '52ZlXsFJULI', 4, 1, NULL, '1', 'Hindi', 1, 2),
(2, '52ZlXsFJULI', 1, 1, NULL, '1', 'English', 0, 1),
(3, '52ZlXsFJULI', 0, NULL, NULL, '2', 'Hindi', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
  `VideoID` varchar(64) NOT NULL,
  `Frequency` int(11) NOT NULL,
  `VideoTitle` varchar(100) NOT NULL,
  `VideoDesc` text NOT NULL,
  `VideoBy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`VideoID`, `Frequency`, `VideoTitle`, `VideoDesc`, `VideoBy`) VALUES
('UqqfOf_1G54', 1, 'MLG Stickers Analysis and Why Chroma II is up? (CS:GO Market Commentary)', 'â–¼Click to Open Description with the discussed linksâ–¼\n\n\n\nA look into the MLG Columbus 2016 Stickers, how the community is liking them and the future outlook on their effect in the market.\n\nArticle: http://blog.csgro.com/2016/03/20/mlg2016-sticker-analysis/\n\nâž¤ csGRO: http://csgro.com/\n\n\nâž¤ Support the Video on Steam: http://steamcommunity.com/sharedfiles/filedetails/?id=654994619\n\nâž¤ csGRO Steam Group - http://goo.gl/nGW4jn\nâž¤ Twitte r-  https://goo.gl/L64szX\nâž¤ Facebook - http://goo.gl/sLqqlF\nâž¤ Steam Profile - http://goo.gl/F7KFcT\nâž¤ G2A cheap game codes - https://goo.gl/E3yWF9\nâž¤Awesome Intros for cheap - http://goo.gl/s8CI3x\n\nâž¤ Largest Black Ops 3 Supply Drop Items Database -http://codcustoms.com/\n\nMusic by Tobu\nTobu - Sensual Massage - https://youtu.be/M7iqvcjtPwQ\nhttp://twitter.com/tobuofficial\nhttp://www.youtube.com/tobuofficial', 'Septix');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `UserID` int(50) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_id` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`UserID`, `first_name`, `last_name`, `email_id`, `password`) VALUES
(1, 'pranjul', 'azad', 'pranjul.azad@gmail.com', '$2y$10$notmorethan22charsmipeb29Dwt86rKB3PM4qj8SZ9'),
(2, 'pranjul', 'azad', 'pranjul.azad1@gmail.com', '$2y$10$notmorethan22charsmipeb29Dwt86rKB3PM4qj8SZ9'),
(3, 'pro', 'pro', 'pranjul.azad2@gmail.com', '$2y$10$notmorethan22charsmipeomI4UfaK4Hf1z9mvxWhP5Ut5LwWe33u'),
(5, 'Karan', 'Chaudhary', 'karanchaudhary009@gmail.com', '$2y$10$notmorethan22charsmipeN0Y3BXvzIE.c/kcnc2Y8NN8PJjAAla2'),
(6, 'Saumik', 'Pradhan', 'pradhan@gmail.com', '$2y$10$notmorethan22charsmipevjwYo/STIbjf917D0jYUnB9dgqpcxrG'),
(7, 'qwe', 'qwe', 'qwe@gmail.com', '$2y$10$notmorethan22charsmipeVlvgpI2VzAhtp8nEwd18SusbCNpFD1e'),
(8, 'pro', 'pro', 'prp@gmail.com', '$2y$10$notmorethan22charsmiperu2M.vu/8LLgBP5ppSa2l./m4RO7hj2');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `VideoID` varchar(50) NOT NULL,
  `VideoDesc` text NOT NULL,
  `VideoTitle` varchar(50) NOT NULL,
  `VideoBy` varchar(32) NOT NULL,
  UNIQUE KEY `VideoID` (`VideoID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`VideoID`, `VideoDesc`, `VideoTitle`, `VideoBy`) VALUES
('52ZlXsFJULI', '', 'Adding and subtracting fractions | Fractions | Pre', 'Khan Academy'),
('Gn2pdkvdbGQ', '', 'Converting fractions to decimals | Decimals | Pre-', 'Khan Academy'),
('JTTpkEqCico', '', 'Introduction to Udacity', 'Udacity'),
('mvOkMYCygps', '', 'Basic multiplication | Multiplication and division', 'Khan Academy'),
('VQ1bggRZJJQ', '', 'How Udacity Student Kelly Landed an Engineering Jo', 'Udacity'),
('ZJu4SeFEGGE', '', 'Udacity After Dark: "Hacking" Facebook', 'Udacity');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
