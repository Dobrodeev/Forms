-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.38 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица regandauto.Users
CREATE TABLE IF NOT EXISTS `Users` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `skype` varchar(50) DEFAULT NULL,
  `viber` varchar(50) DEFAULT NULL,
  `telegram` varchar(50) DEFAULT NULL,
  `automobile_number` varchar(50) DEFAULT NULL,
  `card_number` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы regandauto.Users: ~11 rows (приблизительно)
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT IGNORE INTO `Users` (`id`, `name`, `surname`, `phone`, `email`, `skype`, `viber`, `telegram`, `automobile_number`, `card_number`) VALUES
	(1, 'Semuel', 'Piter', NULL, 'semuel1990@yandex.ua', 'semuel1990', NULL, NULL, 'AA6513BN', NULL),
	(2, 'Gordon', 'Zuckerman', NULL, 'gordon1977@ukr.net', 'gordon1977', NULL, NULL, 'BTR1', NULL),
	(3, 'Harold', 'McBain', NULL, 'harold1976@gmail.com', 'harold1976', NULL, NULL, 'AA5751BN', NULL),
	(4, 'Anufrii', 'Apologet', NULL, 'anufrii1944@ukr.net', 'anufrii1944', NULL, NULL, 'AP7821IK', NULL),
	(5, 'Tihon', 'Math', NULL, 'tihon1973@bk.ru', 'tihon1973', NULL, NULL, 'AI3435BK', NULL),
	(6, 'Filaret', 'Ukrop', NULL, 'filaret1943@meta.ua', 'filaret1943', NULL, NULL, 'AP3255BN', NULL),
	(7, 'Buzina', 'Oles', NULL, 'buzina1971@bk.ru', 'buzina1971', NULL, NULL, 'AA7437AI', NULL),
	(8, 'Nogin', 'George', NULL, 'nogin1955@ukr.net', 'nogin1955', NULL, NULL, 'AA7255AK', NULL),
	(9, 'Vladimirov', 'Vladislav', NULL, 'vladimirov1966@ukr.net', 'vladimirov1966', NULL, NULL, 'AA4155AK', NULL),
	(10, 'Tihonov', 'Physics', NULL, 'tihonov1963@bk.ru', 'tihonov1963', NULL, NULL, 'AA5285AK', NULL),
	(11, 'Samarscky', 'Numeric', NULL, 'samarsky1957@bk.ru', 'samarsky1957', NULL, NULL, 'AA9552AI', NULL);
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
