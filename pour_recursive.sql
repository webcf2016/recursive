-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 03 Mai 2016 à 14:20
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données :  `pour_recursive`
--
CREATE DATABASE IF NOT EXISTS `pour_recursive` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pour_recursive`;

-- --------------------------------------------------------

--
-- Structure de la table `monmenu`
--

DROP TABLE IF EXISTS `monmenu`;
CREATE TABLE IF NOT EXISTS `monmenu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lintitule` varchar(100) NOT NULL,
  `id_parent` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `monmenu`
--

INSERT INTO `monmenu` (`id`, `lintitule`, `id_parent`) VALUES
(1, 'Entrée', 0),
(2, 'Plat principal', 0),
(3, 'Dessert', 0),
(4, 'Chaud', 1),
(5, 'Froid', 1),
(6, 'Potage', 4),
(7, 'Salade', 5),
(8, 'Viande', 2),
(9, 'Volaille', 8),
(10, 'Viande rouge', 8),
(11, 'Poulet', 9);
COMMIT;
