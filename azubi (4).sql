-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 04:52 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `azubi`
--

-- --------------------------------------------------------

--
-- Table structure for table `azubi`
--

CREATE TABLE `azubi` (
  `A_ID` int(11) NOT NULL,
  `Vorname` varchar(256) DEFAULT NULL,
  `Nachname` varchar(256) DEFAULT NULL,
  `Straße` varchar(256) DEFAULT NULL,
  `Hausnummer` varchar(256) DEFAULT NULL,
  `PLZ` int(11) DEFAULT NULL,
  `Ort` varchar(256) DEFAULT NULL,
  `Email` varchar(256) DEFAULT NULL,
  `B_ID` int(11) NOT NULL,
  `K_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `beruf`
--

CREATE TABLE `beruf` (
  `B_ID` int(11) NOT NULL,
  `Beruf` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `klasse`
--

CREATE TABLE `klasse` (
  `K_ID` int(11) NOT NULL,
  `Klasse` varchar(256) DEFAULT NULL,
  `Klassenlehrer` varchar(256) DEFAULT NULL,
  `S_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schule`
--

CREATE TABLE `schule` (
  `S_ID` int(11) NOT NULL,
  `Schulname` varchar(256) DEFAULT NULL,
  `Straße` varchar(256) DEFAULT NULL,
  `Hausnummer` varchar(256) DEFAULT NULL,
  `Plz` int(11) DEFAULT NULL,
  `Ort` varchar(256) DEFAULT NULL,
  `Email` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `azubi`
--
ALTER TABLE `azubi`
  ADD PRIMARY KEY (`A_ID`),
  ADD KEY `B_ID` (`B_ID`),
  ADD KEY `K_ID` (`K_ID`);

--
-- Indexes for table `beruf`
--
ALTER TABLE `beruf`
  ADD PRIMARY KEY (`B_ID`);

--
-- Indexes for table `klasse`
--
ALTER TABLE `klasse`
  ADD PRIMARY KEY (`K_ID`),
  ADD KEY `Schule_ID` (`S_ID`);

--
-- Indexes for table `schule`
--
ALTER TABLE `schule`
  ADD PRIMARY KEY (`S_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `azubi`
--
ALTER TABLE `azubi`
  MODIFY `A_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beruf`
--
ALTER TABLE `beruf`
  MODIFY `B_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `klasse`
--
ALTER TABLE `klasse`
  MODIFY `K_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schule`
--
ALTER TABLE `schule`
  MODIFY `S_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `azubi`
--
ALTER TABLE `azubi`
  ADD CONSTRAINT `azubi_ibfk_1` FOREIGN KEY (`B_ID`) REFERENCES `beruf` (`B_ID`),
  ADD CONSTRAINT `azubi_ibfk_2` FOREIGN KEY (`K_ID`) REFERENCES `klasse` (`K_ID`);

--
-- Constraints for table `klasse`
--
ALTER TABLE `klasse`
  ADD CONSTRAINT `klasse_ibfk_1` FOREIGN KEY (`S_ID`) REFERENCES `schule` (`S_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
