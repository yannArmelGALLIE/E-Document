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
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(50) NOT NULL,
  `surname` text NOT NULL,
  `firstName` text NOT NULL,
  `email` text NOT NULL,
  `registrationNumber` text NOT NULL,
  `numPhone` text NOT NULL,
  `password` text NOT NULL,
  `status` text NOT NULL DEFAULT 'Deconnecté'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `surname`, `firstName`, `email`, `registrationNumber`, `numPhone`, `password`, `status`) VALUES
(7, 'GALLIE', 'Koffi Yann-Armel', 'yann@edocument.com', '1011121314GY', '+2550710971006', 'admin_edocument', 'Connecté'),
(8, 'G0RE BI', 'IRIE', 'gore@edocument.com', '1011121314GI', '+2550710971007', 'admin_edocument', 'Deconnecté'),
(9, 'SILUE', 'Rokia', 'silue@edocument.com', '1011121314SR', '+2550710971008', 'admin_edocument', 'Deconnecté'),
(10, 'SERY', 'Ange', 'sery@edocument.com', '1011121314SA', '+2550710971009', 'admin_edocument', 'Deconnecté'),
(11, 'KONE', 'Ali Ibrahim', 'kone@edocument.com', '1011121314KA', '+2550710971010', 'admin_edocument', 'Deconnecté'),
(12, 'COULIBALY', 'Fatoumata', 'coulibaly@edocument.com', '1011121314CF', '+2550710971011', 'admin_edocument', 'Deconnecté'),
(13, 'TRAORE', 'Moussa', 'traore@edocument.com', '1011121314TM', '+2550710971012', 'admin_edocument', 'Deconnecté'),
(14, 'DIARRA', 'Aminata', 'diarra@edocument.com', '1011121314DA', '+2550710971013', 'admin_edocument', 'Deconnecté'),
(15, 'KOUASSI', 'Jean-Paul', 'kouassi@edocument.com', '1011121314KJ', '+2550710971014', 'admin_edocument', 'Deconnecté'),
(16, 'BLE', 'Clarisse', 'ble@edocument.com', '1011121314BC', '+2550710971015', 'admin_edocument', 'Deconnecté'),
(17, 'YAO', 'David Arnaud', 'yao@edocument.com', '1011121314YD', '+2550710971016', 'admin_edocument', 'Deconnecté'),
(18, 'AKPA', 'Rachel', 'akpa@edocument.com', '1011121314AR', '+2550710971017', 'admin_edocument', 'Deconnecté'),
(19, 'OUATTARA', 'Nadège', 'ouattara@edocument.com', '1011121314ON', '+2550710971018', 'admin_edocument', 'Deconnecté'),
(20, 'N\'DA', 'Félix Kouamé', 'nda@edocument.com', '1011121314NK', '+2550710971019', 'admin_edocument', 'Deconnecté');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
