-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 10:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhia`
--

-- --------------------------------------------------------

--
-- Table structure for table `park`
--

CREATE TABLE `park` (
  `placepark` int(11) NOT NULL,
  `Bloc` varchar(11) NOT NULL,
  `nb_places` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `park`
--

INSERT INTO `park` (`placepark`, `Bloc`, `nb_places`) VALUES
(1, 'VIP', 10),
(2, 'A', 17),
(3, 'B', 9);

-- --------------------------------------------------------

--
-- Table structure for table `parking`
--

CREATE TABLE `parking` (
  `matricule` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `placepark` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_table` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parking`
--

INSERT INTO `parking` (`matricule`, `name`, `date`, `placepark`, `id_client`, `id_table`) VALUES
(1, 'new', '2022-12-24', 2, 11, 5),
(2, 'farouk', '2022-12-10', 2, 11, 5),
(3, 'farouk', '2022-12-17', 2, 11, 5),
(4, 'farouk', '2022-12-17', 2, 11, 6),
(5, 'farouk', '2022-12-10', 2, 11, 5),
(6, 'farouk', '2022-12-24', 2, 11, 6),
(7, 'farouk', '2022-12-24', 2, 11, 5),
(8, 'farouk', '2022-12-10', 3, 11, 5),
(10, 'farouk', '2022-12-10', 2, 11, 6),
(100, 'farouk', '2022-12-17', 2, 11, 4),
(101, 'farouk', '2022-12-10', 2, 11, 5),
(102, 'farouk', '2022-12-30', 2, 11, 4),
(103, 'farouk', '2022-12-10', 2, 11, 5),
(126, 'new', '2023-01-07', 2, 11, 6),
(12676, 'new', '2022-12-10', 2, 556677, 4),
(1226676, 'dhioa', '2022-12-10', 2, 556666, 6);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id_table` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `datereservation` date NOT NULL,
  `nombre` int(11) NOT NULL,
  `num_tel` int(11) NOT NULL,
  `id_client` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id_table`, `name`, `datereservation`, `nombre`, `num_tel`, `id_client`) VALUES
(4, 'new', '2022-12-09', 3, 5656565, 14),
(5, 'new', '2022-12-06', 4, 5656565, 6),
(6, 'new', '2022-11-05', 4, 5656565, 7),
(11222, 'farouk', '2022-11-09', 22, 2147483647, 556666),
(11211100, 'farouk', '2022-12-03', 22, 2147483647, 556677),
(11222000, 'farouk', '2022-11-19', 22, 2147483647, 556677),
(112225888, 'farouk', '2022-11-26', 22, 2147483647, 556666),
(1122245454, 'dhioa', '2022-11-26', 22, 2147483647, 556677);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `park`
--
ALTER TABLE `park`
  ADD PRIMARY KEY (`placepark`);

--
-- Indexes for table `parking`
--
ALTER TABLE `parking`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `test` (`id_table`),
  ADD KEY `test2` (`placepark`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_table`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_table` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1122245455;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `parking`
--
ALTER TABLE `parking`
  ADD CONSTRAINT `test` FOREIGN KEY (`id_table`) REFERENCES `reservation` (`id_table`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `test2` FOREIGN KEY (`placepark`) REFERENCES `park` (`placepark`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
