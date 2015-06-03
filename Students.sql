-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: publications
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Students`
--

DROP TABLE IF EXISTS `Students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Students` (
  `Name` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `Sex` enum('M','F') NOT NULL,
  `GroupNumber` int(5) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mark` int(3) NOT NULL,
  `Local` enum('L','N') NOT NULL,
  `BirthDate` int(4) NOT NULL,
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `pswrd` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Students`
--

LOCK TABLES `Students` WRITE;
/*!40000 ALTER TABLE `Students` DISABLE KEYS */;
INSERT INTO `Students` VALUES ('Вася','Васин','M',654,'1@vasya.ru',198,'L',1989,1,'d9695'),('Петя','Петин','M',655,'lolka@loh.com',199,'N',1990,2,'4b56a'),('Петя','Петин','M',289,'lolka@loh.com',177,'L',1967,3,'abaca'),('Семен','Семенов','M',989,'rsyu@yandex.ru',200,'N',1989,4,'dd425'),('Сергей','Семенов','M',989,'rsyu@yandex.ru',200,'L',1989,5,'7602b'),('Василий','Семенов','M',999,'rsyu@yandex.ru',300,'L',1984,6,'ab104'),('Василий','Семенов','M',999,'rsyu@yandex.ru',300,'L',1984,7,'6b988'),('Василий','Семенов','M',999,'rsyu@yandex.ru',300,'L',1984,8,'62516'),('Василий','Семенов','M',999,'r4syu@yandex.ru',300,'L',1984,9,'4253d'),('Петр','Мамонов','M',345,'rsyu@yandex.ru',213,'L',1956,10,'6d032'),('Петр','Мамонов','M',345,'rsyu@yandex.ru',213,'L',1956,11,'d65b0'),('Петр','Мамонов','M',345,'rsy455434u@yandex.ru',213,'L',1956,12,'25a8d'),('Виталий','Витальев','M',198,'lkjs@lkm.ce',198,'N',1988,13,'3f89e'),('Глаша','Семенова','F',666,'9898en@yandex.ru',989,'N',1966,14,'5f6f9'),('Федор','Емельяненко','M',241,'fedor@fedor.com',180,'N',1965,15,'9d20b'),('Василина','Каковна','F',479,'semen12@yandex.ru',199,'N',1985,16,'d70e7'),('Акакий','Макакович','M',123,'123@sdsas.sx',199,'N',1933,17,'40f98'),('Иннокентий','Смоктуновский','M',100,'kesha@vasya.org',186,'L',1978,18,'c31eb'),('Антон','Какашкин','M',278,'anton@semenov.lol',266,'N',1964,19,'385bb'),('Вадим','Полунин','M',666,'vad@66.com',500,'L',1909,20,'1aadd');
/*!40000 ALTER TABLE `Students` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-03 10:28:12
