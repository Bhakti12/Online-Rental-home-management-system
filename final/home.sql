-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2020 at 10:46 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home`
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
  `addr` varchar(52) NOT NULL,
  `lmark` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(50) NOT NULL,
  `range` int(50) NOT NULL,
  `rent` tinyint(1) NOT NULL,
  `stat` varchar(50) NOT NULL,
  `rname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `propert`
--

INSERT INTO `propert` (`id`, `username`, `oname`, `contact`, `pic`, `btype`, `accomodation`, `bno`, `addr`, `lmark`, `city`, `pincode`, `range`, `rent`, `stat`, `rname`) VALUES
(1, 'bhakti', 'bhakti', '9879879879', 'home1.jpg', 'tenament', '3BHK', '303', 'junagadh', 'junagadh', 'junagadh', 362001, 15000, 127, 'onrent', 'renter'),
(2, 'abcd', 'abcd', '7897897897', 'apartment2.jpg', 'appartment', '2BHK', '202', 'near alpha school\r\nraijibaug', 'raijibaug', 'junagdh', 362001, 5600, 127, 'available', ''),
(3, 'abcd', 'abcd', '7897897897', 'home5.jpg', 'tenament', '3BHK', '45', 'vgjjhjvhjvhj', 'raijibaug', 'junagdh', 362001, 6000, 127, 'available', ''),
(4, 'sona', 'sona', '7865491235', 'home3.jpg', 'appartment', '2BHK', '8', 'dolatpara,\r\njunagadh', 'dolatpara', 'junagdh', 362001, 5600, 127, 'available', '');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(5) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `fname`, `lname`, `contact`, `email`, `username`, `password`, `type`) VALUES
(7, '', '', '0', '', 'admin', 'admin', 'admin'),
(9, 'abc', 'xyz', '9999999999', 'abc@hmail.com', 'abc', '111', 'renter'),
(10, 'abcd', 'xyzp', '7897897897', 'ab@abc.a', 'abcd', '1234', 'owner'),
(11, 'bhakti', 'sanghani', '9878998789', 'bhakti@gmail.com', 'bhakti', '1234', 'owner'),
(12, 'kush', 'sanghani', '9878998778', 'kush@gmail.com', 'kush@gmail.com', '123', 'owner'),
(13, 'isha', 'parekh', '9845612387', 'isha@yahoo.com', 'isha', 'isha', 'renter'),
(14, 'sona', 'sanghani', '7865491235', 'sona@gmail.com', 'sona', 'sona', 'owner'),
(15, 'aaa', 'aaa', '887899878987', 'aaa@a.a', 'aaa', 'aaa', 'renter');

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
  `email` varchar(50) NOT NULL,
  `padd` varchar(60) NOT NULL,
  `occupation` varchar(70) NOT NULL,
  `job_add` varchar(70) NOT NULL,
  `family_mem` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `renter`
--

INSERT INTO `renter` (`id`, `uname`, `rname`, `contact`, `address`, `gender`, `email`, `padd`, `occupation`, `job_add`, `family_mem`) VALUES
(1, 'renter', 'abc', 2147483647, 'junagadh', 'male', 'abc@a.a', '', '', '', 0);

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `renter`
--
ALTER TABLE `renter`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
