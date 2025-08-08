-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 08 août 2025 à 11:15
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
  `ID` int(10) NOT NULL,
  `ID_membre` int(10) NOT NULL,
  `Montant` double NOT NULL,
  `Nbr_anjara` int(10) NOT NULL,
  `Date_reunion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `Montant` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `remboursement`
--
-- Erreur de lecture de structure pour la table voamami.remboursement : #1932 - Table 'voamami.remboursement' doesn't exist in engine
-- Erreur de lecture des données pour la table voamami.remboursement : #1064 - Erreur de syntaxe près de 'FROM `voamami`.`remboursement`' à la ligne 1

-- --------------------------------------------------------

--
-- Structure de la table `sazy`
--
-- Erreur de lecture de structure pour la table voamami.sazy : #1932 - Table 'voamami.sazy' doesn't exist in engine
-- Erreur de lecture des données pour la table voamami.sazy : #1064 - Erreur de syntaxe près de 'FROM `voamami`.`sazy`' à la ligne 1

-- --------------------------------------------------------

--
-- Structure de la table `users`
--
-- Erreur de lecture de structure pour la table voamami.users : #1932 - Table 'voamami.users' doesn't exist in engine
-- Erreur de lecture des données pour la table voamami.users : #1064 - Erreur de syntaxe près de 'FROM `voamami`.`users`' à la ligne 1

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `anjara`
--
ALTER TABLE `anjara`
  ADD PRIMARY KEY (`ID`),
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
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `anjara`
--
ALTER TABLE `anjara`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `ID_membre` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `pret`
--
ALTER TABLE `pret`
  MODIFY `ID_pret` int(10) NOT NULL AUTO_INCREMENT;

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
