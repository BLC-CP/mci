-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2024 at 04:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mci`
--

-- --------------------------------------------------------

--
-- Table structure for table `aldeias`
--

CREATE TABLE `aldeias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nrn_aldeia` varchar(255) NOT NULL,
  `id_suku` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aldeias`
--

INSERT INTO `aldeias` (`id`, `nrn_aldeia`, `id_suku`, `created_at`, `updated_at`) VALUES
(5, 'Assalaino', 10, '2024-04-12 16:04:34', '2024-04-12 16:04:34');

-- --------------------------------------------------------

--
-- Table structure for table `atus`
--

CREATE TABLE `atus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nrn_atu` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `atus`
--

INSERT INTO `atus` (`id`, `nrn_atu`, `created_at`, `updated_at`) VALUES
(2, 'Atu', '2024-04-07 07:00:09', '2024-04-07 07:00:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karakterizasauns`
--

CREATE TABLE `karakterizasauns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nrn_karakterizasaun` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karakterizasauns`
--

INSERT INTO `karakterizasauns` (`id`, `nrn_karakterizasaun`, `created_at`, `updated_at`) VALUES
(2, 'Karakterizasaun', '2024-04-07 06:59:41', '2024-04-07 06:59:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_15_061228_create_munisipius_table', 1),
(6, '2024_03_16_060453_create_postus_table', 1),
(7, '2024_03_16_060518_create_sukus_table', 1),
(8, '2024_03_16_060545_create_aldeias_table', 1),
(9, '2024_03_20_130701_create_nasauns_table', 1),
(10, '2024_03_20_131447_create_kuartus_table', 1),
(11, '2024_03_20_131523_create_klientes_table', 1),
(12, '2024_04_05_154136_create_moradas_table', 1),
(13, '2024_04_05_155151_create_atus_table', 1),
(14, '2024_04_05_155344_create_movimentus_table', 1),
(15, '2024_04_05_155515_create_karakterizasauns_table', 1),
(16, '2024_04_05_155647_create_riskus_table', 1),
(17, '2024_04_05_155821_create_pedidus_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `moradas`
--

CREATE TABLE `moradas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nrn_morada` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `moradas`
--

INSERT INTO `moradas` (`id`, `nrn_morada`, `created_at`, `updated_at`) VALUES
(2, 'Morada', '2024-04-07 06:59:21', '2024-04-07 06:59:21');

-- --------------------------------------------------------

--
-- Table structure for table `movimentus`
--

CREATE TABLE `movimentus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nrn_movimentu` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movimentus`
--

INSERT INTO `movimentus` (`id`, `nrn_movimentu`, `created_at`, `updated_at`) VALUES
(4, 'Movimentu', '2024-04-07 06:39:06', '2024-04-07 06:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `munisipius`
--

CREATE TABLE `munisipius` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nrn_munisipiu` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `munisipius`
--

INSERT INTO `munisipius` (`id`, `nrn_munisipiu`, `created_at`, `updated_at`) VALUES
(43, 'Baucau', '2024-04-12 08:26:46', '2024-04-12 08:26:46'),
(44, 'Lautem', '2024-04-12 09:15:47', '2024-04-12 09:15:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pedidus`
--

CREATE TABLE `pedidus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_movimentu` varchar(255) NOT NULL,
  `data_registu` date NOT NULL,
  `dizignasaun_sosial` varchar(255) NOT NULL,
  `enderesu` varchar(255) NOT NULL,
  `numeru_fiskal` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `identifikasaun` varchar(255) NOT NULL,
  `naran_firma` varchar(255) NOT NULL,
  `id_morada` varchar(255) NOT NULL,
  `id_karakterizasaun` varchar(255) NOT NULL,
  `id_risku` varchar(255) NOT NULL,
  `id_atu` varchar(255) NOT NULL,
  `aktividade_estabelesimentu` text NOT NULL,
  `aktividade_prinsipal` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pedidus`
--

INSERT INTO `pedidus` (`id`, `id_movimentu`, `data_registu`, `dizignasaun_sosial`, `enderesu`, `numeru_fiskal`, `telefone`, `email`, `identifikasaun`, `naran_firma`, `id_morada`, `id_karakterizasaun`, `id_risku`, `id_atu`, `aktividade_estabelesimentu`, `aktividade_prinsipal`, `created_at`, `updated_at`) VALUES
(4, '4', '2023-01-09', 'Dezignasaun Sosial', 'Enderesu', 'Numeru Fiskal', '7568434', 'admin@gmail.com', 'Identifikasaun', 'Nome da Firma', '2', '2', '2', '2', '<p><span style=\"color: rgb(33, 37, 41); font-weight: 700;\">Aktividade Estabelesimentu</span><br></p>', '<p><span style=\"color: rgb(33, 37, 41); font-weight: 700;\">Aktividade Prinsipal</span><br></p>', '2024-04-09 02:49:37', '2024-04-09 02:49:37');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postus`
--

CREATE TABLE `postus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nrn_postu` varchar(255) NOT NULL,
  `id_munisipiu` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `postus`
--

INSERT INTO `postus` (`id`, `nrn_postu`, `id_munisipiu`, `created_at`, `updated_at`) VALUES
(24, 'Lospalos', 44, '2024-04-12 09:15:59', '2024-04-12 09:15:59'),
(25, 'Baguia', 43, '2024-04-12 09:16:08', '2024-04-12 09:16:08');

-- --------------------------------------------------------

--
-- Table structure for table `riskus`
--

CREATE TABLE `riskus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nrn_risku` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `riskus`
--

INSERT INTO `riskus` (`id`, `nrn_risku`, `created_at`, `updated_at`) VALUES
(2, 'Risku', '2024-04-07 06:59:55', '2024-04-07 06:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `sukus`
--

CREATE TABLE `sukus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nrn_suku` varchar(255) NOT NULL,
  `id_postu` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sukus`
--

INSERT INTO `sukus` (`id`, `nrn_suku`, `id_postu`, `created_at`, `updated_at`) VALUES
(10, 'Fuiloro', 24, '2024-04-12 15:57:16', '2024-04-12 15:57:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Brito Lazaro da Conceicao', 'brito@gmail.com', '1712385418.png', NULL, '$2y$12$c8NABsIqq3vewCqpUiOvX.CT0Fc/xaqvbw08FO/1mwIwZe1RP7f/e', NULL, '2024-04-05 21:36:59', '2024-04-05 21:36:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aldeias`
--
ALTER TABLE `aldeias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `atus`
--
ALTER TABLE `atus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `karakterizasauns`
--
ALTER TABLE `karakterizasauns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moradas`
--
ALTER TABLE `moradas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movimentus`
--
ALTER TABLE `movimentus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `munisipius`
--
ALTER TABLE `munisipius`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pedidus`
--
ALTER TABLE `pedidus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_movimentu` (`id_movimentu`),
  ADD KEY `id_morada` (`id_morada`),
  ADD KEY `id_karakterizasaun` (`id_karakterizasaun`),
  ADD KEY `id_risku` (`id_risku`),
  ADD KEY `id_atu` (`id_atu`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `postus`
--
ALTER TABLE `postus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riskus`
--
ALTER TABLE `riskus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sukus`
--
ALTER TABLE `sukus`
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
-- AUTO_INCREMENT for table `aldeias`
--
ALTER TABLE `aldeias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `atus`
--
ALTER TABLE `atus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karakterizasauns`
--
ALTER TABLE `karakterizasauns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `moradas`
--
ALTER TABLE `moradas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movimentus`
--
ALTER TABLE `movimentus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `munisipius`
--
ALTER TABLE `munisipius`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `pedidus`
--
ALTER TABLE `pedidus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postus`
--
ALTER TABLE `postus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `riskus`
--
ALTER TABLE `riskus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sukus`
--
ALTER TABLE `sukus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
