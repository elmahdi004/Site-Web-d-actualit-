-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 28 mai 2023 à 20:08
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dev_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `blogs`
--

CREATE TABLE `blogs` (
  `idUser` int(11) DEFAULT NULL,
  `blogId` int(11) NOT NULL,
  `blogTitle` varchar(100) DEFAULT NULL,
  `blogDes` varchar(8000) DEFAULT NULL,
  `blogImg` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `blogs`
--

INSERT INTO `blogs` (`idUser`, `blogId`, `blogTitle`, `blogDes`, `blogImg`) VALUES
(1, 13, 'Pets informations', 'Please also note that before giving permission, we will need to consider whether your pet may cause a nuisance to your neighbours.\r\n\r\nRemember – if you have a pet you will need to make sure that you are keeping to the terms of your tenancy agreement. You are responsible for providing a suitable living environment and daily diet for them and looking after their health.\r\n\r\nYou are not permitted to keep dogs classified as dangerous under the Dangerous Dogs Act 1991. This includes the following breeds: pitbull terriers, Japanese tosas, dogo argentines and fila brasilieros. You are also not permitted to keep farm or wildlife animals (including cockerels), primates, large/venomous reptiles or dangerous spiders.\r\n\r\nPlease see below for helpful information including animal charities and volunteering (remember that just because you may not be given permission to have a pet doesn’t mean you still can’t help out animals in need).', 'pets_large.jpeg'),
(16, 16, 'La présidente de la Haute Autorité de la Communication Audiovisuelle (HACA), Latifa Akharbach a reçu', '\r\nHespress Français – Actualités du Maroc\r\nPolitique\r\nL’Ambassadeur de la République de Corée au Maroc reçu à la HACA\r\nL’Ambassadeur de la République de Corée au Maroc reçu à la HACA\r\nHespress FR\r\njeudi 25 mai 2023 - 21:25\r\nLa présidente de la Haute Autorité de la Communication Audiovisuelle (HACA), Latifa Akharbach a reçu, mardi, l’ambassadeur de la République de Corée à Rabat, Keeyong Chung.\r\n\r\nLa présidente de la HACA, Latifa Akharbach, a présenté, lors de son entrevue avec l’ambassadeur de la République de Corée, Keeyong Chung, les grandes lignes du mandat de la HACA en tant qu’instance constitutionnelle indépendante en charge de la régulation du secteur audiovisuel, mettant en avant le rôle de l’institution en matière de protection de la liberté de communication audiovisuelle et de garantie des droits des citoyens, usagers des médias à des contenus médiatiques', 'HACA-1536x1024.webp');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `idComment` int(11) NOT NULL,
  `idUser` int(11) DEFAULT NULL,
  `idBlog` int(11) DEFAULT NULL,
  `commentContent` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`idComment`, `idUser`, `idBlog`, `commentContent`) VALUES
(1, 1, 13, 'This A Comment'),
(2, 1, 13, 'this a comment\r\n'),
(14, 1, 13, 'hi'),
(15, 1, 13, 'hi'),
(16, 1, 13, 'gave me a idea'),
(17, 1, 13, 'do You Now We Can Do It'),
(18, 7, 13, 'woow'),
(19, 7, 13, 'I think Its a better idea'),
(25, 7, 13, 'woow i love animals'),
(26, 16, 13, 'woow '),
(27, 16, 16, 'test');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(15) DEFAULT NULL,
  `lastName` varchar(15) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `mail` varchar(30) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `RetryPassword` varchar(10) DEFAULT NULL,
  `idAdmin` varchar(10) DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `username`, `mail`, `password`, `RetryPassword`, `idAdmin`) VALUES
(1, 'khalid', 'Mohamed', 'golf', 'med@gmail.com', 'golf', 'golf', 'true'),
(7, 'brahim', 'ibndora', 'abou', 'bellazizmehdi@gmail.com', '1234', 'test', 'false'),
(16, 'elmahdi', 'bellaziz', 'admin', 'bellazizmehdi@gmail.com', 'admin', 'admin', 'true');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blogId`),
  ADD KEY `blogToUser` (`idUser`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`idComment`),
  ADD KEY `constro` (`idUser`),
  ADD KEY `constro_2` (`idBlog`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blogId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `idComment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogToUser` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `constro` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `constro_2` FOREIGN KEY (`idBlog`) REFERENCES `blogs` (`blogId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
