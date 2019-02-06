-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 05 Février 2019 à 10:13
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `media-poo`
--

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE IF NOT EXISTS `films` (
  `nom` varchar(200) COLLATE utf8_bin NOT NULL,
  `année` varchar(5) COLLATE utf8_bin NOT NULL,
  `réalisateur` varchar(60) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `films`
--

INSERT INTO `films` (`nom`, `année`, `réalisateur`, `description`) VALUES
('Memento', '2000', 'Christopher Nolan', 'A man with short-term memory loss attempts to track down his wife''s murderer. '),
('Les gardiens de la galaxie', '2014', 'James Gunn', 'A group of intergalactic criminals must pull together to stop a fanatical warrior with plans to purge the universe. '),
('Fight Club', '1999', 'David Fincher', 'An insomniac office worker and a devil-may-care soapmaker form an underground fight club that evolves into something much, much more.'),
('Carnage chez les puppets', '2018', 'Brian Henson', 'When the puppet cast of a ''90s children''s TV show begin to get murdered one by one, a disgraced LAPD detective-turned-private eye puppet takes on the case.');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `pseudo` varchar(30) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`pseudo`, `mdp`) VALUES
('christo', '444bcb3a3fcf8389296c49467f27e1d6'),
('christo2', 'c4ca4238a0b923820dcc509a6f75849b'),
('christo3', 'c4ca4238a0b923820dcc509a6f75849b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
