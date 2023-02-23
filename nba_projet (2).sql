-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 23 Février 2023 à 09:58
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `nba_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `coach`
--

CREATE TABLE `coach` (
  `IdCoach` int(99) NOT NULL,
  `nomCoach` varchar(20) NOT NULL,
  `prenomCoach` varchar(20) NOT NULL,
  `Carrière` text COMMENT 'Equipe dans laquelle il a joué si il a eu une carrière de joueur'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `coach`
--

INSERT INTO `coach` (`IdCoach`, `nomCoach`, `prenomCoach`, `Carrière`) VALUES
(1, 'geniet', 'annie', 'très très forte en ada');

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `IdEquipe` int(99) NOT NULL,
  `nomEquipe` varchar(40) NOT NULL,
  `Conférence` int(1) NOT NULL COMMENT '0 pour Ouest, 1 pour Est',
  `Ville` varchar(25) NOT NULL,
  `Classement` int(20) NOT NULL,
  `imgEquipe` blob COMMENT 'autre colonne d''extension si plusieurs formats',
  `nVictoires` int(99) NOT NULL,
  `nDefaites` int(99) NOT NULL,
  `Description` text NOT NULL,
  `nTitresEquipe` int(99) NOT NULL,
  `IdCoach` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `equipe`
--

INSERT INTO `equipe` (`IdEquipe`, `nomEquipe`, `Conférence`, `Ville`, `Classement`, `imgEquipe`, `nVictoires`, `nDefaites`, `Description`, `nTitresEquipe`, `IdCoach`) VALUES
(2, 'TRIO GBI 2025', 1, 'poitiers', 1, NULL, 10, 11, 'la meilleure équipe de basket ball en GPHY', 20, 1);

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE `joueur` (
  `idJoueur` int(255) NOT NULL,
  `nomJoueur` varchar(30) NOT NULL,
  `prenomJoueur` varchar(30) NOT NULL,
  `age` int(99) NOT NULL,
  `nMaillot` int(99) NOT NULL,
  `Poste` varchar(20) NOT NULL,
  `nTitres` int(99) NOT NULL,
  `PosDraft` int(99) NOT NULL,
  `AnDraft` year(4) NOT NULL,
  `IdEquipe` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `joueur`
--

INSERT INTO `joueur` (`idJoueur`, `nomJoueur`, `prenomJoueur`, `age`, `nMaillot`, `Poste`, `nTitres`, `PosDraft`, `AnDraft`, `IdEquipe`) VALUES
(2, 'chastaingt', 'thomas', 20, 24, 'meneur', 5, 2, 2021, 2);

-- --------------------------------------------------------

--
-- Structure de la table `matchnba`
--

CREATE TABLE `matchnba` (
  `Score1` int(255) NOT NULL,
  `Score2` int(255) NOT NULL,
  `IdSerie` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `serie`
--

CREATE TABLE `serie` (
  `TypeSerie` varchar(20) NOT NULL,
  `IdEquipe1` int(16) NOT NULL,
  `IdEquipe2` int(16) NOT NULL,
  `IdSerie` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `stats`
--

CREATE TABLE `stats` (
  `Idstats` int(255) NOT NULL,
  `MoyPasseD` int(99) NOT NULL,
  `MoyPoints` int(99) NOT NULL,
  `MoyRebonds` int(99) NOT NULL,
  `IdJoueur` int(255) NOT NULL,
  `IdSerie` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `mail` int(30) NOT NULL,
  `Telephone` varchar(10) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `admin` int(1) NOT NULL COMMENT 'si = 1 alors admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`IdCoach`);

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`IdEquipe`),
  ADD KEY `IdCoach` (`IdCoach`);

--
-- Index pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD PRIMARY KEY (`idJoueur`),
  ADD KEY `IdEquipe` (`IdEquipe`);

--
-- Index pour la table `matchnba`
--
ALTER TABLE `matchnba`
  ADD KEY `IdSerie` (`IdSerie`);

--
-- Index pour la table `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`IdSerie`),
  ADD KEY `IdEquipe1` (`IdEquipe1`,`IdEquipe2`),
  ADD KEY `IdEquipe2` (`IdEquipe2`);

--
-- Index pour la table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`Idstats`),
  ADD KEY `IdJoueur` (`IdJoueur`,`IdSerie`),
  ADD KEY `IdSerie` (`IdSerie`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`mail`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `coach`
--
ALTER TABLE `coach`
  MODIFY `IdCoach` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `IdEquipe` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `joueur`
--
ALTER TABLE `joueur`
  MODIFY `idJoueur` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `serie`
--
ALTER TABLE `serie`
  MODIFY `IdSerie` int(99) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `stats`
--
ALTER TABLE `stats`
  MODIFY `Idstats` int(255) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD CONSTRAINT `equipe_ibfk_1` FOREIGN KEY (`IdCoach`) REFERENCES `coach` (`IdCoach`);

--
-- Contraintes pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD CONSTRAINT `joueur_ibfk_1` FOREIGN KEY (`IdEquipe`) REFERENCES `equipe` (`IdEquipe`);

--
-- Contraintes pour la table `matchnba`
--
ALTER TABLE `matchnba`
  ADD CONSTRAINT `matchnba_ibfk_1` FOREIGN KEY (`IdSerie`) REFERENCES `serie` (`IdSerie`);

--
-- Contraintes pour la table `serie`
--
ALTER TABLE `serie`
  ADD CONSTRAINT `serie_ibfk_1` FOREIGN KEY (`IdEquipe1`) REFERENCES `equipe` (`IdEquipe`),
  ADD CONSTRAINT `serie_ibfk_2` FOREIGN KEY (`IdEquipe2`) REFERENCES `equipe` (`IdEquipe`);

--
-- Contraintes pour la table `stats`
--
ALTER TABLE `stats`
  ADD CONSTRAINT `stats_ibfk_1` FOREIGN KEY (`IdJoueur`) REFERENCES `joueur` (`idJoueur`),
  ADD CONSTRAINT `stats_ibfk_2` FOREIGN KEY (`IdSerie`) REFERENCES `serie` (`IdSerie`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
