-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 26 2020 г., 15:35
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `14.10`
--

-- --------------------------------------------------------

--
-- Структура таблицы `anchors`
--

CREATE TABLE `anchors` (
  `id` int(6) UNSIGNED NOT NULL,
  `color` varchar(30) NOT NULL,
  `path` varchar(255) NOT NULL,
  `content` varchar(50) NOT NULL,
  `ordera` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `anchors`
--

INSERT INTO `anchors` (`id`, `color`, `path`, `content`, `ordera`) VALUES
(1, 'white', 'http://localhost/pj_1_travel/index.php', 'Главная', 5),
(2, 'red', 'http://localhost/pj_1_travel/index.php#ao', 'О нас', 10),
(3, 'green', 'http://localhost/pj_1_travel/index.php#contacts', 'Контакты', 15),
(4, 'blue', 'admin/admin.html', 'Админка', 20);

-- --------------------------------------------------------

--
-- Структура таблицы `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `header` varchar(100) NOT NULL,
  `parag` text NOT NULL,
  `ordera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cards`
--

INSERT INTO `cards` (`id`, `img`, `header`, `parag`, `ordera`) VALUES
(1, 'card__moscow', 'Путешествия по России', 'Медведи, матрешки, балалайки', 5),
(2, 'card__london', 'Путешествия по Европе', 'Разные страны - разные культуры', 10),
(3, 'card__africa', 'Путешествия по Африке', 'Классные сафари, величественные львы и бескрайние саванны', 15),
(4, 'card__north', 'Путешествия по Северной Америке', 'Новый свет своими глазами', 20),
(5, 'card__south', 'Путешествия по Южной Америке', 'Южная Америка ждет нас! И там куда безопаснее, чем в фильмах', 25),
(6, 'card__australia', 'Путешествия по Австралии', 'Посмотри на мир вниз головой', 30);

-- --------------------------------------------------------

--
-- Структура таблицы `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `quest` varchar(100) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `ordera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `faq`
--

INSERT INTO `faq` (`id`, `quest`, `answer`, `ordera`) VALUES
(1, 'Сколько за тур?', 'Недорого. В дороге накормим.', 5),
(2, 'Сколько стоит виза?', 'Зачем виза, мы так провезем.', 10),
(3, 'Можно ли полетать на воздушном шаре?', 'Можно, но недолго.', 15);

-- --------------------------------------------------------

--
-- Структура таблицы `headers`
--

CREATE TABLE `headers` (
  `id` int(11) NOT NULL,
  `content` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `headers`
--

INSERT INTO `headers` (`id`, `content`) VALUES
(1, 'Путешествуй красиво! Блог в фотографиях'),
(2, 'Причины воспользоваться нашими турами');

-- --------------------------------------------------------

--
-- Структура таблицы `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `content` varchar(600) NOT NULL,
  `ordera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `info`
--

INSERT INTO `info` (`id`, `content`, `ordera`) VALUES
(1, 'Для современного мира социально-экономическое развитие требует анализа укрепления демократической системы. Задача организации, в особенности же курс на социально-ориентированный национальный проект обеспечивает широкому кругу специалистов поэтапного и последовательного развития общества. Повседневная практика показывает, что рамки и место обучения кадров проверки влечёт за собой интересный процесс внедрения модернизации соответствующих условий активизации.', 5),
(2, 'Повседневная практика показывает, что выбранный нами инновационный путь проверки влечёт за собой интересный процесс внедрения модернизации укрепления демократической системы. Повседневная практика показывает, что социально-экономическое развитие играет важную роль в формировании системы обучения кадров, соответствующей насущным потребностям. Равным образом постоянный количественный рост и сфера нашей активности требует определения и уточнения модели развития.', 10),
(3, 'Разнообразный и богатый опыт управление и развитие структуры обеспечивает широкому кругу специалистов модели развития. Разнообразный и богатый опыт высокотехнологичная концепция общественной системы позволяет оценить значение представляет собой интересный эксперимент систему массового участия. Равным образом сложившаяся структура организации способствует подготовке и реализации соответствующих условий активизации.', 15),
(4, 'Повседневная практика показывает, что начало повседневной работы по формированию позиции обеспечивает актуальность поэтапного и последовательного развития общества.', 20);

-- --------------------------------------------------------

--
-- Структура таблицы `keywords`
--

CREATE TABLE `keywords` (
  `id` int(11) NOT NULL,
  `keyword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `keywords`
--

INSERT INTO `keywords` (`id`, `keyword`) VALUES
(1, '\'Путешествия'),
(2, 'Путевки_в_Турцию'),
(3, 'Мальдивы'),
(4, 'Финляндия'),
(5, 'Корфу'),
(6, 'Швеция\'');

-- --------------------------------------------------------

--
-- Структура таблицы `li_info`
--

CREATE TABLE `li_info` (
  `id` int(11) NOT NULL,
  `content` varchar(30) NOT NULL,
  `ordera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `li_info`
--

INSERT INTO `li_info` (`id`, `content`, `ordera`) VALUES
(1, 'Задорные аниматоры', 5),
(2, 'Просторные номера', 10),
(3, 'Комфортные самолеты', 15),
(4, 'Мягкий песок на пляже', 20);

-- --------------------------------------------------------

--
-- Структура таблицы `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `content` varchar(50) NOT NULL,
  `ordera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `places`
--

INSERT INTO `places` (`id`, `content`, `ordera`) VALUES
(1, 'Путешествия по Украине', 5),
(2, 'Путешествия по Китаю', 10),
(3, 'Путешествия по Финляндии', 15),
(4, 'Путешествия по Норвегии', 20),
(5, 'Путешествия по Швеции', 25);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `anchors`
--
ALTER TABLE `anchors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `li_info`
--
ALTER TABLE `li_info`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `anchors`
--
ALTER TABLE `anchors`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `headers`
--
ALTER TABLE `headers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `li_info`
--
ALTER TABLE `li_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
