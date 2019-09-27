-- MySQL dump 10.17  Distrib 10.3.17-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: tia_asa
-- ------------------------------------------------------
-- Server version	10.3.17-MariaDB-0ubuntu0.19.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `CENTRE_D_INTERET`
--

DROP TABLE IF EXISTS `CENTRE_D_INTERET`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CENTRE_D_INTERET` (
  `id_centre_interet` int(11) NOT NULL AUTO_INCREMENT,
  `description_interet` text DEFAULT NULL,
  `centre_d_interet` varchar(255) NOT NULL,
  `id` varchar(128) NOT NULL,
  PRIMARY KEY (`id_centre_interet`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CENTRE_D_INTERET`
--

LOCK TABLES `CENTRE_D_INTERET` WRITE;
/*!40000 ALTER TABLE `CENTRE_D_INTERET` DISABLE KEYS */;
INSERT INTO `CENTRE_D_INTERET` VALUES (3,'sq','s','d17c27b48212bc7723071659b65b1f325d72088e32b46ca8c1578b5adba97ff74818148eb365070150a1e346779e40c5ebf60decfdeee289b812263a9fbfdeae');
/*!40000 ALTER TABLE `CENTRE_D_INTERET` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CHAT`
--

DROP TABLE IF EXISTS `CHAT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CHAT` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `id_expediteur` int(128) NOT NULL,
  `id_destinataire` int(128) NOT NULL,
  `mes` text NOT NULL,
  `vu` tinyint(1) NOT NULL DEFAULT 0,
  `cliques_messages` tinyint(1) NOT NULL DEFAULT 0,
  `date_message` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_message`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CHAT`
--

LOCK TABLES `CHAT` WRITE;
/*!40000 ALTER TABLE `CHAT` DISABLE KEYS */;
/*!40000 ALTER TABLE `CHAT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `COMPETENCE`
--

DROP TABLE IF EXISTS `COMPETENCE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `COMPETENCE` (
  `id_competence` int(11) NOT NULL AUTO_INCREMENT,
  `competence` varchar(255) NOT NULL,
  `explication` text DEFAULT NULL,
  `niveau_competence` varchar(100) DEFAULT NULL,
  `id` varchar(128) NOT NULL,
  PRIMARY KEY (`id_competence`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `COMPETENCE`
--

LOCK TABLES `COMPETENCE` WRITE;
/*!40000 ALTER TABLE `COMPETENCE` DISABLE KEYS */;
INSERT INTO `COMPETENCE` VALUES (2,'sqd','sqdsq','qsd','d17c27b48212bc7723071659b65b1f325d72088e32b46ca8c1578b5adba97ff74818148eb365070150a1e346779e40c5ebf60decfdeee289b812263a9fbfdeae');
/*!40000 ALTER TABLE `COMPETENCE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `COMPETENCE_RECOMMANDE`
--

DROP TABLE IF EXISTS `COMPETENCE_RECOMMANDE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `COMPETENCE_RECOMMANDE` (
  `description` varchar(255) NOT NULL,
  `id_recommande` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `id_competence` int(11) DEFAULT NULL,
  KEY `id` (`id`),
  KEY `id_competence` (`id_competence`),
  CONSTRAINT `COMPETENCE_RECOMMANDE_ibfk_1` FOREIGN KEY (`id`) REFERENCES `PERSONNE` (`id`),
  CONSTRAINT `COMPETENCE_RECOMMANDE_ibfk_2` FOREIGN KEY (`id_competence`) REFERENCES `COMPETENCE` (`id_competence`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `COMPETENCE_RECOMMANDE`
--

LOCK TABLES `COMPETENCE_RECOMMANDE` WRITE;
/*!40000 ALTER TABLE `COMPETENCE_RECOMMANDE` DISABLE KEYS */;
/*!40000 ALTER TABLE `COMPETENCE_RECOMMANDE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `EXPERIENCE`
--

DROP TABLE IF EXISTS `EXPERIENCE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `EXPERIENCE` (
  `id_experience` int(11) NOT NULL AUTO_INCREMENT,
  `date_experience` varchar(255) DEFAULT NULL,
  `activite` text DEFAULT NULL,
  `entreprise_lieu` varchar(255) DEFAULT NULL,
  `poste_experience` varchar(255) DEFAULT NULL,
  `id` varchar(128) NOT NULL,
  PRIMARY KEY (`id_experience`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EXPERIENCE`
--

LOCK TABLES `EXPERIENCE` WRITE;
/*!40000 ALTER TABLE `EXPERIENCE` DISABLE KEYS */;
INSERT INTO `EXPERIENCE` VALUES (2,'sqd','sqd','sd','qsd','d17c27b48212bc7723071659b65b1f325d72088e32b46ca8c1578b5adba97ff74818148eb365070150a1e346779e40c5ebf60decfdeee289b812263a9fbfdeae');
/*!40000 ALTER TABLE `EXPERIENCE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FORMATION`
--

DROP TABLE IF EXISTS `FORMATION`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FORMATION` (
  `id_formation` int(11) NOT NULL AUTO_INCREMENT,
  `debut_mois_formation` varchar(50) NOT NULL,
  `debut_annee_formation` varchar(50) NOT NULL,
  `filiere` varchar(255) DEFAULT NULL,
  `obtention` varchar(255) NOT NULL,
  `id` varchar(128) NOT NULL,
  `ecole` varchar(255) NOT NULL,
  `fin_mois_formation` varchar(255) DEFAULT NULL,
  `fin_annee_formation` varchar(50) DEFAULT NULL,
  `niveau` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_formation`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FORMATION`
--

LOCK TABLES `FORMATION` WRITE;
/*!40000 ALTER TABLE `FORMATION` DISABLE KEYS */;
INSERT INTO `FORMATION` VALUES (7,'Aôut','1976','&lt;wx','x&lt;','d17c27b48212bc7723071659b65b1f325d72088e32b46ca8c1578b5adba97ff74818148eb365070150a1e346779e40c5ebf60decfdeee289b812263a9fbfdeae','w&lt;w&lt;x','Aôut','2016','w&lt;x');
/*!40000 ALTER TABLE `FORMATION` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `LANGUE`
--

DROP TABLE IF EXISTS `LANGUE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `LANGUE` (
  `langue` varchar(100) NOT NULL,
  `niveau_langue` varchar(100) NOT NULL,
  `id` int(11) DEFAULT NULL,
  KEY `id` (`id`),
  CONSTRAINT `LANGUE_ibfk_1` FOREIGN KEY (`id`) REFERENCES `PERSONNE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `LANGUE`
--

LOCK TABLES `LANGUE` WRITE;
/*!40000 ALTER TABLE `LANGUE` DISABLE KEYS */;
/*!40000 ALTER TABLE `LANGUE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MERITE`
--

DROP TABLE IF EXISTS `MERITE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MERITE` (
  `merite` varchar(255) NOT NULL,
  `description _merite` varchar(255) NOT NULL,
  `date_merite` date NOT NULL,
  `id` int(11) DEFAULT NULL,
  KEY `id` (`id`),
  CONSTRAINT `MERITE_ibfk_1` FOREIGN KEY (`id`) REFERENCES `PERSONNE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MERITE`
--

LOCK TABLES `MERITE` WRITE;
/*!40000 ALTER TABLE `MERITE` DISABLE KEYS */;
/*!40000 ALTER TABLE `MERITE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PAGE_PAGE`
--

DROP TABLE IF EXISTS `PAGE_PAGE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PAGE_PAGE` (
  `nom_page` varchar(200) NOT NULL,
  `id_page` int(11) NOT NULL AUTO_INCREMENT,
  `token_id_page` varchar(128) DEFAULT NULL,
  `id` varchar(128) NOT NULL,
  `description_page` text DEFAULT NULL,
  `telephone` varchar(30) DEFAULT NULL,
  `mail_page` varchar(50) DEFAULT NULL,
  `adresse` varchar(200) DEFAULT NULL,
  `pdp_page` varchar(200) DEFAULT NULL,
  `pdc_page` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  KEY `id` (`id_page`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PAGE_PAGE`
--

LOCK TABLES `PAGE_PAGE` WRITE;
/*!40000 ALTER TABLE `PAGE_PAGE` DISABLE KEYS */;
/*!40000 ALTER TABLE `PAGE_PAGE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PAGE_PUBLICATION`
--

DROP TABLE IF EXISTS `PAGE_PUBLICATION`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PAGE_PUBLICATION` (
  `id_page_publication` int(11) NOT NULL AUTO_INCREMENT,
  `id_token_page` varchar(128) NOT NULL,
  `date_publication` text DEFAULT current_timestamp(),
  `experience` text DEFAULT NULL,
  `formation` text DEFAULT NULL,
  `competence` text DEFAULT NULL,
  `personnalite` text DEFAULT NULL,
  `langue` varchar(255) DEFAULT NULL,
  `lieu` varchar(255) DEFAULT NULL,
  `date_limite` varchar(50) DEFAULT NULL,
  `valable` tinyint(1) NOT NULL DEFAULT 1,
  `nom_image` varchar(255) DEFAULT NULL,
  `mission` text DEFAULT NULL,
  `texte` text DEFAULT NULL,
  PRIMARY KEY (`id_page_publication`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PAGE_PUBLICATION`
--

LOCK TABLES `PAGE_PUBLICATION` WRITE;
/*!40000 ALTER TABLE `PAGE_PUBLICATION` DISABLE KEYS */;
/*!40000 ALTER TABLE `PAGE_PUBLICATION` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PERSONNE`
--

DROP TABLE IF EXISTS `PERSONNE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PERSONNE` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token_id` varchar(128) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `numero` varchar(14) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `date_de_naissance` date DEFAULT NULL,
  `sexe` varchar(10) DEFAULT NULL,
  `titre` varchar(100) DEFAULT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `biographie` text DEFAULT NULL,
  `photo_de_profil` varchar(255) DEFAULT NULL,
  `photo_de_couverture` varchar(255) DEFAULT NULL,
  `search` tinyint(1) NOT NULL DEFAULT 0,
  `poste` varchar(255) DEFAULT NULL,
  `entreprise` varchar(255) DEFAULT NULL,
  `confirmation_mail` tinyint(1) NOT NULL DEFAULT 0,
  `code` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PERSONNE`
--

LOCK TABLES `PERSONNE` WRITE;
/*!40000 ALTER TABLE `PERSONNE` DISABLE KEYS */;
INSERT INTO `PERSONNE` VALUES (42,'b52e5d67f5ed9b4244a2fc081d33474fd0bda1d19709e7b9c7c87833d8aeac9d6afa7422a39bf01e34b0db3981b7d2eed4228dbc387186ff08f6f57c243e3c76','MIHAINGOHERILANTO.Manambintsoa','Manambintsoa','MIHAINGOHERILANTO','ntsoa.s118@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'f3603bfe7866bb7fa99c3d778c08b04db990ddc505f1874c27e4a077237dfaf90b0dbaa90cd9439618a44bd1468d83e61ff638c65b978cc0888f73f18646c95b',NULL,NULL,NULL,0,NULL,NULL,1,NULL);
/*!40000 ALTER TABLE `PERSONNE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `POSTE`
--

DROP TABLE IF EXISTS `POSTE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `POSTE` (
  `id_poste` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `entreprise` varchar(255) NOT NULL,
  `poste_actuel` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_poste`),
  KEY `id` (`id`),
  CONSTRAINT `POSTE_ibfk_1` FOREIGN KEY (`id`) REFERENCES `PERSONNE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `POSTE`
--

LOCK TABLES `POSTE` WRITE;
/*!40000 ALTER TABLE `POSTE` DISABLE KEYS */;
/*!40000 ALTER TABLE `POSTE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PUBLICATION`
--

DROP TABLE IF EXISTS `PUBLICATION`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PUBLICATION` (
  `id_publication` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(128) NOT NULL,
  `date_publication` datetime DEFAULT NULL,
  `texte` text DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `formation` varchar(255) DEFAULT NULL,
  `competence` varchar(255) DEFAULT NULL,
  `personnalite` varchar(255) DEFAULT NULL,
  `langue` varchar(255) DEFAULT NULL,
  `lieu` varchar(255) DEFAULT NULL,
  `date_limite` varchar(255) DEFAULT NULL,
  `valable` tinyint(1) DEFAULT 1,
  `nom_image` varchar(255) DEFAULT NULL,
  `mission` text DEFAULT NULL,
  PRIMARY KEY (`id_publication`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PUBLICATION`
--

LOCK TABLES `PUBLICATION` WRITE;
/*!40000 ALTER TABLE `PUBLICATION` DISABLE KEYS */;
/*!40000 ALTER TABLE `PUBLICATION` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-27 20:39:28
