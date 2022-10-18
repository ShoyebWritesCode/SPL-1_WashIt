-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 04:37 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

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
('abrarmahmud', 'abrarmahmud@iut-dhaka.edu', '345325', 'gwergwr'),
('abrarmahmud', 'abrarmahmud@iut-dhaka.edu', '12341', 'hedtjynyt'),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', 'abrarmahmud@iut-dhaka.edu', '12341', 'abrar'),
('abrarmahmud', 'abrarmahmud@iut-dhaka.edu', '12341', 'abrar'),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', 'abrarmahmud@iut-dhaka.edu', '12341', 'ybtybtuzbfbu'),
('abrarmahmud', 'abrarmahmud@iut-dhaka.edu', '12341', 'ybtybtuzbfbu'),
('abrarmahmud', 'abrarmahmud@iut-dhaka.edu', 'f98324792735', 'gvbjgb jh h k '),
('abrarmahmud', 'abrarmahmud@iut-dhaka.edu', '5757678', 'tftuvuuvbu'),
('abrarmahmud', 'abrarmahmud@iut-dhaka.edu', '5757678', 'tftuvuuvbu'),
('abrarmahmud', 'abrarmahmud970@gmail.com', '78678687', 'ghv ghv jj '),
('abrarmahmud', 'abrarmahmud970@gmail.com', '78678687', 'ghv ghv jj '),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', 'abrarmahmud@iut-dhaka.edu', '12e312', 'gvfeary gtaery'),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', 'abc'),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', 'abc'),
('abrarmahmud', '', '', ''),
('abrarmahmud', '', '', 'vvggv'),
('abrarmahmud', '', '', 'vvggv'),
('abrarmahmud', '', '', 'vgyv hujjuh'),
('abrarmahmud', '', '', ''),
('abc', 'abrarmahmud@iut-dhaka.edu', '12341', 'dhbawhdbck ');

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
(1, 'Shoyeb', 'mdsoyeb@iut-dhaka.edu', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Abrar', 'abrarmahmud@iut-dhaka.edu', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'Abdul', 'abdul@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'abrarmahmud', 'abrarmahmud970@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'Ashfaq', 'ashfaq@iut.edu', '202cb962ac59075b964b07152d234b70'),
(8, 'abrar', 'abrarmahmud094@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
