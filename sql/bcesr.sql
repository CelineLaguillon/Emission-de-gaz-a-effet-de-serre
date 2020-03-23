-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 23 mars 2020 à 13:16
-- Version du serveur :  10.3.17-MariaDB-0+deb10u1
-- Version de PHP :  7.3.11-1~deb10u1

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
(15, 'Global', 'IUT_VELIZY', '2017-2018'),
(14, 'Global', 'IUT_VELIZY', '2018-2019'),
(16, 'Global', 'IUT_VELIZY', '2019-2020');

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
('IUT_VELIZY'),
('PARIS DESCARTES');

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
('user', 'IUT_VELIZY');

-- --------------------------------------------------------

--
-- Structure de la table `poste`
--

CREATE TABLE `poste` (
  `Nom` varchar(20) NOT NULL,
  `Bilan` int(11) NOT NULL,
  `Quantite` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `poste`
--

INSERT INTO `poste` (`Nom`, `Bilan`, `Quantite`) VALUES
('Avion', 14, 0),
('Avion', 15, 45),
('Bus', 15, 1500),
('Carton', 15, 52),
('Chauffage(gaz)', 15, 4000),
('Electricité', 15, 2),
('Fioul', 15, 0),
('Imprimantes', 15, 17),
('Ordinateurs', 15, 144);

-- --------------------------------------------------------

--
-- Structure de la table `poste_info`
--

CREATE TABLE `poste_info` (
  `Categorie` enum('1&2','3') NOT NULL,
  `type` enum('Sources fixes','Energie','Immobilisations','Materiel','Déplacements','Déchets') NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Facteur` float NOT NULL,
  `Unite` enum('kWh','m2','nombre','km','passager/km','tonnes/an') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `poste_info`
--

INSERT INTO `poste_info` (`Categorie`, `type`, `Nom`, `Facteur`, `Unite`) VALUES
('3', 'Déplacements', 'Avion', 0.23, 'passager/km'),
('1&2', 'Immobilisations', 'Bureaux (métal)', 650, 'm2'),
('3', 'Déplacements', 'Bus', 0.182, 'passager/km'),
('3', 'Déchets', 'Carton', 1063, 'tonnes/an'),
('1&2', 'Energie', 'Chauffage(gaz)', 737, 'kWh'),
('3', 'Déchets', 'Déchets alimentaires', 48.1, 'tonnes/an'),
('1&2', 'Energie', 'Electricité', 0.065, 'kWh'),
('1&2', 'Sources fixes', 'Fioul', 0.324, 'kWh'),
('1&2', 'Immobilisations', 'Garage(métal)', 220, 'm2'),
('1&2', 'Sources fixes', 'Gaz natuel', 0.243, 'kWh'),
('1&2', 'Materiel', 'Imprimantes', 110, 'nombre'),
('1&2', 'Immobilisations', 'Locaux d\'enseignement', 440, 'm2'),
('3', 'Déplacements', 'Moto', 0.238, 'km'),
('1&2', 'Materiel', 'Ordinateurs', 417, 'nombre'),
('3', 'Déchets', 'Papier', 919, 'tonnes/an'),
('1&2', 'Immobilisations', 'Parking', 319, 'm2'),
('1&2', 'Materiel', 'Photocopieuses', 900, 'nombre'),
('3', 'Déchets', 'Plastiques', 2383, 'tonnes/an'),
('3', 'Déplacements', 'TER (gazole)', 0.0798, 'km'),
('3', 'Déplacements', 'Train(TGV/RER)', 0.00369, 'km'),
('3', 'Déplacements', 'Voiture', 0.258, 'km');

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
('test', 'test'),
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
  ADD UNIQUE KEY `Utilisateur` (`Utilisateur`),
  ADD UNIQUE KEY `Etablissement` (`Etablissement`);

--
-- Index pour la table `poste`
--
ALTER TABLE `poste`
  ADD UNIQUE KEY `Nom` (`Nom`,`Bilan`) USING BTREE,
  ADD KEY `poste_ibfk_1` (`Bilan`);

--
-- Index pour la table `poste_info`
--
ALTER TABLE `poste_info`
  ADD PRIMARY KEY (`Nom`);

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

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
  ADD CONSTRAINT `poste_ibfk_1` FOREIGN KEY (`Bilan`) REFERENCES `bilan_carbone` (`Id`),
  ADD CONSTRAINT `poste_ibfk_2` FOREIGN KEY (`Nom`) REFERENCES `poste_info` (`Nom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
