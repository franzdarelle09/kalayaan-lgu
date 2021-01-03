-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 12:47 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kalayaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acronym` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contents` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `slug`, `acronym`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'Municipal Mayor\'s Office', 'municipal-mayors-office', '', NULL, '2020-12-20 12:50:53', '2020-12-20 12:50:53'),
(2, 'Municipal Vice Mayor\'s Office', 'municipal-vice-mayors-office', '', NULL, '2020-12-20 12:50:53', '2020-12-20 12:50:53'),
(3, 'Sangguniang Bayan Office', 'sangguniang-bayan-office', '', NULL, '2020-12-20 12:50:53', '2020-12-20 12:50:53'),
(4, 'Secretary to the Sanggunian Office', 'secretary-to-the-sanggunian-office', '', NULL, '2020-12-20 12:50:53', '2020-12-20 12:50:53'),
(5, 'Municipal Human Resource Management and Development Office', 'municipal-human-resource-management-and-development-office', '', NULL, '2020-12-20 12:50:53', '2020-12-20 12:50:53'),
(6, 'MUNICIPAL PLANNING AND DEVELOPMENT OFFICE', 'municipal-planning-and-development-office', '', NULL, '2020-12-20 12:50:53', '2020-12-20 12:50:53'),
(7, 'Municipal Budget Office', 'municipal-budget-office', '', NULL, '2020-12-20 12:50:53', '2020-12-20 12:50:53'),
(8, 'Municipal Treasurer\'s Office', 'municipal-treasurers-office', '', NULL, '2020-12-20 12:50:53', '2020-12-20 12:50:53'),
(9, 'Municipal Engineering Office', 'municipal-engineering-office', '', NULL, '2020-12-20 12:50:53', '2020-12-20 12:50:53'),
(10, 'Municipal Social Welfare and Development Office', 'municipal-social-welfare-and-development-office', '', NULL, '2020-12-20 12:50:53', '2020-12-20 12:50:53'),
(11, 'Municipal Accounting Office', 'municipal-accounting-office', '', NULL, '2020-12-20 12:50:53', '2020-12-20 12:50:53'),
(12, 'Municipal Civil Registrar Office', 'municipal-civil-registrar-office', '', NULL, '2020-12-20 12:50:53', '2020-12-20 12:50:53'),
(13, 'Municipal Assessor\'s Office', 'municipal-assessors-office', '', NULL, '2020-12-20 12:50:53', '2020-12-20 12:50:53'),
(14, 'Municipal Health Office', 'municipal-health-office', '', NULL, '2020-12-20 12:50:53', '2020-12-20 12:50:53'),
(15, 'Municipal Agriculture Office', 'municipal-agriculture-office', '', NULL, '2020-12-20 12:50:53', '2020-12-20 12:50:53'),
(16, 'General Services Office', 'general-services-office', '', NULL, '2020-12-20 12:50:53', '2020-12-20 12:50:53'),
(17, 'Municipal Nutrition Action Office', 'municipal-nutrition-action-office', 'MNAO', '<h3>We are Exporting our High Quality Food &amp; Agricultural Prodcucts</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him.</p>\r\n\r\n<h5>Farming Sector</h5>\r\n\r\n<p>we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour.</p>\r\n\r\n<p>When our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h5>Agri Industry Development</h5>\r\n\r\n<p>Consectetur turpis, et convallis mi. Nunc eu semper augue. Vestibulum justo nisi, lobortis sed est et, faucibus fringilla metus. Donec ipsum quam, laoreet ac ex non, hendrerit malesuada risus.</p>\r\n\r\n<p>Quisque est nunc, tristique in mollis quis, ullamcorper id diam. Mauris lorem elit, pellentesque quis ultrices vel, bibendum a odio. Nunc dapibus lacus quis urna mattis, a interdum est blandit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<ul>\r\n	<li>&nbsp;Suspendisse tempor sapien sit amet orci pharetra placerat.</li>\r\n	<li>&nbsp;Duis ullamcorper lorem vel imperdiet congue.</li>\r\n	<li>&nbsp;Nulla ullamcorper nisi et ligula eleifend ultrices.</li>\r\n	<li>&nbsp;In quis turpis in massa dignissim viverra.</li>\r\n</ul>', '2020-12-20 12:50:53', '2020-12-22 11:13:51'),
(18, 'Municipal Disaster Risk Reduction Management Office', 'municipal-disaster-risk-reduction-management-office', '', NULL, '2020-12-20 12:50:53', '2020-12-20 12:50:53'),
(19, 'Municipal Economic Enterprise Development Office', 'municipal-economic-enterprise-development-office', '', NULL, '2020-12-20 12:50:53', '2020-12-20 12:50:53');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documentlist_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `name`, `filename`, `documentlist_id`, `created_at`, `updated_at`) VALUES
(4, 'Ordinance 1', '1608011146_github-git-cheat-sheet.pdf', 1, '2020-12-14 21:45:46', '2020-12-14 21:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `document_list`
--

CREATE TABLE `document_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document_list`
--

INSERT INTO `document_list` (`id`, `title`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Ordinance', 1, '2020-12-13 12:33:18', '2020-12-13 12:33:18'),
(2, 'Resolution', 1, '2020-12-13 12:34:33', '2020-12-13 12:34:33'),
(3, 'Minutes of the Meeting', 1, '2020-12-13 12:34:53', '2020-12-13 12:34:53'),
(4, 'Agenda', 1, '2020-12-13 12:36:15', '2020-12-13 12:36:15'),
(5, 'Committee Report', 1, '2020-12-13 12:36:44', '2020-12-13 12:36:44'),
(6, 'Journal', 1, '2020-12-13 12:37:35', '2020-12-13 12:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_12_12_220743_create_news_table', 1),
(4, '2020_12_13_200745_creare_document_list_table', 2),
(5, '2020_12_13_204127_create_documents_table', 3),
(6, '2020_12_15_032057_add_name_to_documents', 4),
(7, '2020_12_17_015248_add_slug_to_news', 5),
(8, '2020_12_17_100841_add_article_photo_to_news', 6),
(9, '2020_12_20_023259_create_departments_table', 7),
(10, '2020_12_21_014243_add_contents_to_departments', 8),
(11, '2021_01_01_073200_create_table_members', 9);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medium_thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `large_thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `body`, `slug`, `active`, `thumbnail`, `article_photo`, `small_thumb`, `medium_thumb`, `large_thumb`, `created_at`, `updated_at`) VALUES
(11, 'Photo Copier Ipinamahagi Sa Mga Guro', '<p>Isang Mapagpalang Araw Mahal kong Kakayae&ntilde;os,</p>\r\n\r\n<p>Nuong September 14, 2020 ay pinagkaloob ng ating Pamahalaang Bayan sa pangunguna ng inyong lingkod ang mga Photo Copier na syang higit na makakatulong sa ating mga estudyante, guro at paaralan sa panahon ng pandemya dito sa ating Bayan.</p>\r\n\r\n<p>At</p>\r\n\r\n<p>Nuong nito lamang pong November 10, 2020 ay pinagkaloob naman po ang dalawang laptop na syang magagamit ng mga guro sa pag-update ng mga dokumento o pag-attend sa mga online meeting na syang ginagamit nilang komunikasyon upang madagdagan ang kaalaman sa kasalukuyang pamamaraan ng paghahatid edukasyon sa mga mag-aaral ng bayan ng Kalayaan.</p>\r\n\r\n<p>Ang pondo po na ginamit dito ay nagmula sa &quot;Special Education Fund&quot; layunin po ng inyong lingkod na magamit ito sa higit na makakatulong ngayong panahon ng pandemya sa ating mga mag-aaral at guro.</p>\r\n\r\n<p>Lubos po ang suporta ng ating Pamahalaang Bayan upang maibigay ang tamang edukasyon para sa ating mga mag-aaral. Malaking pagbabago man ang kinakaharap ng ating mga estudyante, guro at magulang, lagi nyo po tatandaan na katuwang nyo po kami sa pagbabagong ito.</p>\r\n\r\n<p>Maraming salamat po at ingat po ang lahat.</p>\r\n\r\n<p>#OneKALAYAAN</p>\r\n\r\n<p>#SPL &quot;Serbisyo Para sa Lahat&quot;</p>\r\n\r\n<p>&quot;Bayang may Disiplina, Serbisyong may Malasakit&quot;</p>', 'photo-copier-ipinamahagi-sa-mga-guro-1608222486', 1, '', '2_1608222486.jpg', '2_small_1608222486.jpg', '2_medium_1608222486.jpg', '2_large_1608222486.jpg', '2020-12-17 08:28:06', '2020-12-17 08:28:06'),
(12, 'OPLAN Ligtas Na Pamayanan Inilunsad', '<p>&ldquo;Ensure Fire Safety, Save Life, Save Property.&rdquo;</p>\r\n\r\n<p>Bfp Kalayaan Fs Laguna personnel led by FO3 Reyfino Jobert B Rana, Officer-In-Charge together with LGU Kalayaan and</p>\r\n\r\n<p><a href=\"https://web.facebook.com/barangay.sanjuan.568?__cft__[0]=AZU6U0FkgfmbTr27rx4weixv7afx_DuuhqQ3qwf2aeiLQtlQEXoa62NkiCrNyv16zPw9Y1jJjbJVqfqhusB_h37hH6pG-F9klEXaR7GjQzmwOOcQFXxd4OcxSTVj4P0NKN_sgegTiJphNwbPsd3jGtQp&amp;__tn__=-]K-y-R\" tabindex=\"0\">Barangay San Juan</a></p>\r\n\r\n<p>conducted Public Address regarding Fire Safety (Oplan Ligtas na Pamayanan on the Road) at Brgy. Longos and Brgy. San Juan, Kalayaan, Laguna</p>\r\n\r\n<p><a href=\"https://web.facebook.com/hashtag/thinkfiresafetynow?__eep__=6&amp;__cft__[0]=AZU6U0FkgfmbTr27rx4weixv7afx_DuuhqQ3qwf2aeiLQtlQEXoa62NkiCrNyv16zPw9Y1jJjbJVqfqhusB_h37hH6pG-F9klEXaR7GjQzmwOOcQFXxd4OcxSTVj4P0NKN_sgegTiJphNwbPsd3jGtQp&amp;__tn__=*NK-y-R\" tabindex=\"0\">#ThinkFireSafetyNow</a></p>\r\n\r\n<p><a href=\"https://web.facebook.com/hashtag/disiplinamuna?__eep__=6&amp;__cft__[0]=AZU6U0FkgfmbTr27rx4weixv7afx_DuuhqQ3qwf2aeiLQtlQEXoa62NkiCrNyv16zPw9Y1jJjbJVqfqhusB_h37hH6pG-F9klEXaR7GjQzmwOOcQFXxd4OcxSTVj4P0NKN_sgegTiJphNwbPsd3jGtQp&amp;__tn__=*NK-y-R\" tabindex=\"0\">#DisiplinaMuna</a></p>', 'oplan-ligtas-na-pamayanan-inilunsad-1608223171', 1, '', '126334131_698703904403783_3277776745960733834_n_1608223171.jpg', '126334131_698703904403783_3277776745960733834_n_small_1608223171.jpg', '126334131_698703904403783_3277776745960733834_n_medium_1608223171.jpg', '126334131_698703904403783_3277776745960733834_n_large_1608223171.jpg', '2020-12-17 08:39:31', '2020-12-17 08:39:31'),
(17, 'PROJECT SPLAKAM', '<p>Nakiisa ang inyong lingkod sa proyekto ng ating mga kapulisan sa ating Bayan na may tema na &quot;Samahang Pulis Laguna Kapanalig mo at Makakalikasan (PROJECT SPLAKAM)&quot; sa pangunguna ni Hepe Raymond Austria kasama ang iba&#39;t ibang departamento ng Pamahalaang Bayan; MENRO sa pangunguna ni Ma&#39;am&nbsp;<a href=\"https://web.facebook.com/reinelsa.corpuz?__cft__[0]=AZWqty5zNWX19t1Ke6ldBc77ohjQDiPifg3xCa7019KhHz365CiNc28p2mFhTUfy4IugBDfpeagEuCxrNH3MN2gKqoVrOtG0NFQNlBsnFhwDsAoz0ClZlvrAjIWAEyM9aEc&amp;__tn__=-]K-R\" tabindex=\"0\">Reinelsa Barojabo Corpuz</a>, MA sa Pangunguna ni Ma&#39;am&nbsp;<a href=\"https://web.facebook.com/liza.l.yee?__cft__[0]=AZWqty5zNWX19t1Ke6ldBc77ohjQDiPifg3xCa7019KhHz365CiNc28p2mFhTUfy4IugBDfpeagEuCxrNH3MN2gKqoVrOtG0NFQNlBsnFhwDsAoz0ClZlvrAjIWAEyM9aEc&amp;__tn__=-]K-R\" tabindex=\"0\">Liza Laitan Yee</a>, MNAO sa pangunguna ni Ma&#39;am&nbsp;<a href=\"https://web.facebook.com/cecille.flores.5494?__cft__[0]=AZWqty5zNWX19t1Ke6ldBc77ohjQDiPifg3xCa7019KhHz365CiNc28p2mFhTUfy4IugBDfpeagEuCxrNH3MN2gKqoVrOtG0NFQNlBsnFhwDsAoz0ClZlvrAjIWAEyM9aEc&amp;__tn__=-]K-R\" tabindex=\"0\">Cecille Flores</a>&nbsp;at MAC sa pangunguna ni Admin&nbsp;<a href=\"https://web.facebook.com/kandilakaba?__cft__[0]=AZWqty5zNWX19t1Ke6ldBc77ohjQDiPifg3xCa7019KhHz365CiNc28p2mFhTUfy4IugBDfpeagEuCxrNH3MN2gKqoVrOtG0NFQNlBsnFhwDsAoz0ClZlvrAjIWAEyM9aEc&amp;__tn__=-]K-R\" tabindex=\"0\">Kris Anne Laganapan</a>&nbsp;at mga sundalo, sa pagtatanim ng mga puno sa Demo Farm na matatagpuan sa&nbsp;<a href=\"https://web.facebook.com/brgy.sanantonio.kalayaan.laguna?__cft__[0]=AZWqty5zNWX19t1Ke6ldBc77ohjQDiPifg3xCa7019KhHz365CiNc28p2mFhTUfy4IugBDfpeagEuCxrNH3MN2gKqoVrOtG0NFQNlBsnFhwDsAoz0ClZlvrAjIWAEyM9aEc&amp;__tn__=-]K-R\" tabindex=\"0\">Barangay San Antonio</a>.</p>\r\n\r\n<p><a href=\"https://web.facebook.com/hashtag/onekalayaan?__eep__=6&amp;__cft__[0]=AZWqty5zNWX19t1Ke6ldBc77ohjQDiPifg3xCa7019KhHz365CiNc28p2mFhTUfy4IugBDfpeagEuCxrNH3MN2gKqoVrOtG0NFQNlBsnFhwDsAoz0ClZlvrAjIWAEyM9aEc&amp;__tn__=*NK-R\" tabindex=\"0\">#OneKalayaan</a></p>\r\n\r\n<p>&quot;Bayang may Disiplina,Serbisyong May Malasakit&quot;</p>\r\n\r\n<p><a href=\"https://web.facebook.com/hashtag/spl?__eep__=6&amp;__cft__[0]=AZWqty5zNWX19t1Ke6ldBc77ohjQDiPifg3xCa7019KhHz365CiNc28p2mFhTUfy4IugBDfpeagEuCxrNH3MN2gKqoVrOtG0NFQNlBsnFhwDsAoz0ClZlvrAjIWAEyM9aEc&amp;__tn__=*NK-R\" tabindex=\"0\">#SPL</a>&nbsp;&quot;Serbisyo Para sa Lahat&quot;</p>', 'project-splakam-1609717501', 1, NULL, '3_1609717501.jpg', '3_small_1609717501.jpg', '3_medium_1609717501.jpg', '3_large_1609717501.jpg', '2021-01-03 15:45:01', '2021-01-03 15:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'kalayaan_lgu@yahoo.com.ph', NULL, '$2y$10$UPNc7XdeqjcLu5aLaIRSsee5ns79nWvQbBKBVF/i5o/kbXzbAyNzu', 'khALAZ2Cixuwlk6eFuFwO2nlbkEIg05dFTqSguxrouTY5FHqpUNVtIvxcYB1', '2020-12-12 15:18:17', '2020-12-12 15:18:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_documentlist_id_foreign` (`documentlist_id`);

--
-- Indexes for table `document_list`
--
ALTER TABLE `document_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `members_department_id_foreign` (`department_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
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
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `document_list`
--
ALTER TABLE `document_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_documentlist_id_foreign` FOREIGN KEY (`documentlist_id`) REFERENCES `document_list` (`id`);

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
