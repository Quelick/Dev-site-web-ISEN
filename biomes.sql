-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 19 nov. 2024 à 15:07
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `parc_animalier`
--

-- --------------------------------------------------------

--
-- Structure de la table `biomes`
--

CREATE TABLE `biomes` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `biome` varchar(50) NOT NULL,
  `photo_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `biomes`
--

INSERT INTO `biomes` (`id`, `nom`, `description`, `biome`, `photo_url`) VALUES
(1, 'La bergerie des reptiles', 'Enclos pour les reptiles', 'Reptilarium', 'https://www.guide-toulouse-pyrenees.com/_bibli/annonces/7692/hd/la-ferme-des-reptiles-02.jpg'),
(2, 'Les clairières	\r\n	', 'Enclos pour les animaux des clairières\r\n', 'Prairie', 'https://static.actu.fr/uploads/2024/06/la-clairiere-aux-animaux-a-terra-botanica-ouverture-8-juin-credit-agence-skillvalley-3.jpg'),
(3, 'Le bois des pins', 'Enclos pour le bois de pins', 'foret méditerranée', 'https://www.leboisdepins.com/wp-content/uploads/2024/05/Reserve-de-Sigean.jpg'),
(4, 'Le vallon des cascades', 'Enclos pour les vallons des cascades', ' ripisylve', 'https://www.tourisme-avec-mon-chien.com/wp-content/uploads/2020/10/cascade-du-bois-de-chaux-avec-chien.jpg'),
(5, 'Le plateau', 'Enclos pour les animaux de la savane', 'savane tropicale et de prairie', 'https://i0.wp.com/www.tiloustics.eu/wp-content/uploads/2017/03/animaux-savane-image.png?fit=725%2C743&ssl=1'),
(6, 'Le belvédère', 'Enclos pour la terre des Grands Espaces.', 'Terre des Grands Espaces', 'https://media.istockphoto.com/id/452198953/fr/photo/rhinoc%C3%A9ros-gu%C3%A9pard.jpg?s=612x612&w=0&k=20&c=KOaXJzSjgElrW4P5XRMB81w37pjlpNbkm8-UpGdYDLo=');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `biomes`
--
ALTER TABLE `biomes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `biomes`
--
ALTER TABLE `biomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
