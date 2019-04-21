-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 22 2019 г., 00:07
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `books`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books_list`
--

CREATE TABLE `books_list` (
  `id` tinyint(100) NOT NULL,
  `ISBN` bigint(20) NOT NULL,
  `name` text NOT NULL,
  `poster` text NOT NULL,
  `url` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books_list`
--

INSERT INTO `books_list` (`id`, `ISBN`, `name`, `poster`, `url`, `price`) VALUES
(1, 1491978910, 'Learning PHP, MySQL & JavaScript: With jQuery, CSS & HTML5', 'https://images-na.ssl-images-amazon.com/images/I/51aUTzDIxxL._SX379_BO1,204,203,200_.jpg', 'https://www.amazon.com/Learning-PHP-MySQL-JavaScript-Javascript/dp/1491978910', 31.15),
(2, 1789532019, 'WordPress 5 Complete: Build beautiful and feature-rich websites from scratch', 'https://images-na.ssl-images-amazon.com/images/I/51mIYYmtBQL._SX404_BO1,204,203,200_.jpg', 'https://www.amazon.com/WordPress-Complete-beautiful-feature-rich-websites/dp/1789532019', 40.5),
(3, 1491936088, 'Laravel: Up and Running', 'https://images-na.ssl-images-amazon.com/images/I/51bEpBADC%2BL._SX379_BO1,204,203,200_.jpg', 'https://www.amazon.com/Laravel-Up-Running-Matt-Stauffer/dp/1491936088', 80.21),
(4, 1785882813, 'Mastering PHP 7: Design, configure, build, and test professional web applications', 'https://images-na.ssl-images-amazon.com/images/I/51g-nakCoSL._SX404_BO1,204,203,200_.jpg', 'https://www.amazon.com/Mastering-PHP-configure-professional-applications/dp/17858828138', 22.39),
(5, 1785882813, 'Mastering PHP 7: Design, configure, build, and test professional web applications', 'https://images-na.ssl-images-amazon.com/images/I/51g-nakCoSL._SX404_BO1,204,203,200_.jpg', 'https://www.amazon.com/Mastering-PHP-configure-professional-applications/dp/1785882813/ref=sr_1_13?keywords=php&qid=1555535619&s=gateway&sr=8-13', 44.99),
(6, 1119149223, 'PHP & MySQL: Server-side Web Development 1st Edition', 'https://images-na.ssl-images-amazon.com/images/I/31tYCd%2BGxIL._SX390_BO1,204,203,200_.jpg', 'https://www.amazon.com/PHP-MySQL-Server-side-Web-Development/dp/1119149223/ref=sr_1_3?keywords=php&qid=1555535619&s=gateway&sr=8-3', 38.25),
(7, 1491905018, 'Modern PHP: New Features and Good Practices 1st Edition', 'https://images-na.ssl-images-amazon.com/images/I/516kv5hpwuL._SX373_BO1,204,203,200_.jpg', 'https://www.amazon.com/Modern-PHP-Features-Good-Practices/dp/1491905018/ref=sr_1_4?keywords=php&qid=1555535619&s=gateway&sr=8-4', 26.75),
(8, 1484219953, 'PHP Objects, Patterns, and Practice 5th ed. Edition', 'https://images-na.ssl-images-amazon.com/images/I/51NG-ZskTBL._SX348_BO1,204,203,200_.jpg', 'https://www.amazon.com/Objects-Patterns-Practice-MATT-ZANDSTRA/dp/1484219953/ref=sr_1_5?keywords=php&qid=1555535619&s=gateway&sr=8-5', 37.39),
(9, 134291255, 'PHP for the Web: Visual QuickStart Guide (5th Edition) 5th Edition', 'https://images-na.ssl-images-amazon.com/images/I/51b5LUjYNrL._SX387_BO1,204,203,200_.jpg', 'https://www.amazon.com/PHP-Web-Visual-QuickStart-Guide/dp/0134291255/ref=sr_1_6?keywords=php&qid=1555535619&s=gateway&sr=8-6', 15.65),
(10, 1492041211, 'Laravel: Up & Running: A Framework for Building Modern PHP Apps 2nd Edition', 'https://images-na.ssl-images-amazon.com/images/I/41SKdYdrI2L._SX379_BO1,204,203,200_.jpg', 'https://www.amazon.com/Laravel-Running-Framework-Building-Modern/dp/1492041211/ref=sr_1_7?keywords=php&qid=1555535619&s=gateway&sr=8-7', 38.84),
(11, 15555356119, 'PHP: Learn PHP In 2 Hours And Start Programming Today! Kindle Edition', 'https://images-na.ssl-images-amazon.com/images/I/41RT4qdBDQL.jpg', 'https://www.amazon.com/PHP-Learn-Hours-Start-Programming-ebook/dp/B078ZKZFZK/ref=sr_1_8?keywords=php&qid=1555535619&s=gateway&sr=8-8', 3.99),
(12, 1717823211, 'PHP MYSQL In 8 Hours, For Beginners, Learn Coding Fast!', 'https://images-na.ssl-images-amazon.com/images/I/41ULBGIdn6L._SX403_BO1,204,203,200_.jpg', 'https://www.amazon.com/MYSQL-Hours-Beginners-Learn-Coding/dp/1717823211/ref=sr_1_9?keywords=php&qid=1555535619&s=gateway&sr=8-9', 13.99),
(13, 1943872384, 'Murach\'s PHP and MySQL (3rd Edition)', 'https://images-na.ssl-images-amazon.com/images/I/518P18i73-L._SX390_BO1,204,203,200_.jpg', 'https://www.amazon.com/Murachs-PHP-MySQL-Joel-Murach/dp/1943872384/ref=sr_1_10?keywords=php&qid=1555535619&s=gateway&sr=8-10', 44.89),
(14, 596006306, 'Head First PHP & MySQL: A Brain-Friendly Guide 1st Edition', 'https://images-na.ssl-images-amazon.com/images/I/51yBpgXmyRL._SX431_BO1,204,203,200_.jpg', 'https://www.amazon.com/Head-First-PHP-MySQL-Brain-Friendly/dp/0596006306/ref=sr_1_11?keywords=php&qid=1555535619&s=gateway&sr=8-11', 36.53),
(15, 15555356191, 'Programming for Beginners: 6 Books in 1 - Swift+PHP+Java+Javascript+Html+CSS: Basic Fundamental Guide for Beginners Kindle Edition', 'https://images-na.ssl-images-amazon.com/images/I/51fU3PmD4PL.jpg', 'https://www.amazon.com/Programming-Beginners-Books-Javascript-Fundamental-ebook/dp/B07LB9HSV1/ref=sr_1_12?keywords=php&qid=1555535619&s=gateway&sr=8-12', 7.99);

-- --------------------------------------------------------

--
-- Структура таблицы `books_tag`
--

CREATE TABLE `books_tag` (
  `id` smallint(6) NOT NULL,
  `ISBN` int(11) NOT NULL,
  `tag` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books_tag`
--

INSERT INTO `books_tag` (`id`, `ISBN`, `tag`) VALUES
(1, 1491978910, 1),
(2, 1491978910, 2),
(3, 1491978910, 3),
(4, 1789532019, 1),
(5, 1789532019, 4),
(6, 1491936088, 5),
(7, 1119149223, 1),
(8, 1119149223, 2),
(9, 1492041211, 5),
(10, 596006306, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE `tags` (
  `id` smallint(6) NOT NULL,
  `tag` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `tag`) VALUES
(1, 'php'),
(2, 'mysql'),
(3, 'jquery'),
(4, 'wordpress'),
(5, 'laravel');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books_list`
--
ALTER TABLE `books_list`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `books_tag`
--
ALTER TABLE `books_tag`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `books_list`
--
ALTER TABLE `books_list`
  MODIFY `id` tinyint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `books_tag`
--
ALTER TABLE `books_tag`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
