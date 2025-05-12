-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 12 mai 2025 à 14:10
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
-- Structure de la table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `numCni` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `demand` varchar(250) NOT NULL,
  `requestDate` date NOT NULL DEFAULT current_timestamp(),
  `requestTime` time NOT NULL DEFAULT current_timestamp(),
  `receptionDate` date DEFAULT NULL,
  `receptionTime` time DEFAULT NULL,
  `status` text NOT NULL,
  `filePath` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `request`
--

INSERT INTO `request` (`id`, `id_user`, `numCni`, `email`, `password`, `demand`, `requestDate`, `requestTime`, `receptionDate`, `receptionTime`, `status`, `filePath`) VALUES
(12, 4, '123456', 'koffigallie@gmail.com', 'mdp', 'voterRegistrationVerification, birthCertificate', '2025-05-11', '04:08:08', NULL, NULL, 'En cours d\'envoie', NULL),
(13, 4, '123456', 'koffigallie@gmail.com', 'mdp', 'voterRegistrationVerification, birthCertificate', '2025-05-11', '04:08:08', NULL, NULL, 'En cours d\'envoie', NULL),
(14, 4, '123456', 'koffigallie@gmail.com', 'mdp', 'deathCertificate, certificate0fNationality', '2025-05-11', '04:09:13', NULL, NULL, 'En cours d\'envoie', NULL),
(15, 4, '123456', 'koffigallie@gmail.com', 'mdp', 'deathCertificate, certificate0fNationality', '2025-05-11', '04:09:13', NULL, NULL, 'En cours d\'envoie', NULL),
(16, 4, '123456', 'koffigallie@gmail.com', 'mdp', 'deathCertificate', '2025-05-11', '04:17:02', NULL, NULL, 'En cours d\'envoie', NULL),
(17, 11, 'CI12345', 'yann@gmail.com', 'mdp1', 'deathCertificate', '2025-05-11', '04:25:39', '2025-05-11', '06:11:26', 'Document envoyé', NULL),
(18, 12, 'CI234567', 'jean@gmail.com', 'monMotDePasse', 'powerOfAttorney, proofOfResidence', '2025-05-11', '17:11:19', '2025-05-11', '23:46:27', 'Document envoyé', './uploads/1746999970_réçu_inscription.pdf'),
(19, 12, 'CI234567', 'jean@gmail.com', 'monMotDePasse', 'Acte de naissance', '2025-05-11', '23:40:55', '2025-05-11', '23:46:27', 'Document envoyé', './uploads/1746999970_réçu_inscription.pdf'),
(20, 13, 'CI12345678', 'yonathan@gmail.com', 'monMotDe', 'Certificat de résidence', '2025-05-12', '11:29:00', '2025-05-12', '11:37:58', 'Document envoyé', './uploads/1747042201_ficheidentification.pdf');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
