-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 10 déc. 2022 à 21:58
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fedi`
--

-- --------------------------------------------------------

--
-- Structure de la table `comman`
--

CREATE TABLE `comman` (
  `name` varchar(20) NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `city` varchar(11) NOT NULL,
  `id_commande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comman`
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
-- Structure de la table `payment`
--

CREATE TABLE `payment` (
  `id_commande` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `expm` int(11) NOT NULL,
  `expy` int(11) NOT NULL,
  `cvv` int(11) NOT NULL,
  `id_payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comman`
--
ALTER TABLE `comman`
  ADD PRIMARY KEY (`id_commande`);

--
-- Index pour la table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`),
  ADD KEY `id_commande` (`id_commande`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comman`
--
ALTER TABLE `comman`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`id_commande`) REFERENCES `comman` (`id_commande`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
