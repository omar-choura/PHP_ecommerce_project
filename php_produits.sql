-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2024 at 11:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_produits`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrateur`
--

INSERT INTO `administrateur` (`id`, `nom`, `email`, `mp`) VALUES
(1, 'admin', 'admin@ecommerce.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `createur` int(11) DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  `date_modification` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `description`, `createur`, `date_creation`, `date_modification`) VALUES
(2, 'categorie 1', 'Les gants MMA ou gants de grappling sont de petits gants à doigts ouverts éventuellement utilisés dans les combats d\'arts martiaux mixtes.', NULL, NULL, NULL),
(3, 'categorie 2', 'Les gants de MMA Sparring sont dotés d\'une mousse injectée haute qualité offrant une absorption optimale des chocs lors des sparrings appuyés. La fermeture est faite par un seul de tour de poignet pour un meilleur maintien du poignet et éviter les blessures et gênes au niveau du poignet.', NULL, NULL, NULL),
(4, 'categorie 3', 'Le casque mma est un équipement essentiel pour la pratique de la mma. Il protège la tête des coups et permet aux pratiquants de donner et de recevoir les coups de manière plus sûre. De plus, le casque mma permet aux pratiquants de se concentrer sur leur technique et non pas sur la douleur.', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `categorie` text NOT NULL,
  `matiere` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `prix`, `image`, `categorie`, `matiere`) VALUES
(1, 'Gants de MMA Everlast strike - Blanc et Or', 99, 'images/gants-mm-dna-leone-noir-or.png', 'categorie 1', ''),
(2, 'Gants de MMA Everlast strike 2- Blanc et Or', 99, 'images/mmagloves.png', 'categorie 1', ''),
(3, 'Gants de MMA Venum Challenger', 99, 'images/mmagloves2.png', 'categorie 1', ''),
(34, 'Gants combat libre Métal boxe \"black light\"', 99, 'images/mmagloves3.png', 'categorie 1', ''),
(35, 'Gants de MMA Elion sparring - Navy', 99, 'images/gants-de-sparring mma3.png', 'categorie 2', ''),
(36, 'Gants de sparring MMA Rinkage Hades', 99, 'images/gants-de-sparring mma.png', 'categorie 2', ''),
(37, 'Gants de sparring MMA Venum Challenger 3.0', 99, 'images/venum_sparring1.png', 'categorie 2', ''),
(38, 'Gants de MMA Leone sparring DNA', 99, 'images/gants-de-sparring mma4.png', 'categorie 2', ''),
(39, 'Casque de boxe Elion Uncage pour femme', 99, 'images/casque-boxe-elion-femme.png', 'categorie 3', ''),
(40, 'Casque de boxe Leone DNA', 99, 'images/casque-de-boxe1.png', 'categorie 3', ''),
(41, 'Casque de boxe Venum Élite - Noir et Rose', 99, 'images/casque-de-boxe2.png', 'categorie 3', ''),
(42, 'Casque de boxe Venum Challenger 2.0', 99, 'images/casque-de-boxe3.png', 'categorie 3', '');

-- --------------------------------------------------------

--
-- Table structure for table `visiteur`
--

CREATE TABLE `visiteur` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mp` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `etat` int(11) NOT NULL,
  `date_creation` date DEFAULT NULL,
  `date_modification` date DEFAULT NULL,
  `telephone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visiteur`
--

INSERT INTO `visiteur` (`id`, `email`, `mp`, `nom`, `prenom`, `etat`, `date_creation`, `date_modification`, `telephone`) VALUES
(2, 'test@test2', '1234566', 'test2', 'test2', 0, NULL, NULL, '1234566'),
(5, 'test@test3', '1234566', 'test3', 'test3', 0, NULL, NULL, '1234566'),
(6, 'test@test4', '123456', 'test4', 'test4', 0, NULL, NULL, '123456'),
(7, 'test@test9', 'e10adc3949ba59abbe56e057f20f883e', 'test', 'test', 0, NULL, NULL, '987654'),
(8, 'test@test', 'e10adc3949ba59abbe56e057f20f883e', 'test', 'test', 0, NULL, NULL, '987654'),
(9, 'aaaaaaa@aa', 'e10adc3949ba59abbe56e057f20f883e', 'aaaa', 'aaa', 0, NULL, NULL, '789456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visiteur`
--
ALTER TABLE `visiteur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `visiteur`
--
ALTER TABLE `visiteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
