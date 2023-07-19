-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2015 at 01:47 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(5) NOT NULL AUTO_INCREMENT,
  `aname` varchar(30) NOT NULL,
  `apass` varchar(30) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `apass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `qid` int(5) NOT NULL AUTO_INCREMENT,
  `question` longtext NOT NULL,
  `stid` int(5) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qid`, `question`, `stid`) VALUES
(1, 'what is e-learning', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `rtid` int(5) NOT NULL AUTO_INCREMENT,
  `rid` int(5) NOT NULL,
  `qid` int(5) NOT NULL,
  `stid` int(5) NOT NULL,
  `rating` int(5) NOT NULL,
  PRIMARY KEY (`rtid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rtid`, `rid`, `qid`, `stid`, `rating`) VALUES
(1, 2, 1, 1, 2),
(2, 3, 1, 1, 1),
(3, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `rid` int(5) NOT NULL AUTO_INCREMENT,
  `qid` int(5) NOT NULL,
  `reply` longtext NOT NULL,
  `stid` int(5) NOT NULL,
  `correct` int(5) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`rid`, `qid`, `reply`, `stid`, `correct`) VALUES
(1, 1, 'e-learning is electronic learning, and typically this means using a computer to deliver part, or all of a course whether it''s in a school, part of your mandatory business training or a full distance learning course', 1, 0),
(2, 1, 'eLearning is learning utilizing electronic technologies to access educational curriculum outside of a traditional classroom.  In most cases, it refers to a course, program or degree delivered completely online', 1, 0),
(3, 1, 'Education via the Internet, network, or standalone computer. e-learning is essentially the network-enabled transfer of skills and knowledge. e-learning refers to using electronic applications and processes to learn. e-learning applications and processes include Web-based learning, computer-based learning, virtual classrooms and digital collaboration. Content is delivered via the Internet, intranet/extranet, audio or video tape, satellite TV, and CD-ROM.', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `sid` int(5) NOT NULL AUTO_INCREMENT,
  `sname` varchar(30) NOT NULL,
  `spass` varchar(30) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sid`, `sname`, `spass`) VALUES
(1, 'staffadmin', 'staffadmin');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stid` int(5) NOT NULL AUTO_INCREMENT,
  `stfname` varchar(50) NOT NULL,
  `stlname` varchar(50) NOT NULL,
  `stemail` varchar(50) NOT NULL,
  `stname` varchar(30) NOT NULL,
  `stpass` varchar(30) NOT NULL,
  PRIMARY KEY (`stid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stid`, `stfname`, `stlname`, `stemail`, `stname`, `stpass`) VALUES
(1, 'ram', 'kumar', 'ram@gmail.com', 'ram', 'ram');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subid` int(5) NOT NULL AUTO_INCREMENT,
  `stitle` longtext NOT NULL,
  `subject` longtext NOT NULL,
  PRIMARY KEY (`subid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subid`, `stitle`, `subject`) VALUES
(1, 'What is e-learning', 'Quite simply, e-learning is electronic learning, and typically this means using a computer to deliver part, or all of a course whether it''s in a school, part of your mandatory business training or a full distance learning course. \n\nIn the early days it received a bad press, as many people thought bringing computers into the classroom would remove that human element that some learners need, but as time has progressed technology has developed, and now we embrace smartphones and tablets in the classroom and office, as well as using a wealth of interactive designs that makes distance learning not only engaging for the users, but valuable as a lesson delivery medium.\n\nBuilding partnerships with quality training providers, and combining this with a dedicated experienced technical team and support staff, Virtual College provides the perfect blended learning environment, offering anyone the chance to take their online training to the next level.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
