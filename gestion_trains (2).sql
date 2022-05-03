-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2022 at 02:16 AM
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
-- Database: `gestion_trains`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `idC` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tel` int(16) NOT NULL,
  `help` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`idC`, `name`, `subject`, `email`, `tel`, `help`) VALUES
(1, 'saida ', 'reclamation', 'saida@gmail.com', 2147483647, 'hi'),
(3, 'test', 'remerciements', 'test@test.com', 67352427, 'tnks');

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
(2, 'Charifa', 'Koala', 'charifah1112@gmail.com', 624535746, 'nador', '2000-12-11', '12345', 1),
(14, 'Hicham', 'EL', 'hicham@gmail.com', 87655456, 'safi', '1997-02-27', '1234', 2),
(20, 'haytham', 'haoudi', 'haytham@gmail.com', 62524353, '', '0000-00-00', '', 3),
(21, 'laila', 'lahmiri', 'laila@gmail.com', 97261614, '', '0000-00-00', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `idRes` int(11) NOT NULL,
  `status` enum('valid','invalid') NOT NULL DEFAULT 'valid',
  `day` date DEFAULT NULL,
  `create_at` datetime DEFAULT current_timestamp(),
  `idP` int(11) NOT NULL,
  `idT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`idRes`, `status`, `day`, `create_at`, `idP`, `idT`) VALUES
(20, 'invalid', '2022-04-27', '2022-04-27 11:48:15', 14, 1),
(21, 'valid', '2022-04-27', '2022-04-27 14:44:46', 14, 9),
(22, 'invalid', '2022-05-02', '2022-05-02 14:55:22', 14, 1),
(23, 'valid', '2022-05-02', '2022-05-02 15:55:11', 14, 4),
(24, 'invalid', '2022-05-03', '2022-05-02 16:00:56', 14, 6),
(25, 'invalid', '2022-05-03', '2022-05-02 16:04:16', 14, 6),
(26, 'valid', '2022-05-02', '2022-05-02 16:11:22', 14, 6),
(27, 'valid', '2022-05-18', '2022-05-02 16:12:22', 14, 1);

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
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `idS` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`idS`, `status`) VALUES
(1, 'valid'),
(2, 'invalid');

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
(1, 'train1', 91, 'c1', 12345),
(2, 'train2', 100, 'c2', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `idT` int(11) NOT NULL,
  `gareD` varchar(100) NOT NULL,
  `gareA` varchar(100) NOT NULL,
  `HoursD` time NOT NULL DEFAULT current_timestamp(),
  `HoursA` time NOT NULL DEFAULT current_timestamp(),
  `price` double NOT NULL,
  `idTr` int(11) NOT NULL,
  `idS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`idT`, `gareD`, `gareA`, `HoursD`, `HoursA`, `price`, `idTr`, `idS`) VALUES
(1, 'safi', 'casa', '21:58:14', '02:57:05', 50, 1, 1),
(2, 'fes', 'casa', '15:58:42', '15:57:05', 900, 2, 2),
(4, 'meknes', 'marrakech', '20:19:00', '20:19:00', 546, 2, 1),
(5, 'fes', 'safi', '13:42:00', '13:42:00', 546, 1, 2),
(6, 'agadir', 'nador', '00:00:00', '18:00:00', 1000, 2, 1),
(7, 'tanger', 'nador', '11:29:00', '03:29:00', 123, 1, 2),
(9, 'taourirt', 'casa', '14:40:00', '15:39:00', 234, 1, 1),
(10, 'fes', 'kech', '20:41:00', '22:41:00', 430, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idC`);

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
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`idS`);

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
  ADD KEY `idTr` (`idTr`),
  ADD KEY `idS` (`idS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `idC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `idP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idRes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `idR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `idS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `idTr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `idT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  ADD CONSTRAINT `trips_ibfk_1` FOREIGN KEY (`idTr`) REFERENCES `train` (`idTr`),
  ADD CONSTRAINT `trips_ibfk_2` FOREIGN KEY (`idS`) REFERENCES `states` (`idS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
