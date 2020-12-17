-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 07:21 PM
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
(8, '2020_12_17_100841_add_article_photo_to_news', 6);

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
(10, 'Paskuha Sa Kalayaan 2020 Ilulunsad', '<p>Isang mapagpalang araw mga mahal kong Kalayae&ntilde;os!<img alt=\"❤️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t6c/1/16/2764.png\" /><img alt=\"👊🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t34/1/16/1f44a_1f3fb.png\" /><br />\r\n<br />\r\nInaanyayahan po namin kayo na makiisa sa pormal na pagbubukas ng Paskuhan sa Kalayaan 2020 na may temang &ldquo;Salubungin ang Pasko ng Ligtas at Disiplinado.&rdquo;<br />\r\n<br />\r\nAting sisimulan ang pagdiriwang sa pamamagitan ng FB live video dito sa aking official facebook account sa ika-18 ng Disyembre taong kasalukuyan sa ganap ng alas 3 ng hapon.<br />\r\n<br />\r\nUpang gawin na mas masaya ang ating pagdiriwang. Tayo ay magkakaroon ng raffle draw. Sa mga nais mapabilang sa mga ating raffle draw sundin lamang ang mga sumusunod:<br />\r\n<br />\r\n1. i-share ang post na ito sa iyong timeline.<br />\r\n2. Mag-comment ng selfie na nakasuot ng damit na pula.<br />\r\n<br />\r\nPara po sa iba pang detalye tungkol dito. Abangan po ninyo ang FB live video sa nabanggit na petsa. Maraming salamat po!<br />\r\n<br />\r\nPS: Ang cut-off po ng pag comment ng inyong entry ay hanggang December 17, 2020 ng 11:59pm.<br />\r\n<br />\r\n<a href=\"https://web.facebook.com/hashtag/paskuhansakalayaan2020?__eep__=6&amp;__cft__[0]=AZUlzAsBqmWf7tW6QyQoz-oMr64n-s5lU7qtIuGaedwMarWI1nrNkE1oWsPaEogg4lZdCqs_mpVuvcEkQTQ9Atv2GkSQXVCOqZSdxz-VvUZoPLMrIPZA__vNEx9-PfqYy2c&amp;__tn__=*NK*F\" tabindex=\"0\">#PaskuhanSaKalayaan2020</a><br />\r\n<a href=\"https://web.facebook.com/hashtag/onekalayaan?__eep__=6&amp;__cft__[0]=AZUlzAsBqmWf7tW6QyQoz-oMr64n-s5lU7qtIuGaedwMarWI1nrNkE1oWsPaEogg4lZdCqs_mpVuvcEkQTQ9Atv2GkSQXVCOqZSdxz-VvUZoPLMrIPZA__vNEx9-PfqYy2c&amp;__tn__=*NK*F\" tabindex=\"0\">#OneKalayaan</a><br />\r\n<a href=\"https://web.facebook.com/hashtag/spl?__eep__=6&amp;__cft__[0]=AZUlzAsBqmWf7tW6QyQoz-oMr64n-s5lU7qtIuGaedwMarWI1nrNkE1oWsPaEogg4lZdCqs_mpVuvcEkQTQ9Atv2GkSQXVCOqZSdxz-VvUZoPLMrIPZA__vNEx9-PfqYy2c&amp;__tn__=*NK*F\" tabindex=\"0\">#SPL</a>&nbsp;&ldquo;Serbisyong Para sa Lahat&rdquo;</p>', 'paskuha-sa-kalayaan-2020-ilulunsad-1608222162', 1, '', '131373499_390845388904434_3285167273375797178_n_1608222162.jpg', '131373499_390845388904434_3285167273375797178_n_small_1608222162.jpg', '131373499_390845388904434_3285167273375797178_n_medium_1608222162.jpg', '131373499_390845388904434_3285167273375797178_n_large_1608222162.jpg', '2020-12-17 08:22:42', '2020-12-17 08:22:42'),
(11, 'Photo Copier Ipinamahagi Sa Mga Guro', '<p>Isang Mapagpalang Araw Mahal kong Kakayae&ntilde;os,</p>\r\n\r\n<p>Nuong September 14, 2020 ay pinagkaloob ng ating Pamahalaang Bayan sa pangunguna ng inyong lingkod ang mga Photo Copier na syang higit na makakatulong sa ating mga estudyante, guro at paaralan sa panahon ng pandemya dito sa ating Bayan.</p>\r\n\r\n<p>At</p>\r\n\r\n<p>Nuong nito lamang pong November 10, 2020 ay pinagkaloob naman po ang dalawang laptop na syang magagamit ng mga guro sa pag-update ng mga dokumento o pag-attend sa mga online meeting na syang ginagamit nilang komunikasyon upang madagdagan ang kaalaman sa kasalukuyang pamamaraan ng paghahatid edukasyon sa mga mag-aaral ng bayan ng Kalayaan.</p>\r\n\r\n<p>Ang pondo po na ginamit dito ay nagmula sa &quot;Special Education Fund&quot; layunin po ng inyong lingkod na magamit ito sa higit na makakatulong ngayong panahon ng pandemya sa ating mga mag-aaral at guro.</p>\r\n\r\n<p>Lubos po ang suporta ng ating Pamahalaang Bayan upang maibigay ang tamang edukasyon para sa ating mga mag-aaral. Malaking pagbabago man ang kinakaharap ng ating mga estudyante, guro at magulang, lagi nyo po tatandaan na katuwang nyo po kami sa pagbabagong ito.</p>\r\n\r\n<p>Maraming salamat po at ingat po ang lahat.</p>\r\n\r\n<p>#OneKALAYAAN</p>\r\n\r\n<p>#SPL &quot;Serbisyo Para sa Lahat&quot;</p>\r\n\r\n<p>&quot;Bayang may Disiplina, Serbisyong may Malasakit&quot;</p>', 'photo-copier-ipinamahagi-sa-mga-guro-1608222486', 1, '', '2_1608222486.jpg', '2_small_1608222486.jpg', '2_medium_1608222486.jpg', '2_large_1608222486.jpg', '2020-12-17 08:28:06', '2020-12-17 08:28:06'),
(12, 'OPLAN Ligtas Na Pamayanan Inilunsad', '<p>&ldquo;Ensure Fire Safety, Save Life, Save Property.&rdquo;</p>\r\n\r\n<p>Bfp Kalayaan Fs Laguna personnel led by FO3 Reyfino Jobert B Rana, Officer-In-Charge together with LGU Kalayaan and</p>\r\n\r\n<p><a href=\"https://web.facebook.com/barangay.sanjuan.568?__cft__[0]=AZU6U0FkgfmbTr27rx4weixv7afx_DuuhqQ3qwf2aeiLQtlQEXoa62NkiCrNyv16zPw9Y1jJjbJVqfqhusB_h37hH6pG-F9klEXaR7GjQzmwOOcQFXxd4OcxSTVj4P0NKN_sgegTiJphNwbPsd3jGtQp&amp;__tn__=-]K-y-R\" tabindex=\"0\">Barangay San Juan</a></p>\r\n\r\n<p>conducted Public Address regarding Fire Safety (Oplan Ligtas na Pamayanan on the Road) at Brgy. Longos and Brgy. San Juan, Kalayaan, Laguna</p>\r\n\r\n<p><a href=\"https://web.facebook.com/hashtag/thinkfiresafetynow?__eep__=6&amp;__cft__[0]=AZU6U0FkgfmbTr27rx4weixv7afx_DuuhqQ3qwf2aeiLQtlQEXoa62NkiCrNyv16zPw9Y1jJjbJVqfqhusB_h37hH6pG-F9klEXaR7GjQzmwOOcQFXxd4OcxSTVj4P0NKN_sgegTiJphNwbPsd3jGtQp&amp;__tn__=*NK-y-R\" tabindex=\"0\">#ThinkFireSafetyNow</a></p>\r\n\r\n<p><a href=\"https://web.facebook.com/hashtag/disiplinamuna?__eep__=6&amp;__cft__[0]=AZU6U0FkgfmbTr27rx4weixv7afx_DuuhqQ3qwf2aeiLQtlQEXoa62NkiCrNyv16zPw9Y1jJjbJVqfqhusB_h37hH6pG-F9klEXaR7GjQzmwOOcQFXxd4OcxSTVj4P0NKN_sgegTiJphNwbPsd3jGtQp&amp;__tn__=*NK-y-R\" tabindex=\"0\">#DisiplinaMuna</a></p>', 'oplan-ligtas-na-pamayanan-inilunsad-1608223171', 1, '', '126334131_698703904403783_3277776745960733834_n_1608223171.jpg', '126334131_698703904403783_3277776745960733834_n_small_1608223171.jpg', '126334131_698703904403783_3277776745960733834_n_medium_1608223171.jpg', '126334131_698703904403783_3277776745960733834_n_large_1608223171.jpg', '2020-12-17 08:39:31', '2020-12-17 08:39:31');

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
