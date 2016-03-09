-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 16 2015 г., 23:07
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `cat_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `cat_id`) VALUES
(8, 'Тестовые приложения', 'tests'),
(9, 'Игры', 'games'),
(10, 'Средства автоматизации бизнеса', 'aut_buis'),
(11, 'Автоматизированные информационные системы', 'ais');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `news`, `date`) VALUES
(1, 'Сегодня прошел первый тестовый запуск нашего интернет-магазина!', '2014-03-31'),
(2, 'Попытка смены шрифтов и вывод на экран всех записей.', '2014-04-02'),
(3, 'Сегодня была создана корзина и проверена её работоспособность.', '2014-04-06'),
(4, 'В нашем магазине появились новые товары.', '2015-04-15'),
(5, 'Сегодня на сайте были проведены последние доработки и теперь он готов к презентации.', '2015-04-16');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) DEFAULT NULL,
  `prod` varchar(100) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `post_index` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image` varchar(100) NOT NULL,
  `cat` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `image`, `cat`) VALUES
(28, 'Электронная таблица', 'Автоматизация учета сделок с недвижимостью реализованная при помощи средств Microsoft Excel 2013. ', '990.00', 'ais.jpg', 'ais'),
(25, 'Тестовая оболочка "Экономика"', 'Тестовая оболочка на тему "Экономика", состоящая из 20 вопросов с выбором правильного ответа.', '1199.00', 'test.jpg', 'tests'),
(26, 'Игра "BlackJack"', 'Игровое приложение, в основу которого легла популярная карточная игра "BlackJack". Состоит из двух форм: первая - главная, на которой и происходит весь игровой процесс; вторая - форма с правилами и описанием игры.', '1499.00', 'mbj.jpg', 'games'),
(27, 'CRM - система', 'CRM - система, реализованная при помощи Microsoft Access 2013, и предназначенная для автоматизации ведения бизнеса. Данная система имеет широкий функционал: ведение учета клиентов, товаров, документов, сотрудников, а также их изменение, либо добавление новых.', '2990.00', 'crm.jpg', 'aut_buis');

-- --------------------------------------------------------

--
-- Структура таблицы `products1`
--

CREATE TABLE IF NOT EXISTS `products1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `post_index` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
