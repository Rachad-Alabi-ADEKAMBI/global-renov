-- phpMyAdmin SQL Dump
-- version 5.0.4deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 27 mars 2021 à 05:14
-- Version du serveur :  10.3.24-MariaDB-2
-- Version de PHP : 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `leads`
--

-- --------------------------------------------------------

--
-- Structure de la table `informations`
--

CREATE TABLE `informations` (
  `id` int(11) NOT NULL,
  `date_inscription` date NOT NULL DEFAULT current_timestamp(),
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(320) NOT NULL,
  `telephone` int(10) NOT NULL,
  `habitation` varchar(255) NOT NULL,
  `chauffage` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `code_postal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `informations`
--

INSERT INTO `informations` (`id`, `date_inscription`, `nom`, `prenom`, `email`, `telephone`, `habitation`, `chauffage`, `region`, `ville`, `code_postal`) VALUES
(11, '2021-03-02', 'mama', 'DOU', 'ta@gmail.com', 67471182, 'chaud', 'froid', 'paris', 'catara', '5465lo'),
(12, '2021-03-02', 'mama', 'DOU', 'ta@gmail.com', 67471182, 'chaud', 'froid', 'paris', 'catara', '5465lo'),
(13, '2021-03-27', 'MAMA', 'Mohamed', 'hackerdetoday@gmail.com', 67471182, 'maison', 'fioul', 'Plateaux', 'Cotonou', '582'),
(14, '2021-03-27', 'mohamed', 'TAIROU', 'hackerdetoday@gmail.com', 5346446, 'appartement', 'gaz', 'Alibori', 'Cotonou', '229');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `nom_utilisateur` varchar(100) NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`nom_utilisateur`, `mot_de_passe`) VALUES
('admin', 'root'),
('admin', 'root');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `informations`
--
ALTER TABLE `informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
