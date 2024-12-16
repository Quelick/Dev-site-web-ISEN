-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 16 déc. 2024 à 15:06
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
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `age`, `email`, `motdepasse`, `date_creation`) VALUES
(2, 'Test', 'benoit', 15, 'tete@test.com', 'abcde', '2024-11-08 09:07:45'),
(3, 'baba', 'dede', 13, 'abc@test.com', 'abcdef', '2024-11-08 09:14:14'),
(4, 'abc', 'def', 15, 'abc@abc.fr', 'abc', '2024-11-08 09:20:50'),
(5, 'PAHIMA', 'Brice Armel', 22, 'bricepahima405@gmail.com', '1234567', '2024-11-28 21:31:27'),
(6, 'Madara', 'Uchiwa', 17, 'mawa@gmail.com', '77777', '2024-11-28 21:41:01'),
(7, 'Van', 'Jolan', 21, 'Jolan@gmail.com', '5555555', '2024-11-29 07:15:16'),
(15, 'Shikamaru', 'Nara', 14, 'Shika@gmail.com', '$2y$10$R4LuwDgJ3EgcPS9Io3IYI.q5ZKegeew3YvvEhAGLfXhCaHN3ABdPm', '2024-11-29 08:00:19'),
(16, 'Gojo', 'Satoru', 17, 'gojosatoru@gmail.com', '$2y$10$RsW1vN6vQwAYVlzzyg6qLOcKC6qbBHVRSVAgwyK.EB.8s.mWKngO.', '2024-11-29 08:16:15'),
(17, 'Tsunade', 'Hokage', 18, 'tsuna@gmail.com', '$2y$10$PCUrVkrdFdEdKj7MM8ot8Ori/EC1ysT4RdO9d/kiiY8MboSzH/jHm', '2024-11-29 08:44:32'),
(18, 'Kuroko', 'Basket', 11, 'kuroko@gmail.com', '$2y$10$FxGeUYfKEF967j8iM7yPlOajdb8J0Fp7ZYsnMM8IaZKnB3hrcpV3K', '2024-11-29 09:57:30'),
(19, 'Sukuna', 'sensei', 15, 'susei@gmail.com', '75963', '2024-12-03 14:33:04'),
(20, 'curry', 'steph', 30, 'steph@gmail.com', '8651468', '2024-12-10 09:51:19'),
(21, 'Poole', 'Jordan', 23, 'jordan@gmail.com', 'warriors', '2024-12-10 10:02:33'),
(22, 'AHIALE', 'Becca', 16, 'becca@gmail.com', '1234', '2024-12-16 09:15:54');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
