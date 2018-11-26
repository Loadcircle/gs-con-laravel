-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2018 a las 01:04:16
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `garro_stucchi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carousels`
--

CREATE TABLE `carousels` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tittle` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(10) UNSIGNED DEFAULT '1',
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carousels`
--

INSERT INTO `carousels` (`id`, `file`, `tittle`, `position`, `status`, `created_at`, `updated_at`) VALUES
(1, 'image/banner1.jpg', 'Un holding de marcas Peruanas', 1, 'ACTIVE', '2018-06-20 05:00:00', '2018-06-21 23:31:48'),
(2, 'image/banner2.jpg', 'Un holding de marcas Peruanas', 2, 'ACTIVE', '2018-06-20 05:00:00', '2018-06-20 05:00:00'),
(3, 'image/banner3.jpg', 'Un holding de marcas Peruanas', 3, 'ACTIVE', '2018-06-20 05:00:00', '2018-06-20 05:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configs`
--

CREATE TABLE `configs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `configs`
--

INSERT INTO `configs` (`id`, `name`, `value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Titulo', 'Garro Stucchi', 'ACTIVE', '2018-06-13 05:00:00', '2018-06-25 21:31:32'),
(2, 'Telefono', '(01)-2213766', 'ACTIVE', '2018-06-13 05:00:00', '2018-06-21 23:02:45'),
(3, 'Facebook', 'https://www.facebook.com/alejandrogarroc', 'ACTIVE', '2018-06-13 05:00:00', '2018-06-13 05:00:00'),
(4, 'Dirección', 'Calle Ernesto Plascencia 166', 'ACTIVE', '2018-06-13 05:00:00', '2018-06-21 23:03:39'),
(5, 'Meta_Description', 'Grupo Garro Stucchi, En cinco años ser la principal compañía de generación de transformación en empresas y personas a nivel nacional.', 'ACTIVE', '2018-06-22 05:00:00', '2018-06-22 23:10:25'),
(6, 'Meta_Keywords', 'Grupo, Garro, Stucchi, Garro Stucchi, Franquicia, Franquicias', 'ACTIVE', '2018-06-22 05:00:00', '2018-06-22 23:10:43'),
(7, 'Meta_Author', 'Grupo Garro Stucchi', 'ACTIVE', '2018-06-22 05:00:00', '2018-06-22 23:15:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `send_to` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact_status`
--

CREATE TABLE `contact_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contact_status`
--

INSERT INTO `contact_status` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Activo', 'ACTIVE', '2018-06-26 03:51:58', '2018-06-26 03:51:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contents`
--

CREATE TABLE `contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `file` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT '1',
  `section_id` int(10) UNSIGNED NOT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contents`
--

INSERT INTO `contents` (`id`, `name`, `sub_name`, `content`, `file`, `position`, `section_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Misión:', NULL, '<p>Construir un país con empresas más eficientes en su gestión y comercialización a través de la generación de valor que aporta nuestro equipo con experiencia e innovación.</p>', NULL, 1, 7, 'ACTIVE', '2018-06-23 02:05:50', '2018-06-23 02:05:50'),
(2, 'Visión:', NULL, '<p>En cinco años ser la principal compañía de generación de transformación en empresas y personas a nivel nacional.</p>', NULL, 2, 7, 'ACTIVE', '2018-06-23 02:06:02', '2018-06-23 02:06:02'),
(3, NULL, NULL, '<p>&nbsp;</p>', 'image/edificio.png', 1, 7, 'ACTIVE', '2018-06-23 02:08:32', '2018-06-23 02:08:32'),
(4, NULL, NULL, 'Comprometidos con tu <span>éxito.</span><br>Tenemos una metodología <br>propia de trabajo <br>orientada a resultados', NULL, 1, 9, 'ACTIVE', '2018-06-23 03:21:31', '2018-06-23 03:22:53'),
(5, NULL, NULL, '<p>&nbsp;</p>', 'image/contacto.jpg', 1, 11, 'ACTIVE', '2018-06-23 03:33:07', '2018-06-23 03:33:07'),
(6, NULL, NULL, '<p>&nbsp;</p>', 'image/camara_espanola.png', 1, 10, 'ACTIVE', '2018-06-23 03:55:38', '2018-06-23 03:55:38'),
(7, NULL, NULL, '<p>&nbsp;</p>', 'image/cesar_vallejo.png', 1, 10, 'ACTIVE', '2018-06-23 03:55:38', '2018-06-23 03:55:38'),
(8, NULL, NULL, '<p>&nbsp;</p>', 'image/consorcio_ferial_peru.png', 1, 10, 'ACTIVE', '2018-06-23 03:55:38', '2018-06-23 03:55:38'),
(9, NULL, NULL, '<p>&nbsp;</p>', 'image/finanzas_estructuradas.png', 1, 10, 'ACTIVE', '2018-06-23 03:55:38', '2018-06-23 03:55:38'),
(10, NULL, NULL, '<p>&nbsp;</p>', 'image/franquicias_arg.png', 1, 10, 'ACTIVE', '2018-06-23 03:55:38', '2018-06-23 03:55:38'),
(11, NULL, NULL, '<p>&nbsp;</p>', 'image/grupo_americano_franquicias.png', 1, 10, 'ACTIVE', '2018-06-23 03:55:38', '2018-06-23 03:55:38'),
(12, NULL, NULL, '<p>&nbsp;</p>', 'image/perusa.png', 1, 10, 'ACTIVE', '2018-06-23 03:55:38', '2018-06-23 03:55:38'),
(13, NULL, NULL, '<p>&nbsp;</p>', 'image/programa_nacional_franquicias.png', 1, 10, 'ACTIVE', '2018-06-23 03:55:38', '2018-06-23 03:55:38'),
(14, NULL, NULL, '<p>&nbsp;</p>', 'image/up.png', 1, 10, 'ACTIVE', '2018-06-23 03:55:38', '2018-06-23 03:55:38'),
(15, 'http://pmktconsulting.com', NULL, '<p><strong>Consultora latinoamericana especializada en el sector franquicias</strong></p><p>Ofrecemos soluciones integrales a empresas e inversionistas con presencia en Perú, Chile y Bolivia. Pronto en Estados Unidos</p>', 'image/aLZLzdYedwdDbdHWxzkNJNnljHJzJtph3Ldz4tIE.png', 1, 8, 'ACTIVE', '2018-06-23 04:39:33', '2018-06-25 20:50:59'),
(16, 'https://clubfranquicia.com', NULL, '<p><strong>El primer portal web especializado en franquicias</strong></p><p>Te ayudamos a encontrar tu franquicia ideal.</p>', 'image/blIiVqKeiXlmLYzJ3m0wB2R2lLKppMZqpD98Jij6.png', 2, 8, 'ACTIVE', '2018-06-25 19:44:18', '2018-06-25 20:51:39'),
(17, 'https://agcproducciones.com', NULL, '<p style=\'color:white\'><strong>Productora /Casa Realizadora</strong></p><p style=\'color:white\'>Generadora de contenido audiovisual. Te ayudamos a contar tu historia y plasmar tus ideas, dándole vida a tu imaginación.</p>', 'image/TScptN9Cwz57fDpVRsNbSWxnBAVgKyADsmUVEoPI.png', 5, 8, 'ACTIVE', '2018-06-25 19:44:38', '2018-06-25 20:54:31'),
(18, 'http://feriafranquiciasperu.com', NULL, '<p style=\'color:white\'><strong>La feria oficial del sector franquicias en el Perú</strong></p><p style=\'color:white\'>el evento más importante del año para la promoción nacional e internacional de las franquicias.</p>', 'image/AwSoPiSEq5jnSWHKtFHhufM0R8yVrYu6tmSYVGrQ.png', 3, 8, 'ACTIVE', '2018-06-25 19:45:21', '2018-06-25 20:52:34'),
(19, 'http://happyfactory.pe', NULL, '<p><strong>La franquicia de la felicidad</strong></p><p>Cadena de tiendas retail especializada en venta de golosinas y packs de regalos para toda ocasión.</p>', 'image/EwmXpA53vcq0nY587y7sAjcrA7P4xBmM8U6V4qBu.png', 4, 8, 'ACTIVE', '2018-06-25 19:45:49', '2018-06-25 20:54:08'),
(20, 'http://www.miboda.com.pe', NULL, '<p><strong>Portal web,&nbsp;la herramienta perfecta para planificar tu boda.</strong></p><p>El más amplio directorio de proveedores y equipo de profesionales para ayudarte a organizar tu boda de la manera más sencilla.</p>', 'image/1t45NF7E5Yre8xAFkl9qO14pGSyAISsFH4LJB43w.png', 4, 8, 'ACTIVE', '2018-06-25 19:46:15', '2018-06-25 20:54:22'),
(21, NULL, NULL, '<p>&nbsp;</p>', 'image/LUNc8zEpPBCl2wOBXzZH3mcN1Pu9komNA36cTnlJ.jpeg', 1, 9, 'ACTIVE', '2018-06-25 21:22:20', '2018-06-25 21:22:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emails`
--

CREATE TABLE `emails` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `emails`
--

INSERT INTO `emails` (`id`, `name`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Jesus Milano', 'jesusmilano96@gmail.com', 'ACTIVE', '2018-06-26 03:59:45', '2018-06-26 03:59:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `footers`
--

CREATE TABLE `footers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logos`
--

CREATE TABLE `logos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `logos`
--

INSERT INTO `logos` (`id`, `name`, `file`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Logo_1', 'image/logo1.png', 'ACTIVE', '2018-06-19 05:00:00', '2018-06-21 22:39:22'),
(2, 'Logo_2', 'image/logo2.png', 'ACTIVE', '2018-06-19 05:00:00', '2018-06-21 22:44:23'),
(3, 'Favicon', 'image/favicon.png', 'ACTIVE', '2018-06-19 05:00:00', '2018-06-21 22:37:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `position` int(10) UNSIGNED DEFAULT '1',
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id`, `name`, `section_id`, `position`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Nosotros', 7, 1, 'ACTIVE', '2018-06-22 01:36:18', '2018-06-22 01:37:15'),
(4, 'Marcas', 8, 2, 'ACTIVE', '2018-06-22 01:36:59', '2018-06-22 01:37:11'),
(5, 'Historia', 9, 3, 'ACTIVE', '2018-06-22 01:37:59', '2018-06-22 01:38:47'),
(6, 'Convenio', 10, 4, 'ACTIVE', '2018-06-22 01:38:24', '2018-06-22 01:38:50'),
(7, 'Contacto', 11, 5, 'ACTIVE', '2018-06-22 01:38:32', '2018-06-23 04:25:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(162, '2014_10_12_000000_create_users_table', 1),
(163, '2014_10_12_100000_create_password_resets_table', 1),
(164, '2018_06_12_215117_create_config_table', 1),
(165, '2018_06_12_220453_create_menu_table', 1),
(166, '2018_06_12_220530_create_section_table', 1),
(167, '2018_06_12_220634_create_content_table', 1),
(168, '2018_06_13_170918_create_logo_table', 1),
(169, '2018_06_13_171505_create_table_carousel', 1),
(170, '2018_06_21_185042_create_section_type_table', 1),
(171, '2018_06_25_205413_create_footers_table', 1),
(172, '2018_06_25_205433_create_contact_status_table', 1),
(173, '2018_06_25_211325_create_contacts_table', 1),
(174, '2018_06_25_213201_create_emails_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_types_id` int(10) UNSIGNED DEFAULT NULL,
  `position` int(10) UNSIGNED DEFAULT '1',
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sections`
--

INSERT INTO `sections` (`id`, `name`, `slug`, `section_types_id`, `position`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Nosotros', 'nosotros', 1, 1, 'ACTIVE', '2018-06-22 01:36:18', '2018-06-23 03:12:51'),
(8, 'Servicio', 'servicio', 2, 2, 'ACTIVE', '2018-06-22 01:36:59', '2018-06-23 04:37:53'),
(9, 'Historia', 'historia', 3, 3, 'ACTIVE', '2018-06-22 01:37:59', '2018-06-23 03:20:38'),
(10, 'Convenio', 'convenio', 4, 4, 'ACTIVE', '2018-06-22 01:38:24', '2018-06-23 03:55:05'),
(11, 'Contacto', 'contacto', 5, 5, 'ACTIVE', '2018-06-22 01:38:32', '2018-06-23 03:32:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `section_types`
--

CREATE TABLE `section_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `section_types`
--

INSERT INTO `section_types` (`id`, `name`, `file`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Content_Image', 'image/content_image.png', 'ACTIVE', '2018-06-22 05:00:00', '2018-06-22 05:00:00'),
(2, 'Cards', 'image/cards.png', 'ACTIVE', '2018-06-22 05:00:00', '2018-06-22 05:00:00'),
(3, 'Parallax', 'image/parallax.png', 'ACTIVE', '2018-06-22 05:00:00', '2018-06-22 05:00:00'),
(4, 'Brands', 'image/logos.png', 'ACTIVE', '2018-06-22 05:00:00', '2018-06-22 05:00:00'),
(5, 'Contact', 'image/contact.png', 'ACTIVE', '2018-06-22 05:00:00', '2018-06-22 05:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jesús Milano', 'jesusmilano96@gmail.com', '$2y$10$bG1lDezVTfjmK2yojrUIBO8YjLGmHEZxrCFmtDYOW8P4oG8.mY8rS', 'HVLwiiBZnbvCYJC6WpxodtrjNKLvwdyj6FRWRS6rPnGqQJnitPlqoq9SL6I7', '2018-06-13 05:00:00', '2018-06-13 05:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_status_foreign` (`status`);

--
-- Indices de la tabla `contact_status`
--
ALTER TABLE `contact_status`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_section_id_foreign` (`section_id`);

--
-- Indices de la tabla `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_section_id_foreign` (`section_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_section_types_id_foreign` (`section_types_id`);

--
-- Indices de la tabla `section_types`
--
ALTER TABLE `section_types`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contact_status`
--
ALTER TABLE `contact_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `footers`
--
ALTER TABLE `footers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT de la tabla `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `section_types`
--
ALTER TABLE `section_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_status_foreign` FOREIGN KEY (`status`) REFERENCES `contact_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `content_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menu_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `section_section_types_id_foreign` FOREIGN KEY (`section_types_id`) REFERENCES `section_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
