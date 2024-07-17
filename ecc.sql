-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 17 juil. 2024 à 19:02
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
-- Base de données : `ecc`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidature`
--

CREATE TABLE `candidature` (
  `candidature_id` int(11) NOT NULL,
  `offre_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date_candidature` date DEFAULT NULL,
  `lettre_motivation` text DEFAULT NULL,
  `cv_path` varchar(255) DEFAULT NULL,
  `statut` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `candidature`
--

INSERT INTO `candidature` (`candidature_id`, `offre_id`, `user_id`, `date_candidature`, `lettre_motivation`, `cv_path`, `statut`) VALUES
(69, 34, 60, '2024-07-17', 'salut je m appelle bonjour', 'nadhmi.jpg', 'Refusée');

-- --------------------------------------------------------

--
-- Structure de la table `offres_emploi`
--

CREATE TABLE `offres_emploi` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `entreprise` varchar(255) NOT NULL,
  `type_contrat` varchar(255) NOT NULL,
  `salaire` decimal(10,0) NOT NULL,
  `domaine` varchar(255) NOT NULL,
  `nombre_place` int(11) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `offres_emploi`
--

INSERT INTO `offres_emploi` (`id`, `titre`, `entreprise`, `type_contrat`, `salaire`, `domaine`, `nombre_place`, `description`) VALUES
(27, 'ingenieur', 'hp', 'CDI', 3000, 'infou', 2, 'zzzzzzzzzzzzz'),
(29, 'delegue', 'hp', 'CDI', 5000, 'infou', 1, 'aaaa'),
(30, 'prof', 'lenovo', 'CDI', 1000, 'data science', 3, 'eeeeeeeeeeeee'),
(31, 'electricien', 'uuuuuu', 'CTT', 500, 'efeee', 2, 'vide'),
(32, 'ingenieur', 'apple', 'CDI', 2500, 'cyber security', 5, 'tres demandé'),
(33, 'techsup', 'actia', 'CDI', 1900, 'embarqué', 2, 'pas de description'),
(34, 'mecanicien', 'ford', 'CDI', 3100, 'moteur', 2, 'rien');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `civilite` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `nivetude` varchar(255) NOT NULL,
  `typeformation` varchar(255) NOT NULL,
  `gouvernorat` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `role` text NOT NULL DEFAULT 'user',
  `confirmer` int(255) NOT NULL DEFAULT 0,
  `confirmekey` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `civilite`, `prenom`, `nom`, `email`, `mdp`, `experience`, `nivetude`, `typeformation`, `gouvernorat`, `telephone`, `ville`, `cv`, `role`, `confirmer`, `confirmekey`) VALUES
(19, 'mssk@gmail.com', 'Homme', 'MOUSSA', 'DANSOKO', 'mssk@gmail.com', 'ad57484016654da87125db86f4227ea3', 'Agriculture', 'Bac+3', 'Ameublement', 'Medenine', '4576980', 'Ariana', 'Admission ESEIA.pdf', 'admin', 1, NULL),
(31, 'mm@gmail.com', 'Homme', 'MIGUEL', 'MADRAZO', 'mm@gmail.com', '99472c386d5ac7c7d02202ce0a23908a', 'Enseignement', 'Bac+3', 'Conseil', 'Sidi Bouzid', '655560486', 'Yaoundé', 'DeskApp - Bootstrap Admin Dashboard HTML Template.csv', 'user', 0, NULL),
(34, 'nm@gmail.com', 'Femme', 'nouria', 'mobil', 'nm@gmail.com', '727ef5f14e332b67386f8bb53ae8c18a', 'Communication', 'Bac+2', 'Conseil', 'Manouba', '0618495085', 'Charte', 'Exercice 3.pdf', 'user', 0, NULL),
(35, 'a@gmail.com', 'Homme', 'aziz', 'm', 'a@gmail.com', '99472c386d5ac7c7d02202ce0a23908a', 'Banque', 'Bac+2', 'Audiovisuel', 'Kairouan', '2847614', 'Ariana', '', 'user', 0, NULL),
(37, 'ki@gmail.com', 'ki@gmail.com', 'Femme', 'kimi', 'ki@gmail.com', 'e913bd7a0896827c9b691b3d627728c1', 'Bac+6', 'Agence pub ', 'Sfax', '1234567', 'Yaoundé', 'DeskApp - Bootstrap Admin Dashboard HTML Template (2).pdf', '', 'admin', 0, NULL),
(38, 'wn@gmail.com', 'Homme', 'Will', 'Nya', 'wn@gmail.com', '159329099ff4d1074a000f435a9b03e6', 'Logistique', 'Bac+5', 'Administration', 'Sfax', '0618495085', 'Charte', 'Capture d’écran 2024-04-19 204912.png', 'user', 0, NULL),
(39, 'kayzeurdylan@gmail.com', 'Homme', 'KENDEM MBA', 'Rick Dylan', 'kayzeurdylan@gmail.com', 'bef83bf18fb227d95b8f06530a9c0e17', 'Enseignement', 'Bac+3', 'Banque', 'Sidi Bouzid', '655560486', 'Yaoundé', 'Capture d’écran 2024-04-19 010934.png', 'super_admin', 1, NULL),
(54, 'kendemrick@gmail.com', 'Homme', 'KENDEM', 'Dylan', 'kendemrick@gmail.com', '721799afd191fb39afecc2718a416b45', 'Call Centers', 'Bac+3', ' Aéro\r\n                                        nautique', 'Kebili', '28476140', 'Yaoundé', 'backoff ecc (2).pdf', 'user', 0, NULL),
(55, 'ko@gmail.com', 'Homme', 'Kenny', 'owen', 'ko@gmail.com', 'e913bd7a0896827c9b691b3d627728c1', 'Assurance', 'Bac+6', ' Aéro\r\n                                        nautique', 'Medenine', '28476140', 'Ariana', 'Organization Chart (Copy) (3).png', 'user', 0, NULL),
(56, 'Aziz@gmail.com', 'Homme', 'Aziz', 'Mansour', 'Aziz@gmail.com', 'bd739f3c1af2c09fe2dfca37e3f2f448', '-1', 'Bac+5', 'Informatique', 'Tunis', '12345678', 'Ezzahra', '10-fiche-limites-equivalents-usuels_Eleve (1).pdf', 'user', 0, NULL),
(57, 'shalby@gmail.com', 'Homme', 'malek', 'shalby', 'shalby@gmail.com', '6f951ca57a00214345dd93a2d8b50cc6', '-1', 'Bac+5', 'Immobilier', 'Ben Arous', '9874622', 'ezzahra', 'listeOFFRES (4).pdf', 'user', 0, NULL),
(59, 'zied@gmail.com', 'Homme', 'zied', 'bahnini', 'zied@gmail.com', '1f0dba0563e8a3ec929163fd0e82e786', 'Agriculture', 'Bac+6', 'Automobile', 'Bizerte', '50184977', 'Ezzahra', 'listeOFFRES (10).pdf', 'user', 0, NULL),
(60, 'youssefzeied@gmail.com', 'Homme', 'zeied', 'youssef', 'youssefzeied@gmail.com', '5cd6a34f3bca13fd26e7f64fc9f46a01', 'Electricité', 'Bac+5', 'Automobile', 'Ben Arous', '94800090', 'ezzahra', 'Correction_TD5.pdf', 'user', 0, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `candidature`
--
ALTER TABLE `candidature`
  ADD PRIMARY KEY (`candidature_id`),
  ADD KEY `offre_id` (`offre_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `offres_emploi`
--
ALTER TABLE `offres_emploi`
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
-- AUTO_INCREMENT pour la table `candidature`
--
ALTER TABLE `candidature`
  MODIFY `candidature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT pour la table `offres_emploi`
--
ALTER TABLE `offres_emploi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
