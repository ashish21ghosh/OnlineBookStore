-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 27, 2013 at 01:48 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `books_lib`
--

-- --------------------------------------------------------

--
-- Table structure for table `t01`
--

CREATE TABLE IF NOT EXISTS `t01` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `author` varchar(30) NOT NULL,
  `publisher` varchar(30) NOT NULL,
  `year` int(4) NOT NULL,
  `price` int(5) NOT NULL,
  `pic` varchar(30) NOT NULL,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `t01`
--

INSERT INTO `t01` (`fid`, `name`, `author`, `publisher`, `year`, `price`, `pic`) VALUES
(1, 'Inferno', 'Dan Brown', 'Transworld Publishers', 2013, 413, 'b01.jpg'),
(2, 'The Oath of the Vayuputras', 'Amish Tripathi', 'Westland Press', 2013, 195, 'b03.jpg'),
(3, 'And the Mountains Echoed', 'Khaled Hosseini', 'Bloomsbury', 2013, 377, 'b02.jpg'),
(4, 'Best Kept Secret', 'Jeffrey Archer', 'Macmillan', 2013, 172, 'b06.jpg'),
(5, 'Clockwork Princess', 'Cassandra Clare', 'Walker Books', 2011, 374, 'b05.jpg'),
(6, 'The Rithmatist', 'Brandon Sanderson', 'Tor Teen', 2013, 455, 'b04.jpg'),
(7, 'Midnight''s Children', 'Salman Rushdie', 'Vintage', 2012, 315, 'b07.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `t02`
--

CREATE TABLE IF NOT EXISTS `t02` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `author` varchar(30) NOT NULL,
  `publisher` varchar(30) NOT NULL,
  `year` int(4) NOT NULL,
  `price` int(5) NOT NULL,
  `pic` varchar(30) NOT NULL,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `t02`
--

INSERT INTO `t02` (`fid`, `name`, `author`, `publisher`, `year`, `price`, `pic`) VALUES
(1, 'The Story Of My Experiments With Truth ', 'M K Gandhi', 'Gbd Books', 2010, 90, 'c03.jpg'),
(2, 'Turning Points', 'APJ Abdul Kalam', 'Rajpal And Sons', 2012, 139, 'c01.jpeg'),
(3, 'Impatient Optimist', 'Bill Gates', 'Collins Business', 2012, 139, 'k4.jpeg'),
(4, 'Steve Jobs: The Exclusive Biography', 'Walter Isaacson', 'Little, Brown Book Group', 2011, 629, 'c02.jpeg'),
(5, 'My Life In My Words', 'Rabindranath Tagore', 'Penguin Books India', 2010, 315, 'k01.jpeg'),
(6, 'The Man Who Knew Infinity', 'Kanigal Robert', 'Little, Brown Book Group', 1992, 417, 'k02.jpeg'),
(7, 'It''s Not About the Bike', 'Lance Armstrong', 'Yellow Jersey Press', 2001, 349, 'k03.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `t03`
--

CREATE TABLE IF NOT EXISTS `t03` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `author` varchar(30) NOT NULL,
  `publisher` varchar(30) NOT NULL,
  `year` int(4) NOT NULL,
  `price` int(5) NOT NULL,
  `pic` varchar(30) NOT NULL,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `t03`
--

INSERT INTO `t03` (`fid`, `name`, `author`, `publisher`, `year`, `price`, `pic`) VALUES
(1, 'Concepts of Physics (Volume - 1) ', 'H C Verma', 'Bharati Bhavan', 2011, 253, 'd01.jpeg'),
(2, 'Senior Secondary School Mathematics', 'R. S. Aggarwal', 'Bharati Bhawan', 2013, 337, 'd02.jpeg'),
(3, 'High School English Grammar & Composition', 'Wren, Martin', 'S. Chand Publisher', 2011, 140, 'd03.jpeg'),
(4, 'A Text Book of Biology for Class - 12', 'Chopra, Srivastava, Dhami', 'Pradeep Publications', 2013, 700, 'd04.jpeg'),
(5, 'Introduction to Algorithms', 'Cormen,Stein,Rivest,Leiserson', 'PHI Learning', 2010, 389, 'd05.jpeg'),
(6, 'Internal Combustion Engines', 'Ganesan', 'Tata Mc-graw Hill', 2012, 394, 'd06.jpeg'),
(7, 'Advanced Engineering Mathematics', 'Erwin Kreyszig', 'Wiley', 2011, 454, 'd07.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `t04`
--

CREATE TABLE IF NOT EXISTS `t04` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `author` varchar(30) NOT NULL,
  `publisher` varchar(30) NOT NULL,
  `year` int(4) NOT NULL,
  `price` int(5) NOT NULL,
  `pic` varchar(30) NOT NULL,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `t04`
--

INSERT INTO `t04` (`fid`, `name`, `author`, `publisher`, `year`, `price`, `pic`) VALUES
(1, 'Jataka, Panchatantra and Hitopadesha', 'Anant Pai', 'Amar Chitra Katha', 2010, 769, 'e01.jpeg'),
(2, 'Calvin And Hobbes', 'Bill Watterson', 'Little, Brown Book Group', 1988, 437, 'd02.jpg'),
(3, 'Funny Folktales', 'Anant Pai', 'Amar Chitra Katha', 2002, 80, 'e02.jpeg'),
(4, 'The Best of Archie Comics', 'Frank Doyle, George Gladir', 'Archie Comic Publications', 2011, 571, 'd04.jpg'),
(5, 'Stories of Birbal', 'Anant Pai', 'Amar Chitra Katha', 1997, 158, 'e03.jpeg'),
(6, 'Three Men In A Boat', 'K Jerome Jerome', 'Pigeon Books', 2007, 106, 'e04.jpeg'),
(7, 'Tinkle Double Digest No. 84', 'Luis Fernandes', 'Amar Chitra Katha', 2010, 80, 'e05.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `t05`
--

CREATE TABLE IF NOT EXISTS `t05` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `author` varchar(50) NOT NULL,
  `publisher` varchar(30) NOT NULL,
  `year` int(4) NOT NULL,
  `price` int(5) NOT NULL,
  `pic` varchar(30) NOT NULL,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `t05`
--

INSERT INTO `t05` (`fid`, `name`, `author`, `publisher`, `year`, `price`, `pic`) VALUES
(1, 'Gravity', 'James B. Hartle', 'Addison-Wesley', 2003, 593, 'e01.jpg'),
(2, 'In Search Of Schrodinger''s Cat', 'John Gribbin', 'Random House', 2012, 347, 'e02.jpg'),
(3, 'For the Love of Physics', 'Walter Lewin', 'Simon and Schuster', 2011, 251, 'e03.jpg'),
(4, 'The Origin of Species', 'Charles Darwin', 'HarperCollins', 2011, 106, 'e04.jpg'),
(5, 'Ideas and Opinions', 'Albert Einstein', 'Rupa & Co', 1979, 205, 'h01.jpeg'),
(6, 'The Grand Design', 'Stephen Hawking', 'Random House', 2011, 269, 'h02.jpeg'),
(7, 'Theory of Machines', 'S. S. Rattan', 'Tata McGraw - Hill Education', 2009, 371, 'h03.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `t06`
--

CREATE TABLE IF NOT EXISTS `t06` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `author` varchar(30) NOT NULL,
  `publisher` varchar(30) NOT NULL,
  `year` int(4) NOT NULL,
  `price` int(5) NOT NULL,
  `pic` varchar(30) NOT NULL,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `t06`
--

INSERT INTO `t06` (`fid`, `name`, `author`, `publisher`, `year`, `price`, `pic`) VALUES
(1, 'India''s Struggle for Independence', 'Bipan Chandra', 'Penguin', 1989, 263, 'f01.jpeg'),
(2, 'India After Gandhi', 'Ramachandra Guha', 'Pan Macmillan India', 2008, 420, 'f02.jpeg'),
(3, 'Swaraj', 'Arvind Kejriwal', 'HarperCollins', 2012, 88, 'f03.jpeg'),
(4, 'The Diary Of a Young Girl', 'Anne Frank', 'Maple Press', 2008, 80, 'f04.jpeg'),
(5, 'A Tale of Two Cities', 'Charles Dickens', 'Penguin', 2007, 80, 'f05.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `t07`
--

CREATE TABLE IF NOT EXISTS `t07` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `author` varchar(30) NOT NULL,
  `publisher` varchar(30) NOT NULL,
  `year` int(4) NOT NULL,
  `price` int(5) NOT NULL,
  `pic` varchar(30) NOT NULL,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `t07`
--

INSERT INTO `t07` (`fid`, `name`, `author`, `publisher`, `year`, `price`, `pic`) VALUES
(2, 'Skin Deep', 'Santhanam Aparna', 'Harpercollins Publishers', 2010, 185, 'g01.jpeg'),
(3, 'Don''t Lose Your Mind Lose Your Weight', 'Rujuta Diwekar', 'Ebury / Random House India', 2009, 128, 'g02.jpeg'),
(4, 'Yoga Mind and Body', 'Sivananda Yoga Vedanta Centre', 'DK Publishing', 2008, 498, 'g03.jpeg'),
(5, 'Work it Out Without a Workout', 'Vesna P. Jacob', 'Ebury Press', 2013, 173, 'g04.jpeg'),
(6, 'The 17 Day Diet', 'Mike Moreno', 'Harper Collins Publisher', 2011, 355, 'g05.jpeg'),
(7, 'A Survival Guide for Life', 'Bear Grylls', 'Transworld Publishers', 2012, 988, 'g06.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `t08`
--

CREATE TABLE IF NOT EXISTS `t08` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `author` varchar(30) NOT NULL,
  `publisher` varchar(30) NOT NULL,
  `year` int(4) NOT NULL,
  `price` int(5) NOT NULL,
  `pic` varchar(30) NOT NULL,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `t08`
--

INSERT INTO `t08` (`fid`, `name`, `author`, `publisher`, `year`, `price`, `pic`) VALUES
(1, 'Mom & Me', 'Paro Anand', 'Hachette India Children''s Book', 2010, 63, 'i01.jpeg'),
(2, 'Solving the Ice-Cream Dilemma', 'Steven Rudolf', 'Times Group Books', 2011, 230, 'i02.jpeg'),
(4, 'Family Wisdom', 'Robin Sharma', 'Jaico Publishing House', 2005, 191, 'i03.jpeg'),
(5, 'Teach Your Child How to Think', 'Edward De Bono', 'Penguin', 2009, 294, 'i04.jpg'),
(6, 'Linda Goodman Relationship Signs', 'Goodman Linda', 'Pan Books', 1998, 247, 'i05.jpg'),
(7, 'Messages From The Masters', 'Dr Brian Weiss', 'Piatkus', 2004, 229, 'i07.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `t09`
--

CREATE TABLE IF NOT EXISTS `t09` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `author` varchar(30) NOT NULL,
  `publisher` varchar(30) NOT NULL,
  `year` int(4) NOT NULL,
  `price` int(5) NOT NULL,
  `pic` varchar(30) NOT NULL,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `t09`
--

INSERT INTO `t09` (`fid`, `name`, `author`, `publisher`, `year`, `price`, `pic`) VALUES
(1, 'Miracles Happen', 'Brian Weiss, Amy E. Weiss', 'Hay House', 2012, 211, 'j01.jpeg'),
(2, 'Music of the Spinning Wheel', 'Sudheendra Kulkarni', 'Amaryllis', 2012, 387, 'j02.jpeg'),
(3, 'Aura', 'Will Durant', 'Simon & Schuster', 2012, 510, 'j03.jpeg'),
(4, 'The Freethinker''s Prayer Book', 'Khushwant Singh', 'Aleph Book Company', 2012, 347, 'j04.jpeg'),
(5, 'What Money Can''t Buy', 'Michael Sandel', 'Penguin Books India', 2012, 418, 'j05.jpeg'),
(6, 'Sophie''s World', 'Jostein Gaarder', 'Orion Publishing Group', 2007, 291, 'j06.jpeg'),
(7, 'Capital', 'Karl Marx', 'Maple Press', 2011, 254, 'j07.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `t10`
--

CREATE TABLE IF NOT EXISTS `t10` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `author` varchar(30) NOT NULL,
  `publisher` varchar(30) NOT NULL,
  `year` int(4) NOT NULL,
  `price` int(5) NOT NULL,
  `pic` varchar(30) NOT NULL,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `t10`
--

INSERT INTO `t10` (`fid`, `name`, `author`, `publisher`, `year`, `price`, `pic`) VALUES
(1, 'The Secret - Daily Teachings', 'Rhonda Byrne', 'Simon And Schuster India', 2013, 449, 'r2.jpeg'),
(2, 'On Hinduism', 'Wendy Doniger', 'Aleph Book Company', 2013, 697, 'r1.jpeg'),
(3, 'Your Personal Horoscope 2014', 'Joseph Polansky', 'Harper Element', 2013, 299, 'r3.jpeg'),
(4, 'Spiritual Relationships', 'Gopika Kapoor', 'Hay House India', 2013, 184, 'r4.jpeg'),
(5, 'The Search that Seeks You', 'Sangamithra Amudha', 'Random House', 2013, 210, 'r5.jpeg'),
(6, 'The Twelfth Insight', 'James Redfield', 'Bantam ', 2012, 311, 'r6.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `salt` varchar(3) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `username_2` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
