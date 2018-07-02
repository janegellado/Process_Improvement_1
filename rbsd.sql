-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2018 at 01:37 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rbsd`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeID` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pg_level` varchar(10) NOT NULL,
  `birthday` varchar(15) NOT NULL,
  `date_hired` varchar(15) NOT NULL,
  `position` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `promo_date` varchar(20) NOT NULL,
  `civil_stat` varchar(20) NOT NULL,
  `cp_no` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeID`, `name`, `pg_level`, `birthday`, `date_hired`, `position`, `email`, `promo_date`, `civil_stat`, `cp_no`, `username`, `password`) VALUES
('12345', 'janelyn ann gellado', '6', '08/08/1999', '06/18/2018', 'ojt', 'janelynanngellado@gmail.com', 'N/A', 'single', 0, 'jane', '12345'),
('12345', 'janelyn ann gellado', '6', '08/08/1999', '06/18/2018', 'ojt', 'janelynanngellado@gmail.com', 'N/A', 'single', 2147483647, 'jane', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `leavedb`
--

CREATE TABLE `leavedb` (
  `employeeID` varchar(20) NOT NULL,
  `date_of_filing` varchar(20) NOT NULL,
  `place` text NOT NULL,
  `type` text NOT NULL,
  `emarks` varchar(50) NOT NULL,
  `ic_from` varchar(20) NOT NULL,
  `ic_to` varchar(20) NOT NULL,
  `recommendation` varchar(50) NOT NULL,
  `supervisor` text NOT NULL,
  `no_of_days` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mr`
--

CREATE TABLE `mr` (
  `employeeID` varchar(50) NOT NULL,
  `date_assigned` date NOT NULL,
  `qty` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `unit_name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `date_purchased` date NOT NULL,
  `property_no` varchar(50) NOT NULL,
  `classification_no` varchar(50) NOT NULL,
  `unit_value` varchar(50) NOT NULL,
  `total_value` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ot`
--

CREATE TABLE `ot` (
  `employeeID` varchar(50) NOT NULL,
  `filing_date` date NOT NULL,
  `aot_from` varchar(20) NOT NULL,
  `aot_to` varchar(20) NOT NULL,
  `rate` varchar(20) NOT NULL,
  `hours` varchar(20) NOT NULL,
  `minutes` varchar(20) NOT NULL,
  `task` text NOT NULL,
  `authorized_by` text NOT NULL,
  `status` text NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `title` varchar(100) NOT NULL,
  `id_from` varchar(50) NOT NULL,
  `id_to` varchar(50) NOT NULL,
  `no_of_hours` varchar(50) NOT NULL,
  `conducted_by` varchar(50) NOT NULL,
  `attachments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training_sched`
--

CREATE TABLE `training_sched` (
  `employeeID` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leavedb`
--
ALTER TABLE `leavedb`
  ADD PRIMARY KEY (`date_of_filing`);

--
-- Indexes for table `mr`
--
ALTER TABLE `mr`
  ADD PRIMARY KEY (`date_assigned`);

--
-- Indexes for table `ot`
--
ALTER TABLE `ot`
  ADD PRIMARY KEY (`filing_date`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`title`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
