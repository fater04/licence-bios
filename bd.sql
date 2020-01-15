-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 27, 2019 at 02:55 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `licence`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` bigint(20) NOT NULL,
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
  `groupe_sanguin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `code`, `nom`, `prenom`, `nom_mere`, `adresse`, `email`, `profession`, `sexe`, `date_naissance`, `cin`, `telephone`, `statut_matrimonial`, `groupe_sanguin`) VALUES
(3, '8204-28092019', 'diohdih', 'ihiih', 'ihihih', 'eee', 'client@gmail.com', 'ee', 'Masculin', '10/02/2014', '37-53-75-3935-93-95390', '(386) 306-3936', 'celibataire', 'ab-'),
(5, '4821-28092019', 'dddd', 'dd', 'dddd', 'dd', 'info@refletcreole.com', 'ddd', 'Masculin', '01/01/2004', '30-83-07-8389-36-83683', '(393) 698-3638', 'celibataire', 'ab+'),
(6, '3112-28092019', 'wee', 'qepjekej', 'eeoje', 'ff', 'admin@gmail.com', 'ff', 'Masculin', '01/01/2016', '99-39-73-9730-73-07307', '(398) 636-3630', 'celibataire', 'ab+'),
(8, '785-1210', 'nom', 'prenom', 'personne reference', 'rien rien rien rien rien rien', 'email@gmail.com', 'profession', 'Feminin', '11/10/2009', '28-52-82-2929-29-00000', '(509) 3102-0000', 'celibataire', 'a+');

-- --------------------------------------------------------

--
-- Table structure for table `rendezvous`
--

CREATE TABLE `rendezvous` (
  `id` int(11) NOT NULL,
  `code_patient` varchar(100) DEFAULT NULL,
  `date_rendezvous` varchar(100) DEFAULT NULL,
  `heure_debut` varchar(100) DEFAULT NULL,
  `heure_fin` varchar(100) DEFAULT NULL,
  `id_medecin` int(11) DEFAULT NULL,
  `note` mediumtext DEFAULT NULL,
  `date_creation` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rendezvous`
--

INSERT INTO `rendezvous` (`id`, `code_patient`, `date_rendezvous`, `heure_debut`, `heure_fin`, `id_medecin`, `note`, `date_creation`) VALUES
(2, '8204-28092019', '10-23-2019', '13:45:00', '13:45:00', 3, 'test 1', '2019-10-25 17:16:02'),
(3, '8204-28092019', '10-16-2019', '13:45:00', '13:45:00', 1, 's', '2019-10-25 17:16:43');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` bigint(100) NOT NULL,
  `pseudo` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` varchar(100) DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `active` enum('oui','non') DEFAULT 'oui',
  `motdepasse` varchar(100) DEFAULT NULL,
  `statut` varchar(50) DEFAULT '0',
  `photo` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `email`, `telephone`, `nom`, `prenom`, `role`, `active`, `motdepasse`, `statut`, `photo`) VALUES
(2, 'fater', 'wilkerdorvelus@yahoo.com', '31110731', 'dorvelus', 'wilker', 'admin', 'oui', '$2y$10$EyVzKHeNEJPcfL8f8HFTSeXEiCPw7tCapxOyxkxixkDUJmhFXGpTC', '1', 'app/DefaultApp/public/img/pp.jpg'),
(3, 'ibibb', 'admin@gmai.com', '+509 3111 07 31', 'test', 'lele', 'admin', 'oui', '7b21848ac9af35be0ddb2d6b9fc3851934db8420', '0', 'n/a'),
(4, 'admin', 'admin@gmail.com', '31110731', 'admin', 'admin', '', 'oui', '$2y$10$RcoN/6FtzpZtbBKM.O.ybOtuv2GIEtKCI1F10RBchkeYZoUpB4yDO', '0', 'app/DefaultApp/public/img/22-222243_emoji-transparent-smiley-face-emoji-with-no-background.png.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_patient` (`code_patient`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rendezvous`
--
ALTER TABLE `rendezvous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD CONSTRAINT `rendezvous_ibfk_1` FOREIGN KEY (`code_patient`) REFERENCES `patient` (`code`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;