-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 24 mai 2022 à 17:29
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
-- Base de données : `omnessante`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `IDADMIN` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `courriel` varchar(150) NOT NULL,
  `Mdp` varchar(150) NOT NULL,
  PRIMARY KEY (`IDADMIN`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`IDADMIN`, `Nom`, `Prenom`, `courriel`, `Mdp`) VALUES
(1, 'Mongolo', 'Anais', 'anais.mongolo@edu.ece.fr', 'snoopy'),
(2, 'Zouitene', 'Lydia', 'lydia.zouitene@edu.ece.fr', 'bob'),
(5, 'Oudjedaoui', 'sami', 'sami.oudjedaoui@edu.ece.fr', 'guts'),
(6, 'Admin', 'administrateur', 'admin@omnessante.com', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `IDPATIENT` int(11) NOT NULL AUTO_INCREMENT,
  `CarteVitale` bigint(12) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Adressel1` varchar(150) NOT NULL,
  `Adressel2` varchar(150) DEFAULT NULL,
  `Ville` varchar(150) DEFAULT NULL,
  `Tel` float DEFAULT NULL,
  `Identifiant` varchar(150) DEFAULT NULL,
  `Mdp` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`IDPATIENT`,`CarteVitale`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`IDPATIENT`, `CarteVitale`, `Nom`, `Prenom`, `Age`, `Adressel1`, `Adressel2`, `Ville`, `Tel`, `Identifiant`, `Mdp`) VALUES
(1, 186793300882003, 'bigson', 'Charles', 35, '83 rue sadi carnot', NULL, 'Genevilliers', 196959000, 'gibson.charles@gmail.com', 'gcharles'),
(2, 168082130798153, 'Oxenham', 'Elijah', 53, '51 Avenue Milles Lacroix', NULL, 'Elancourt', 164382000, 'oxenham.elijah@gmail.com', 'eoxenham'),
(3, 200040414303887, 'Mandic', 'Paula', 22, '65 rue de Penthièvre', NULL, 'Puteaux', 699464000, 'paula.mandic@gmail.com', 'pmandic'),
(4, 199128540271608, 'Brandt', 'Daniel', 22, '53 rue de Raymond Poincaré', NULL, 'Neuilly-sur-seine', 648135000, 'brandt.daniel@gmail.com', 'dbrandt'),
(5, 299044696701359, 'Katayama', 'Nui', 23, '70 rue de Strasbourg', NULL, 'Clichy', 659715000, 'nui.katayama@gmail.com', 'kayatayaman'),
(6, 102043378778148, 'Davide', 'Sesto', 20, '49 rue Léon Dierx', NULL, 'Livry Gargan', NULL, 'Sdavide@gmail.com', 'sestodavide!'),
(7, 203025069441196, 'Yohannes', 'Semhar', 19, '38 rue nationale', NULL, 'Paris', 793860000, 'semyoh@gmail.com', 'syohannes');

-- --------------------------------------------------------

--
-- Structure de la table `personnelsante`
--

DROP TABLE IF EXISTS `personnelsante`;
CREATE TABLE IF NOT EXISTS `personnelsante` (
  `IDPERSONNEL` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(150) NOT NULL,
  `Prenom` varchar(150) NOT NULL,
  `Specialite` varchar(50) NOT NULL,
  `Courriel` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `Photo` varchar(150) NOT NULL,
  PRIMARY KEY (`IDPERSONNEL`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personnelsante`
--

INSERT INTO `personnelsante` (`IDPERSONNEL`, `Nom`, `Prenom`, `Specialite`, `Courriel`, `mdp`, `Photo`) VALUES
(1, 'Murphy', 'shawn', 'Chirurgien', 'shawn.murphy@omnessante.com', 'bistouri', ''),
(2, 'Trafalgar D. Water', 'Law', 'Chirurgien', 'Trafalgerdwater.law@omnessante.com', 'opeopenomi', ''),
(3, 'Tony Tony', 'Chopper', 'Generaliste', 'tonytony.chopper@omnessante.fr', 'hitohitonomi', ''),
(4, 'Doctorine', 'Kureha', 'Generaliste', 'doctorine.kureha@omnessante.com', 'sorciere', ''),
(5, 'Dokutoru', 'Hoghback', 'Generaliste', 'dokutoru.hoghback@omnessante.com', 'zombie', ''),
(6, 'Xiu', 'Mao', 'Generaliste', 'xiu.mao@omnessante.com', 'generaliste', ''),
(7, 'Eugen Sauceda', 'Aguirre', 'Generaliste', 'eugensauceda.aguirre@omnessante.com', 'generaliste', ''),
(8, 'Silva', 'Vinicius Castro', 'Addictologie', 'silva.viniciuscastro@omnessante.com', 'addictologie', ''),
(9, 'Chubb', 'Longo', 'Andrologie', 'longo.chubb@omnessante.com', 'andrologie', ''),
(10, 'Engvik', 'jakob', 'cardiologie', 'jakob.engvik@omnessante.com', 'cardiologie', ''),
(11, 'Gairbekov', 'Albina', 'dermatologie', 'gairbekov.albina@omnessante.com', 'dermatologie', ''),
(12, 'Said', 'Jadwa Yusra', 'Gastro-hepato-enterologie', 'said.jadwayusra@omnessante.com', 'gastrohepato', ''),
(13, 'Urner', 'Anne', 'Gynecologie', 'anne.urner@omnessante.com', 'gynecologie', ''),
(14, 'Horiuchi', 'Sumie', 'IST', 'horiuchi.sumie@omnessante.com', 'ist', ''),
(15, 'Artemeyeva', 'Lina', 'Osteopathie', 'lina.artemeyeva@omnessante.com', 'osteopathie', '');

-- --------------------------------------------------------

--
-- Structure de la table `rendezvous`
--

DROP TABLE IF EXISTS `rendezvous`;
CREATE TABLE IF NOT EXISTS `rendezvous` (
  `Date` datetime(4) NOT NULL,
  `Duree` time NOT NULL,
  `Motif` varchar(50) DEFAULT NULL,
  `IDPATIENT` int(11) NOT NULL,
  `IDPERSONNEL` int(11) NOT NULL,
  `CarteVitale` bigint(10) NOT NULL,
  PRIMARY KEY (`Date`,`IDPERSONNEL`) USING BTREE,
  KEY `RENDEZVOUS_PATIENT0_FK` (`IDPATIENT`,`CarteVitale`),
  KEY `RENDEZVOUS_PERSONNELSANTE_FK` (`IDPERSONNEL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rendezvous`
--

INSERT INTO `rendezvous` (`Date`, `Duree`, `Motif`, `IDPATIENT`, `IDPERSONNEL`, `CarteVitale`) VALUES
('2022-05-01 13:25:00.0000', '00:35:00', NULL, 3, 7, 200040414303887),
('2022-06-01 10:00:00.0000', '00:50:00', NULL, 5, 2, 299044696701359),
('2022-06-01 16:45:00.0000', '00:00:00', NULL, 7, 7, 203025069441196),
('2022-06-02 14:30:00.0000', '00:25:00', NULL, 1, 3, 186793300882003),
('2022-06-02 15:00:00.7970', '01:30:00', NULL, 6, 1, 102043378778148),
('2022-06-12 09:15:00.8850', '00:30:00', NULL, 7, 8, 203025069441196),
('2022-06-13 18:05:00.0000', '00:30:00', NULL, 4, 10, 199128540271608),
('2022-06-16 12:00:00.0000', '00:45:00', NULL, 1, 11, 186793300882003),
('2022-06-22 12:10:01.0000', '00:15:00', NULL, 2, 12, 168082130798153);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD CONSTRAINT `RENDEZVOUS_PATIENT0_FK` FOREIGN KEY (`IDPATIENT`,`CarteVitale`) REFERENCES `patient` (`IDPATIENT`, `CarteVitale`),
  ADD CONSTRAINT `RENDEZVOUS_PERSONNELSANTE_FK` FOREIGN KEY (`IDPERSONNEL`) REFERENCES `personnelsante` (`IDPERSONNEL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
