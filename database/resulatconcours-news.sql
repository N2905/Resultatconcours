-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 09 mars 2020 à 21:13
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
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `candidat`
--

INSERT INTO `candidat` (`cand_id`, `nom_cand`, `prenom_cand`, `cand_anne_bac`, `cand_date_naiss`, `cand_pays`, `cin_cand`, `email_cand`, `cand_num_bac`, `cand_indication`, `cand_lieu_naiss`, `cand_serie`, `tel_cand`, `cand_nationalite`, `cand_codepostale`, `cand_ville`, `cand_lieu_cin`, `cand_du_cin`, `cand_sexe`, `centre_id`, `parc_id`, `anne_acc`) VALUES
(1, 'Nomena', 'Tahina', '2010', '09/08/1990', 'Madagascar', '123 678 456 34', 'nomena@gmail.com', '23', 'Mention  bien', 'Ihosy', 'A2', '0345687905', 'Malagasy', 407, 'Antsohihy', 'Ihosy', '12/02/2008', 'Féminin', 5, 10, 2020),
(2, 'NOMENJANAHARY', 'Jeanne Sanida', '2012', '11/04/1996', 'Madagascar', '413012030730', 'sani@gmail.com', '156', 'Mention Très-Bien', 'Andapa', 'A2', '0327550278', 'Malagasy', 101, 'Antananarive', 'Antsohihy', '22/03/2018', 'Féminin', 5, 10, 2020),
(26, 'BEANJARA ', 'Wellby', '2011', '06/08/1992', 'Madagascar', '413 045 768 45', 'beanjara@gmail.com', '56', 'Mention passable', 'Ambalakirajy', 'A1', '0320403459', 'Malagasy', 415, 'Madriitsara', 'Madritsara', '04/09/2012', 'Féminin', 5, 10, 2020),
(28, 'ANDRIANIMANANA', 'Jaden', '2020-03-14', '30/12/2000', 'Madagascar', '123456789321', 'arbandry@gmail.com', '10', 'Mention  bien', 'Tana', 'D', '0320403459', 'Malagasy', 101, 'AIX EN OTHE', 'Antananarivo', '12/02/2018', 'Masculin', 5, 10, 2020),
(27, 'RALIARISOA', 'Jeanne', '2020-03-20', '12/01/1995', 'Madagascar', '213965785674', 'raliarisoa@gmail.com', '445', 'Mention  bien', 'Ambositra', 'A1', '0320403459', 'Malagasy', 301, 'Ambositra', 'Ambositra', '09/03/2013', 'Féminin', 5, 10, 2019),
(29, 'RAKOTONIRINA', 'Tsirimalala Armandine', '2015', '15/02/1997', 'Madagascar', '012345987345', 'rakotonirina@gmail.com', '225', 'Mention Assez- bien', 'Malaimbady', 'D', '0322903487', 'Malagasy', 201, 'Malaimbady', 'Morondava', '12/02/2015', 'Féminin', 5, 10, 2019),
(30, 'JAOFENO', 'Raoul', '2009', '09/08/1989', 'Madagascar', '413 903 324 12', 'jaofeno@gmail.com', '37', 'Mention  bien', 'Antsohihy', 'A1', '032 34 567 89', 'Malagasy', 407, 'Antsohihy', 'Antsohihy', '04/09/2007', 'Masculin', 7, 2, 2020),
(31, 'TANJONA', 'Aldo', '', '10/09/1988', 'Madagascar', '123 678 456 34', 'tanjona@gmail.com', '', 'Mention Très- bien', 'Antananarivo', 'C', '033 67 897 45', 'Malagasy', 101, 'Tananarive', 'Antananarivo', '05/10/2006', 'Féminin', 5, 10, 2020),
(32, 'VOLATINA', 'Mamy', '2001', '10/08/1988', 'Madagascar', '413 903 324 12', 'volatina@gmail.com', '38', 'Mention Assez- bien', 'Antsohihy', 'C', '034 45 678 90', 'Malagasy', 407, 'Antsohihy', 'Antsohihy', '07/09/2006', 'Féminin', 5, 10, 2020),
(33, 'EMMA', 'Bernard', '2011', '06/08/1990', 'Etats-Unis', '123 456 789 06', 'emma@gmail.yahoo', '47', 'Mention passable', 'New York', 'A1', '124567890', 'Etrangere', 347, 'Los Angeles', 'New York', '12/02/2008', 'Masculin', 1, 11, 2020),
(34, 'ALIDA', 'Solo', '2011', '09/17/1990', 'Madagascar', '012345987348', 'alida@gmail.com', '49', 'Mention Très- bien', 'Ambalavao', 'A2', '0322967548', 'Malagasy', 198, 'Ambalavao', 'Ambalavao', '12/02/2008', 'Féminin', 5, 10, 2020),
(35, 'TANTELY ', 'Sanida', '2013', '12/02/1995', 'Madagascar', '123 673 456 34', 'tantely@gmail.com', '40', 'Mention  bien', 'Ambositra', 'D', '0327550275', 'Malagasy', 101, 'Ambositra', 'Ambositra', '12/02/2008', 'Féminin', 5, 10, 2020),
(36, 'TANTELY ', 'JAMES', '2016', '06/08/1992', 'Madagascar', '413 903 324 12', 'james@gmail.com', '2250', 'Mention Très- bien', 'Malaimbady', 'A2', '0327550278', 'Malagasy', 201, 'Malaimbady', 'Malaimbandy', '09/04/2015', 'Féminin', 5, 10, 2019),
(37, 'ONJANIAINA ', 'EMMA', '2006', '12/01/1995', 'Madagascar', '012345987345', 'onjalalaina@gmail.com', '156', 'Mention Assez- bien', 'Ambositra', 'C', '034 56 746 90', 'Malagasy', 415, 'Ambositra', 'Ambositra', '14/10/2006', 'Féminin', 1, 13, 2019),
(38, 'TATIANA ', 'Fanampy', '2015', '15/02/1997', 'Madagascar', '213965785674', 'tatiana@gmail.com', '153', 'Mention Assez- bien', 'Morondava', 'D', '034 02 678 01', 'Malagasy', 32, 'MORONDAVA', 'Morondava', '12/02/2015', 'Féminin', 5, 10, 2019),
(39, 'NOMENJANAHARY', 'Jeanne', '12/04/2018', '10/01/2001', 'Madagascar', '511 011 5646 5', 'jeanne@gmail.com', '0447', 'Mention  bien', 'FORT-DAUPHIN', 'A2', '034 64 847 24', 'Malagasy', 614, 'ANOSY', 'FORT-DAUPHIN', '12/02/2018', 'Féminin', 5, 10, 2019),
(40, 'RABEZAFY', 'NESMY', '2010', '09/08/1990', 'Madagascar', '609 362 645 53', 'nesmy@gmail.com', '6378', 'Mention Assez- bien', 'Antalaha', 'A1', '033 67 435 53', 'Malagasy', 301, 'Antsohihy', 'Antalaha', '12/02/2008', 'Féminin', 5, 10, 2019),
(41, 'FAFY', 'Sanida', '04/05/2012', '12/01/1995', 'Madagascar', '238 678 981 34', 'fafy@gmail.com', '537', 'Mention passable', 'TULEAR', 'A2', '032 64 590 43', 'Malagasy', 32, 'TOLIARA', 'TULEAR', '09/07/2013', 'Féminin', 5, 10, 2019),
(42, 'RANDRIAMANONY', 'FREDDY', '09/04/2017', '04/09/2001', 'Madagascar', '519 511 910415', 'freddy@gmail.com', '3834', 'Mention Assez- bien', 'AMBOASARY', 'D', '033 54 653 01', 'Malagasy', 613, 'AmbosarY', 'AMBOASARY', '12/02/2018', 'Féminin', 6, 13, 2019),
(43, 'HAOVA', '', '2014', '11/08/1993', 'Madagascar', '321 678 654 11', 'haova@gmail.com', '546', 'Mention Assez- bien', 'VANGAINDRANO', 'A1', '032 76 122 01', 'Malagasy', 502, 'MANAKARA', 'MANAKARA', '12/06/2003', 'Féminin', 5, 10, 2019),
(44, 'FENOSOA', 'FERDINAH', '2000', '30/12/1989', 'Madagascar', '518 435 635 53', 'fenosoa@gmail.com', '287', 'Mention  bien', 'AMBOVOBE', 'C', '033 08 783 98', 'Malagasy', 612, 'AMBOVOBE', 'AMBOVOBE', '11/04/1999', 'Féminin', 5, 10, 2019),
(45, 'TSILAVINA', 'MIANDOU ELVIO', '2018', '30/12/2003', 'Madagascar', '612 635 032 34', 'tsilavina@gmail.com', '536', 'Mention Très- bien', 'MANDRITSARA', 'A2', '032 75 532 00', 'Malagasy', 304, 'MANDRITSARA', 'MANDRITSARA', '03/09/2019', 'Féminin', 5, 10, 2019),
(46, 'HERITIANA', 'BOSCO', '2018', '09/08/2002', 'Madagascar', '517 073 634 13', 'heritina@gmail.com', '408', 'Mention Très- bien', 'BETROKA', 'A1', '034 20 666 64', 'Malagasy', 613, 'BETROKA', 'BETROKA', '22/03/2018', 'Féminin', 5, 10, 2019),
(47, 'SAMY', 'EDMOND', '1993', '04/07/1973', 'Madagascar', '520 517 183 35', 'samy@gmail.com', '547', 'Mention passable', 'IHOSY', 'A1', '033 76 949 11', 'Malagasy', 435, 'IHOSY', 'IHOSY', '12/06/1994', 'Masculin', 1, 12, 2019),
(48, 'TAFARINA ', 'Dulo', '2010', '12/01/1993', 'Madagascar', '123 675 456 34', 'tafarina@gmail.com', '46', 'Mention Assez- bien', 'Maroantsetsa', 'C', '0322967548', 'Malagasy', 456, 'Maroantsetsa', 'Maroantsetra', '19/07/2007', 'Masculin', 4, 14, 2020),
(49, 'FARANIRINA', 'Vanessa', '2009', '09/04/1990', 'Madagascar', '213965788674', 'faranirina@gmail.com', '12', 'Mention passable', 'VANGAINDRANO', 'C', '0327650275', 'Malagasy', 301, 'VANGAIDRANO', 'VANGAIDRANO', '12/04/2008', 'Féminin', 7, 2, 2020),
(50, 'ANNIE', '', '2004', '06/05/1992', 'Bresil', '413 046 788 45', 'anie@gmail.yahoo', '67', 'Mention Assez- bien', 'Rio de janero', 'A2', '0322987548', 'Etrangere', 897, 'Rio de janero', 'Rio de Janero', '12/02/2003', 'Féminin', 5, 10, 2020),
(51, 'FENO', 'Annie', '2010', '07/08/1992', 'Madagascar', '213965755674', 'feno@gmail.com', '895', 'Mention Très- bien', 'Befadriana', 'D', '0327967548', 'Malagasy', 411, 'Befadriana', 'Befadriana', '12/02/2008', 'Féminin', 5, 10, 2020),
(52, 'SOA', '', '2010', '15/06/1997', 'Madagascar', '213968785674', 'soa@gmail.com', '239', 'Mention Assez- bien', 'Ambositra', 'A2', '0322967546', 'Malagasy', 101, 'Tananarive', 'Antananarivo', '12/02/2008', 'Féminin', 3, 11, 2020),
(53, 'Dieu', 'Donne', '2019', '30/01/2000', 'Madagascar', '413 908 324 12', 'dieu@gmail.com', '389', 'Mention  bien', 'Antsohihy', 'A2', '0320967548', 'Malagasy', 407, 'Antsohihy', 'Antsohihy', '01/02/2018', 'Masculin', 3, 10, 2020),
(54, 'FANOMEZANA', 'Estella', '2003', '09/05/1990', 'Madagascar', '413 048 768 45', 'estella@gmail.com', '197', 'Mention Très- bien', 'AMBOASARY', 'D', '0322965548', 'Malagasy', 614, 'Ambosary', 'AMBOASARY', '12/02/2002', 'Féminin', 6, 12, 2020),
(55, 'ROCKY', '', '2009', '12/02/1995', 'Etats-Unis', '414 903 324 12', 'rocky@gmail.com', '567', 'Mention  bien', 'New York', 'D', '0322267543', 'Etrangere', 325, 'New York', 'New York', '02/02/2008', 'Masculin', 5, 11, 2020),
(56, 'MAHASOLO', '', '2016', '11/02/1997', 'Madagascar', '213965785674', 'mah@gmail.com', '387', 'Mention Très- bien', 'Ambositra', 'A2', '0328967548', 'Malagasy', 101, 'Ambositra', 'Ambositra', '12/02/2015', 'Masculin', 5, 10, 2020),
(57, 'DRALA', '', '', '', '', '', 'drala@gmail.com', '', 'Mention Très- bien', '', 'A2', '0327750275', 'Malagasy', 0, '', '', '', 'Masculin', 5, 10, 2020),
(58, 'TOVODRAINY', 'Fanampy', '2003', '12/07/1995', 'Madagascar', '012345907345', 'tovo@gmail.com', '197', 'Mention  bien', 'Malaimbady', 'A2', '0322767543', 'Malagasy', 613, 'Malaimbady', 'Malaimbandy', '12/02/2001', 'Masculin', 5, 10, 2020),
(59, 'RANDRIAMANOMPY', 'Jean', '', '', 'Madagascar', '', 'jen@gmail.com', '', 'Mention  bien', '', 'A2', '0322967543', 'Malagasy', 0, 'Fianarantsoa', '', '', 'Masculin', 5, 10, 2020),
(60, 'ANDRIANIMANANA', 'Armel', '', '', '', '', 'adry@gmail.com', '', 'Mention passable', '', 'D', '0322967548', 'Etrangere', 0, '', '', '', 'Féminin', 5, 10, 2020),
(61, 'NOMENJANAHARY', 'Fanah', '', '', '', '', 'fan@gmail.com', '', 'Mention  bien', '', 'D', '', 'Malagasy', 0, '', '', '', 'Féminin', 5, 10, 2020),
(62, 'FARANOMENA', 'Nelly', '', '', '', '', 'nelly@gmail.com', '', 'Mention Très- bien', '', 'D', '', 'Malagasy', 0, '', '', '', 'Féminin', 5, 10, 2020),
(63, 'RAKOTO', 'Lydovick', '', '', '', '', 'lydo@gmail.com', '', 'Mention passable', '', 'A2', '0327550275', 'Malagasy', 0, '', '', '', 'Féminin', 5, 10, 2020),
(64, 'FANOMEZANTSOA', 'Sylvia', '', '', '', '', 'syl@gmail.com', '', '', '', 'A1', '', 'Malagasy', 0, '', '', '', 'Masculin', 5, 10, 2020),
(65, 'HAOVA', 'Ferdinaho', '', '', '', '', 'fer@gmail.com', '', '', '', 'A1', '', 'Malagasy', 0, '', '', '', 'Masculin', 5, 10, 2020),
(66, 'MBOLAHASINA', '', '', '', '', '', 'mbl@gmail.com', '', '', '', 'A1', '0332967543', 'Malagasy', 0, '', '', '', 'Masculin', 5, 10, 2020),
(67, 'MBOLA', 'Sylvia', '', '', '', '', 'bl@gmail.com', '', '', '', 'D', '0337550275', 'Malagasy', 0, '', '', '', 'Féminin', 5, 10, 2020),
(68, 'NAMINIRINA', 'Hanta', '', '', '', '', 'hanta@gmail.com', '', '', '', 'D', '0347550275', '', 0, '', '', '', 'Féminin', 5, 10, 2020),
(69, 'TAFITASOA', 'Mamy', '', '', '', '', 'tafita@gmail.com', '', '', '', 'A2', '0332967543', 'Malagasy', 0, '', '', '', 'Masculin', 5, 10, 2020),
(70, 'YVON', 'Matias', '', '', '', '', 'matias@gmail.com', '', '', '', 'D', '2027550278', 'Etrangere', 0, '', '', '', 'Masculin', 5, 10, 2020);

-- --------------------------------------------------------

--
-- Structure de la table `centredexamen`
--

DROP TABLE IF EXISTS `centredexamen`;
CREATE TABLE IF NOT EXISTS `centredexamen` (
  `centre_id` int(11) NOT NULL AUTO_INCREMENT,
  `centre_lieu` varchar(50) NOT NULL,
  PRIMARY KEY (`centre_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `centredexamen`
--

INSERT INTO `centredexamen` (`centre_id`, `centre_lieu`) VALUES
(1, 'Fianarantsoa'),
(3, 'Diego'),
(4, 'Mahajanga'),
(5, 'Antananarivo'),
(6, 'Toliara'),
(7, 'Toamasina');

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `epreuve`
--

INSERT INTO `epreuve` (`epre_id`, `epre_nom_mat`, `coefficient`, `parc_id`) VALUES
(1, 'Français', 1, 2),
(2, 'Malagasy', 1, 2),
(3, 'Anglais', 1, 2),
(4, 'Français', 1, 10),
(5, 'Malagasy', 1, 10),
(6, 'Anglais', 1, 10),
(7, 'Français', 1, 11),
(8, 'Malagasy', 1, 11),
(9, 'Anglais', 1, 11),
(10, 'Français', 1, 12),
(11, 'Malagasy', 1, 12),
(12, 'Anglais', 1, 12);

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
(1, 'Sciences Infirmières'),
(2, 'Santé publique et communautaire');

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
) ENGINE=MyISAM AUTO_INCREMENT=133 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`note_id`, `note`, `anne`, `cand_id`, `epre_id`) VALUES
(1, 15, 2020, 1, 4),
(2, 15, 2020, 1, 5),
(3, 16, 2020, 1, 6),
(4, 10, 2020, 2, 4),
(5, 11, 2020, 2, 5),
(6, 14, 2020, 2, 6),
(7, 18, 2020, 26, 4),
(8, 15, 2020, 26, 5),
(9, 19, 2020, 26, 6),
(10, 17, 2020, 28, 4),
(11, 15, 2020, 28, 5),
(12, 15, 2020, 28, 6),
(13, 0, 2019, 27, 4),
(14, 0, 2019, 27, 5),
(15, 0, 2019, 27, 6),
(16, 0, 2019, 29, 4),
(17, 0, 2019, 29, 5),
(18, 0, 2019, 29, 6),
(19, 12, 2020, 30, 1),
(20, 15, 2020, 30, 2),
(21, 17, 2020, 30, 3),
(22, 15, 2020, 31, 4),
(23, 16, 2020, 31, 5),
(24, 18, 2020, 31, 6),
(25, 12, 2020, 32, 4),
(26, 14, 2020, 32, 5),
(27, 14, 2020, 32, 6),
(28, 12, 2020, 33, 7),
(29, 18, 2020, 33, 8),
(30, 16, 2020, 33, 9),
(31, 11, 2020, 34, 4),
(32, 8, 2020, 34, 5),
(33, 12, 2020, 34, 6),
(34, 15, 2020, 35, 4),
(35, 10, 2020, 35, 5),
(36, 12, 2020, 35, 6),
(37, 0, 2019, 36, 4),
(38, 0, 2019, 36, 5),
(39, 0, 2019, 36, 6),
(40, 0, 2019, 38, 4),
(41, 0, 2019, 38, 5),
(42, 0, 2019, 38, 6),
(43, 0, 2019, 39, 4),
(44, 0, 2019, 39, 5),
(45, 0, 2019, 39, 6),
(46, 0, 2019, 40, 4),
(47, 0, 2019, 40, 5),
(48, 0, 2019, 40, 6),
(49, 0, 2019, 41, 4),
(50, 0, 2019, 41, 5),
(51, 0, 2019, 41, 6),
(52, 0, 2019, 43, 4),
(53, 0, 2019, 43, 5),
(54, 0, 2019, 43, 6),
(55, 0, 2019, 44, 4),
(56, 0, 2019, 44, 5),
(57, 0, 2019, 44, 6),
(58, 0, 2019, 45, 4),
(59, 0, 2019, 45, 5),
(60, 0, 2019, 45, 6),
(61, 0, 2019, 46, 4),
(62, 0, 2019, 46, 5),
(63, 0, 2019, 46, 6),
(64, 0, 2019, 47, 10),
(65, 0, 2019, 47, 11),
(66, 0, 2019, 47, 12),
(67, 14, 2020, 49, 1),
(68, 12, 2020, 49, 2),
(69, 9, 2020, 49, 3),
(70, 15, 2020, 50, 4),
(71, 10, 2020, 50, 5),
(72, 17, 2020, 50, 6),
(73, 12, 2020, 51, 4),
(74, 19, 2020, 51, 5),
(75, 5, 2020, 51, 6),
(76, 15, 2020, 52, 7),
(77, 12, 2020, 52, 8),
(78, 11, 2020, 52, 9),
(79, 14, 2020, 53, 4),
(80, 15, 2020, 53, 5),
(81, 17, 2020, 53, 6),
(82, 12, 2020, 54, 10),
(83, 14, 2020, 54, 11),
(84, 17, 2020, 54, 12),
(85, 15, 2020, 55, 7),
(86, 18, 2020, 55, 8),
(87, 11, 2020, 55, 9),
(88, 15, 2020, 56, 4),
(89, 12, 2020, 56, 5),
(90, 9, 2020, 56, 6),
(91, 10, 2020, 57, 4),
(92, 14, 2020, 57, 5),
(93, 15, 2020, 57, 6),
(94, 13, 2020, 58, 4),
(95, 14, 2020, 58, 5),
(96, 14, 2020, 58, 6),
(97, 14, 2020, 59, 4),
(98, 14, 2020, 59, 5),
(99, 14, 2020, 59, 6),
(100, 17, 2020, 60, 4),
(101, 12, 2020, 60, 5),
(102, 15, 2020, 60, 6),
(103, 12, 2020, 61, 4),
(104, 15, 2020, 61, 5),
(105, 16, 2020, 61, 6),
(106, 12, 2020, 62, 4),
(107, 14, 2020, 62, 5),
(108, 10, 2020, 62, 6),
(109, 14, 2020, 63, 4),
(110, 13, 2020, 63, 5),
(111, 9, 2020, 63, 6),
(112, 11, 2020, 64, 4),
(113, 11, 2020, 64, 5),
(114, 15, 2020, 64, 6),
(115, 10, 2020, 65, 4),
(116, 9, 2020, 65, 5),
(117, 18, 2020, 65, 6),
(118, 5, 2020, 66, 4),
(119, 16, 2020, 66, 5),
(120, 14, 2020, 66, 6),
(121, 14, 2020, 67, 4),
(122, 15, 2020, 67, 5),
(123, 12, 2020, 67, 6),
(124, 12, 2020, 68, 4),
(125, 18, 2020, 68, 5),
(126, 11, 2020, 68, 6),
(127, 0, 2020, 69, 4),
(128, 0, 2020, 69, 5),
(129, 0, 2020, 69, 6),
(130, 15, 2020, 70, 4),
(131, 13, 2020, 70, 5),
(132, 12, 2020, 70, 6);

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `parcours`
--

INSERT INTO `parcours` (`parc_id`, `parc_nom`, `parc_diplome`, `ment_id`) VALUES
(2, 'Soins Ophtalmiques', 'Master', 1),
(10, 'Anasthésie- Réanimation', 'Master', 2),
(11, 'Gestion des Urgences et Catastrophes', 'Licence', 1),
(12, 'Cadre de Sante', 'Master', 1),
(13, 'Nutrition Communautaire', 'Licence', 2),
(14, 'Promotion de la Santé', 'Master', 2);

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
