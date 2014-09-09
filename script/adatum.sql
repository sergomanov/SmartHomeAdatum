-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Авг 13 2014 г., 19:45
-- Версия сервера: 5.5.37-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `adatum`
--

-- --------------------------------------------------------

--
-- Структура таблицы `commands`
--

CREATE TABLE IF NOT EXISTS `commands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `mode` text NOT NULL,
  `address` text NOT NULL,
  `vale1` text NOT NULL,
  `vale2` text NOT NULL,
  `vale3` text NOT NULL,
  `vale4` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `laststate` int(11) NOT NULL,
  `unixtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=986 ;

--
-- Дамп данных таблицы `commands`
--

INSERT INTO `commands` (`id`, `name`, `mode`, `address`, `vale1`, `vale2`, `vale3`, `vale4`, `date`, `time`, `laststate`, `unixtime`) VALUES
(7, 'Пульт верхняя кнопка', 'RF', 'T6DNAE0S', '2683970', '24', '293', '0', '2014-07-29', '08:57:13', 0, 1406653033),
(8, 'Емайл', 'EML', '0', 'sergomanov@mail.ru', 'Привет', 'Температура превышенна', '0', '0000-00-00', '00:00:00', 0, 0),
(969, 'Включить сигнализацию', 'ACT', 'T6DNAE0S', '54', '1', '', '', '0000-00-00', '00:00:00', 0, 0),
(970, 'Пульт нижняя кнопка', 'RF', 'T6DNAE0S', '2683969', '24', '291', '0', '2014-07-29', '08:51:57', 293, 1406652717),
(973, 'Звук', 'MU', 'T6DNAE0S', '1500', '1000', '', '', '0000-00-00', '00:00:00', 0, 0),
(977, 'Датчик влажности', 'HUM', 'T6DNAE0S', '52', '', '', '1', '0000-00-00', '00:00:00', 0, 0),
(978, 'key31', 'KEY', 'EQOX293J', '3', '1', '', '', '2014-08-01', '00:00:00', 0, 0),
(979, 'key30', 'KEY', 'EQOX293J', '3', '0', '', '', '2014-08-01', '00:00:00', 0, 0),
(980, 'Запрос', 'QA', 'T6DNAE0S', '', '', '', '', '0000-00-00', '00:00:00', 0, 0),
(981, 'key40', 'KEY', 'EQOX293J', '4', '0', '', '', '2014-08-01', '00:00:00', 0, 0),
(982, 'key41', 'KEY', 'EQOX293J', '4', '1', '20', '', '2014-08-01', '10:00:00', 1, 1406653355),
(983, 'Включить телевизор', 'IR', 'T6DNAE0S', 'PAN', '16825533', '16388', '', '2014-07-29', '09:02:35', 16388, 1406653355),
(984, 'мигаем', 'LED', 'T6DNAE0S', '100', '10', '', '', '0000-00-00', '00:00:00', 0, 0),
(985, 'СМС', 'SMS', '0', '79230000000', 'ЛО ЛО', '', '', '0000-00-00', '00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `state` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Дамп данных таблицы `data`
--

INSERT INTO `data` (`id`, `name`, `state`) VALUES
(1, 'Viewtable', '0'),
(2, 'id site', '29862'),
(3, 'modsystem', '1408013106'),
(4, 'timezone', '28800'),
(5, 'namedev', 'ch341-uart'),
(7, 'mailaddressserver', 'smtp.mail.ru'),
(8, 'mailportserver', '25'),
(9, 'maillogin', 'sergomanov'),
(10, 'mailpwd', ''),
(11, 'mailfrom', 'sergomanov@mail.ru'),
(12, 'modmain', '1408013110'),
(13, 'modsms', '1408013110'),
(14, 'modmail', '1408013110'),
(15, 'Quality of communication', '67'),
(16, 'commands', '0'),
(17, 'namemodem', 'GSM modem'),
(18, 'smscentr', ''),
(19, 'prefix com port', 'ttyUSB'),
(20, 'conectdev', 'ch341-uart converter -> ttyUSB0<br>GSM modem (1-port) converter -> ttyUSB1<br>GSM modem (1-port) converter -> ttyUSB2<br>GSM modem (1-port) converter -> ttyUSB3<br>');

-- --------------------------------------------------------

--
-- Структура таблицы `developments`
--

CREATE TABLE IF NOT EXISTS `developments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mode` text NOT NULL,
  `vale1` text NOT NULL,
  `vale2` text NOT NULL,
  `vale3` int(11) NOT NULL,
  `vale4` text NOT NULL,
  `address` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `unixtime` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `start`, `end`, `type`) VALUES
(7, '1970-01-01 02:00:00', '1970-01-01 02:00:00', ''),
(8, '2013-05-04 09:00:00', '2012-07-07 17:00:00', 'Командировка'),
(9, '2012-07-16 18:00:00', '2012-07-16 18:00:00', 'Звонок'),
(10, '2012-07-26 09:00:00', '2012-07-26 14:00:00', 'Конференция'),
(11, '2012-07-19 04:00:00', '2012-07-22 04:00:00', 'Дедлайн'),
(12, '2012-08-02 00:00:00', '2012-08-23 09:00:00', 'Отпуск'),
(13, '2012-07-10 08:00:00', '2012-07-10 00:00:00', 'Встреча'),
(15, '2014-06-11 00:00:00', '2014-06-11 00:00:00', '5'),
(16, '2014-06-04 00:00:00', '2014-06-04 00:00:00', '67867'),
(19, '2014-07-07 14:00:00', '1969-12-31 16:00:00', ''),
(20, '2014-07-08 00:00:00', '2014-07-17 00:00:00', '565675');

-- --------------------------------------------------------

--
-- Структура таблицы `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cont` text NOT NULL,
  `stat` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- Дамп данных таблицы `logs`
--

INSERT INTO `logs` (`id`, `cont`, `stat`, `date`, `time`) VALUES
(44, 'Успешный вход в систему.  (admin)', 1, '2014-08-13', '09:31:05'),
(45, 'Успешный вход в систему.  (admin)', 1, '2014-08-14', '10:42:52');

-- --------------------------------------------------------

--
-- Структура таблицы `namedev`
--

CREATE TABLE IF NOT EXISTS `namedev` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` text NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `namedev`
--

INSERT INTO `namedev` (`id`, `address`, `name`) VALUES
(3, 'T6DNAE0S', 'Установка в зале'),
(4, '0', 'Контроллер'),
(5, 'EQOX293J', 'Переключатель');

-- --------------------------------------------------------

--
-- Структура таблицы `run`
--

CREATE TABLE IF NOT EXISTS `run` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mode` text NOT NULL,
  `address` text NOT NULL,
  `vale1` text NOT NULL,
  `vale2` text NOT NULL,
  `vale` text NOT NULL,
  `unixtime` int(11) NOT NULL,
  `run` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `scheduler`
--

CREATE TABLE IF NOT EXISTS `scheduler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `switch` int(11) NOT NULL,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `weekdays` text NOT NULL,
  `monthdays` text NOT NULL,
  `month` text NOT NULL,
  `timer` text NOT NULL,
  `datein` text NOT NULL,
  `dateout` text NOT NULL,
  `timein` text NOT NULL,
  `timeout` text NOT NULL,
  `conditions` text NOT NULL,
  `commands` text NOT NULL,
  `run` int(11) NOT NULL,
  `timerun` int(11) NOT NULL,
  `dir` text NOT NULL,
  `img` text NOT NULL,
  `drivers` text NOT NULL,
  `mode` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=81 ;

--
-- Дамп данных таблицы `scheduler`
--

INSERT INTO `scheduler` (`id`, `switch`, `name`, `type`, `date`, `time`, `weekdays`, `monthdays`, `month`, `timer`, `datein`, `dateout`, `timein`, `timeout`, `conditions`, `commands`, `run`, `timerun`, `dir`, `img`, `drivers`, `mode`) VALUES
(5, 0, 'Ежедневно', '5', '', '14:16:51', '', '', '', '', '', '', '', '', '', '', 0, 1404486491, '0', '', '', '0'),
(6, 0, 'Еженедельно', '6', '', '13:10:51', '1,4', '', '', '', '', '', '', '', '', '7', 0, 1404479452, '0', '', '', '0'),
(7, 0, 'Ежемесячно', '7', '', '12:10:51', '', '1,4', '', '', '', '', '', '', '', '', 0, 1404216652, '0', '', '', '0'),
(8, 0, 'Ежегодно', '8', '', '10:10:51', '', '1,11', '7', '', '', '', '', '', '', '', 0, 1403108912, '0', '', '', '0'),
(46, 0, 'Зал', '9', '', '', '', '', '', '', '', '', '', '', '', '', 0, 1403106603, '', '/image/tv.png', '3', '1,2,3,7'),
(63, 0, 'По сигналу ', '4', '', '', '', '', '', '', '2014-07-16', '2014-07-20', '22:10:51', '22:10:51', '7', '7', 0, 1404994427, '', '', '', '0'),
(67, 0, 'Включить 3', '3', '', '', '', '', '', '', '', '', '', '', '', '978', 0, 0, '46', '/css/load.png', '3', '1,2,3,7'),
(68, 0, 'Выключить 3', '3', '', '', '', '', '', '', '', '', '', '', '', '979', 0, 0, '46', '/image/ico_remove/11.png', '', ''),
(70, 1, 'Опрос датчиков', '1', '', '', '', '', '', '1', '2014-07-21', '2014-08-31', '00:00:00', '00:00:00', '', '980', 0, 1408013065, '', '', '', ''),
(73, 0, 'мигаем', '3', '', '', '', '', '', '', '', '', '', '', '', '984', 0, 0, '46', '/image/ico_remove/1.png', '3', ''),
(74, 0, 'смс', '3', '', '', '', '', '', '', '', '', '', '', '978', '985', 0, 0, '46', '/image/ico_remove/1.png', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `id_user` int(5) NOT NULL,
  `code_sess` varchar(15) NOT NULL,
  `user_agent_sess` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `session`
--

INSERT INTO `session` (`id_user`, `code_sess`, `user_agent_sess`) VALUES
(1, 'nxqkKfqtGfO2iE0', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.153 Safari/537.36'),
(6, 'csdRkzgMDLA5aAx', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36'),
(7, 'GBdSL2YcAjXbSCO', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36');

-- --------------------------------------------------------

--
-- Структура таблицы `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mode` text NOT NULL,
  `name` text NOT NULL,
  `namevalue1` text NOT NULL,
  `namevalue2` text NOT NULL,
  `namevalue3` text NOT NULL,
  `namevalue4` text NOT NULL,
  `type` int(11) NOT NULL,
  `ico` text NOT NULL,
  `symbol` text NOT NULL,
  `regim` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Дамп данных таблицы `type`
--

INSERT INTO `type` (`id`, `mode`, `name`, `namevalue1`, `namevalue2`, `namevalue3`, `namevalue4`, `type`, `ico`, `symbol`, `regim`) VALUES
(1, 'LUM', 'Освещённость', 'Овещённость', '', '', '', 1, 'icon-desklamp', '', 1),
(2, 'TEM', 'Температура', 'Температура', '', '', '', 1, 'icon-temperature-thermometer', 'С&deg;', 1),
(3, 'HUM', 'Влажность', 'Влажность', '', '', '', 1, 'icon-watertap-plumbing', '%', 1),
(4, 'EML', 'Отправка E-mail сообщ', 'Адрес E-mail', 'Заголовок письма', 'Текст письма', '', 3, 'icon-emailalt', '', 2),
(5, 'RF', 'Радиомодуль 315Мгц.', 'Код устройства', 'Частота шины', 'Длительность сигнала', '', 3, 'icon-networksignal', '', 0),
(6, 'MU', 'Звуковой сигнал', 'Частота сигнала', 'Длительность', '', '', 2, 'icon-bullhorn', '', 3),
(7, 'BEEP', 'Уровень шума', 'Уровень шума', '', '', '', 1, 'icon-music', '', 1),
(8, 'IR', 'ИК Пульт', 'Производитель', 'Код устройства', 'Частота шины', '', 3, 'icon-keyboard', '', 0),
(9, 'ACT', 'Активация правил', 'Номер правила', 'Состояние правила', '', '', 2, 'icon-pullrequest', '', 2),
(10, 'KEY', 'Нажатие кнопки', 'Номер реле', 'Состояние устройства', 'Длительность ', '', 3, 'icon-switch', '', 0),
(11, 'SEND', 'Подтверждение отправки', '', '', '', '', 4, 'icon-fastdown', '', 1),
(12, 'TST', 'Опрос устройств', '', '', '', '', 4, ' icon-info-sign', '', 0),
(13, 'QA', 'Запрос параметров', '', '', '', '', 4, 'icon-intersection', '', 3),
(14, 'SMS', 'Короткое текстовое сообщ.', 'Номер телефона', 'Текст сообщения', '', '', 2, 'icon-mobile', '', 2),
(15, 'RING', 'Телефонный звонок', 'Номер телефона', '', '', '', 1, 'icon-phoneold', '', 2),
(16, 'LED', 'Световая сигнализация', 'Длительность(милсек)', 'Количество', '', '', 2, 'icon-brightnessaltauto', '', 3),
(17, 'iBN', 'iButton ключ', 'Тип ключа', 'Код устройства', '', '', 2, 'icon-authentication-keyalt', '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `login_user` varchar(60) NOT NULL,
  `passwd_user` varchar(255) NOT NULL,
  `mail_user` varchar(255) NOT NULL,
  `rule1` int(11) NOT NULL,
  `rule2` int(11) NOT NULL,
  `rule3` int(11) NOT NULL,
  `rule4` int(11) NOT NULL,
  `rule5` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `login_user`, `passwd_user`, `mail_user`, `rule1`, `rule2`, `rule3`, `rule4`, `rule5`) VALUES
(7, '111', 'c4dfdb087f90354a830b0d9aaf9ace57', 'se232@m.ru', 0, 0, 0, 1, 0),
(6, 'admin', 'dc54f76eca770c1266f6f1f9387cb0b5', 'mail@mail.ru', 1, 1, 1, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
