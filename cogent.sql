-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 10:16 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cogent`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `did` int(11) NOT NULL,
  `dname` text NOT NULL,
  `detail` text NOT NULL,
  `dtype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`did`, `dname`, `detail`, `dtype`) VALUES
(6, 'Company', 'BADOXY Electrical and Electronics Pvt.. Ltd', 0),
(7, 'Industry', 'Manufacturing', 0),
(8, 'Address', 'GYAN DEO B', 0),
(9, 'Road/Street/Lane', 'HOJGARHI PO', 0),
(10, 'Area/Locality', 'HATHRAS', 0),
(11, 'City/District', 'ALIGARH', 0),
(12, 'State', 'UTTAR PRADESH', 0),
(13, 'Pin Code', '204216', 0),
(14, '', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor\r\ninvidunt ut labore et dolore magna aliquyam erat, sed diam voluptua', 1),
(18, 'Contact Number', '+91 12345 67890', 2),
(22, 'E-Mail ID', 'email@domain.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `appllications`
--

CREATE TABLE `appllications` (
  `aid` int(11) NOT NULL,
  `aname` text NOT NULL,
  `ano` int(11) NOT NULL,
  `amail` text NOT NULL,
  `agender` text NOT NULL,
  `aDOB` text NOT NULL,
  `aqualification` text NOT NULL,
  `ainterest` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appllications`
--

INSERT INTO `appllications` (`aid`, `aname`, `ano`, `amail`, `agender`, `aDOB`, `aqualification`, `ainterest`) VALUES
(1, 'a a', 0, 'a', 'a', 'a', 'a', 'a'),
(2, 'Shivank Kacker', 2147483647, 'kacker.shivank@gmail.com', 'Male', '18/08/03', 'Null', 'Web Development');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `hcat` text NOT NULL,
  `htit` text NOT NULL,
  `htext` text NOT NULL,
  `himg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`hcat`, `htit`, `htext`, `himg`) VALUES
('DIGITAL STYLE', 'COLLECTION 2020', 'Lorem ipsum dolor sit amet,consectetur', 'uploads/asset-3.png');

-- --------------------------------------------------------

--
-- Table structure for table `home-slideshow`
--

CREATE TABLE `home-slideshow` (
  `sid` int(11) NOT NULL,
  `sinfo` text NOT NULL,
  `simg` text NOT NULL,
  `sdate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `pname` text NOT NULL,
  `prate` int(11) NOT NULL,
  `pprice` int(11) NOT NULL,
  `pdiscount` int(11) NOT NULL,
  `pinfo` text NOT NULL,
  `pimg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `prate`, `pprice`, `pdiscount`, `pinfo`, `pimg`) VALUES
(223619, 'Haier CleanCool 1 Ton 3 Star Split Inverter AC', 5, 3050, 44, 'EMI starts at Rs.1450/month.\r\nKey features\r\n- Capacity 1 Ton\r\n- Dual Rotary Compressor\r\n- 3 Star Rating\r\n- Maximum Air Circulation 412 CFM\r\n- Copper Condenser\r\nCashback and EMI - Get Up to Rs. 2,000/- instant discount on\r\nICICI Bank Credit Card & Debit Card,\r\nUp to Rs. 2500 cashback on ICICI Bank EMI.', 'uploads/asset-12.png');

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE `tender` (
  `tid` int(11) NOT NULL,
  `tlocation` text NOT NULL,
  `tbudget` int(11) NOT NULL,
  `tdate` text NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender`
--

INSERT INTO `tender` (`tid`, `tlocation`, `tbudget`, `tdate`, `type`) VALUES
(2, 'Vadodara', 101, '18/08/03', 1),
(4, 'Delhi', 100000, '14/4/20', 0),
(5, 'Mumbai', 129341, '13/6/19', 0),
(6, 'Pune', 34000, '31/3/17', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `appllications`
--
ALTER TABLE `appllications`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `home-slideshow`
--
ALTER TABLE `home-slideshow`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `tender`
--
ALTER TABLE `tender`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `appllications`
--
ALTER TABLE `appllications`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home-slideshow`
--
ALTER TABLE `home-slideshow`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tender`
--
ALTER TABLE `tender`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
