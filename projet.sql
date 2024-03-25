-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 25 mars 2024 à 00:51
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `twit`
--

CREATE TABLE `twit` (
  `id` int NOT NULL,
  `contenu` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `twit`
--

INSERT INTO `twit` (`id`, `contenu`, `createdAt`, `user_id`) VALUES
(1, 'vous aimez coder ? moi oui ^^', '2024-03-25 00:36:27', 1),
(2, 'Hey, vous aussi vous trouvez que Mbappe il est rapide ?', '2024-03-25 00:25:51', 4),
(3, 'hier j\'ai mangé une pomme et elle était verte', '2024-03-25 00:44:39', 3),
(4, 'je galere avec mon projet sur le php et mysql quelqu\'un peut m\'aider ?', '2024-03-25 00:45:45', 4),
(5, 'vous avez besoin d\'une caméra pour un film ou un court metrage ? n\'attendez plus ! venez dans mes dm twitter et je vous explique le protocole', '2024-03-25 00:46:57', 7),
(6, 'ya pas quelq1 qui as 1 10 bal ?', '2024-03-25 00:50:05', 6),
(7, 'j\'aime bien mon prenom pas vous ?', '2024-03-25 00:44:11', 2),
(8, 'boo', '2024-03-25 00:50:23', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `nom`) VALUES
(1, 'lecodeurdu35@gmail.com', 'lecodej\'<3lecode', 'Billy'),
(2, 'bob@bob.fr', 'jesuisbob', 'bob'),
(3, 'EmmanuelMacron@elysee.fr', 'Jesuispresident', 'Manu'),
(4, 'guigui@gui.fr', '123456', 'gui'),
(6, '9191@91.91', '91_ici_c_91', 'LeMecDu91'),
(7, 'bobby@video.fr', 'j\'<3lesjeuxvideos', 'bobby');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `twit`
--
ALTER TABLE `twit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `twit`
--
ALTER TABLE `twit`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `twit`
--
ALTER TABLE `twit`
  ADD CONSTRAINT `twit_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
