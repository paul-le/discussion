-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 05 déc. 2019 à 08:34
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
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `message`, `id_utilisateur`, `date`) VALUES
(16, 'oy', 39, '2019-12-04'),
(28, 'Svp aled', 39, '2019-12-04');

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
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(25, '  eti', '$2y$12$B3Tz96zqtvzj.d18iWB0gOCh/0zOkngShKPbe7J0qlj99kHl6IakK'),
(26, ' etii', '$2y$12$3Bpt3yYSbOTgMfmbcDGIG.JmWMSoW0Q28W7ATW2D2hmeS5Pr/SvRu'),
(27, '  eti3', '$2y$12$ea/BOY6m9txbZtuzFK7IveXgZDy6OBtmMnRHFwvWnihYsvRNbAH9a'),
(28, ' 123456', '$2y$12$AnHK9Sr9EEva2.WxyjJLKOGW9SHwba0JAnXOX4XrSckkPJg/nuSpy'),
(22, ' PaulO', '$2y$12$t5v0empFMkA1Nae9bPb3c.oYfzPG57L6BTTftfeHj50Hn/wsALNom'),
(23, ' Paul1', '$2y$12$zOG1HKTYcF4Xn7RWFOm4xuBidycb.ksBWPYyHARyV3anPJST0Nbh.'),
(24, ' azaz', '$2y$12$C14Lz9jKQ49utUFPe2D99OLGAWVO1NaLG7Ry88ezJlhmfccqSIQ2y'),
(29, 'paulo', '$2y$12$sEhWqu4sdkNpDlUX/Cst3.OfUA24IrsdEi6jt1zFgm7CTlkL/jxFm'),
(30, 'azazaz', '$2y$12$XZdrNFhpTO9wPXkDhXZgG.dIxrLh.cOWPOeaIX.dI19pFVXLZiOkm'),
(31, ' apap1', '$2y$12$ngflyGBAwwWKFFukR/tswu4Zq/vlH4ZtYg3SHJQViMiGEgEAKCTVS'),
(32, '      aeae1', '$2y$12$Di71MbnRsl4o7LO3nD0X6.154JbcAYbuKQAaBGS0UweUxjiptB4Qy'),
(33, ' aze1', '$2y$12$ocXSGSFM7Y324QXNVbeJiedgA9MoglI4dO1.J4P.dQvR/lKlV.60.'),
(34, ' acac1', '$2y$12$r08dMXModBDEHIMyXHo.8ePa/t3XkbWIzLTHTFQHkl4vOD6DHrfeW'),
(35, ' asas1', '$2y$12$yepBdrApDWUFq5PVQ/zh5OFVxewboefUHWT7n6ZpdjH6w3DMMgJ1O'),
(36, ' afaf1', '$2y$12$0bK6TEmhuT4ADtKLHNduh.WYlNSe/32Z1Hra4IPAK1LgyV8n4gRMS'),
(37, '12', '$2y$12$1DHFYZZb3Z/HRBR3sTsJwu0ukhtgb255UJRbHfNoF4yJ7cJcP1uCG'),
(38, 'pal', '$2y$12$B8ZL10hQrPhoLh1x9CtfxeEPg1BjUcbviiUa070vravoLl7HLIl7e'),
(39, 'a1', '$2y$12$aJVllzCk7ZUHuoe9MSnemeksY6N/TYiVHxHe/a.LX7f9Ox6hiteG.'),
(40, ' ay', '$2y$12$v7u/So2tO/VmkTzKQ4Nbiehgo.3RS5ZkPH2nlEQlD35CxhJGuDW5e'),
(41, ' lol1', '$2y$12$aGsNxWqh1Da8pTmmNPrRyuKoUk39TI3b8UI66TaZfUP/ZSrmieh7u');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
