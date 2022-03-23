-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 09:06 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brief5`
--

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `idP` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tele` int(14) NOT NULL,
  `city` varchar(100) NOT NULL,
  `dateN` date NOT NULL,
  `password` varchar(1000) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`idP`, `firstname`, `lastname`, `email`, `tele`, `city`, `dateN`, `password`, `role`) VALUES
(2, 'charifa', 'hniguira', 'charifah1112@gmail.com', 624535746, 'safi', '2000-12-11', '123456789', 1),
(3, 'ashraf', 'hniguira', 'ashraf@gmail.com', 624535764, 'safi', '2000-12-11', '12345678', 2),
(4, 'faty', 'hniguira', 'faty@gmail.com', 642356789, 'safi', '2006-07-10', '', 3),
(5, 'laila', 'lahmiri', 'laila@gmail.com', 678987645, 'safi', '1999-01-01', '1234567', 2),
(6, 'mohammed', 'hniguira', 'mohammed@gmail.com', 678435676, 'safi', '1989-07-10', '123456', 2),
(7, 'nawal', 'lahmiri', 'nawal@gmail.com', 12345678, 'safi', '1987-01-01', 'AZERTYUIOP', 2),
(10, 'idriss', 'ait hadou', 'idriss@gmail.com', 678987645, 'safi', '1999-06-09', 'WXCVBN', 2);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `idRes` int(11) NOT NULL,
  `status` enum('valid','invalid') NOT NULL DEFAULT 'valid',
  `idP` int(11) NOT NULL,
  `idT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`idRes`, `status`, `idP`, `idT`) VALUES
(1, 'valid', 3, 2),
(2, 'valid', 4, 4),
(3, 'valid', 10, 1),
(4, 'valid', 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `idR` int(11) NOT NULL,
  `nom` enum('admin','client','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`idR`, `nom`) VALUES
(1, 'admin'),
(2, 'client'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `idTr` int(11) NOT NULL,
  `nomT` varchar(100) NOT NULL,
  `nbrPlace` int(11) NOT NULL,
  `class` varchar(100) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`idTr`, `nomT`, `nbrPlace`, `class`, `numero`) VALUES
(1, 'train1', 100, 'c1', 12345),
(2, 'train2', 200, 'c2', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `idT` int(11) NOT NULL,
  `gareD` varchar(100) NOT NULL,
  `gareA` varchar(100) NOT NULL,
  `HoursD` datetime NOT NULL DEFAULT current_timestamp(),
  `HoursA` datetime NOT NULL DEFAULT current_timestamp(),
  `price` double NOT NULL,
  `states` enum('valid','invalid') NOT NULL DEFAULT 'valid',
  `idTr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`idT`, `gareD`, `gareA`, `HoursD`, `HoursA`, `price`, `states`, `idTr`) VALUES
(1, 'safi', 'casa', '2022-02-23 15:58:14', '2022-02-24 15:57:05', 50, 'invalid', 1),
(2, 'fes', 'casa', '2022-02-23 15:58:42', '2022-02-25 15:57:05', 900, 'invalid', 2),
(3, 'tanger', 'safi', '2022-02-23 17:02:00', '2022-02-24 17:02:00', 455, 'valid', 1),
(4, 'meknes', 'marrakech', '2022-02-23 20:19:00', '2022-02-25 20:19:00', 546, 'valid', 2),
(5, 'fes', 'safi', '2022-02-28 13:42:00', '2022-03-01 13:42:00', 546, 'invalid', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`idP`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idRes`),
  ADD KEY `idP` (`idP`),
  ADD KEY `idT` (`idT`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idR`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`idTr`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`idT`),
  ADD KEY `idTr` (`idTr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `idP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idRes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `idR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `idTr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `idT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`idR`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`idP`) REFERENCES `person` (`idP`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`idT`) REFERENCES `trips` (`idT`);

--
-- Constraints for table `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `trips_ibfk_1` FOREIGN KEY (`idTr`) REFERENCES `train` (`idTr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
