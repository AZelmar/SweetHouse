-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 22 jan. 2019 à 22:31
-- Version du serveur :  5.7.22-22-log
-- Version de PHP :  7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `u160227db1`
--

-- --------------------------------------------------------

--
-- Structure de la table `cookieLogin`
--

CREATE TABLE `cookieLogin` (
  `id` int(11) NOT NULL,
  `expirationDate` datetime NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cookieLogin`
--

INSERT INTO `cookieLogin` (`id`, `expirationDate`, `userId`, `userEmail`, `ip`) VALUES
(29, '2019-12-14 13:19:01', 11, 'b739b0c0b6899573b84d5a475c103caae841dd73dbae7844962ab1dc46ccdb792e17305037de8d47e622c4596b706e208e6798546748eac9fb203eeb0c597fb2', 'eaa961e3ce92091ba323fc111586afb9ebe0929c81bd76c41216024a24ca1cc3900987190083bdea671607fffe1552bb454fafdae5e00d0140ef4e0e18ef6466'),
(31, '2019-12-15 13:44:14', 11, 'b739b0c0b6899573b84d5a475c103caae841dd73dbae7844962ab1dc46ccdb792e17305037de8d47e622c4596b706e208e6798546748eac9fb203eeb0c597fb2', '3e65ad255564724547c36b9235746d44a8c9630890c6e7aae5fa7bccd28e2a57080e3bb55a3c4e04ea18de13c8a9d9402bc7a1f96877e33fad09923b93ed3956'),
(34, '2019-12-18 17:17:01', 26, '4057bcb04f6f2158907f61eb7f560c12882358cf0b18cb8e59e4ffc1d657a2cfc81f7a2bc216d075da44e923c95202f82f4959f182d63e8de43dc9867c7bc3e6', '04347fea7a3e48394b39ce4aec3c0430c17256ff9a65e6cdedcf4b1dc48083f346bc79b7c5a7a225012670ed0847aba298bee3a6acdb3a3a13f4d1b9020c216a'),
(38, '2019-12-23 21:47:34', 11, 'b739b0c0b6899573b84d5a475c103caae841dd73dbae7844962ab1dc46ccdb792e17305037de8d47e622c4596b706e208e6798546748eac9fb203eeb0c597fb2', '72fbe71b3ec38eb1e9955fa7bae85ccf6946a2d5cf528dd90118e0ba6f3fa4f4c2d27527965951ce399a63b3df6af274470e37f4b3e4bb2e7313af1de58853db'),
(47, '2020-01-09 10:50:14', 23, '18cb7a54326a5d19ff5ec32944d914be94c1a6746eea815ba0e72b0087b9ebabcf8e78de3869cf364dff172f3d35386a62ef5cbddbccc939910f47d38561c7a7', '04347fea7a3e48394b39ce4aec3c0430c17256ff9a65e6cdedcf4b1dc48083f346bc79b7c5a7a225012670ed0847aba298bee3a6acdb3a3a13f4d1b9020c216a');

-- --------------------------------------------------------

--
-- Structure de la table `formulaire`
--

CREATE TABLE `formulaire` (
  `id_sujet` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `pseudo` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mail` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date_commentaire` date NOT NULL,
  `commentaire` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `admin_answer` text CHARACTER SET utf8 COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formulaire`
--

INSERT INTO `formulaire` (`id_sujet`, `id_client`, `pseudo`, `mail`, `subject`, `date_commentaire`, `commentaire`, `admin_answer`) VALUES
(52, 23, 'LpineA', 'aymeric.lepine@icloud.com', 'Autres ', '2019-01-22', 'Bonjour, je suis intÃ©ressÃ© par ce forum car j\'aurai voulu savoir si il fallait priviliÃ©gier le contact avec l\'administrateur ici ou bien par mail personnel ou bien tÃ©lÃ©phone ? Merci de votre rÃ©ponse ! ', NULL),
(53, 23, 'Didierdu76', 'aymeric.lepine@icloud.com', 'Conseils', '2019-01-22', 'Bonjour, je souhaiterai faire privilÃ©gier mes enfants de droits particulier concernant la gestion des capteurs au sein de notre maison domotisÃ©e, comment faire ? Merci ! ', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE `rdv` (
  `id_rdv` int(11) NOT NULL,
  `jour` varchar(255) DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  `heure` int(11) DEFAULT NULL,
  `semaine` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `resetRQ`
--

CREATE TABLE `resetRQ` (
  `resetRQId` int(11) NOT NULL,
  `requestDate` datetime NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `resetRQ`
--

INSERT INTO `resetRQ` (`resetRQId`, `requestDate`, `email`, `token`) VALUES
(4, '2019-01-18 16:24:42', 'test@yopmail.com', 'e982b17d4cfc9a812fd4e8eb5945f966');

-- --------------------------------------------------------

--
-- Structure de la table `room`
--

CREATE TABLE `room` (
  `id_room` int(11) NOT NULL,
  `name_room` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `room`
--

INSERT INTO `room` (`id_room`, `name_room`) VALUES
(1, 'chambres'),
(2, 'cuisine'),
(3, 'salle_de_bain'),
(4, 'salon');

-- --------------------------------------------------------

--
-- Structure de la table `sensor`
--

CREATE TABLE `sensor` (
  `id_sensor` int(11) NOT NULL,
  `sensor_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sensor`
--

INSERT INTO `sensor` (`id_sensor`, `sensor_name`) VALUES
(1, 'lumiere'),
(2, 'temperature'),
(3, 'humidite'),
(4, 'fumee'),
(5, 'mouvement'),
(6, 'debit');

-- --------------------------------------------------------

--
-- Structure de la table `technicianRDV`
--

CREATE TABLE `technicianRDV` (
  `idTechnicianRDV` int(11) NOT NULL,
  `technicianId` int(11) NOT NULL,
  `day` varchar(11) NOT NULL,
  `hour` varchar(11) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `technicianRDV`
--

INSERT INTO `technicianRDV` (`idTechnicianRDV`, `technicianId`, `day`, `hour`, `reason`, `userId`) VALUES
(56555, 3, 'Lundi', '5', 'visite', 13),
(56556, 3, 'Vendredi', '4', 'retest', 3),
(56557, 3, 'Mercredi', '5', 'test1', 18),
(56558, 3, 'Vendredi', '10:30', 'PrÃ©sentation Client', 15),
(56559, 3, 'Samedi', '22', 'DÃ©bat ', 7),
(56560, 13, 'Mardi', '11:30', 'retest', 14),
(56561, 13, 'Vendredi', '19:30', 'visite', 8),
(56562, 13, 'Samedi', '15', 'PrÃ©sentation Client', 23);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `resetPassword` int(11) NOT NULL,
  `registerDate` datetime NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `zipCode` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `delaccount` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`userId`, `role`, `active`, `resetPassword`, `registerDate`, `lastName`, `firstName`, `age`, `password`, `gender`, `type`, `email`, `phone`, `adress`, `zipCode`, `city`, `country`, `delaccount`) VALUES
(3, 0, 1, 0, '2018-12-05 10:36:53', 'Suvorov', 'Vladimir', 20, '$2y$10$LajdfVPwLjcPqWq.BNKlaeNNrWyeMdbw3u4q.X/80XLW5/t5WD0GS', 'male', 'individual', 'vladimir.suvorov@laposte.net', 751512376, '72 rue pauline borghese', 92200, 'Neuilly sur Seine', 'france', '                        '),
(11, 0, 0, 0, '2018-12-05 10:55:14', 'LEPINE', 'Aymeric', 78, '$2y$10$ecDKcU/i046bHZoHY18aKOc4XZxW38fd9KJ7Vzjd9LIsQkCt7.6wC', 'male', 'individual', 'aymeric.lepine@gmail.com', 76236330, '30, rue Didot', 75014, 'PARIS', 'france', ' '),
(12, 0, 1, 0, '2018-12-07 14:06:20', 'ait omar', 'jean', 21, '$2y$10$YvFiB/9MpTVkhX9yDyW5C.Rc1UyAo6PS41XISn2f03aGkPxrDXfj2', 'gender', 'individual', 'hamza.aitomar@gmail.com', 622232265, '2 rue de jean jaures', 75006, 'paris', 'france', '  '),
(13, 2, 1, 0, '2018-12-10 10:40:41', 'test', 'test', 18, '$2y$10$jEX94KPTLoEUZAxSwbodyugxJSHCbh.3FLsyaHn0yo.lMYOK0/s9a', 'male', 'individual', 'test@yopmail.com', 14854848, 'tsrezzzz', 75014, 'paris', 'france', ''),
(23, 0, 1, 0, '2018-12-12 09:53:13', 'LEPINE', 'AYMERIC', 20, '$2y$10$T0TzUJIyEZ1TYuZa6H7Kt.kt3jnKcKWiasCmDGjrGhZQq5rLTcGAK', 'male', 'individual', 'aymeric.lepine@icloud.com', 0, '30, rue Didot', 75014, 'PARIS', 'france', '    '),
(26, 1, 1, 0, '2018-12-17 14:41:39', 'andrin', 'vincent', 18, '$2y$10$pml44hf35cMIr/YiaLK0MegtIbn9aCiLik/D53T6mo.Zs2Akywvfa', 'male', 'individual', 'vincentandrin96@gmail.com', 778895645, 'mmm', 75014, 'paris', 'france', ''),
(27, 0, 1, 0, '2018-12-27 10:26:01', 'Test', 'VladTest', 18, '$2y$10$7ZTR5ynfZ1rgmwzWJUblqeKNVz.GLjY7ajSTo4RFg.KAFrCfPu04y', 'male', 'individual', 'vlad@test.fr', 777777777, 'tsrezzzz', 75014, 'paris', 'france', ''),
(33, 1, 1, 0, '2019-01-07 16:23:19', 'zfzd', 'testzefdzef', 18, '$2y$10$19zi6VrgGE4VN0i6E3F18eM4VND/GZmVfI67SRdcgzRm8QVRRed3a', 'male', 'individual', 'test2@gmail.com', 178455421, 'azefdzed', 75018, 'paris', 'france', '');

-- --------------------------------------------------------

--
-- Structure de la table `userShop`
--

CREATE TABLE `userShop` (
  `id_userShop` int(11) NOT NULL,
  `lumiere` int(11) DEFAULT NULL,
  `temperature` int(11) DEFAULT NULL,
  `humidite` int(11) DEFAULT NULL,
  `fumee` int(11) DEFAULT NULL,
  `mouvement` int(11) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `userShop`
--

INSERT INTO `userShop` (`id_userShop`, `lumiere`, `temperature`, `humidite`, `fumee`, `mouvement`, `debit`) VALUES
(3, 0, 0, 0, 0, 0, 0),
(13, 5, 3, 0, 10, 2, 0),
(23, 3, 1, 0, 0, 0, 0),
(27, 0, 3, 0, 1, 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user_room`
--

CREATE TABLE `user_room` (
  `id_user_room` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `id_room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user_room`
--

INSERT INTO `user_room` (`id_user_room`, `userId`, `id_room`) VALUES
(1, 12, 3),
(2, 12, 1),
(3, 12, 2),
(4, 11, 1),
(5, 11, 4),
(6, 11, 2),
(26, 23, 1),
(27, 23, 2),
(28, 23, 3),
(29, 23, 4);

-- --------------------------------------------------------

--
-- Structure de la table `user_sensor`
--

CREATE TABLE `user_sensor` (
  `id_user_sensor` int(11) NOT NULL,
  `id_user_room` int(11) NOT NULL,
  `id_sensor` int(11) NOT NULL,
  `state` tinyint(4) NOT NULL,
  `functional` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user_sensor`
--

INSERT INTO `user_sensor` (`id_user_sensor`, `id_user_room`, `id_sensor`, `state`, `functional`) VALUES
(1, 1, 4, 0, 1),
(2, 1, 2, 1, 0),
(3, 1, 6, 1, 1),
(4, 1, 3, 0, 0),
(10, 14, 1, 1, 1),
(11, 24, 1, 1, 1),
(12, 26, 1, 1, 1),
(13, 26, 2, 1, 1),
(14, 26, 3, 0, 1),
(15, 26, 4, 1, 1),
(16, 26, 5, 0, 1),
(17, 26, 6, 0, 1),
(18, 27, 1, 1, 1),
(19, 27, 2, 1, 1),
(20, 27, 3, 1, 1),
(21, 27, 4, 1, 1),
(22, 27, 5, 0, 1),
(23, 27, 6, 0, 1),
(24, 28, 1, 1, 1),
(25, 28, 2, 1, 1),
(26, 28, 3, 1, 1),
(27, 28, 4, 0, 1),
(28, 28, 5, 0, 1),
(29, 28, 6, 0, 1),
(30, 29, 1, 0, 1),
(31, 29, 2, 1, 1),
(32, 29, 3, 1, 1),
(33, 29, 4, 0, 1),
(34, 29, 5, 0, 1),
(35, 29, 6, 0, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cookieLogin`
--
ALTER TABLE `cookieLogin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formulaire`
--
ALTER TABLE `formulaire`
  ADD PRIMARY KEY (`id_sujet`);

--
-- Index pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`id_rdv`);

--
-- Index pour la table `resetRQ`
--
ALTER TABLE `resetRQ`
  ADD PRIMARY KEY (`resetRQId`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id_room`);

--
-- Index pour la table `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Index pour la table `technicianRDV`
--
ALTER TABLE `technicianRDV`
  ADD PRIMARY KEY (`idTechnicianRDV`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Index pour la table `userShop`
--
ALTER TABLE `userShop`
  ADD PRIMARY KEY (`id_userShop`);

--
-- Index pour la table `user_room`
--
ALTER TABLE `user_room`
  ADD PRIMARY KEY (`id_user_room`);

--
-- Index pour la table `user_sensor`
--
ALTER TABLE `user_sensor`
  ADD PRIMARY KEY (`id_user_sensor`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cookieLogin`
--
ALTER TABLE `cookieLogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT pour la table `formulaire`
--
ALTER TABLE `formulaire`
  MODIFY `id_sujet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT pour la table `resetRQ`
--
ALTER TABLE `resetRQ`
  MODIFY `resetRQId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `room`
--
ALTER TABLE `room`
  MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `sensor`
--
ALTER TABLE `sensor`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `technicianRDV`
--
ALTER TABLE `technicianRDV`
  MODIFY `idTechnicianRDV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56563;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `user_room`
--
ALTER TABLE `user_room`
  MODIFY `id_user_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `user_sensor`
--
ALTER TABLE `user_sensor`
  MODIFY `id_user_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
