-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2018 at 10:54 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinebanking`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmers_account`
--

CREATE TABLE `farmers_account` (
  `FarmersID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `AdhaarNo` text NOT NULL,
  `AccountNo` text NOT NULL,
  `Mobile` text NOT NULL,
  `Address` text NOT NULL,
  `Password` text NOT NULL,
  `Status` int(11) NOT NULL,
  `CreatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmers_account`
--

INSERT INTO `farmers_account` (`FarmersID`, `Name`, `Email`, `AdhaarNo`, `AccountNo`, `Mobile`, `Address`, `Password`, `Status`, `CreatedOn`) VALUES
(1, 'sanjitha', 'sanjithareddy.p@gmail.com', '12345678', '1521421121', '9959706297', 'Hyderabad', '123456', 1, '0000-00-00 00:00:00'),
(2, 'pujitha', '', '123456789', '1521453226', '9000195116', 'Hyderabad', '123456', 1, '0000-00-00 00:00:00'),
(3, 'harshitha', '', '1234567890', '1521462963', '734251788', 'hyd', '123456', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `farmers_bank_cedentials`
--

CREATE TABLE `farmers_bank_cedentials` (
  `Id` int(11) NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `CreatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmers_bank_cedentials`
--

INSERT INTO `farmers_bank_cedentials` (`Id`, `Email`, `Password`, `CreatedOn`) VALUES
(1, 'admin@bank.com', '123456', '2018-03-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `farmers_loans`
--

CREATE TABLE `farmers_loans` (
  `ID` int(11) NOT NULL,
  `farmerId` text NOT NULL,
  `ApplicationId` text NOT NULL,
  `LoanAmount` text NOT NULL,
  `AppliedStatus` text NOT NULL,
  `ApproveStatus` text NOT NULL,
  `AnalyticsSuggestion` text NOT NULL,
  `PaidAmount` text NOT NULL,
  `Status` text NOT NULL,
  `FormatedDate` text NOT NULL,
  `CreatedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmers_loans`
--

INSERT INTO `farmers_loans` (`ID`, `farmerId`, `ApplicationId`, `LoanAmount`, `AppliedStatus`, `ApproveStatus`, `AnalyticsSuggestion`, `PaidAmount`, `Status`, `FormatedDate`, `CreatedOn`) VALUES
(5, '1', '1521288755', '100000', '1', '1', '', '80000', '1', '17 Mar 2018 05:42 pm', '2018-03-17 05:42:35'),
(6, '1', '1521288757', '50000', '1', '2', '', '30000', '1', '17 Mar 2018 05:42 pm', '2018-03-17 05:42:37'),
(7, '1', '1521288759', '100000', '1', '3', '', '60000', '1', '17 Mar 2018 05:42 pm', '2018-03-17 05:42:39'),
(10, '2', '1521453400', '50000', '1', '3', '', '10', '1', '19 Mar 2018 03:26 pm', '2018-03-19 03:26:40'),
(11, '3', '1521462991', '', '1', '0', '', '', '1', '19 Mar 2018 06:06 pm', '2018-03-19 06:06:31'),
(14, '3', '1521877371', '', '1', '0', '', '', '1', '24 Mar 2018 01:12 pm', '2018-03-24 01:12:51'),
(16, '1', '1522137121', '', '1', '0', '', '', '1', '27 Mar 2018 01:22 pm', '2018-03-27 01:22:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmers_account`
--
ALTER TABLE `farmers_account`
  ADD PRIMARY KEY (`FarmersID`);

--
-- Indexes for table `farmers_bank_cedentials`
--
ALTER TABLE `farmers_bank_cedentials`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `farmers_loans`
--
ALTER TABLE `farmers_loans`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farmers_account`
--
ALTER TABLE `farmers_account`
  MODIFY `FarmersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `farmers_bank_cedentials`
--
ALTER TABLE `farmers_bank_cedentials`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `farmers_loans`
--
ALTER TABLE `farmers_loans`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
