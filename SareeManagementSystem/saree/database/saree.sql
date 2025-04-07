-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 10:56 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saree`
--

-- --------------------------------------------------------

--
-- Table structure for table `addaccdet`
--

CREATE TABLE `addaccdet` (
  `name` varchar(40) NOT NULL,
  `accnum` bigint(20) NOT NULL,
  `amount` float NOT NULL,
  `fwhom` varchar(40) NOT NULL,
  `tdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addaccdet`
--

INSERT INTO `addaccdet` (`name`, `accnum`, `amount`, `fwhom`, `tdate`) VALUES
('vishal', 2147483647, 5000, '0', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `username`, `password`) VALUES
(1, 'bank@gmail.com', 'bank123');

-- --------------------------------------------------------

--
-- Table structure for table `confirmorder`
--

CREATE TABLE `confirmorder` (
  `cid` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `saree_id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pname` varchar(54) NOT NULL,
  `fabric` varchar(45) NOT NULL,
  `ptype` varchar(24) NOT NULL,
  `rate` float NOT NULL,
  `qty` int(11) NOT NULL,
  `color` varchar(15) NOT NULL,
  `care` varchar(23) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user` varchar(13) NOT NULL,
  `user_addr` varchar(38) NOT NULL,
  `user_contact` bigint(20) NOT NULL,
  `finamt` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dist`
--

CREATE TABLE `dist` (
  `fname` varchar(23) NOT NULL,
  `lname` varchar(23) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `addr` varchar(245) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(46) NOT NULL,
  `pass` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dist`
--

INSERT INTO `dist` (`fname`, `lname`, `gender`, `addr`, `contact`, `email`, `pass`) VALUES
('Rushali', 'k', 'female', 'belgaum', 9900253783, 'mahendrakar@123', '123456789'),
('Megha', 'Sharma', 'female', 'NEAR CHITRA THEATER', 6987745231, 'megha@gmail.com', 'megha@123'),
('Mrutyunjay', 'Balashetti', 'male', 'Bagalkot', 7760224411, 'mvbalashetti@gmail.com', 'muttu@123');

-- --------------------------------------------------------

--
-- Table structure for table `mgmt`
--

CREATE TABLE `mgmt` (
  `fname` varchar(37) NOT NULL,
  `lname` varchar(27) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(46) NOT NULL,
  `pass` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mgmt`
--

INSERT INTO `mgmt` (`fname`, `lname`, `gender`, `addr`, `contact`, `email`, `pass`) VALUES
('Abhishek', 'Upari', 'male', 'Belagavi', 9513085458, 'abhishekupari33@gmail.com', 'abhishek@123'),
('Harshada', 'Patil', 'female', 'Belgaum', 9874563214, 'hgharshada@gmail.com', 'harsh@1234');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `pname` varchar(54) NOT NULL,
  `fabric` varchar(45) NOT NULL,
  `ptype` varchar(24) NOT NULL,
  `rate` float NOT NULL,
  `qty` int(11) NOT NULL,
  `color` varchar(15) NOT NULL,
  `care` varchar(23) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `fabric`, `ptype`, `rate`, `qty`, `color`, `care`, `image`, `user`) VALUES
(13, 'Patta patti butta', 'micra', 'polyster', 950, 10, 'purple', 'regular wash', 'upload/063e6e12-8af8-4e09-9568-9a2708ed180c.jpeg', 'public'),
(14, 'Patta patti butta', 'micra', 'polyster', 950, 10, 'Red', 'regular wash', 'upload/675d8328-1a3a-4c6f-844b-3001fcd789d3.jpeg', 'public'),
(15, 'Patta patti butta', 'micra', 'polyster', 950, 10, 'Marun', 'regular wash', 'upload/93e1dc69-ecc5-4532-8a1a-36806ed5a46d.jpeg', 'public'),
(16, 'Patta patti butta', 'micra', 'polyster', 950, 10, 'Mehandi', 'regular wash', 'upload/72f0413d-fe17-46cf-a57b-f94a8cd2c234.jpeg', 'public'),
(17, 'Patta patti butta', 'micra', 'polyster', 950, 10, 'German', 'regular wash', 'upload/11e61d4b-faa1-496c-a3c2-911c1d704bb2.jpeg', 'public'),
(18, 'Patta patti butta', 'micra', 'polyster', 950, 8, 'Grey', 'regular wash', 'upload/b7d08a87-1fac-4385-ac07-9bb1c990c699.jpeg', 'public'),
(19, 'Patta patti butta', 'micra', 'polyster', 950, 9, 'Aqua blue', 'regular wash', 'upload/9ceb8b5b-bfe6-4e6f-ae90-4340226b2f46.jpeg', 'public'),
(20, 'Patta patti butta', 'micra', 'polyster', 950, 10, 'dark red', 'regular wash', 'upload/65ba3574-4db2-472c-9fbb-1083fa34d8d5.jpeg', 'public'),
(21, 'Meena butta', 'Polyster', 'polyster', 1000, 10, 'purple', 'regular wash', 'upload/d4891467-bbcb-4964-9f84-cfdff821562c.jpeg', 'public'),
(22, 'Meena butta', 'Polyster', 'polyster', 1000, 10, 'blue', 'regular wash', 'upload/06da9670-948f-4406-a8a3-8938371b6a57.jpeg', 'public'),
(23, 'Meena butta', 'Polyster', 'polyster', 1000, 10, 'Grey', 'regular wash', 'upload/bf5b3f26-e9c9-41ba-8102-229c05688d7b.jpeg', 'public'),
(24, 'Meena butta', 'Polyster', 'polyster', 1000, 10, 'Neeli blue', 'dry wash', 'upload/f3eb0df3-d53a-4037-a244-7d2a2ab94b13.jpeg', 'public'),
(25, 'Meena butta', 'Polyster', 'polyster', 1000, 30, 'Copper', 'regular wash', 'upload/2fef20d5-796b-4415-84bd-f0e14f5795db.jpeg', 'public'),
(26, 'Meena butta', 'Polyster', 'polyster', 1000, 25, 'Red', 'regular wash', 'upload/4b0d1bc6-7aac-4df0-8698-1b5b7aef3ddc.jpeg', 'public'),
(27, 'Meena butta', 'Polyster', 'polyster', 1000, 20, 'Chatni', 'regular wash', 'upload/55edd56d-e7c5-44bf-b344-818623b4c2fc.jpeg', 'public'),
(28, 'Meena butta', 'Polyster', 'polyster', 1000, 15, 'purple', 'regular wash', 'upload/51a9ae01-318f-4fab-b176-64f9a2c11686.jpeg', 'public'),
(29, 'Meena butta', 'Polyster', 'polyster', 1000, 25, 'Peacock', 'regular wash', 'upload/06da462e-6b59-43b2-86e7-97f3d2b74e3f.jpeg', 'public'),
(30, 'Meena butta', 'Polyster', 'polyster', 1000, 20, 'A', 'regular wash', 'upload/2afbe5dc-ffb7-400e-ad39-667220a5be15.jpeg', 'public'),
(31, 'Meena butta', 'Polyster', 'polyster', 1000, 10, 'Grey', 'regular wash', 'upload/291ae729-95cc-4654-acee-ebe86b095a1c.jpeg', 'public'),
(32, 'Patali pallu', 'Polyster', 'polyster', 850, 20, 'Red', 'regular wash', 'upload/0f9f0a36-8d4c-47a2-99b6-a221985fe9e6.jpeg', 'public'),
(33, 'Patali pallu', 'Polyster', 'polyster', 850, 15, 'Marun', 'regular wash', 'upload/9191fa90-523d-4a96-a0a3-1f8cdbd9a71a.jpeg', 'public'),
(34, 'Patali pallu', 'Polyster', 'polyster', 850, 18, 'Mehandi', 'regular wash', 'upload/b7fd3d87-1f57-40b6-862a-04702d3a4d4b.jpeg', 'public'),
(35, 'Patali pallu', 'Polyster', 'polyster', 850, 15, 'Pink', 'regular wash', 'upload/7b96a7fa-9155-4c9e-872a-cb4532e688e4.jpeg', 'public'),
(36, 'Patali pallu', 'Polyster', 'polyster', 850, 20, 'Chatni', 'regular wash', 'upload/2c859cdc-af82-43da-9deb-cbae4e6ccd46.jpeg', 'public'),
(37, 'Patali pallu', 'Polyster', 'polyster', 850, 15, 'dark blue', 'regular wash', 'upload/5d7bb9bb-cf4e-4af7-9dbd-ff651fa66eae.jpeg', 'public'),
(38, 'Patali pallu', 'Polyster', 'polyster', 850, 20, 'rani', 'regular wash', 'upload/3a1f602c-e4db-470b-bb84-95cd3cc53338.jpeg', 'public'),
(39, 'Patali pallu', 'Polyster', 'polyster', 850, 10, 'dark blue', 'regular wash', 'upload/df6fe7a1-7a1b-4ac8-b442-fd85940a4f22.jpeg', 'public'),
(40, 'Patali pallu', 'Polyster', 'polyster', 850, 10, 'Aqua blue', 'regular wash', 'upload/af6cdfc8-88e5-4368-8fac-f2bebccc7030.jpeg', 'public'),
(41, 'Kaju butta', 'Polyster', 'polyster', 650, 10, 'cream', 'regular wash', 'upload/4a3d2b39-30a3-44ed-8f0e-879f14817642.jpeg', 'public'),
(42, 'Kaju butta', 'Polyster', 'polyster', 650, 20, 'Green', 'regular wash', 'upload/2d272069-3e1b-459a-b108-ff9167add0c8.jpeg', 'public'),
(43, 'Kaju butta', 'Polyster', 'polyster', 650, 20, 'Mehandi', 'regular wash', 'upload/316e88e4-3df1-4111-8f59-885f88dbb049.jpeg', 'public'),
(45, 'Kaju butta', 'Polyster', 'polyster', 650, 15, 'dark red', 'regular wash', 'upload/fcbf2234-c545-4379-9a8a-05059ba749f3.jpeg', 'public'),
(46, 'Kaju butta', 'Polyster', 'polyster', 650, 14, 'Grey', 'regular wash', 'upload/79bc90ef-8a05-4e3b-ba87-d12bc109a2ce.jpeg', 'public'),
(47, 'Kaju butta', 'Polyster', 'polyster', 650, 10, 'Pink', 'regular wash', 'upload/908ae259-181e-425a-8156-63809a12f89f.jpeg', 'public'),
(48, 'Kaju butta', 'Polyster', 'polyster', 650, 20, 'Aaboli', 'regular wash', 'upload/28f0f29c-5ab5-484a-a7d6-8f42010c90f7.jpeg', 'public'),
(53, 'Kaju butta', 'Polyster', 'polyster', 650, 60, 'Grey', 'regular wash', 'upload/a79d7190-1497-4778-b9e4-c43c56881731.jpeg', 'dist'),
(54, 'Kaju butta', 'Polyster', 'polyster', 450, 30, 'cream', 'regular wash', 'upload/dd1ada8c-dd3f-4f29-abd3-a327347dfaed.jpeg', 'dist'),
(56, 'Kaju butta', 'Polyster', 'polyster', 550, 80, 'Dark red', 'regular wash', 'upload/kb img 10.jpeg', 'dist'),
(57, 'Kaju butta', 'Polyster', 'polyster', 450, 70, 'Pink', 'regular wash', 'upload/kb img 5.jpeg', 'dist'),
(58, 'Kaju butta', 'Polyster', 'polyster', 450, 59, 'Green', 'regular wash', 'upload/kb img 2.jpeg', 'dist'),
(59, 'Meena butta', 'Polyster', 'polyster', 850, 80, 'Grey', 'regular wash', 'upload/mb img18.jpeg', 'dist'),
(60, 'Meena butta', 'Polyster', 'polyster', 850, 80, 'Red', 'regular wash', 'upload/mb img 20.jpeg', 'dist'),
(61, 'Meena butta', 'Polyster', 'polyster', 850, 70, 'Green', 'regular wash', 'upload/mb img 14.jpeg', 'dist'),
(62, 'Meena butta', 'Polyster', 'polyster', 800, 70, 'Peacock', 'regular wash', 'upload/mb img 12.jpeg', 'dist'),
(63, 'Meena butta', 'Polyster', 'polyster', 800, 70, 'dark blue', 'regular wash', 'upload/mb img 11.jpeg', 'dist'),
(64, 'Patta patti butta', 'micra', 'polyster', 650, 80, 'blue', 'regular wash', 'upload/ppb img 13.jpeg', 'dist'),
(65, 'Patta patti butta', 'micra', 'polyster', 650, 70, 'Red', 'regular wash', 'upload/ppb img 15.jpeg', 'dist'),
(66, 'Patta patti butta', 'micra', 'polyster', 700, 80, 'Marun', 'regular wash', 'upload/ppb img 17.jpeg', 'dist'),
(67, 'Patta patti butta', 'micra', 'polyster', 650, 60, 'Mehandi', 'regular wash', 'upload/ppb img 16.jpeg', 'dist'),
(68, 'Patta patti butta', 'micra', 'polyster', 650, 60, 'Grey', 'regular wash', 'upload/ppb img 19.jpeg', 'dist'),
(69, 'Patali pallu', 'Polyster', 'polyster', 650, 80, 'Green', 'regular wash', 'upload/img 1.jpeg', 'dist'),
(70, 'Patali pallu', 'Polyster', 'polyster', 650, 80, 'Pink', 'regular wash', 'upload/img 3.jpeg', 'dist'),
(71, 'Patali pallu', 'Polyster', 'polyster', 650, 80, 'Red', 'regular wash', 'upload/img 6.jpeg', 'dist'),
(72, 'Patali pallu', 'Polyster', 'polyster', 650, 70, 'Mehandi', 'regular wash', 'upload/img 7.jpeg', 'dist'),
(73, 'Patali pallu', 'Polyster', 'polyster', 650, 90, 'light pink', 'regular wash', 'upload/img 8.jpeg', 'dist'),
(74, 'Patali pallu', 'Polyster', 'polyster', 650, 70, 'blue', 'regular wash', 'upload/img 9.jpeg', 'dist');

-- --------------------------------------------------------

--
-- Table structure for table `public`
--

CREATE TABLE `public` (
  `fname` varchar(37) NOT NULL,
  `lname` varchar(27) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(46) NOT NULL,
  `pass` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `public`
--

INSERT INTO `public` (`fname`, `lname`, `gender`, `addr`, `contact`, `email`, `pass`) VALUES
('Rushali', 'M', 'female', 'Belagavi', 9900253783, 'rushalim04@gmail.com', 'rushali@123'),
('Vishal', 'Chougule', 'male', 'Belgaum', 8796541789, 'vish@gmail.com', 'vish@123');

-- --------------------------------------------------------

--
-- Table structure for table `publiccart`
--

CREATE TABLE `publiccart` (
  `order_id` int(11) NOT NULL,
  `saree_id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pname` varchar(54) NOT NULL,
  `fabric` varchar(45) NOT NULL,
  `ptype` varchar(24) NOT NULL,
  `rate` float NOT NULL,
  `qty` int(11) NOT NULL,
  `color` varchar(15) NOT NULL,
  `care` varchar(23) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user` varchar(13) NOT NULL,
  `user_addr` varchar(38) NOT NULL,
  `user_contact` bigint(20) NOT NULL,
  `finamt` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addaccdet`
--
ALTER TABLE `addaccdet`
  ADD PRIMARY KEY (`accnum`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirmorder`
--
ALTER TABLE `confirmorder`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `dist`
--
ALTER TABLE `dist`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `mgmt`
--
ALTER TABLE `mgmt`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `public`
--
ALTER TABLE `public`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `publiccart`
--
ALTER TABLE `publiccart`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `confirmorder`
--
ALTER TABLE `confirmorder`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `publiccart`
--
ALTER TABLE `publiccart`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
