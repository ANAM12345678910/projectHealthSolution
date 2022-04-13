-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2022 at 03:19 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_solution`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `visited` varchar(5) NOT NULL,
  `firstname` varchar(21) NOT NULL,
  `lastname` varchar(21) NOT NULL,
  `fathername` varchar(20) NOT NULL,
  `emailid` varchar(25) NOT NULL,
  `phonenumber` int(15) NOT NULL,
  `month` varchar(17) NOT NULL,
  `day` int(13) NOT NULL,
  `year` int(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `docid` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`visited`, `firstname`, `lastname`, `fathername`, `emailid`, `phonenumber`, `month`, `day`, `year`, `gender`, `docid`) VALUES
('Yes', 'Akshta', 'Thakur', 'Batman', 'akshta@thakur.com', 343834878, 'January', 15, 1996, 'Female', 'General Physician'),
('No', 'Manish', 'Patil', 'Anil', 'manish@patil.com', 339390489, 'April', 23, 1998, 'Male', 'Physiciotherepist'),
('No', 'Priya', 'Jagir', 'Ramesh', 'priya@jagir.com', 9398349, 'May', 24, 1994, 'Female', 'Dentist'),
('Yes', 'Merry', 'Pekki', 'John', 'merry@pekki.com', 893473489, 'December', 18, 1992, 'Female', 'Gynocologist'),
('Yes', 'Akshat', 'Kumar', 'Father', 'ak@kumar.com', 2147483647, 'December', 24, 1995, 'Male', 'Dentist'),
('No', 'Anil', 'Kapoor', 'Amit', 'amit.anil@kapoor.com', 2147483647, 'December', 15, 1995, 'Male', 'General Physician');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
