-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 14 juin 2022 à 03:22
-- Version du serveur :  10.0.38-MariaDB
-- Version de PHP : 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_ALLEAUME`
--

-- --------------------------------------------------------

--
-- Structure de la table `BDD`
--

CREATE TABLE `BDD` (
  `id` int(11) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Nombre` int(100) NOT NULL,
  `Prix_unitaire` varchar(100) NOT NULL,
  `Prix_total` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Date_premiere` date NOT NULL,
  `Date_derniere` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `BDD`
--

INSERT INTO `BDD` (`id`, `Nom`, `Nombre`, `Prix_unitaire`, `Prix_total`, `Description`, `Date_premiere`, `Date_derniere`) VALUES
(3, 'Carte_mère', 41, '1200€', '480€', 'Aorus B450', '2020-04-23', '2022-09-01'),
(2, 'Cable_RJ45', 42, '5.99€', '251.58€', 'Cat5/1Metre', '2002-03-10', '2022-03-10'),
(4, 'Processeur', 10, '100€', '1000€', 'Ryzen 3', '2019-08-24', '2022-09-01'),
(5, 'RAM', 28, '85€', '2380€', 'Corsair C16-32-32-3200', '2018-01-02', '2022-09-01'),
(10, 'Carte_Graphique', 2, '1000€', '2000€', 'RTX3090Ti', '2022-03-03', '2022-05-05'),
(11, 'BoitierPC', 5, '1000€', '2000€', 'RTX3090Ti', '2015-09-05', '2022-12-22');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`) VALUES
(1, 'pouet', 'pouet@pouet.fr', '3d09baddc21a365b7da5ae4d0aa5cb95', '2022-06-11 18:59:08'),
(4, 'root', 'root@root.fr', '63a9f0ea7bb98050796b649e85481845', '2022-06-14 01:40:07');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `BDD`
--
ALTER TABLE `BDD`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `BDD`
--
ALTER TABLE `BDD`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
