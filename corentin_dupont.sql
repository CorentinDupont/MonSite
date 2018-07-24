-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 30 Juillet 2017 à 14:27
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `corentin_dupont`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `Id_Article` int(5) NOT NULL,
  `Nom_Article` varchar(255) NOT NULL,
  `Auteur_Article` varchar(255) NOT NULL,
  `Date_Article` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`Id_Article`, `Nom_Article`, `Auteur_Article`, `Date_Article`) VALUES
(78, 'Stage 1Ã¨re AnnÃ©e, le commencement ! ', 'Corentin', '2017-06-17');

-- --------------------------------------------------------

--
-- Structure de la table `contenu_article`
--

CREATE TABLE `contenu_article` (
  `Id_Contenu_Article` int(10) NOT NULL,
  `Texte_Contenu_Article` text NOT NULL,
  `Type_Contenu_Article` varchar(100) NOT NULL,
  `Ordre_Contenu_Article` int(4) NOT NULL,
  `Id_Article` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contenu_article`
--

INSERT INTO `contenu_article` (`Id_Contenu_Article`, `Texte_Contenu_Article`, `Type_Contenu_Article`, `Ordre_Contenu_Article`, `Id_Article`) VALUES
(143, '../../images/597c563854782.png', 'image', 1, 78),
(144, 'Il fallait bien passer par lÃ , un stage en entreprise ! En excluant mon â€˜stageâ€™ de troisiÃ¨me, celui-ci est mon premier. Il est dans le cadre de mes Ã©tudes au Campus Ynov Nantes, et marque la fin de ma premiÃ¨re annÃ©e IngÃ©sup.  Dans cet article, je vais simplement prÃ©senter le contexte du stage, comment je lâ€™ai dÃ©crochÃ© et le commencement du projet.', 'text', 2, 78),
(145, 'Ce stage, câ€™est grÃ¢ce au rÃ©seau que jâ€™ai pu le faire. On mâ€™a souvent dit que faire marcher lâ€™entourage fonctionnait bien. La durÃ©e du stage, Ã©tant de 6 semaines, est relativement courte. Ã‡a a Ã©tÃ© un facteur auprÃ¨s de mon futur maÃ®tre de stage, Daniel, qui avait dÃ©jÃ  pris un alternant. ', 'text', 3, 78),
(146, 'AprÃ¨s avoir dÃ©battu sur mes compÃ©tences, le sujet du stage sâ€™est vite Ã©claircit : de lâ€™Android ! En voilÃ  un sujet qui me plaÃ®t. Il sâ€™agissait de remettre en forme une application au niveau fonctionnel et visuel ! Daniel mâ€™a montrÃ© lâ€™application avant de commencer. Jâ€™ai eu lâ€™impression dâ€™avoir perdu la vision des couleurs, mais pour nuancer, cette application avait dÃ©jÃ  5 ans. ', 'text', 4, 78),
(147, '../../images/597c563856fa4.png', 'image', 5, 78),
(148, 'Pour Ãªtre plus prÃ©cis, il y a plusieurs applications, qui appartiennent au Groupe CIF, une entreprise dâ€™immobilier Ã  Nantes. La premiÃ¨re est EDL, pour faire des Ã©tats des lieux. La deuxiÃ¨me se nomme RÃ©serves et la derniÃ¨re sâ€™appelle Visite. Pour faire bref, cette derniÃ¨re sers Ã  prendre des notes lors dâ€™une visite dâ€™une copropriÃ©tÃ©. ', 'text', 6, 78),
(149, 'Alors quelle application ai-je retouchÃ© ? Cela sâ€™est dÃ©cidÃ© lorsque jâ€™ai commencÃ© mon stage. AprÃ¨s avoir confrontÃ© la bonne heure de voyage entre chez moi et le CIF, tout en pratiquant la voiture, le busway et la marche Ã  pied, cela sâ€™est dÃ©cidÃ©. Il faut savoir quâ€™elles ont Ã©tÃ© dÃ©veloppÃ©es initialement sur une tablette dotÃ© dâ€™une version 4.4 KitKat dâ€™Android. De ce fait le choix sâ€™est jouÃ© sur leurs fonctionnement initial sur les nouvelles tablettes, dotÃ©es de la version 7 Nougat. Câ€™est Visite qui a perdu Ã  ce test ! Et voilÃ  que les choses sÃ©rieuses commencentâ€¦', 'text', 7, 78),
(150, 'Une premiÃ¨re Ã©tape : mise Ã  niveau de lâ€™application Visite sur les nouvelles tablettes. Le problÃ¨me Ã©tait que le systÃ¨me de base de donnÃ©es utilisÃ©, Active Android, nâ€™est plus mis Ã  jour. Alors il fallait tout remplacer par la mÃ©thode habituelle, une base de donnÃ©es SQLite ! Ã‡a tombe bien, je ne mâ€™y Ã©tais pas frottÃ© lors de mon prÃ©cÃ©dent projet Android. Plusieurs Ã©tapes : ', 'text', 8, 78),
(151, ' -	ModÃ©lisation de la base en Merise, ainsi que sur le logiciel MySQL Workbench', 'text', 9, 78),
(152, '-	ComprÃ©hension du fonctionnement de lâ€™application, pour travailler dessus aisÃ©ment. Jâ€™ai fait ', 'text', 10, 78),
(153, '-	RepÃ©rer les fourbes lignes de la librairie Active Android, du moins la forme, pour savoir quoi remplacer. ', 'text', 11, 78),
(154, '-	En sâ€™inspirant de lâ€™app EDL, crÃ©ation de la base de donnÃ©es SQLite. Jâ€™ai tout de mÃªme remarquÃ© quelque chose, câ€™est que les fichiers contenant les mÃ©thodes select, insert, delete, update etc. sont trÃ¨s rÃ©barbatifs. Cela mâ€™a fortement fais penser Ã  dÃ©velopper un petit gÃ©nÃ©rateur de base de donnÃ©es SQLite toutes simples, pourquoi pas en Android hÃ©hÃ©.', 'text', 12, 78),
(155, '-	Remplacer toutes les mÃ©thodes et entitÃ©s utilisÃ©s par ActiveAndroid par les nouvelles mÃ©thodes.', 'text', 13, 78),
(156, '-	Suppression de la librairie ActiveAndroid. ', 'text', 14, 78),
(157, '../../images/597c5638598e9.png', 'image', 15, 78),
(158, 'AprÃ¨s quelque bug de rÃ©glÃ©s, lâ€™application fonctionne de plus belle sur les nouvelles tablettes. ', 'text', 16, 78),
(159, 'Pour clore ces deux premiÃ¨res semaines de stages, il faut dire que lâ€™Ã©quipe informatique avec laquelle je travaille est bien sympa, et la bonne ambiance rÃ¨gne grÃ¢ce Ã  des Ã©changes entre nous souvent cours mais Ã©nergique ! ', 'text', 17, 78);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`Id_Article`);

--
-- Index pour la table `contenu_article`
--
ALTER TABLE `contenu_article`
  ADD PRIMARY KEY (`Id_Contenu_Article`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `Id_Article` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT pour la table `contenu_article`
--
ALTER TABLE `contenu_article`
  MODIFY `Id_Contenu_Article` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
