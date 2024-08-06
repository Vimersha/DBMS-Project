-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 10:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoo_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `animalID` varchar(20) NOT NULL,
  `speciesID` varchar(20) DEFAULT NULL,
  `animalname` varchar(20) DEFAULT NULL,
  `noofmale` int(11) DEFAULT NULL,
  `nooffemale` int(11) DEFAULT NULL,
  `animaltype` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`animalID`, `speciesID`, `animalname`, `noofmale`, `nooffemale`, `animaltype`) VALUES
('CAQDO', 'CAQ', 'Dolphin', 7, 8, 'Carnivores'),
('CAQJF', 'CAQ', 'Jellyfish', 7, 7, 'Carnivores'),
('CAQSH', 'CAQ', 'Shark', 2, 2, 'Carnivores'),
('CAQWH', 'CAQ', 'Whale', 4, 3, 'Carnivores'),
('EAMHY', 'EAM', 'Hyra', 3, 3, 'Omnivores'),
('EAMSA', 'EAM', 'Salamander', 4, 1, 'Carnivores'),
('EAQFI', 'EAQ', 'Fishes', 50, 30, 'Omnivores'),
('EAQHI', 'EAQ', 'Hippo', 5, 3, 'Herbivores'),
('EAQLO', 'EAQ', 'Lobster', 2, 6, 'Omnivores'),
('EAQOC', 'EAQ', 'Octopus', 5, 3, 'Carnivores'),
('EAQSH', 'EAQ', 'Seahorse', 4, 8, 'Carnivores'),
('EAQTU', 'EAQ', 'Turtle', 5, 3, 'Omnivores'),
('NTRCH', 'NTR', 'Cheetah', 2, 8, 'Carnivores'),
('NTREL', 'NTR', 'Elephant', 5, 3, 'Herbivores'),
('NTRHY', 'NTR', 'Hyena', 2, 4, 'Carnivores'),
('NTRJA', 'NTR', 'Jaguar', 6, 3, 'Carnivores'),
('NTRKO', 'NTR', 'Koala', 4, 4, 'Herbivores'),
('NTRLE', 'NTR', 'Leopard', 3, 4, 'Carnivores'),
('NTRLI', 'NTR', 'Lion', 5, 4, 'Carnivores'),
('NTROR', 'NTR', 'Orangutan', 5, 6, 'Omnivores'),
('NTRSL', 'NTR', 'Sloth', 4, 8, 'Omnivores'),
('NTRTI', 'NTR', 'Tiger', 7, 2, 'Carnivores'),
('SAEFL', 'SAE', 'Flamingo', 2, 5, 'Omnivores'),
('SAEHB', 'SAE', 'Hornbill', 4, 5, 'Omnivores'),
('SAEKF', 'SAE', 'Kingfisher', 3, 1, 'Omnivores'),
('SAEPA', 'SAE', 'Parrot', 3, 7, 'Omnivores'),
('SAEPC', 'SAE', 'Peacock', 7, 8, 'Omnivores'),
('SAEPE', 'SAE', 'Pelican', 5, 3, 'Carnivores'),
('SAETU', 'SAE', 'Turkey', 3, 3, 'Omnivores'),
('SAEWP', 'SAE', 'Woodpecker', 3, 7, 'Omnivores'),
('SARCH', 'SAR', 'Chameleon', 3, 2, 'Omnivores'),
('SARMO', 'SAR', 'Monkey', 12, 12, 'Omnivores'),
('WAMCR', 'WAM', 'Crocodile', 4, 3, 'Carnivores'),
('WAMFR', 'WAM', 'Frog', 7, 2, 'Omnivores'),
('WAMSN', 'WAM', 'Snake', 6, 5, 'Carnivores'),
('WTRDE', 'WTR', 'Deer', 11, 9, 'Herbivores'),
('WTRKA', 'WTR', 'Kangaroo', 5, 3, 'Herbivores'),
('WTRZE', 'WTR', 'Zebra', 7, 3, 'Herbivores');

-- --------------------------------------------------------

--
-- Table structure for table `safari`
--

CREATE TABLE `safari` (
  `safariID` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `sectorID` varchar(20) DEFAULT NULL,
  `vehicletype` varchar(20) DEFAULT NULL,
  `ticketprice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `safari`
--

INSERT INTO `safari` (`safariID`, `username`, `sectorID`, `vehicletype`, `ticketprice`) VALUES
(1, 'ab', 'N', 'bus', 200);

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `sectorID` varchar(20) NOT NULL,
  `sector` varchar(20) NOT NULL,
  `area` int(11) NOT NULL,
  `noofspecies` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`sectorID`, `sector`, `area`, `noofspecies`) VALUES
('C', 'Center', 29, 56),
('E', 'East', 35, 138),
('N', 'North', 30, 96),
('S', 'South', 32, 109),
('W', 'West', 34, 94);

-- --------------------------------------------------------

--
-- Table structure for table `species`
--

CREATE TABLE `species` (
  `speciesID` varchar(20) NOT NULL,
  `sectorID` varchar(20) DEFAULT NULL,
  `speciestype` varchar(20) DEFAULT NULL,
  `noofspecies` int(11) DEFAULT NULL,
  `staffgrpID` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `species`
--

INSERT INTO `species` (`speciesID`, `sectorID`, `speciestype`, `noofspecies`, `staffgrpID`) VALUES
('CAQ', 'C', 'Aquatic', 56, 'SG07'),
('EAM', 'E', 'Amphibians', 14, 'SG05'),
('EAQ', 'E', 'Aquatic', 124, 'SG06'),
('NAR', 'N', 'Arboreal', 38, 'SG02'),
('NTR', 'N', 'Terrestrial', 58, 'SG01'),
('SAE', 'S', 'Aerial', 68, 'SG10'),
('SAQ', 'S', 'Aquatic', 56, 'SG08'),
('SAR', 'S', 'Arboreal', 41, 'SG09'),
('WAM', 'W', 'Amphibians', 32, 'SG04'),
('WTR', 'W', 'Terrestrial', 62, 'SG03');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffgrpID` varchar(20) NOT NULL,
  `noofstaff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffgrpID`, `noofstaff`) VALUES
('SG01', 6),
('SG02', 7),
('SG03', 5),
('SG04', 10),
('SG05', 8),
('SG06', 11),
('SG07', 7),
('SG08', 9),
('SG09', 8),
('SG10', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('ab', 'b'),
('varsha', 'abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`animalID`),
  ADD KEY `speciesID` (`speciesID`);

--
-- Indexes for table `safari`
--
ALTER TABLE `safari`
  ADD PRIMARY KEY (`safariID`),
  ADD KEY `username` (`username`),
  ADD KEY `sectorID` (`sectorID`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`sectorID`);

--
-- Indexes for table `species`
--
ALTER TABLE `species`
  ADD PRIMARY KEY (`speciesID`),
  ADD KEY `sectorID` (`sectorID`),
  ADD KEY `staffgrpID` (`staffgrpID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffgrpID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animals`
--
ALTER TABLE `animals`
  ADD CONSTRAINT `animals_ibfk_1` FOREIGN KEY (`speciesID`) REFERENCES `species` (`speciesID`);

--
-- Constraints for table `safari`
--
ALTER TABLE `safari`
  ADD CONSTRAINT `safari_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `safari_ibfk_2` FOREIGN KEY (`sectorID`) REFERENCES `sector` (`sectorID`);

--
-- Constraints for table `species`
--
ALTER TABLE `species`
  ADD CONSTRAINT `species_ibfk_1` FOREIGN KEY (`sectorID`) REFERENCES `sector` (`sectorID`),
  ADD CONSTRAINT `species_ibfk_2` FOREIGN KEY (`staffgrpID`) REFERENCES `staff` (`staffgrpID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
