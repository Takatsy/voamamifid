-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 11 août 2025 à 07:01
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
(1, 1, 2000, 5, '2025-08-10');

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
(1, 1, 50000, '2025-06-17'),
(2, 2, 30000, '2025-06-17'),
(3, 3, 20000, '2025-06-17'),
(4, 4, 40000, '2025-06-17');

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
(3, 6, 5000, '2025-08-10');

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
(1, 'Rafenoarivo', 'Marius'),
(2, 'Noass', 'Mihary'),
(3, 'setra', 'José'),
(4, 'Dhore', 'Miha');

-- --------------------------------------------------------

--
-- Structure de la table `pret`
--

CREATE TABLE `pret` (
  `ID_pret` int(10) NOT NULL,
  `ID_membre` int(10) NOT NULL,
  `Montant` double NOT NULL,
  `Date_pret` date NOT NULL,
  `Statut` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pret`
--

INSERT INTO `pret` (`ID_pret`, `ID_membre`, `Montant`, `Date_pret`, `Statut`) VALUES
(3, 1, 200000, '2025-08-10', 'Payé'),
(4, 2, 50000, '2025-08-17', 'Payé'),
(6, 3, 50000, '2025-08-10', 'Payé');

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
(1, 1, 20000, '2025-08-10'),
(2, 2, 20000, '2025-08-10'),
(3, 3, 220000, '2025-08-10'),
(4, 4, 55000, '2025-08-10'),
(5, 6, 55000, '2025-08-10');

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
(1, 1, 'Mitabataba', 1000, '2025-08-10');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `password`) VALUES
(1, 'Zafisolo', 'admin', 'admin@gmail.com', '$2y$10$99tTK7iT2UVjuB9RpJ6x9eZ337VYQZNgZduvIqJa/zI6DgIoNEvNO');

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
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `anjara`
--
ALTER TABLE `anjara`
  MODIFY `ID_anjara` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cotisation`
--
ALTER TABLE `cotisation`
  MODIFY `ID_cotisation` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `engalia`
--
ALTER TABLE `engalia`
  MODIFY `ID_engalia` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `interet`
--
ALTER TABLE `interet`
  MODIFY `ID_interet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `ID_membre` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `pret`
--
ALTER TABLE `pret`
  MODIFY `ID_pret` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `remboursement`
--
ALTER TABLE `remboursement`
  MODIFY `ID_remboursement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `sazy`
--
ALTER TABLE `sazy`
  MODIFY `ID_sazy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `anjara`
--
ALTER TABLE `anjara`
  ADD CONSTRAINT `FKANJARA822870` FOREIGN KEY (`ID_membre`) REFERENCES `membre` (`ID_membre`);

--
-- Contraintes pour la table `cotisation`
--
ALTER TABLE `cotisation`
  ADD CONSTRAINT `FKCOTISATION401824` FOREIGN KEY (`ID_membre`) REFERENCES `membre` (`ID_membre`);

--
-- Contraintes pour la table `engalia`
--
ALTER TABLE `engalia`
  ADD CONSTRAINT `FKENGALIA478912` FOREIGN KEY (`ID_membre`) REFERENCES `membre` (`ID_membre`);

--
-- Contraintes pour la table `pret`
--
ALTER TABLE `pret`
  ADD CONSTRAINT `FKPRET86184` FOREIGN KEY (`ID_membre`) REFERENCES `membre` (`ID_membre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
