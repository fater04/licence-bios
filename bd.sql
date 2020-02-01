-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 01 fév. 2020 à 15:39
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `licence`
--

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `nom_mere` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `profession` varchar(50) DEFAULT NULL,
  `sexe` varchar(50) DEFAULT NULL,
  `date_naissance` varchar(50) DEFAULT NULL,
  `cin` varchar(50) DEFAULT NULL,
  `nif` varchar(100) NOT NULL DEFAULT '',
  `telephone` varchar(50) DEFAULT NULL,
  `statut_matrimonial` varchar(50) DEFAULT NULL,
  `groupe_sanguin` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`id`, `code`, `nom`, `prenom`, `nom_mere`, `adresse`, `email`, `profession`, `sexe`, `date_naissance`, `cin`, `nif`, `telephone`, `statut_matrimonial`, `groupe_sanguin`) VALUES
(3, '8204-28092019', 'diohdih', 'ihiih', 'ihihih', 'eee', 'client@gmail.com', 'ee', 'Masculin', '10/02/2014', '37-53-75-3935-93-95390', '', '(386) 306-3936', 'celibataire', 'ab-'),
(5, '4821-28092019', 'dddd', 'dd', 'dddd', 'dd', 'info@refletcreole.com', 'ddd', 'Masculin', '01/01/2004', '30-83-07-8389-36-83683', '', '(393) 698-3638', 'celibataire', 'ab+'),
(6, '3112-28092019', 'wee', 'qepjekej', 'eeoje', 'ff', 'admin@gmail.com', 'ff', 'Masculin', '01/01/2016', '99-39-73-9730-73-07307', '', '(398) 636-3630', 'celibataire', 'ab+'),
(8, '785-1210', 'nom', 'prenom', 'personne reference', 'rien rien rien rien rien rien', 'email@gmail.com', 'profession', 'Feminin', '11/10/2009', '28-52-82-2929-29-00000', '', '(509) 3102-0000', 'celibataire', 'a+'),
(9, '85-0401', 'ee', 'ee', '', 'd', '', '', 'Masculin', '01/01/1992', '38-73-57-3737-93-93939', '338-753-875-3', '', '', ''),
(29, '300-0401', 'weekend-Dolphe', 'Aldophe', 'weekend-Dolphe', 'Pv', 'aldophe01@gmail.com', 'Ing informatique', 'Masculin', '11/02/1995', '', '002-848-484-8', '(509) 3886-8420', 'celibataire', 'o+'),
(30, '968-0701', 'ee', 'kenny', 'mmmm', 'vcfd,dm,ddf', 'aldophe01@gmail.com', 'mmm', 'Masculin', '04/10/2010', '43-67-43-8943-79-83473', '', '(509) 3886-8320', 'celibataire', 'o+'),
(31, '783-0901', 'JJM', 'BOZ', 'ti joe', 'PV', 'aldophe01@gmail.com', 'ing', 'Masculin', '03/02/2000', '', '903-493-409-3', '(509) 3886-8439', 'celibataire', 'o+');

-- --------------------------------------------------------

--
-- Structure de la table `rendezvous`
--

DROP TABLE IF EXISTS `rendezvous`;
CREATE TABLE IF NOT EXISTS `rendezvous` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_patient` varchar(100) DEFAULT NULL,
  `date_rendezvous` varchar(100) DEFAULT NULL,
  `heure_debut` varchar(100) DEFAULT NULL,
  `heure_fin` varchar(100) DEFAULT NULL,
  `id_medecin` int(11) DEFAULT NULL,
  `note` mediumtext,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `code_patient` (`code_patient`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rendezvous`
--

INSERT INTO `rendezvous` (`id`, `code_patient`, `date_rendezvous`, `heure_debut`, `heure_fin`, `id_medecin`, `note`, `date_creation`, `date_debut`, `date_fin`) VALUES
(15, '785-1210', '2020-01-19', '20:00', '22:00', 1, 'ghjhlk;j;lk;\\\'', '2020-01-19 10:18:47', '2020-01-19 20:00:00', '2020-01-19 22:00:00'),
(16, '785-1210', '2020-01-19', '13:45', '13:50', 1, 'gjhk', '2020-01-19 10:20:42', '2020-01-19 13:45:00', '2020-01-19 13:50:00'),
(17, '8204-28092019', '2020-01-22', '13:45', '13:50', 1, 'd', '2020-01-20 14:54:19', '2020-01-22 13:45:00', '2020-01-22 13:50:00'),
(18, '8204-28092019', '2020-01-29', '13:45', '13:50', 1, 'sd', '2020-01-27 11:41:21', '2020-01-29 13:45:00', '2020-01-29 13:50:00');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

DROP TABLE IF EXISTS `salle`;
CREATE TABLE IF NOT EXISTS `salle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(100) NOT NULL,
  `types` varchar(100) NOT NULL,
  `lit` varchar(100) NOT NULL,
  `disponible` enum('OUI','NON') NOT NULL DEFAULT 'OUI',
  `dat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id`, `numero`, `types`, `lit`, `disponible`, `dat`) VALUES
(2, '9493', 'hospitalisation', '3', 'NON', '2020-01-28 21:44:20'),
(3, '7264', 'public', '5', 'OUI', '2020-01-28 21:49:35'),
(4, '7451', 'public', '5', 'OUI', '2020-02-01 10:29:55');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` bigint(100) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` varchar(100) DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `active` enum('oui','non') DEFAULT 'oui',
  `motdepasse` varchar(100) DEFAULT NULL,
  `statut` varchar(50) DEFAULT '0',
  `photo` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `email`, `telephone`, `nom`, `prenom`, `role`, `active`, `motdepasse`, `statut`, `photo`) VALUES
(2, 'fater', 'wilkerdorvelus@yahoo.com', '31110731', 'dorvelus', 'wilker', 'admin', 'oui', '$2y$10$EyVzKHeNEJPcfL8f8HFTSeXEiCPw7tCapxOyxkxixkDUJmhFXGpTC', '1', 'app/DefaultApp/public/img/pp.jpg'),
(3, 'ibibb', 'admin@gmai.com', '+509 3111 07 31', 'test', 'lele', 'admin', 'oui', '7b21848ac9af35be0ddb2d6b9fc3851934db8420', '0', 'n/a'),
(4, 'admin', 'admin@gmail.com', '31110731', 'admin', 'admin', '', 'oui', '$2y$10$RcoN/6FtzpZtbBKM.O.ybOtuv2GIEtKCI1F10RBchkeYZoUpB4yDO', '1', 'app/DefaultApp/public/img/22-222243_emoji-transparent-smiley-face-emoji-with-no-background.png.jpg');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD CONSTRAINT `rendezvous_ibfk_1` FOREIGN KEY (`code_patient`) REFERENCES `patient` (`code`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
