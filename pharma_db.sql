CREATE DATABASE  IF NOT EXISTS `pharmademo` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `pharmademo`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: pharmademo
-- ------------------------------------------------------
-- Server version	8.2.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contracte`
--

DROP TABLE IF EXISTS `contracte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contracte` (
  `ContractID` int NOT NULL AUTO_INCREMENT,
  `MedicamentID` int DEFAULT NULL,
  `ProducatorID` int DEFAULT NULL,
  `Unitati` int DEFAULT NULL,
  PRIMARY KEY (`ContractID`),
  KEY `fk_1_idx` (`MedicamentID`),
  KEY `fk_2_idx` (`ProducatorID`),
  KEY `fk_3_idx` (`MedicamentID`),
  KEY `fk_4_idx` (`ProducatorID`),
  CONSTRAINT `fk_3` FOREIGN KEY (`MedicamentID`) REFERENCES `medicamente` (`MedicamentID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_4` FOREIGN KEY (`ProducatorID`) REFERENCES `producatori` (`ProducatorID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contracte`
--

LOCK TABLES `contracte` WRITE;
/*!40000 ALTER TABLE `contracte` DISABLE KEYS */;
INSERT INTO `contracte` VALUES (2,4,1,3200),(3,2,3,1600);
/*!40000 ALTER TABLE `contracte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `farmacie`
--

DROP TABLE IF EXISTS `farmacie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `farmacie` (
  `FarmacieID` int NOT NULL AUTO_INCREMENT,
  `Denumire` varchar(45) DEFAULT NULL,
  `Adresa` varchar(45) DEFAULT NULL,
  `DataInfiintare` date DEFAULT NULL,
  PRIMARY KEY (`FarmacieID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `farmacie`
--

LOCK TABLES `farmacie` WRITE;
/*!40000 ALTER TABLE `farmacie` DISABLE KEYS */;
INSERT INTO `farmacie` VALUES (1,'Catena','Intrarea Horbotei, 3','2004-09-18'),(2,'Dr. Max','Strada Patrascanu, 4','1998-05-05'),(3,'HelpNet','Piata Unirii','2017-06-21');
/*!40000 ALTER TABLE `farmacie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medicamente`
--

DROP TABLE IF EXISTS `medicamente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `medicamente` (
  `MedicamentID` int NOT NULL AUTO_INCREMENT,
  `Denumire` varchar(45) DEFAULT NULL,
  `DataProducere` date DEFAULT NULL,
  `DataExpirare` date DEFAULT NULL,
  PRIMARY KEY (`MedicamentID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medicamente`
--

LOCK TABLES `medicamente` WRITE;
/*!40000 ALTER TABLE `medicamente` DISABLE KEYS */;
INSERT INTO `medicamente` VALUES (1,'Nurofen','1970-03-04','1971-05-05'),(2,'Faringosept','1998-06-06','2012-12-20'),(3,'Vitamax','1858-03-03','2024-10-13'),(4,'Aspacardin','2004-08-09','2005-06-06');
/*!40000 ALTER TABLE `medicamente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producatori`
--

DROP TABLE IF EXISTS `producatori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `producatori` (
  `ProducatorID` int NOT NULL AUTO_INCREMENT,
  `Denumire` varchar(45) DEFAULT NULL,
  `TaraOrigine` varchar(45) DEFAULT NULL,
  `Adresa` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ProducatorID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producatori`
--

LOCK TABLES `producatori` WRITE;
/*!40000 ALTER TABLE `producatori` DISABLE KEYS */;
INSERT INTO `producatori` VALUES (1,'BeHealthy LLC','Switzerland','Switz street'),(2,'Medicamente SRL','Romania','Brambureni, Pitesti'),(3,'Shady Producer','Unknown','Unknown');
/*!40000 ALTER TABLE `producatori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resurse`
--

DROP TABLE IF EXISTS `resurse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `resurse` (
  `ResursaID` int NOT NULL AUTO_INCREMENT,
  `FarmacieID` int DEFAULT NULL,
  `MedicamentID` int DEFAULT NULL,
  `Stoc` int DEFAULT NULL,
  `Pret` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`ResursaID`),
  KEY `fk_1_idx` (`FarmacieID`),
  KEY `fk_2_idx` (`MedicamentID`),
  CONSTRAINT `fk_1` FOREIGN KEY (`FarmacieID`) REFERENCES `farmacie` (`FarmacieID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_2` FOREIGN KEY (`MedicamentID`) REFERENCES `medicamente` (`MedicamentID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resurse`
--

LOCK TABLES `resurse` WRITE;
/*!40000 ALTER TABLE `resurse` DISABLE KEYS */;
INSERT INTO `resurse` VALUES (1,2,1,400,15),(2,3,2,20,20);
/*!40000 ALTER TABLE `resurse` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-03 18:54:28
