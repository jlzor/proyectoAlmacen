-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2015 a las 04:10:51
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `almacen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `altas`
--

CREATE TABLE IF NOT EXISTS `altas` (
  `id` int(10) unsigned NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `altas`
--

INSERT INTO `altas` (`id`, `id_usuario`, `created_at`, `updated_at`) VALUES
(1, 1, '2015-07-17 01:24:18', '2015-07-17 01:24:18'),
(2, 1, '2015-07-17 01:26:20', '2015-07-17 01:26:20'),
(3, 1, '2015-07-17 01:30:25', '2015-07-17 01:30:25'),
(4, 1, '2015-07-17 01:31:07', '2015-07-17 01:31:07'),
(5, 1, '2015-07-17 01:54:47', '2015-07-17 01:54:47'),
(6, 1, '2015-07-17 01:55:03', '2015-07-17 01:55:03'),
(7, 1, '2015-07-17 01:55:25', '2015-07-17 01:55:25'),
(8, 1, '2015-07-17 01:55:45', '2015-07-17 01:55:45'),
(9, 1, '2015-07-17 01:56:48', '2015-07-17 01:56:48'),
(10, 1, '2015-07-17 01:58:27', '2015-07-17 01:58:27'),
(11, 1, '2015-07-17 01:59:32', '2015-07-17 01:59:32'),
(12, 1, '2015-07-17 01:59:54', '2015-07-17 01:59:54'),
(13, 1, '2015-07-17 02:00:42', '2015-07-17 02:00:42'),
(14, 1, '2015-07-17 02:02:26', '2015-07-17 02:02:26'),
(15, 1, '2015-07-17 02:02:57', '2015-07-17 02:02:57'),
(16, 1, '2015-07-17 02:05:17', '2015-07-17 02:05:17'),
(17, 1, '2015-07-17 02:05:27', '2015-07-17 02:05:27'),
(18, 1, '2015-07-17 02:05:36', '2015-07-17 02:05:36'),
(19, 1, '2015-07-17 02:06:59', '2015-07-17 02:06:59'),
(20, 1, '2015-07-17 02:07:25', '2015-07-17 02:07:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bajas`
--

CREATE TABLE IF NOT EXISTS `bajas` (
  `id` int(10) unsigned NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `bajas`
--

INSERT INTO `bajas` (`id`, `id_usuario`, `created_at`, `updated_at`) VALUES
(1, 1, '2015-07-17 01:26:01', '2015-07-17 01:26:01'),
(2, 2, '2015-07-17 02:10:25', '2015-07-17 02:10:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(2, 'Gorras', '2015-07-17 01:34:46', '2015-07-17 01:34:46'),
(3, 'Cintos', '2015-07-17 01:34:52', '2015-07-17 01:34:52'),
(4, 'Bolsas', '2015-07-17 01:34:57', '2015-07-17 01:34:57'),
(5, 'Pulseras', '2015-07-17 01:35:02', '2015-07-17 01:35:02'),
(6, 'Collares', '2015-07-17 01:35:15', '2015-07-17 01:35:15'),
(7, 'Anillos', '2015-07-17 01:35:24', '2015-07-17 01:35:24'),
(9, 'Perfume', '2015-07-17 01:37:02', '2015-07-17 01:37:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_07_06_231626_create_producto_table', 1),
('2015_07_06_233153_create_alta_table', 1),
('2015_07_06_233347_create_baja_table', 1),
('2015_07_06_233508_create_productos_altas_table', 1),
('2015_07_06_233508_create_productos_bajas_table', 1),
('2015_07_07_200530_create_provedor_table', 1),
('2015_07_13_231042_create_categorias_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_provedor` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `cantidad`, `id_provedor`, `created_at`, `updated_at`) VALUES
(5, 'Vans-234', 122, 2, '2015-07-17 01:54:47', '2015-07-17 01:54:47'),
(6, 'NE-3223', 313, 3, '2015-07-17 01:55:02', '2015-07-17 01:55:02'),
(7, 'V21-Black', 300, 4, '2015-07-17 01:55:25', '2015-07-17 01:55:25'),
(8, 'GU-R1', 15, 5, '2015-07-17 01:55:45', '2015-07-17 01:55:45'),
(9, 'PR-M21', 10, 6, '2015-07-17 01:56:48', '2015-07-17 01:56:48'),
(10, 'PR-M21', 10, 6, '2015-07-17 01:58:27', '2015-07-17 01:58:27'),
(11, 'Classic', 4, 7, '2015-07-17 01:59:32', '2015-07-17 01:59:32'),
(12, 'Moder', 15, 8, '2015-07-17 01:59:53', '2015-07-17 01:59:53'),
(13, 'A1-Gold', 10, 9, '2015-07-17 02:00:42', '2015-07-17 02:00:42'),
(14, 'Pul-Silver', 10, 10, '2015-07-17 02:02:26', '2015-07-17 02:02:26'),
(15, 'Collar-Plata', 10, 11, '2015-07-17 02:02:57', '2015-07-17 02:02:57'),
(16, 'mod-21', 200, 12, '2015-07-17 02:05:17', '2015-07-17 02:05:17'),
(18, 'Fresa-21', 200, 14, '2015-07-17 02:05:36', '2015-07-17 02:05:36'),
(19, '0.2', 20, 15, '2015-07-17 02:06:59', '2015-07-17 02:06:59'),
(20, 'secret', 20, 16, '2015-07-17 02:07:25', '2015-07-17 02:07:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_altas`
--

CREATE TABLE IF NOT EXISTS `productos_altas` (
  `id` int(10) unsigned NOT NULL,
  `id_altas` int(11) NOT NULL,
  `id_productos` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_bajas`
--

CREATE TABLE IF NOT EXISTS `productos_bajas` (
  `id` int(10) unsigned NOT NULL,
  `id_bajas` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL,
  `id_productos` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos_bajas`
--

INSERT INTO `productos_bajas` (`id`, `id_bajas`, `id_usuarios`, `id_productos`, `cantidad`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 0, '2015-07-17 01:26:09', '2015-07-17 01:26:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provedores`
--

CREATE TABLE IF NOT EXISTS `provedores` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `direccion` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `ciudad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `provedores`
--

INSERT INTO `provedores` (`id`, `nombre`, `id_categoria`, `direccion`, `telefono`, `ciudad`, `id_usuario`, `created_at`, `updated_at`) VALUES
(2, 'Vans', 2, 'USA', 180056494, 'Los Angeles', 1, '2015-07-17 01:38:38', '2015-07-17 01:38:38'),
(3, 'NEW ERA', 2, 'Mexico', 18050056, 'Mexico', 1, '2015-07-17 01:39:21', '2015-07-17 01:39:21'),
(4, 'VOLCOM', 2, 'USA', 180001100, 'New York', 1, '2015-07-17 01:40:00', '2015-07-17 01:40:00'),
(5, 'GUCCI', 3, 'USA', 1848966, 'Los Angeles', 1, '2015-07-17 01:40:41', '2015-07-17 01:40:41'),
(6, 'PRADA', 3, 'CHINA', 1818464, 'Bejin', 1, '2015-07-17 01:41:37', '2015-07-17 01:41:37'),
(7, 'GUESS', 4, 'USA', 1654984, 'New York', 1, '2015-07-17 01:44:31', '2015-07-17 01:44:31'),
(8, 'Aeropostale', 4, 'USA', 2147483647, 'Los Angeles', 1, '2015-07-17 01:44:53', '2015-07-17 01:44:53'),
(9, 'Nice', 5, 'Francia', 2147483647, 'Paris', 1, '2015-07-17 01:47:07', '2015-07-17 01:47:07'),
(10, 'Pandora', 5, 'USA', 650465160, 'New York', 1, '2015-07-17 01:47:49', '2015-07-17 01:47:49'),
(11, 'Nice', 6, 'Francia', 2147483647, 'Paris', 1, '2015-07-17 01:49:31', '2015-07-17 01:49:31'),
(12, 'LUNA', 7, 'Mexico', 2147483647, 'Culiacan', 1, '2015-07-17 01:50:11', '2015-07-17 01:50:11'),
(13, 'MiguleRamos', 7, 'Mexico', 2147483647, 'Culiacan', 1, '2015-07-17 01:50:54', '2015-07-17 01:50:54'),
(14, 'Can-can', 9, 'USA', 1900954944, 'Los Angeles', 1, '2015-07-17 01:51:36', '2015-07-17 01:51:36'),
(15, 'Aqua de gio', 9, 'brazil', 2147483647, 'Rio de janeiro', 1, '2015-07-17 01:52:42', '2015-07-17 01:52:42'),
(16, 'Angel Negro', 9, 'Inglaterra', 848494648, 'Londres', 1, '2015-07-17 01:54:14', '2015-07-17 01:54:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `direccion`, `telefono`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'josue', 'josueisahu@hotmail.com', '$2y$10$MHt9caz.NVv1v8h0ovWz9O24Qw2mTLP8AXV2SMzU9gc8y11SZgBX.', 'asdf', 121212, 0, 'cjvyVoqnquLBGDkmxAWStFe9SsxbHd3wSVUhXJvSoYbIYskmfcdBCH2pTRj0', '2015-07-17 07:23:48', '2015-07-17 08:09:17'),
(2, 'josueisahu', 'josueisahu93@hotmail.com', '$2y$10$X74WtVOPbPfLmShlCOv3N.bvHDi72nMMFb//tbRkEx83umSknFZgS', 'Francia', 2147483647, 0, NULL, '2015-07-17 08:10:17', '2015-07-17 08:10:17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `altas`
--
ALTER TABLE `altas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bajas`
--
ALTER TABLE `bajas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_altas`
--
ALTER TABLE `productos_altas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_bajas`
--
ALTER TABLE `productos_bajas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `provedores`
--
ALTER TABLE `provedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `altas`
--
ALTER TABLE `altas`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `bajas`
--
ALTER TABLE `bajas`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `productos_altas`
--
ALTER TABLE `productos_altas`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos_bajas`
--
ALTER TABLE `productos_bajas`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `provedores`
--
ALTER TABLE `provedores`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
