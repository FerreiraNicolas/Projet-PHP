-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 15 Mai 2019 à 19:46
-- Version du serveur :  10.1.38-MariaDB-0+deb9u1
-- Version de PHP :  7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `PROJET`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `categorie` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`categorie`) VALUES
(''),
('Epee');

-- --------------------------------------------------------

--
-- Structure de la table `Produit`
--

CREATE TABLE `Produit` (
  `prd_id` varchar(10) NOT NULL,
  `prd_nom` varchar(20) DEFAULT NULL,
  `prd_qte` int(11) DEFAULT NULL,
  `prd_pu` float DEFAULT NULL,
  `prd_cat` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Produit`
--

INSERT INTO `Produit` (`prd_id`, `prd_nom`, `prd_qte`, `prd_pu`, `prd_cat`) VALUES
('', '', 0, 0, ''),
('1', 'Lame Ultima', 1, 173, 'Lame'),
('2', 'Durandal', 10, 155, 'Epee'),
('4', 'Excaliburne', 1, 9999, 'Epee');

-- --------------------------------------------------------

--
-- Structure de la table `USER`
--

CREATE TABLE `USER` (
  `id_user` int(11) DEFAULT NULL,
  `login` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `USER`
--

INSERT INTO `USER` (`id_user`, `login`, `password`) VALUES
(1, 'xXBaptisteXx', 'motdepasse'),
(2, 'gotier', 'azerty'),
(3, 'nico', 'niconii');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Produit`
--
ALTER TABLE `Produit`
  ADD PRIMARY KEY (`prd_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
