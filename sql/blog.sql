-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 03 sep. 2020 à 15:13
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `standfirst` text NOT NULL,
  `content` text NOT NULL,
  `createdAt` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `title`, `standfirst`, `content`, `createdAt`, `user_id`) VALUES
(1, 'article 1', 'Ceci est l\'article 1.', 'Ceci est l\'article 1! Il parle de ce qui est dans l\'article 1. C\'est à dire des choses passionnantes concernant l\'article 1. Et croyez moi, ce n\'est pas peu dire! Après avoir lu cet article vous devez être épuisé. Alors bon repos. \r\nVers l\'infini et au-delà!', '2020-08-14 03:16:23', 3),
(5, 'article 2', 'ceci est l\'article 2.', 'ceci est l\'article 2 , il parle de ce qui est dans l\'article 2.', '2020-08-15 16:10:15', 3),
(6, 'article 3', 'ceci est l\'article 3.', 'ceci est l\'article 3  et devinez quoi?? il parle de l\'article 3.', '2020-08-15 16:10:29', 3),
(7, 'article 4', 'ceci est l\'article 4', 'contenu de l\'article 4.  Dingue!', '2020-08-18 17:27:12', 3),
(8, 'article 5', 'ceci est le chapô de l\'article 5.', 'Et ici c\'est le contenu passionnant de l\'article 5. Youpi!', '2020-08-19 03:13:23', 3);

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `createdAt` datetime NOT NULL,
  `flag` tinyint(1) NOT NULL,
  `article_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_article_id` (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `pseudo`, `content`, `createdAt`, `flag`, `article_id`) VALUES
(16, 'maria', 'je commente l\'article 1 !', '2020-08-15 16:10:51', 0, 1),
(17, 'marcel', 'je commente mon propre article 1', '2020-08-15 16:11:21', 0, 1),
(18, 'maria', 'je commente l\'article 3 mais je n\'ai rien à dire', '2020-08-18 17:24:34', 1, 6),
(19, 'maria', 'je raconte aussi ma vie!', '2020-08-19 16:02:43', 0, 5),
(20, 'maria', 'Oh quel bel article 4!', '2020-08-27 17:54:18', 0, 7);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `createdAt` datetime NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `password`, `createdAt`, `role_id`) VALUES
(2, 'maria', '$2y$10$4Ocy8HSRi5cY0mvaCeNUPOmg3O/XMPBOL1mXx0S2w3vuzTYI0W/T.', '2020-08-14 17:34:28', 2),
(3, 'marcel', '$2y$10$r75dAnjG3pMYrV2XvxvzleY2pXycVYhrehfFvlqQjmBaLNw9DT/gG', '2020-08-14 17:34:46', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_article_id` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
