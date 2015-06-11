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
  `GroupNumber` varchar(5) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mark` int(3) NOT NULL,
  `Local` enum('L','N') NOT NULL,
  `BirthDate` year(4) NOT NULL,
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Students`
--

LOCK TABLES `Students` WRITE;
/*!40000 ALTER TABLE `Students` DISABLE KEYS */;
INSERT INTO `Students` VALUES ('Вася','Васин','M','654','1@vasya.ru',198,'L',1989,1,'d9695'),('Петя','Петин','M','655','lolka@loh.com',199,'N',1990,2,'4b56a'),('Петя','Петин','M','289','lolka@loh.com',177,'L',1967,3,'abaca'),('Семен','Семенов','M','989','rsyu@yandex.ru',200,'N',1989,4,'dd425'),('Сергей','Семенов','M','989','rsyu@yandex.ru',200,'L',1989,5,'7602b'),('Василий','Семенов','M','999','rsyu@yandex.ru',300,'L',1984,6,'ab104'),('Василий','Семенов','M','999','rsyu@yandex.ru',300,'L',1984,7,'6b988'),('Василий','Семенов','M','999','rsyu@yandex.ru',300,'L',1984,8,'62516'),('Василий','Семенов','M','999','r4syu@yandex.ru',300,'L',1984,9,'4253d'),('Петр','Мамонов','M','345','rsyu@yandex.ru',213,'L',1956,10,'6d032'),('Петр','Мамонов','M','345','rsyu@yandex.ru',213,'L',1956,11,'d65b0'),('Петр','Мамонов','M','345','rsy455434u@yandex.ru',213,'L',1956,12,'25a8d'),('Виталий','Витальев','M','198','lkjs@lkm.ce',198,'N',1988,13,'3f89e'),('Глаша','Семенова','F','666','9898en@yandex.ru',989,'N',1966,14,'5f6f9'),('Федор','Емельяненко','M','241','fedor@fedor.com',180,'N',1965,15,'9d20b'),('Василина','Каковна','F','479','semen12@yandex.ru',199,'N',1985,16,'d70e7'),('Акакий','Макакович','M','123','123@sdsas.sx',199,'N',1933,17,'40f98'),('Иннокентий','Смоктуновский','M','100','kesha@vasya.org',186,'L',1978,18,'c31eb'),('Антон','Какашкин','M','278','anton@semenov.lol',266,'N',1964,19,'385bb'),('Вадим','Полунин','M','666','vad@66.com',500,'L',1909,20,'1aadd'),('Коля','Колин','M','342','kolya@lol.com',250,'L',1955,21,'d8f68'),('Владимир','Мономах','M','197','vladimir@example.com',190,'L',1933,22,'2bd13'),('Дмитрий','Ревидчук','M','6767','rsyu@yandex.ru',400,'N',0000,23,'f47c7'),('Петро','Петровчич','M','197','rsyu@yandex.ru',900,'N',1988,24,'9f2d6'),('Глашатай','Мономах','M','977','rsyu8432@yandex.ru',987,'L',1922,26,'ada33'),('Семен','Петрович','M','878','semen33@yandex.ru',999,'N',1901,27,'d30ee'),('Василий','Агутин','M','999','rsyu234@yandex.ru',999,'L',1976,28,'7c7d4'),('Глаша','Петрович','F','989','seme89873n@yandex.ru',190,'N',1945,29,'d2d92'),('Степан','Срака','M','999','semen212@yandex.ru',999,'L',1911,30,'8464e'),('Степан','Срака','M','1456','rsyu2346@yandex.ru',400,'L',1943,31,'16d75'),('Сергей','Ревидчук','M','989','sraka88@example.com',200,'N',1933,32,'560c5'),('Петро','Ди Педро','M','987','rsy12314u@yandex.ru',400,'N',0000,33,'fd712c254a1bcc977ab1'),('Домка','Семенова','F','999','vasilina@example.com',999,'L',1930,34,'a0919420d3def3a38'),('Петро','Петровчич','M','888','semen22@yandex.ru',888,'N',1950,35,'1ea15a14b'),('Глашатай','Петрович','F','444','seme4383n@yandex.ru',555,'N',1948,36,'b2d27e75fdf3ee3d3e8d'),('Семен','Семенченко','M','8888','rsy212u@yandex.ru',888,'N',1909,37,'yMj8z4HoGz');
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

-- Dump completed on 2015-06-11 10:52:07
