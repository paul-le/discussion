-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 07 déc. 2019 à 13:35
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `discussion`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(140) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=127 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `message`, `id_utilisateur`, `date`) VALUES
(126, '2 Top 1 d\'affilÃ©', 60, '2019-12-06 18:38:32'),
(125, 'Merci les gars c\'est trop !', 60, '2019-12-06 18:37:29'),
(124, 'Eh ouais Paul je te laisse mes spatules je les mÃ©rites pas !', 63, '2019-12-06 18:37:01'),
(123, 'J\'avoue c\'est un monstre Paulo !', 62, '2019-12-06 18:36:05'),
(122, '<b> LOL </b>', 60, '2019-12-06 18:29:40'),
(121, 'Merci je sais :)', 60, '2019-12-06 18:29:22'),
(120, 'Paul t\'es trop fort Ã  TFT', 61, '2019-12-06 18:29:10');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(63, 'Mohamed', '$2y$12$dB/otX/gx8O60xojDCb/HeXjEO.as/M3oMCxP84ZnLfdna9dxaD3i'),
(61, 'Serge', '$2y$12$Jmh6C50U4zJOw2Di4ciDL.VnRCrErGuTCEF7fPIQ0S3.i82ie1Lai'),
(62, 'Thierry', '$2y$12$ZraDDvT1cSKshD0q7.T5L.AwnEodyLXu7o8qYeB8o.6DBjcathov.'),
(60, 'Paul', '$2y$12$P4XMuRFeeg.3.urNg9RHWuIMlmUiJ2J7heRrpPIJjKD2Af5xF63I6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
