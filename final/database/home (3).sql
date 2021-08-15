-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 11:59 AM
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
-- Table structure for table `approval`
--

CREATE TABLE `approval` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `btype` varchar(10) NOT NULL,
  `accomodation` varchar(50) NOT NULL,
  `bno` varchar(10) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `lmark` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `rangee` varchar(10) NOT NULL,
  `rent` varchar(10) NOT NULL,
  `stat` varchar(10) NOT NULL,
  `rname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approval`
--

INSERT INTO `approval` (`id`, `username`, `oname`, `contact`, `pic`, `btype`, `accomodation`, `bno`, `addr`, `lmark`, `city`, `pincode`, `rangee`, `rent`, `stat`, `rname`) VALUES
(4, 'bhakti', 'bhakti', '7894561233', 'apartment2.jpg', 'appartment', '2BHK', '120', 'raiji baug,\r\nJunagadh', 'Moti baug', 'junagadh', '362001', '5600', '127', 'available', 'riddhi'),
(8, 'jainam', 'jainam', '8659745621', 'home3.jpg', 'appartment', '1BHK', '101', 'paldi\r\nahemdabad', 'paldi', 'ahemdabad', '3654121', '6000', '127', 'available', 'vrushti');

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
  `rname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `propert`
--

INSERT INTO `propert` (`id`, `username`, `oname`, `contact`, `pic`, `btype`, `accomodation`, `bno`, `addr`, `lmark`, `city`, `pincode`, `range`, `rent`, `rname`) VALUES
(5, 'bhakti', 'bhakti', '7894561233', 'apartment2.jpg', 'appartment', '2BHK', '120', 'raiji baug,\r\nJunagadh', 'Moti baug', 'junagadh', 362001, 5600, 127, ''),
(6, 'bhakti', 'bhakti', '7894561233', 'apartment1.jpg', 'appartment', '3BHK', '202', 'Andheri\r\nMumbai', 'Andheri', 'Mumbai', 446601, 10000, 127, ''),
(7, 'jainam', 'jainam', '8659745621', 'home3.jpg', 'appartment', '1BHK', '101', 'paldi\r\nahemdabad', 'paldi', 'ahemdabad', 3654121, 6000, 127, '');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(5) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact` bigint(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `fname`, `lname`, `contact`, `email`, `username`, `password`, `type`) VALUES
(10, 'bhakti', 'sanghani', 7894561233, 'bhakti@gmail.com', 'bhakti', '1234', 'owner'),
(13, 'vrushti', 'shah', 8787878787, 'vrushti@gmail.com', 'vrushti', '111', 'renter'),
(14, 'khushit', 'shah', 7894561230, 'khushit@gmail.com', 'khushit', '123', 'renter'),
(15, 'riddhi', 'desai', 789451525, 'riddhi@gmail.com', 'riddhi', '123', 'renter'),
(16, 'dhara', 'shah', 9999999898, 'dhara@gmail.com', 'dhara', 'dhara', 'renter'),
(17, 'jainam', 'shah', 8659745621, 'jainam@gmail.com', 'jainam', 'jainam', 'owner'),
(18, 'admin', 'admin', 7894651322, 'admin@gmail.com', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `renter`
--

CREATE TABLE `renter` (
  `id` int(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `rname` varchar(50) NOT NULL,
  `contact` bigint(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `padd` varchar(60) NOT NULL,
  `occupation` varchar(60) NOT NULL,
  `job_add` varchar(50) NOT NULL,
  `family_mam` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `renter`
--

INSERT INTO `renter` (`id`, `uname`, `rname`, `contact`, `address`, `gender`, `email`, `padd`, `occupation`, `job_add`, `family_mam`) VALUES
(1, 'vrushti', 'vrushti', 2147483647, 'yagnik road\r\nrajkot', 'female', 'vrushti@gmail.com', 'yagnik road\r\nrajkot', 'Engineer', 'infosec \r\njunagadh', 3),
(3, 'khushit', 'khushit', 7894561230, 'jagmal chok', 'male', 'khushit@gmail.com', 'jagmal chok', 'Engineer', 'subhas', 3),
(4, 'riddhi', 'riddhi', 789451525, 'yagnik road\r\nrajkot', 'female', 'riddhi@gmail.com', 'yagnik road\r\nrajkot', 'Engineer', 'dhgbgfb', 3),
(5, 'dhara', 'dhara', 9999999898, 'yagnik road\r\nrajkot', 'female', 'dhara@gmail.com', 'yagnik road\r\nrajkot', 'Engineer', 'navrangpura\r\nahemdabad', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approval`
--
ALTER TABLE `approval`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `approval`
--
ALTER TABLE `approval`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `propert`
--
ALTER TABLE `propert`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `renter`
--
ALTER TABLE `renter`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
