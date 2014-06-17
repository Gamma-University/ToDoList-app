-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Mar 17 Juin 2014 à 14:01
-- Version du serveur :  5.5.34
-- Version de PHP :  5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `todolist`
--

-- --------------------------------------------------------

--
-- Structure de la table `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_on` datetime NOT NULL,
  `last_modified_on` datetime DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `done` tinyint(1) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `todo`
--

INSERT INTO `todo` (`id`, `created_on`, `last_modified_on`, `description`, `done`, `deleted`) VALUES
(16, '2014-06-17 10:48:49', '2014-06-17 13:51:17', 'finir la toDoList app !', 1, 0);
