-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 01 2020 г., 23:30
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
(1, 'white', 'http://localhost/pj_1_travel/', 'Главная', 5),
(2, 'white', 'http://localhost/pj_1_travel/index.php#ao', 'О нас', 10),
(3, 'white', 'http://localhost/pj_1_travel/index.php#contacts', 'Контакты', 15),
(4, '#c7ede6', '/admin', 'Админка', 20),
(7, 'red', '/reg', 'Регистрация', 25),
(8, 'red', '/auth', 'Логин', 30);

-- --------------------------------------------------------

--
-- Структура таблицы `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `header` varchar(100) NOT NULL,
  `parag` int(11) NOT NULL,
  `ordera` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cards`
--

INSERT INTO `cards` (`id`, `img`, `header`, `parag`, `ordera`, `date`) VALUES
(10, 'img/upload_img/5e3b0e42d8f22kangaroo.png', 'Путешествия по России!', 500, 11, '0000-00-00'),
(17, 'img/upload_img/5e54068221cbbpyramids.png', 'Путешествия по Европе!', 2000, 15, '0000-00-00'),
(19, 'img/upload_img/5e5407d2b04a8north-america.png', 'Путешествия по Южной Америке!', 1000, 20, '0000-00-00'),
(20, 'img/upload_img/5e5bea4918fb5', 'Путешествия по  Африке!', 1100, 25, '2020-02-26'),
(21, 'img/upload_img/5e5bf1c6b9006moscow.png', 'Берлин', 1500, 1, '2020-03-01');

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
(2, 'Повседневная практика показывает, что выбранный нами инновационный путь проверки влечёт за собой интересный процесс внедрения модернизации укрепления демократической системы. Повседневная практика показывает, что социально-экономическое развитие играет важную роль в формировании системы обучения кадров, соответствующей насущным потребностям. Равным образом постоянный количественный рост и сфера нашей активности требует определения и уточнения модели развития.', 10),
(3, 'Разнообразный и богатый опыт высокотехнологичная концепция общественной системы позволяет оценить значение представляет собой интересный эксперимент систему массового участия. Равным образом сложившаяся структура организации способствует подготовке и реализации соответствующих условий активизации.', 15),
(4, 'Повседневная практика показывает, что начало повседневной работы по формированию позиции обеспечивает актуальность поэтапного и последовательного развития общества.', 20),
(106, 'asfdgfsdhgjkh', 25);

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

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `date`) VALUES
(8, 'Qwerty', 'qwerty@q.q', '77aae185203edc6357676db95caa25d0f398d402c1723e6a7b42cfe8d2967f2e', '0000-00-00'),
(9, 'Qqq', 'qqq@qq.q', '77aae185203edc6357676db95caa25d0f398d402c1723e6a7b42cfe8d2967f2e', '0000-00-00'),
(10, 'name', 'name@name.n', 'cdaccaa1d5864d6c5cf0cda37ddb06bfc340fb0624479012a3bd4df768aa4085', '0000-00-00'),
(11, 'Newser', 'newswe@new.new', '506612c95ea7433ea7b76e3fbb62db77c140550386ac0c87975508a876f2bc0e', '2020-02-24');

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
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `anchors`
--
ALTER TABLE `anchors`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

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

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
