-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 09 fév. 2020 à 18:48
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `resulatconcours`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

DROP TABLE IF EXISTS `candidat`;
CREATE TABLE IF NOT EXISTS `candidat` (
  `cand_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_cand` varchar(30) NOT NULL,
  `prenom_cand` varchar(30) NOT NULL,
  `cand_anne_bac` int(10) NOT NULL,
  `cand_date_naiss` varchar(10) NOT NULL,
  `cand_pays` varchar(30) NOT NULL,
  `cin_cand` varchar(14) NOT NULL,
  `email_cand` varchar(50) NOT NULL,
  `cand_num_bac` int(20) NOT NULL,
  `cand_indication` varchar(30) NOT NULL,
  `cand_lieu_naiss` varchar(30) NOT NULL,
  `cand_serie` varchar(2) NOT NULL,
  `tel_cand` varchar(14) NOT NULL,
  `cand_nationalite` varchar(14) NOT NULL,
  `cand_codepostale` int(10) NOT NULL,
  `cand_ville` varchar(30) NOT NULL,
  PRIMARY KEY (`cand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `candidat`
--

INSERT INTO `candidat` (`cand_id`, `nom_cand`, `prenom_cand`, `cand_anne_bac`, `cand_date_naiss`, `cand_pays`, `cin_cand`, `email_cand`, `cand_num_bac`, `cand_indication`, `cand_lieu_naiss`, `cand_serie`, `tel_cand`, `cand_nationalite`, `cand_codepostale`, `cand_ville`) VALUES
(1, 'Nomena', 'Tahina', 2018, 'RRTTT', 'HYJ', 'GHJ', 'HJJ', 36, 'KI', 'GHH', 'G', 'JJJ', 'FFG', 407, 'HJKK'),
(2, 'RAKOTO', 'Jean', 2018, '', '', '', '', 0, '', '', '', '', '', 0, ''),
(3, 'Nel', 'Fanahy', 2020, '', '', '', '', 0, '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `centredexamen`
--

DROP TABLE IF EXISTS `centredexamen`;
CREATE TABLE IF NOT EXISTS `centredexamen` (
  `centre_id` int(11) NOT NULL AUTO_INCREMENT,
  `centre_lieu` varchar(50) NOT NULL,
  PRIMARY KEY (`centre_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `centredexamen`
--

INSERT INTO `centredexamen` (`centre_id`, `centre_lieu`) VALUES
(1, 'Fianarantsoa'),
(3, 'Diegoo');

-- --------------------------------------------------------

--
-- Structure de la table `epreuve`
--

DROP TABLE IF EXISTS `epreuve`;
CREATE TABLE IF NOT EXISTS `epreuve` (
  `epre_id` int(11) NOT NULL AUTO_INCREMENT,
  `epre_nom_mat` varchar(50) NOT NULL,
  `coefficient` int(4) NOT NULL,
  PRIMARY KEY (`epre_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `epreuve`
--

INSERT INTO `epreuve` (`epre_id`, `epre_nom_mat`, `coefficient`) VALUES
(1, 'Français', 1),
(2, 'Malagasy', 1);

-- --------------------------------------------------------

--
-- Structure de la table `mention`
--

DROP TABLE IF EXISTS `mention`;
CREATE TABLE IF NOT EXISTS `mention` (
  `ment_id` int(11) NOT NULL AUTO_INCREMENT,
  `ment_nom` varchar(50) NOT NULL,
  PRIMARY KEY (`ment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mention`
--

INSERT INTO `mention` (`ment_id`, `ment_nom`) VALUES
(1, 'Assainisement'),
(2, 'Infirmiere');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `note_id` int(11) NOT NULL AUTO_INCREMENT,
  `moyenne` int(11) NOT NULL,
  PRIMARY KEY (`note_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `parcours`
--

DROP TABLE IF EXISTS `parcours`;
CREATE TABLE IF NOT EXISTS `parcours` (
  `parc_id` int(11) NOT NULL AUTO_INCREMENT,
  `parc_nom` varchar(50) NOT NULL,
  `parc_diplome` varchar(20) NOT NULL,
  PRIMARY KEY (`parc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `parcours`
--

INSERT INTO `parcours` (`parc_id`, `parc_nom`, `parc_diplome`) VALUES
(1, 'AGS', 'Licence'),
(2, 'Nutrition', 'Master');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
