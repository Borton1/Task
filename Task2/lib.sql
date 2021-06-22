-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 22 2021 г., 17:43
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
-- База данных: `lib`
--

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE `book` (
  `NameBook` varchar(255) NOT NULL,
  `Author1` varchar(255) NOT NULL,
  `Author2` varchar(255) NOT NULL,
  `Author3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`NameBook`, `Author1`, `Author2`, `Author3`) VALUES
('Повести и рассказы', 'Иванов Ф.Ф.', '', ''),
('История России', 'Беглов Е.Е.', 'Иванов Ф.Ф.', 'Соколов С.С.'),
('Как выучить php?', 'Стародубов И.И.', 'Беглов Е.Е.', ''),
('Искусство выращивать клубнику', 'Беглов Е.Е.', 'Елесеев Р.К.', ''),
('Астрофизика', 'Соколов С.С.', 'Стародубов И.И.', ''),
('Вакуум-васкулярная терапия.', 'Николаев Ж.Ж.', 'Павлеченко К.К.', ''),
('Уравнения Максвелла, электромагнитные волны о осно', 'Беглов Е.Е.', 'Стародубов И.И.', 'Соколов С.С.'),
('Экономические основы эффективного управления предп', 'Беглов Е.Е.', '', ''),
('Нейронауки. Исследование мозга.', 'Вертухин.А.А.', 'Беглов Е.Е.', ''),
('Хоббит: новое приключение', 'Павлеченко К.К.', 'Иванов Ф.Ф.', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
