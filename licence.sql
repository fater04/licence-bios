-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 27 sep. 2019 à 17:10
-- Version du serveur :  5.7.24
-- Version de PHP :  7.3.1

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
(4, 'admin', 'admin@gmail.com', '31110731', 'admin', 'admin', '', 'oui', '$2y$10$RcoN/6FtzpZtbBKM.O.ybOtuv2GIEtKCI1F10RBchkeYZoUpB4yDO', '0', 'app/DefaultApp/public/img/22-222243_emoji-transparent-smiley-face-emoji-with-no-background.png.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
