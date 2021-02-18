-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 18, 2021 at 02:56 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `Acheteur`
--

CREATE TABLE `Acheteur` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Adresse1` varchar(255) NOT NULL,
  `Adresse2` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `CodePostal` int(11) NOT NULL,
  `Pays` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `TypeCarte` varchar(255) NOT NULL,
  `Numero` int(11) NOT NULL,
  `DateCarte` date NOT NULL,
  `Crypto` int(11) NOT NULL,
  `Login` varchar(255) NOT NULL,
  `Mdp` varchar(255) NOT NULL,
  `NumeroTel` int(11) NOT NULL,
  `Photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Acheteur`
--

INSERT INTO `Acheteur` (`ID`, `Nom`, `Prenom`, `Adresse1`, `Adresse2`, `Ville`, `CodePostal`, `Pays`, `Email`, `TypeCarte`, `Numero`, `DateCarte`, `Crypto`, `Login`, `Mdp`, `NumeroTel`, `Photo`) VALUES
(1, 'De Tomasi', 'Stephane', '42', 'Allée des Foins', 'Massy-Palaiseau', 93000, 'France', 'toto@edu.ece.fr', 'MasterCard', 2147483647, '1999-09-20', 113, 'Kirikou', 'Karaba', 680800308, 'clement.jpeg'),
(2, 'Brunel', 'Therese', '6 Impasse des Genets', '', 'Montbrison', 42300, 'France', 'therese@edu.ece.fr', 'MasterCard', 2147483647, '2000-10-20', 143, 'Cendrillon', 'Cinderella', 0, ''),
(3, 'Bruel', 'Patrick', '6 rue Mirabeau', '', 'Paris', 75016, 'France', 'Patou@edu.ece.fr', 'MasterCard', 2147483647, '2020-01-08', 977, 'Patrick', 'Chanson', 0, ''),
(6, 'dupond', 'gerard', '67', 'rue du Village', 'Paris', 78000, 'France', 'gege@gmail.com', 'visa', 2147483647, '0000-00-00', 234, 'gégér', 'Kohlanta', 0, ''),
(7, 'Sabot', 'Alice', '75', 'rue des moulins', 'Paris', 75019, 'France', 'Alice.Sabot@gmail.com', 'mastercard', 2147483647, '0000-00-00', 435, 'Licorne', 'multicolore', 674792434, ''),
(8, 'Rogiers', 'Céline', '8', 'Boulevard Pasteur', 'Gif sur Yvette', 91190, 'France', 'Cece@gmail.com', 'mastercard', 2147483647, '1998-01-20', 234, 'Celoune', 'jag', 674797414, ''),
(9, 'Stadler', 'Emma', '69', 'rue de la cote du change', 'montfermeil', 93240, 'France', 'emma@stadler.com', 'visa', 2147483647, '1998-01-08', 654, 'mama', 'nana', 675795443, ''),
(10, 'Dubreuil', 'Pauline', '43', 'rue de damiette', 'Gif', 91190, 'France', 'paupau@gmail.com', 'mastercard', 2147483647, '1995-01-08', 324, 'Paulin', 'Paul', 675787424, ''),
(11, 'Dubreuil', 'Pauline', '43', 'rue de damiette', 'Gif', 91190, 'France', 'paupau@gmail.com', 'mastercard', 2147483647, '1995-01-08', 324, 'soso', 'paul', 675787424, ''),
(12, 'Laville', 'Jade', 'rue', 'de Croisic', 'Paris', 75000, 'France', 'jadou@ece.fr', 'visa', 2147483647, '1995-01-03', 234, 'Jadoulafee', 'fee', 654879213, ''),
(13, 'Hervé', 'Alex', '41', 'Allée de la gambauderie', 'Gif sur yvette', 91190, 'Fr', 'alex@gmail.com', 'mastercard', 1234543223, '1998-09-19', 123, 'Alexou', 'mathilde', 674797414, ''),
(14, 'Lurati', 'Clement', '31', 'rue du parvis', 'Paris', 75015, 'France', 'clem@gmail.com', 'mastercard', 2147483647, '1982-09-18', 234, 'clem', 'veine', 675797513, ''),
(15, 'Herve', 'Ghislaine', '41', 'allee de la gambauderie', 'Gif sur Yvette', 91190, 'France', 'gh@gmail.com', 'mastercard', 2147483647, '1998-01-08', 345, 'ghighi', 'maman', 674797415, 'image/upload/pp_ghighi_Acheteur.png'),
(16, 'Herve', 'Al', '41', 'allee de la gambauderie', 'gif', 91190, 'France', 'anne@gmail.com', 'mastercard', 1234, '1998-01-05', 234, 'sylvie', 'lisou', 674797414, 'image/upload/pp_sylvie_Acheteur.png');

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `ID` int(11) NOT NULL,
  `Login` varchar(255) NOT NULL,
  `Mdp` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`ID`, `Login`, `Mdp`, `Prenom`, `Photo`) VALUES
(1, 'Sucre', 'Sale', 'Sébastien', 'azur.jpg'),
(2, 'Lacoste', 'Croco', 'Nicolas', 'croco.png');

-- --------------------------------------------------------

--
-- Table structure for table `Article`
--

CREATE TABLE `Article` (
  `ID` int(11) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `IDType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Article`
--

INSERT INTO `Article` (`ID`, `Photo`, `IDType`) VALUES
(4, 'hungergames.jpeg', 1),
(5, 'hungergames.jpeg', 1),
(9, 'hautdehurlevent.jpg', 2),
(10, 'hautdehurlevent.jpg', 2),
(11, 'hautdehurlevent.jpg', 2),
(12, 'hautdehurlevent.jpg', 2),
(13, 'hautdehurlevent.jpg', 2),
(16, 'harrypotter.jpeg', 3),
(17, 'harrypotter.jpeg', 3),
(18, 'harrypotter.jpeg', 3),
(19, 'harrypotter.jpeg', 3),
(20, 'harrypotter.jpeg', 3),
(21, 'harrypotter.jpeg', 3),
(22, 'harrypotter.jpeg', 3),
(23, 'harrypotter.jpeg', 3),
(24, 'harrypotter.jpeg', 3),
(25, 'FranceGall.jpeg', 5),
(26, 'FranceGall.jpeg', 5),
(27, 'FranceGall.jpeg', 5),
(28, 'FranceGall.jpeg', 5),
(29, 'FranceGall.jpeg', 5),
(30, 'FranceGall.jpeg', 5),
(31, 'FranceGall.jpeg', 5),
(32, 'FranceGall.jpeg', 5),
(33, 'FranceGall.jpeg', 5),
(34, 'FranceGall.jpeg', 5),
(35, 'FranceGall.jpeg', 5),
(36, 'Gainsbourg.jpeg', 6),
(37, 'Gainsbourg.jpeg', 6),
(38, 'Gainsbourg.jpeg', 6),
(39, 'Gainsbourg.jpeg', 6),
(40, 'Gainsbourg.jpeg', 6),
(41, 'Gainsbourg.jpeg', 6),
(42, 'Gainsbourg.jpeg', 6),
(43, 'Gainsbourg.jpeg', 6),
(44, 'Gainsbourg.jpeg', 6),
(47, 'Johnny.jpeg', 7),
(48, 'Johnny.jpeg', 7),
(49, 'Johnny.jpeg', 7),
(50, 'Johnny.jpeg', 7),
(51, 'Johnny.jpeg', 7),
(52, 'Johnny.jpeg', 7),
(53, 'Johnny.jpeg', 7),
(54, 'Johnny.jpeg', 7),
(55, 'Johnny.jpeg', 7),
(56, 'Johnny.jpeg', 7),
(57, 'Johnny.jpeg', 7),
(58, 'Angele.jpeg', 8),
(59, 'Angele.jpeg', 8),
(60, 'Angele.jpeg', 8),
(61, 'Angele.jpeg', 8),
(62, 'Angele.jpeg', 8),
(63, 'Angele.jpeg', 8),
(64, 'Angele.jpeg', 8),
(65, 'Angele.jpeg', 8),
(66, 'Angele.jpeg', 8),
(67, 'Stromae.jpeg', 9),
(68, 'Stromae.jpeg', 9),
(69, 'Stromae.jpeg', 9),
(70, 'Stromae.jpeg', 9),
(71, 'Stromae.jpeg', 9),
(72, 'Stromae.jpeg', 9),
(73, 'Stromae.jpeg', 9),
(74, 'Stromae.jpeg', 9),
(75, 'Stromae.jpeg', 9),
(76, 'Orelsan.jpeg', 10),
(77, 'Orelsan.jpeg', 10),
(78, 'Orelsan.jpeg', 10),
(79, 'Orelsan.jpeg', 10),
(80, 'Orelsan.jpeg', 10),
(81, 'Orelsan.jpeg', 10),
(82, 'Orelsan.jpeg', 10),
(83, 'Orelsan.jpeg', 10),
(84, 'Orelsan.jpeg', 10),
(85, 'harrypotter.jpeg', 3),
(86, 'harrypotter.jpeg', 3),
(87, 'harrypotter.jpeg', 3),
(88, 'harrypotter.jpeg', 3),
(89, 'orgueiletprejuges.jpeg', 4),
(90, 'orgueiletprejuges.jpeg', 4),
(91, 'orgueiletprejuges.jpeg', 4),
(92, 'orgueiletprejuges.jpeg', 4),
(93, 'orgueiletprejuges.jpeg', 4),
(94, 'orgueiletprejuges.jpeg', 4),
(95, 'orgueiletprejuges.jpeg', 4),
(96, 'orgueiletprejuges.jpeg', 4),
(97, 'orgueiletprejuges.jpeg', 4),
(98, 'orgueiletprejuges.jpeg', 4),
(99, 'orgueiletprejuges.jpeg', 4),
(100, 'orgueiletprejuges.jpeg', 4),
(102, 'PingPong.jpeg', 11),
(103, 'PingPong.jpeg', 11),
(104, 'PingPong.jpeg', 11),
(105, 'PingPong.jpeg', 11),
(106, 'PingPong.jpeg', 11),
(107, 'PingPong.jpeg', 11),
(108, 'PingPong.jpeg', 11),
(109, 'PingPong.jpeg', 11),
(110, 'Piscine.jpeg', 12),
(111, 'Piscine.jpeg', 12),
(112, 'Piscine.jpeg', 12),
(113, 'Piscine.jpeg', 12),
(114, 'Piscine.jpeg', 12),
(115, 'Piscine.jpeg', 12),
(116, 'Piscine.jpeg', 12),
(117, 'Piscine.jpeg', 12),
(118, 'Piscine.jpeg', 12),
(119, 'Kimono.jpeg', 13),
(120, 'Kimono.jpeg', 13),
(121, 'Kimono.jpeg', 13),
(122, 'Kimono.jpeg', 13),
(123, 'Kimono.jpeg', 13),
(124, 'Kimono.jpeg', 13),
(125, 'Kimono.jpeg', 13),
(126, 'Kimono.jpeg', 13),
(127, 'Kimono.jpeg', 13),
(130, 'Palmes.jpeg', 14),
(131, 'Palmes.jpeg', 14),
(132, 'Palmes.jpeg', 14),
(134, 'Palmes.jpeg', 14),
(135, 'Palmes.jpeg', 14),
(136, 'Palmes.jpeg', 14),
(137, 'Palmes.jpeg', 14);

-- --------------------------------------------------------

--
-- Table structure for table `ArticleVetement`
--

CREATE TABLE `ArticleVetement` (
  `ID` int(11) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `IDType` int(11) NOT NULL,
  `Modele` varchar(255) NOT NULL,
  `Taille` int(11) NOT NULL,
  `Couleur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ArticleVetement`
--

INSERT INTO `ArticleVetement` (`ID`, `Photo`, `IDType`, `Modele`, `Taille`, `Couleur`) VALUES
(1, 'stanverte.jpeg', 15, 'Homme', 42, 'Verte'),
(2, 'stanverte.jpeg', 15, 'Femme', 37, 'Verte'),
(3, 'stanverte.jpeg', 15, 'Femme', 38, 'Verte'),
(5, 'stanverte.jpeg', 15, 'Homme', 44, 'Verte'),
(6, 'stanrose.jpeg', 15, 'Homme', 45, 'Rose'),
(7, 'stanrose.jpeg', 15, 'Femme', 36, 'Rose'),
(8, 'stanrose.jpeg', 15, 'Femme', 37, 'Rose'),
(9, 'stanrose.jpeg', 15, 'Femme', 36, 'Rose'),
(11, 'stangrise.jpeg', 15, 'Homme', 46, 'Grise'),
(12, 'stangrise.jpeg', 15, 'Homme', 46, 'Grise'),
(13, 'sandroorange.jpeg', 16, 'Femme', 36, 'Orange'),
(14, 'sandroorange.jpeg', 16, 'Homme', 42, 'Orange'),
(15, 'sandroorange.jpeg', 16, 'Femme', 38, 'Orange'),
(16, 'sandroorange.jpeg', 16, 'Homme', 44, 'Orange'),
(17, 'sandronoire.jpeg', 16, 'Homme', 44, 'Noire'),
(18, 'sandronoire.jpeg', 16, 'Femme', 36, 'Noire'),
(19, 'sandronoire.jpeg', 16, 'Homme', 44, 'Noire'),
(20, 'sacrouge.jpeg', 17, 'Femme', 0, 'Rouge'),
(21, 'sacrouge.jpeg', 17, 'Femme', 0, 'Rouge'),
(22, 'sacrouge.jpeg', 17, 'Femme', 0, 'Rouge'),
(23, 'sacjaune.jpeg', 17, 'Femme', 0, 'Jaune'),
(24, 'sacjaune.jpeg', 17, 'Femme', 0, 'Jaune'),
(25, 'sacjaune.jpeg', 17, 'Femme', 0, 'Jaune'),
(26, 'sacjaune.jpeg', 17, 'Femme', 0, 'Jaune'),
(27, 'collierbleu.jpeg', 18, 'Femme', 0, 'Bleu'),
(28, 'collierbleu.jpeg', 18, 'Femme', 0, 'Bleu'),
(29, 'collierbleu.jpeg', 18, 'Femme', 0, 'Bleu'),
(30, 'collierbleu.jpeg', 18, 'Femme', 0, 'Bleu'),
(31, 'collierbleu.jpeg', 18, 'Femme', 0, 'Bleu'),
(32, 'collierrose.jpeg', 18, 'Femme', 0, 'Rose'),
(33, 'collierrose.jpeg', 18, 'Femme', 0, 'Rose'),
(34, 'collierrose.jpeg', 18, 'Femme', 0, 'Rose'),
(35, 'echarpenoire.jpeg', 19, 'Femme', 0, 'Noir'),
(36, 'echarpenoire.jpeg', 19, 'Homme', 0, 'Noir'),
(37, 'echarpeecoose.jpeg', 19, 'Femme', 0, 'Ecosse'),
(38, 'echarpeecoose.jpeg', 19, 'Homme', 0, 'Ecosse'),
(39, 'echarpejaune.jpeg', 19, 'Femme', 0, 'Jaune'),
(40, 'echarpejaune.jpeg', 19, 'Femme', 0, 'Jaune'),
(41, 'echarpejaune.jpeg', 19, 'Homme', 0, 'Ecosse');

-- --------------------------------------------------------

--
-- Table structure for table `Categorie`
--

CREATE TABLE `Categorie` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `IDBestSeller` int(11) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `Photo2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Categorie`
--

INSERT INTO `Categorie` (`ID`, `Nom`, `IDBestSeller`, `Photo`, `Photo2`) VALUES
(1, 'Livre', 4, 'livre1.jpg', 'livre2.jpg'),
(2, 'Musique', 9, 'musique1.jpg', 'musique2.jpg'),
(3, 'Sports&Loisirs', 14, 'sport1.jpg', 'sport2.jpg'),
(4, 'Vetements', 19, 'vetements1.jpg', 'vetements2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `idClasse` int(11) NOT NULL,
  `idPersonne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Livraison`
--

CREATE TABLE `Livraison` (
  `ID` int(11) NOT NULL,
  `IDAcheteur` int(11) NOT NULL,
  `Adresse1` varchar(255) NOT NULL,
  `Adresse2` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `CodePostal` int(11) NOT NULL,
  `Pays` varchar(255) NOT NULL,
  `Num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Niveau`
--

CREATE TABLE `Niveau` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Paiement`
--

CREATE TABLE `Paiement` (
  `ID` int(11) NOT NULL,
  `IDAcheteur` int(11) NOT NULL,
  `TypeCarte` varchar(255) NOT NULL,
  `Numero` int(11) NOT NULL,
  `DateCarte` date NOT NULL,
  `Crypto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Panier`
--

CREATE TABLE `Panier` (
  `ID` int(11) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `Prix` int(11) NOT NULL,
  `IDAcheteur` int(11) NOT NULL,
  `Quantité` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `PanierArticle`
--

CREATE TABLE `PanierArticle` (
  `IDPanier` int(11) NOT NULL,
  `IDArticle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Personne`
--

CREATE TABLE `Personne` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Type`
--

CREATE TABLE `Type` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Prix` int(11) NOT NULL,
  `QuantiteDispo` int(11) NOT NULL,
  `QuantiteVendue` int(11) NOT NULL,
  `IDVendeur` int(11) NOT NULL,
  `IDCategorie` int(11) NOT NULL,
  `Photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Type`
--

INSERT INTO `Type` (`ID`, `Nom`, `Description`, `Prix`, `QuantiteDispo`, `QuantiteVendue`, `IDVendeur`, `IDCategorie`, `Photo`) VALUES
(1, 'Hunger Games', 'Katniss Everdeen, une adolescente de 16 ans, vit dans une Amérique post-apocalyptique connue sous le', 20, 2, 4, 1, 1, 'hungergames.jpeg'),
(2, 'Haut de hurlevent', 'Le roman choque certains lecteurs de l’époque, notamment par le manque de respect pour les conventio', 25, 5, 3, 14, 1, 'hautdehurlevent.jpg'),
(3, 'Harry Potter', 'Harry mène une vie heureuse avec ses parents avant qu\'ils ne soient assassinés. La famille a un chat', 10, 11, 0, 2, 1, 'harrypotter.jpeg'),
(4, 'Orgueil et Prejuges ', 'Pride and Prejudice n\'est pas le titre initial ; le premier jet d\'août 1797 (Jane Austen a alors 21 ', 5, 12, 5, 3, 1, 'orgueiletprejuges.jpeg'),
(5, 'France Gall', 'Disque de France Gall', 5, 11, 0, 2, 2, 'FranceGall.jpeg'),
(6, 'Gainsbourg', 'Disque mémoire de Gainsbourg', 15, 9, 1, 3, 2, 'Gainsbourg.jpeg'),
(7, 'Johnny', 'Disque collector de Johnny', 20, 11, 2, 1, 2, 'Johnny.jpeg'),
(8, 'Angele', 'Nouvel album d\'Angele', 21, 9, 0, 4, 2, 'Angele.jpeg'),
(9, 'Stromae', 'Album de Stromae', 10, 9, 5, 2, 2, 'Stromae.jpeg'),
(10, 'Orelsan', 'Album d\'Orelsan', 14, 9, 0, 3, 2, 'Orelsan.jpeg'),
(11, 'PingPong', ' Balle de ping pong ', 13, 8, 1, 1, 3, 'PingPong.jpeg'),
(12, 'Piscine', ' Petite piscine gonflable ', 37, 9, 0, 5, 3, 'Piscine.jpeg'),
(13, 'Kimono', ' Super kimono de judo hypra confortable ', 30, 9, 1, 1, 3, 'Kimono.jpeg'),
(14, 'Palmes', ' Palmes pour piscine, codage en super vitesse !  ', 100, 7, 2, 5, 3, 'Palmes.jpeg'),
(15, 'Stan Smith', ' Stan Smith collection Adidas hyper tchatcheuses  ', 95, 12, 0, 14, 4, 'stanverte.jpeg'),
(16, 'Sweat à capuche', ' Sweat à capuche Sandro grande marque prix bradés !!!  ', 45, 7, 0, 5, 4, 'sandroorange.jpeg'),
(17, 'Sac The Kooples', ' LIMITED EDITION', 350, 7, 0, 4, 4, 'sacrouge.jpeg'),
(18, 'Collier Swarovski', ' Collier Swarovski vrais cristaux  ', 78, 8, 0, 14, 4, 'collierbleu.jpeg'),
(19, 'Echarpe cachemire', ' Echarpe douce couleur tendance', 19, 7, 1, 5, 4, 'echarpejaune.jpeg'),
(27, 'Mooglie', 'Livre de la jungle', 34, 2, 0, 14, 1, 'image/article/pa_LivresMooglie.jpeg'),
(29, 'Comptine_de_Croco', 'Uniquement pour les moins de 10 ans', 52, 2, 0, 2, 1, 'image/article/pa_LivresComptine_de_Croco.png');

-- --------------------------------------------------------

--
-- Table structure for table `Vendeur`
--

CREATE TABLE `Vendeur` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Login` varchar(255) NOT NULL,
  `Mdp` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `Fond` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Vendeur`
--

INSERT INTO `Vendeur` (`ID`, `Email`, `Login`, `Mdp`, `Nom`, `Photo`, `Fond`, `Prenom`) VALUES
(1, 'al_catraz@edu.ece.fr', 'al', 'lison', 'Herve', 'al.jpeg', 'fond_al.jpg', 'Anne-Lise'),
(2, 'sarah.kardache@edu.ece.fr', 'notchev', 'piscine', 'kardache', 'sarah.jpeg', 'fond_sarah.jpg', 'Sarah'),
(3, 'clement@edu.ece.fr', 'clem', 'lurati', 'piscine', 'clement.jpeg', 'fond_clement.jpeg', 'Clement'),
(4, 'vendeurduturfu@edu.ece.fr', 'turf', 'piscine', 'tuches', 'tuche.jpeg', 'fond_tuche.jpg', 'Arthur'),
(5, 'test@edu.ece.fr', 'test', 'test', 'piscine', 'test.jpeg', 'fond_test.jpeg', 'Testeur'),
(10, 'raph@stadler.php', 'Raf', 'azerty', 'Stadler', 'image/upload/pp_Raf_Vendeur.png', '', 'Raphael'),
(12, 'jb@edu.ece.fr', 'Jb', 'Thailande', 'Hervé', 'image/upload/pp_Jb_Vendeur.png', '', 'Jb'),
(13, 'cs@gmail.com', 'clacouille', 'Clara', 'Sapoval', 'image/upload/pp_clacouille_Vendeur.jpeg', '', 'Clara'),
(14, 'dm@gmail.com', 'domino', 'lucas', 'nika', 'image/upload/pp_domino_Vendeur.png', 'image/upload/pc_domino_Vendeur.png', 'domi'),
(18, 'coco@coco.com', 'coco', 'cocorico', 'Berta', 'image/vendeur/pv_coco.jpeg', 'image/vendeur/pf_coco.jpeg', 'Coline');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Acheteur`
--
ALTER TABLE `Acheteur`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Login` (`Login`);

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Login` (`Login`);

--
-- Indexes for table `Article`
--
ALTER TABLE `Article`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ArticleVetement`
--
ALTER TABLE `ArticleVetement`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Categorie`
--
ALTER TABLE `Categorie`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Livraison`
--
ALTER TABLE `Livraison`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Niveau`
--
ALTER TABLE `Niveau`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Paiement`
--
ALTER TABLE `Paiement`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Panier`
--
ALTER TABLE `Panier`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Personne`
--
ALTER TABLE `Personne`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Type`
--
ALTER TABLE `Type`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Vendeur`
--
ALTER TABLE `Vendeur`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Login` (`Login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Acheteur`
--
ALTER TABLE `Acheteur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Article`
--
ALTER TABLE `Article`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `ArticleVetement`
--
ALTER TABLE `ArticleVetement`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `Categorie`
--
ALTER TABLE `Categorie`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Livraison`
--
ALTER TABLE `Livraison`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Paiement`
--
ALTER TABLE `Paiement`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Panier`
--
ALTER TABLE `Panier`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Type`
--
ALTER TABLE `Type`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `Vendeur`
--
ALTER TABLE `Vendeur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
