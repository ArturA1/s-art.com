-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 27 2022 г., 21:57
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `my_bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE `message` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `content` text NOT NULL,
  `time` text NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `message`
--

INSERT INTO `message` (`id`, `name`, `content`, `time`) VALUES
(2, 'User3', 'arFsvnAaYyoqvoyET9cXR1DA/gx4fW9OlZ3Gyt2ExIc=', '2022-06-27 21:39:32'),
(3, 'User1', 'arFsvnAaYyoqvoyET9cXR1DA/gx4fW9OlZ3Gyt2ExIc=', '2022-06-27 21:42:03'),
(8, 'User2', 'wUtL5jfmDaJgROPtJgkK9A==', '2022-06-27 21:52:11'),
(9, 'vv', 'roZFZcztTSS5zDYFensugD2/IYOUQmGkKqUnH0ndmLu9gGNUze/sDSG5VM1+2ohqJq+IpKb3s1MsnkSkuGRrZQ==', '2022-06-27 21:52:36'),
(10, 'User2', 'arFsvnAaYyoqvoyET9cXR1DA/gx4fW9OlZ3Gyt2ExIc=', '2022-06-27 21:53:05');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `message`
--
ALTER TABLE `message`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
