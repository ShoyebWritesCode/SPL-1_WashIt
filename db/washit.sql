-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 04:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `washit`
--

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `generateServiceId` () RETURNS INT(11) NO SQL BEGIN
DECLARE countId INT;
SELECT `serviceId` INTO countId from `serviceid`;


UPDATE `serviceid` SET `serviceId`= (countId+1) WHERE primaryid = 1 ;
RETURN countId+1;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `message` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`username`, `email`, `phonenumber`, `message`) VALUES
('ss', 'mdsoyeb@iut-dhaka.edu', '01767814400', '1234'),
('Abrar12', 'mdsoyeb@iut-dhaka.edu', '01273781', 'I lost my clothes '),
('Shoyeb007', 'a@gmail.com', '01767814400', 'lost cloths.'),
('Shoyeb007', 'a@gmail.com', '123', 'aaaabbb'),
('Shoyeb007', 'a@gmail.com', '123', 'aaaabbb'),
('', 'a@gmail.com', '123', 'qwe'),
('Shoyeb007', 'mdsoyeb@iut-dhaka.edu', '01767814400', 'mqw'),
('Shoyeb007', 'WWWW@gmail.com', '', ''),
('Shoyeb007', 'qwrt@gmail.com', '', ''),
('Shoyeb007', 'qwrt@gmail.com', '', ''),
('Shoyeb007', 'qwrt@gmail.com', '', ''),
('Shoyeb007', 'mdsoyeb@iut-dhaka.edu', '01767814400', 'mqw'),
('Shoyeb007', 'mdsoyeb@iut-dhaka.edu', '01767814400', 'mqw');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemId` int(2) NOT NULL,
  `itemName` varchar(45) NOT NULL,
  `price` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemId`, `itemName`, `price`) VALUES
(1, 'Shirt', 15),
(2, 'Pant', 15),
(3, 'Bedsheet', 15);

-- --------------------------------------------------------

--
-- Table structure for table `laundryservice`
--

CREATE TABLE `laundryservice` (
  `Pid` int(11) NOT NULL,
  `serviceId` int(11) NOT NULL,
  `memberId` int(11) NOT NULL,
  `staffId` int(11) NOT NULL,
  `dateIn` date NOT NULL,
  `dateOut` date NOT NULL,
  `serviceStatus` enum('F','NF') NOT NULL,
  `totalPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laundryservice`
--

INSERT INTO `laundryservice` (`Pid`, `serviceId`, `memberId`, `staffId`, `dateIn`, `dateOut`, `serviceStatus`, `totalPrice`) VALUES
(100, 82, 10001, 0, '2022-11-10', '2022-11-10', 'F', 45),
(101, 83, 10001, 0, '2022-11-10', '2022-11-15', 'F', 30),
(102, 84, 10001, 0, '2022-11-10', '2022-11-15', 'F', 30),
(103, 85, 10003, 0, '2022-11-10', '2022-11-16', 'F', 45),
(104, 86, 10001, 0, '2022-11-10', '2022-11-15', 'F', 30),
(105, 87, 10003, 0, '2022-11-10', '0000-00-00', 'F', 15),
(106, 88, 10001, 12, '2022-11-10', '2022-11-15', 'F', 30),
(107, 89, 10003, 12, '2022-11-10', '0000-00-00', 'NF', 30),
(108, 90, 10001, 0, '2022-11-15', '2022-11-15', 'F', 30),
(109, 91, 10001, 0, '2022-11-15', '2022-11-15', 'F', 30),
(110, 92, 10001, 0, '2022-11-15', '2022-11-15', 'F', 30),
(111, 93, 10001, 0, '2022-11-15', '0000-00-00', 'NF', 90),
(112, 94, 10003, 0, '2022-11-16', '2022-11-16', 'F', 45),
(113, 95, 10003, 0, '2022-12-20', '0000-00-00', 'NF', 60),
(114, 96, 2, 12, '2022-12-26', '0000-00-00', 'NF', 15);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `memberId` int(15) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `mobileNo` varchar(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `SID` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memberId`, `firstName`, `mobileNo`, `email`, `SID`, `password`) VALUES
(2, 'Shoyeb', '12315455', 'Shoyeb@gmail.com', '1', '7e58d63b60197ceb55a1c487989a3720'),
(3, 'Abrar', '1234567', 'abrar@gmail.com', '12345', '3f02ebe3d7929b091e3d8ccfde2f3bc6'),
(9999, 'Not_Identify', '1234567890', 'Not_Identify', 'Not_Identify', 'Not_Identify'),
(10000, 'Abrar68', '0176781440', 'abr@gmail.com', '', '81dc9bdb52d04dc20036dbd8313ed055'),
(10001, 'Shoyeb007', '0176781440', 'mdsoyeb11@iut-dhaka.edu', '200042157', '81dc9bdb52d04dc20036dbd8313ed055'),
(10002, 'Abc01', '0176781440', 'abc@gmail.com', '200042160', '81dc9bdb52d04dc20036dbd8313ed055'),
(10003, 'Abdul', '0130334104', 'abdul@gmail.com', '200042153', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `regisitem`
--

CREATE TABLE `regisitem` (
  `regisId` int(15) NOT NULL,
  `memberId` int(15) NOT NULL,
  `staffId` int(15) DEFAULT NULL,
  `serviceId` int(15) DEFAULT NULL,
  `itemId` int(15) DEFAULT NULL,
  `quantity` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regisitem`
--

INSERT INTO `regisitem` (`regisId`, `memberId`, `staffId`, `serviceId`, `itemId`, `quantity`) VALUES
(201, 10001, NULL, 82, 1, 3),
(202, 10001, NULL, 83, 1, 2),
(203, 10001, NULL, 84, 1, 2),
(204, 10003, NULL, 85, 1, 3),
(205, 10001, NULL, 86, 1, 2),
(206, 10003, NULL, 87, 1, 1),
(207, 10001, 12, 88, 1, 2),
(208, 10003, 12, 89, 2, 2),
(209, 10001, NULL, 90, 1, 2),
(210, 10001, NULL, 91, 3, 2),
(211, 10001, 0, 92, 3, 2),
(212, 10001, NULL, 93, 1, 3),
(213, 10001, NULL, 93, 2, 2),
(214, 10001, NULL, 93, 3, 1),
(215, 10003, NULL, 94, 1, 3),
(216, 10003, NULL, 95, 2, 4),
(217, 2, 12, 96, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `serviceid`
--

CREATE TABLE `serviceid` (
  `primaryid` int(11) NOT NULL,
  `serviceId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serviceid`
--

INSERT INTO `serviceid` (`primaryid`, `serviceId`) VALUES
(1, 96);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffId` int(15) NOT NULL,
  `citizenNo` varchar(13) DEFAULT NULL,
  `mobileNo` varchar(10) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `userStaff` varchar(45) NOT NULL,
  `passStaff` varchar(45) NOT NULL,
  `status` enum('STAFF','ADMIN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffId`, `citizenNo`, `mobileNo`, `email`, `userStaff`, `passStaff`, `status`) VALUES
(12, 'admin', 'admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN'),
(14, 'admin2mod', '12315455', 'admin2mod@gmail.com', 'admin2', 'c84258e9c39059a89ab77d846ddab909', 'ADMIN'),
(15, '1234', '1234', 'staff@gmail.com', 'staff', '1253208465b1efa876f982d8a9e73eef', 'STAFF'),
(16, '11', '11', '11', '11', '6512bd43d9caa6e02c990b0a82652dca', 'ADMIN'),
(17, 'asdf', 'asdf', 'asdf', 'asdf', '912ec803b2ce49e4a541068d495ab570', 'STAFF'),
(18, '12345', '1234567', 'abrarmahmud@iut-dhaka.edu', '1234', '81dc9bdb52d04dc20036dbd8313ed055', 'ADMIN'),
(19, '12345', '12345', 'a@gmail.com', 'Abbas', '81dc9bdb52d04dc20036dbd8313ed055', 'STAFF'),
(20, '1234', '1234', 'mdsoyeb181811@gmail.com', 'Shoyeb', '81dc9bdb52d04dc20036dbd8313ed055', 'STAFF');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'ss', 'sss@iut-dhaka.edu', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Abrar12', 'abrar12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'Shoyeb', 'mdsoyeb@iut-dhaka.edu', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemId`);

--
-- Indexes for table `laundryservice`
--
ALTER TABLE `laundryservice`
  ADD PRIMARY KEY (`Pid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memberId`);

--
-- Indexes for table `regisitem`
--
ALTER TABLE `regisitem`
  ADD PRIMARY KEY (`regisId`);

--
-- Indexes for table `serviceid`
--
ALTER TABLE `serviceid`
  ADD PRIMARY KEY (`primaryid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffId`),
  ADD KEY `email_2` (`email`),
  ADD KEY `email_3` (`email`),
  ADD KEY `email_4` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemId` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `laundryservice`
--
ALTER TABLE `laundryservice`
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `memberId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10004;

--
-- AUTO_INCREMENT for table `regisitem`
--
ALTER TABLE `regisitem`
  MODIFY `regisId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `serviceid`
--
ALTER TABLE `serviceid`
  MODIFY `primaryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
