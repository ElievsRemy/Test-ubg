-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Mar 18 Août 2015 à 23:18
-- Version du serveur: 5.5.43-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ubg`
--

-- --------------------------------------------------------

--
-- Structure de la table `ubg`
--

CREATE TABLE IF NOT EXISTS `ubg` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `ubg`
--

INSERT INTO `ubg` (`Id`, `titre`, `comments`) VALUES
(1, 'First', 'My First comments'),
(2, 'mon', 'zd'),
(3, 'lol', 'bang'),
(4, 'M', 'j'),
(7, 'sd ', 'sc'),
(8, 'mon', 'cs');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
