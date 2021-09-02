-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2021 at 08:28 AM
-- Server version: 8.0.25-0ubuntu0.20.04.1
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
(7, 'Papel impesso com manchas', 'espera', 'Normal', 7, 2, '2021-02-19 10:14:04', '2021-02-19 10:14:04'),
(8, 'barulho atras da maquina', 'fechado', 'Normal', 2, 3, '2021-02-19 10:14:26', '2021-02-19 10:14:26'),
(9, 'qualidade de imagem', 'fechado', 'Normal', 8, 4, '2021-04-03 10:06:10', '2021-04-03 10:06:10'),
(10, 'nao movinta o scan', 'espera', 'Normal', 1, 5, '2021-04-07 08:15:47', '2021-04-07 08:15:47'),
(11, 'adf com peoblemas', 'fechado', 'Normal', 6, 6, '2021-04-07 08:16:38', '2021-04-07 08:16:38');

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
(3, 'Brashless Motor', 'O problema pode ser causado por desgaste das emgrenagens, ou excesso de poeiras nos drive sections.', '2019-01-26 22:18:24', '2019-01-26 22:18:24');

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
(3, 'Barloword', 'RENTAL', 'Mona@barloword.co.mz', '11111213', '21343533', 'Lingamo', 'Uniao Africana', 7, '2019-02-05 03:02:34', '2019-02-05 03:02:34'),
(4, 'Barloword', 'RENTAL', 'Moma@Barloword.co.mz', '1111133523', '2132423324', 'Moatize', NULL, 50, '2019-02-05 03:04:02', '2019-02-05 03:04:02'),
(5, 'Norco', 'CPP', 'Marknorton@norco.co.mz', '1111324323', '2143445634', 'Central', 'Vladimir Lenine', 1, '2019-02-05 03:05:59', '2019-02-05 03:05:59'),
(6, 'BP', 'RENTAL', 'baptista@bpmoz.co.mz', '3141244315', '21383764', 'central', '25 de Setembro', 1, '2020-03-26 15:23:18', '2020-03-26 15:23:18'),
(7, 'Lugar do Mar', 'RENTAL', 'joao@lugarmar.co.mz', '40233960', '2190939', NULL, NULL, 6, '2020-03-26 15:23:59', '2020-03-26 15:23:59');

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
(7, '53242423331', 1, 6, '2020-03-26 15:25:36', '2020-03-26 15:25:36');

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
-- Table structure for table `logsaidas`
--

CREATE TABLE `logsaidas` (
  `id` int UNSIGNED NOT NULL,
  `estado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `req_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'barulho atras da maquina', 'fechado', 'Tray', 'substituicao de guide plate, testes de passagem de papel, substituicao de rolos', 2, 3, '2021-03-14 18:00:29', '2021-03-14 18:00:29'),
(2, 'Ma qualidade de imagem.', 'fechado', 'Image unit', 'Verificacao tecnica da mquina, limpeza geral, substituicao de DR512, TESTES DE QUALIDADE DE IMAGEM', 2, 1, '2021-04-03 10:27:23', '2021-04-03 10:27:23'),
(3, 'Ma qualidade de imagem.', 'fechado', 'Image unit', 'Verificacao tecnica da mquina, limpeza geral, substituicao de DR512, TESTES DE QUALIDADE DE IMAGEM', 2, 1, '2021-04-03 10:41:48', '2021-04-03 10:41:48'),
(4, 'Ma qualidade de imagem.', 'fechado', 'Image unit', 'Verificacao tecnica da mquina, limpeza geral, substituicao de DR512, TESTES DE QUALIDADE DE IMAGEM', 2, 1, '2021-04-03 10:42:09', '2021-04-03 10:42:09'),
(5, 'Ma qualidade de imagem.', 'fechado', 'Image unit', 'Verificacao tecnica da mquina, limpeza geral, substituicao de DR512, TESTES DE QUALIDADE DE IMAGEM', 2, 1, '2021-04-03 10:44:14', '2021-04-03 10:44:14'),
(6, 'qualidade de imagem', 'fechado', 'Selecionar Avaria', 'Substituicao de Drums testes de qualidade', 8, 4, '2021-04-03 11:30:32', '2021-04-03 11:30:32'),
(7, 'adf com peoblemas', 'fechado', 'Image unit', 'replacement daunidade', 6, 6, '2021-04-07 08:18:50', '2021-04-07 08:18:50');

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
(16, 'XC2132', 2, '2020-03-26 15:24:30', '2020-03-26 15:24:30');

-- --------------------------------------------------------

--
-- Table structure for table `movimento`
--

CREATE TABLE `movimento` (
  `id` int UNSIGNED NOT NULL,
  `entrada` bigint DEFAULT NULL,
  `saida` int DEFAULT NULL,
  `numeroDu` bigint DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `req_id` int UNSIGNED DEFAULT NULL,
  `stock_id` int UNSIGNED DEFAULT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `solec_id` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movimento`
--

INSERT INTO `movimento` (`id`, `entrada`, `saida`, `numeroDu`, `estado`, `req_id`, `stock_id`, `user_id`, `solec_id`, `created_at`, `updated_at`) VALUES
(1, 10, 0, 141312513, 'entrada', NULL, 3, 3, NULL, '2021-02-19 12:47:51', '2021-02-19 12:47:51'),
(2, 16, 0, 123232456, 'entrada', NULL, 4, 3, NULL, '2021-02-19 12:48:11', '2021-02-19 12:48:11'),
(3, 5, 0, 131314309, 'entrada', NULL, 3, 3, NULL, '2021-02-19 19:39:20', '2021-02-19 19:39:20'),
(4, 3, 0, 332525245, 'entrada', NULL, 4, 3, NULL, '2021-03-06 08:44:59', '2021-03-06 08:44:59'),
(5, 5, 0, 342353452, 'entrada', NULL, 3, 3, NULL, '2021-03-06 08:54:13', '2021-03-06 08:54:13'),
(6, 5, 0, 245342515, 'entrada', NULL, 4, 3, NULL, '2021-03-06 09:07:32', '2021-03-06 09:07:32'),
(7, 10, 0, 567889076, 'entrada', NULL, 5, 3, NULL, '2021-03-06 14:48:16', '2021-03-06 14:48:16'),
(8, 67, 0, 234567438, 'entrada', NULL, 10, 3, NULL, '2021-03-09 21:42:08', '2021-03-09 21:42:08'),
(9, 67, 0, 345676543, 'entrada', NULL, 10, 3, NULL, '2021-03-09 21:42:10', '2021-03-09 21:42:10'),
(10, 50, 0, 765456780, 'entrada', NULL, 11, 3, NULL, '2021-03-09 21:42:33', '2021-03-09 21:42:33'),
(11, 6, 0, 456787654, 'entrada', NULL, 9, 3, NULL, '2021-03-09 21:42:52', '2021-03-09 21:42:52'),
(12, 43, 0, 987656789, 'entrada', NULL, 8, 3, NULL, '2021-03-09 21:43:12', '2021-03-09 21:43:12'),
(13, 16, 0, 234543269, 'entrada', NULL, 13, 3, NULL, '2021-04-03 10:14:16', '2021-04-03 10:14:16'),
(14, 10, 0, 234567654, 'entrada', NULL, 14, 3, NULL, '2021-04-03 10:14:26', '2021-04-03 10:14:26');

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
  `quantidade` int NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partN` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `solec_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requisicoes`
--

INSERT INTO `requisicoes` (`id`, `nivelurgenc`, `quantidade`, `estado`, `partN`, `user_id`, `solec_id`, `created_at`, `updated_at`) VALUES
(1, 'Normal', 1, 'em_espera', 'A0ED578400', 2, 3, '2021-03-11 21:35:20', '2021-03-11 21:35:20'),
(2, 'Normal', 1, 'em_espera', '2025500', 2, 1, '2021-03-13 18:38:48', '2021-03-13 18:38:48'),
(3, 'Normal', 1, 'em_espera', 'A3EW091', 2, 1, '2021-03-13 18:38:49', '2021-03-13 18:38:49'),
(4, 'Normal', 3, 'em_espera', 'A0EDORD', 8, 4, '2021-04-03 10:15:00', '2021-04-03 10:15:00'),
(5, 'Normal', 1, 'em_espera', 'A0ED0KD', 8, 4, '2021-04-03 10:15:01', '2021-04-03 10:15:01');

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
(1, 'Ma qualidade de imagem.', 'fechado', 6, 2, 6, 1, '2020-03-26 15:27:29', '2021-04-03 10:24:19'),
(2, 'Papel impresso com manchas', 'espera', 3, 2, 1, 7, '2020-03-26 15:29:09', '2020-03-26 15:29:09'),
(3, 'barulho atras da maquina', 'fechado', 3, 3, 4, 7, '2020-04-13 14:55:09', '2021-03-14 14:53:34'),
(4, 'qualidade de imagem', 'fechado', 6, 1, 6, 1, '2021-04-03 10:02:47', '2021-04-03 11:26:56'),
(5, 'nao movinta o scan', 'espera', 2, 1, 3, 2, '2021-04-07 08:15:23', '2021-04-07 08:15:23'),
(6, 'adf com peoblemas', 'fechado', 3, 1, 1, 2, '2021-04-07 08:16:28', '2021-04-07 08:16:28');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int UNSIGNED NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partN` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `tipo`, `descricao`, `partN`, `cor`, `created_at`, `updated_at`) VALUES
(3, 'Consumivel', 'DV411', '2025500', NULL, '2021-02-07 21:31:23', '2021-02-07 21:31:23'),
(4, 'Consumivel', 'DR411', 'A3EW091', NULL, '2021-02-07 21:31:42', '2021-02-07 21:31:42'),
(5, 'Peca', 'Guide Plate (Tray 2)', 'A0ED578400', NULL, '2021-03-06 09:09:56', '2021-03-06 09:09:56'),
(6, 'Peca', 'Guide Plate (Tray 1)', 'A0ED568400', NULL, '2021-03-06 09:10:32', '2021-03-06 09:10:32'),
(7, 'Peca', 'Roller', 'A00J563600', NULL, '2021-03-06 09:12:35', '2021-03-06 09:12:35'),
(8, 'Peca', 'Roller', 'A02EM20200', NULL, '2021-03-06 09:12:59', '2021-03-06 09:12:59'),
(9, 'Peca', 'Roller', 'A02EM20000', NULL, '2021-03-06 09:13:44', '2021-03-06 09:13:44'),
(10, 'Peca', 'Separator Roller', 'A143PP0100', NULL, '2021-03-06 09:14:25', '2021-03-06 09:14:25'),
(11, 'Peca', 'Pressure Spring', 'A143PP4J00', NULL, '2021-03-06 09:14:55', '2021-03-06 09:14:55'),
(12, 'Consumivel', 'Developing Unit', 'A1UDR73000', NULL, '2021-03-06 09:15:51', '2021-03-06 09:15:51'),
(13, 'Consumivel', 'DR512CMY', 'A0EDORD', NULL, '2021-04-03 10:11:29', '2021-04-03 10:11:29'),
(14, 'Consumivel', 'DR512K', 'A0ED0KD', NULL, '2021-04-03 10:12:09', '2021-04-03 10:12:09');

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
(1, 'Candido Malopa', 'Candido', 'candido.malopa@itecgroup.co.mz', '$2y$10$w3IVI23VCiC6KXblxhVJoOysTnggxvi48s2xStPANVAOGdqtwSxmG', 'Activo', '3', 'NBIreOqMFu0b7KcDi6Y1cR3sQ574LJnqAena7vi6aXzARiW5JUXh0cETDg4m', NULL, '2020-08-29 07:42:23'),
(2, 'Paulo Manjate', 'paulo', 'paulo.manjate@itecgroup.co.mz', '$2y$10$zS01m3sF9NhwTyZJ5zHKtux7DdIp14QXs6TE1TO9LFUi6NHuYiI9S', 'Activo', '3', 'GqN1Hmrgcz6UdmpQKlt0beOiPTol7gmXVX6Ofyz3GXQQxq9PY5XgGbLukYsI', '2019-01-20 19:39:53', '2020-03-26 15:14:03'),
(3, 'Admin', 'Service Desk', 'demo@itecgroup.co.mz', '$2y$10$6RxBSin0hYth5P3TGIQ.quB2z/ce5gFbByaBhnRyjXDYSY4EQD4gi', 'Activo', '2', 'TrRhisEIPOGW653lwymCmJbx91ubcYVAItcLkQ1cebUJLf6BFEt59w3Oh8Fp', '2019-01-26 19:56:17', '2020-08-29 07:38:39'),
(4, 'Helson Jossias', 'helson', 'helson.jossias@itecgroup.co.mz', '$2y$10$tYGWoeGdVNA2zP11nrvZN.QrWUIKyzu6nNUqtHNzF/Dv7dt7H8nxi', 'Activo', '5', 'KeKEqwdd1LpMY5Ns8zE62cv3wFyMe6waTSIgyuIB851hsKOmYaxYrj7f81y8', '2020-03-26 15:11:31', '2020-03-26 15:11:31'),
(5, 'Nelma Roberto', 'Nelma Roberto', 'nelma.roberto@itecgroup.co.mz', '$2y$10$b1QyVYgxcK2hM6Jba1ke7ODyjrkWgUpHlLvmRetLoj2aVgJq5IUAq', 'Activo', '6', NULL, '2020-03-26 15:12:37', '2020-03-26 15:12:37'),
(6, 'Apoliario Albano', 'Apolinario', 'apolinario.albano@itecgroup.co.mz', '$2y$10$1njlJjfqHG0KIAcSeIGf5uie81h6a/0b4dx.0AuaWsoTAiA9TboaG', 'Activo', '3', 'F82JYZjPdPnsxPh4yewWnoUiP5McFMbscRCeYWp4hGBCwCDwDQOMYba9e9m8', '2020-03-26 15:45:09', '2020-12-09 12:23:10'),
(7, 'Arlindo Pedro', 'Arlindo', 'arlindo.pedro@itecgroup.co.mz', '$2y$10$synX50sKS6gtYOaL56.7Cu/UBrbAwEbNqcgDVgQ3giBC11z25.rIO', 'Activo', '3', NULL, '2021-02-19 10:12:38', '2021-02-19 10:12:38'),
(8, 'Meke Eugenio', 'Meke', 'meque.eugenio@itecgroup.co.mz', '$2y$10$92P8EkJ2Nz3guCIAjprHheLq0DOrkW3s7LOXrevGdo1RGm.dd6h4m', 'Activo', '3', 'g0vqaxwdJpwAOqupgw1TOQutUMDAUld8v9tYguQ2c0jN1uB3BBDYevZ6TLhA', '2021-02-19 10:13:21', '2021-04-03 10:08:24');

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
-- Indexes for table `logsaidas`
--
ALTER TABLE `logsaidas`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `movimento`
--
ALTER TABLE `movimento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movimento_req_id_foreign` (`req_id`),
  ADD KEY `movimento_stock_id_foreign` (`stock_id`),
  ADD KEY `movimento_user_id_foreign` (`user_id`),
  ADD KEY `movimento_solec_id_foreign` (`solec_id`);

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
  ADD KEY `requisicoes_stock_id_foreign` (`partN`),
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabiva`
--
ALTER TABLE `tabiva`
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
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `avaria`
--
ALTER TABLE `avaria`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `especificacao`
--
ALTER TABLE `especificacao`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `logsaidas`
--
ALTER TABLE `logsaidas`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log_solicitacao`
--
ALTER TABLE `log_solicitacao`
  MODIFY `id_logsol` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `movimento`
--
ALTER TABLE `movimento`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `preco_actividade`
--
ALTER TABLE `preco_actividade`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `requisicoes`
--
ALTER TABLE `requisicoes`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `solecitacao`
--
ALTER TABLE `solecitacao`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tabiva`
--
ALTER TABLE `tabiva`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- Constraints for table `movimento`
--
ALTER TABLE `movimento`
  ADD CONSTRAINT `movimento_req_id_foreign` FOREIGN KEY (`req_id`) REFERENCES `requisicoes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `movimento_solec_id_foreign` FOREIGN KEY (`solec_id`) REFERENCES `solecitacao` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `movimento_stock_id_foreign` FOREIGN KEY (`stock_id`) REFERENCES `stock` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `movimento_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
