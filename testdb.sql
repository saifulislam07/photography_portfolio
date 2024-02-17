-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Feb 17, 2024 at 12:59 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutmes`
--

CREATE TABLE `aboutmes` (
  `id` bigint UNSIGNED NOT NULL,
  `your_name` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `homeimage` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `aboutppageimage` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `storyimage` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `coverimage` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `photo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `mylogo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT NULL,
  `contact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutmes`
--

INSERT INTO `aboutmes` (`id`, `your_name`, `details`, `homeimage`, `aboutppageimage`, `storyimage`, `coverimage`, `photo`, `mylogo`, `title`, `status`, `contact`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Badal Chandra Sarker', '<div style=\"color: red; padding: 0;\">\r\n                                                            <strong>\r\n                                                                sdfsdfs</strong></div>', '1705390269.homeimage.png', '1705475755.aboutppageimage.png', '1705475755.storyimage.png', '1705475755.coverimage.png', NULL, NULL, 'ssdf', 1, NULL, NULL, NULL, '2024-01-17 01:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `url` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `type`, `title`, `image`, `url`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'National', 'porjoton corporation 2023', '1708154606.png', 'http://hashigoru.com', 'hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world&nbsp;', 1, '2024-02-17 01:05:48', '2024-02-17 01:23:26'),
(2, 'International', 'shilpokola award 2024', '1708153601.png', NULL, 'sdfasdf sdf asdfdsa fasd asdfasdf asdasdf asdfasd asdf asdasd fasdasd', 1, '2024-02-17 01:06:41', '2024-02-17 01:06:41'),
(3, 'National', 'porjoton corporation 2023', '1708154606.png', 'http://hashigoru.com', 'hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world hello world&nbsp;', 1, '2024-02-17 01:05:48', '2024-02-17 01:23:26'),
(4, 'National', 'shilpokola award 2024', '1708153601.png', NULL, 'sdfasdf sdf asdfdsa fasd asdfasdf asdasdf asdfasd asdf asdasd fasdasd', 1, '2024-02-17 01:06:41', '2024-02-17 01:06:41'),
(5, 'International', 'shilpokola award 2024', '1708153601.png', NULL, 'sdfasdf sdf asdfdsa fasd asdfasdf asdasdf asdfasd asdf asdasd fasdasd', 1, '2024-02-17 01:06:41', '2024-02-17 01:06:41'),
(6, 'International', 'shilpokola award 2024', '1708153601.png', NULL, 'sdfasdf sdf asdfdsa fasd asdfasdf asdasdf asdfasd asdf asdasd fasdasd', 1, '2024-02-17 01:06:41', '2024-02-17 01:06:41'),
(7, 'International', 'shilpokola award 2024', '1708153601.png', NULL, 'sdfasdf sdf asdfdsa fasd asdfasdf asdasdf asdfasd asdf asdasd fasdasd', 1, '2024-02-17 01:06:41', '2024-02-17 01:06:41'),
(8, 'International', 'shilpokola award 2024', '1708153601.png', NULL, 'sdfasdf sdf asdfdsa fasd asdfasdf asdasdf asdfasd asdf asdasd fasdasd', 1, '2024-02-17 01:06:41', '2024-02-17 01:06:41'),
(9, 'International', 'shilpokola award 2024', '1708153601.png', NULL, 'sdfasdf sdf asdfdsa fasd asdfasdf asdasdf asdfasd asdf asdasd fasdasd', 1, '2024-02-17 01:06:41', '2024-02-17 01:06:41'),
(10, 'International', 'shilpokola award 2024', '1708153601.png', NULL, 'sdfasdf sdf asdfdsa fasd asdfasdf asdasdf asdfasd asdf asdasd fasdasd', 1, '2024-02-17 01:06:41', '2024-02-17 01:06:41'),
(11, 'International', 'shilpokola award 2024', '1708153601.png', NULL, 'sdfasdf sdf asdfdsa fasd asdfasdf asdasdf asdfasd asdf asdasd fasdasd', 1, '2024-02-17 01:06:41', '2024-02-17 01:06:41');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'bnw', '2023-12-14 09:52:33', '2023-12-20 06:41:26'),
(2, 'dailylife', '2023-12-14 09:52:33', '2023-12-20 06:41:20'),
(3, 'lifestyle', '2023-12-15 11:36:47', '2023-12-20 06:41:14'),
(9, 'Nature', '2023-12-27 03:51:54', '2023-12-27 03:51:54'),
(10, 'Landscape', '2023-12-30 04:03:54', '2023-12-30 04:03:54');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint UNSIGNED NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commercials`
--

CREATE TABLE `commercials` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactmes`
--

CREATE TABLE `contactmes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `story_id` int DEFAULT NULL,
  `message` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` enum('Unread','Read') COLLATE utf8mb4_unicode_ci DEFAULT 'Unread',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactmes`
--

INSERT INTO `contactmes` (`id`, `name`, `email`, `story_id`, `message`, `status`, `created_at`, `updated_at`) VALUES
(3, 'sdfasdf', 'saiful.rana@gmail.com', NULL, 'sdfasdf', 'Read', '2024-02-17 04:40:43', '2024-02-17 04:49:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` int NOT NULL,
  `payment_type` enum('PayPal','Bkash') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PayPal',
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `order_id`, `payment_type`, `customer_email`, `customer_id`, `country_code`, `payment_id`, `currency`, `payment_status`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bkash', 'iwb.saiful@gmail.com', '5', 'BDT', '345343545345', 'BDT', 'COMPLETED', 45, '2024-02-10 23:26:48', '2024-02-10 23:26:48'),
(2, 2, 'PayPal', 'abcd@gmail.com', '6', 'USD', '2AT692402K3097051', 'USD', 'PENDING', 30, '2024-02-11 22:22:02', '2024-02-11 22:22:02'),
(3, 3, 'Bkash', 'abcd@gmail.com', '6', 'BDT', '345rt34ere', 'BDT', 'PENDING', 20, '2024-02-11 22:25:30', '2024-02-17 04:20:53'),
(4, 3, 'Bkash', 'abcd@gmail.com', '6', 'BDT', '345rt34ere', 'BDT', 'COMPLETED', 20, '2024-02-11 22:25:30', '2024-02-17 04:26:10');

-- --------------------------------------------------------

--
-- Table structure for table `mailsettings`
--

CREATE TABLE `mailsettings` (
  `id` bigint UNSIGNED NOT NULL,
  `mail_transport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_host` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_port` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_encryption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mailsettings`
--

INSERT INTO `mailsettings` (`id`, `mail_transport`, `mail_host`, `mail_port`, `mail_username`, `mail_password`, `mail_encryption`, `mail_from`, `created_at`, `updated_at`) VALUES
(1, 'smtp', 'sandbox.smtp.mailtrap.io', '2525', '60584c98c5eb18', '7595cff6c252a4', 'tls', 'iwb.saiful@gmail.com', NULL, '2024-01-21 02:56:20');

-- --------------------------------------------------------

--
-- Table structure for table `medialinks`
--

CREATE TABLE `medialinks` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medialinks`
--

INSERT INTO `medialinks` (`id`, `title`, `image`, `url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sdfsdfsdfasdf', '1708144470.media.png', 'http://hashigoru.com', 1, '2024-02-16 22:28:06', '2024-02-16 22:34:30'),
(2, 'abcd', '1708145081.media.png', 'http://hashigoru.com', 1, '2024-02-16 22:44:41', '2024-02-16 22:44:41'),
(3, 'sadfasdf', '1708145676.media.jpg', 'http://hashigorueeeeeeeeeeeee.com', 1, '2024-02-16 22:54:36', '2024-02-16 22:54:36'),
(4, 'asdfasd', '1708145684.media.jpg', 'http://hashigoru.com', 1, '2024-02-16 22:54:44', '2024-02-16 22:54:44'),
(5, 'asdfasdf', '1708145693.media.jpg', 'sdfdsfsd', 1, '2024-02-16 22:54:53', '2024-02-16 22:54:53'),
(6, 'asdfasd', '1708145701.media.jpg', 'fasdfasdf', 1, '2024-02-16 22:55:01', '2024-02-16 22:55:01');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint UNSIGNED NOT NULL,
  `parent_id` int DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial` int NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `name`, `route`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'HOME', 'home', 2, 'Active', NULL, '2024-02-13 03:31:42'),
(2, NULL, 'Profile', 'aboutsme', 1, 'Active', NULL, '2024-02-13 03:31:42'),
(3, NULL, 'story', 'photostory', 4, 'Active', NULL, '2024-02-13 03:33:01'),
(4, NULL, 'Gallery', 'mygallery', 5, 'Active', NULL, '2024-02-13 03:33:01'),
(5, NULL, 'Video', 'myvideogallery', 1, 'Active', NULL, '2024-02-13 03:33:19'),
(6, NULL, 'Buy', 'buyphoto', 5, 'Active', NULL, '2024-02-12 01:34:45'),
(7, NULL, 'Media', 'aboutsme', 6, 'Active', NULL, '2024-02-12 01:34:46'),
(8, 7, 'Publication', 'mypublications', 8, 'Active', NULL, '2024-02-12 01:34:47'),
(9, 7, 'Portfolio', 'myPortfolioLinks', 9, 'Active', NULL, '2024-02-12 01:34:47'),
(10, 7, 'Commercial', 'mycommercials', 10, 'Active', NULL, '2024-02-12 01:34:47'),
(11, 7, 'tear sheet', 'tear-sheet', 11, 'Active', NULL, '2024-02-12 01:34:48'),
(12, 7, 'achievement', 'myachievement', 12, 'Active', NULL, '2024-02-12 01:34:49'),
(13, 7, 'client', 'myclients', 13, 'Active', NULL, '2024-02-13 03:53:44'),
(14, NULL, 'Contact', 'contacts', 14, 'Active', NULL, '2024-02-12 01:34:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_09_12_99999_create_visitlogs_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_03_18_052315_create_web_galleries_table', 1),
(7, '2021_04_01_082337_create_socialmedia_table', 1),
(8, '2021_04_03_095111_create_contact_us_table', 1),
(9, '2021_04_05_124002_create_sliders_table', 1),
(10, '2022_03_11_082015_create_albums_table', 1),
(11, '2022_03_11_095749_create_categories_table', 1),
(12, '2022_03_13_132807_create_aboutmes_table', 1),
(13, '2022_03_13_172045_create_stories_table', 1),
(14, '2022_03_15_025820_create_achievements_table', 1),
(15, '2022_03_28_064337_create_contactmes_table', 1),
(16, '2022_03_29_070712_create_medialinks_table', 1),
(17, '2023_04_29_112913_create_videos_table', 1),
(18, '2023_05_02_141131_create_clients_table', 1),
(19, '2023_12_14_152751_create_web_setups_table', 1),
(20, '2023_12_15_163137_create_tear_sheets_table', 2),
(21, '2023_12_15_163511_create_commercials_table', 2),
(22, '2023_12_15_163658_create_publications_table', 2),
(23, '2024_01_21_071444_create_mailsettings_table', 3),
(24, '2024_02_10_063851_create_orders_table', 4),
(25, '2024_02_10_063943_create_suborders_table', 4),
(26, '2024_02_10_064024_create_invoices_table', 4),
(27, '2024_02_12_055617_create_menus_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `invoice_id` int DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `invoice_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 'initialised', '2024-02-10 23:26:48', '2024-02-10 23:26:48'),
(2, 6, 2, 'pending', '2024-02-11 22:21:23', '2024-02-11 22:22:02'),
(3, 6, 3, 'initialised', '2024-02-11 22:25:30', '2024-02-11 22:25:30'),
(4, 6, NULL, 'initialised', '2024-02-11 23:53:10', '2024-02-11 23:53:10'),
(5, 5, NULL, 'initialised', '2024-02-13 04:11:36', '2024-02-13 04:11:36');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `title`, `image`, `url`, `details`, `created_at`, `updated_at`) VALUES
(1, 'sdfsdf11111111d', '1707543035.publication.png', NULL, 'sdfsdfsdfsdf', '2024-02-09 23:30:35', '2024-02-09 23:35:30');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `type`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ertebete', '1', '1707817598.jpg', '0', '2024-02-13 03:46:38', '2024-02-13 03:46:38'),
(2, 'weerwer', '1', '1707817605.png', '0', '2024-02-13 03:46:45', '2024-02-13 03:46:45'),
(3, 'yuiyuiyu', '1', '1707817610.jpg', '0', '2024-02-13 03:46:50', '2024-02-13 03:46:50');

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` bigint UNSIGNED NOT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `facebook`, `google`, `twitter`, `instagram`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/', NULL, 'https://bd.linkedin.com/in/saiful007', 'https://bd.linkedin.com/in/saiful007', 'https://bd.linkedin.com/in/saiful007', '2023-12-24 03:07:56', '2023-12-24 03:08:13');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `tages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT NULL,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `title`, `category_id`, `tages`, `details`, `status`, `image`, `created_at`, `updated_at`) VALUES
INSERT INTO `stories` (`id`, `title`, `category_id`, `tages`, `details`, `status`, `image`, `created_at`, `updated_at`) VALUES
(2, 'fasdfasd', 1, 'sadfasdf', 'asdfasdf', 1, '1707996792.jpg', '2024-02-15 05:33:12', '2024-02-15 05:33:12'),
(3, 'asdfasdf', 1, 'sdfasdf', 'sadfasdf', 1, '1707996810.jpg', '2024-02-15 05:33:30', '2024-02-15 05:33:30'),
(4, 'asdfasdfasd fasdf', 2, 'asdfasdf', 'asdfasdf', 1, '1707996825.png', '2024-02-15 05:33:45', '2024-02-15 05:33:45'),
(5, 'asdfasdfasdf', 2, 'asdfasdf', 'asdfasdf', 1, '1707996838.png', '2024-02-15 05:33:58', '2024-02-15 05:33:58');

-- --------------------------------------------------------

--
-- Table structure for table `suborders`
--

CREATE TABLE `suborders` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` int NOT NULL,
  `order_id` int NOT NULL,
  `price` double NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suborders`
--

INSERT INTO `suborders` (`id`, `product_id`, `order_id`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 20, 2, '2024-02-10 23:26:48', '2024-02-10 23:26:48'),
(2, 2, 1, 5, 1, '2024-02-10 23:26:48', '2024-02-10 23:26:48'),
(3, 2, 2, 5, 2, '2024-02-11 22:22:02', '2024-02-11 22:22:02'),
(4, 1, 2, 20, 1, '2024-02-11 22:22:02', '2024-02-11 22:22:02'),
(5, 1, 3, 20, 1, '2024-02-11 22:25:30', '2024-02-11 22:25:30');

-- --------------------------------------------------------

--
-- Table structure for table `tear_sheets`
--

CREATE TABLE `tear_sheets` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `url` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tear_sheets`
--

INSERT INTO `tear_sheets` (`id`, `title`, `image`, `url`, `created_at`, `updated_at`) VALUES
(1, 'ttttttasdfasdf', '1707991863.TearSheet.jpg', 'http://hashigoru.com', '2024-02-15 04:11:03', '2024-02-15 04:12:01'),
(2, 'hello world', '1707992311.TearSheet.jpg', 'http://hashigorueeeeeeeeeeeee.com', '2024-02-15 04:18:31', '2024-02-15 04:18:31'),
(3, 'asdfasd asdf', '1707992321.TearSheet.jpg', 'http://hashigoru.com', '2024-02-15 04:18:41', '2024-02-15 04:18:41'),
(4, 'adfasd sd', '1707992329.TearSheet.jpg', 'fsdfsdf', '2024-02-15 04:18:49', '2024-02-15 04:18:49'),
(5, 'sdffs', '1707992347.TearSheet.jpg', 'fasdfasdf', '2024-02-15 04:19:07', '2024-02-15 04:19:07'),
(6, 'ttttttasdfasdf', '1707991863.TearSheet.jpg', 'http://hashigoru.com', '2024-02-15 04:11:03', '2024-02-15 04:12:01'),
(7, 'hello world', '1707992311.TearSheet.jpg', 'http://hashigorueeeeeeeeeeeee.com', '2024-02-15 04:18:31', '2024-02-15 04:18:31'),
(8, 'asdfasd asdf', '1707992321.TearSheet.jpg', 'http://hashigoru.com', '2024-02-15 04:18:41', '2024-02-15 04:18:41'),
(9, 'adfasd sd', '1707992329.TearSheet.jpg', 'fsdfsdf', '2024-02-15 04:18:49', '2024-02-15 04:18:49'),
(10, 'sdffs', '1707992347.TearSheet.jpg', 'fasdfasdf', '2024-02-15 04:19:07', '2024-02-15 04:19:07'),
(11, 'ttttttasdfasdf', '1707991863.TearSheet.jpg', 'http://hashigoru.com', '2024-02-15 04:11:03', '2024-02-15 04:12:01'),
(12, 'hello world', '1707992311.TearSheet.jpg', 'http://hashigorueeeeeeeeeeeee.com', '2024-02-15 04:18:31', '2024-02-15 04:18:31'),
(13, 'asdfasd asdf', '1707992321.TearSheet.jpg', 'http://hashigoru.com', '2024-02-15 04:18:41', '2024-02-15 04:18:41'),
(14, 'adfasd sd', '1707992329.TearSheet.jpg', 'fsdfsdf', '2024-02-15 04:18:49', '2024-02-15 04:18:49'),
(15, 'sdffs', '1707992347.TearSheet.jpg', 'fasdfasdf', '2024-02-15 04:19:07', '2024-02-15 04:19:07'),
(16, 'ttttttasdfasdf', '1707991863.TearSheet.jpg', 'http://hashigoru.com', '2024-02-15 04:11:03', '2024-02-15 04:12:01'),
(17, 'hello world', '1707992311.TearSheet.jpg', 'http://hashigorueeeeeeeeeeeee.com', '2024-02-15 04:18:31', '2024-02-15 04:18:31'),
(18, 'asdfasd asdf', '1707992321.TearSheet.jpg', 'http://hashigoru.com', '2024-02-15 04:18:41', '2024-02-15 04:18:41'),
(19, 'adfasd sd', '1707992329.TearSheet.jpg', 'fsdfsdf', '2024-02-15 04:18:49', '2024-02-15 04:18:49'),
(20, 'sdffs', '1707992347.TearSheet.jpg', 'fasdfasdf', '2024-02-15 04:19:07', '2024-02-15 04:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `type` set('Admin','User') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'User',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `status`, `type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md Saiful Islam rana', 'saiful.rana@gmail.com', NULL, 1, 'Admin', NULL, '$2y$12$kySlk4VZY58G6QFfPuvtdeLDBglcsL0FP3A3zzxmXH7OeC6DB2Z5e', NULL, '2023-12-14 09:42:05', '2024-02-12 01:14:52'),
(5, 'Saiful Islam', 'iwb.saiful@gmail.com', '01916665832', 1, 'User', NULL, '$2y$12$UTQln72YvM3T8CXTv2Sn3O8RA9vnUErtvvscvWPIHsvYUS4z7CwE2', NULL, '2024-02-10 00:46:01', '2024-02-10 23:38:34'),
(6, 'rana', 'abcd@gmail.com', '01675909939', 1, 'User', NULL, '$2y$12$2/.lEfQmExkqIIurmrYC/.j5Yvf/O6EpboNTofeWNTwvSLpDWYfAK', NULL, '2024-02-11 22:21:00', '2024-02-11 22:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `video` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `link` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `category_id`, `description`, `video`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'hello world', 2, 'test', NULL, 'https://www.youtube.com/embed/lzQTHFCUMaE', '1', '2024-01-17 00:57:41', '2024-01-17 00:57:41'),
(2, 'sdfsdfs', 2, 'sdfsdf', NULL, 'https://www.youtube.com/embed/lzQTHFCUMaE', '1', '2024-01-17 01:12:56', '2024-01-17 01:12:56');

-- --------------------------------------------------------

--
-- Table structure for table `visitlogs`
--

CREATE TABLE `visitlogs` (
  `id` int UNSIGNED NOT NULL,
  `ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0.0.0.0',
  `browser` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_zone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_banned` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `web_galleries`
--

CREATE TABLE `web_galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `images` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `url` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `tags` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_galleries`
--

INSERT INTO `web_galleries` (`id`, `title`, `price`, `category`, `images`, `url`, `tags`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sdfsd', 20.00, '1', 'images_1707914902.jpg', 'https://drive.google.com/file/d/1xDkrjIFz-TEovElsy0fYKDZpRUehHRD5/view?usp=drive_link', 'sadfddddd', 'x asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asdx asdf sdf asdfasd sadf asd', 1, '2024-01-23 21:43:06', '2024-02-14 06:58:20'),
(2, 'ttt', 5.00, '1', 'images_1707550172.png', 'http://hashigoru.com', NULL, NULL, 1, '2024-02-10 01:29:32', '2024-02-10 01:29:32'),
(3, 'sfdsd', NULL, '2', 'images_1707820068.jpg', NULL, NULL, NULL, 1, '2024-02-13 04:27:48', '2024-02-13 04:27:48');

-- --------------------------------------------------------

--
-- Table structure for table `web_setups`
--

CREATE TABLE `web_setups` (
  `id` bigint UNSIGNED NOT NULL,
  `site_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_black` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `logo_white` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `water_mark` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `whatsapp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `altr_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `copyright_note` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_setups`
--

INSERT INTO `web_setups` (`id`, `site_name`, `email`, `logo_black`, `logo_white`, `water_mark`, `number`, `background_image`, `whatsapp`, `address`, `altr_number`, `copyright`, `copyright_note`, `created_at`, `updated_at`) VALUES
(1, 'Your Site Name', 'saiful.rana@gmail.com', '1705475782.logo_black.png', '1705475782.logo_white.png', '1705475782.water_mark.png', '01916665832', '1708147544.background_image.jpg', '01675909939', 'test address', NULL, '2023', 'dsfsdf', '2023-12-21 06:08:21', '2024-02-16 23:25:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutmes`
--
ALTER TABLE `aboutmes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commercials`
--
ALTER TABLE `commercials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactmes`
--
ALTER TABLE `contactmes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mailsettings`
--
ALTER TABLE `mailsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medialinks`
--
ALTER TABLE `medialinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suborders`
--
ALTER TABLE `suborders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tear_sheets`
--
ALTER TABLE `tear_sheets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitlogs`
--
ALTER TABLE `visitlogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_galleries`
--
ALTER TABLE `web_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_setups`
--
ALTER TABLE `web_setups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutmes`
--
ALTER TABLE `aboutmes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commercials`
--
ALTER TABLE `commercials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactmes`
--
ALTER TABLE `contactmes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mailsettings`
--
ALTER TABLE `mailsettings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medialinks`
--
ALTER TABLE `medialinks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `suborders`
--
ALTER TABLE `suborders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tear_sheets`
--
ALTER TABLE `tear_sheets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitlogs`
--
ALTER TABLE `visitlogs`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `web_galleries`
--
ALTER TABLE `web_galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `web_setups`
--
ALTER TABLE `web_setups`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;