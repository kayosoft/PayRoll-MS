-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2020 at 11:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll _db`
--

-- --------------------------------------------------------

--
-- Table structure for table `allowances`
--

CREATE TABLE `allowances` (
  `A_code` varchar(20) NOT NULL COMMENT 'Allowance code',
  `A_title` varchar(40) NOT NULL COMMENT 'Allowance title',
  `A_descr` varchar(255) NOT NULL COMMENT 'Allawance description'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `audit_trail`
--

CREATE TABLE `audit_trail` (
  `id` int(20) NOT NULL,
  `userID` int(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `userIP` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `country` varchar(40) DEFAULT NULL,
  `runningMonth` varchar(40) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `actionDate` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audit_trail`
--

INSERT INTO `audit_trail` (`id`, `userID`, `email`, `userIP`, `city`, `country`, `runningMonth`, `action`, `actionDate`) VALUES
(29, 3, 'code@code.com', '::1', '', '', NULL, 'Logged into the system', '2020-08-23 21:41:02'),
(30, 3, 'code@code.com', '::1', '', '', NULL, 'Logged into the system', '2020-08-25 21:28:29'),
(31, 3, 'code@code.com', '::1', '', '', NULL, 'Logged into the system', '2020-09-01 08:14:39');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `bankCode` varchar(20) NOT NULL,
  `bankName` varchar(50) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `postalAddress` varchar(255) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`bankCode`, `bankName`, `email`, `postalAddress`, `city`) VALUES
('CENT12', 'CENTENARY BANK', 'cent@centenary.com', 'P.0.BOX 00032, KAMPALA RD.', 'KAMPALA');

-- --------------------------------------------------------

--
-- Table structure for table `companydetails`
--

CREATE TABLE `companydetails` (
  `companyCode` int(30) NOT NULL,
  `companyName` varchar(100) NOT NULL,
  `postalAddress` varchar(255) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `country` varchar(40) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `workHours` int(10) DEFAULT NULL,
  `workDays` int(10) DEFAULT NULL,
  `ssEmployee` varchar(10) DEFAULT NULL,
  `ssEmployer` varchar(10) DEFAULT NULL,
  `ssProvider` varchar(40) DEFAULT NULL,
  `taxExcepted` int(10) DEFAULT NULL,
  `TIN` varchar(255) DEFAULT NULL,
  `regDate` datetime DEFAULT current_timestamp() COMMENT 'registration date'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companydetails`
--

INSERT INTO `companydetails` (`companyCode`, `companyName`, `postalAddress`, `email`, `country`, `city`, `workHours`, `workDays`, `ssEmployee`, `ssEmployer`, `ssProvider`, `taxExcepted`, `TIN`, `regDate`) VALUES
(2, 'X Company LTD', 'P.O.BOX 1200, KAMPAL RD', 'x@x.com', NULL, 'Kampala', NULL, NULL, NULL, NULL, NULL, NULL, '5768844', '2020-08-23 22:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `deptID` varchar(30) NOT NULL,
  `deptName` varchar(40) DEFAULT NULL,
  `HoD` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`deptID`, `deptName`, `HoD`) VALUES
('ICT001', 'ICT Department', 'PF001'),
('PROC443', 'PROCUREMENT', 'PF2002');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `empNo` varchar(20) NOT NULL COMMENT 'Employee Number  ',
  `firstName` varchar(15) DEFAULT NULL,
  `surName` varchar(15) DEFAULT NULL,
  `otherName` varchar(15) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `DoB` date DEFAULT NULL,
  `NIN` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `ssNo` varchar(30) DEFAULT NULL,
  `TIN` varchar(30) DEFAULT NULL,
  `bankAccount` varchar(20) DEFAULT NULL,
  `tellNo` varchar(15) DEFAULT NULL,
  `startDate` date DEFAULT current_timestamp(),
  `userID` int(10) DEFAULT NULL,
  `bankCode` varchar(20) DEFAULT NULL,
  `jobCode` varchar(10) DEFAULT NULL,
  `deptID` varchar(30) DEFAULT NULL,
  `sID` varchar(10) DEFAULT NULL,
  `A_code` varchar(20) DEFAULT NULL,
  `transactionID` int(255) DEFAULT NULL,
  `loanID` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`empNo`, `firstName`, `surName`, `otherName`, `gender`, `DoB`, `NIN`, `email`, `ssNo`, `TIN`, `bankAccount`, `tellNo`, `startDate`, `userID`, `bankCode`, `jobCode`, `deptID`, `sID`, `A_code`, `transactionID`, `loanID`) VALUES
('PF001', 'Paddy', 'Ainebyona', 'Alkham', 'Male', '1990-12-12', '1234567890', 'test@gmail.com', '23456', '5768844', '8765433332', '256787539824', '2020-08-23', NULL, 'CENT12', 'ICTM01', 'ICT001', 'M1', NULL, NULL, 'LN01'),
('PF002', 'Jalaludin', 'Kalumba', 'Rig', 'Male', '1990-08-21', '1234567890', 'kalumbajalaludin@gmail.com', '23456', '5768844', '09876543', '256787539824', '2020-09-01', NULL, 'CENT12', 'AC001', 'PROC443', 'M1', NULL, NULL, 'LN02'),
('PFOO3', 'Hassan', 'Katweere', 'Alkham', 'Male', '2000-02-02', '23456876', 'kalu@gmail.com', '23456', '5768844', '09876543', '256787539824', '2020-09-01', NULL, 'CENT12', 'ICTM01', 'ICT001', 'M1', NULL, NULL, 'LNPFOO3');

-- --------------------------------------------------------

--
-- Table structure for table `jobtittles`
--

CREATE TABLE `jobtittles` (
  `jobCode` varchar(10) NOT NULL,
  `jobTittle` varchar(40) DEFAULT NULL,
  `jobDescription` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobtittles`
--

INSERT INTO `jobtittles` (`jobCode`, `jobTittle`, `jobDescription`) VALUES
('AC001', 'ACCOUNTANT', NULL),
('ICTM01', 'ICT MANAGER', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `loanID` varchar(20) NOT NULL,
  `empNo` varchar(30) DEFAULT NULL,
  `loanAmount` varchar(255) DEFAULT NULL,
  `loanDeduction` varchar(255) DEFAULT NULL,
  `loanBalance` varchar(255) DEFAULT NULL,
  `loanAddition` varchar(255) DEFAULT NULL,
  `loanAdditionRef` varchar(255) DEFAULT NULL,
  `advanceAmount` varchar(255) DEFAULT NULL,
  `advanceDeduction` varchar(255) DEFAULT NULL,
  `advanceBalance` varchar(255) DEFAULT NULL,
  `advanceAddition` varchar(255) DEFAULT NULL,
  `advanceAdditionRef` varchar(255) DEFAULT NULL,
  `hirePurchaseAmount` varchar(255) DEFAULT NULL,
  `hirePurchaseDeduction` varchar(255) DEFAULT NULL,
  `hirePurchaseBalance` varchar(255) DEFAULT NULL,
  `hirePurchaseAddition` varchar(255) DEFAULT NULL,
  `hirePurchaseAdditionRef` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`loanID`, `empNo`, `loanAmount`, `loanDeduction`, `loanBalance`, `loanAddition`, `loanAdditionRef`, `advanceAmount`, `advanceDeduction`, `advanceBalance`, `advanceAddition`, `advanceAdditionRef`, `hirePurchaseAmount`, `hirePurchaseDeduction`, `hirePurchaseBalance`, `hirePurchaseAddition`, `hirePurchaseAdditionRef`) VALUES
('LN01', 'PF001', '300000', '0', '300000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('LN02', 'PF002', '1000000', '0', '1000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('LNPFOO3', 'PFOO3', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payerate`
--

CREATE TABLE `payerate` (
  `rateID` int(11) NOT NULL,
  `lowerLimit` varchar(255) DEFAULT NULL,
  `upperLimit` varchar(255) DEFAULT NULL,
  `fixedTax` varchar(255) DEFAULT NULL,
  `percentage` double(50,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `id` int(11) NOT NULL,
  `empNo` varchar(30) DEFAULT NULL,
  `empName` varchar(255) DEFAULT NULL,
  `deptName` varchar(255) DEFAULT NULL,
  `jobTitle` varchar(255) DEFAULT NULL,
  `TIN` varchar(255) DEFAULT NULL,
  `ssNo` varchar(20) DEFAULT NULL,
  `bankAccount` varchar(255) DEFAULT NULL,
  `bankCode` varchar(255) DEFAULT NULL,
  `salaryScale` varchar(255) DEFAULT NULL,
  `salaryStep` varchar(255) DEFAULT NULL,
  `salaryAmount` varchar(255) DEFAULT NULL,
  `overtime` datetime DEFAULT NULL,
  `actingAllowance` varchar(255) DEFAULT NULL,
  `refund` varchar(255) DEFAULT NULL,
  `otherAllowance` varchar(255) DEFAULT NULL,
  `tellDeduction` varchar(255) DEFAULT NULL,
  `waterDeduction` varchar(255) DEFAULT NULL,
  `loan` varchar(255) DEFAULT NULL,
  `advance` varchar(255) DEFAULT NULL,
  `SACCO` varchar(255) DEFAULT NULL,
  `PAYE` varchar(255) DEFAULT NULL,
  `ssContribution` varchar(255) DEFAULT NULL,
  `otherDeductions` varchar(255) DEFAULT NULL,
  `totalEarning` varchar(255) DEFAULT NULL,
  `totalDeduction` varchar(255) DEFAULT NULL,
  `netPay` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`id`, `empNo`, `empName`, `deptName`, `jobTitle`, `TIN`, `ssNo`, `bankAccount`, `bankCode`, `salaryScale`, `salaryStep`, `salaryAmount`, `overtime`, `actingAllowance`, `refund`, `otherAllowance`, `tellDeduction`, `waterDeduction`, `loan`, `advance`, `SACCO`, `PAYE`, `ssContribution`, `otherDeductions`, `totalEarning`, `totalDeduction`, `netPay`) VALUES
(1, 'PF001', 'Paddy  Alkham  Ainebyona', 'ICT Department', 'ICT MANAGER', '5768844', '23456', '8765433332', 'CENTENARY BANK', 'U1', 'S1', '4000000', NULL, '100000', NULL, NULL, NULL, NULL, '300000', NULL, NULL, NULL, NULL, NULL, '4100000', '300000', '3800000'),
(2, 'PF002', 'Jalaludin  Rig  Kalumba', 'PROCUREMENT', 'ACCOUNTANT', '5768844', '23456', '09876543', 'CENTENARY BANK', 'U1', 'S1', '4000000', NULL, '100000', NULL, NULL, NULL, NULL, '1000000', NULL, NULL, NULL, NULL, NULL, '4100000', '1000000', '3100000'),
(3, 'PFOO3', 'Hassan  Alkham  Katweere', 'ICT Department', 'ICT MANAGER', '5768844', '23456', '09876543', 'CENTENARY BANK', 'U1', 'S1', '4000000', NULL, '100000', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, '4100000', '0', '4100000');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `sID` varchar(10) NOT NULL COMMENT 'Salary ID',
  `salaryScale` varchar(255) DEFAULT NULL,
  `salaryStep` varchar(255) DEFAULT NULL,
  `basicSalary` double(10,2) DEFAULT NULL,
  `A1` double(10,0) DEFAULT NULL,
  `A2` double(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`sID`, `salaryScale`, `salaryStep`, `basicSalary`, `A1`, `A2`) VALUES
('M1', 'U1', 'S1', 4000000.00, 100000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transactionID` int(255) NOT NULL,
  `empNo` varchar(30) DEFAULT NULL,
  `overtime` int(10) DEFAULT NULL,
  `actingAllowances` varchar(30) DEFAULT NULL,
  `refund` varchar(30) DEFAULT NULL,
  `otherAllowances` varchar(30) DEFAULT NULL,
  `tellDeduction` varchar(30) DEFAULT NULL,
  `waterDeduction` varchar(30) DEFAULT NULL,
  `otherDeduction` varchar(30) DEFAULT NULL,
  `noPay` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(10) NOT NULL,
  `firstName` varchar(30) DEFAULT NULL,
  `lastName` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `tellNo` varchar(20) DEFAULT NULL,
  `accessLevel` varchar(20) DEFAULT NULL,
  `regDate` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `lastName`, `password`, `email`, `tellNo`, `accessLevel`, `regDate`) VALUES
(3, 'Code', 'Studio', 'code', 'code@code.com', '25670000000', 'System Admin', '2020-08-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allowances`
--
ALTER TABLE `allowances`
  ADD PRIMARY KEY (`A_code`);

--
-- Indexes for table `audit_trail`
--
ALTER TABLE `audit_trail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`bankCode`);

--
-- Indexes for table `companydetails`
--
ALTER TABLE `companydetails`
  ADD PRIMARY KEY (`companyCode`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`deptID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`empNo`),
  ADD KEY `userID` (`userID`),
  ADD KEY `bankCode` (`bankCode`),
  ADD KEY `jobCode` (`jobCode`),
  ADD KEY `deptID` (`deptID`),
  ADD KEY `A_code` (`A_code`),
  ADD KEY `transactionID` (`transactionID`),
  ADD KEY `loanID` (`loanID`),
  ADD KEY `sID` (`sID`);

--
-- Indexes for table `jobtittles`
--
ALTER TABLE `jobtittles`
  ADD PRIMARY KEY (`jobCode`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`loanID`);

--
-- Indexes for table `payerate`
--
ALTER TABLE `payerate`
  ADD PRIMARY KEY (`rateID`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`sID`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transactionID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audit_trail`
--
ALTER TABLE `audit_trail`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `companydetails`
--
ALTER TABLE `companydetails`
  MODIFY `companyCode` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payerate`
--
ALTER TABLE `payerate`
  MODIFY `rateID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transactionID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `audit_trail`
--
ALTER TABLE `audit_trail`
  ADD CONSTRAINT `audit_trail_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`bankCode`) REFERENCES `banks` (`bankCode`),
  ADD CONSTRAINT `employees_ibfk_3` FOREIGN KEY (`jobCode`) REFERENCES `jobtittles` (`jobCode`),
  ADD CONSTRAINT `employees_ibfk_4` FOREIGN KEY (`deptID`) REFERENCES `departments` (`deptID`),
  ADD CONSTRAINT `employees_ibfk_6` FOREIGN KEY (`A_code`) REFERENCES `allowances` (`A_code`),
  ADD CONSTRAINT `employees_ibfk_7` FOREIGN KEY (`transactionID`) REFERENCES `transactions` (`transactionID`),
  ADD CONSTRAINT `employees_ibfk_8` FOREIGN KEY (`loanID`) REFERENCES `loans` (`loanID`),
  ADD CONSTRAINT `employees_ibfk_9` FOREIGN KEY (`sID`) REFERENCES `salary` (`sID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
