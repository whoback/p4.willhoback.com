-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2013 at 10:35 PM
-- Server version: 5.1.68-cll
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `willhoba_p4`
--

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE IF NOT EXISTS `reminders` (
  `remind_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `the_time` time NOT NULL,
  `the_date` date NOT NULL,
  PRIMARY KEY (`remind_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `reminders`
--

INSERT INTO `reminders` (`remind_id`, `created`, `modified`, `user_id`, `content`, `the_time`, `the_date`) VALUES
(26, 1387737020, 1387737020, 10, 'test', '12:35:00', '2013-12-22'),
(27, 1387754084, 1387754084, 10, 'watching football', '17:16:00', '2013-12-22'),
(28, 1387755948, 1387755948, 10, 'ne vs bal', '17:50:00', '2013-12-22'),
(29, 1387757437, 1387757437, 10, 'asdfasdfasdf', '18:12:00', '2013-12-22'),
(30, 1387757732, 1387757732, 10, 'rare', '18:16:00', '2013-12-22'),
(31, 1387765769, 1387765769, 11, 'testing', '01:00:00', '2013-12-18'),
(32, 1387766171, 1387766171, 11, 'testtesttest', '14:01:00', '2013-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `created`, `modified`, `token`, `password`, `last_login`, `timezone`, `first_name`, `last_name`, `email`) VALUES
(10, 1387733312, 1387733312, '0be69855217f17716c24ea21d280e54985d84db1', '00aa407abd8ad7efadeec6191bbc6d13889f68ac', 0, '', 'test', 'tester', 'test@test.com'),
(11, 1387765647, 1387765647, 'df617f053a9a62b848ee69109a6d673bcc954036', '077a8485c8a6267c1a25911f31f21a27601ae997', 0, '', 'will', 'hoback', 'will.hoback@gmail.com'),
(12, 1387765745, 1387765745, '41214b5e191b0e9821282b8975ee97b2ee3547ce', '077a8485c8a6267c1a25911f31f21a27601ae997', 0, '', 'will', 'hoback', 'will.hoback@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reminders`
--
ALTER TABLE `reminders`
  ADD CONSTRAINT `reminders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
