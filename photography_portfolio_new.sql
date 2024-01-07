-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 07, 2024 at 06:35 AM
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
-- Database: `photography_portfolio`
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
(1, 'SAIFUL ISLAM', '<div style=\"font-family: &quot;Louis George Cafe&quot;, sans-serif;\"><font color=\"#ffffff\">I am&nbsp;<span style=\"font-weight: bolder;\">Saiful Islam</span>, a&nbsp;<span style=\"font-weight: bolder;\">Software Engineer</span>&nbsp;by profession, I\'m from&nbsp;<span style=\"background-color: rgb(57, 123, 33);\">BANGLADESH</span>. I took photography as a hobby and entered the world of photography in&nbsp;<span style=\"font-weight: bolder;\">2014</span>. In fact, even I didn\'t get any inspiration from anyone, in the beginning, I used to like artistic pictures on Facebook, so I gave photography a thought. Next, I started following a lot of people who are connected to it.</font></div><div style=\"font-family: &quot;Louis George Cafe&quot;, sans-serif;\"><font color=\"#ffffff\"><br style=\"line-height: 0;\"></font></div><div style=\"font-family: &quot;Louis George Cafe&quot;, sans-serif;\"><font color=\"#ffffff\">I used to take all kinds of pictures from the beginning. My favorite categories of photography are&nbsp;<i><span style=\"font-weight: bolder;\">lifestyle, travel, documentary, portrait, nature</span></i>, etc. Now I am doing a project, maybe someday I will be able to present it in front of everyone.</font></div><div style=\"font-family: &quot;Louis George Cafe&quot;, sans-serif;\"><font color=\"#ffffff\"><br style=\"line-height: 0;\"></font></div><div style=\"font-family: &quot;Louis George Cafe&quot;, sans-serif;\"><font color=\"#ffffff\">I always like to spend my time with people from several networks, both socially identified and not. I always look forward to learning something new, meeting new people, and know them. I always wanted to do something for the people who couldn\'t keep pace with this fast-forward world. Their culture and lifestyle are some of my favorite subjects in front of the lens.&nbsp;</font></div><div style=\"font-family: &quot;Louis George Cafe&quot;, sans-serif;\"><font color=\"#ffffff\"><br style=\"line-height: 0;\"></font></div><div style=\"font-family: &quot;Louis George Cafe&quot;, sans-serif;\"><font color=\"#ffffff\">Moreover, I would love to represent my country through the backward population because they are holding the authentic culture of our country.</font></div><div style=\"font-family: &quot;Louis George Cafe&quot;, sans-serif;\"><font color=\"#ffffff\"><br style=\"line-height: 0;\"></font></div><div style=\"font-family: &quot;Louis George Cafe&quot;, sans-serif;\"><u style=\"\"><i style=\"\"><span style=\"font-weight: bolder;\"><font color=\"#ffffff\">My message for new photographers is that you\'re requested not to misuse, waste, or disturb nature and subject.</font></span></i></u></div>', '1704106200.homeimage.png', '1704106200.aboutppageimage.png', '1704106200.storyimage.png', '1704106200.coverimage.png', NULL, NULL, 'Documentary Photographer', 1, NULL, NULL, NULL, '2024-01-01 06:55:31');

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
(1, 'National', 'sdfasdf', '1703517081.png', 'www.facbokkoksdfas.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1, '2023-12-14 10:12:14', '2023-12-14 10:12:14'),
(2, 'National', 'sdfasdf', '1703517081.png', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1, '2023-12-14 10:12:14', '2023-12-14 10:12:14'),
(3, 'International', 'sdfasdf', '1703517081.png', 'www.facbokkoksdfas.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1, '2023-12-14 10:12:14', '2023-12-14 10:12:14'),
(4, 'National', 'sdfasdf', '1703517081.png', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1, '2023-12-14 10:12:14', '2023-12-14 10:12:14'),
(5, 'National', 'sdfasdf', '1703517081.png', 'www.facbokkoksdfas.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1, '2023-12-14 10:12:14', '2023-12-14 10:12:14'),
(6, 'National', 'sdfasdf', '1703517081.png', NULL, 'Lorem ipsum dolor sit amet, consecteturqua.', 1, '2023-12-14 10:12:14', '2023-12-14 10:12:14'),
(7, 'National', 'sdfasdf', '1703517081.png', 'www.facbokkoksdfas.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1, '2023-12-14 10:12:14', '2023-12-14 10:12:14'),
(8, 'National', 'sdfasdf', '1703517081.png', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1, '2023-12-14 10:12:14', '2023-12-14 10:12:14');

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` bigint UNSIGNED NOT NULL,
  `cat_id` int DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `photo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, '1.jpg', '2023-12-15 11:38:45', '2023-12-15 11:38:45'),
(3, '2.png', '2023-12-15 11:38:45', '2023-12-15 11:38:45'),
(6, '1.jpg', '2023-12-15 11:38:45', '2023-12-15 11:38:45'),
(7, '2.png', '2023-12-15 11:38:45', '2023-12-15 11:38:45'),
(8, '1.jpg', '2023-12-15 11:38:45', '2023-12-15 11:38:45'),
(9, '2.png', '2023-12-15 11:38:45', '2023-12-15 11:38:45'),
(10, '1.jpg', '2023-12-15 11:38:45', '2023-12-15 11:38:45'),
(11, '2.png', '2023-12-15 11:38:45', '2023-12-15 11:38:45'),
(12, '1.jpg', '2023-12-15 11:38:45', '2023-12-15 11:38:45'),
(13, '2.png', '2023-12-15 11:38:45', '2023-12-15 11:38:45'),
(14, '2.png', '2023-12-15 11:38:45', '2023-12-15 11:38:45'),
(15, '1.jpg', '2023-12-15 11:38:45', '2023-12-15 11:38:45');

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

--
-- Dumping data for table `commercials`
--

INSERT INTO `commercials` (`id`, `title`, `image`, `details`, `created_at`, `updated_at`) VALUES
(2, 'my first commercial work', '1703939940.commercial.jpg', '<p class=\"p p-first\" style=\"box-sizing: inherit; line-height: inherit; margin: 20pt 0px; hyphens: none; font-family: Cambria, &quot;Cambria Math&quot;, stixgeneral, &quot;Times New Roman&quot;, Times, serif; font-size: 20px;\"><font color=\"#000000\">The Rohingya refugee crisis is neither new nor a sudden problem for Bangladesh. After the introduction of the Emergency Immigration Act by the military regime of Myanmar in 1978, the minority Muslim Rohingyas started flocking to Bangladesh. The total number of Rohingya refugees in Bangladesh is debatable. The United Nations Refugee Agency (UNHCR) reported that in 2011, around 265,000 Rohingya Refugees were residing, out of which 29,000 were recognized, 36,000 were unrecognized, and 200,000 were undocumented by the Government of Bangladesh (GoB) and other non-governmental organizations (NGOs) [<a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7489778/#REF1\" rid=\"REF1\" class=\" bibr popnode\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\" style=\"box-sizing: inherit; text-decoration-line: underline;\">1</a>].</font></p><p style=\"box-sizing: inherit; line-height: inherit; margin: 20pt 0px; hyphens: none; font-family: Cambria, &quot;Cambria Math&quot;, stixgeneral, &quot;Times New Roman&quot;, Times, serif; font-size: 20px;\"><font color=\"#000000\">However, the recent violence in August 2017 instigated the migration of 6,93,000 additional Rohingyas, increasing the number, as of June 2018, to around 1 million (918,936) in Bangladesh [<a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7489778/#REF2\" rid=\"REF2\" class=\" bibr popnode\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\" style=\"box-sizing: inherit; text-decoration-line: underline;\">2</a>]. Refugees from the recent exodus found a place in large camps or settlements, and their total number is 904,056. Among these camps, the Kutupalong Expansion Site (an extension made near the original Kutupalong Refugee Camp) houses the majority of the refugees (610,251), followed by Hakimpara-Jamtoli-Bagghona Camp (98,529), and Nayapara Camp (71,562). The rest of the refugees are housed among the host communities of Cox’s Bazar Sadar, Ramu, Teknaf, and Ukhia (120,044).</font></p><p style=\"box-sizing: inherit; line-height: inherit; margin: 20pt 0px; hyphens: none; font-family: Cambria, &quot;Cambria Math&quot;, stixgeneral, &quot;Times New Roman&quot;, Times, serif; font-size: 20px;\"><font color=\"#000000\">The recent exodus of August 2017</font></p><p style=\"box-sizing: inherit; line-height: inherit; margin: 20pt 0px; hyphens: none; font-family: Cambria, &quot;Cambria Math&quot;, stixgeneral, &quot;Times New Roman&quot;, Times, serif; font-size: 20px;\"><font color=\"#000000\">Rohingyas live in the Rakhine state of Myanmar, adjacent to the Bangladesh border. The 1982 Citizenship Act of Myanmar created three unequal tiers in the citizenship of Myanmar, namely, Full Citizens (pink card), Associate Citizens (blue card), and Naturalized Citizens (green card), and thus disenfranchised several ethnic groups, including the Rohingyas [<a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7489778/#REF3\" rid=\"REF3\" class=\" bibr popnode\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\" style=\"box-sizing: inherit; text-decoration-line: underline;\">3</a>]. As a result of alleged persecutions followed by the enaction of the law, a large number of Rohingyas eventually fled illegally to not only Bangladesh but also to countries such as Saudi Arabia, Pakistan, Thailand, and Malaysia [<a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7489778/#REF4\" rid=\"REF4\" class=\" bibr popnode\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\" style=\"box-sizing: inherit; text-decoration-line: underline;\">4</a>]. Aung San Suu Kyi took up the role of the State Counselor of Myanmar in 2016. In Rakhine State, she restarted the citizenship verification process, which faced resistance from the Rohingya community [<a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7489778/#REF5\" rid=\"REF5\" class=\" bibr popnode\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\" style=\"box-sizing: inherit; text-decoration-line: underline;\">5</a>]. The latest exodus of Rohingyas began on August 25, 2017, as the consequence of the Myanmar army\'s and Rakhine Buddhists’ campaign against Rohingya civilians followed by a coordinated attack of Arakan Rohingya Salvation Army (ARSA) on 30 police posts [<a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7489778/#REF5\" rid=\"REF5\" class=\" bibr popnode\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\" style=\"box-sizing: inherit; text-decoration-line: underline;\">5</a>-<a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7489778/#REF6\" rid=\"REF6\" class=\" bibr popnode\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\" style=\"box-sizing: inherit; text-decoration-line: underline;\">6</a>]. Within two months, from August 2017 to October 2017, hundreds of thousands of Rohingya refugees fled to Bangladesh through the Bangladesh-Myanmar border [<a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7489778/#REF2\" rid=\"REF2\" class=\" bibr popnode\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\" style=\"box-sizing: inherit; text-decoration-line: underline;\">2</a>].</font></p><p class=\"p p-last\" style=\"box-sizing: inherit; line-height: inherit; margin: 20pt 0px; hyphens: none; font-family: Cambria, &quot;Cambria Math&quot;, stixgeneral, &quot;Times New Roman&quot;, Times, serif; font-size: 20px;\"><font color=\"#000000\">This massive influx made Rohingya refugees live in settlements where the majority of them did not have access to good housing, safe drinking water, and good sanitation systems, which, in turn, increased their vulnerability to a wide range of infectious diseases [<a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7489778/#REF2\" rid=\"REF2\" class=\" bibr popnode\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\" style=\"box-sizing: inherit; text-decoration-line: underline;\">2</a>]. Additionally, Rohingya people are exposed to war-related traumatic events, including the destruction of property, loss of family members, witnessing extreme violence, and injury or loss of property. These events have the potential to make Rohingya refugees suffer from different psychological distress [<a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7489778/#REF5\" rid=\"REF5\" class=\" bibr popnode\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\" style=\"box-sizing: inherit; text-decoration-line: underline;\">5</a>]. Against this backdrop, it is important to ensure health service for the Rohingya population, and to do so&nbsp;knowing about their current health status is imperative because without this information, equal and equitable health service provision, as well as appropriate resource allocation, is not possible. Besides, failure to provide adequate health service and thus to maintain the sound health of Rohingya refugees might adversely affect the health status of Bangladeshi people as well. So, we conducted this review to understand the current health status of the Rohingya refugees in Bangladesh. This will help the policymakers determine what evidence needs to be generated and how to better tackle the Rohingya situation in Bangladesh. This will also help international or bilateral agencies to prioritize their efforts for this protracted refugee crisis.</font></p>', '2023-12-30 05:53:41', '2023-12-30 06:39:00'),
(3, 'my first commercial work', '1703940031.commercial.jpg', '<p class=\"p p-first\" style=\"box-sizing: inherit; line-height: inherit; margin: 20pt 0px; hyphens: none; font-family: Cambria, &quot;Cambria Math&quot;, stixgeneral, &quot;Times New Roman&quot;, Times, serif; font-size: 20px;\"><font color=\"#000000\">The Rohingya refugee crisis is neither new nor a sudden problem for Bangladesh. After the introduction of the Emergency Immigration Act by the military regime of Myanmar in 1978, the minority Muslim Rohingyas started flocking to Bangladesh. The total number of Rohingya refugees in Bangladesh is debatable. The United Nations Refugee Agency (UNHCR) reported that in 2011, around 265,000 Rohingya Refugees were residing, out of which 29,000 were recognized, 36,000 were unrecognized, and 200,000 were undocumented by the Government of Bangladesh (GoB) and other non-governmental organizations (NGOs) [<a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7489778/#REF1\" rid=\"REF1\" class=\" bibr popnode\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\" style=\"box-sizing: inherit; text-decoration-line: underline;\">1</a>].<br></font></p><table class=\"table table-bordered\"><tbody><tr><td><p><img src=\"data:image/jpeg;base64,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\" data-filename=\"images.jpeg\" style=\"width: 100%;\"><br></p></td></tr></tbody></table><p class=\"p p-first\" style=\"box-sizing: inherit; line-height: inherit; margin: 20pt 0px; hyphens: none; font-family: Cambria, &quot;Cambria Math&quot;, stixgeneral, &quot;Times New Roman&quot;, Times, serif; font-size: 20px;\"><font color=\"#000000\"><br></font><font color=\"#000000\"><br></font></p><p style=\"box-sizing: inherit; line-height: inherit; margin: 20pt 0px; hyphens: none; font-family: Cambria, &quot;Cambria Math&quot;, stixgeneral, &quot;Times New Roman&quot;, Times, serif; font-size: 20px;\"><font color=\"#000000\">However, the recent violence in August 2017 instigated the migration of 6,93,000 additional Rohingyas, increasing the number, as of June 2018, to around 1 million (918,936) in Bangladesh [<a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7489778/#REF2\" rid=\"REF2\" class=\" bibr popnode\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\" style=\"box-sizing: inherit; text-decoration-line: underline;\">2</a>]. Refugees from the recent exodus found a place in large camps or settlements, and their total number is 904,056. Among these camps, the Kutupalong Expansion Site (an extension made near the original Kutupalong Refugee Camp) houses the majority of the refugees (610,251), followed by Hakimpara-Jamtoli-Bagghona Camp (98,529), and Nayapara Camp (71,562). The rest of the refugees are housed among the host communities of Cox’s Bazar Sadar, Ramu, Teknaf, and Ukhia (120,044).</font></p><p style=\"box-sizing: inherit; line-height: inherit; margin: 20pt 0px; hyphens: none; font-family: Cambria, &quot;Cambria Math&quot;, stixgeneral, &quot;Times New Roman&quot;, Times, serif; font-size: 20px;\"><font color=\"#000000\">The recent exodus of August 2017</font></p><p style=\"box-sizing: inherit; line-height: inherit; margin: 20pt 0px; hyphens: none; font-family: Cambria, &quot;Cambria Math&quot;, stixgeneral, &quot;Times New Roman&quot;, Times, serif; font-size: 20px;\"><font color=\"#000000\">Rohingyas live in the Rakhine state of Myanmar, adjacent to the Bangladesh border. The 1982 Citizenship Act of Myanmar created three unequal tiers in the citizenship of Myanmar, namely, Full Citizens (pink card), Associate Citizens (blue card), and Naturalized Citizens (green card), and thus disenfranchised several ethnic groups, including the Rohingyas [<a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7489778/#REF3\" rid=\"REF3\" class=\" bibr popnode\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\" style=\"box-sizing: inherit; text-decoration-line: underline;\">3</a>]. As a result of alleged persecutions followed by the enaction of the law, a large number of Rohingyas eventually fled illegally to not only Bangladesh but also to countries such as Saudi Arabia, Pakistan, Thailand, and Malaysia [<a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7489778/#REF4\" rid=\"REF4\" class=\" bibr popnode\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\" style=\"box-sizing: inherit; text-decoration-line: underline;\">4</a>]. Aung San Suu Kyi took up the role of the State Counselor of Myanmar in 2016. In Rakhine State, she restarted the citizenship verification process, which faced resistance from the Rohingya community [<a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7489778/#REF5\" rid=\"REF5\" class=\" bibr popnode\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\" style=\"box-sizing: inherit; text-decoration-line: underline;\">5</a>]. The latest exodus of Rohingyas began on August 25, 2017, as the consequence of the Myanmar army\'s and Rakhine Buddhists’ campaign against Rohingya civilians followed by a coordinated attack of Arakan Rohingya Salvation Army (ARSA) on 30 police posts [<a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7489778/#REF5\" rid=\"REF5\" class=\" bibr popnode\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\" style=\"box-sizing: inherit; text-decoration-line: underline;\">5</a>-<a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7489778/#REF6\" rid=\"REF6\" class=\" bibr popnode\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\" style=\"box-sizing: inherit; text-decoration-line: underline;\">6</a>]. Within two months, from August 2017 to October 2017, hundreds of thousands of Rohingya refugees fled to Bangladesh through the Bangladesh-Myanmar border [<a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7489778/#REF2\" rid=\"REF2\" class=\" bibr popnode\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\" style=\"box-sizing: inherit; text-decoration-line: underline;\">2</a>].</font></p><p class=\"p p-last\" style=\"box-sizing: inherit; line-height: inherit; margin: 20pt 0px; hyphens: none; font-family: Cambria, &quot;Cambria Math&quot;, stixgeneral, &quot;Times New Roman&quot;, Times, serif; font-size: 20px;\"><font color=\"#000000\">This massive influx made Rohingya refugees live in settlements where the majority of them did not have access to good housing, safe drinking water, and good sanitation systems, which, in turn, increased their vulnerability to a wide range of infectious diseases [<a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7489778/#REF2\" rid=\"REF2\" class=\" bibr popnode\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\" style=\"box-sizing: inherit; text-decoration-line: underline;\">2</a>]. Additionally, Rohingya people are exposed to war-related traumatic events, including the destruction of property, loss of family members, witnessing extreme violence, and injury or loss of property. These events have the potential to make Rohingya refugees suffer from different psychological distress [<a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7489778/#REF5\" rid=\"REF5\" class=\" bibr popnode\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\" style=\"box-sizing: inherit; text-decoration-line: underline;\">5</a>]. Against this backdrop, it is important to ensure health service for the Rohingya population, and to do so&nbsp;knowing about their current health status is imperative because without this information, equal and equitable health service provision, as well as appropriate resource allocation, is not possible. Besides, failure to provide adequate health service and thus to maintain the sound health of Rohingya refugees might adversely affect the health status of Bangladeshi people as well. So, we conducted this review to understand the current health status of the Rohingya refugees in Bangladesh. This will help the policymakers determine what evidence needs to be generated and how to better tackle the Rohingya situation in Bangladesh. This will also help international or bilateral agencies to prioritize their efforts for this protracted refugee crisis.</font></p>', '2023-12-30 05:53:41', '2023-12-30 06:41:59');

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
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactmes`
--

INSERT INTO `contactmes` (`id`, `name`, `email`, `story_id`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Saiful Islam', 'saiful.rana@gmail.com', NULL, 'sadfasdf', NULL, '2023-12-26 04:28:48', '2023-12-26 04:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint UNSIGNED NOT NULL,
  `address_one` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_two` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_map` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `medialinks`
--

CREATE TABLE `medialinks` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medialinks`
--

INSERT INTO `medialinks` (`id`, `title`, `url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'https://facebook.com/NationalPortal', 1, '2023-12-14 10:20:46', '2023-12-14 10:20:46'),
(2, 'Youtube', 'www.youtube.com', 1, '2023-12-14 10:20:46', '2023-12-14 10:20:46'),
(3, 'Google', 'www.google.com', 1, '2023-12-14 10:20:46', '2023-12-14 10:20:46'),
(4, 'Yahoo', 'www.yahoo.com', 1, '2023-12-14 10:20:46', '2023-12-14 10:20:46'),
(5, 'Facebook', 'www.facebook.com', 1, '2023-12-14 10:20:46', '2023-12-14 10:20:46'),
(6, 'Youtube', 'www.youtube.com', 1, '2023-12-14 10:20:46', '2023-12-14 10:20:46'),
(7, 'Google', 'www.google.com', 1, '2023-12-14 10:20:46', '2023-12-14 10:20:46'),
(8, 'Yahoo', 'www.yahoo.com', 1, '2023-12-14 10:20:46', '2023-12-14 10:20:46');

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
(22, '2023_12_15_163658_create_publications_table', 2);

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
(2, 'Life in River - Daily star', '1703934238.publication.jpg', 'http://hashigoru.com', '<h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">The standard Lorem Ipsum passage, used since the 1500s</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">1914 translation by H. Rackham</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">1914 translation by H. Rackham</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"</p>', '2023-12-30 05:03:58', '2023-12-30 05:03:58'),
(3, 'Street Life - New Age, UK', '1703934285.publication.jpg', 'http://hashigoru.com', '<h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">The standard Lorem Ipsum passage, used since the 1500s</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">1914 translation by H. Rackham</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">1914 translation by H. Rackham</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"</p>', '2023-12-30 05:04:45', '2023-12-30 05:04:45'),
(4, 'Life in River - Daily star', '1703934231.publication.jpg', 'http://hashigoru.com', '<h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">The standard Lorem Ipsum passage, used since the 1500s</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">1914 translation by H. Rackham</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">1914 translation by H. Rackham</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"</p>', '2023-12-30 05:03:58', '2023-12-30 05:03:58'),
(5, 'Street Life - New Age, UK', '1703934282.publication.jpg', 'http://hashigoru.com', '<h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">The standard Lorem Ipsum passage, used since the 1500s</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">1914 translation by H. Rackham</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">1914 translation by H. Rackham</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"</p>', '2023-12-30 05:04:45', '2023-12-30 05:04:45');

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
(4, 'Land scape in nepal', '1', '1704111255.jpg', '0', '2024-01-01 06:14:15', '2024-01-01 06:14:15'),
(5, 'Kashmir in Pakistan', '1', '1704111270.jpg', '0', '2024-01-01 06:14:30', '2024-01-01 06:14:30'),
(6, 'Boat Race in BB', '1', '1704111895.jpg', '0', '2024-01-01 06:24:55', '2024-01-01 06:24:55'),
(7, 'bangla new year', '1', '1704112022.jpg', '0', '2024-01-01 06:27:02', '2024-01-01 06:27:02');

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
(1, 'https://bd.linkedin.com/in/saiful007', NULL, 'https://bd.linkedin.com/in/saiful007', 'https://bd.linkedin.com/in/saiful007', 'https://bd.linkedin.com/in/saiful007', '2023-12-24 03:07:56', '2023-12-24 03:08:13');

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

-- --------------------------------------------------------

--
-- Table structure for table `tear_sheets`
--

CREATE TABLE `tear_sheets` (
  `id` bigint UNSIGNED NOT NULL,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `url` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tear_sheets`
--

INSERT INTO `tear_sheets` (`id`, `image`, `url`, `created_at`, `updated_at`) VALUES
(5, '1702986583.TearSheet.jpg', 'http://hashigorueeeeeeeeeeeee.com', '2023-12-19 05:28:09', '2023-12-19 05:49:43'),
(6, '1703586302.TearSheet.png', 'sdfdsfsd', '2023-12-26 04:25:02', '2023-12-26 04:25:02'),
(7, '1702986583.TearSheet.jpg', 'http://hashigorueeeeeeeeeeeee.com', '2023-12-19 05:28:09', '2023-12-19 05:49:43'),
(8, '1703586302.TearSheet.png', 'sdfdsfsd', '2023-12-26 04:25:02', '2023-12-26 04:25:02'),
(9, '1702986583.TearSheet.jpg', 'http://hashigorueeeeeeeeeeeee.com', '2023-12-19 05:28:09', '2023-12-19 05:49:43'),
(10, '1703586302.TearSheet.png', 'sdfdsfsd', '2023-12-26 04:25:02', '2023-12-26 04:25:02'),
(11, '1702986583.TearSheet.jpg', 'http://hashigorueeeeeeeeeeeee.com', '2023-12-19 05:28:09', '2023-12-19 05:49:43'),
(12, '1703586302.TearSheet.png', 'sdfdsfsd', '2023-12-26 04:25:02', '2023-12-26 04:25:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `status`, `type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md Saiful Islam rana', 'saiful.rana@gmail.com', 1, 'Admin', NULL, '$2y$12$kySlk4VZY58G6QFfPuvtdeLDBglcsL0FP3A3zzxmXH7OeC6DB2Z5e', NULL, '2023-12-14 09:42:05', '2023-12-21 04:51:00');

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
(2, 'Beautiful Bangladesh', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:52:18', '2023-12-27 03:52:18'),
(3, 'Banglader Pothe', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:52:47', '2023-12-27 03:52:47'),
(4, 'Smile of a Girl', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:53:08', '2023-12-27 03:53:08'),
(5, 'Birds eye of Bangladesh', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:53:35', '2023-12-27 03:53:35'),
(6, 'Beautiful Bangladesh', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:52:18', '2023-12-27 03:52:18'),
(7, 'Banglader Pothe', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:52:47', '2023-12-27 03:52:47'),
(8, 'Smile of a Girl', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:53:08', '2023-12-27 03:53:08'),
(9, 'Birds eye of Bangladesh', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:53:35', '2023-12-27 03:53:35'),
(10, 'Beautiful Bangladesh', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:52:18', '2023-12-27 03:52:18'),
(11, 'Banglader Pothe', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:52:47', '2023-12-27 03:52:47'),
(12, 'Smile of a Girl', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:53:08', '2023-12-27 03:53:08'),
(13, 'Birds eye of Bangladesh', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:53:35', '2023-12-27 03:53:35'),
(14, 'Beautiful Bangladesh', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:52:18', '2023-12-27 03:52:18'),
(15, 'Banglader Pothe', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:52:47', '2023-12-27 03:52:47'),
(16, 'Smile of a Girl', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:53:08', '2023-12-27 03:53:08'),
(17, 'Birds eye of Bangladesh', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:53:35', '2023-12-27 03:53:35'),
(18, 'Birds eye of Bangladesh', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:53:35', '2023-12-27 03:53:35'),
(19, 'Beautiful Bangladesh', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:52:18', '2023-12-27 03:52:18'),
(20, 'Beautiful Bangladesh', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:52:18', '2023-12-27 03:52:18'),
(21, 'Beautiful Bangladesh', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:52:18', '2023-12-27 03:52:18'),
(22, 'Beautiful Bangladesh', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:52:18', '2023-12-27 03:52:18'),
(23, 'Beautiful Bangladesh', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:52:18', '2023-12-27 03:52:18'),
(24, 'Beautiful Bangladesh', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:52:18', '2023-12-27 03:52:18'),
(25, 'Beautiful Bangladesh', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I?si=V47NPvD51kU1ybGs', '1', '2023-12-27 03:52:18', '2023-12-27 03:52:18'),
(26, 'Beautiful Bangladesh', 9, NULL, NULL, 'https://www.youtube.com/embed/Cn4G2lZ_g2I', '1', '2023-12-27 03:52:18', '2023-12-27 03:52:18'),
(28, 'Beautiful Bangladesh', 9, NULL, NULL, 'https://www.youtube.com/embed/B9VRvOKKwfs', '1', '2023-12-27 03:52:18', '2023-12-27 03:52:18');

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
  `title` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(4, 'fdsfsdfsd', '23.00', '1', 'images_1703930879.jpg', 'http://hashigoru.com', NULL, NULL, 1, '2023-12-30 04:07:59', '2023-12-30 04:07:59'),
(5, 'fdsfsdfsd', '23.00', '1', 'images_1703930891.jpg', 'http://hashigoru.com', NULL, NULL, 1, '2023-12-30 04:08:11', '2023-12-30 04:08:11'),
(6, 'fdsfsdfsd', '23.00', '1', 'images_1703930897.jpg', 'http://hashigoru.com', NULL, NULL, 1, '2023-12-30 04:08:17', '2023-12-30 04:08:17'),
(7, 'fdsfsdfsd', '23.00', '1', 'images_1703930903.jpeg', 'http://hashigoru.com', NULL, NULL, 1, '2023-12-30 04:08:23', '2023-12-30 04:08:23'),
(8, 'fdsfsdfsd', '23.00', '1', 'images_1703931016.jpeg', 'http://hashigoru.com', NULL, NULL, 1, '2023-12-30 04:10:16', '2023-12-30 04:10:16'),
(9, 'fdsfsdfsd', '23.00', '1', 'images_1703931023.jpeg', 'http://hashigoru.com', NULL, NULL, 1, '2023-12-30 04:10:23', '2023-12-30 04:10:23'),
(10, 'fdsfsdfsd', '23.00', '1', 'images_1703931029.jpeg', 'http://hashigoru.com', NULL, NULL, 1, '2023-12-30 04:10:29', '2023-12-30 04:10:29'),
(11, 'fdsfsdfsd', '23.00', '1', 'images_1703931061.jpeg', 'http://hashigoru.com', NULL, NULL, 1, '2023-12-30 04:11:01', '2023-12-30 04:11:01'),
(12, 'fdsfsdfsd', '23.00', '10', 'images_1703931586.jpeg', 'http://hashigoru.com', NULL, NULL, 1, '2023-12-30 04:19:46', '2023-12-30 04:19:46'),
(13, 'fdsfsdfsd', '23.00', '10', 'images_1703931593.jpeg', 'http://hashigoru.com', NULL, NULL, 1, '2023-12-30 04:19:53', '2023-12-30 04:19:53'),
(14, 'fdsfsdfsd', '23.00', '10', 'images_1703931598.jpeg', 'http://hashigoru.com', NULL, NULL, 1, '2023-12-30 04:19:58', '2023-12-30 04:19:58'),
(15, 'fdsfsdfsd', '23.00', '10', 'images_1703931648.jpeg', 'http://hashigoru.com', NULL, NULL, 1, '2023-12-30 04:20:48', '2023-12-30 04:20:48'),
(16, 'fdsfsdfsd', '23.00', '2', 'images_1703931734.jpeg', 'http://hashigoru.com', NULL, NULL, 1, '2023-12-30 04:22:14', '2023-12-30 04:22:14'),
(17, 'fdsfsdfsd', '23.00', '2', 'images_1703931740.jpeg', 'http://hashigoru.com', NULL, NULL, 1, '2023-12-30 04:22:20', '2023-12-30 04:22:20'),
(18, 'fdsfsdfsd', '23.00', '2', 'images_1703931746.jpeg', 'http://hashigoru.com', NULL, NULL, 1, '2023-12-30 04:22:26', '2023-12-30 04:22:26'),
(19, 'fdsfsdfsd', '23.00', '2', 'images_1703931751.jpeg', 'http://hashigoru.com', NULL, NULL, 0, '2023-12-30 04:22:31', '2023-12-30 04:22:52'),
(20, 'fdsfsdfsd', '23.00', '1', 'images_1704604288.png', 'https://envisionkindness.us.launchpad6.com/OurWorldIsKind2023/entries?search=saiful#!', NULL, NULL, 1, '2024-01-06 23:11:28', '2024-01-06 23:11:28'),
(21, 'fdsfsdfsd', '23.00', '2', 'images_1704604630.png', 'https://envisionkindness.us.launchpad6.com/OurWorldIsKind2023/entries?search=saiful#!', NULL, NULL, 1, '2024-01-06 23:17:10', '2024-01-06 23:17:10'),
(22, 'fdsfsdfsd', '23.00', '2', 'images_1704606264.png', 'https://envisionkindness.us.launchpad6.com/OurWorldIsKind2023/entries?search=saiful#!', NULL, NULL, 1, '2024-01-06 23:44:24', '2024-01-06 23:44:24');

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

INSERT INTO `web_setups` (`id`, `site_name`, `email`, `logo_black`, `logo_white`, `water_mark`, `number`, `whatsapp`, `address`, `altr_number`, `copyright`, `copyright_note`, `created_at`, `updated_at`) VALUES
(1, 'Your Site Name', 'saiful.rana@gmail.com', '1703400532.logo_black.png', '1703594483.logo_white.png', '1703400524.water_mark.png', '01916665832', '01675909939', 'test address', NULL, '2023', 'all right resaveddd all right resaveddd all right resaveddd all right resaveddd all right resavedddall right resavedddall right resavedddall right resavedddall right resavedddall right resaveddd', '2023-12-21 06:08:21', '2023-12-26 06:41:23');

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
-- Indexes for table `albums`
--
ALTER TABLE `albums`
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
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `medialinks`
--
ALTER TABLE `medialinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `commercials`
--
ALTER TABLE `commercials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contactmes`
--
ALTER TABLE `contactmes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medialinks`
--
ALTER TABLE `medialinks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tear_sheets`
--
ALTER TABLE `tear_sheets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `visitlogs`
--
ALTER TABLE `visitlogs`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `web_galleries`
--
ALTER TABLE `web_galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `web_setups`
--
ALTER TABLE `web_setups`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;