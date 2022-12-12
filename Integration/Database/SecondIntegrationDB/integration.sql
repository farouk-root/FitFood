-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 05:40 PM
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
-- Database: `integration`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gendre` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comman`
--

CREATE TABLE `comman` (
  `name` varchar(20) NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `city` varchar(11) NOT NULL,
  `id_commande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comman`
--

INSERT INTO `comman` (`name`, `tel`, `email`, `address`, `city`, `id_commande`) VALUES
('samouel', 52879658, 'samouel@gamil.com', 'hayy l raje', 'bizerte', 7),
('fedik', 52554774, 'kaabi@gmail.com', 'cite zouhour', 'bizerte', 9),
('fediooo', 58964876, 'fedio@gmail.com', 'cite omrane', 'manzel bour', 12),
('samo', 65978645, 'fadi@gmail.com', 'cite omrane', 'tunis', 13),
('hfdsjkskj', 28942654, 'hdsfdbgfj', 'qdhfjfdbfn', 'hqfbhqdj', 14),
('dhia', 58796547, 'dhia@gmail.com', 'beb l falla', 'tunis', 15),
('samiaa', 58796456, 'samia@gmail.com', 'beb saadoun', 'tunis', 16),
('', 0, '', '', '', 18);

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
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_commande` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `expm` int(11) NOT NULL,
  `expy` int(11) NOT NULL,
  `cvv` int(11) NOT NULL,
  `id_payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id_commande`, `name`, `expm`, `expy`, `cvv`, `id_payment`) VALUES
(7, 'samouel', 3131, 1313, 111, 3);

-- --------------------------------------------------------

--
-- Table structure for table `reclamation`
--

CREATE TABLE `reclamation` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `subject` varchar(64) NOT NULL,
  `body` varchar(4096) NOT NULL,
  `status` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reclamation`
--

INSERT INTO `reclamation` (`id`, `client_id`, `subject`, `body`, `status`) VALUES
(1, 212, '211111', '222222', '3113&'),
(4, 0, 'kjjjjn', ' nnknkjnjhbbbbbbbbbbbbbbb', 'empty');

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

-- --------------------------------------------------------

--
-- Table structure for table `resolution`
--

CREATE TABLE `resolution` (
  `id` int(11) NOT NULL,
  `reclamation_id` int(11) NOT NULL,
  `body` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resolution`
--

INSERT INTO `resolution` (`id`, `reclamation_id`, `body`) VALUES
(1, 1, 'helloooooooooooooooooooooooo'),
(2, 1, ' jkrkjjkjjhjhsdjjhsdjksvdjsvdjksv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comman`
--
ALTER TABLE `comman`
  ADD PRIMARY KEY (`id_commande`);

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
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`),
  ADD KEY `id_commande` (`id_commande`);

--
-- Indexes for table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_table`);

--
-- Indexes for table `resolution`
--
ALTER TABLE `resolution`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comman`
--
ALTER TABLE `comman`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_table` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1122245455;

--
-- AUTO_INCREMENT for table `resolution`
--
ALTER TABLE `resolution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `parking`
--
ALTER TABLE `parking`
  ADD CONSTRAINT `test` FOREIGN KEY (`id_table`) REFERENCES `reservation` (`id_table`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `test2` FOREIGN KEY (`placepark`) REFERENCES `park` (`placepark`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`id_commande`) REFERENCES `comman` (`id_commande`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
