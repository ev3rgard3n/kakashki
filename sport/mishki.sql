-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 24 2024 г., 13:27
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Mishki`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Goods`
--

CREATE TABLE `Goods` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` float NOT NULL,
  `image_url` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Goods`
--

INSERT INTO `Goods` (`id`, `name`, `description`, `price`, `image_url`) VALUES
(1, 'Утренний', 'Тариф дает возможность посещать выбранный клуб до 17:00.\r\nЧто входит в абонемент: Групповые уроки, Индивидуальные шкафчики, Три бонусные тренировки.', 1900, 'https://i.ibb.co/3SKqLmB/volleyball-players-having-a-match.jpg'),
(2, 'Вечерний', 'Тариф дает возможность посещать выбранный клуб до 17:00.\r\nЧто входит в абонемент: Групповые уроки, Индивидуальные шкафчики, Три бонусные тренировки.', 2000, 'https://i.postimg.cc/Tw3HCrC6/media-market.png'),
(3, 'Аренда оборудования', 'Можете арендовать нужное Вам оборудование', 1790, 'https://i.postimg.cc/Bb87G4r7/ad-media.png');

-- --------------------------------------------------------

--
-- Структура таблицы `User`
--

CREATE TABLE `User` (
  `id` int NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `name` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `User`
--

INSERT INTO `User` (`id`, `firstname`, `name`, `password`, `email`) VALUES
(1, '1', '1', '1', 'example@gamil.com'),
(2, '123', '123', '1', '123@gmail.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Goods`
--
ALTER TABLE `Goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Goods`
--
ALTER TABLE `Goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `User`
--
ALTER TABLE `User`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
