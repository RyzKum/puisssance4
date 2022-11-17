-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 17 nov. 2022 à 09:43
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `databaseprojet`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `Usermail` varchar(255) NOT NULL,
  `Pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `dateIncri` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`Usermail`, `Pseudo`, `mdp`, `dateIncri`) VALUES
('grimaldi.baptiste@gmail.com', 'chacal', '1234', NULL),
('grimaldi.baptiste@gmail.com', 'chacal', '1234', '17/11/2022 09:31:21'),
('chacal.jfj@gmail.com', 'lol', '789', '17/11/2022 09:31:41');

-- --------------------------------------------------------

--
-- Structure de la table `jeu`
--

DROP TABLE IF EXISTS `jeu`;
CREATE TABLE IF NOT EXISTS `jeu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_jeu` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `message(tchat)`
--

DROP TABLE IF EXISTS `message(tchat)`;
CREATE TABLE IF NOT EXISTS `message(tchat)` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_jeu` int(11) NOT NULL,
  `id_expediteur` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date_heure_mess` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `score`
--

DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_joueur` int(255) NOT NULL,
  `id_jeu` int(255) NOT NULL,
  `difficulté_partie` int(3) NOT NULL,
  `score_partie` int(11) NOT NULL,
  `date_heure_partie` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utlisateur`
--

DROP TABLE IF EXISTS `utlisateur`;
CREATE TABLE IF NOT EXISTS `utlisateur` (
  `identifiant` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `date_heure_inscription` datetime NOT NULL,
  `date_heure_dern_co` datetime NOT NULL,
  PRIMARY KEY (`identifiant`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utlisateur`
--

INSERT INTO `utlisateur` (`identifiant`, `email`, `mot_de_passe`, `pseudo`, `date_heure_inscription`, `date_heure_dern_co`) VALUES
(1, 'fjdfqdkj.jfdf@gmail.com', 'fkjdjfkqfkj', 'ddddd', '2022-11-16 09:42:55', '2022-11-16 09:42:55'),
(2, 'grimaldi.bapitiste@gmail.com', 'peuimporte', 'Baptiste', '2022-11-16 09:51:56', '2022-11-16 09:51:56'),
(3, 'jordanlebg@gmail.com', 'peuimporte', 'jojo', '2022-11-16 09:54:08', '2022-11-16 09:54:08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
