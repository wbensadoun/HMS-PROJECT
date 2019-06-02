-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 02 juin 2019 à 15:07
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hmsdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctorapp`
--

CREATE TABLE `doctorapp` (
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `docapp` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `doctorapp`
--

INSERT INTO `doctorapp` (`nom`, `prenom`, `email`, `contact`, `docapp`) VALUES
('Bensadoun', 'Wissal', 'wissal.bensadoun@hotmail.fr', '0785329064', 'Dr.Webber From 6pm to 9pm'),
('Bensadoun', 'Wissal', 'wissal.bensadoun@hotmail.fr', '0785329064', 'Dr.Webber From 6pm to 9pm'),
('Smith', 'Jon', 'Gtoo@gmail.com', '0653129044', 'Dr.Grey From 6pm to 9pm'),
('SBOUI', 'MOHAMED', 'riccisat@gmail.com', '07398420495', 'Dr.Webber From 6pm to 9pm'),
('test', 'test', 'test@gmail.com', '040404294', 'Dr.Webber From 6pm to 9pm'),
('', '', '', '', 'Dr.Webber From 6pm to 9pm'),
('', '', '', '', 'Dr.Webber From 6pm to 9pm'),
('HRICHI', 'NAJAH', 'riccisat@gmail.com', '0653129044', 'Dr.Webber From 6pm to 9pm');

-- --------------------------------------------------------

--
-- Structure de la table `logintb`
--

CREATE TABLE `logintb` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `logintb`
--

INSERT INTO `logintb` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `operation`
--

CREATE TABLE `operation` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `patient` varchar(60) DEFAULT NULL,
  `medecin` varchar(60) DEFAULT NULL,
  `operation` varchar(100) NOT NULL,
  `bloc` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `nom` text,
  `prenom` text,
  `phone` text,
  `email` varchar(80) DEFAULT NULL,
  `specialite` text,
  `photo` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `staff`
--

INSERT INTO `staff` (`id`, `nom`, `prenom`, `phone`, `email`, `specialite`, `photo`) VALUES
(946, '', '', '', '', '', NULL),
(110625, '', '', '', '', '', NULL),
(116504, 'Bensadounff', 'Wissalzz', '785329064', 'wissal.bensadounf@hotmail.fr', 'GÃ©nÃ©raliste', NULL),
(252082, 'HRICHI', 'NAJAH', '686231784', 'riccisat@gmail.com', 'Choisir', NULL),
(275998, 'SBOUI', 'MOHAMED', '71242655', '', 'Oncologie', NULL),
(315473, '', '', '', '', 'Choisir', NULL),
(327854, 'azerrt', 'Wissal', '785329064', 'wissal.bensadoun@hotmail.fr', 'ORL', NULL),
(462347, 'Bensadoun', 'Wissal', '785329064', 'wissal.bensadoun@hotmail.fr', 'GÃ©nÃ©raliste', NULL),
(484525, '', '', '', '', '', NULL),
(535721, 'HRICHI', 'NAJAH', '686231784', 'riccisat@gmail.com', 'Cardiologie', NULL),
(700835, 'Bensadoun', 'Wissal', '785329064', 'wissal.bensadoun@hotmail.fr', 'Cardiologie', NULL),
(748821, '', '', '', '', '', NULL),
(764373, 'SBOUIo', 'MOHAMED', '71242655', 'riccisat@gmail.com', 'ORL', NULL),
(806633, 'HRICHI', 'NAJAH', '686231784', 'riccisat@gmail.com', 'Cardiologie', NULL),
(948204, 'azee', 'ffff', '24444', 'zaaa', 'Cardiologie', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `operation`
--
ALTER TABLE `operation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `operation`
--
ALTER TABLE `operation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=948205;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
