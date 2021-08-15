-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2020 at 11:28 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `name`, `question`, `answer`) VALUES
(1, 'a', 'a', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `suggation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `propert`
--

CREATE TABLE `propert` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `pic` varchar(150) NOT NULL,
  `btype` varchar(50) NOT NULL,
  `accomodation` varchar(50) NOT NULL,
  `bno` varchar(50) NOT NULL,
  `add` varchar(52) NOT NULL,
  `lmark` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(50) NOT NULL,
  `range` int(50) NOT NULL,
  `rent` tinyint(1) NOT NULL,
  `status` varchar(50) NOT NULL,
  `rname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `propert`
--

INSERT INTO `propert` (`id`, `username`, `oname`, `contact`, `pic`, `btype`, `accomodation`, `bno`, `add`, `lmark`, `city`, `pincode`, `range`, `rent`, `status`, `rname`) VALUES
(1, '', 'bhakti', '98789987897', 'apartment3.jpg', 'appartment', '3BHK', '102', 'Zanzarda road', 'Petrol pump', 'junagadh', 362001, 10000, 127, 'onrent', 'renter'),
(3, '', 'abc', '9898989898', 'home6.jpg', 'tenament', '3BHK', '101', 'junagadh', 'junagadh', 'junagadh', 362001, 20000, 127, 'available', ''),
(5, '', 'abab', '8787878787', 'home3.jpg', 'appartment', '1BHK', '204', 'zanzarda road', 'bypass', 'junagadh', 362001, 25000, 127, 'available', '');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(5) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `fname`, `lname`, `contact`, `email`, `username`, `password`, `type`) VALUES
(5, 'bhakti', 'sanghani', 2147483647, 'bhakti@gmail.com', 'bhakti', '123', 'owner'),
(6, 'bhushir', 'kachchhi', 2147483647, 'bhushirk@gmail.com', 'bsk', '111', 'renter'),
(7, '', '', 0, '', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `renter`
--

CREATE TABLE `renter` (
  `id` int(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `rname` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `renter`
--

INSERT INTO `renter` (`id`, `uname`, `rname`, `contact`, `address`, `gender`, `email`) VALUES
(1, 'renter', 'renter', 2147483647, 'junagadh', 'male', 'renter@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propert`
--
ALTER TABLE `propert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renter`
--
ALTER TABLE `renter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `propert`
--
ALTER TABLE `propert`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `renter`
--
ALTER TABLE `renter`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
