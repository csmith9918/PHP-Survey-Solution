-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 07:06 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surveys`
--

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE `surveys` (
  `flight_number` int(255) NOT NULL,
  `flight_date` date NOT NULL,
  `time_of_flight` varchar(50) NOT NULL,
  `friendliness` varchar(50) NOT NULL,
  `comfort` varchar(50) NOT NULL,
  `cleanliness` varchar(50) NOT NULL,
  `noise` varchar(50) NOT NULL,
  `depart_on_time` varchar(10) NOT NULL,
  `arrive_on_time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`flight_number`, `flight_date`, `time_of_flight`, `friendliness`, `comfort`, `cleanliness`, `noise`, `depart_on_time`, `arrive_on_time`) VALUES
(13, '2018-03-08', '03:30:pm', 'Excellent', 'Excellent', 'Good', 'Good', 'Yes', 'No'),
(14, '2018-03-31', '09:15:am', 'No Opinion', 'Excellent', 'Fair', 'Good', 'Yes', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`flight_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `flight_number` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
