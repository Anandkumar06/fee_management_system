-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 18, 2021 at 11:41 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(30) NOT NULL,
  `contact` bigint(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `repass` varchar(10) NOT NULL,
  `gen` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `contact`, `email`, `addr`, `pass`, `repass`, `gen`) VALUES
('Abhinav', 8877803461, 'abhikr.gts@gmail.com', 'hans bhawan', 'qwerty123', 'qwerty123', ''),
('Abhinav', 8877803461, 'abhikr.gts@gmail.com', 'hans bhawan', 'qwerty123', 'qwerty123', 'Male'),
('Honey', 6206052615, 'honeyvermajsr1601@gmail.com', 'sonari', 'qwerty123', 'qwerty123', 'female'),
('navneeta', 8210654814, 'navneetaganguly2000@gmail.com', 'parsudih', 'qwerty123', 'qwerty123', 'female'),
('anand', 6789065434, 'anand@gmail.com', 'dimna', 'qwerty123', 'qwerty123', 'Male'),
('chirag', 4557868235, 'chirag@gmail.com', 'sonari', 'qwerty123', 'qwerty123', 'Male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
