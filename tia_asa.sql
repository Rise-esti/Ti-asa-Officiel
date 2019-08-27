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
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_centre_interet`),
  KEY `id` (`id`),
  CONSTRAINT `CENTRE_D_INTERET_ibfk_1` FOREIGN KEY (`id`) REFERENCES `PERSONNE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CENTRE_D_INTERET`
--

LOCK TABLES `CENTRE_D_INTERET` WRITE;
/*!40000 ALTER TABLE `CENTRE_D_INTERET` DISABLE KEYS */;
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
  `id_expediteur` int(11) NOT NULL,
  `id_destinataire` int(11) NOT NULL,
  `mes` text NOT NULL,
  `vu` tinyint(1) NOT NULL DEFAULT 0,
  `cliques_messages` tinyint(1) NOT NULL DEFAULT 0,
  `date_message` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_message`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
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
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_competence`),
  KEY `id` (`id`),
  CONSTRAINT `COMPETENCE_ibfk_1` FOREIGN KEY (`id`) REFERENCES `PERSONNE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `COMPETENCE`
--

LOCK TABLES `COMPETENCE` WRITE;
/*!40000 ALTER TABLE `COMPETENCE` DISABLE KEYS */;
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
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_experience`),
  KEY `id` (`id`),
  CONSTRAINT `EXPERIENCE_ibfk_1` FOREIGN KEY (`id`) REFERENCES `PERSONNE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `EXPERIENCE`
--

LOCK TABLES `EXPERIENCE` WRITE;
/*!40000 ALTER TABLE `EXPERIENCE` DISABLE KEYS */;
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
  `id` int(11) NOT NULL,
  `ecole` varchar(255) NOT NULL,
  `fin_mois_formation` varchar(255) DEFAULT NULL,
  `fin_annee_formation` varchar(50) DEFAULT NULL,
  `niveau` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_formation`),
  KEY `id` (`id`),
  CONSTRAINT `FORMATION_ibfk_1` FOREIGN KEY (`id`) REFERENCES `PERSONNE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FORMATION`
--

LOCK TABLES `FORMATION` WRITE;
/*!40000 ALTER TABLE `FORMATION` DISABLE KEYS */;
INSERT INTO `FORMATION` VALUES (3,'Janvier','1970','Coucher','Doctorat',2,'Savoir dormir','Décembre','2019','Meilleur');
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
  `id` int(11) NOT NULL,
  `description_page` text DEFAULT NULL,
  `telephone` varchar(30) DEFAULT NULL,
  `mail_page` varchar(50) DEFAULT NULL,
  `adresse` varchar(200) DEFAULT NULL,
  `pdp_page` varchar(200) DEFAULT NULL,
  `pdc_page` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  KEY `id` (`id_page`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PAGE_PAGE`
--

LOCK TABLES `PAGE_PAGE` WRITE;
/*!40000 ALTER TABLE `PAGE_PAGE` DISABLE KEYS */;
INSERT INTO `PAGE_PAGE` VALUES ('test modifier',3,23,'test page aaaaaaaaaaaaaaaaaaaaa','0355555','test@gmail.com','Ambatoroaka','20.jpg','37.jpg','Antananarivo'),('Premier page',5,23,'AAAAMAMAMAMAMAM','55666','p@gmail.com','Analakely',NULL,NULL,'Toamasina'),('teste meme mail',6,23,'qsdqs','66','test@gmail.com','sssss','18.jpg','16.jpg','Toamasina'),('test',7,23,'qsssssssssssssssss','6565','qsqs','qsqs',NULL,NULL,'Toliara');
/*!40000 ALTER TABLE `PAGE_PAGE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PERSONNE`
--

DROP TABLE IF EXISTS `PERSONNE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PERSONNE` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PERSONNE`
--

LOCK TABLES `PERSONNE` WRITE;
/*!40000 ALTER TABLE `PERSONNE` DISABLE KEYS */;
INSERT INTO `PERSONNE` VALUES (2,'rkoto','Bema','ROKOTO','bema@gmail.com','+261347972004','Analakely','Toliara','1974-06-03','h',NULL,'$2y$10$2SRABfwb1Ih5DOGsUOpfM.OXRn5S8qKdaDg7wBl8E/q5tBLk8YVLO','ROKOTO Bema, né à Andasibe le 24 février 1955, est un entrepreneur et inventeur américain, souvent qualifié de visionnaire1, et une figure majeure de l\'électronique grand public, notamment pionnier de l\'avènement de l\'ordinateur personnel, du baladeur numérique, du smartphone et de la tablette tactile.','Capture_d’écran_de_2019-08-10_22-11-11.png',NULL,0,'Directeur','Apple'),(15,'MIHAINGOHERILANTO.','Manambintsoa','MIHAINGOHERILANTO','ntsoa.s118@gmail.com','+261346664788','Ambatoroaka','Antananarivo','1998-12-21','h',NULL,'$2y$10$GOYj8L.hDRVGibsv0V28HeyPo6cV5IP4gkWv.8FO96PpPnfKBbDte','Issu du programme d\'étude SESAME, j\'étudie actuellement à l’École Supérieure des Technologies de l\'Information . Soif d\'apprendre et aime également partager les connaissances acquises.','DSC_0010.JPG','timeline-1.jpg',0,'Etudiant','ESTI Antanimena'),(16,'gaetan1903',' Jonathan','Gaetan','gaetan.jonathan.bakary@esti.mg',NULL,'Ambatoroka','Antananarivo','1999-04-01','h',NULL,'$2y$10$Ssl90YqaMPjml2JyYu4FWOqOxWbu.pSpJrjBo6yEl.UQO/AJmJh.y','Je suis passioné par mon travail,  et je suis mon intuition','j50983427_950723391791103_2749285381659688960_n.jpg',NULL,0,'Ressource Humaine','SMARTONE'),(17,'RABEKOTO.','','RABEKOTO','koto@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$zQuerguLhcYsHBkqSM.SFOvsOhU04JdlKE.9Io4fNDaJAtkb7rsJm',NULL,NULL,NULL,0,NULL,NULL),(18,'Soa.Rasoa','Rasoa','Soa','soa@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$7/ZpAKXdtk9rm3lK46ZSieKKLmpj5Bjc7fZ7yc/ThU0MQ6JnIEYse',NULL,'38.jpg',NULL,0,NULL,NULL),(19,'Landris.Daniel','Daniel','Landris','landry.apsa@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$Ssl90YqaMPjml2JyYu4FWOqOxWbu.pSpJrjBo6yEl.UQO/AJmJh.y',NULL,NULL,NULL,0,NULL,NULL),(20,'Landris.D','D','Landris','landry.aps@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$gAa1Ci1kwfy3q5vQlNXq5uEpGgANldqcPkoMen.esy8d7F84QeHA2',NULL,NULL,NULL,0,NULL,NULL),(21,'Landris.LD','LD','Landris','l@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$0Ei2XMV.3S.0zHYbEDHkWepPw0jte2AkH3wwpXszjjojJxjrCha/W',NULL,NULL,NULL,0,NULL,NULL),(22,'Jenny.Chen','Chen','Jenny','jenn@esti.mg',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$wKpwGsgY3kx7XlL5LdTaJuqIW/JLb05dptYFD4optg71GVsLEWD2e',NULL,NULL,NULL,0,NULL,NULL),(23,'MM.Ntsoa','Ntsoa','MM','nn@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$oi0ZH3zJF/pT8aa8Po..c.5lpQwjXfl0/QApqW3SUkLSK8q0/fYvC',NULL,'DSC_0269.JPG','DSC_0303.JPG',0,NULL,NULL);
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
  `id` int(11) NOT NULL,
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
  KEY `id` (`id`),
  CONSTRAINT `PUBLICATION_ibfk_1` FOREIGN KEY (`id`) REFERENCES `PERSONNE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PUBLICATION`
--

LOCK TABLES `PUBLICATION` WRITE;
/*!40000 ALTER TABLE `PUBLICATION` DISABLE KEYS */;
INSERT INTO `PUBLICATION` VALUES (13,15,'2019-08-17 02:31:27','Pour notre compte et celui des clients. Nous recherchons un Administrateur junior pour structurer la DSI.','3 ans','Bacc +3 en informatique','Administration Linux et Windows; Accès à distance avec SSH; Sensibilité à la sécurité et aux démarches d’urbanisation','Bon relationnel; Autonome; Travail d’équipe et esprit de partage','Français et Anglais technique','MAKEY SERVICES Antananarivo','7 Novembre',1,'','Jeune diplômé d’une école prestigieuse ou technicien confirmé souhaitant s’orienter vers l’administration. Vous assurez le maintien en condition opérationnelle des systèmes et du réseau. Vous supervisez la gestion du parc de postes clients et effectuez la maintenance préventive. Vous mettez à disposition du service support des outils et procédures, et ainsi, optimisez leur travail. Vous assurez le support'),(14,15,'2019-08-17 02:57:42','Offre d\'emploi pour un Développeur Informatique','','','','','','',' ',1,'Annonce_de_recherche.png',''),(15,16,'2019-08-17 08:47:05','SmartOne, pour renforcer son equipe recherce un DATA SCIENTIST','2 ans dans la programmation; 3 projets reussi concernant les Machine Learning','Ayant Bacc +  5 en Informatique','Maitrise de langage Python, JAVA; Connaissance du Langage R sera un atout; Connaisse des IA que Machine Learning ou Deep Learning; Fort capacité en probleme Mathematique; Connaissance des concept de modelisation','Rigoureux;Dynamque;Debrouillard','Maitrise du Français ecrit et Orale;Maitrise de l\'anglais ecrit','Ankorondrano','12 Juin',1,'Smartone-transparent.png','Assure la choérence de chaque donnée; Traiter les modeles et resoud mathematiquement pour performaniser l\'IA; Mettre en valuer les datasets les plus repetitives;Predire les diverentes situaton de chaque entreprise en niveau esperence de vie.');
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

-- Dump completed on 2019-08-27 10:50:53
