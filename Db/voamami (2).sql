-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 21 août 2025 à 12:42
-- Version du serveur : 10.4.32-MariaDB
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
  `ID_membre` int(10) NOT NULL,
  `Montant` double NOT NULL,
  `Nbr_anjara` int(10) NOT NULL,
  `Date_reunion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `anjara`
--

INSERT INTO `anjara` (`ID_anjara`, `ID_membre`, `Montant`, `Nbr_anjara`, `Date_reunion`) VALUES
(4, 16, 1346, 5, '2025-08-21');

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
(6, 16, 50000, '2025-08-16');

-- --------------------------------------------------------

--
-- Structure de la table `engalia`
--

CREATE TABLE `engalia` (
  `ID_engalia` int(10) NOT NULL,
  `ID_membre` int(10) NOT NULL,
  `Montant` double NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `interet`
--

CREATE TABLE `interet` (
  `ID_interet` int(11) NOT NULL,
  `ID_pret` int(11) NOT NULL,
  `Montant` decimal(10,0) NOT NULL,
  `Date_creation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `interet`
--

INSERT INTO `interet` (`ID_interet`, `ID_pret`, `Montant`, `Date_creation`) VALUES
(1, 4, 5000, '2025-08-10'),
(2, 3, 20000, '2025-08-10'),
(3, 6, 5000, '2025-08-10'),
(4, 7, 20000, '2025-08-11'),
(5, 10, 10000, '2025-08-13'),
(6, 10, 10000, '2025-08-13'),
(7, 11, 10000, '2025-08-13'),
(8, 11, 10000, '2025-08-16'),
(9, 12, 20000, '2025-08-16'),
(10, 13, 1600, '2025-08-16'),
(11, 17, 5000, '2025-08-21'),
(12, 17, 5000, '2025-08-21'),
(13, 17, 5000, '2025-08-21'),
(14, 11, 100, '2025-08-21'),
(15, 19, 500, '2025-08-21'),
(16, 20, 1000, '2025-08-21'),
(17, 19, 5000, '2025-08-21'),
(18, 22, 3000, '2025-08-21');

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
(16, 'TAKATSY', 'Mihary');

-- --------------------------------------------------------

--
-- Structure de la table `pret`
--

CREATE TABLE `pret` (
  `ID_pret` int(10) NOT NULL,
  `ID_membre` int(10) NOT NULL,
  `Montant` double NOT NULL,
  `Date_pret` date NOT NULL,
  `Statut` varchar(25) NOT NULL DEFAULT 'encours',
  `lu` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pret`
--

INSERT INTO `pret` (`ID_pret`, `ID_membre`, `Montant`, `Date_pret`, `Statut`, `lu`) VALUES
(23, 16, 20000, '2025-04-03', 'Encours', 1),
(24, 16, 2000, '2025-03-15', 'encours', 1);

-- --------------------------------------------------------

--
-- Structure de la table `remboursement`
--

CREATE TABLE `remboursement` (
  `ID_remboursement` int(11) NOT NULL,
  `ID_pret` int(11) NOT NULL,
  `Montant` decimal(10,0) NOT NULL,
  `Date_remboursement` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `remboursement`
--

INSERT INTO `remboursement` (`ID_remboursement`, `ID_pret`, `Montant`, `Date_remboursement`) VALUES
(16, 19, 55000, '2025-08-21');

-- --------------------------------------------------------

--
-- Structure de la table `sazy`
--

CREATE TABLE `sazy` (
  `ID_sazy` int(11) NOT NULL,
  `ID_membre` int(11) NOT NULL,
  `Observation` text NOT NULL,
  `Montant` decimal(10,0) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `sazy`
--

INSERT INTO `sazy` (`ID_sazy`, `ID_membre`, `Observation`, `Montant`, `Date`) VALUES
(2, 15, 'Mitabataba', 1000, '2025-08-13'),
(3, 16, 'Tara', 1000, '2025-08-21');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `email`, `password`) VALUES
(1, 'Zafisolo', 'admin', 'admin@gmail.com', '$2y$10$99tTK7iT2UVjuB9RpJ6x9eZ337VYQZNgZduvIqJa/zI6DgIoNEvNO'),
(2, 'dore', 'Masy', 'zaho@gmail.com', '$2y$10$j.e14csIFRXk/.bldGu.EO4UpQJqX.3SJjrXzdtaD5MwTLMWyXwTa');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `anjara`
--
ALTER TABLE `anjara`
  ADD PRIMARY KEY (`ID_anjara`),
  ADD KEY `FKANJARA822870` (`ID_membre`);

--
-- Index pour la table `cotisation`
--
ALTER TABLE `cotisation`
  ADD PRIMARY KEY (`ID_cotisation`),
  ADD KEY `FKCOTISATION401824` (`ID_membre`);

--
-- Index pour la table `engalia`
--
ALTER TABLE `engalia`
  ADD PRIMARY KEY (`ID_engalia`),
  ADD KEY `FKENGALIA478912` (`ID_membre`);

--
-- Index pour la table `interet`
--
ALTER TABLE `interet`
  ADD PRIMARY KEY (`ID_interet`),
  ADD KEY `FI` (`ID_pret`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`ID_membre`);

--
-- Index pour la table `pret`
--
ALTER TABLE `pret`
  ADD PRIMARY KEY (`ID_pret`),
  ADD KEY `FKPRET86184` (`ID_membre`);

--
-- Index pour la table `remboursement`
--
ALTER TABLE `remboursement`
  ADD PRIMARY KEY (`ID_remboursement`),
  ADD KEY `fr` (`ID_pret`);

--
-- Index pour la table `sazy`
--
ALTER TABLE `sazy`
  ADD PRIMARY KEY (`ID_sazy`),
  ADD KEY `fk` (`ID_membre`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`prenom`),
  ADD UNIQUE KEY `email` (`email`);

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
  MODIFY `ID_cotisation` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `engalia`
--
ALTER TABLE `engalia`
  MODIFY `ID_engalia` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `interet`
--
ALTER TABLE `interet`
  MODIFY `ID_interet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `ID_membre` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `pret`
--
ALTER TABLE `pret`
  MODIFY `ID_pret` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `remboursement`
--
ALTER TABLE `remboursement`
  MODIFY `ID_remboursement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `sazy`
--
ALTER TABLE `sazy`
  MODIFY `ID_sazy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `anjara`
--
ALTER TABLE `anjara`
  ADD CONSTRAINT `FKANJARA822870` FOREIGN KEY (`ID_membre`) REFERENCES `membre` (`ID_membre`) ON DELETE CASCADE;

--
-- Contraintes pour la table `cotisation`
--
ALTER TABLE `cotisation`
  ADD CONSTRAINT `fk_cotisation_membre` FOREIGN KEY (`ID_membre`) REFERENCES `membre` (`ID_membre`) ON DELETE CASCADE;

--
-- Contraintes pour la table `engalia`
--
ALTER TABLE `engalia`
  ADD CONSTRAINT `FKENGALIA478912` FOREIGN KEY (`ID_membre`) REFERENCES `membre` (`ID_membre`);

--
-- Contraintes pour la table `pret`
--
ALTER TABLE `pret`
  ADD CONSTRAINT `FKPRET86184` FOREIGN KEY (`ID_membre`) REFERENCES `membre` (`ID_membre`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
