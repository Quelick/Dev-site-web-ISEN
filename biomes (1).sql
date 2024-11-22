-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 22 nov. 2024 à 09:31
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
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `biomes`
--

INSERT INTO `biomes` (`id`, `nom`, `description`) VALUES
(1, 'La bergerie des reptiles', 'Elle représente un écosystème tropical et subtropical où cohabitent des reptiles variés. Elle recrée un habitat chaleureux et humide, caractéristique des régions où vivent des espèces comme le python, prédateur majestueux et discret, la tortue, symbole de longévité avec sa carapace protectrice, et l\'iguane, reptile emblématique des forêts tropicales, arboricole et herbivore. Cet environnement illustre parfaitement la richesse et la diversité des reptiles dans leur milieu naturel.'),
(2, 'Les clairières	\r\n	', 'C\'est un espace ouvert et diversifié qui s’étend entre prairies et savanes. Elle abrite une faune riche et variée, comprenant des oiseaux majestueux tels que le flamant rose et la cigogne, des mammifères robustes comme le bison, le dromadaire, et l’oryx algazelle, ainsi que des carnivores tels que le tigre et le lynx. Des herbivores tels que le wallaby, l’émeu, et le pécari cohabitent avec des espèces emblématiques comme l’âne de Somalie et le mouton noir. Cet espace est un véritable havre de biodiversité, où chaque espèce joue un rôle unique dans l\'équilibre de cet écosystème semi-ouvert.\r\n'),
(3, 'Le bois des pins', 'C\'est une zone de transition entre les forêts tempérées et les prairies, caractérisée par une végétation variée et des paysages vallonnés. Elle abrite une faune diversifiée incluant des mammifères comme le cerf, le daim, et le nilgaut, qui se déplacent dans les clairières et les sous-bois. Les prédateurs, tels que le loup d\'Europe, jouent un rôle essentiel dans le maintien de l\'équilibre écologique, tandis que le vautour contribue à la régénération naturelle en nettoyant l\'écosystème. Le macaque crabier ajoute une touche exotique à cet environnement, vivant principalement dans les zones arborées et près des points d\'eau. Ce milieu offre un refuge idéal pour ces espèces, chacune ayant adapté son mode de vie à cet habitat riche et varié.'),
(4, 'Le vallon des cascades', 'Caractérisée par des chutes d\'eau, des rivières sinueuses et une végétation dense cet habitat est un véritable sanctuaire pour une faune diversifiée. Les animaux comme la loutre et le binturong prospèrent dans les zones proches de l\'eau, tandis que des espèces arboricoles comme le panda roux, le lémurien et l\'ara perroquet occupent la canopée. La panthère, en tant que prédateur solitaire, trouve refuge dans les zones plus isolées, tandis que le mouflon et la chèvre naine explorent les terrains rocheux environnants. Le grand hocco, avec ses couleurs exotiques, et la tortue, symbole de longévité, enrichissent encore davantage la biodiversité de cette biome. Cet écosystème harmonieux offre un équilibre parfait entre la vie aquatique, terrestre et arboricole, où chaque espèce joue un rôle crucial.'),
(5, 'Le plateau', 'C\'est un vaste biome aux paysages ouverts et majestueux, où savanes et plaines s’étendent à perte de vue. Ce milieu diversifié abrite une faune remarquable, allant des puissants lions et hyènes, symboles de la savane, aux paisibles hippopotames se prélassant près des points d’eau. Les zèbres et girafes parcourent les plaines, tandis que les éléphants imposent leur présence majestueuse. Le loup à crinière, discret et agile, trouve refuge dans les hautes herbes, et le varan de Komodo ajoute une touche exotique à cette biodiversité. Sur les arbres bordant les clairières, le grivet cercopithèque, le ouistiti gibbon et le tamarin capucin apportent une animation colorée, rappelant la richesse des forêts tropicales. Le Plateau est un mélange unique d’écosystèmes, alliant la force, la grâce et l’intelligence de ses habitants dans un cadre sauvage et captivant.'),
(6, 'Le belvédère', 'C\'est un un biome aux paysages contrastés, où les plaines arides rencontrent des zones boisées et des points d’eau isolés. Ce cadre unique abrite une faune variée et fascinante. Les guépards, symboles de vitesse, parcourent les espaces dégagés à la recherche de proies comme les gazelles et les gnous. Les autruches et casoars ajoutent une dimension spectaculaire avec leur taille imposante et leur allure majestueuse. Le fennec et le suricate, petits mammifères adaptés aux environnements arides, se faufilent entre les dunes. Le rhinocéros, imposant et solitaire, impose sa présence auprès des points d’eau partagés par les tapirs. Le coati et le saimiri, plus joueurs, explorent les zones boisées. Enfin, le crocodile nain, discret mais redoutable, veille près des étendues aquatiques. Le Belvédère est un espace où se mêlent élégance, puissance et adaptabilité, témoins d’une faune extraordinairement diversifiée.\r\n\r\n\r\n\r\n\r\n\r\n\r\n');

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
