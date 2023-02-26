-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 26 2023 г., 16:50
-- Версия сервера: 5.7.33-log
-- Версия PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dashboard`
--

-- --------------------------------------------------------

--
-- Структура таблицы `action`
--

CREATE TABLE `action` (
  `id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `action`
--

INSERT INTO `action` (`id`, `path`) VALUES
(36, 'system/action/create'),
(35, 'system/action/index'),
(38, 'system/action/update'),
(37, 'system/action/view'),
(25, 'system/api/menu/index'),
(26, 'system/api/menu/sort-completed'),
(24, 'system/api/user/permission'),
(34, 'system/default/index'),
(7, 'system/menu/create'),
(8, 'system/menu/delete'),
(1, 'system/menu/index'),
(9, 'system/menu/update'),
(32, 'system/menu/view'),
(6, 'system/modify-log/index'),
(28, 'system/notification-type/create'),
(31, 'system/notification-type/delete'),
(27, 'system/notification-type/index'),
(30, 'system/notification-type/update'),
(29, 'system/notification-type/view'),
(4, 'system/role/create'),
(3, 'system/role/index'),
(22, 'system/user/create'),
(33, 'system/user/delete'),
(2, 'system/user/index'),
(20, 'system/user/permissions'),
(5, 'system/user/view'),
(19, 'system/yii-message/create'),
(17, 'system/yii-message/delete'),
(14, 'system/yii-message/index'),
(16, 'system/yii-message/update'),
(15, 'system/yii-message/view'),
(13, 'system/yii-source-message/create'),
(23, 'system/yii-source-message/delete'),
(10, 'system/yii-source-message/index'),
(11, 'system/yii-source-message/update'),
(12, 'system/yii-source-message/view');

-- --------------------------------------------------------

--
-- Структура таблицы `action_user`
--

CREATE TABLE `action_user` (
  `id` int(11) NOT NULL,
  `action_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `action_user`
--

INSERT INTO `action_user` (`id`, `action_id`, `user_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 1),
(15, 15, 1),
(16, 16, 1),
(17, 17, 1),
(20, 20, 1),
(22, 19, 1),
(23, 22, 1),
(46, 23, 1),
(48, 24, 1),
(50, 25, 1),
(53, 26, 1),
(54, 27, 1),
(55, 30, 1),
(56, 28, 1),
(57, 31, 1),
(58, 29, 1),
(59, 32, 1),
(60, 33, 1),
(92, 34, 1),
(93, 35, 1),
(94, 36, 1),
(95, 38, 1),
(96, 37, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(32) NOT NULL,
  `contact` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `user_id`, `type`, `contact`) VALUES
(5, 1, 'email', 'uzdevid@gmail.com'),
(6, 1, 'phone', '+998 (99) 326 1330');

-- --------------------------------------------------------

--
-- Структура таблицы `device`
--

CREATE TABLE `device` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `device_id` varchar(255) NOT NULL,
  `access_token` varchar(32) NOT NULL,
  `type` varchar(45) NOT NULL,
  `notification_token` varchar(255) DEFAULT NULL,
  `last_activity_time` int(11) NOT NULL,
  `auth_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `role_id`, `parent_id`, `icon`, `title`, `link`, `order`) VALUES
(1, NULL, NULL, 'bi bi-gear', 'System', '/system/default/index', 1),
(2, 1, 7, 'bi bi-circle', 'Menu', '/system/menu/index', 3),
(3, 1, 6, 'bi bi-circle', 'Modified models', '/system/modify-log', 11),
(4, NULL, 6, 'bi bi-circle', 'Users', '/system/user/index', 9),
(5, 1, 6, 'bi bi-circle', 'Roles', '/system/role', 10),
(6, 1, 1, 'bi bi-circle', 'Access', '/system/default/index', 7),
(7, 1, 1, 'bi bi-circle', 'Panel', '/system/default/index', 2),
(8, NULL, 7, 'bi bi-circle', 'Translations', '/system/yii-source-message/index', 4),
(9, NULL, 8, 'bi bi-circle', 'Yii Source Messages', '/system/yii-source-message/index', 5),
(10, NULL, 8, 'bi bi-circle', 'Yii Messages', '/system/yii-message/index', 6),
(11, 1, 1, 'bi bi-circle', 'Notification', '/system/default/index', 12),
(12, 1, 11, 'bi bi-circle', 'Notification Types', '/system/notification-type/index', 13),
(42, 1, 6, 'bi bi-circle', 'Actions', '/system/action/index', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `modify_log`
--

CREATE TABLE `modify_log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `model_id` int(11) NOT NULL,
  `attribute` varchar(255) NOT NULL,
  `value` longtext,
  `old_value` longtext,
  `modify_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `notification_type_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `arguments` json DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `send_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `notification_type`
--

CREATE TABLE `notification_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `behavior` varchar(255) NOT NULL DEFAULT 'default'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `notification_type_role`
--

CREATE TABLE `notification_type_role` (
  `id` int(11) NOT NULL,
  `notification_type_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'manager'),
(3, 'editor');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(32) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `language` char(2) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_activity_time` int(11) DEFAULT NULL,
  `last_update_time` int(11) NOT NULL,
  `create_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `user_id`, `email`, `surname`, `name`, `image`, `role_id`, `language`, `password`, `last_activity_time`, `last_update_time`, `create_time`) VALUES
(1, NULL, 'admin@dashboard.uzdevid.uz', 'Admin', 'Admin', NULL, 1, 'ru', '$2y$10$G8iSNXchFozUOfGmfl1yiuK4HEYT3.osqoaxckPbdHXEtNTl079FC', NULL, 1677408879, 1676990149);

-- --------------------------------------------------------

--
-- Структура таблицы `yii_message`
--

CREATE TABLE `yii_message` (
  `id` int(11) NOT NULL,
  `language` varchar(16) NOT NULL,
  `translation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `yii_message`
--

INSERT INTO `yii_message` (`id`, `language`, `translation`) VALUES
(4, 'ru', 'Удалить'),
(4, 'uz', 'O\'chirish'),
(5, 'ru', 'Сбросить'),
(5, 'uz', 'Yangilash'),
(6, 'ru', 'Сохранить'),
(6, 'uz', 'Saqlash'),
(7, 'ru', 'Поиск'),
(7, 'uz', 'Qidirish'),
(8, 'ru', 'Редактировать'),
(8, 'uz', 'Tahrirlash'),
(9, 'ru', 'Просмотр'),
(9, 'uz', 'Ko\'rish'),
(10, 'ru', '&copy; Copyright <strong><span>UzDevid</span></strong>. Все права защищены'),
(10, 'uz', '&copy; Copyright <strong><span>UzDevid</span></strong>. Barcha huquqlar himoyalangan'),
(11, 'ru', 'Powered by <a href=\"https://devid.uz/ru\" target=\"_blank\">UzDevid</a>'),
(11, 'uz', 'Powered by <a href=\"https://devid.uz\" target=\"_blank\">UzDevid</a>'),
(12, 'ru', 'У Вас новое сообщение от {sender.fullname}'),
(12, 'uz', 'Chatda yangi habar bor'),
(13, 'ru', 'Администратор'),
(14, 'ru', 'Менеджер'),
(15, 'ru', 'Реквизиты для доступа к панели управления'),
(16, 'ru', 'Вы зарегистрированы в панели управления'),
(17, 'ru', 'Используя пароль, и этот адрес электронной почты можете войти в свой профиль'),
(18, 'ru', 'Ваш пароль: {password}'),
(19, 'ru', 'Войти в панель управления'),
(20, 'ru', 'Редактор'),
(20, 'uz', 'Muharrir'),
(21, 'ru', 'Системные настройки'),
(22, 'ru', 'Панель'),
(23, 'ru', 'Меню'),
(24, 'ru', 'Локализация'),
(25, 'ru', 'Исходные сообщения'),
(26, 'ru', 'Переводы'),
(27, 'ru', 'Доступ'),
(28, 'ru', 'Пользователи'),
(29, 'ru', 'Роли'),
(30, 'ru', 'Лог изменения данных'),
(31, 'ru', 'Уведомления'),
(32, 'ru', 'Типы уведомлении'),
(33, 'ru', 'Создать пункт в меню'),
(34, 'ru', 'Удалить пункт из меню'),
(35, 'ru', 'Просмотр списка меню'),
(36, 'ru', 'Редактирование пунктов меню'),
(37, 'ru', 'Просмотр редактировании таблиц базы данных'),
(39, 'ru', 'Создание новой роли'),
(40, 'ru', 'Просмотр списка ролей'),
(41, 'ru', 'Регистрация нового пользователя'),
(42, 'ru', 'Просмотр списка всех пользователей панели управления'),
(43, 'ru', 'Просмотр и редактирование доступов всех пользователей'),
(44, 'ru', 'Просмотр данных пользователя'),
(45, 'ru', 'Создание переводов'),
(46, 'ru', 'Удаление переводов'),
(47, 'ru', 'Просмотр списки переводов'),
(48, 'ru', 'Редактирование переводов'),
(49, 'ru', 'Просмотр текста перевода'),
(50, 'ru', 'Создание исходного сообщения'),
(51, 'ru', 'Просмотр списка исходный сообщении'),
(52, 'ru', 'Редактирование исходного сообщения'),
(53, 'ru', 'Просмотр исходного сообщения'),
(54, 'ru', 'Удалить исходного сообщения'),
(55, 'ru', 'Редактирование доступов пользователей'),
(56, 'ru', 'Просмотр структуры меню'),
(57, 'ru', 'Редактирование структуры меню'),
(58, 'ru', 'Удаление типов уведомлении'),
(59, 'ru', 'Просмотр данных типа уведомлении'),
(60, 'ru', 'Просмотр списка типов уведомлении'),
(61, 'ru', 'Создать тип уведомлении'),
(62, 'ru', 'Редактирование типа уведомлении'),
(63, 'ru', 'Просмотр данных пункта меню'),
(64, 'ru', 'Удаление пользователя который регистрировал сам'),
(65, 'ru', 'Действия');

-- --------------------------------------------------------

--
-- Структура таблицы `yii_source_message`
--

CREATE TABLE `yii_source_message` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `yii_source_message`
--

INSERT INTO `yii_source_message` (`id`, `category`, `message`) VALUES
(4, 'system.crud', 'Delete'),
(5, 'system.crud', 'Reset'),
(6, 'system.crud', 'Save'),
(7, 'system.crud', 'Search'),
(8, 'system.crud', 'Update'),
(9, 'system.crud', 'View'),
(10, 'system.content', '&copy; Copyright <strong><span>UzDevid</span></strong>. All Rights Reserved'),
(11, 'system.content', 'Powered by <a href=\"https://devid.uz\" target=\"_blank\">UzDevid</a>'),
(12, 'system.notification', 'chat.new_message'),
(13, 'system.role', 'admin'),
(14, 'system.role', 'manager'),
(15, 'system.email', 'Details for accessing the control panel'),
(16, 'system.email', 'You have been registered in the control panel'),
(17, 'system.email', 'Using a password and this email can go to your profile'),
(18, 'system.email', 'Your password: {password}'),
(19, 'system.email', 'Login to control panel'),
(20, 'system.role', 'editor'),
(21, 'system.menu', 'System'),
(22, 'system.menu', 'Panel'),
(23, 'system.menu', 'Menu'),
(24, 'system.menu', 'Translations'),
(25, 'system.menu', 'Yii Source Messages'),
(26, 'system.menu', 'Yii Messages'),
(27, 'system.menu', 'Access'),
(28, 'system.menu', 'Users'),
(29, 'system.menu', 'Roles'),
(30, 'system.menu', 'Modified models'),
(31, 'system.menu', 'Notification'),
(32, 'system.menu', 'Notification Types'),
(33, 'system.action', 'system/menu/create'),
(34, 'system.action', 'system/menu/delete'),
(35, 'system.action', 'system/menu/index'),
(36, 'system.action', 'system/menu/update'),
(37, 'system.action', 'system/modify-log/index'),
(39, 'system.action', 'system/role/create'),
(40, 'system.action', 'system/role/index'),
(41, 'system.action', 'system/user/create'),
(42, 'system.action', 'system/user/index'),
(43, 'system.action', 'system/user/permissions'),
(44, 'system.action', 'system/user/view'),
(45, 'system.action', 'system/yii-message/create'),
(46, 'system.action', 'system/yii-message/delete'),
(47, 'system.action', 'system/yii-message/index'),
(48, 'system.action', 'system/yii-message/update'),
(49, 'system.action', 'system/yii-message/view'),
(50, 'system.action', 'system/yii-source-message/create'),
(51, 'system.action', 'system/yii-source-message/index'),
(52, 'system.action', 'system/yii-source-message/update'),
(53, 'system.action', 'system/yii-source-message/view'),
(54, 'system.action', 'system/yii-source-message/delete'),
(55, 'system.action', 'system/api/user/permission'),
(56, 'system.action', 'system/api/menu/index'),
(57, 'system.action', 'system/api/menu/sort-completed'),
(58, 'system.action', 'system/notification-type/delete'),
(59, 'system.action', 'system/notification-type/view'),
(60, 'system.action', 'system/notification-type/index'),
(61, 'system.action', 'system/notification-type/create'),
(62, 'system.action', 'system/notification-type/update'),
(63, 'system.action', 'system/menu/view'),
(64, 'system.action', 'system/user/delete'),
(65, 'system.menu', 'Actions');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `path_UNIQUE` (`path`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `action_user`
--
ALTER TABLE `action_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_action_user_action_id_idx` (`action_id`),
  ADD KEY `fk_action_user_user_id_idx` (`user_id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_contact_user_id_idx` (`user_id`);

--
-- Индексы таблицы `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_device_user_id_idx` (`user_id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_menu_parent_id_idx` (`parent_id`),
  ADD KEY `fk_menu_role_id_idx` (`role_id`);

--
-- Индексы таблицы `modify_log`
--
ALTER TABLE `modify_log`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_modify_log_user_id_idx` (`user_id`);

--
-- Индексы таблицы `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_notification_notification_type_id_idx` (`notification_type_id`),
  ADD KEY `fk_notification_user_id_idx` (`user_id`);

--
-- Индексы таблицы `notification_type`
--
ALTER TABLE `notification_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `notification_type_role`
--
ALTER TABLE `notification_type_role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_notification_type_role_notification_type_id_idx` (`notification_type_id`),
  ADD KEY `fk_notification_type_role_role_id_idx` (`role_id`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_user_role_id_idx` (`role_id`);

--
-- Индексы таблицы `yii_message`
--
ALTER TABLE `yii_message`
  ADD PRIMARY KEY (`id`,`language`);

--
-- Индексы таблицы `yii_source_message`
--
ALTER TABLE `yii_source_message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `action`
--
ALTER TABLE `action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `action_user`
--
ALTER TABLE `action_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `device`
--
ALTER TABLE `device`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `modify_log`
--
ALTER TABLE `modify_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `notification_type`
--
ALTER TABLE `notification_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `notification_type_role`
--
ALTER TABLE `notification_type_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `yii_source_message`
--
ALTER TABLE `yii_source_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `action_user`
--
ALTER TABLE `action_user`
  ADD CONSTRAINT `fk_action_user_action_id` FOREIGN KEY (`action_id`) REFERENCES `action` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_action_user_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `fk_contact_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `device`
--
ALTER TABLE `device`
  ADD CONSTRAINT `fk_device_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `fk_menu_parent_id` FOREIGN KEY (`parent_id`) REFERENCES `menu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_menu_role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `modify_log`
--
ALTER TABLE `modify_log`
  ADD CONSTRAINT `fk_modify_log_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `fk_notification_notification_type_id` FOREIGN KEY (`notification_type_id`) REFERENCES `notification_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_notification_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `notification_type_role`
--
ALTER TABLE `notification_type_role`
  ADD CONSTRAINT `fk_notification_type_role_notification_type_id` FOREIGN KEY (`notification_type_id`) REFERENCES `notification_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_notification_type_role_role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `yii_message`
--
ALTER TABLE `yii_message`
  ADD CONSTRAINT `pk_yii_message_language` FOREIGN KEY (`id`) REFERENCES `yii_source_message` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
