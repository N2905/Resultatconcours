-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 08 mars 2020 à 14:07
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

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
  `prenom_cand` varchar(30) DEFAULT NULL,
  `cand_anne_bac` varchar(10) NOT NULL,
  `cand_date_naiss` varchar(10) NOT NULL,
  `cand_pays` varchar(30) DEFAULT NULL,
  `cin_cand` varchar(14) DEFAULT NULL,
  `email_cand` varchar(50) DEFAULT NULL,
  `cand_num_bac` varchar(20) NOT NULL,
  `cand_indication` varchar(30) DEFAULT NULL,
  `cand_lieu_naiss` varchar(30) NOT NULL,
  `cand_serie` varchar(2) NOT NULL,
  `tel_cand` varchar(14) DEFAULT NULL,
  `cand_nationalite` varchar(14) DEFAULT NULL,
  `cand_codepostale` int(10) DEFAULT NULL,
  `cand_ville` varchar(30) DEFAULT NULL,
  `cand_lieu_cin` varchar(50) NOT NULL,
  `cand_du_cin` varchar(11) NOT NULL,
  `cand_sexe` varchar(20) NOT NULL,
  `centre_id` int(11) NOT NULL,
  `parc_id` int(11) NOT NULL,
  `anne_acc` year(4) NOT NULL,
  PRIMARY KEY (`cand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `candidat`
--

INSERT INTO `candidat` (`cand_id`, `nom_cand`, `prenom_cand`, `cand_anne_bac`, `cand_date_naiss`, `cand_pays`, `cin_cand`, `email_cand`, `cand_num_bac`, `cand_indication`, `cand_lieu_naiss`, `cand_serie`, `tel_cand`, `cand_nationalite`, `cand_codepostale`, `cand_ville`, `cand_lieu_cin`, `cand_du_cin`, `cand_sexe`, `centre_id`, `parc_id`, `anne_acc`) VALUES
(1, 'Nomena', 'Tahina', '2015', 'RRTTT', 'Madagascar', 'GHJ', 'HJJ', '23', 'KI', 'GHH', 'G', 'JJJ', 'Malagasy', 407, 'Antsohihy', 'Antalaha', '12/02/2001', 'Féminin', 3, 2, 2020),
(2, 'NOMENJANAHARY', 'Jeanne Sanida', '2012', '11/04/1996', 'Madagascar', '413012030730', 'sani@gmail.com', '156', 'Mention Très-Bien', 'Andapa', 'A2', '0327550278', 'Malagasy', 101, 'Antananarive', 'Antsohihy', '22/03/2018', 'Féminin', 3, 2, 2020),
(26, '', 'tets', '', '2020-03-26', 'jgjhgj', '4545', 'arbandry@gmail.com', '', 'hgg', 'hvhj', 'A1', '0320403459', '', 10160, 'AIX EN OTHE', '', '2020-03-04', 'Masculin', 1, 2, 2020),
(28, 'ANDRIANIMANANA', 'Jaden', '2020-03-14', '2020-03-06', 'Mada', '123456789321', 'arbandry@gmail.com', '10', 'D', 'Tana', 'D', '0320403459', 'Malagasy', 10160, 'AIX EN OTHE', '', '', 'Masculin', 3, 2, 2020),
(27, 'te', 'tets', '2020-03-20', '2020-03-19', 'jgjhgj', '4545', 'arbandry@gmail.com', '445', 'hgg', '', 'A1', '0320403459', 'ffh', 10160, 'AIX EN OTHE', 'hgcgc', '2020-03-25', 'Féminin', 1, 10, 2019);

-- --------------------------------------------------------

--
-- Structure de la table `centredexamen`
--

DROP TABLE IF EXISTS `centredexamen`;
CREATE TABLE IF NOT EXISTS `centredexamen` (
  `centre_id` int(11) NOT NULL AUTO_INCREMENT,
  `centre_lieu` varchar(50) NOT NULL,
  PRIMARY KEY (`centre_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `centredexamen`
--

INSERT INTO `centredexamen` (`centre_id`, `centre_lieu`) VALUES
(1, 'Fianarantsoa'),
(3, 'Diego'),
(4, 'Mahajanga');

-- --------------------------------------------------------

--
-- Structure de la table `epreuve`
--

DROP TABLE IF EXISTS `epreuve`;
CREATE TABLE IF NOT EXISTS `epreuve` (
  `epre_id` int(11) NOT NULL AUTO_INCREMENT,
  `epre_nom_mat` varchar(50) NOT NULL,
  `coefficient` int(4) NOT NULL,
  `parc_id` int(11) NOT NULL,
  PRIMARY KEY (`epre_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `epreuve`
--

INSERT INTO `epreuve` (`epre_id`, `epre_nom_mat`, `coefficient`, `parc_id`) VALUES
(1, 'Français', 1, 2),
(2, 'Malagasy', 1, 2),
(3, 'Anglais', 1, 2);

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
(1, 'Communautaireee'),
(2, 'Infirmiere');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `note_id` int(11) NOT NULL AUTO_INCREMENT,
  `note` float NOT NULL,
  `anne` year(4) NOT NULL,
  `cand_id` int(11) NOT NULL,
  `epre_id` int(11) NOT NULL,
  PRIMARY KEY (`note_id`),
  UNIQUE KEY `anne` (`anne`,`cand_id`,`epre_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`note_id`, `note`, `anne`, `cand_id`, `epre_id`) VALUES
(18, 8, 2020, 1, 1),
(19, 12, 2020, 1, 2),
(20, 7, 2020, 1, 3),
(21, 15, 2020, 2, 1),
(22, 5, 2020, 2, 2),
(23, 12, 2020, 2, 3),
(32, 14, 2020, 26, 3),
(31, 12, 2020, 26, 2),
(30, 10, 2020, 26, 1),
(33, 11, 2020, 27, 1),
(34, 9, 2020, 27, 2),
(35, 9, 2020, 27, 3),
(36, 2, 2020, 28, 1),
(37, 3, 2020, 28, 2),
(38, 2, 2020, 28, 3);

-- --------------------------------------------------------

--
-- Structure de la table `parcours`
--

DROP TABLE IF EXISTS `parcours`;
CREATE TABLE IF NOT EXISTS `parcours` (
  `parc_id` int(11) NOT NULL AUTO_INCREMENT,
  `parc_nom` varchar(50) NOT NULL,
  `parc_diplome` varchar(20) NOT NULL,
  `ment_id` int(11) NOT NULL,
  PRIMARY KEY (`parc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `parcours`
--

INSERT INTO `parcours` (`parc_id`, `parc_nom`, `parc_diplome`, `ment_id`) VALUES
(2, 'Nutrition', 'Master', 1),
(10, 'Parcours 2', 'Master', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '0',
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `nom`, `prenom`, `role`, `status`) VALUES
(1, 'admin', 'arbandry@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'NELLY', 'Bernard', 0, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
