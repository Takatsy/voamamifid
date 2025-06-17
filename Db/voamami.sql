-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 17 juin 2025 à 12:25
-- Version du serveur : 10.6.19-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `voamami`
--

-- --------------------------------------------------------

--
-- Structure de la table `anjara`
--

CREATE TABLE `anjara` (
  `ID_anjara` int(10) NOT NULL,
  `Montant` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `anjara`
--

INSERT INTO `anjara` (`ID_anjara`, `Montant`) VALUES
(1, 0),
(2, 0),
(3, 1000),
(4, 5000);

-- --------------------------------------------------------

--
-- Structure de la table `cotisation`
--

CREATE TABLE `cotisation` (
  `ID_cotisation` int(10) NOT NULL,
  `ID_membre` int(10) NOT NULL,
  `Montant` double NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cotisation`
--

INSERT INTO `cotisation` (`ID_cotisation`, `ID_membre`, `Montant`, `Date`) VALUES
(10, 14, 80000, '2025-06-17'),
(11, 15, 2000000, '2025-06-17'),
(12, 16, 20000, '2025-06-17');

-- --------------------------------------------------------

--
-- Structure de la table `engalia`
--

CREATE TABLE `engalia` (
  `ID_engalia` int(10) NOT NULL,
  `Montant` double NOT NULL,
  `ID_mission` int(10) NOT NULL,
  `ID_membre` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `ID_membre` int(10) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`ID_membre`, `Nom`, `Prenom`) VALUES
(14, 'Noass', 'Marius'),
(15, 'TAKATSY', 'pongilaryssss'),
(16, 'Setra', 'Pongre');

-- --------------------------------------------------------

--
-- Structure de la table `mission`
--

CREATE TABLE `mission` (
  `ID_mission` int(10) NOT NULL,
  `Nbrjours` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `mission`
--

INSERT INTO `mission` (`ID_mission`, `Nbrjours`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `pret`
--

CREATE TABLE `pret` (
  `ID_pret` int(10) NOT NULL,
  `ID_membre` int(10) NOT NULL,
  `Montant` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reunion`
--

CREATE TABLE `reunion` (
  `ID_reunion` int(10) NOT NULL,
  `ID_anjara` int(10) NOT NULL,
  `ID_membre` int(10) NOT NULL,
  `Date_reunion` date NOT NULL,
  `Nbranjara` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `anjara`
--
ALTER TABLE `anjara`
  ADD PRIMARY KEY (`ID_anjara`);

--
-- Index pour la table `cotisation`
--
ALTER TABLE `cotisation`
  ADD PRIMARY KEY (`ID_cotisation`);

--
-- Index pour la table `engalia`
--
ALTER TABLE `engalia`
  ADD PRIMARY KEY (`ID_engalia`),
  ADD KEY `ENGALIA` (`ID_mission`),
  ADD KEY `ENGALIA2` (`ID_membre`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`ID_membre`);

--
-- Index pour la table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`ID_mission`);

--
-- Index pour la table `pret`
--
ALTER TABLE `pret`
  ADD PRIMARY KEY (`ID_pret`),
  ADD KEY `FKPRET86184` (`ID_membre`);

--
-- Index pour la table `reunion`
--
ALTER TABLE `reunion`
  ADD PRIMARY KEY (`ID_reunion`),
  ADD KEY `REUNION` (`ID_anjara`),
  ADD KEY `REUNION2` (`ID_membre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `anjara`
--
ALTER TABLE `anjara`
  MODIFY `ID_anjara` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `cotisation`
--
ALTER TABLE `cotisation`
  MODIFY `ID_cotisation` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `engalia`
--
ALTER TABLE `engalia`
  MODIFY `ID_engalia` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `ID_membre` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `mission`
--
ALTER TABLE `mission`
  MODIFY `ID_mission` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `pret`
--
ALTER TABLE `pret`
  MODIFY `ID_pret` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reunion`
--
ALTER TABLE `reunion`
  MODIFY `ID_reunion` int(10) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `engalia`
--
ALTER TABLE `engalia`
  ADD CONSTRAINT `ENGALIA` FOREIGN KEY (`ID_mission`) REFERENCES `mission` (`ID_mission`),
  ADD CONSTRAINT `ENGALIA2` FOREIGN KEY (`ID_membre`) REFERENCES `membre` (`ID_membre`);

--
-- Contraintes pour la table `pret`
--
ALTER TABLE `pret`
  ADD CONSTRAINT `FKPRET86184` FOREIGN KEY (`ID_membre`) REFERENCES `membre` (`ID_membre`);

--
-- Contraintes pour la table `reunion`
--
ALTER TABLE `reunion`
  ADD CONSTRAINT `REUNION` FOREIGN KEY (`ID_anjara`) REFERENCES `anjara` (`ID_anjara`),
  ADD CONSTRAINT `REUNION2` FOREIGN KEY (`ID_membre`) REFERENCES `membre` (`ID_membre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
