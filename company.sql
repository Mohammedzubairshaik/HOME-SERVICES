-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2019 at 08:34 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE IF NOT EXISTS `availability` (
  `Sname` varchar(30) NOT NULL,
  `SID` int(3) NOT NULL,
  `Designation` varchar(35) NOT NULL,
  `Phone no` varchar(10) NOT NULL,
  `Availability` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`Sname`, `SID`, `Designation`, `Phone no`, `Availability`) VALUES
('John', 1, 'Plumber', '9876543210', 'Yes'),
('Smith', 2, 'Plumber', '8794561203', 'Yes'),
('Roshan', 3, 'Plumber', '7892921233', 'No'),
('Rohit', 4, 'Plumber', '7748961023', 'Yes'),
('Shabaz', 5, 'Painter', '7795636027', 'Yes'),
('Arbaz', 6, 'Painter', '8088456123', 'Yes'),
('Rohit', 7, 'Painter', '8745120369', 'No'),
('Salman', 8, 'Painter', '7851203649', 'No'),
('Ritvik', 9, 'Cleaner', '7485961023', 'Yes'),
('Karthik', 10, 'Cleaner', '6360450128', 'No'),
('Kiran', 11, 'Cleaner', '9568754215', 'Yes'),
('Pawan', 12, 'Cleaner', '7841526302', 'Yes'),
('Mohisin', 13, 'Electrician', '7878546923', 'Yes'),
('Samarth', 14, 'Electrician', '9987425610', 'No'),
('Nisar', 16, 'Electrician', '8457961235', 'Yes'),
('Ramesh', 17, 'Laundryman', '9657410138', 'No'),
('Ajay', 18, 'Laundryman', '7584120366', 'Yes'),
('Ajith', 19, 'Laundryman', '7784512630', 'Yes'),
('Ankith ', 20, 'Laundryman', '8975041985', 'Yes'),
('Arman', 21, 'Electronic Technician', '7084596156', 'Yes'),
('Murgesh', 22, 'Electronic Technician', '9080725298', 'Yes'),
('Maresh', 23, 'Electronic Technician', '9080568615', 'No'),
('Mohith', 24, 'Electronic Technician', '8056978545', 'No'),
('Mohith', 24, 'Electronic Technician', '9898754361', 'No'),
('Samarth .S', 25, 'Carpenter', '9967854302', 'Yes'),
('Sharukh', 26, 'Carpenter', '8745123609', 'No'),
('Adithitya', 27, 'Carpenter', '9026098754', 'Yes'),
('Kishor', 28, 'Carpenter', '8054196852', 'No'),
('Kumar', 29, 'Pool Technician', '9968574412', 'Yes'),
('Karthik.A', 30, 'Pool Technician', '6360574125', 'Yes'),
('Kaushik', 31, 'Pool Technician', '9574869230', 'Yes'),
('Kishan', 32, 'Pool Technician', '9457120856', 'No'),
('Kiran.Y', 33, 'Greenskeeper', '8055471896', 'Yes'),
('Keerthan', 34, 'Greenskeeper', '9945712556', 'Yes'),
('Furkan', 35, 'Greenskeeper', '6897546663', 'No'),
('Fikshan', 36, 'Greenskeeper', '9957841125', 'No'),
('Rohan', 37, 'Packer and Unpacker', '9965547810', 'Yes'),
('Sarmas', 38, 'Packer and Unpacker', '7826263545', 'Yes'),
('Nazir', 39, 'Packer and Unpacker', '6695312330', 'Yes'),
('Kotresh', 40, 'Packer and Unpacker', '8656931233', 'No'),
('Ajith', 41, 'Event manager', '7656931233', 'Yes'),
('Amith', 42, 'Event manager', '6063123345', 'No'),
('Aawez', 43, 'Event manager', '7795266345', 'Yes'),
('Arman.K', 44, 'Event manager', '9987451203', 'No'),
('Akbar', 45, 'Party organizer', '6695614553', 'Yes'),
('Asad', 46, 'Party organizer', '9957861255', 'Yes'),
('Arohith', 47, 'Party organizer', '7896641230', 'No'),
('Arjith', 48, 'Party organizer', '7784445120', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `Name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `aadhar` varchar(15) NOT NULL,
  PRIMARY KEY (`aadhar`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Name`, `email`, `pass`, `Contact`, `aadhar`) VALUES
('sam', 'samnoyaldass@gmail.com', 'Sam1234', '9876542310', '4571 2548 9682');

-- --------------------------------------------------------

--
-- Table structure for table `servicemen`
--

CREATE TABLE IF NOT EXISTS `servicemen` (
  `SName` varchar(30) NOT NULL,
  `CuName` varchar(30) NOT NULL,
  `Cu Email` varchar(60) NOT NULL,
  `Type of service` varchar(20) NOT NULL,
  `Feedback` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicemen`
--


-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `Type of service` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`Name`, `Email`, `Address`, `Type of service`) VALUES
('sam', 'samnoyaldass@gmail.com', 'gfhgfgjkhjgd', 'Plumbing');
