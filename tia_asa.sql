-- MariaDB dump 10.17  Distrib 10.4.8-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: tia_asa
-- ------------------------------------------------------
-- Server version	10.4.8-MariaDB

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
-- Table structure for table `ACTIVATION_COMPTE`
--

DROP TABLE IF EXISTS `ACTIVATION_COMPTE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ACTIVATION_COMPTE` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actif` tinyint(1) NOT NULL,
  `lien` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_expiration` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ACTIVATION_COMPTE`
--

LOCK TABLES `ACTIVATION_COMPTE` WRITE;
/*!40000 ALTER TABLE `ACTIVATION_COMPTE` DISABLE KEYS */;
INSERT INTO `ACTIVATION_COMPTE` VALUES (49,'bfd696807e2ac16191cd7e03b289241d745ed8655d7743c0c8a7d6ab67398d272faeca5129f55795d8a053280e95815372b756fbcd93061245544a47219063a3',1,'ac6d6dce5a7481df355c24c1bf9a7da1','2019-09-13'),(50,'cacc96c7ece2bb8c4c395360c277247122d95d8f4c2a506d2ae760f80ba676b193268929eebded3a33cdd0d38e120078de7978b0191d25a1d29280803b6565a3',1,'ba93addf73f16da063ad9d0d88b4777e','2019-09-13'),(51,'a8318029cf4641e905265f81b592270ae71b0488158a1a11c836585470efa3530508e7cea07db040687d31d6ef84e629d28ef3f31288f023640c7f042aef572b',1,'872b73fe6d19c89c8aa89afdf73a1a04','2019-09-13'),(52,'79ddcd2983a181c460f464a5fe59203a49cac2600a1d5ee6590bc30dcd51623dab957dd0ed6cfc7856ca4e2bdc69c6e140e23ef4c7d0d2e826994dd7e5d6d56a',1,'6d6d9fc42ad80e0e5c9f6eb92275709f','2019-09-13'),(53,'92127e66367758812b9e84ac28dd1650830b796e34268114fd4f7949049b8d626ededa19175f561f5b5b4610acc8128b8cde55ae19270be739876f17a6b83e49',1,'e776fd32a1e3d570513222208a75d995','2019-09-13'),(54,'b0bd81ed738d78dff3a9de7c2d25a3e335ff34f0f9d9a8ca632fd17727ed9d26b096cd198143d9e3706150dd6e254b2875821199e229bad8fe9e22767b9b241d',1,'23a485e960364a343221b3ff59a6a7bb','2019-09-30'),(55,'7f3dab4e4c76d9c0f1b9a92c61e0e24a37838e71104d5f9eded0d7dc9b4ac2d4b0acaefa34eb21d49cf7c1f56a5e24399d2e4cfe19635e68acd896caad78777b',1,'88a2ed50e337ebdbd30465c0a6c0868d','2019-09-30');
/*!40000 ALTER TABLE `ACTIVATION_COMPTE` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FORMATION`
--

LOCK TABLES `FORMATION` WRITE;
/*!40000 ALTER TABLE `FORMATION` DISABLE KEYS */;
INSERT INTO `FORMATION` VALUES (7,'Aôut','1976','&lt;wx','x&lt;','d17c27b48212bc7723071659b65b1f325d72088e32b46ca8c1578b5adba97ff74818148eb365070150a1e346779e40c5ebf60decfdeee289b812263a9fbfdeae','w&lt;w&lt;x','Aôut','2016','w&lt;x'),(8,'Janvier','1971','Informatique','Aucun','b52e5d67f5ed9b4244a2fc081d33474fd0bda1d19709e7b9c7c87833d8aeac9d6afa7422a39bf01e34b0db3981b7d2eed4228dbc387186ff08f6f57c243e3c76','ESTI','Janvier','1975','L1');
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
INSERT INTO `PAGE_PAGE` VALUES ('vv',17,'ee4fe61d07ac1a512cc144349e7bf920889aa601f2382b12d2b5301e482a020f4c43c8c2eaa588f65b200fef1b04a5d7cf60e78d13c4999e10e003c85364a2a2','d17c27b48212bc7723071659b65b1f325d72088e32b46ca8c1578b5adba97ff74818148eb365070150a1e346779e40c5ebf60decfdeee289b812263a9fbfdeae','sd','551','vv@gmail.com','sd',NULL,NULL,'Antananarivo'),('aaa',18,'d2d55af9707b22c1c8fa9e93632c3e8f9671cdabbcac73589f85885032f9e8411b6460d0c3e85dd9df7b163b398a3c26403357827ce5d4808615351562c29b02','b52e5d67f5ed9b4244a2fc081d33474fd0bda1d19709e7b9c7c87833d8aeac9d6afa7422a39bf01e34b0db3981b7d2eed4228dbc387186ff08f6f57c243e3c76','dssqssq','662323','aaeee@gmail.com','Andraharo',NULL,NULL,'Fianarantsoa');
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
INSERT INTO `PAGE_PUBLICATION` VALUES (2,'ee4fe61d07ac1a512cc144349e7bf920889aa601f2382b12d2b5301e482a020f4c43c8c2eaa588f65b200fef1b04a5d7cf60e78d13c4999e10e003c85364a2a2','2019-09-05 20:16:03','','','','','','',' ',1,'17.jpg','','dddddf'),(3,'ee4fe61d07ac1a512cc144349e7bf920889aa601f2382b12d2b5301e482a020f4c43c8c2eaa588f65b200fef1b04a5d7cf60e78d13c4999e10e003c85364a2a2','2019-09-07 21:35:51','','','','','','',' ',1,'23.jpg','',''),(4,'d2d55af9707b22c1c8fa9e93632c3e8f9671cdabbcac73589f85885032f9e8411b6460d0c3e85dd9df7b163b398a3c26403357827ce5d4808615351562c29b02','2019-09-09 19:30:53','','','','','','',' ',1,'15.jpg','',''),(5,'d2d55af9707b22c1c8fa9e93632c3e8f9671cdabbcac73589f85885032f9e8411b6460d0c3e85dd9df7b163b398a3c26403357827ce5d4808615351562c29b02','2019-09-17 21:14:08','','','','','','',' ',1,'','',''),(6,'d2d55af9707b22c1c8fa9e93632c3e8f9671cdabbcac73589f85885032f9e8411b6460d0c3e85dd9df7b163b398a3c26403357827ce5d4808615351562c29b02','2019-09-17 21:14:20','','','','','','',' ',1,'10.jpg','','');
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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PERSONNE`
--

LOCK TABLES `PERSONNE` WRITE;
/*!40000 ALTER TABLE `PERSONNE` DISABLE KEYS */;
INSERT INTO `PERSONNE` VALUES (41,'d17c27b48212bc7723071659b65b1f325d72088e32b46ca8c1578b5adba97ff74818148eb365070150a1e346779e40c5ebf60decfdeee289b812263a9fbfdeae','RABS.Ntsoa','Ntsoa','RABS','manambintsoa.mihaingoherilanto@esti.mg','+261346664788','Ambatoroaka V17 GZ','Antananarivo','1998-12-21','h',NULL,'f3603bfe7866bb7fa99c3d778c08b04db990ddc505f1874c27e4a077237dfaf90b0dbaa90cd9439618a44bd1468d83e61ff638c65b978cc0888f73f18646c95b','Issu du programme d\'étude SESAME, j\'étudie actuellement à l’École Supérieure des Technologies de l\'Information . Soif d\'apprendre et aime également partager les connaissances acquises.',NULL,NULL,0,'Développeur','RISE',1,NULL),(42,'b52e5d67f5ed9b4244a2fc081d33474fd0bda1d19709e7b9c7c87833d8aeac9d6afa7422a39bf01e34b0db3981b7d2eed4228dbc387186ff08f6f57c243e3c76','MIHAINGOHERILANTO.Manambintsoa','Manambintsoa','MIHAINGOHERILANTO','ntsoa.s118@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'f3603bfe7866bb7fa99c3d778c08b04db990ddc505f1874c27e4a077237dfaf90b0dbaa90cd9439618a44bd1468d83e61ff638c65b978cc0888f73f18646c95b',NULL,NULL,NULL,0,NULL,NULL,1,NULL),(43,'e783ce1c98041f8a3a68d570983378c500b6234b4e19fc980407cc984e9d75b6da3c6351cc0eb535e1151e13ad88b56a953184039ea65dc465618a2e71981779','hjjhjh.wxwxwx','wxwxwx','hjjhjh','hhaaa@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'d9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85',NULL,NULL,NULL,0,NULL,NULL,0,NULL),(44,'288a44f4259fc2c286e9809c8311747ceaf6445ceb1c5df3993b0d3c116a5598e005ce7dcae7777ef32b7a067dfb0c42c345879cd89dcf51b83a403a4a3c8fae','sqqs.sqsq','sqsq','sqqs','sqsqsq@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'45ea85e79ea0de30fc39797178d61f0a3ecc70d139854b9c74e80da52ac808afc26af05ea76fe9fe2a290cfd12750073ca6b4a598abdfd513ec568bc55540bb2',NULL,NULL,NULL,0,NULL,NULL,0,NULL),(45,'e73b592867c6ada406ab4d483a1d0fe235c3f76bb91960cd2aefd31b6311d6ffbfeaaa7e0eb549f2e1ce2dc88678e9da3a0ae0b1e412e1be9798e8813e9b248d','ze.ze','ze','ze','ze@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'ed3048bc7d38e50c793ced6e4995b506c566f98e6a7c378540bb322cf6a4b9b5cb0f4498901306bbcdaaf7ae2af3022aba12d12058ce7c413b7a2642c701aa13',NULL,NULL,NULL,0,NULL,NULL,0,NULL),(46,'ad4b4ccf77b795bd6733beb1748c191fd483d4cc05eb1f733420116aa6253d16bcc8531dd7ac818ccecbe33e4c49edeec3fe4b10f0ebf9170a6dd27b9ce4dc1c','bbv.vbv','vbv','bbv','vbbv@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'d9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85',NULL,NULL,NULL,0,NULL,NULL,0,NULL),(47,'640685f3d5ba9ad9081a5bbfbb6c44183fea4974a7182220c9eaa95d1a30e2bb59835c2273582de7bb60dee0a7e918761c68d66891e60ecbd21eace7bfa1c1ea','jjj.wwx','wwx','jjj','wxxw@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'d9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85',NULL,NULL,NULL,0,NULL,NULL,0,NULL),(48,'96823463afe2273839ffa2040db227451b4f0b62f20b43b3aaa0189a4ed8a8c26af7701b6fbd6e83d885d2103e9ee8c1103df21859a318f435fc671f817c63e0','MMM.Qaz','Qaz','MMM','ntsoasddd.s118@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'d9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85',NULL,NULL,NULL,0,NULL,NULL,0,NULL),(49,'b0bd81ed738d78dff3a9de7c2d25a3e335ff34f0f9d9a8ca632fd17727ed9d26b096cd198143d9e3706150dd6e254b2875821199e229bad8fe9e22767b9b241d','RAHAJAHARIMANGA.Juliano Josoa','Juliano Josoa','RAHAJAHARIMANGA','josoa.juliano@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'adad88b6244e12221f1ce02a3fb81f9ffde7b13ef297ce72ae23eee12d27eb228dc6f4c26dc3e771b88c32e602b104ff06044eb399d36fdab9b1b8d8e20c5eb3',NULL,NULL,NULL,0,NULL,NULL,1,NULL),(50,'7f3dab4e4c76d9c0f1b9a92c61e0e24a37838e71104d5f9eded0d7dc9b4ac2d4b0acaefa34eb21d49cf7c1f56a5e24399d2e4cfe19635e68acd896caad78777b','example.example','example','example','ex@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'adad88b6244e12221f1ce02a3fb81f9ffde7b13ef297ce72ae23eee12d27eb228dc6f4c26dc3e771b88c32e602b104ff06044eb399d36fdab9b1b8d8e20c5eb3',NULL,NULL,NULL,0,NULL,NULL,1,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PUBLICATION`
--

LOCK TABLES `PUBLICATION` WRITE;
/*!40000 ALTER TABLE `PUBLICATION` DISABLE KEYS */;
INSERT INTO `PUBLICATION` VALUES (28,'d17c27b48212bc7723071659b65b1f325d72088e32b46ca8c1578b5adba97ff74818148eb365070150a1e346779e40c5ebf60decfdeee289b812263a9fbfdeae','2019-09-06 10:05:43','','','','','','','',' ',1,'14.jpg',''),(29,'d17c27b48212bc7723071659b65b1f325d72088e32b46ca8c1578b5adba97ff74818148eb365070150a1e346779e40c5ebf60decfdeee289b812263a9fbfdeae','2019-09-08 10:13:44','ksdkjqsdh','','','','','','',' ',1,'',''),(30,'b52e5d67f5ed9b4244a2fc081d33474fd0bda1d19709e7b9c7c87833d8aeac9d6afa7422a39bf01e34b0db3981b7d2eed4228dbc387186ff08f6f57c243e3c76','2019-09-17 20:08:50','','','','','','','',' ',1,'24.jpg',''),(31,'b52e5d67f5ed9b4244a2fc081d33474fd0bda1d19709e7b9c7c87833d8aeac9d6afa7422a39bf01e34b0db3981b7d2eed4228dbc387186ff08f6f57c243e3c76','2019-09-27 18:07:34','teste','','','','','','',' ',1,'',''),(32,'b0bd81ed738d78dff3a9de7c2d25a3e335ff34f0f9d9a8ca632fd17727ed9d26b096cd198143d9e3706150dd6e254b2875821199e229bad8fe9e22767b9b241d','2019-09-27 22:38:49','afdkljaflkjd','jknkjk','kjlk','lkjlkjk','lkmlk;lk','lkjlk','Antananarivo','1 Avril',1,'','k;lk');
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

-- Dump completed on 2019-09-27 23:08:10
