-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2020 at 08:09 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcourse`
--

CREATE TABLE `addcourse` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_desc` varchar(255) NOT NULL,
  `course_type` varchar(22) NOT NULL,
  `course_fees` int(11) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcourse`
--

INSERT INTO `addcourse` (`course_id`, `course_name`, `course_desc`, `course_type`, `course_fees`, `details`) VALUES
(2, 'stitch', 'Stitching includes:-pattern making, drafting, preparation of pattern for basic body block.', 'long', 2500, 'upload/stitch.pdf'),
(3, 'jardosi', '2 weeks classes', 'short', 2000, 'upload/jan-2007.pdf'),
(4, 'stitch', '2 weeks classes', 'ctype', 2500, 'upload/pcd jan-2016.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `addvideo`
--

CREATE TABLE `addvideo` (
  `video_id` int(11) NOT NULL,
  `video_name` varchar(100) NOT NULL,
  `c_id` int(11) NOT NULL,
  `video_type` varchar(50) NOT NULL,
  `video_desc` varchar(255) NOT NULL,
  `c_video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addvideo`
--

INSERT INTO `addvideo` (`video_id`, `video_name`, `c_id`, `video_type`, `video_desc`, `c_video`) VALUES
(2, 'xyz', 2, 'short', 'short', 'uploads/Heart Touching Message.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pid` int(11) NOT NULL,
  `cust_email` varchar(52) NOT NULL,
  `cust_name` varchar(63) NOT NULL,
  `cust_contact` bigint(20) NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_name` varchar(63) NOT NULL,
  `course_fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `cust_email`, `cust_name`, `cust_contact`, `course_id`, `course_name`, `course_fees`) VALUES
(1, 'naina@gmail.com', 'Naina', 9876543210, 2, 'stitch', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `public`
--

CREATE TABLE `public` (
  `fname` varchar(26) NOT NULL,
  `lname` varchar(26) NOT NULL,
  `gender` varchar(23) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(98) NOT NULL,
  `password` varchar(102) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `public`
--

INSERT INTO `public` (`fname`, `lname`, `gender`, `address`, `state`, `contact`, `email`, `password`) VALUES
('Naina', 'Shetty', 'Female', 'Roy Road, Belgaum', 'Karnataka', 9876543210, 'naina@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcourse`
--
ALTER TABLE `addcourse`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `addvideo`
--
ALTER TABLE `addvideo`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `public`
--
ALTER TABLE `public`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcourse`
--
ALTER TABLE `addcourse`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `addvideo`
--
ALTER TABLE `addvideo`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
