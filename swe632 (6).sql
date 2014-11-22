-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2014 at 09:36 PM
-- Server version: 5.6.12
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `swe632`
--
CREATE DATABASE IF NOT EXISTS `swe632` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `swe632`;

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE IF NOT EXISTS `dashboard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `center_content` varchar(250) NOT NULL,
  `default_center_content` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`id`, `center_content`, `default_center_content`) VALUES
(1, 'Wander through All Talks, and select one that sparks your interest. If you like what you see, you may request a speaking engagement.                        ', 'Wander through All Talks, and select one that sparks your interest. If you like what you see, you may request a speaking engagement.');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `rid` int(10) NOT NULL AUTO_INCREMENT,
  `tid` int(10) NOT NULL,
  `comment` varchar(500) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`rid`, `tid`, `comment`) VALUES
(2, 32, 'Great Job!');

-- --------------------------------------------------------

--
-- Table structure for table `Talks`
--

CREATE TABLE IF NOT EXISTS `Talks` (
  `tid` int(10) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `prof_name` varchar(50) NOT NULL,
  `u_id` int(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `Talks`
--

INSERT INTO `Talks` (`tid`, `title`, `description`, `prof_name`, `u_id`) VALUES
(4, 'Building Software that People can Use', '"User Friendly" is a subjective, qualitative term that serves marketers, but not managers, programmers or users. This talk focuses on specific problems with existing software user interfaces and points out measurable ways to make software of all kinds more competitive for users in the global marketplace', 'Jeff Offutt', 3),
(5, 'Internet Safety', 'This lecture has been given to high school students, senior citizens, and university aministrators. Through humor and well designed slides, the attendees will learn how to use the internet in a responsible manner. Prof. Offutt will discuss how to stay safe on sites such as facebook and myspace, plagiarism and shopping safely and other issues. Slides are available for preview if desired.', 'Jeff Offutt', 3),
(7, 'The Promise of Web Services', 'The concept of a web service sounds wonderful- computers communicating and solving problems directly without troubling humans. Parts are ordered, papers are translated, and reservations are made, all without human intervention. This innovative model of business has many advantages but we still have numerous problems, some of which may be insurmountable, to turn the science fiction into reality. This talk analyzes some of these problems and outlines possibilities for solutions.', 'Jeff Offutt', 3),
(25, 'Building Software that People can Use', '"User Friendly" is a subjective, qualitative term thatserves marketers, but not managers, programmers or users.This talk focuses on specific problems with existingsoftware user interfaces and points out measurable ways tomake software of all kinds more competitive for users in theglobal marketplace', 'Jeff Offutt', 3),
(32, 'Backbone JS', 'Introduction to Backbone JS, the basics. ', 'Jack Young', 1),
(33, 'Real Estate Investment', 'Discuss current topics on real estate investment trusts.', 'Ryan Young', 4),
(34, 'Ruby on Rails', 'Mastering Ruby on Rails.', 'Jack Young', 1),
(35, 'Git Hub', 'Building a solid foundation on Git technology.', 'Jack Young', 1),
(39, 'PHP', 'Detailed overview of PHP', 'Tom Andrews', 13),
(40, 'Angular JS', 'Brief introduction into the foundations of this JS library.', 'Jack Young', 1),
(41, 'Investment Properties', 'Talks about his experience on investment properties in the commercial markets.  ', 'Ryan Young', 4),
(42, 'Neural Networks', 'Discusses his current research in the machine learning field, with an emphasis on deep learning through the use of neural networks.', 'Jack Young', 1),
(43, 'Subprime Derivatives', 'Impact of financial derivatives for risk hedging and current market developments.', 'Jerry Hanweck', 16),
(44, 'Managing Risk', 'Discusses the elements of risk management, the need to manage or control risks, and risk control measures and procedures.', 'Jerry Hanweck', 16),
(45, 'asdf', 'adsf', 'Thomas Heya', 17);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_type` int(10) NOT NULL,
  `name` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `category` int(11) NOT NULL,
  `image_url` varchar(300) NOT NULL,
  `bio` varchar(800) NOT NULL DEFAULT 'NA',
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `user_type`, `name`, `username`, `password`, `category`, `image_url`, `bio`) VALUES
(1, 2, 'Jack Young', 'jack', 'young', 2, 'https://media.licdn.com/mpr/mpr/shrink_200_200/p/3/005/07b/2b3/0631df7.jpg', 'Jack Young works as an Engineering Fellow in the cyber security industry.  His current work has been focused on developing endpoint security software.'),
(2, 1, 'Site_Admin', 'admin', 'admin', 0, '', ''),
(3, 2, 'Jeff Offut', 'JeffOffut', 'speaker_JeffOffut', 1, 'https://media.licdn.com/mpr/mpr/shrink_200_200/p/1/005/029/2a2/11fd435.jpg', 'Dr. Jeff Offutt is Professor of Software Engineering at George Mason University. Offutt was awarded the George Mason University Teaching Excellence Award, Teaching With Technology, in 2013. He leads the MS in Software Engineering program at GMU, teaches Software Engineering courses at all levels and has developed new courses on several Software Engineering subjects, including web engineering, software testing, construction, design, usability, experimentation, and analysis. His textbook, Introduction to Software Testing (co-authored with Paul Ammann), was published by Cambridge University Press in January 2008 and is the leading worldwide textbook in software testing. Offutt was named a GMU Outstanding Faculty member in 2008 and 2009.'),
(4, 2, 'Ryan Young', 'ryanyoung', 'ryanyoung', 3, 'https://media.licdn.com/mpr/mpr/shrink_200_200/p/5/000/1fb/1be/2c71aff.jpg', 'Specialties: Investment Analysis, Debt & Equity Origination, M & A, Joint Venture Structure, Capital Market, Credit/Market/Risk Analysis, Distressed Asset Sales, CMBS, Securitization, Construction Lending, REIT, Development Cycle, and Real Estate Law.'),
(9, 2, 'Tommy', 't', 't', 1, 'http://jacks-imac.local/GMUSpeakers632/assets/images/noProfilePicture.png', 'NA'),
(13, 2, 'Tom Andrews', 'tommy', 'andrews', 2, 'https://media.licdn.com/mpr/mpr/shrink_200_200/p/5/005/01b/1dc/295ebb8.jpg', 'NA'),
(15, 2, 'John Nauright', 'John Nauright', 'speaker_JohnNauright', 4, 'http://masonspeakers.gmu.edu/wp-content/uploads/2014/09/nauright_john-199x300.jpg', 'NA'),
(16, 2, 'Jerry Hanweck', 'Jerry Hanweck', 'speaker_JerryHanweck', 4, 'http://masonspeakers.gmu.edu/wp-content/uploads/2014/09/hanweck_jerry-200x300.jpg', 'Gerald A. Hanweck is Professor of Finance in the School of Management at George Mason University in Fairfax, Virginia and has been recently a Visiting Scholar in the Division of Insurance and Research of the Federal Deposit Insurance Corporation.'),
(17, 2, 'Thomas Heya', 'ThomasHeya', 'speaker_ThomasHeya', 4, 'http://jacks-imac.local/GMUSpeakers632/assets/images/noProfilePicture.png', 'NA');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
