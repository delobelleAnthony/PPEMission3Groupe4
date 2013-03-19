-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 19 Mars 2013 à 12:29
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `mdl`
--

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

CREATE TABLE IF NOT EXISTS `association` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` longtext NOT NULL,
  `nomResponsable` varchar(15) DEFAULT NULL,
  `prenomResponsalbe` varchar(15) DEFAULT NULL,
  `adresseMail` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `association`
--

INSERT INTO `association` (`id`, `nom`, `nomResponsable`, `prenomResponsalbe`, `adresseMail`) VALUES
(1, 'Football', NULL, NULL, NULL),
(2, 'Badminton', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `contenu`
--

CREATE TABLE IF NOT EXISTS `contenu` (
  `id` int(11) NOT NULL,
  `Ordre` int(11) NOT NULL,
  `laFormationInformatique_id` int(11) NOT NULL,
  `leTheme_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`laFormationInformatique_id`,`leTheme_id`),
  KEY `IDX_467F39A320EF0096` (`laFormationInformatique_id`),
  KEY `IDX_467F39A3FBF381DB` (`leTheme_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contenu`
--

INSERT INTO `contenu` (`id`, `Ordre`, `laFormationInformatique_id`, `leTheme_id`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 2),
(3, 3, 1, 3),
(4, 4, 1, 4),
(5, 5, 1, 5),
(6, 6, 1, 6),
(7, 7, 1, 7),
(8, 8, 1, 8),
(9, 1, 2, 9),
(10, 2, 2, 10),
(11, 3, 2, 11),
(12, 4, 2, 7),
(13, 5, 2, 6),
(14, 6, 2, 12),
(15, 7, 2, 13),
(16, 8, 2, 14),
(17, 1, 3, 15),
(18, 2, 3, 16),
(19, 3, 3, 17),
(20, 4, 3, 18),
(21, 5, 3, 19),
(22, 6, 3, 20),
(23, 7, 3, 21),
(24, 8, 3, 22),
(25, 1, 4, 23),
(26, 2, 4, 24),
(27, 3, 4, 25),
(28, 4, 4, 26),
(29, 5, 4, 27),
(30, 6, 4, 28),
(31, 7, 4, 29),
(32, 1, 5, 30),
(33, 2, 5, 31),
(34, 3, 5, 32),
(35, 4, 5, 33),
(36, 5, 5, 34),
(37, 6, 5, 35),
(38, 7, 5, 36);

-- --------------------------------------------------------

--
-- Structure de la table `contenu_detail`
--

CREATE TABLE IF NOT EXISTS `contenu_detail` (
  `contenu_id` int(11) NOT NULL,
  `detail_id` int(11) NOT NULL,
  PRIMARY KEY (`contenu_id`,`detail_id`),
  KEY `IDX_8A9A0FA13C1CC488` (`contenu_id`),
  KEY `IDX_8A9A0FA1D8D003BB` (`detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contenu_detail`
--

INSERT INTO `contenu_detail` (`contenu_id`, `detail_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(3, 15),
(3, 16),
(3, 17),
(4, 18),
(4, 19),
(5, 20),
(5, 21),
(5, 22),
(5, 23),
(5, 24),
(6, 25),
(6, 26),
(6, 27),
(6, 28),
(6, 29),
(6, 30),
(7, 31),
(7, 32),
(8, 33),
(8, 34),
(9, 35),
(9, 36),
(9, 37),
(9, 38),
(10, 39),
(11, 40),
(11, 41),
(12, 40),
(13, 43),
(13, 44),
(13, 45),
(13, 46),
(13, 47),
(14, 30),
(14, 48),
(14, 49),
(14, 50),
(17, 51),
(17, 52),
(17, 53),
(18, 54),
(18, 55),
(18, 56),
(18, 57),
(18, 58),
(19, 59),
(19, 60),
(19, 61),
(19, 62),
(19, 63),
(19, 64),
(20, 65),
(20, 66),
(20, 67),
(21, 68),
(21, 69),
(21, 70),
(22, 71),
(22, 72),
(22, 73),
(23, 74),
(24, 75),
(24, 76),
(24, 77),
(24, 78),
(24, 79),
(25, 80),
(25, 81),
(25, 82),
(26, 83),
(26, 84),
(26, 85),
(27, 86),
(27, 87),
(27, 88),
(27, 89),
(27, 90),
(27, 91),
(27, 92),
(28, 93),
(28, 94),
(28, 95),
(29, 96),
(29, 97),
(29, 98),
(29, 99),
(29, 100),
(29, 101),
(29, 102),
(29, 103),
(29, 104),
(29, 105),
(30, 106),
(30, 107),
(30, 108),
(31, 109),
(31, 110),
(31, 111),
(31, 112),
(31, 113),
(31, 114),
(31, 115),
(31, 116),
(32, 117),
(32, 118),
(33, 84),
(33, 119),
(33, 120),
(33, 121),
(33, 122),
(33, 123),
(33, 124),
(33, 125),
(33, 126),
(33, 127),
(33, 128),
(33, 129),
(33, 130),
(33, 131),
(33, 132),
(33, 133),
(34, 134),
(34, 135),
(34, 136),
(35, 137),
(35, 138),
(36, 139),
(36, 140),
(36, 141),
(37, 142),
(37, 143),
(37, 144),
(38, 142),
(38, 145),
(38, 146),
(38, 147);

-- --------------------------------------------------------

--
-- Structure de la table `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Libelle` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=148 ;

--
-- Contenu de la table `detail`
--

INSERT INTO `detail` (`id`, `Libelle`) VALUES
(1, 'Qu’est-ce que la Présentation Assistée par Ordinateur ?'),
(2, 'Présentation de l’écran et des boîtes de dialogue'),
(3, 'Terminologie des objets et des fonctionnalités'),
(4, 'Personnalisation de la barre d’outils'),
(5, 'Les assistants, les menus contextuels'),
(6, 'Diapos listes à puces'),
(7, 'Utilisation de la règle'),
(8, 'Correcteur orthographique'),
(9, 'Insertion d’images, titres WordArt'),
(10, 'Insertion de tableaux, Insertion de graphiques'),
(11, 'Insertion d’organigramme hiérarchique'),
(12, 'Réalisation de figures géométriques et formes prédéfinies'),
(13, 'La mise en forme des objets'),
(14, 'La hiérarchie et l’association des objets'),
(15, 'Mode Diapo, Mode Normal, Mode Plan'),
(16, 'Mode Trieuse de diapos'),
(17, 'Mode Diaporama'),
(18, 'Diapositives de fichier'),
(19, 'Diapositives de plan'),
(20, 'En-tête et pied de page du document'),
(21, 'En-tête et pied de page des diapositives'),
(22, 'Modifier le masque des diapositives'),
(23, 'Insertion de diapos de résumé'),
(24, 'Masquer des diapos'),
(25, 'Effets de transition'),
(26, 'Effets d’animation : animer du texte, des objets,des graphiques, insérer des sons'),
(27, 'Exporter des diaporamas'),
(28, 'Exécuter des diaporamas'),
(29, 'Visionneuse'),
(30, 'Diaporama personnalisé'),
(31, 'Créer ses modèles personnalisés'),
(32, 'Utiliser les modèles intégrés'),
(33, 'Créer des liens hypertexte'),
(34, 'Enregistrer au format HTML'),
(35, 'Manipulation des objets'),
(36, 'Insertions d’effets'),
(37, 'Les figures géométriques, modification et personnalisation'),
(38, 'Association d’objets'),
(39, 'Les différents modes d’affichage'),
(40, 'Appliquer un modèle de présentation'),
(41, 'Jeu des couleurs'),
(43, 'Les effets du diaporama'),
(44, 'Ajouter des animations'),
(45, 'Animer un texte'),
(46, 'Animer un graphique'),
(47, 'Présenter un diaporama'),
(48, 'Enregistrer un diaporama'),
(49, 'Présentation à emporter'),
(50, 'Exécuter une présentation sur un autre ordinateur'),
(51, 'Le pixel, la résolution d’une image ppp'),
(52, 'Principes généraux de l’acquisition'),
(53, 'Étalonnage de l’écran'),
(54, 'Sources lumineuses et caractéristiques d’une couleur'),
(55, 'Niveaux de gris et couleurs indexées'),
(56, 'Synthèse additive RVB et synthèse soustractive CMJN'),
(57, 'Méthodes de réduction du nombre de couleurs'),
(58, 'Interpolation bilinéaire et bicubique'),
(59, 'Modules externes et disques de travail'),
(60, 'Paramétrage de la mémoire cache'),
(61, 'Préférences d’affichage, unités de règles de repères et de grille'),
(62, 'Les options de la palette : formes, couleurs, calques, historiques,...'),
(63, 'Les options de la boîte à outils : couleurs, mode masque,...'),
(64, 'Manipulation des outils'),
(65, 'Recadrage, dimension, définition et taille d’une image'),
(66, 'Sélection partielle d’une image'),
(67, 'Retouche de la luminosité et du contraste d’une image, dosage des couleurs, variation de la teinte et saturation, réglage du “gamma”, notions de masqu'),
(68, 'Transformations d’images : symétrie, homothétie, rotation et anamorphose'),
(69, 'Création et manipulation des calques, effets de transparence et effets de calques'),
(70, 'Utilisations des filtres'),
(71, 'Les formats PSD, PDD'),
(72, 'Les différents formats d’enregistrement (EPS, TIFF, JPG, PDF, DCS,...)'),
(73, 'Importation et exportation'),
(74, 'Les différentes possibilités d’impression, couleurs non imprimables, séparation de couleurs'),
(75, 'Retoucher et réparer des images'),
(76, 'Créer des formes et modifier les sélections avec la plume et les outils associés'),
(77, 'Appliquer des effets spéciaux'),
(78, 'Préparer les images pour l’impression'),
(79, 'Optimiser les images pour le Web'),
(80, 'Règles de base'),
(81, 'Mise en page et composition'),
(82, 'Quelques exemples conseillés et déconseillés'),
(83, 'Formatage (marge, colonne,…)'),
(84, 'Composition'),
(85, 'Les différents objets dans la page'),
(86, 'Création et placement d’un texte'),
(87, 'Les modes de coulage d’un texte dans les colonnes'),
(88, 'Édition de texte (couper, copier, coller)'),
(89, 'Caractères et polices'),
(90, 'Paragraphe/Tabulation'),
(91, 'Manipulation des cadres de textes'),
(92, 'Création de tableaux'),
(93, 'Importation (bitmap/vectoriel)'),
(94, 'Manipulation et déformation'),
(95, 'Rognage (découpage d’image)'),
(96, 'La maquette'),
(97, 'Préparation'),
(98, 'Maquette recto/verso'),
(99, 'Liens dynamiques avec le document'),
(100, 'Formats particuliers de texte, graphiques et images'),
(101, 'Chaînage et déroulement des blocs-textes'),
(102, 'Orientation des blocs'),
(103, 'Insertion, déplacement et suppression de pages'),
(104, 'Mise en oeuvre des publications'),
(105, 'Présentation des Assistants Publisher'),
(106, 'Lignes, cercles, rectangles'),
(107, 'Type de ligne et de surface'),
(108, 'Avant plan et arrière plan'),
(109, 'Placer les textes et les images en fonction des uns des autres'),
(110, 'Habillage d’une image'),
(111, 'En-tête et pied de page'),
(112, 'Utilisation des repères'),
(113, 'Utilisation de l’arrière plan'),
(114, 'Foliotage (pagination)'),
(115, 'Imprimer le document'),
(116, 'Utilisation de modèles prédéfinis'),
(117, 'Présentation et démarrage'),
(118, 'Le navigateur'),
(119, 'Le carnet d’adresses'),
(120, 'Rédaction d’un message'),
(121, 'Mise en forme'),
(122, 'L’insertion de pièces jointes depuis le message ou d’une application'),
(123, 'Options d’envoi de messages'),
(124, 'Enregistrer un message inachevé'),
(125, 'Récupérer un message inachevé et l’envoyer'),
(126, 'Insérer des repères d’importance et suivi des messages'),
(127, 'Ajouter un indicateur de suivi à un message'),
(128, 'Définir l’importance d’un message'),
(129, 'Demander une réponse et une confirmation de lecture'),
(130, 'Utiliser les boutons de vote'),
(131, 'Désigner un autre utilisateur comme destinataire des réponses à votre message'),
(132, 'Ajouter un lien hypertexte à un message'),
(133, 'Signatures des messages'),
(134, 'Caractéristiques d’un message'),
(135, 'Répondre à l’expéditeur, répondre à tous'),
(136, 'Transfert de messages'),
(137, 'Carnet d’adresse personnel'),
(138, 'Créer une liste de diffusion'),
(139, 'Suppression, recherche, tri et impression'),
(140, 'Archivage de messages'),
(141, 'Signatures automatiques'),
(142, 'Les modes d’affichage'),
(143, 'Utilisation dans l’agenda, dans Office'),
(144, 'Gestion des contacts'),
(145, 'Création de rendez-vous / Évènements'),
(146, 'Caractéristiques, propriétés, alarme'),
(147, 'Gestion des rendez-vous / Évènements');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Horaire` varchar(30) NOT NULL,
  `Salle` varchar(30) NOT NULL,
  `Adresse` varchar(150) NOT NULL,
  `Cout` varchar(100) NOT NULL,
  `Repas` varchar(100) NOT NULL,
  `DateLimite` date NOT NULL,
  `laFormationSport_id` int(11) DEFAULT NULL,
  `laFormationInformatique_id` int(11) DEFAULT NULL,
  `nbInscrit` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C2B1A31CDA21846A` (`laFormationSport_id`),
  KEY `IDX_C2B1A31C20EF0096` (`laFormationInformatique_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id`, `Date`, `Horaire`, `Salle`, `Adresse`, `Cout`, `Repas`, `DateLimite`, `laFormationSport_id`, `laFormationInformatique_id`, `nbInscrit`) VALUES
(1, '2013-06-03', '19h00', 'Lorraine 1', '', '', '', '0000-00-00', 1, NULL, 0),
(2, '2013-05-02', '19h00', 'Alsace 1', '', '', '', '0000-00-00', 2, NULL, 0),
(3, '2013-05-12', '17h00', 'Lorraine 2', '', '', '', '0000-00-00', 3, NULL, 0),
(4, '2013-05-30', '9h-12h et 13h30 - 17h', 'informatique mrsl', 'Maison Régionale  des Sports de Lorraine 13 Rue Jean Moulin 54 510 Tomblaine', '55 € support de cours inclus', 'A charge des participants', '2013-04-30', NULL, 1, 0),
(5, '2013-06-03', '9h-12h et 13h30 - 17h', 'informatique', 'Maison Régionale  des Sports de Lorraine 13 Rue Jean Moulin 54 510 Tomblaine', '110 € support de cours inclus', 'A charge des participants', '2013-05-17', NULL, 2, 0),
(6, '2013-05-19', '9h – 17h', 'Informatique', 'Maison Régionale  des Sports de Lorraine 13 Rue Jean Moulin 54 510 Tomblaine', '110 € support de cours inclus', 'A charge des participants', '2013-04-01', NULL, 3, 0),
(7, '2013-05-28', '9h – 17h', 'Laboratoire', 'Lycée Carnot 160 rue du Jambon 54 510 Tomblaine', '110 € support de cours inclus', 'A charge des participants', '2013-05-01', NULL, 4, 0),
(8, '2013-06-28', '9h-12h et 13h30 - 17h', 'Laboratoire', 'Lycée Carnot 160 rue du Jambon 54 510 Tomblaine', '55 € support de cours inclus', 'A charge des participants', '2013-06-01', NULL, 1, 0),
(9, '2013-05-21', '9h-12h et 13h30 - 17h', 'Informatique mrsl', '', '55 € support de cours inclus', 'A charge des participants', '2013-05-02', NULL, 5, 0);

-- --------------------------------------------------------

--
-- Structure de la table `formationinformatique`
--

CREATE TABLE IF NOT EXISTS `formationinformatique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(100) NOT NULL,
  `Objectif` text NOT NULL,
  `Public` varchar(150) NOT NULL,
  `Prerequis` longtext NOT NULL,
  `Logo` varchar(50) NOT NULL,
  `nbPlace` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `formationinformatique`
--

INSERT INTO `formationinformatique` (`id`, `Titre`, `Objectif`, `Public`, `Prerequis`, `Logo`, `nbPlace`) VALUES
(1, 'Formation Power point Niveau 1 - 1 journée', 'Mettre en oeuvre les différentes commandes et les fonctions de PowerPoint.', 'Bénévoles, dirigeants et salariés du mouvement sportif', 'Personnes réalisant des transparents, graphiques ou diaporamas. Programme\r\nsur 1 jour : bonne connaissance de Windows, Word et Excel.', 'PowerPoint.jpg', 25),
(2, 'Formation Power point Niveau 2 – 1 journée', 'Parfaire ses connaissances sur PowerPoint', 'Bénévoles, dirigeants et salariés du mouvement sportif', 'Windows', 'PowerPoint.jpg', 20),
(3, 'Formation Photoshop – 2 journées', 'Découvrir le traitement des images numériques couleur ainsi que leur séparation quadrichromique. Répondre aux besoins des photographes,\r\nphotograveurs, des créatifs et des inventeurs d’images. Acquérir une\r\nméthode de travail professionnelle', 'Bénévoles, dirigeants et salariés du mouvement sportif désirant s’ouvrir\r\naux techniques de traitement informatique de l’image ainsi qu’à la\r\npratique', 'une bonne pratique de l’outil informatique est indispensable ; la\r\nconnaissance d’autres logiciels de la chaîne graphique est souhaitée.', 'Photoshop.jpg', 20),
(4, 'Formation Publisher 2 journées', 'Savoir créer et produire des compositions de type brochure, prospectus,\r\nformulaire, invitation, bulletin d’informations.', 'Bénévoles, dirigeants et salariés du mouvement sportif', 'Maîtriser les commandes de base de Windows', 'Publisher.jpg', 15),
(5, 'Formation Outlook Niveau 1 - 1 journée', 'Savoir gérer les différents objets et les outils de communication', 'Bénévoles, dirigeants et salariés du mouvement sportif', 'Personnels souhaitant maîtriser les options de base d’Outlook.', 'Outlook.jpg', 30);

-- --------------------------------------------------------

--
-- Structure de la table `formationsport`
--

CREATE TABLE IF NOT EXISTS `formationsport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(100) NOT NULL,
  `Objectif` varchar(100) NOT NULL,
  `Logo` varchar(100) NOT NULL,
  `nbPlace` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `formationsport`
--

INSERT INTO `formationsport` (`id`, `Titre`, `Objectif`, `Logo`, `nbPlace`) VALUES
(1, 'Traumatologie sportive', 'Définitions -- Inventaire des pathologies -- Traitement -- Prévention', 'trauma.jpg', 30),
(2, 'Alimentation du sportif', 'Notions de base -- Régimes adaptés à la compétition : préparation, période d''effort, récupération', 'alimentation.jpg', 20),
(3, 'Conduites addictives (les dépendances)', 'Quelles conduites à tenir auprès du pratiquant sportif', 'medicament.jpg', 10);

-- --------------------------------------------------------

--
-- Structure de la table `formation_intervenant`
--

CREATE TABLE IF NOT EXISTS `formation_intervenant` (
  `formation_id` int(11) NOT NULL,
  `intervenant_id` int(11) NOT NULL,
  PRIMARY KEY (`formation_id`,`intervenant_id`),
  KEY `IDX_2C2D34875200282E` (`formation_id`),
  KEY `IDX_2C2D3487AB9A1716` (`intervenant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `formation_intervenant`
--

INSERT INTO `formation_intervenant` (`formation_id`, `intervenant_id`) VALUES
(1, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 3),
(5, 3),
(6, 4),
(7, 4),
(8, 3),
(9, 4);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE IF NOT EXISTS `inscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stage` int(11) DEFAULT NULL,
  `association` int(11) DEFAULT NULL,
  `nbInscrit` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5E90F6D6C27C9369` (`stage`),
  KEY `IDX_5E90F6D6FD8521CC` (`association`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`id`, `stage`, `association`, `nbInscrit`) VALUES
(1, NULL, 1, 123),
(2, NULL, 1, 13);

-- --------------------------------------------------------

--
-- Structure de la table `intervenant`
--

CREATE TABLE IF NOT EXISTS `intervenant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `intervenant`
--

INSERT INTO `intervenant` (`id`, `Nom`, `Prenom`) VALUES
(1, 'PTIPEU', 'Justin'),
(2, 'GOLADE', 'Larry'),
(3, 'MANVUSSA', 'Gérard'),
(4, 'ANSSIEU', 'Cécile');

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

CREATE TABLE IF NOT EXISTS `stage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idFormation` int(11) NOT NULL,
  `nbParticipantsMax` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `stage`
--

INSERT INTO `stage` (`id`, `idFormation`, `nbParticipantsMax`) VALUES
(1, 1, 25),
(2, 1, 25),
(3, 1, 25),
(4, 1, 25),
(5, 1, 25),
(6, 1, 25);

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE IF NOT EXISTS `theme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NomTheme` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Contenu de la table `theme`
--

INSERT INTO `theme` (`id`, `NomTheme`) VALUES
(1, 'Découverte et prise en main de PowerPoint'),
(2, 'Création d’une présentation : mise en page des diapos'),
(3, 'Les différents modes d’affichage'),
(4, 'Intégration de diapos extérieures'),
(5, 'Mise en page du diaporama et impression du document'),
(6, 'Les animations'),
(7, 'Les modèles'),
(8, 'Powerpoint et Internet'),
(9, 'Amélioration d’une présentation'),
(10, 'L’affichage'),
(11, 'Personnalisation des diapositives'),
(12, 'Enregistrer une présentation'),
(13, 'Ajouter du son'),
(14, 'PowerPoint et Internet'),
(15, 'Rappels sur les images numériques'),
(16, 'Les modes colorimétriques'),
(17, 'Présentation et personnalisation'),
(18, 'Traitement numérique et retouche partielle'),
(19, 'Travaux photographiques'),
(20, 'Les formats d’échange'),
(21, 'Principes de base d’impression'),
(22, 'Mises en pratique et capacités'),
(23, 'Typographie'),
(24, 'La page'),
(25, 'Texte'),
(26, 'Image'),
(27, 'Les effets spéciaux de Wordart'),
(28, 'Objets graphiques'),
(29, 'Composition'),
(30, 'Outlook'),
(31, 'Envoi de messages'),
(32, 'Ouverture de messages'),
(33, 'Gestion du carnet d’adresses'),
(34, 'Gestion des messages'),
(35, 'Contacts'),
(36, 'Calendrier');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `contenu`
--
ALTER TABLE `contenu`
  ADD CONSTRAINT `FK_467F39A320EF0096` FOREIGN KEY (`laFormationInformatique_id`) REFERENCES `formationinformatique` (`id`),
  ADD CONSTRAINT `FK_467F39A3FBF381DB` FOREIGN KEY (`leTheme_id`) REFERENCES `theme` (`id`);

--
-- Contraintes pour la table `contenu_detail`
--
ALTER TABLE `contenu_detail`
  ADD CONSTRAINT `FK_8A9A0FA13C1CC488` FOREIGN KEY (`contenu_id`) REFERENCES `contenu` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_8A9A0FA1D8D003BB` FOREIGN KEY (`detail_id`) REFERENCES `detail` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `FK_C2B1A31C20EF0096` FOREIGN KEY (`laFormationInformatique_id`) REFERENCES `formationinformatique` (`id`),
  ADD CONSTRAINT `FK_C2B1A31CDA21846A` FOREIGN KEY (`laFormationSport_id`) REFERENCES `formationsport` (`id`);

--
-- Contraintes pour la table `formation_intervenant`
--
ALTER TABLE `formation_intervenant`
  ADD CONSTRAINT `FK_2C2D34875200282E` FOREIGN KEY (`formation_id`) REFERENCES `formation` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_2C2D3487AB9A1716` FOREIGN KEY (`intervenant_id`) REFERENCES `intervenant` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `FK_5E90F6D6C27C9369` FOREIGN KEY (`stage`) REFERENCES `stage` (`id`),
  ADD CONSTRAINT `FK_5E90F6D6FD8521CC` FOREIGN KEY (`association`) REFERENCES `association` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
