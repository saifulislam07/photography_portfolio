-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 05:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auctiontest`
--

-- --------------------------------------------------------

--
-- Table structure for table `subscription_features`
--

CREATE TABLE `subscription_features` (
  `id` int(11) NOT NULL,
  `title` longtext DEFAULT NULL,
  `paid_user_value` varchar(100) DEFAULT NULL,
  `paid_user_type` varchar(100) DEFAULT NULL,
  `unpaid_user_value` varchar(100) DEFAULT NULL,
  `unpaid_user_type` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscription_features`
--

INSERT INTO `subscription_features` (`id`, `title`, `paid_user_value`, `paid_user_type`, `unpaid_user_value`, `unpaid_user_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '登録会員 月々の費用 登録から最初の3ヶ月', '0', NULL, '0', NULL, '2023-09-16 15:51:41', '2023-09-16 15:51:41', NULL),
(2, '登録会員 出品し落札された時の手数料 登録から1年間', '0', NULL, '0', NULL, '2023-09-16 15:51:41', '2023-09-16 15:51:41', NULL),
(3, '登録会員 入札制限上限金額', '0', NULL, '0', NULL, '2023-09-16 15:51:41', '2023-09-16 15:51:41', NULL),
(4, '登録会員 出品制限', '0', NULL, '0', NULL, '2023-09-16 15:51:41', '2023-09-16 15:51:41', NULL),
(5, '登録会員 出品時 写真アップロード制限', '0', NULL, '0', NULL, '2023-09-16 15:51:41', '2023-09-16 15:51:41', NULL),
(6, '登録会員 出品時 動画アップロード可否', '0', NULL, '0', NULL, '2023-09-16 15:51:41', '2023-09-16 15:51:41', NULL),
(7, '登録会員 出品時 自動再延長', '0', NULL, '0', NULL, '2023-09-16 15:51:41', '2023-09-16 15:51:41', NULL),
(8, '登録会員 出品時 自動再出品機能', '0', NULL, '0', NULL, '2023-09-16 15:51:41', '2023-09-16 15:51:41', NULL),
(9, '登録会員 出品時 注目のオークション機能', '0', NULL, '0', NULL, '2023-09-16 15:51:41', '2023-09-16 15:51:41', NULL),
(10, '登録会員 出品時 商品説明欄にHTMLタグ貼付けの可否', '0', NULL, '0', NULL, '2023-09-16 15:51:41', '2023-09-16 15:51:41', NULL),
(11, '登録会員 出品時 終了日時設定機能', '0', NULL, '0', NULL, '2023-09-16 15:51:41', '2023-09-16 15:51:41', NULL),
(12, '登録会員 出品時 配送方法設定', '0', NULL, '0', NULL, '2023-09-16 15:51:41', '2023-09-16 15:51:41', NULL),
(13, '登録会員 出品時 送料あとから連絡機能', '0', NULL, '0', NULL, '2023-09-16 15:51:41', '2023-09-16 15:51:41', NULL),
(14, '登録会員 出品時 着払設定機能', '0', NULL, '0', NULL, '2023-09-16 15:51:41', '2023-09-16 15:51:41', NULL),
(15, '登録会員 出品時 総合評価による入札制限機能', '0', NULL, '0', NULL, '2023-09-16 15:51:41', '2023-09-16 15:51:41', NULL),
(16, '登録会員 出品時 悪い評価の割合による制限機能', '0', NULL, '0', NULL, '2023-09-16 15:51:41', '2023-09-16 15:51:41', NULL),
(17, '登録会員 出品時 一定のキャンセル割合による制限機能', '0', NULL, '0', NULL, '2023-09-16 15:51:41', '2023-09-16 15:51:41', NULL),
(18, '登録会員　出品時　未認証入札者制限機能', '0', NULL, '0', NULL, '2023-12-27 08:49:22', '2023-12-27 08:48:53', NULL),
(19, '登録会員　出品時　匿名発送設定機能', '0', NULL, '0', NULL, '2023-12-27 08:49:43', '2023-12-27 08:49:29', NULL),
(20, '購入税', '10', '%', '10', '%', '2023-12-27 08:50:10', '2023-12-27 08:49:45', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subscription_features`
--
ALTER TABLE `subscription_features`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subscription_features`
--
ALTER TABLE `subscription_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
