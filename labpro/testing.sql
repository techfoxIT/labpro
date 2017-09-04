-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2017 at 10:02 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `alltest`
--

CREATE TABLE `alltest` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `ID` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `e_mail` varchar(20) NOT NULL,
  `p_number` int(11) NOT NULL,
  `rfdr` varchar(20) NOT NULL,
  `app_date` varchar(10) NOT NULL,
  `app_time` varchar(10) NOT NULL,
  `tests_pck` varchar(200) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`ID`, `fname`, `lname`, `e_mail`, `p_number`, `rfdr`, `app_date`, `app_time`, `tests_pck`, `date_time`) VALUES
(1, 'manish', 'tiwari', 'manish@tiwari.com', 987654321, 'vinit tiwari', '2017-08-27', '13:01', 'pack1,\r\npack2,\r\npack3,\r\na,\r\nad,\r\nad,\r\nc,\r\ncvfdvfv,\r\nczvd,\r\nd,\r\nd', '2017-08-23 07:46:16'),
(2, 'grd', 'd', 'qwe@sdgf.com', 1234567845, 'efd  fdg', '2017-08-25', '01:00', 'pack1,\r\npack2', '2017-08-23 07:46:42'),
(3, 'dsvcds', 'gfhg', 'sdy@dscd.com', 1234567890, 'dasdf', '2017-08-24', '13:01', 'czvd,\r\nd,\r\nd,\r\nd', '2017-08-23 20:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `tests` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`id`, `name`, `tests`) VALUES
(1, 'pack1', 'a,\r\ndwadascs,\r\nefw,\r\nfewfsa'),
(2, 'pack2', 'dwadascs,\r\nefw,\r\nfsdf,\r\nTSH,\r\nvffv');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`) VALUES
(18, 'vinti', 'vkjfhk'),
(19, 'vffv', 'ewr'),
(20, 'vcsd', ''),
(21, 'TSH', ''),
(22, 'T', ''),
(23, 'wfrasef', ''),
(24, 'fewfsa', ''),
(25, 'efw', ''),
(26, 'dwadascs', ''),
(28, 'fsdf', ''),
(29, 'vinit', ''),
(30, 'a', ''),
(31, 'sdfsd', ''),
(32, 'sd', ''),
(33, 'f', ''),
(34, 'fv', ''),
(35, 'v', ''),
(36, 'v', ''),
(37, 'xd', ''),
(38, 'fx', ''),
(39, 'vfxv', ''),
(40, 'gfvfd', ''),
(41, 'dvsdc', ''),
(42, 'czvd', ''),
(43, 'cvfdvfv', ''),
(44, 'x', ''),
(45, 'xf', ''),
(46, 'x', ''),
(47, 'v', ''),
(48, 'fx', ''),
(49, 'fx', ''),
(50, 'xf', ''),
(51, 'v', ''),
(52, 'v', ''),
(53, 'vxfvfx', ''),
(54, 'vfxvxfv', ''),
(55, 'vfxvfx', ''),
(56, 'vxf', ''),
(57, 'dfsfdsereae', ''),
(58, 'ad', ''),
(59, 'ad', ''),
(60, 'd', ''),
(61, 'd', ''),
(62, 'dasd', ''),
(63, 'c', ''),
(64, 'v', ''),
(65, 'vc', ''),
(66, 'vn', ''),
(67, 'tr', ''),
(68, 'hb', ''),
(69, 'd', ''),
(70, 'g', ''),
(71, 'g', ''),
(72, 'bvn', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alltest`
--
ALTER TABLE `alltest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alltest`
--
ALTER TABLE `alltest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
