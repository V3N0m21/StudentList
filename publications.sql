-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 25, 2015 at 05:36 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `publications`
--

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

CREATE TABLE IF NOT EXISTS `Students` (
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
  PRIMARY KEY (`ID`),
  UNIQUE KEY `password` (`password`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `Students`
--

INSERT INTO `Students` (`Name`, `Surname`, `Sex`, `GroupNumber`, `Email`, `Mark`, `Local`, `BirthDate`, `ID`, `password`) VALUES
('Вася', 'Васин', 'M', '654', '1@vasya.ru', 198, 'L', 1989, 1, 'd9695'),
('Петя', 'Петин', 'M', '655', 'lolka@loh.com', 199, 'N', 1990, 2, '4b56a'),
('Василий', 'Семенов', 'M', '999', 'r4syu@yandex.ru', 300, 'L', 1984, 9, '4253d'),
('Петр', 'Мамонов', 'M', '345', 'rsy455434u@yandex.ru', 213, 'L', 1956, 12, '25a8d'),
('Виталий', 'Витальев', 'M', '198', 'lkjs@lkm.ce', 198, 'N', 1988, 13, '3f89e'),
('Глаша', 'Семенова', 'F', '666', '9898en@yandex.ru', 989, 'N', 1966, 14, '5f6f9'),
('Федор', 'Емельяненко', 'M', '241', 'fedor@fedor.com', 180, 'N', 1965, 15, '9d20b'),
('Василина', 'Каковна', 'F', '479', 'semen12@yandex.ru', 199, 'N', 1985, 16, 'd70e7'),
('Акакий', 'Макакович', 'M', '123', '123@sdsas.sx', 199, 'N', 1933, 17, '40f98'),
('Иннокентий', 'Смоктуновский', 'M', '100', 'kesha@vasya.org', 186, 'L', 1978, 18, 'c31eb'),
('Антон', 'Какашкин', 'M', '278', 'anton@semenov.lol', 266, 'N', 1964, 19, '385bb'),
('Вадим', 'Полунин', 'M', '666', 'vad@66.com', 500, 'L', 1909, 20, '1aadd'),
('Коля', 'Колин', 'M', '342', 'kolya@lol.com', 250, 'L', 1955, 21, 'd8f68'),
('Владимир', 'Мономах', 'M', '197', 'vladimir@example.com', 190, 'L', 1933, 22, '2bd13'),
('Петро', 'Петровчич', 'M', '197', 'rsyu@yandex.ru', 900, 'N', 1988, 24, '9f2d6'),
('Глашатай', 'Мономах', 'M', '977', 'rsyu8432@yandex.ru', 987, 'L', 1922, 26, 'ada33'),
('Семен', 'Петрович', 'M', '878', 'semen33@yandex.ru', 999, 'N', 1901, 27, 'd30ee'),
('Василий', 'Агутин', 'M', '999', 'rsyu234@yandex.ru', 999, 'L', 1976, 28, '7c7d4'),
('Глаша', 'Петрович', 'F', '989', 'seme89873n@yandex.ru', 190, 'N', 1945, 29, 'd2d92'),
('Степан', 'Срака', 'M', '999', 'semen212@yandex.ru', 999, 'L', 1911, 30, '8464e'),
('Степан', 'Срака', 'M', '1456', 'rsyu2346@yandex.ru', 400, 'L', 1943, 31, '16d75'),
('Сергей', 'Ревидчук', 'M', '989', 'sraka88@example.com', 200, 'N', 1933, 32, '560c5'),
('Петро', 'Ди Педро', 'M', '987', 'rsy12314u@yandex.ru', 400, 'N', 0000, 33, 'fd712c254a1bcc977ab1'),
('Домка', 'Семенова', 'F', '999', 'vasilina@example.com', 999, 'L', 1930, 34, 'a0919420d3def3a38'),
('Петро', 'Петровчич', 'M', '888', 'semen22@yandex.ru', 888, 'N', 1950, 35, '1ea15a14b'),
('Глашатай', 'Петрович', 'F', '444', 'seme4383n@yandex.ru', 555, 'N', 1948, 36, 'b2d27e75fdf3ee3d3e8d'),
('Семен', 'Семенченко', 'M', '8888', 'rsy444u@yandex.ru', 888, 'N', 1909, 37, 'yMj8z4HoGz'),
('Семен', 'Витальев', 'M', '341', 'semenkk@yandex.ru', 190, 'L', 1909, 38, '5haI5ePFWh'),
('Глаша', 'Витальев', 'F', '8888', 'rsyu11215542@yandex.ru', 190, 'N', 1909, 39, 'UclfFRHWqQ'),
('Абдула', 'Рахмандул', 'M', '999', '999@abdul.com', 999, 'N', 1944, 40, 'aKj7HB0KUy'),
('Глаша', 'Мономах', 'F', '197', 'rsy555u@yandex.ru', 999, 'N', 1909, 43, '4hKW81Rw1g'),
('Семен', 'Петрович', 'M', '341', 'rsyueee@yandex.ru', 999, 'N', 1988, 44, 'one3Xw33AU'),
('Семен', 'Петрович', 'M', '341', 'rsy212u@yandex.ru', 888, 'N', 1988, 45, 'S3kARhs4KN');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
