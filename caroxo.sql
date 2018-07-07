-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2018 at 05:58 PM
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
-- Database: `caroxo`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `carID` varchar(100) NOT NULL,
  `billamount` varchar(100) NOT NULL,
  `kms` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`carID`, `billamount`, `kms`) VALUES
('913', '100', '5'),
('913', '100', '5'),
('913', '100', '5'),
('913', '100', '5'),
('980', '320', '7'),
('567', '322', '9'),
('234', '760', '23'),
('234', '760', '23');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `sno` int(10) NOT NULL,
  `customername` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `taxitype` varchar(10) NOT NULL,
  `dateandtime` datetime(6) NOT NULL,
  `pickup` varchar(100) NOT NULL,
  `droplocation` varchar(100) NOT NULL,
  `specialinstructions` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`sno`, `customername`, `contact`, `emailid`, `taxitype`, `dateandtime`, `pickup`, `droplocation`, `specialinstructions`) VALUES
(1, 'huhuhuhuhuh', '788787', 'h@gmail.vom', 'sedan', '2019-02-22 03:30:00.000000', 'hgvhvh', 'hjhhj', 'ddddd'),
(2, 'madsd', '898988989', 'h@gmail.vom', 'micro', '2018-07-04 12:40:00.000000', 'bvvbnn', 'hhjhjjhj', 'huuhuhuhuhhuhuhuh'),
(3, 'mokokokok', '98989898', 'vnvb@k.nbn', 'mini', '2018-08-06 04:30:00.000000', 'bb', 'll', 'vbn'),
(4, 'bunji', '566656565', 'b@gmail.com', 'micro', '2018-07-31 05:35:00.000000', 'vvbvbbbn', 'bvvbbnbn', 'bnbnvbvvbnnvbn'),
(5, 'bunji', '566656565', 'b@gmail.com', 'micro', '2018-07-31 05:35:00.000000', 'vvbvbbbn', 'bvvbbnbn', 'bnbnvbvvbnnvbn'),
(6, 'vybn', '99898989898', 'y@gmai.vhg', 'mini', '2018-08-06 04:30:00.000000', 'i', 'o', 'nbnv'),
(7, 'hgghgh', '7887', 'h@gmail.vom', 'micro', '2018-07-06 04:30:00.000000', 'cfvccvvvvb', 'fggfghhgg', 'cvvccb'),
(8, 'nbnbnb', '788787', 'h@gmail.vom', 'mini', '2018-07-05 06:30:00.000000', 'cc', 'dddddd', 'dd'),
(9, 'nbnbnb', '788787', 'h@gmail.vom', 'mini', '2018-07-05 06:30:00.000000', 'cc', 'dddddd', 'dd'),
(10, 'nbnbnb', '788787', 'h@gmail.vom', 'mini', '2018-07-05 06:30:00.000000', 'cc', 'dddddd', 'dd'),
(11, 'hgghgh', '98989898', 'b@gmail.com', 'mini', '2018-07-04 04:30:00.000000', 'ddd', 'vvvvb', 'gvvgh'),
(12, 'hgghgh', '98989898', 'b@gmail.com', 'mini', '2018-07-04 04:30:00.000000', 'ddd', 'vvvvb', 'gvvgh'),
(13, 'hgghgh', '98989898', 'b@gmail.com', 'mini', '2018-07-04 04:30:00.000000', 'ddd', 'vvvvb', 'gvvgh'),
(14, 'huhuhuhuhuh', '98989898', 'b@gmail.com', 'micro', '2018-07-06 12:30:00.000000', 'ddd', 'bnbnb', ''),
(15, 'mokokokok', '99898989898', 'b@gmail.com', 'sedan', '2018-09-04 03:00:00.000000', 'dff', 'fff', ''),
(16, 'mokokokok', '99898989898', 'b@gmail.com', 'sedan', '2018-09-04 03:00:00.000000', 'dff', 'fff', ''),
(17, 'mokokokok', '99898989898', 'b@gmail.com', 'sedan', '2018-09-04 03:00:00.000000', 'dff', 'fff', ''),
(18, 'huhuhuhuhuh', '788787', 'y@gmai.vhg', 'micro', '2018-07-04 12:30:00.000000', 'vvbv', 'ghgh', 'gfgfhg'),
(19, 'huhuhuhuhuh', '788787', 'y@gmai.vhg', 'micro', '2018-07-04 12:30:00.000000', 'vvbv', 'ghgh', 'gfgfhg'),
(20, 'mmkimkimkik', '788787', 'vnvb@k.nbn', 'micro', '2018-06-27 01:45:00.000000', 'nnn', 'mmm', ''),
(21, 'ooooo', '98989898', 'y@gmai.vhg', 'micro', '2018-07-06 09:40:00.000000', 'hhgghghgh', 'ddddd', ''),
(22, 'ooooo', '98989898', 'y@gmai.vhg', 'micro', '2018-07-06 09:40:00.000000', 'hhgghghgh', 'ddddd', ''),
(23, 'huhuhuhuhuh', '98989898', 'b@gmail.com', 'micro', '2018-07-06 03:45:00.000000', 'nnvvnv', 'ccvc', ''),
(24, 'huhuhuhuhuh', '98989898', 'b@gmail.com', 'micro', '2018-07-06 03:45:00.000000', 'nnvvnv', 'ccvc', ''),
(25, 'huhuhuhuhuh', '98989898', 'y@gmai.vhg', 'micro', '2019-02-06 23:00:00.000000', 'ddd', 'ee', ''),
(26, 'hgghgh', '7887', 'y@gmai.vhg', 'micro', '2018-07-06 06:50:00.000000', 'nnn', 'hh', ''),
(27, 'madu', '909090909090', 'gQ2@kllk.bom', 'micro', '2018-07-31 03:30:00.000000', 'huhu', 'kuku', ''),
(28, 'madu', '909090909090', 'gQ2@kllk.bom', 'micro', '2018-07-31 03:30:00.000000', 'huhu', 'kuku', ''),
(29, 'madu', '909090909090', 'gQ2@kllk.bom', 'micro', '2018-07-31 03:30:00.000000', 'huhu', 'kuku', ''),
(30, 'madu', '909090909090', 'gQ2@kllk.bom', 'micro', '2018-07-31 03:30:00.000000', 'huhu', 'kuku', ''),
(31, 'madu', '909090909090', 'gQ2@kllk.bom', 'micro', '2018-07-31 03:30:00.000000', 'huhu', 'kuku', ''),
(32, 'nbnbnb', '99898989898', 'y@gmai.vhg', 'micro', '2018-06-15 07:49:00.000000', 'ddd', 'hhjhjjhj', 'ghugjj');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `carID` int(250) NOT NULL,
  `drivername` varchar(100) NOT NULL,
  `drivercontact` bigint(15) NOT NULL,
  `driverlicenceno` varchar(100) NOT NULL,
  `carno` varchar(20) NOT NULL,
  `carinsuranceno` varchar(100) NOT NULL,
  `carmodel` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'engaged'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carID`, `drivername`, `drivercontact`, `driverlicenceno`, `carno`, `carinsuranceno`, `carmodel`, `status`) VALUES
(913, 'hi', 9989, '', '55445', '354634', 'Mini', 'free'),
(914, 'hi', 9989, '', '55445', '354634', 'Mini', 'free'),
(915, 'sdfbs', 9989, '', '000', '4857', 'Micro', 'free'),
(916, 'sdfbs', 9989, '', '000', '4857', 'Micro', 'free'),
(917, 'ggygyygyg', 90, '', '487584', '354634', 'Sedan', ''),
(918, 'gg', 4, '', '78878787', '322332', 'Micro', ''),
(919, 'madujbjhcfbh', 78899, '', '72776674', '855545465', 'Sedan', ''),
(920, 'bnvnfdvfd', 575776, '8797899788', '7778', '7767', 'Micro', ''),
(921, 'mkmkmkm', 7787877, '2222', 'tn13i9890', 'vvv', 'Micro', ''),
(922, 'jjbjbjbjbjj', 9989, '8797899788', '000', '87787878', 'Mini', 'free');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`carID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `carID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=923;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
