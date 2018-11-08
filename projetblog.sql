-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 08 nov. 2018 à 16:45
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(535) NOT NULL,
  `content` longtext NOT NULL,
  `autor` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `name`, `image`, `content`, `autor`, `category`, `date`) VALUES
(1, 'article 1', 'https://img00.deviantart.net/7f79/i/2018/136/8/8/panda__16_9__by_geonowl-dcbql9m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam rhoncus tempor tortor, quis elementum felis volutpat\r\n            quis. Duis nulla est, congue eget ligula nec, lacinia sagittis mi. Nullam vitae mollis dui. Fusce dapibus quis tellus\r\n            et aliquam. Praesent tincidunt aliquet risus in laoreet. Duis sagittis nisi id erat maximus, quis pellentesque tortor\r\n            malesuada. Curabitur eu faucibus metus. Etiam sed erat porta, venenatis lorem eu, porta felis. Cras sit amet est in\r\n            justo vulputate varius. Aenean vitae condimentum nibh, eget blandit tortor. Aliquam vestibulum, erat vitae facilisis\r\n            lacinia, nibh ante bibendum justo, sit amet vulputate erat nibh vel metus. Suspendisse ut felis auctor, consequat dolor\r\n            at, tincidunt metus. Cras nec risus vel tellus varius faucibus. Donec rhoncus, ex ut dapibus dignissim, elit felis\r\n            faucibus leo, quis facilisis libero orci eget urna', 'Orane', 'lookbook', '2018-11-08 13:21:08'),
(2, 'article 2', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam rhoncus tempor tortor, quis elementum felis volutpat\r\n            quis. Duis nulla est, congue eget ligula nec, lacinia sagittis mi. Nullam vitae mollis dui. Fusce dapibus quis tellus\r\n            et aliquam. Praesent tincidunt aliquet risus in laoreet. Duis sagittis nisi id erat maximus, quis pellentesque tortor\r\n            malesuada. Curabitur eu faucibus metus. Etiam sed erat porta, venenatis lorem eu, porta felis. Cras sit amet est in\r\n            justo vulputate varius. Aenean vitae condimentum nibh, eget blandit tortor. Aliquam vestibulum, erat vitae facilisis\r\n            lacinia, nibh ante bibendum justo, sit amet vulputate erat nibh vel metus. Suspendisse ut felis auctor, consequat dolor\r\n            at, tincidunt metus. Cras nec risus vel tellus varius faucibus. Donec rhoncus, ex ut dapibus dignissim, elit felis\r\n            faucibus leo, quis facilisis libero orci eget urna', 'Orane', 'makeup', '2018-11-05 15:19:51'),
(3, 'Article 3 test', 'https://img00.deviantart.net/7f79/i/2018/136/8/8/panda__16_9__by_geonowl-dcbql9m.jpg', 'Contenu de l\'article', 'Orane', 'lookbook', '2018-11-08 13:21:00'),
(4, 'Test 4', '', 'ioeurejiouvqzepoifreo', 'Machintruc', 'blog', '2018-11-06 15:37:29'),
(5, 'TEST 5', '', 'vesojvnfoefvklbvefkbbmcdmjkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'truc', 'blog', '2018-11-06 15:39:33'),
(6, 'article 1', 'https://img00.deviantart.net/7f79/i/2018/136/8/8/panda__16_9__by_geonowl-dcbql9m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam rhoncus tempor tortor, quis elementum felis volutpat\r\n            quis. Duis nulla est, congue eget ligula nec, lacinia sagittis mi. Nullam vitae mollis dui. Fusce dapibus quis tellus\r\n            et aliquam. Praesent tincidunt aliquet risus in laoreet. Duis sagittis nisi id erat maximus, quis pellentesque tortor\r\n            malesuada. Curabitur eu faucibus metus. Etiam sed erat porta, venenatis lorem eu, porta felis. Cras sit amet est in\r\n            justo vulputate varius. Aenean vitae condimentum nibh, eget blandit tortor. Aliquam vestibulum, erat vitae facilisis\r\n            lacinia, nibh ante bibendum justo, sit amet vulputate erat nibh vel metus. Suspendisse ut felis auctor, consequat dolor\r\n            at, tincidunt metus. Cras nec risus vel tellus varius faucibus. Donec rhoncus, ex ut dapibus dignissim, elit felis\r\n            faucibus leo, quis facilisis libero orci eget urna', 'Orane', 'lookbook', '2018-11-08 13:20:53'),
(7, 'article 1', 'https://img00.deviantart.net/7f79/i/2018/136/8/8/panda__16_9__by_geonowl-dcbql9m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam rhoncus tempor tortor, quis elementum felis volutpat\r\n            quis. Duis nulla est, congue eget ligula nec, lacinia sagittis mi. Nullam vitae mollis dui. Fusce dapibus quis tellus\r\n            et aliquam. Praesent tincidunt aliquet risus in laoreet. Duis sagittis nisi id erat maximus, quis pellentesque tortor\r\n            malesuada. Curabitur eu faucibus metus. Etiam sed erat porta, venenatis lorem eu, porta felis. Cras sit amet est in\r\n            justo vulputate varius. Aenean vitae condimentum nibh, eget blandit tortor. Aliquam vestibulum, erat vitae facilisis\r\n            lacinia, nibh ante bibendum justo, sit amet vulputate erat nibh vel metus. Suspendisse ut felis auctor, consequat dolor\r\n            at, tincidunt metus. Cras nec risus vel tellus varius faucibus. Donec rhoncus, ex ut dapibus dignissim, elit felis\r\n            faucibus leo, quis facilisis libero orci eget urna', 'Orane', 'lookbook', '2018-11-08 13:20:45'),
(8, 'article 1', 'https://img00.deviantart.net/7f79/i/2018/136/8/8/panda__16_9__by_geonowl-dcbql9m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam rhoncus tempor tortor, quis elementum felis volutpat\r\n            quis. Duis nulla est, congue eget ligula nec, lacinia sagittis mi. Nullam vitae mollis dui. Fusce dapibus quis tellus\r\n            et aliquam. Praesent tincidunt aliquet risus in laoreet. Duis sagittis nisi id erat maximus, quis pellentesque tortor\r\n            malesuada. Curabitur eu faucibus metus. Etiam sed erat porta, venenatis lorem eu, porta felis. Cras sit amet est in\r\n            justo vulputate varius. Aenean vitae condimentum nibh, eget blandit tortor. Aliquam vestibulum, erat vitae facilisis\r\n            lacinia, nibh ante bibendum justo, sit amet vulputate erat nibh vel metus. Suspendisse ut felis auctor, consequat dolor\r\n            at, tincidunt metus. Cras nec risus vel tellus varius faucibus. Donec rhoncus, ex ut dapibus dignissim, elit felis\r\n            faucibus leo, quis facilisis libero orci eget urna', 'Orane', 'lookbook', '2018-11-08 13:20:36'),
(9, 'Essai publication nouveau formulaire', 'https://img00.deviantart.net/7f79/i/2018/136/8/8/panda__16_9__by_geonowl-dcbql9m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam rhoncus tempor tortor, quis elementum felis volutpat quis. Duis nulla est, congue eget ligula nec, lacinia sagittis mi. Nullam vitae mollis dui. Fusce dapibus quis tellus et aliquam. Praesent tincidunt aliquet risus in laoreet. Duis sagittis nisi id erat maximus, quis pellentesque tortor malesuada. Curabitur eu faucibus metus. Etiam sed erat porta, venenatis lorem eu, porta felis. Cras sit amet est in justo vulputate varius. Aenean vitae condimentum nibh, eget blandit tortor. Aliquam vestibulum, erat vitae facilisis lacinia, nibh ante bibendum justo, sit amet vulputate erat nibh vel metus. Suspendisse ut felis auctor, consequat dolor at, tincidunt metus. Cras nec risus vel tellus varius faucibus. Donec rhoncus, ex ut dapibus dignissim, elit felis faucibus leo, quis facilisis libero orci eget urna', 'Truc', 'lookbook', '2018-11-08 13:20:27');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'test');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
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
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
