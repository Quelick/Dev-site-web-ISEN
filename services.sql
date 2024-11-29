-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 29 nov. 2024 à 08:42
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

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
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `nom_service` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `nom_service`, `description`, `image`, `created_at`) VALUES
(1, 'La boutique du zoo', 'La boutique du zoo propose une large gamme de souvenirs et de produits dérivés pour immortaliser votre visite. Trouvez des peluches, des vêtements, et des objets uniques inspirés par la faune du parc.', 'images/boutique.jpg', '2024-11-15 08:13:44'),
(2, 'Le Café Nomade', 'Le Café Nomade offre aux visiteurs une pause gourmande au cœur du parc. Découvrez des boissons chaudes et froides ainsi que des collations légères, parfaites pour reprendre des forces avant de continuer l\'exploration.', 'images/cafe.jpg', '2024-11-15 08:16:28'),
(3, 'L\'espace pique-nique', 'L\'espace pique-nique est un endroit convivial et ombragé où les familles peuvent s\'installer pour partager un repas en plein air. Des tables et des zones de repos sont disponibles pour un moment de détente au contact de la nature.', 'images/piquenique.jpg', '2024-11-15 08:17:44'),
(4, 'La Gare des Cascades', 'La Gare des Cascades est un point de départ idéal pour une visite pittoresque en petit train. Située à proximité des cascades, elle offre un accès pratique et des vues magnifiques sur le parc.', 'images/train1.jpg', '2024-11-15 08:18:06'),
(5, 'La Gare du Plateau', 'La Gare du Plateau sert de terminus pour les visiteurs souhaitant explorer la partie haute du parc. Profitez de l\'environnement paisible et de panoramas spectaculaires avant de continuer votre aventure.', 'images/train2.jpg', '2024-11-15 08:18:21'),
(6, 'Le lodge', 'Le lodge du parc propose un hébergement confortable et chaleureux pour les visiteurs qui souhaitent prolonger leur séjour. Avec des chambres bien équipées et une ambiance nature, c’est un endroit parfait pour se ressourcer.', 'images/lodge.jpg', '2024-11-15 08:18:35'),
(7, 'La paillote', 'La paillote offre un espace de détente en plein air, parfait pour savourer une boisson rafraîchissante et des snacks sous une structure ombragée et conviviale.', 'images/paillote.jpg', '2024-11-15 08:18:49'),
(8, 'Le Petit Café', 'Le Petit Café est l’endroit idéal pour une pause rapide. Profitez de son ambiance cosy et de son menu comprenant café, thé et douceurs locales.', 'images/petitcafe.jpg', '2024-11-15 08:19:26'),
(9, 'Le Plateau des Jeux', 'Le Plateau des Jeux propose aux familles et aux enfants des activités ludiques et éducatives. Des jeux de plein air et des structures interactives permettent aux plus jeunes de s’amuser tout en découvrant la faune et la flore.', 'images/jeux.jpg', '2024-11-15 08:19:40'),
(10, 'Le point d\'eau', 'Le point d\'eau est une installation pratique pour remplir vos gourdes et rester hydraté tout au long de votre visite. Il est situé à des endroits stratégiques pour un accès facile.', 'images/eau.jpg', '2024-11-15 08:19:54'),
(11, 'Le point de vue', 'Le point de vue panoramique offre une vue imprenable sur l’ensemble du parc et ses paysages environnants. Prenez un moment pour admirer la beauté naturelle et capturer des souvenirs photographiques.', 'images/pdv.jpg', '2024-11-15 08:20:09'),
(12, 'La tente pédagogique', 'La tente pédagogique accueille des ateliers et des présentations éducatives sur la faune et l’environnement. Une occasion unique d’en apprendre davantage sur la conservation et la biodiversité.', 'images/tente.jpg', '2024-11-15 08:20:40'),
(13, 'Les toilettes', 'Les toilettes sont situées à divers endroits stratégiques du parc pour le confort des visiteurs. Elles sont entretenues régulièrement pour garantir propreté et hygiène.', 'images/toilet.jpg', '2024-11-15 08:21:04'),
(14, 'Le trajet en train', 'Le trajet en train permet aux visiteurs de parcourir le parc tout en profitant de vues exceptionnelles et de commentaires sur les différentes zones traversées. Une expérience agréable et informative pour toute la famille.', NULL, '2024-11-15 08:21:16');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
