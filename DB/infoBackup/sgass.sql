-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2021 at 09:47 AM
-- Server version: 8.0.22-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgass`
--

-- --------------------------------------------------------

--
-- Table structure for table `alocacao`
--

CREATE TABLE `alocacao` (
  `id` int UNSIGNED NOT NULL,
  `descAvaria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivelUrgenc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `solec_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alocacao`
--

INSERT INTO `alocacao` (`id`, `descAvaria`, `estado`, `nivelUrgenc`, `user_id`, `solec_id`, `created_at`, `updated_at`) VALUES
(6, 'qualidade ma qualidade de imagem.', 'fechado', 'Urgente', 2, 1, '2020-04-13 20:41:02', '2020-04-13 20:41:02'),
(7, 'Papel impesso com manchas', 'fechado', 'Normal', 1, 2, '2020-09-07 09:28:25', '2020-09-07 09:28:25'),
(8, 'barulho atras da maquina', 'fechado', 'Normal', 6, 3, '2020-09-07 09:30:50', '2020-09-07 09:30:50'),
(9, 'paper jam na parte de caregamento de papel', 'espera', 'Normal', 2, 4, '2020-09-13 13:42:41', '2020-09-13 13:42:41'),
(10, 'Jam no caregamento de papel', 'espera', 'Normal', 1, 5, '2020-09-13 20:07:13', '2020-09-13 20:07:13'),
(11, 'Pessima qualidade de imagem e sai com riscos', 'fechado', 'Normal', 6, 6, '2020-09-19 18:23:57', '2020-09-19 18:23:57'),
(12, 'Gaveta partida ma secao de caregamento', 'fechado', 'Urgente', 2, 7, '2020-11-19 12:56:52', '2020-11-19 12:56:52'),
(13, 'Drum need to be raplaced', 'fechado', 'Baixo', 2, 9, '2020-12-08 09:56:51', '2020-12-08 09:56:51'),
(14, 'FIm do ciclo de vida', 'fechado', 'Urgente', 2, 8, '2020-12-08 09:57:11', '2020-12-08 09:57:11'),
(15, 'Developing unit end of life', 'fechado', 'Urgente', 6, 10, '2020-12-08 09:57:34', '2020-12-08 09:57:34'),
(16, 'Cabo da lampada rebentada', 'espera', 'Baixo', 6, 11, '2020-12-09 14:07:05', '2020-12-09 14:07:05'),
(17, 'mancha na copia ou impreecao', 'espera', 'Normal', 2, 12, '2021-01-05 17:03:39', '2021-01-05 17:03:39');

-- --------------------------------------------------------

--
-- Table structure for table `avaria`
--

CREATE TABLE `avaria` (
  `id` int UNSIGNED NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `avaria`
--

INSERT INTO `avaria` (`id`, `tipo`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Optical Unit', 'Os problemas podem ser causados pela Lampada, Flat Cables, Scan Belt', '2019-01-26 22:10:28', '2019-01-26 22:10:28'),
(2, 'Unidade de Imagem', 'Problemas causados pelo desgate de pecas de revelacao que pode ser Drum, Developing unit, Developer.\r\nTambem pode ser por contaminacao de toner', '2019-01-26 22:13:02', '2019-01-26 22:13:02'),
(3, 'Brashless Motor', 'O problema pode ser causado por desgaste das emgrenagens, ou excesso de poeiras nos drive sections.', '2019-01-26 22:18:24', '2019-01-26 22:18:24'),
(4, 'Gavetas(Tray)', 'Problema de Rolos ou de clatches', '2020-09-13 12:27:03', '2020-09-13 12:27:03');

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id` int UNSIGNED NOT NULL,
  `nomeemp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nuit` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avenida` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distri_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id`, `nomeemp`, `tipo`, `email`, `nuit`, `tel`, `bairro`, `avenida`, `distri_id`, `created_at`, `updated_at`) VALUES
(2, 'MLT', 'CPP', 'MuhelinaJ@mozltc.com', '111', '25227044', 'Bairro M’Padue', 'Estrada Nacional Nº 7', 2, '2019-02-05 02:48:17', '2019-02-05 02:48:17'),
(3, 'Barloword Sul', 'RENTAL', 'Mona@barloword.co.mz', '11111213', '21343533', 'Lingamo', 'Uniao Africana', 7, '2019-02-05 03:02:34', '2019-02-05 03:02:34'),
(4, 'Barloword Norte', 'RENTAL', 'Moma@Barloword.co.mz', '1111133523', '2132423324', 'Moatize', NULL, 50, '2019-02-05 03:04:02', '2019-02-05 03:04:02'),
(5, 'Norco', 'CPP', 'Marknorton@norco.co.mz', '1111324323', '2143445634', 'Central', 'Vladimir Lenine', 1, '2019-02-05 03:05:59', '2019-02-05 03:05:59'),
(6, 'BP', 'RENTAL', 'baptista@bpmoz.co.mz', '3141244315', '21383764', 'central', '25 de Setembro', 1, '2020-03-26 15:23:18', '2020-03-26 15:23:18'),
(7, 'Lugar do Mar', 'RENTAL', 'joao@lugarmar.co.mz', '40233960', '2190939', NULL, NULL, 6, '2020-03-26 15:23:59', '2020-03-26 15:23:59'),
(8, 'ABC BANC', 'CPP', 'admin@bancabc.com', '32434331', '213454542', 'central', '25 de Setembro', 1, '2020-09-13 10:24:24', '2020-09-13 10:24:24'),
(9, 'Marin Trading', 'RENTAL', 'celso.hassane@marintrading.co.mz', '435253242', '21324325', 'Chamanculo', 'Av Angola', 1, '2020-09-13 10:27:15', '2020-09-13 10:27:15'),
(10, 'MULTICHOICE', 'RENTAL', 'Vasco.Mandlate007@mz.multichoice.com', '435222342', '21324233', 'Sommerchield', 'Marginal', 1, '2020-09-13 10:28:52', '2020-09-13 10:28:52'),
(11, 'UNITRANS', 'RENTAL', 'Gabriela.Dias@unitrans.africa', '24352245', '212354345', 'TCHUMENE', NULL, 7, '2020-09-13 10:33:27', '2020-09-13 10:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `consumivel`
--

CREATE TABLE `consumivel` (
  `idcons` int UNSIGNED NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designacao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partN` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consumivel`
--

INSERT INTO `consumivel` (`idcons`, `tipo`, `designacao`, `partN`, `cor`, `created_at`, `updated_at`) VALUES
(7, 'Consumivel', 'TN321C', '2525500', 'Azul', '2020-08-29 11:28:57', '2020-08-29 11:28:57'),
(8, 'Consumivel', 'TN321M', 'A21U3G119', 'Magenta', '2020-08-29 11:30:03', '2020-08-29 11:30:03'),
(9, 'Consumivel', 'TN321K', 'A21U3G120', 'Preto', '2020-08-29 11:31:16', '2020-08-29 11:31:16'),
(10, 'Consumivel', 'TN321Y', 'A21U3G121', 'Amarelo', '2020-08-29 11:31:43', '2020-08-29 11:31:43'),
(11, 'Consumivel', 'TN414', 'A2021143', 'Preto', '2020-08-29 11:32:27', '2020-08-29 11:32:27'),
(12, 'Consumivel', 'TN415', 'A2100A543', 'Preto', '2020-08-29 11:32:52', '2020-08-29 11:32:52'),
(13, 'Peca', 'DR411', 'A2RH031', NULL, '2020-08-29 11:33:53', '2020-08-29 11:33:53'),
(14, 'Peca', 'DV411', 'A3EW091', NULL, '2020-08-29 11:34:45', '2020-08-29 11:34:45'),
(15, 'Consumivel', 'DU', 'A3EW314', NULL, '2020-08-29 11:37:28', '2020-08-29 11:37:28'),
(16, 'Peca', 'Clatch', 'A02FM20000', NULL, '2020-09-13 14:12:29', '2020-09-13 14:12:29'),
(17, 'Peca', 'Clatch', 'A02AM20000', NULL, '2020-09-13 14:12:55', '2020-09-13 14:12:55'),
(18, 'Consumivel', 'Roller', 'A00J500012', NULL, '2020-09-13 14:13:30', '2020-09-13 14:13:30'),
(19, 'Consumivel', 'Roller', 'A00J500031', NULL, '2020-09-13 14:13:59', '2020-09-13 14:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `cotacao_solic`
--

CREATE TABLE `cotacao_solic` (
  `idcot` int UNSIGNED NOT NULL,
  `inciva` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` enum('aberto','aprovado') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `preco_id` int UNSIGNED NOT NULL,
  `cliente_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `distrito`
--

CREATE TABLE `distrito` (
  `id` int UNSIGNED NOT NULL,
  `nomedt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prov_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `distrito`
--

INSERT INTO `distrito` (`id`, `nomedt`, `prov_id`, `created_at`, `updated_at`) VALUES
(1, 'Kamfumo', 2, '2019-01-26 06:36:58', '2019-01-26 06:36:58'),
(2, 'Nkanogola', 7, '2019-01-29 05:28:12', '2019-01-29 05:28:12'),
(3, 'Boane', 2, '2019-02-05 01:03:02', '2019-02-05 01:03:02'),
(4, 'Magude', 2, '2019-02-05 01:03:21', '2019-02-05 01:03:21'),
(5, 'Manhiça', 2, '2019-02-05 01:03:55', '2019-02-05 01:03:55'),
(6, 'Marracuene', 2, '2019-02-05 01:04:12', '2019-02-05 01:04:12'),
(7, 'Matola', 2, '2019-02-05 01:04:19', '2019-02-05 01:04:19'),
(8, 'Matutuine', 2, '2019-02-05 01:04:38', '2019-02-05 01:04:38'),
(9, 'Moamba', 2, '2019-02-05 01:04:45', '2019-02-05 01:04:45'),
(10, 'Namaacha', 2, '2019-02-05 01:05:01', '2019-02-05 01:05:01'),
(11, 'Bilene', 3, '2019-02-05 01:05:54', '2019-02-05 01:05:54'),
(12, 'Chibuto', 3, '2019-02-05 01:06:04', '2019-02-05 01:06:04'),
(13, 'Chicualacuala', 3, '2019-02-05 01:06:28', '2019-02-05 01:06:28'),
(14, 'Chigubo', 3, '2019-02-05 01:06:37', '2019-02-05 01:06:37'),
(15, 'Chokwe', 3, '2019-02-05 01:06:55', '2019-02-05 01:06:55'),
(16, 'Chongoene', 3, '2019-02-05 01:07:09', '2019-02-05 01:07:09'),
(17, 'Guija', 3, '2019-02-05 01:07:24', '2019-02-05 01:07:24'),
(18, 'Limpopo', 3, '2019-02-05 01:07:34', '2019-02-05 01:07:34'),
(19, 'Mabalane', 3, '2019-02-05 01:07:47', '2019-02-05 01:07:47'),
(20, 'Manjacaze', 3, '2019-02-05 01:08:09', '2019-02-05 01:08:09'),
(21, 'Mapai', 3, '2019-02-05 01:08:22', '2019-02-05 01:08:22'),
(22, 'Massanguene', 3, '2019-02-05 01:08:34', '2019-02-05 01:08:34'),
(23, 'Massingir', 3, '2019-02-05 01:08:49', '2019-02-05 01:08:49'),
(24, 'Xai-Xai', 3, '2019-02-05 01:09:02', '2019-02-05 01:09:02'),
(25, 'Funhalouro', 4, '2019-02-05 01:09:30', '2019-02-05 01:09:30'),
(26, 'Govuro', 4, '2019-02-05 01:09:45', '2019-02-05 01:09:45'),
(27, 'Homoine', 4, '2019-02-05 01:10:00', '2019-02-05 01:10:00'),
(28, 'Inhambane', 4, '2019-02-05 01:10:25', '2019-02-05 01:10:25'),
(29, 'Inharime', 4, '2019-02-05 01:10:39', '2019-02-05 01:10:39'),
(30, 'Inhassoro', 4, '2019-02-05 01:10:54', '2019-02-05 01:10:54'),
(31, 'Jangamo', 4, '2019-02-05 01:11:14', '2019-02-05 01:11:14'),
(32, 'Mabote', 4, '2019-02-05 01:11:26', '2019-02-05 01:11:26'),
(33, 'Massinga', 4, '2019-02-05 01:11:35', '2019-02-05 01:11:35'),
(34, 'Maxixe', 4, '2019-02-05 01:11:46', '2019-02-05 01:11:46'),
(35, 'Morrumbene', 4, '2019-02-05 01:11:56', '2019-02-05 01:11:56'),
(36, 'Panda', 4, '2019-02-05 01:12:06', '2019-02-05 01:12:06'),
(37, 'Panda', 4, '2019-02-05 01:12:18', '2019-02-05 01:12:18'),
(38, 'Vinlanculos', 4, '2019-02-05 01:12:32', '2019-02-05 01:12:32'),
(39, 'Zavala', 4, '2019-02-05 01:12:41', '2019-02-05 01:12:41'),
(40, 'Angonia', 7, '2019-02-05 01:13:39', '2019-02-05 01:13:39'),
(41, 'Cahora-Bassa', 7, '2019-02-05 01:13:51', '2019-02-05 01:13:51'),
(42, 'Changara', 7, '2019-02-05 01:14:05', '2019-02-05 01:14:05'),
(43, 'Chifunde', 7, '2019-02-05 01:14:18', '2019-02-05 01:14:18'),
(44, 'Chiuta', 7, '2019-02-05 01:14:31', '2019-02-05 01:14:31'),
(45, 'Dôa', 7, '2019-02-05 01:14:50', '2019-02-05 01:14:50'),
(46, 'Macanga', 7, '2019-02-05 01:15:09', '2019-02-05 01:15:09'),
(47, 'Magoe', 7, '2019-02-05 01:15:22', '2019-02-05 01:15:22'),
(48, 'Marara', 7, '2019-02-05 01:15:33', '2019-02-05 01:15:33'),
(49, 'Maravia', 7, '2019-02-05 01:15:47', '2019-02-05 01:15:47'),
(50, 'Moatize', 7, '2019-02-05 01:16:00', '2019-02-05 01:16:00'),
(51, 'Mutarara', 7, '2019-02-05 01:16:12', '2019-02-05 01:16:12'),
(52, 'Tete', 7, '2019-02-05 01:16:22', '2019-02-05 01:16:22'),
(53, 'Tsangano', 7, '2019-02-05 01:16:33', '2019-02-05 01:16:33'),
(54, 'Zumbo', 7, '2019-02-05 01:16:42', '2019-02-05 01:16:42'),
(55, 'Beira', 6, '2019-02-05 01:17:26', '2019-02-05 01:17:26'),
(56, 'Buzi', 6, '2019-02-05 01:17:34', '2019-02-05 01:17:34'),
(57, 'Caia', 6, '2019-02-05 01:17:45', '2019-02-05 01:17:45'),
(58, 'Cheringoma', 6, '2019-02-05 01:18:17', '2019-02-05 01:18:17'),
(59, 'Chibabava', 6, '2019-02-05 01:18:36', '2019-02-05 01:18:36'),
(60, 'Dondo', 6, '2019-02-05 01:18:49', '2019-02-05 01:18:49'),
(61, 'Gorongoza', 6, '2019-02-05 01:19:10', '2019-02-05 01:19:10'),
(62, 'Machanga', 6, '2019-02-05 01:19:24', '2019-02-05 01:19:24'),
(63, 'Maringue', 6, '2019-02-05 01:19:35', '2019-02-05 01:19:35'),
(64, 'Marromeu', 6, '2019-02-05 01:19:56', '2019-02-05 01:19:56'),
(65, 'Moaze', 6, '2019-02-05 01:20:07', '2019-02-05 01:20:07'),
(66, 'Nhamatanda', 6, '2019-02-05 01:20:18', '2019-02-05 01:20:18'),
(67, 'Chimbonila', 10, '2019-02-05 01:20:57', '2019-02-05 01:20:57'),
(68, 'Cuamba', 10, '2019-02-05 01:21:27', '2019-02-05 01:21:27'),
(69, 'Lago', 10, '2019-02-05 01:21:37', '2019-02-05 01:21:37'),
(70, 'Lago', 10, '2019-02-05 01:21:56', '2019-02-05 01:21:56'),
(71, 'Majune', 10, '2019-02-05 01:23:30', '2019-02-05 01:23:30'),
(72, 'Mndimba', 10, '2019-02-05 01:23:46', '2019-02-05 01:23:46'),
(73, 'Marrupa', 10, '2019-02-05 01:24:02', '2019-02-05 01:24:02'),
(74, 'Maúa', 10, '2019-02-05 01:24:29', '2019-02-05 01:24:29'),
(75, 'Mavago', 10, '2019-02-05 01:24:40', '2019-02-05 01:24:40'),
(76, 'Mecanhelas', 10, '2019-02-05 01:24:59', '2019-02-05 01:24:59'),
(77, 'Mecula', 10, '2019-02-05 01:25:11', '2019-02-05 01:25:11'),
(78, 'Metarica', 10, '2019-02-05 01:25:20', '2019-02-05 01:25:20'),
(79, 'Muembe', 10, '2019-02-05 01:25:34', '2019-02-05 01:25:34'),
(80, 'N\'gauma', 10, '2019-02-05 01:25:46', '2019-02-05 01:25:46'),
(81, 'Nipepe', 10, '2019-02-05 01:25:55', '2019-02-05 01:25:55'),
(82, 'Sanga', 10, '2019-02-05 01:26:05', '2019-02-05 01:26:05');

-- --------------------------------------------------------

--
-- Table structure for table `equipamento`
--

CREATE TABLE `equipamento` (
  `id` int UNSIGNED NOT NULL,
  `nr_serie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` int UNSIGNED NOT NULL,
  `cliente_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipamento`
--

INSERT INTO `equipamento` (`id`, `nr_serie`, `model_id`, `cliente_id`, `created_at`, `updated_at`) VALUES
(1, '7041X21D344', 11, 3, '2020-03-26 15:20:49', '2020-03-26 15:20:49'),
(2, 'A022248373', 6, 5, '2020-03-26 15:21:06', '2020-03-26 15:21:06'),
(3, 'A02224823', 8, 2, '2020-03-26 15:21:20', '2020-03-26 15:21:20'),
(4, 'A02224233', 6, 3, '2020-03-26 15:22:00', '2020-03-26 15:22:00'),
(5, '7177357289', 16, 7, '2020-03-26 15:25:08', '2020-03-26 15:25:08'),
(6, '4213231243', 3, 6, '2020-03-26 15:25:28', '2020-03-26 15:25:28'),
(7, '53242423331', 1, 6, '2020-03-26 15:25:36', '2020-03-26 15:25:36'),
(8, '7018830001VML', 20, 8, '2020-09-13 10:41:14', '2020-09-13 10:41:14'),
(10, '701645HH04B7Z', 17, 8, '2020-09-13 10:43:10', '2020-09-13 10:43:10'),
(11, '70165PHH68XD', 17, 8, '2020-09-13 10:43:33', '2020-09-13 10:43:33'),
(12, '701656HH05PZM', 17, 8, '2020-09-13 10:43:54', '2020-09-13 10:43:54'),
(13, '701644HH03TG0', 17, 8, '2020-09-13 10:44:20', '2020-09-13 10:44:20'),
(14, '70156PLM135HT', 17, 8, '2020-09-13 10:44:40', '2020-09-13 10:44:40'),
(15, '70156PLM13669', 12, 8, '2020-09-13 10:45:18', '2020-09-13 10:45:18'),
(16, 'A1UD041105121', 21, 8, '2020-09-13 10:46:38', '2020-09-13 10:46:38'),
(17, 'A1UD041105245', 21, 8, '2020-09-13 10:47:01', '2020-09-13 10:47:01'),
(18, '701656HH05TKT', 17, 8, '2020-09-13 10:47:30', '2020-09-13 10:47:30'),
(19, '701632HH0228H', 17, 8, '2020-09-13 10:47:52', '2020-09-13 10:47:52'),
(20, '451432HH0T949', 22, 8, '2020-09-13 10:48:42', '2020-09-13 10:48:42'),
(21, '701644HH038GV', 17, 8, '2020-09-13 10:49:11', '2020-09-13 10:49:11'),
(22, '701555LMOR5PF', 2, 8, '2020-09-13 10:49:42', '2020-09-13 10:49:42'),
(23, '701555LMOR8MC', 2, 8, '2020-09-13 10:50:17', '2020-09-13 10:50:17'),
(24, 'A1UE041107800', 1, 9, '2020-09-13 10:50:44', '2020-09-13 10:50:44'),
(25, 'A1UF041005579', 23, 9, '2020-09-13 10:51:31', '2020-09-13 10:51:31'),
(26, 'A1UE041109427', 1, 9, '2020-09-13 10:51:49', '2020-09-13 10:51:49'),
(27, 'A1UE041111948', 1, 9, '2020-09-13 10:52:11', '2020-09-13 10:52:11'),
(28, 'A1UE041006089', 1, 9, '2020-09-13 10:52:31', '2020-09-13 10:52:31'),
(29, 'A1UE041012035', 1, 9, '2020-09-13 10:52:46', '2020-09-13 10:52:46'),
(30, 'A1UG041103601', 24, 9, '2020-09-13 10:53:26', '2020-09-13 10:53:26'),
(31, '701544LM0C6DF', 12, 9, '2020-09-13 10:53:43', '2020-09-13 10:53:43'),
(32, 'A3EW041100384', 15, 9, '2020-09-13 10:54:02', '2020-09-13 10:54:02'),
(33, 'A4FK041001633', 25, 10, '2020-09-13 10:55:19', '2020-09-13 10:55:19'),
(34, '701545LM0P3YF', 2, 10, '2020-09-13 10:55:46', '2020-09-13 10:55:46'),
(35, 'A3EW041100857', 15, 10, '2020-09-13 10:56:09', '2020-09-13 10:56:09'),
(36, 'A0ED042009361', 6, 10, '2020-09-13 10:56:29', '2020-09-13 10:56:29'),
(37, 'A3EW041100600', 15, 10, '2020-09-13 10:56:50', '2020-09-13 10:56:50'),
(38, 'A3EW041100900', 15, 10, '2020-09-13 10:57:10', '2020-09-13 10:57:10'),
(39, 'A5C4041001338', 3, 10, '2020-09-13 10:57:32', '2020-09-13 10:57:32'),
(40, '701531LM0435X', 2, 10, '2020-09-13 10:57:57', '2020-09-13 10:57:57'),
(41, 'A1UE041004515', 1, 11, '2020-09-13 10:58:35', '2020-09-13 10:58:35'),
(42, 'A1UE041006134', 1, 11, '2020-09-13 10:58:52', '2020-09-13 10:58:52'),
(43, '701531lLM0434X', 2, 11, '2020-09-13 10:59:17', '2020-09-13 10:59:17');

-- --------------------------------------------------------

--
-- Table structure for table `especificacao`
--

CREATE TABLE `especificacao` (
  `id` int UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `especificacao`
--

INSERT INTO `especificacao` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'Selecionar Especificacao', '2018-01-26 07:09:57', '2018-01-26 07:09:57'),
(2, 'Assistente Administrativo', '2019-01-26 07:09:57', '2019-01-26 07:09:57'),
(3, 'Tecnico', '2019-01-26 07:10:07', '2019-01-26 07:10:07'),
(5, 'Gestor', '2019-01-26 07:10:55', '2019-01-26 07:10:55'),
(6, 'Contabilista', '2019-01-26 07:11:11', '2019-01-26 07:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `logentradas`
--

CREATE TABLE `logentradas` (
  `id` int UNSIGNED NOT NULL,
  `quantEntrada` int NOT NULL,
  `quantAnterior` int NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `stock_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logentradas`
--

INSERT INTO `logentradas` (`id`, `quantEntrada`, `quantAnterior`, `user_id`, `stock_id`, `created_at`, `updated_at`) VALUES
(1, 4, 0, 3, 3, '2020-08-29 11:38:03', '2020-08-29 11:38:03'),
(2, 5, 0, 3, 1, '2020-08-29 11:38:11', '2020-08-29 11:38:11'),
(3, 7, 0, 3, 2, '2020-08-29 11:38:19', '2020-08-29 11:38:19'),
(4, 10, 0, 3, 4, '2020-08-29 11:38:30', '2020-08-29 11:38:30'),
(5, 10, 0, 3, 5, '2020-08-29 12:18:52', '2020-08-29 12:18:52'),
(6, 10, 0, 3, 6, '2020-08-29 12:54:20', '2020-08-29 12:54:20'),
(7, 10, 0, 3, 7, '2020-08-29 12:56:22', '2020-08-29 12:56:22'),
(8, 20, 0, 3, 8, '2020-09-13 14:10:18', '2020-09-13 14:10:18'),
(9, 20, 0, 3, 9, '2020-09-13 14:11:01', '2020-09-13 14:11:01'),
(10, 50, 0, 3, 10, '2020-09-13 14:14:32', '2020-09-13 14:14:32'),
(11, 60, 0, 3, 11, '2020-09-13 14:14:49', '2020-09-13 14:14:49'),
(12, 200, 0, 3, 12, '2020-09-13 14:15:05', '2020-09-13 14:15:05'),
(13, 230, 0, 3, 13, '2020-09-13 14:15:26', '2020-09-13 14:15:26');

-- --------------------------------------------------------

--
-- Table structure for table `logsaidas`
--

CREATE TABLE `logsaidas` (
  `id` int UNSIGNED NOT NULL,
  `req_id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logsaidas`
--

INSERT INTO `logsaidas` (`id`, `req_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 3, 3, '2020-09-17 23:15:16', '2020-09-17 23:15:16'),
(9, 4, 4, '2020-11-25 13:43:00', '2020-11-25 13:43:00'),
(10, 6, 4, '2020-12-27 09:18:15', '2020-12-27 09:18:15'),
(11, 6, 4, '2020-12-27 09:20:58', '2020-12-27 09:20:58'),
(12, 5, 3, '2021-01-04 18:43:50', '2021-01-04 18:43:50'),
(13, 5, 3, '2021-01-06 13:03:48', '2021-01-06 13:03:48'),
(14, 5, 3, '2021-01-06 13:22:18', '2021-01-06 13:22:18');

-- --------------------------------------------------------

--
-- Table structure for table `log_solicitacao`
--

CREATE TABLE `log_solicitacao` (
  `id_logsol` int UNSIGNED NOT NULL,
  `descricao` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccaoAvariada` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descSolucao` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `solec_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_solicitacao`
--

INSERT INTO `log_solicitacao` (`id_logsol`, `descricao`, `estado`, `seccaoAvariada`, `descSolucao`, `user_id`, `solec_id`, `created_at`, `updated_at`) VALUES
(1, 'Papel impesso com manchas', 'fechado', 'Image unit', 'Limpeza de unidade de imagem\r\nAjustes\r\ntestes', 3, 2, '2020-09-10 19:38:02', '2020-09-10 19:38:02'),
(2, 'barulho atras da maquina', 'fechado', 'Selecionar', 'Limpesa de toner nos motores (Brushless motor). Testes com sucesso', 3, 3, '2020-09-13 13:24:32', '2020-09-13 13:24:32'),
(3, 'Ma qualidade de imagem.', 'fechado', 'Image unit', 'Verificacao tecnica da maquina, substituicao da unidade e imagem -DR411,DV411, Ajuste de imagem, testes', 2, 1, '2020-11-16 20:27:47', '2020-11-16 20:27:47'),
(4, 'Gaveta partida ma secao de caregamento', 'fechado', 'Selecionar', 'foi substituidojkobk\r\nsajvhasbkjhvabc\r\nascvkashbckascbasc', 2, 7, '2020-11-25 13:44:50', '2020-11-25 13:44:50'),
(5, 'FIm do ciclo de vida', 'fechado', 'Image unit', 'reset para segunda rotacao de unidade de imagem', 2, 8, '2020-12-08 09:58:47', '2020-12-08 09:58:47'),
(6, 'Drum need to be raplaced', 'fechado', 'Image unit', 'eset para 2 rotacao Do drum', 2, 9, '2020-12-08 09:59:08', '2020-12-08 09:59:08'),
(7, 'Developing unit end of life', 'fechado', 'Image unit', 'limpeza do contador do consumivel, limpeza geral da maquina, testes', 6, 10, '2020-12-09 14:25:54', '2020-12-09 14:25:54'),
(8, 'Pessima qualidade de imagem e sai com riscos', 'fechado', 'Image unit', 'Limpeza dec clean blade da maquina, ajustes de imagem, testes', 6, 6, '2020-12-09 14:26:46', '2020-12-09 14:26:46');

-- --------------------------------------------------------

--
-- Table structure for table `marca`
--

CREATE TABLE `marca` (
  `id` int UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marca`
--

INSERT INTO `marca` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'Konica Minolta', '2019-01-20 09:32:43', '2019-01-20 09:32:43'),
(2, 'Lexmark', '2019-01-20 09:32:52', '2019-01-20 09:32:52'),
(3, 'Samsung', '2019-01-22 08:21:11', '2019-01-22 08:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_17_154429_create_tabela_especificacao', 1),
(4, '2018_12_17_154436_create_tabela_marca', 1),
(5, '2018_12_17_154453_create_tabela_modelo', 1),
(6, '2018_12_17_154515_create_tabela_avaria', 1),
(7, '2018_12_17_154528_create_tabela_provincia', 1),
(8, '2018_12_17_154615_create_tabela_distrito', 1),
(9, '2018_12_17_154630_create_tabela_consumivel', 1),
(10, '2018_12_17_154644_create_tabela_cliente', 1),
(11, '2018_12_17_154702_create_tabela_equipamento', 1),
(12, '2018_12_17_154714_create_tabela_solecitacao', 1),
(13, '2018_12_17_154739_create_tabela_alocacao', 1),
(14, '2019_01_28_202741_create_Stock_table', 1),
(15, '2019_01_28_202744_create_tabela_requisicoes', 1),
(16, '2019_01_28_202745_create_tabela_produto', 1),
(17, '2019_01_28_202746_create_tabela_logsaidas', 1),
(18, '2019_02_22_194559_create_table_logentradas', 1),
(19, '2019_02_26_112949_create_table_pedentes', 1),
(20, '2020_04_13_142705_create_table_log_solicitacao', 1),
(21, '2020_05_09_192443_create_tabiva', 1),
(22, '2020_05_09_192611_create_preco_actividade', 1),
(23, '2020_05_09_195722_create_cotacao_solic', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modelo`
--

CREATE TABLE `modelo` (
  `id` int UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modelo`
--

INSERT INTO `modelo` (`id`, `nome`, `marca_id`, `created_at`, `updated_at`) VALUES
(1, 'B363', 1, '2019-01-22 19:48:27', '2019-01-22 19:48:27'),
(2, 'XM1140', 2, '2019-01-22 19:49:52', '2019-01-22 19:49:52'),
(3, 'C224e', 1, '2019-02-05 02:02:26', '2019-02-05 02:02:26'),
(4, 'C454e', 1, '2019-02-05 02:02:36', '2019-02-05 02:02:36'),
(5, 'C360', 1, '2019-02-05 02:03:08', '2019-02-05 02:03:08'),
(6, 'C280', 1, '2019-02-05 02:03:12', '2019-02-05 02:03:12'),
(7, 'C220', 1, '2019-02-05 02:03:17', '2019-02-05 02:03:17'),
(8, 'B367', 1, '2019-02-05 02:03:46', '2019-02-05 02:03:46'),
(9, 'B227', 1, '2019-02-05 02:03:52', '2019-02-05 02:03:52'),
(10, 'B215', 1, '2019-02-05 02:04:07', '2019-02-05 02:04:07'),
(11, 'X795dte', 2, '2019-02-05 02:05:16', '2019-02-05 02:05:16'),
(12, 'XM1140', 2, '2019-02-05 02:05:26', '2019-02-05 02:05:26'),
(13, 'XS748', 2, '2019-02-05 02:05:38', '2019-02-05 02:05:38'),
(14, 'X364dn', 2, '2019-02-05 02:05:51', '2019-02-05 02:05:51'),
(15, 'B42', 1, '2019-02-05 02:07:07', '2019-02-05 02:07:07'),
(16, 'XC2132', 2, '2020-03-26 15:24:30', '2020-03-26 15:24:30'),
(17, 'XM3150', 2, '2020-09-13 10:35:46', '2020-09-13 10:35:46'),
(18, 'XM1242', 2, '2020-09-13 10:36:02', '2020-09-13 10:36:02'),
(19, 'XM1246', 2, '2020-09-13 10:36:10', '2020-09-13 10:36:10'),
(20, 'XM3250', 2, '2020-09-13 10:40:27', '2020-09-13 10:40:27'),
(21, 'B423', 1, '2020-09-13 10:46:14', '2020-09-13 10:46:14'),
(22, 'M3150', 2, '2020-09-13 10:48:28', '2020-09-13 10:48:28'),
(23, 'B283', 1, '2020-09-13 10:51:14', '2020-09-13 10:51:14'),
(24, 'B223', 1, '2020-09-13 10:53:10', '2020-09-13 10:53:10'),
(25, 'C284', 1, '2020-09-13 10:54:51', '2020-09-13 10:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `preco_actividade`
--

CREATE TABLE `preco_actividade` (
  `id` int UNSIGNED NOT NULL,
  `preco` double(15,8) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `idprod` int UNSIGNED NOT NULL,
  `tipoIten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partN` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quntidade` int NOT NULL,
  `req_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`idprod`, `tipoIten`, `partN`, `descricao`, `quntidade`, `req_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 'A2RH031', NULL, 1, 3, '2020-08-29 11:52:47', '2020-08-29 11:52:47'),
(2, NULL, 'A3EW091', NULL, 1, 3, '2020-08-29 11:52:47', '2020-08-29 11:52:47'),
(3, NULL, 'A3EW314', NULL, 1, 3, '2020-08-29 11:52:47', '2020-08-29 11:52:47'),
(8, NULL, 'A02FM20000', NULL, 1, 5, '2020-11-23 17:40:43', '2020-11-23 17:40:43'),
(9, NULL, 'A00J500012', NULL, 1, 5, '2020-11-23 17:40:44', '2020-11-23 17:40:44'),
(10, NULL, 'A21U3G119', NULL, 1, 6, '2020-11-25 08:58:33', '2020-11-25 08:58:33'),
(11, NULL, 'A02FM20000', NULL, 1, 7, '2020-12-28 06:55:51', '2020-12-28 06:55:51');

-- --------------------------------------------------------

--
-- Table structure for table `provincia`
--

CREATE TABLE `provincia` (
  `id` int UNSIGNED NOT NULL,
  `nomepv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provincia`
--

INSERT INTO `provincia` (`id`, `nomepv`, `created_at`, `updated_at`) VALUES
(1, 'Selecionar Provincia', '2018-01-26 01:00:45', '2018-01-26 01:00:45'),
(2, 'Maputo', '2019-01-26 01:00:45', '2019-01-26 01:00:45'),
(3, 'Gaza', '2019-01-26 01:03:05', '2019-01-26 01:03:05'),
(4, 'Inhambane', '2019-01-26 01:03:30', '2019-01-26 01:03:30'),
(5, 'Manica', '2019-01-26 01:04:19', '2019-01-26 01:04:19'),
(6, 'Sofala', '2019-01-26 01:04:39', '2019-01-26 01:04:39'),
(7, 'Tete', '2019-01-26 01:04:51', '2019-01-26 01:04:51'),
(8, 'Zambezia', '2019-01-26 01:05:06', '2019-01-26 01:05:06'),
(9, 'Nampula', '2019-01-26 01:05:18', '2019-01-26 01:05:18'),
(10, 'Niassa', '2019-01-26 01:05:26', '2019-01-26 01:05:26'),
(11, 'Cabo Delgado', '2019-01-26 01:05:36', '2019-01-26 01:05:36');

-- --------------------------------------------------------

--
-- Table structure for table `requisicoes`
--

CREATE TABLE `requisicoes` (
  `id` int UNSIGNED NOT NULL,
  `nivelurgenc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `solec_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requisicoes`
--

INSERT INTO `requisicoes` (`id`, `nivelurgenc`, `estado`, `user_id`, `solec_id`, `created_at`, `updated_at`) VALUES
(3, 'Normal', 'aprovado', 3, 1, '2020-08-29 11:52:47', '2020-08-29 11:52:47'),
(4, 'Normal', 'aberto', 3, 4, '2020-09-13 14:16:50', '2020-09-13 14:16:50'),
(5, 'Urgente', 'aberto', 2, 4, '2020-11-23 17:40:43', '2020-11-23 17:40:43'),
(6, 'Normal', 'aberto', 1, 5, '2020-11-25 08:58:33', '2020-11-25 08:58:33'),
(7, 'Normal', 'aberto', 6, 11, '2020-12-28 06:55:50', '2020-12-28 06:55:50');

-- --------------------------------------------------------

--
-- Table structure for table `solecitacao`
--

CREATE TABLE `solecitacao` (
  `id` int UNSIGNED NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clie_id` int UNSIGNED NOT NULL,
  `avaria_id` int UNSIGNED NOT NULL,
  `equip_id` int UNSIGNED NOT NULL,
  `distrit_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solecitacao`
--

INSERT INTO `solecitacao` (`id`, `descricao`, `estado`, `clie_id`, `avaria_id`, `equip_id`, `distrit_id`, `created_at`, `updated_at`) VALUES
(1, 'Ma qualidade de imagem.', 'fechado', 6, 2, 6, 1, '2020-03-26 15:27:29', '2020-03-26 15:27:29'),
(2, 'Papel impesso com manchas', 'fechado', 3, 2, 1, 7, '2020-03-26 15:29:09', '2020-03-26 15:29:09'),
(3, 'barulho atras da maquina', 'fechado', 3, 3, 4, 7, '2020-04-13 14:55:09', '2020-04-13 14:55:09'),
(4, 'paper jam na parte de caregamento de papel', 'aprovado', 11, 4, 41, 1, '2020-09-13 13:19:53', '2020-11-25 13:43:01'),
(5, 'Jam no caregamento de papel', 'aprovado', 9, 4, 25, 1, '2020-09-13 13:21:39', '2020-12-27 09:18:16'),
(6, 'Pessima qualidade de imagem e sai com riscos', 'fechado', 10, 2, 35, 1, '2020-09-13 13:22:22', '2020-09-13 13:22:22'),
(7, 'Gaveta partida ma secao de caregamento', 'fechado', 10, 4, 36, 1, '2020-10-28 16:41:28', '2020-10-28 16:41:28'),
(8, 'FIm do ciclo de vida', 'fechado', 11, 2, 41, 55, '2020-10-28 19:51:24', '2020-10-28 19:51:24'),
(9, 'Drum need to be raplaced', 'fechado', 5, 2, 2, 1, '2020-12-08 09:54:18', '2020-12-08 09:54:18'),
(10, 'Developing unit end of life', 'fechado', 3, 2, 4, 1, '2020-12-08 09:56:33', '2020-12-08 09:56:33'),
(11, 'Cabo da lampada rebentada', 'pedente', 2, 1, 3, 2, '2020-12-09 14:06:38', '2020-12-09 14:06:38'),
(12, 'mancha na copia ou impreecao', 'espera', 6, 2, 7, 1, '2020-12-09 17:25:13', '2020-12-09 17:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int UNSIGNED NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partN` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidade` int NOT NULL,
  `numeroDu` int DEFAULT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `cons_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `tipo`, `partN`, `quantidade`, `numeroDu`, `user_id`, `cons_id`, `created_at`, `updated_at`) VALUES
(1, 'Consumivel', '2525500', 5, 4335234, 3, 7, '2020-08-29 11:28:57', '2020-08-29 11:38:11'),
(2, 'Consumivel', 'A21U3G119', 7, 123232, 3, 8, '2020-08-29 11:30:04', '2020-08-29 11:38:19'),
(3, 'Consumivel', 'A21U3G120', 4, 12321, 3, 9, '2020-08-29 11:31:16', '2020-08-29 11:38:03'),
(4, 'Consumivel', 'A21U3G121', 10, 212223, 3, 10, '2020-08-29 11:31:43', '2020-08-29 11:38:30'),
(5, 'Consumivel', 'A2021143', 10, 32345, 3, 11, '2020-08-29 11:32:27', '2020-08-29 12:18:52'),
(6, 'Consumivel', 'A2100A543', 10, 123232, 3, 12, '2020-08-29 11:32:52', '2020-08-29 12:54:20'),
(7, 'Peca', 'A2RH031', 10, 13131, 3, 13, '2020-08-29 11:33:53', '2020-08-29 12:56:22'),
(8, 'Peca', 'A3EW091', 20, 2031123, 3, 14, '2020-08-29 11:34:45', '2020-09-13 14:10:18'),
(9, 'Consumivel', 'A3EW314', 20, 1413125, 3, 15, '2020-08-29 11:37:28', '2020-09-13 14:11:01'),
(10, 'Peca', 'A02FM20000', 50, 4141234, 3, 16, '2020-09-13 14:12:29', '2020-09-13 14:14:32'),
(11, 'Peca', 'A02AM20000', 60, 2342345, 3, 17, '2020-09-13 14:12:55', '2020-09-13 14:14:49'),
(12, 'Consumivel', 'A00J500012', 200, 324563, 3, 18, '2020-09-13 14:13:30', '2020-09-13 14:15:05'),
(13, 'Consumivel', 'A00J500031', 230, 634363, 3, 19, '2020-09-13 14:13:59', '2020-09-13 14:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `tabiva`
--

CREATE TABLE `tabiva` (
  `id` int UNSIGNED NOT NULL,
  `iva` double(15,8) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_pedentes`
--

CREATE TABLE `table_pedentes` (
  `id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `nameapelido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nivel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nameapelido`, `username`, `email`, `password`, `status`, `nivel`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Candido Malopa', 'Candido', 'candido.malopa@itecgroup.co.mz', '$2y$10$w3IVI23VCiC6KXblxhVJoOysTnggxvi48s2xStPANVAOGdqtwSxmG', 'Activo', '3', 'NBIreOqMFu0b7KcDi6Y1cR3sQ574LJnqAena7vi6aXzARiW5JUXh0cETDg4m', NULL, '2020-08-29 09:42:23'),
(2, 'Paulo Manjate', 'paulo', 'paulo.manjate@itecgroup.co.mz', '$2y$10$zS01m3sF9NhwTyZJ5zHKtux7DdIp14QXs6TE1TO9LFUi6NHuYiI9S', 'Activo', '3', 'wjuCYGKyTC7rU7Z1tQBsZauyAhIkBQFP1dpBFl2I6GqUQhSd9T4jdKAEqMyp', '2019-01-20 21:39:53', '2020-03-26 17:14:03'),
(3, 'Admin', 'Service Desk', 'demo@itecgroup.co.mz', '$2y$10$6RxBSin0hYth5P3TGIQ.quB2z/ce5gFbByaBhnRyjXDYSY4EQD4gi', 'Activo', '2', 'HQqFCVPaGVZ8qdhPBtjGtU0UaU3SKjsibfBRHEiZq5MHhHz7AYqGuyO3LBqC', '2019-01-26 21:56:17', '2020-08-29 09:38:39'),
(4, 'Helson Jossias', 'helson', 'helson.jossias@itecgroup.co.mz', '$2y$10$tYGWoeGdVNA2zP11nrvZN.QrWUIKyzu6nNUqtHNzF/Dv7dt7H8nxi', 'Activo', '5', 'QEX3lH8eoVMzjY4m5bqaxUGcBNnxc8uvu766CQDnZH79MqK4CKIi9kVx7Bif', '2020-03-26 17:11:31', '2020-03-26 17:11:31'),
(5, 'Nelma Roberto', 'Nelma Roberto', 'nelma.roberto@itecgroup.co.mz', '$2y$10$b1QyVYgxcK2hM6Jba1ke7ODyjrkWgUpHlLvmRetLoj2aVgJq5IUAq', 'Activo', '6', NULL, '2020-03-26 17:12:37', '2020-03-26 17:12:37'),
(6, 'Apoliario Albano', 'Apolinario', 'apolinario.albano@itecgroup.co.mz', '$2y$10$1njlJjfqHG0KIAcSeIGf5uie81h6a/0b4dx.0AuaWsoTAiA9TboaG', 'Activo', '3', 'rJwok1m2WHQdUoDcNygnOlLnxSAwCOTfs50QqORemripn9y79wkNwfiVKMNf', '2020-03-26 17:45:09', '2020-12-09 14:23:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alocacao`
--
ALTER TABLE `alocacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alocacao_user_id_foreign` (`user_id`),
  ADD KEY `alocacao_solec_id_foreign` (`solec_id`);

--
-- Indexes for table `avaria`
--
ALTER TABLE `avaria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_distri_id_foreign` (`distri_id`);

--
-- Indexes for table `consumivel`
--
ALTER TABLE `consumivel`
  ADD PRIMARY KEY (`idcons`);

--
-- Indexes for table `cotacao_solic`
--
ALTER TABLE `cotacao_solic`
  ADD PRIMARY KEY (`idcot`),
  ADD KEY `cotacao_solic_user_id_foreign` (`user_id`),
  ADD KEY `cotacao_solic_preco_id_foreign` (`preco_id`),
  ADD KEY `cotacao_solic_cliente_id_foreign` (`cliente_id`);

--
-- Indexes for table `distrito`
--
ALTER TABLE `distrito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `distrito_prov_id_foreign` (`prov_id`);

--
-- Indexes for table `equipamento`
--
ALTER TABLE `equipamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipamento_model_id_foreign` (`model_id`),
  ADD KEY `equipamento_cliente_id_foreign` (`cliente_id`);

--
-- Indexes for table `especificacao`
--
ALTER TABLE `especificacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logentradas`
--
ALTER TABLE `logentradas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logentradas_user_id_foreign` (`user_id`),
  ADD KEY `logentradas_stock_id_foreign` (`stock_id`);

--
-- Indexes for table `logsaidas`
--
ALTER TABLE `logsaidas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logsaidas_user_id_foreign` (`user_id`),
  ADD KEY `logsaidas_req_id_foreign` (`req_id`);

--
-- Indexes for table `log_solicitacao`
--
ALTER TABLE `log_solicitacao`
  ADD PRIMARY KEY (`id_logsol`),
  ADD KEY `log_solicitacao_user_id_foreign` (`user_id`),
  ADD KEY `log_solicitacao_solec_id_foreign` (`solec_id`);

--
-- Indexes for table `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modelo_marca_id_foreign` (`marca_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `preco_actividade`
--
ALTER TABLE `preco_actividade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idprod`),
  ADD KEY `produto_req_id_foreign` (`req_id`);

--
-- Indexes for table `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requisicoes`
--
ALTER TABLE `requisicoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requisicoes_user_id_foreign` (`user_id`),
  ADD KEY `requisicoes_solec_id_foreign` (`solec_id`);

--
-- Indexes for table `solecitacao`
--
ALTER TABLE `solecitacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `solecitacao_clie_id_foreign` (`clie_id`),
  ADD KEY `solecitacao_equip_id_foreign` (`equip_id`),
  ADD KEY `solecitacao_avaria_id_foreign` (`avaria_id`),
  ADD KEY `solecitacao_distrit_id_foreign` (`distrit_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stock_user_id_foreign` (`user_id`),
  ADD KEY `stock_cons_id_foreign` (`cons_id`);

--
-- Indexes for table `tabiva`
--
ALTER TABLE `tabiva`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_pedentes`
--
ALTER TABLE `table_pedentes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alocacao`
--
ALTER TABLE `alocacao`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `avaria`
--
ALTER TABLE `avaria`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `consumivel`
--
ALTER TABLE `consumivel`
  MODIFY `idcons` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cotacao_solic`
--
ALTER TABLE `cotacao_solic`
  MODIFY `idcot` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `distrito`
--
ALTER TABLE `distrito`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `equipamento`
--
ALTER TABLE `equipamento`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `especificacao`
--
ALTER TABLE `especificacao`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `logentradas`
--
ALTER TABLE `logentradas`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `logsaidas`
--
ALTER TABLE `logsaidas`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `log_solicitacao`
--
ALTER TABLE `log_solicitacao`
  MODIFY `id_logsol` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `preco_actividade`
--
ALTER TABLE `preco_actividade`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idprod` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `requisicoes`
--
ALTER TABLE `requisicoes`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `solecitacao`
--
ALTER TABLE `solecitacao`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tabiva`
--
ALTER TABLE `tabiva`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_pedentes`
--
ALTER TABLE `table_pedentes`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alocacao`
--
ALTER TABLE `alocacao`
  ADD CONSTRAINT `alocacao_solec_id_foreign` FOREIGN KEY (`solec_id`) REFERENCES `solecitacao` (`id`),
  ADD CONSTRAINT `alocacao_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_distri_id_foreign` FOREIGN KEY (`distri_id`) REFERENCES `distrito` (`id`);

--
-- Constraints for table `cotacao_solic`
--
ALTER TABLE `cotacao_solic`
  ADD CONSTRAINT `cotacao_solic_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `cotacao_solic_preco_id_foreign` FOREIGN KEY (`preco_id`) REFERENCES `preco_actividade` (`id`),
  ADD CONSTRAINT `cotacao_solic_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `distrito`
--
ALTER TABLE `distrito`
  ADD CONSTRAINT `distrito_prov_id_foreign` FOREIGN KEY (`prov_id`) REFERENCES `provincia` (`id`);

--
-- Constraints for table `equipamento`
--
ALTER TABLE `equipamento`
  ADD CONSTRAINT `equipamento_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `equipamento_model_id_foreign` FOREIGN KEY (`model_id`) REFERENCES `modelo` (`id`);

--
-- Constraints for table `logentradas`
--
ALTER TABLE `logentradas`
  ADD CONSTRAINT `logentradas_stock_id_foreign` FOREIGN KEY (`stock_id`) REFERENCES `stock` (`id`),
  ADD CONSTRAINT `logentradas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `logsaidas`
--
ALTER TABLE `logsaidas`
  ADD CONSTRAINT `logsaidas_req_id_foreign` FOREIGN KEY (`req_id`) REFERENCES `requisicoes` (`id`),
  ADD CONSTRAINT `logsaidas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `log_solicitacao`
--
ALTER TABLE `log_solicitacao`
  ADD CONSTRAINT `log_solicitacao_solec_id_foreign` FOREIGN KEY (`solec_id`) REFERENCES `solecitacao` (`id`),
  ADD CONSTRAINT `log_solicitacao_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `modelo_marca_id_foreign` FOREIGN KEY (`marca_id`) REFERENCES `marca` (`id`);

--
-- Constraints for table `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_req_id_foreign` FOREIGN KEY (`req_id`) REFERENCES `requisicoes` (`id`);

--
-- Constraints for table `requisicoes`
--
ALTER TABLE `requisicoes`
  ADD CONSTRAINT `requisicoes_solec_id_foreign` FOREIGN KEY (`solec_id`) REFERENCES `solecitacao` (`id`),
  ADD CONSTRAINT `requisicoes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `solecitacao`
--
ALTER TABLE `solecitacao`
  ADD CONSTRAINT `solecitacao_avaria_id_foreign` FOREIGN KEY (`avaria_id`) REFERENCES `avaria` (`id`),
  ADD CONSTRAINT `solecitacao_clie_id_foreign` FOREIGN KEY (`clie_id`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `solecitacao_distrit_id_foreign` FOREIGN KEY (`distrit_id`) REFERENCES `distrito` (`id`),
  ADD CONSTRAINT `solecitacao_equip_id_foreign` FOREIGN KEY (`equip_id`) REFERENCES `equipamento` (`id`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_cons_id_foreign` FOREIGN KEY (`cons_id`) REFERENCES `consumivel` (`idcons`),
  ADD CONSTRAINT `stock_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
