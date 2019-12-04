-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 01 nov. 2019 à 19:21
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bcesr`
--

-- --------------------------------------------------------

--
-- Structure de la table `bilan_carbone`
--

CREATE TABLE `bilan_carbone` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Etablissement` varchar(20) NOT NULL,
  `Periode` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bilan_carbone`
--

INSERT INTO `bilan_carbone` (`Id`, `Nom`, `Etablissement`, `Periode`) VALUES
(1, 'global', 'IUT_VELIZY', '2018-2019');

-- --------------------------------------------------------

--
-- Structure de la table `etablissement`
--

CREATE TABLE `etablissement` (
  `Nom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etablissement`
--

INSERT INTO `etablissement` (`Nom`) VALUES
('IUT_ORSAY'),
('IUT_VELIZY');

-- --------------------------------------------------------

--
-- Structure de la table `liaison`
--

CREATE TABLE `liaison` (
  `Utilisateur` varchar(20) NOT NULL,
  `Etablissement` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `liaison`
--

INSERT INTO `liaison` (`Utilisateur`, `Etablissement`) VALUES
('user', 'IUT_VELIZY'),
('user', 'IUT_ORSAY');

-- --------------------------------------------------------

--
-- Structure de la table `poste`
--

CREATE TABLE `poste` (
  `Nom` varchar(20) NOT NULL,
  `Bilan` int(11) NOT NULL,
  `Quantite` int(11) NOT NULL,
  `Facteur` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `poste`
--

INSERT INTO `poste` (`Nom`, `Bilan`, `Quantite`, `Facteur`) VALUES
('Electricité', 1, 1100, 1.2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `Login` varchar(20) NOT NULL,
  `Mdp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Login`, `Mdp`) VALUES
('admin', 'admin'),
('user', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bilan_carbone`
--
ALTER TABLE `bilan_carbone`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Nom` (`Nom`,`Etablissement`,`Periode`) USING BTREE;

--
-- Index pour la table `etablissement`
--
ALTER TABLE `etablissement`
  ADD PRIMARY KEY (`Nom`);

--
-- Index pour la table `liaison`
--
ALTER TABLE `liaison`
  ADD KEY `Etablissement` (`Etablissement`),
  ADD KEY `Utilisateur` (`Utilisateur`);

--
-- Index pour la table `poste`
--
ALTER TABLE `poste`
  ADD UNIQUE KEY `Nom` (`Nom`),
  ADD KEY `Bilan` (`Bilan`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`Login`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bilan_carbone`
--
ALTER TABLE `bilan_carbone`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `liaison`
--
ALTER TABLE `liaison`
  ADD CONSTRAINT `liaison_ibfk_1` FOREIGN KEY (`Etablissement`) REFERENCES `etablissement` (`Nom`),
  ADD CONSTRAINT `liaison_ibfk_2` FOREIGN KEY (`Utilisateur`) REFERENCES `utilisateur` (`Login`);

--
-- Contraintes pour la table `poste`
--
ALTER TABLE `poste`
  ADD CONSTRAINT `poste_ibfk_1` FOREIGN KEY (`Bilan`) REFERENCES `bilan_carbone` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
