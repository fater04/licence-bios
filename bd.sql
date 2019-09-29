-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table licence.patient
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
  `telephone` varchar(50) DEFAULT NULL,
  `statut_matrimonial` varchar(50) DEFAULT NULL,
  `groupe_sanguin` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table licence.patient: ~3 rows (approximately)
DELETE FROM `patient`;
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
INSERT INTO `patient` (`id`, `code`, `nom`, `prenom`, `nom_mere`, `adresse`, `email`, `profession`, `sexe`, `date_naissance`, `cin`, `telephone`, `statut_matrimonial`, `groupe_sanguin`) VALUES
	(3, '8204-28092019', 'diohdih', 'ihiih', 'ihihih', 'eee', 'client@gmail.com', 'ee', 'Masculin', '10/02/2014', '37-53-75-3935-93-95390', '(386) 306-3936', 'celibataire', 'ab-'),
	(5, '4821-28092019', 'dddd', 'dd', 'dddd', 'dd', 'info@refletcreole.com', 'ddd', 'Masculin', '01/01/2004', '30-83-07-8389-36-83683', '(393) 698-3638', 'celibataire', 'ab+'),
	(6, '3112-28092019', 'wee', 'qepjekej', 'eeoje', 'ff', 'admin@gmail.com', 'ff', 'Masculin', '01/01/2016', '99-39-73-9730-73-07307', '(398) 636-3630', 'celibataire', 'ab+');
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;

-- Dumping structure for table licence.utilisateur
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

-- Dumping data for table licence.utilisateur: ~2 rows (approximately)
DELETE FROM `utilisateur`;
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
INSERT INTO `utilisateur` (`id`, `pseudo`, `email`, `telephone`, `nom`, `prenom`, `role`, `active`, `motdepasse`, `statut`, `photo`) VALUES
	(2, 'fater', 'wilkerdorvelus@yahoo.com', '31110731', 'dorvelus', 'wilker', 'admin', 'oui', '$2y$10$EyVzKHeNEJPcfL8f8HFTSeXEiCPw7tCapxOyxkxixkDUJmhFXGpTC', '1', 'app/DefaultApp/public/img/pp.jpg'),
	(3, 'ibibb', 'admin@gmai.com', '+509 3111 07 31', 'test', 'lele', 'admin', 'oui', '7b21848ac9af35be0ddb2d6b9fc3851934db8420', '0', 'n/a'),
	(4, 'admin', 'admin@gmail.com', '31110731', 'admin', 'admin', '', 'oui', '$2y$10$RcoN/6FtzpZtbBKM.O.ybOtuv2GIEtKCI1F10RBchkeYZoUpB4yDO', '1', 'app/DefaultApp/public/img/22-222243_emoji-transparent-smiley-face-emoji-with-no-background.png.jpg');
/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
