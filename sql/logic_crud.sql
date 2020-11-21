-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 04:11 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logic_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `logic`
--

CREATE TABLE `logic` (
  `id` int(11) NOT NULL,
  `longname` varchar(250) NOT NULL,
  `shortname` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logic`
--

INSERT INTO `logic` (`id`, `longname`, `shortname`, `description`) VALUES
(1, 'data three', 'short', 'desc'),
(2, 'data four', 'short name', 'description'),
(3, 'data five', 'short name five', 'description'),
(4, 'data six', 'update data', 'description'),
(5, 'data seven', 'short for seven', 'description'),
(6, 'data eight', 'short for eight', 'description'),
(7, 'data eight', 'eight data short', 'descript for for spin'),
(8, 'data three', 'up up', 'new '),
(9, 'data eight', 'new newnew des up', 'new des up'),
(10, 'data one', 'd one ', 'd one description '),
(26, 'data two', 'fgfgfgf', 'dsdsds'),
(27, 'data two', 'ggf', 'fdxx'),
(28, 'data one', 'short for six', 'des'),
(31, 'data one', 'data one short name  up', 'data description up'),
(32, 'data one', 'final', 'final');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logic`
--
ALTER TABLE `logic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logic`
--
ALTER TABLE `logic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
