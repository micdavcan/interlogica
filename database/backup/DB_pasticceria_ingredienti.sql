-- MySQL dump 10.13  Distrib 8.0.23, for Linux (x86_64)
--
-- Host: localhost    Database: DB_pasticceria
-- ------------------------------------------------------
-- Server version	8.0.23-0ubuntu0.20.04.1

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
-- Table structure for table `ingredienti`
--

DROP TABLE IF EXISTS `ingredienti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ingredienti` (
  `id_ingrediente` int NOT NULL AUTO_INCREMENT,
  `id_dolce` int DEFAULT NULL,
  `nome` varchar(100) NOT NULL,
  `quantità` smallint DEFAULT NULL,
  `unità_misura` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_ingrediente`),
  KEY `fk_ingredienti_dolci1_idx` (`id_dolce`),
  CONSTRAINT `fk_ingredienti_dolci1` FOREIGN KEY (`id_dolce`) REFERENCES `dolci` (`id_dolce`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingredienti`
--

LOCK TABLES `ingredienti` WRITE;
/*!40000 ALTER TABLE `ingredienti` DISABLE KEYS */;
INSERT INTO `ingredienti` VALUES (1,1,'Farina 00',200,'gr'),(2,1,'Latte',100,'ml'),(3,1,'Uova',2,''),(4,1,'Zucchero',200,'gr'),(5,1,'Olio di semi',60,'ml'),(6,1,'Lievito per dolci',1,'bustina'),(7,1,'Sale',1,'pizzico'),(8,1,'Arancia grattugiata',1,'buccia'),(9,1,'Essenza di vaniglia',1,'cucchiaino'),(10,1,'Acqua calda',150,'ml'),(11,1,'Zucchero a velo',0,''),(12,2,'Farina 00',380,'gr'),(13,2,'Yogurt bianco',125,'ml'),(14,2,'Zucchero semolato',200,'gr'),(15,2,'Olio di semi',60,'gr'),(16,2,'Latte',60,'gr'),(17,2,'Uova',2,NULL),(18,2,'Lievito per dolci',8,'gr'),(19,2,'Aroma alla vaniglia',1,'cucchiaino'),(20,3,'Fragole fresche e mature',1,'kg'),(21,3,'Zucchero',600,'gr'),(22,3,'Succo di un limone',0,NULL),(23,4,'Biscotti secchi',150,'gr'),(24,4,'Burro',150,'gr'),(25,4,'Zucchero a velo',60,'gr'),(26,4,'Cioccolato fondente',270,'gr'),(27,4,'Pistacchi sgusciati (o mandorle o nocciole)',50,'gr');
/*!40000 ALTER TABLE `ingredienti` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-19 15:29:29
