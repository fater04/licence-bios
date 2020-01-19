-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.10-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table licence.rendezvous
CREATE TABLE IF NOT EXISTS `rendezvous` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_patient` varchar(100) DEFAULT NULL,
  `date_rendezvous` varchar(100) DEFAULT NULL,
  `heure_debut` varchar(100) DEFAULT NULL,
  `heure_fin` varchar(100) DEFAULT NULL,
  `id_medecin` int(11) DEFAULT NULL,
  `note` mediumtext DEFAULT NULL,
  `date_creation` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `code_patient` (`code_patient`),
  CONSTRAINT `rendezvous_ibfk_1` FOREIGN KEY (`code_patient`) REFERENCES `patient` (`code`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table licence.rendezvous: ~0 rows (approximately)
/*!40000 ALTER TABLE `rendezvous` DISABLE KEYS */;
INSERT IGNORE INTO `rendezvous` (`id`, `code_patient`, `date_rendezvous`, `heure_debut`, `heure_fin`, `id_medecin`, `note`, `date_creation`, `date_debut`, `date_fin`) VALUES
	(15, '785-1210', '2020-01-19', '20:00', '22:00', 1, 'ghjhlk;j;lk;\\\'', '2020-01-19 05:18:47', '2020-01-19 20:00:00', '2020-01-19 22:00:00'),
	(16, '785-1210', '2020-01-19', '13:45', '13:50', 1, 'gjhk', '2020-01-19 05:20:42', '2020-01-19 13:45:00', '2020-01-19 13:50:00');
/*!40000 ALTER TABLE `rendezvous` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
