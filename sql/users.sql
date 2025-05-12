-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 12 mai 2025 à 14:08
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e-document`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `surname` text NOT NULL,
  `firstName` text NOT NULL,
  `number` int(12) NOT NULL,
  `email` text NOT NULL,
  `numCni` text NOT NULL,
  `numNni` int(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `surname`, `firstName`, `number`, `email`, `numCni`, `numNni`, `password`) VALUES
(14, 'TRAORE', 'Fatou', 701122334, 'fatou@gmail.com', 'CI345678', 987654, 'motDePasse1'),
(15, 'KONE', 'Abdoulaye', 705566778, 'abdoulaye@gmail.com', 'CI456789', 876543, 'motDePasse2'),
(16, 'COULIBALY', 'Aïcha', 709988776, 'aicha@gmail.com', 'CI567890', 765432, 'motDePasse3'),
(17, 'DIARRA', 'Mahamadou', 701234567, 'mahamadou@gmail.com', 'CI678901', 654321, 'motDePasse4'),
(18, 'TOURE', 'Salimata', 702345678, 'salimata@gmail.com', 'CI789012', 543210, 'motDePasse5'),
(19, 'OUATTARA', 'Bakary', 703456789, 'bakary@gmail.com', 'CI890123', 432109, 'motDePasse6'),
(20, 'KOUAME', 'Louise', 704567890, 'louise@gmail.com', 'CI901234', 321098, 'motDePasse7'),
(21, 'BLE', 'Marc', 705678901, 'marc@gmail.com', 'CI012345', 210987, 'motDePasse8'),
(22, 'N\'DA', 'Alice', 706789012, 'alice@gmail.com', 'CI123456', 109876, 'motDePasse9'),
(23, 'KOUASSI', 'Fabrice', 707890123, 'fabrice@gmail.com', 'CI234567', 908765, 'motDePasse10'),
(24, 'SANGARE', 'Binta', 708901234, 'binta@gmail.com', 'CI345679', 807654, 'motDePasse11'),
(25, 'YAO', 'Armel', 709012345, 'armel@gmail.com', 'CI456780', 706543, 'motDePasse12'),
(26, 'KOUADIO', 'Emmanuelle', 701123456, 'emmanuelle@gmail.com', 'CI567891', 605432, 'motDePasse13'),
(27, 'N\'GUESSAN', 'David', 702234567, 'david@gmail.com', 'CI678902', 504321, 'motDePasse14'),
(28, 'GNAHORE', 'Lucie', 703345678, 'lucie@gmail.com', 'CI789013', 403210, 'motDePasse15');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
