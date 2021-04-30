-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2021 a las 21:39:12
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ava_educacion`
--
CREATE DATABASE IF NOT EXISTS `ava_educacion` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ava_educacion`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mate`
--

CREATE TABLE `mate` (
  `user_Id` int(10) NOT NULL,
  `Fecha` datetime(6) NOT NULL,
  `Duda` text NOT NULL,
  `Usuario` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mate`
--

INSERT INTO `mate` (`user_Id`, `Fecha`, `Duda`, `Usuario`) VALUES
(20, '0000-00-00 00:00:00.000000', 'preuba de fecha y duda', 0),
(21, '0000-00-00 00:00:00.000000', 'preuba de fecha y duda', 0),
(22, '0000-00-00 00:00:00.000000', 'preuba de fecha y duda', 0),
(23, '0000-00-00 00:00:00.000000', 'preuba de fecha y duda', 0),
(24, '0000-00-00 00:00:00.000000', 'preuba de fecha y duda', 0),
(25, '0000-00-00 00:00:00.000000', '', 0),
(26, '0000-00-00 00:00:00.000000', 'tengo dudas de matematicas', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mate`
--
ALTER TABLE `mate`
  ADD PRIMARY KEY (`user_Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mate`
--
ALTER TABLE `mate`
  MODIFY `user_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- Base de datos: `casaypunto`
--
CREATE DATABASE IF NOT EXISTS `casaypunto` DEFAULT CHARACTER SET utf32 COLLATE utf32_spanish_ci;
USE `casaypunto`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion`
--

CREATE TABLE `descripcion` (
  `Id_descripcion` int(5) NOT NULL,
  `superficie_T` int(8) NOT NULL,
  `superficie_C` int(8) NOT NULL,
  `recamaras` int(5) NOT NULL,
  `wc` int(5) NOT NULL,
  `estacionamiento` int(3) NOT NULL,
  `inmueble_Id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `descripcion`
--

INSERT INTO `descripcion` (`Id_descripcion`, `superficie_T`, `superficie_C`, `recamaras`, `wc`, `estacionamiento`, `inmueble_Id`) VALUES
(1, 55, 55, 5, 3, 3, 1),
(2, 55, 55, 5, 3, 3, 2),
(3, 55, 55, 5, 3, 3, 3),
(4, 55, 55, 4, 3, 3, 4),
(5, 55, 55, 4, 3, 3, 5),
(6, 0, 0, 1, 1, 1, 6),
(7, 0, 0, 1, 1, 1, 7),
(8, 55, 55, 3, 0, 0, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gps`
--

CREATE TABLE `gps` (
  `Id_loc` int(5) NOT NULL,
  `Estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Municipio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Colonia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `calle` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `exterior` int(5) NOT NULL,
  `interior` int(5) NOT NULL,
  `coment` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `inmueble_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `gps`
--

INSERT INTO `gps` (`Id_loc`, `Estado`, `Municipio`, `Colonia`, `calle`, `exterior`, `interior`, `coment`, `date`, `inmueble_id`) VALUES
(1, 'México', 'Nezahualcoyotl', 'Campestre', '23', 44, 2, 'puerta negra', '2021-04-17 17:30:48', 1),
(2, '', '', '', '', 0, 0, '', '2021-04-17 17:46:36', 3),
(3, 'OAXACA', 'ETLA', 'NAZARENO', 'DEL POSO', 123, 243, 'Con arboles en la entrada', '2021-04-17 17:50:48', 4),
(4, 'OAXACA', 'ETLA', 'NAZARENO', 'DEL POSO', 123, 243, 'Con arboles en la entrada', '2021-04-17 18:02:54', 5),
(5, '', '', '', '', 0, 0, '', '2021-04-19 16:38:44', 6),
(6, '', '', '', '', 0, 0, '', '2021-04-19 16:39:04', 7),
(7, '', '', '', '', 0, 0, '', '2021-04-21 23:49:12', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `cod_imagen` int(11) NOT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`cod_imagen`, `imagen`, `nombre`) VALUES
(4, 'beautiful-panoramic-shot-of-new-york-city.jpg', 'Aldo'),
(5, 'beautiful-panoramic-shot-of-new-york-city.jpg', 'Aldo'),
(6, 'wide-road-with-buildings-on-either-side.jpg', 'CASAS y Punto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE `inmuebles` (
  `Id_inmuebles` int(5) NOT NULL,
  `clave` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `imagenes` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `inmuebles`
--

INSERT INTO `inmuebles` (`Id_inmuebles`, `clave`, `tipo`, `imagenes`, `nombre`, `date`) VALUES
(1, 'XCTSGMTDBL', 'Departamento', 'todos6.jpg', 'ALDO MENDEZ ANTONIO', '2021-04-17 17:25:54'),
(2, 'XCTSGMTDBL', 'Departamento', 'todos6.jpg', 'ALDO MENDEZ ANTONIO', '2021-04-17 17:30:48'),
(3, 'XCTSGMTDBL', 'Departamento', 'todos6.jpg', 'ALDO MENDEZ ANTONIO', '2021-04-17 17:46:36'),
(4, 'WYXHXHLQBJ', 'Casa', 'todos6.jpg', 'ALDO MENDEZ ANTONIO', '2021-04-17 17:50:48'),
(5, 'WYXHXHLQBJ', 'Casa', 'todos6.jpg', 'ALDO MENDEZ ANTONIO', '2021-04-17 18:02:54'),
(6, 'csdcsdcsdc', '', '', '', '2021-04-19 16:38:44'),
(7, 'csdcsdcsdc', '', '', '', '2021-04-19 16:39:04'),
(8, 'WYXHXHLQBJ', 'Departamento', 'live.png', '', '2021-04-21 23:49:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users2`
--

CREATE TABLE `users2` (
  `Id` int(4) NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `rfc` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `celular` int(10) NOT NULL,
  `telefono` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users2`
--

INSERT INTO `users2` (`Id`, `email`, `pass`, `nombre`, `apellidos`, `rfc`, `celular`, `telefono`) VALUES
(1, 'mendez_aldo@live.com.mx', '$2y$10$5Slj86Wkh3uCPYaAm81/9u.QtXSs0L6o1If0JRnE9NQ0fnXvHtAgW', 'Aldo', 'mendez', 'meaaa', 2147483647, 2147483647),
(2, 'aldo@gmail.com', '$2y$10$OtC5lNL41UIMz7.8Dx/B0OctT2OL7Kn0Cn4oQcQ6TsgQnfYB6L5Tq', 'aldo', 'mendez', 'meaaa', 2147483647, 2147483647),
(3, 'informes@casasypunto.mx', '$2y$10$NnfoO6IrN9A6Zmuf5juZI.OiDcLPuDEo3OzvZvGOnNx/iwL6mqzc2', 'aldo', 'mendez', 'meaaa', 2147483647, 2147483647),
(4, 'casasypuntooficial@gmail.com', '$2y$10$uLyhad/cxXl.YM/nnsJC/.rSN.De6SWRHlVmOPO2sIXUFP5.dVaxu', 'aldo', 'mendez', 'meaaa', 2147483647, 2147483647),
(5, 'aldom@gmail.com', '$2y$10$N5k06o26N32vc471soRgiO.zu7E75qlU3qIp.61svY.mOzhc/q9Ku', 'aldo', 'mendez', 'meaaa', 2147483647, 2147483647);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `descripcion`
--
ALTER TABLE `descripcion`
  ADD PRIMARY KEY (`Id_descripcion`),
  ADD KEY `inmueble_Id` (`inmueble_Id`),
  ADD KEY `inmueble_Id_2` (`inmueble_Id`);

--
-- Indices de la tabla `gps`
--
ALTER TABLE `gps`
  ADD PRIMARY KEY (`Id_loc`),
  ADD KEY `inmueble_id` (`inmueble_id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`cod_imagen`);

--
-- Indices de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  ADD PRIMARY KEY (`Id_inmuebles`);

--
-- Indices de la tabla `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `descripcion`
--
ALTER TABLE `descripcion`
  MODIFY `Id_descripcion` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `gps`
--
ALTER TABLE `gps`
  MODIFY `Id_loc` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `cod_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  MODIFY `Id_inmuebles` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users2`
--
ALTER TABLE `users2`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `descripcion`
--
ALTER TABLE `descripcion`
  ADD CONSTRAINT `descripcion_ibfk_1` FOREIGN KEY (`inmueble_Id`) REFERENCES `inmuebles` (`Id_inmuebles`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `gps`
--
ALTER TABLE `gps`
  ADD CONSTRAINT `gps_ibfk_1` FOREIGN KEY (`inmueble_id`) REFERENCES `inmuebles` (`Id_inmuebles`);
--
-- Base de datos: `expendio`
--
CREATE DATABASE IF NOT EXISTS `expendio` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `expendio`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `clave` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `usuario`, `email`, `clave`) VALUES
(1, 'mauricio', 'mau@gmail.com', '$2y$10$RcjSLPI1XE7UnAGS2OohgOWOLvENdG9eqe2qmdAEqGvN5ph7o6QM.'),
(4, 'aldo', 'aldoo_carrasco@hotmail.com', '$2y$10$dETA8NqPiLe3DOlUADZXau7DQsuHn7N1tUNuhuF2ZzMxP8NxEDHUq'),
(5, 'aldom', 'mendez_aldo@live.com.mx', '$2y$10$38QrALNSykr5xgSe4f.keOHHZ0xzW074H678fg3HsexLQIeeme6BC');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Base de datos: `members`
--
CREATE DATABASE IF NOT EXISTS `members` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `members`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` mediumint(6) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(60) NOT NULL,
  `registration_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Base de datos: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Volcado de datos para la tabla `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"casaypunto\",\"table\":\"users2\"},{\"db\":\"casaypunto\",\"table\":\"inmuebles\"},{\"db\":\"casaypunto\",\"table\":\"imagenes\"},{\"db\":\"casaypunto\",\"table\":\"descripcion\"},{\"db\":\"casaypunto\",\"table\":\"gps\"},{\"db\":\"casaypunto\",\"table\":\"location\"},{\"db\":\"expendio\",\"table\":\"usuarios\"},{\"db\":\"members\",\"table\":\"users\"},{\"db\":\"ava_educacion\",\"table\":\"mate\"},{\"db\":\"expendio\",\"table\":\"compras\"}]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Volcado de datos para la tabla `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'ava_educacion', 'mate', '{\"sorted_col\":\"`user_Id`  DESC\"}', '2021-01-20 05:33:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Volcado de datos para la tabla `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2021-04-30 19:38:54', '{\"Console\\/Mode\":\"show\",\"lang\":\"es\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indices de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indices de la tabla `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indices de la tabla `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indices de la tabla `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indices de la tabla `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indices de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indices de la tabla `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indices de la tabla `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indices de la tabla `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indices de la tabla `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indices de la tabla `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Base de datos: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
