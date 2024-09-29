-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 24 fév. 2024 à 23:09
-- Version du serveur : 8.0.36-0ubuntu0.22.04.1
-- Version de PHP : 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `FlashCourses`
--

-- --------------------------------------------------------

--
-- Structure de la table `marks`
--

CREATE TABLE `marks` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `marks` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `marks`
--

INSERT INTO `marks` (`id`, `username`, `subject`, `marks`) VALUES
(1, 'oussama', 'Math', 10),
(2, 'oussama', 'Science Physiques', 15),
(3, 'oussama', 'Science Experimentales', 18),
(4, 'oussama', 'Histoire', 12),
(5, 'oussama', 'Math', 10),
(6, 'oussama', 'Science Physiques', 15),
(7, 'oussama', 'Science Experimentales', 18),
(8, 'oussama', 'Histoire', 12),
(9, 'oussama', 'Math', 10),
(10, 'oussama', 'Science Physiques', 15),
(11, 'oussama', 'Science Experimentales', 18),
(12, 'oussama', 'Histoire', 12),
(13, 'oussama', 'Math', 10),
(14, 'oussama', 'Science Physiques', 15),
(15, 'oussama', 'Science Experimentales', 18),
(16, 'oussama', 'Histoire', 12),
(17, 'oussama', 'Geographie', 16),
(18, 'oussama', 'Francais', 15),
(19, 'oussama', 'Anglais', 19),
(20, 'oussama', 'Allemand', 11);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(16, 'oussama', 'oussama@gmail.com', '123'),
(17, 'smal', 'smal@gmail.com', '123'),
(18, 'oussama', 'oussama@gmail.com', '123');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `marks`
--
ALTER TABLE `marks`
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
-- AUTO_INCREMENT pour la table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
