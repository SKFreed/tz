-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               8.0.19 - MySQL Community Server - GPL
-- Операционная система:         Win64
-- HeidiSQL Версия:              11.0.0.5958
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных tzbase
CREATE DATABASE IF NOT EXISTS `tzbase` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `tzbase`;

-- Дамп структуры для таблица tzbase.tztable
CREATE TABLE IF NOT EXISTS `tztable` (
  `id` int NOT NULL AUTO_INCREMENT,
  `operations` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `cost` int DEFAULT NULL,
  `dateupdate` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Дамп данных таблицы tzbase.tztable: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `tztable` DISABLE KEYS */;
INSERT INTO `tztable` (`id`, `operations`, `category`, `cost`, `dateupdate`) VALUES
	(19, 'Расход', 'Мобильная связь', 100, '2021-07-02 23:51:26'),
	(37, 'Доход', 'Заработная плата', 4, '2021-07-03 00:48:02'),
	(38, 'Доход', 'Иной источник', 9, '2021-07-03 00:50:12'),
	(39, 'Расход', 'Транспорт', 99, '2021-07-03 00:50:23'),
	(40, 'Доход', 'Заработная плата', 100000, '2021-07-03 19:21:21'),
	(41, 'Доход', 'Заработная плата', 70000, '2021-07-03 19:49:28'),
	(42, 'Доход', 'Иной источник', 155, '2021-07-03 19:56:08'),
	(43, 'Доход', 'Заработная плата', 66, '2021-07-03 19:56:22');
/*!40000 ALTER TABLE `tztable` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
