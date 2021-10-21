-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 21, 2021 at 02:03 PM
-- Server version: 10.4.14-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u260543756_bichoobag`
--

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `host` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(355) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bcc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`host`, `mail`, `password`, `bcc`) VALUES
('https://mail.hostinger.com', 'info@og.in', 'vIrX*@', 'oo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `userbase`
--

CREATE TABLE `userbase` (
  `Code` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `Password` varchar(55) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Bank` varchar(255) DEFAULT NULL,
  `Bankifsc` varchar(55) DEFAULT NULL,
  `Banknumber` varchar(255) DEFAULT NULL,
  `Upipaytm` varchar(255) DEFAULT NULL,
  `Role` int(2) DEFAULT NULL,
  `Singupdate` date DEFAULT NULL,
  `Level` int(55) DEFAULT NULL,
  `Profit` int(255) DEFAULT NULL,
  `Ltree` varchar(255) DEFAULT NULL,
  `Rtree` varchar(255) DEFAULT NULL,
  `Ctree` varchar(255) DEFAULT NULL,
  `Status` int(2) DEFAULT NULL,
  `Sponsor` varchar(255) DEFAULT NULL,
  `Totaldownline` int(255) DEFAULT NULL,
  `Levelactive` varchar(255) DEFAULT NULL,
  `Pancard` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userbase`
--

INSERT INTO `userbase` (`Code`, `Name`, `Mobile`, `Password`, `Email`, `Bank`, `Bankifsc`, `Banknumber`, `Upipaytm`, `Role`, `Singupdate`, `Level`, `Profit`, `Ltree`, `Rtree`, `Ctree`, `Status`, `Sponsor`, `Totaldownline`, `Levelactive`, `Pancard`) VALUES
('BB1234', 'Deepak Rathi', '1234567890', 'SGVsbG8=', 'admin1@gmail.com', 'sbi', 'sbi23', '232323444444444775', 'sagar@axis', 1, '2020-08-14', 1, 0, 'BB503676', 'BB588551', 'BB282317', 1, 'Root', 2, '0', '5646511'),
('BB2124', 'Vineet', '9058928030', 'MDExOTk1', '', '', '', NULL, '', 0, '2021-07-14', 1, 0, '', '', '', 1, ' BB588551', 0, '0', 'DJQPD8627A'),
('BB282317', 'Priya ', '8923521373', 'amF0dGl0dWRlOTg5Nw==', 'sagarsharma995899@gmail.com', '', '', NULL, '', 0, '2021-06-22', 1, 0, '', '', '', 1, ' BB1234', 0, '0', 'DJQPD8627A'),
('BB30004', 'Omprkash Lata', '7300330030', 'MTEyMjMz', '', '', '', NULL, '', 0, '2021-06-28', 1, 0, '', '', '', 1, ' BB588551', 0, '0', 'BKNPP5766N'),
('BB503676', 'Ranveer Dhaka', '9536556627', 'amF0dGl0dWRlOTg5Nw==', '', '', '', NULL, '', 0, '2021-06-22', 1, 0, '', '', '', 1, ' BB1234', 0, '0', 'DJQPD8627A'),
('BB548743', 'Tushar kumar garg ', '8171393126', 'dHVzaGFyZ2FyZw==', '', '', '', NULL, '', 0, '2021-07-02', 1, 0, '', '', '', 1, ' BB588551', 0, '0', NULL),
('BB588551', 'Shakti dhaka', '9897256156', 'amF0dGl0dWRlOTg5Nw==', 'sagar@gmail.com', '', '', NULL, '', 0, '2021-06-22', 2, 0, 'BB2124', 'BB30004', 'BB548743', 1, ' BB1234', 3, '0', 'DJQPD8627A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userbase`
--
ALTER TABLE `userbase`
  ADD PRIMARY KEY (`Code`),
  ADD UNIQUE KEY `Code` (`Code`),
  ADD UNIQUE KEY `Mobile` (`Mobile`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
