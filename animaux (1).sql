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
-- Structure de la table `animaux`
--

CREATE TABLE `animaux` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `enclos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`id`, `nom`, `description`, `enclos_id`) VALUES
(1, 'Autruche', 'Plus grand oiseau du monde, originaire d\'Afrique. L\'autruche est incapable de voler, mais peut courir à des vitesses impressionnantes, se nourrissant principalement de plantes et parfois d\'insectes.\r\n', 6),
(2, 'Gazelle', 'Mammifère gracieux des savanes et des déserts, connu pour sa vitesse et son agilité. La gazelle est herbivore, se nourrissant d\'herbes, de feuilles et de fruits.\r\n', 6),
(3, 'Guépard', 'Mammifère carnivore et le plus rapide des animaux terrestres, vivant dans les savanes d\'Afrique et d\'Iran. Le guépard chasse principalement de petits herbivores.\r\n', 6),
(4, 'Gnou', 'Herbivore robuste des plaines africaines, connu pour ses migrations massives. Le gnou se nourrit principalement d\'herbe.\r\n', 6),
(5, 'Oryx Beisa', 'Antilope africaine avec de longues cornes droites, adaptée aux climats désertiques. Herbivore, il se nourrit de feuilles et d\'herbes.\r\n', 6),
(6, 'Rhinocéros', 'Grand herbivore à peau épaisse et corne distinctive, vivant en Afrique et en Asie. Il se nourrit principalement d\'herbes, de branches et de feuillages.\r\n', 6),
(7, 'Suricate', 'Petit mammifère carnivore vivant dans les déserts d\'Afrique australe, connu pour ses postures dressées et sa vie en groupe.\r\n', 6),
(8, 'Fennec', 'Petit renard du désert, vivant en Afrique du Nord, caractérisé par ses grandes oreilles. Il est omnivore, se nourrissant de plantes, d\'insectes et de petits animaux.\r\n', 6),
(9, 'Coati', 'Mammifère omnivore d\'Amérique centrale et du Sud, apparenté au raton laveur. Le coati est actif le jour et se nourrit de fruits, insectes et petits animaux.\r\n', 6),
(10, 'Saimiri', 'Singe d\'Amérique centrale et du Sud, souvent appelé \"singe écureuil\". Le saimiri est omnivore et vit en groupe, se nourrissant de fruits, insectes et petits animaux.\r\n', 6),
(11, 'Tapir', 'Grand herbivore d\'Amérique centrale et du Sud, avec un nez allongé. Le tapir se nourrit de feuilles, de fruits et de plantes aquatiques.\r\n', 6),
(12, 'Casoar', 'Grand oiseau d\'Australie et de Nouvelle-Guinée, connu pour sa crête casque et son tempérament défensif. Le casoar est principalement frugivore.\r\n\r\n', 6),
(13, 'Crocodile Nain', 'Plus petit des crocodiles, vivant en Afrique de l\'Ouest, se nourrissant de poissons, amphibiens et petits mammifères.\r\n', 6),
(14, 'Lion', 'Grand carnivore vivant en Afrique et connu comme le \"roi des animaux\". Il chasse principalement des herbivores comme les zèbres et les gazelles.\r\n', 5),
(15, 'Hippopotame', 'Grand mammifère amphibie d\'Afrique, herbivore et souvent agressif, se nourrissant principalement d\'herbe.\r\n', 5),
(16, 'Zèbre', 'Mammifère herbivore des plaines africaines, connu pour ses rayures distinctives. Le zèbre vit en troupeaux et se nourrit d\'herbe.\r\n', 5),
(17, 'Hyène', 'Carnivore des savanes et déserts africains, souvent associée au comportement charognard, mais aussi chasseur efficace.\r\n', 5),
(18, 'Loup à crinière', 'Canidé solitaire d\'Amérique du Sud, ressemblant à un renard géant, principalement frugivore et insectivore.\r\n', 5),
(19, 'Girafe', 'Plus grand mammifère terrestre, vivant en Afrique. La girafe se nourrit des feuilles des arbres, principalement des acacias.\r\n', 5),
(20, 'Grivet cercopithèque', 'Singe africain arboricole, omnivore, se nourrissant de fruits, feuilles, insectes et petits animaux.\r\n', 5),
(21, 'Eléphant', 'Plus grand mammifère terrestre, herbivore, vivant en Afrique et en Asie. Il se nourrit de feuilles, d\'écorces et de fruits.\r\n', 5),
(22, 'Varan de Komodo', 'Grand lézard carnivore d\'Indonésie, connu pour sa force et son venin. Il chasse divers animaux, des oiseaux aux buffles.', 5),
(23, 'Ouistiti Gibbon', 'Ce petit primate est un mélange entre le ouistiti et le gibbon, combinant la petite taille et l\'agilité du ouistiti avec les longues pattes et l’habileté d\'un gibbon pour se déplacer dans les arbres. Il se nourrit principalement de fruits, d\'insectes et de petits animaux, et est connu pour ses vocalisations et sa vie sociale dynamique dans les forêts tropicales.', 5),
(24, 'Tamarin Capucin', 'Ce singe combine les traits du tamarin et du capucin, possédant la petite taille du tamarin et l\'intelligence du capucin. Il est très agile et passe la majorité de son temps dans les arbres des forêts tropicales, se nourrissant de fruits, d\'insectes, et parfois de petits vertébrés. Reconnu pour son comportement social complexe, le tamarin capucin vit en groupes et utilise une grande variété de sons pour communiquer avec ses congénères.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 5),
(25, 'Ara Perroquet', 'Ce grand perroquet aux couleurs vives est originaire des forêts tropicales d\'Amérique du Sud. Les aras sont connus pour leur plumage spectaculaire, qui peut être bleu, jaune, rouge ou vert, ainsi que pour leur intelligence et leur capacité à imiter des sons, y compris la voix humaine. Les aras vivent en couples ou en petits groupes et passent leur temps à chercher des fruits, des noix, et d\'autres plantes dans les arbres. Leur long bec puissant leur permet de casser des noix dures et de se défendre contre les prédateurs.', 4),
(26, 'Grand Hocco', 'Oiseau tropical aux plumes noires et crête touffue, connu pour ses chants distinctifs dans les forêts denses.\r\n', 4),
(27, 'Panthère', 'Félin agile et puissant, au pelage souvent tacheté, présent dans diverses régions tropicales et tempérées.', 4),
(28, 'Panda Roux', 'Petit mammifère arboricole d’Asie, au pelage roux, célèbre pour sa queue touffue et son régime à base de bambou.\r\n', 4),
(29, 'Lémurien', 'Primates endémiques de Madagascar, connus pour leurs yeux expressifs et leurs comportements sociaux.\r\n', 4),
(30, 'Tortue', 'Reptile terrestre ou aquatique, caractérisé par sa carapace protectrice et sa longévité.', 1),
(31, 'Chèvre Naine', 'Petit ruminant domestique, apprécié pour son agilité et son comportement sociable.\r\n', 4),
(32, 'Mouflon', 'Grand herbivore des montagnes, doté de cornes en spirale, très adaptatif aux terrains accidentés.\r\n', 4),
(33, 'Macaque Crabier', 'Singe asiatique omnivore, souvent trouvé près des points d\'eau et connu pour son goût pour les crustacés.\r\n', 3),
(34, 'Cerf', 'Grand mammifère herbivore aux bois majestueux, souvent présent dans les forêts tempérées.', 3),
(35, 'Vautour', 'Oiseau charognard au cou déplumé, essentiel pour l’écosystème en éliminant les carcasses.\r\n', 3),
(36, 'Antilope', 'Animal rapide et agile, vivant dans les prairies et savanes, avec des cornes souvent élégantes.\r\n', 3),
(37, 'Daim', 'Mammifère de la famille des cervidés, au pelage tacheté, populaire dans les forêts européennes.\r\n', 3),
(38, 'Nilgaut', 'Antilope de grande taille originaire de l’Inde, reconnaissable à son pelage gris-bleu.\r\n', 3),
(39, 'Loup Europe', 'Prédateur social vivant en meutes, essentiel pour l\'équilibre des écosystèmes forestiers.\r\n', 3),
(40, 'Marabout', 'Grand échassier d’Afrique, connu pour sa tête chauve et son rôle de charognard.\r\n', 2),
(41, 'Cigogne', 'Oiseau migrateur, célèbre pour ses longues pattes et sa tendance à construire des nids sur les bâtiments.\r\n', 2),
(42, 'Oryx Algazelle', 'Antilope du désert africain, avec de longues cornes droites et un pelage clair pour refléter la chaleur.\r\n', 2),
(43, 'Watusi', 'Race de bétail africain aux grandes cornes impressionnantes, élevé pour le lait et la viande.\r\n', 2),
(44, 'Ane de Somalie', 'Race d’âne sauvage, dotée de rayures sur les jambes et adaptée aux conditions arides.\r\n', 2),
(45, 'Yack', 'Bovin montagnard d’Asie, au pelage épais, souvent utilisé comme bête de somme et pour le lait.\r\n', 2),
(46, 'Mouton noir', 'Mouton domestique à la laine foncée, prisé pour sa laine unique et sa robustesse.\r\n', 2),
(47, 'Porc-épic', 'Rongeur aux longues épines acérées, utilisé comme moyen de défense contre les prédateurs.\r\n', 2),
(48, 'Wallaby', 'Petit marsupial australien, proche du kangourou, connu pour ses sauts et sa poche ventrale.', 2),
(49, 'Emeu', 'Grand oiseau terrestre d\'Australie, incapable de voler, avec des pattes puissantes et un plumage gris. L\'émeu est le deuxième plus grand oiseau vivant au monde après l\'autruche, connu pour sa vitesse de course et ses longues jambes.\r\n', 2),
(50, 'Nandou', 'Grand oiseau sud-américain semblable à l\'autruche, qui vit principalement dans les pampas et les plaines herbeuses. Le nandou est également incapable de voler et utilise ses longues pattes pour courir rapidement, se nourrissant d\'herbes, de feuilles et d\'insectes.', 2),
(51, 'Flamant rose', 'Oiseau échassier célèbre pour sa couleur rose, souvent présent dans les zones humides et les lacs peu profonds.', 2),
(52, 'Tamanoi', ' Aussi appelé fourmilier géant, c’est un animal avec un long museau adapté pour manger des fourmis et des termites.', 2),
(53, 'Pécari', 'Un petit mammifère ressemblant à un cochon sauvage, vivant en troupeaux dans les forêts et les prairies.', 2),
(54, 'Tortue', 'Reptile à carapace, généralement lent, qui vit dans les milieux aquatiques ou terrestres selon les espèces.', 1),
(55, 'Ibis', 'Grand oiseau à bec courbé, souvent vu dans les marais et zones humides, en quête de petits poissons et insectes.', 2),
(56, 'Lynx', 'Félin sauvage avec de longues touffes de poils sur les oreilles, adapté aux régions boisées.\r\n', 2),
(57, 'Serval', 'Un autre félin sauvage, reconnu pour ses longues pattes et ses grandes oreilles, qui vit principalement dans les savanes.', 2),
(58, 'Chien des buissons', 'Petit carnivore qui vit en groupes, originaire d\'Amérique du Sud et adapté aux forêts denses.', 2),
(59, 'Tigre', 'Grand félin au pelage rayé, un des plus grands prédateurs carnivores de la forêt.', 2),
(60, 'Bison', 'Grand herbivore robuste, vivant généralement en troupeaux, adapté aux prairies et plaines.', 2),
(61, 'Ane de Provence', ' Une sous-espèce d\'âne, reconnue pour sa rusticité et souvent utilisée dans les régions rurales.\r\n', 2),
(62, 'Dromadaire', 'Mammifère désertique à une bosse, bien adapté aux environnements arides et aux températures extrêmes.', 2),
(63, 'Fennec', 'Petit renard du désert, vivant en Afrique du Nord, caractérisé par ses grandes oreilles. Il est omnivore, se nourrissant de plantes, d\'insectes et de petits animaux.', 6);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animaux`
--
ALTER TABLE `animaux`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enclos_id` (`enclos_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animaux`
--
ALTER TABLE `animaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animaux`
--
ALTER TABLE `animaux`
  ADD CONSTRAINT `animaux_ibfk_1` FOREIGN KEY (`enclos_id`) REFERENCES `biomes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
